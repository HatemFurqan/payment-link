<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\FavoriteTime;
use App\Models\Student;
use App\Models\Subscribe;
use App\Service\Payment\Checkout;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use function GuzzleHttp\json_decode;

class SemesterRegistrationController extends Controller
{

    private $payment_link;
    private $secret;
    private $public;

    public function __construct()
    {
        $config = config('checkoutpayment');
        $this->payment_link = $config['checkout_link'];
        $this->secret = $config['checkout_sk'];
        $this->public = $config['checkout_pk'];
    }

    public function indexOneToOne()
    {
        if(request()->query('cko-session-id')){
            $client = new Client(['base_uri' => $this->payment_link]);

            try {
                $response = $client->request('GET', '/payments/' . request()->query('cko-session-id'),
                    [
                        'headers' => [
                            'Authorization' => config('checkoutpayment.checkout_sk')
                        ]
                    ]);

                $data = json_decode($response->getBody()->getContents());

                if ($response->getStatusCode() != 404){

                    if ($data->approved){
                        session()->flash('success', __('resubscribe.The registration process has been completed successfully'));
                    }else{
                        session()->flash('error', __('resubscribe.Payment failed'));
                    }

                }else{
                    session()->flash('error', __('resubscribe.Payment failed'));
                }

                return redirect()->route('semester.indexOneToOne');
            }catch (\GuzzleHttp\Exception\ClientException $e) {
//                $response = $e->getResponse();
                session()->flash('error', __('resubscribe.Payment failed'));
                return redirect()->route('semester.indexOneToOne');
            }
        }

        $countries = Country::query()->where('lang', '=', App::getLocale())->get();
        $favorite_times_male = FavoriteTime::query()->where('section',  '=', 'male')->get();
        $favorite_times_female = FavoriteTime::query()->where('section',  '=', 'female')->get();
        return view('one-to-one', ['countries' => $countries, 'favorite_times_male' => $favorite_times_male , 'favorite_times_female' => $favorite_times_female]);
    }

    public function getStudentInfo()
    {
        $student = Student::query()
            ->where('serial_number', '=', \request()->std_number)
            ->where('section', '=', \request()->std_section)
            ->first();

        if (\request()->query('form_type') == 'one_to_one' && $student){
            if ($student->path != 'حفظ'){
                return response()->json(['msg' => __('one_to_one.Sorry just')], 500);
            }
        }

        if ($student){
            return response()->json(['name' => $student->name], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json(['msg' => __('resubscribe.serial number is incorrect')], 404);
    }

}
