<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <style>

    * {
        margin: 0;
        padding: 0
    }

    html {
        height: 100%
    }

    p {
        color: grey
    }

    .btn-primary {
        background-color: #25408F !important;
        border-color: #25408F !important;
    }

    .label-time {
        margin-right: 25px !important;
    }

    .input-time {
        width: auto !important;
    }

    @if(app()->getLocale() != 'ar')
        .text-right {
            text-align: left !important;
        }
        .label-time {
            margin-left: 25px;
            margin-right: 0 !important;
        }
        .input-time {
            margin: 0 !important;
        }
    @endif

    #heading {
        text-transform: uppercase;
        color: #25408F;
        font-weight: normal
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px;
        font-family: 'Cairo', sans-serif;
    }

    #std-name {
       cursor: default !important;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    .form-card {
        text-align: left
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform input,
    #msform textarea {
        padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: 'Cairo', sans-serif;
        color: #2C3E50;
        background-color: #ECEFF1;
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #25408F;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: #25408F;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;
        float: right
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        background-color: #311B92
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        background-color: #000000
    }

    .card {
        z-index: 0;
        border: none;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: #25408F;
        margin-bottom: 15px;
        font-weight: normal;
        text-align: left
    }

    .purple-text {
        color: #25408F;
        font-weight: normal
    }

    .steps {
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right
    }

    .fieldlabels {
        color: gray;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #25408F
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 33%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f13e"
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f030"
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #msform label {
        color: black !important;
        font-weight: bold !important;
        font-family: 'Cairo', sans-serif;
    }

    #msform #checks-section label {
        color: black !important;
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #25408F
    }

    .progress {
        height: 20px
    }

    .progress-bar {
        background-color: #25408F
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }
</style>

    <style>
        .ltr-table {
            margin: auto !important;
        }
        .ltr-table tr td{
            text-align: center !important;
            font-size: 12pt;
            color: #000000;
            font-width: bold;
            padding: 5px;
        }
        @if(app()->getLocale() == 'ar')
            #msform .label-right {
                text-align: right !important;
            }
        @endif
    </style>

    {{--  checkout frame styles  --}}
    <style>*,*::after,*::before{box-sizing:border-box}html{padding:1rem;background-color:#FFF;font-family: 'Cairo', sans-serif;, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif}#payment-form{width:31.5rem;margin:0 auto}iframe{width:100%}.one-liner{display:flex;flex-direction:column}#pay-button{border:none;border-radius:3px;color:#FFF;font-weight:500;height:40px;width:100%;background-color:#13395E;box-shadow:0 1px 3px 0 rgba(19,57,94,0.4)}#pay-button:active{background-color:#0B2A49;box-shadow:0 1px 3px 0 rgba(19,57,94,0.4)}#pay-button:hover{background-color:#15406B;box-shadow:0 2px 5px 0 rgba(19,57,94,0.4)}#pay-button:disabled{background-color:#697887;box-shadow:none}#pay-button:not(:disabled){cursor:pointer}.card-frame{border:solid 1px #13395E;border-radius:3px;width:100%;margin-bottom:8px;height:40px;box-shadow:0 1px 3px 0 rgba(19,57,94,0.2)}.card-frame.frame--rendered{opacity:1}.card-frame.frame--rendered.frame--focus{border:solid 1px #13395E;box-shadow:0 2px 5px 0 rgba(19,57,94,0.15)}.card-frame.frame--rendered.frame--invalid{border:solid 1px #D96830;box-shadow:0 2px 5px 0 rgba(217,104,48,0.15)}.success-payment-message{color:#13395E;line-height:1.4}.token{color:#b35e14;font-size:0.9rem;font-family: 'Cairo', sans-serif;}@media screen and (min-width: 31rem){.one-liner{flex-direction:row}.card-frame{width:318px;margin-bottom:0}#pay-button{width:175px;margin-left:8px}}</style>

    <style>
        #payment-form {
            max-width: 100% !important;
        }
    </style>
</head>
<body>

    <div class="container-fluid">

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between flex-row-reverse">
                        <h5 class="modal-title w-100 text-center" id="exampleModalLabel">الشروط والأحكام</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="height: 250px; overflow-y: scroll;">
                        <p class="text-right">
                            محتوى الموقع
                            إن المواد الموجودة على موقع منصة الدورات والتي قد تتضمن نصوصا، وصورا، ومواد صوتية، ومرئية، وملفات للتحميل، وبرامج، ومنتجات للبيع، وغيرها من المواد (المشار إليها فيما يلي بـ “المحتوى”) تقدم لأغراض إعلامية وحسب. إن دخولك إلى موقع الدليل السعودي ، أو تحميلك، أو شراءك أيّا من محتوياته يعني موافقتك على الالتزام بشروط الاستخدام المنصوص عليها (“شروط استخدام الموقع”). فإن لم توافق على هذه الشروط، فلا يحق لك الدخول إلى موقع الدليل السعودي ولا تحميل أي من محتوياته

                            إخلاء المسؤولية
                            نحن نسعى لأن يكون محتوى موقع منصة الدورات دقيقا وموثوقاً ، غير أنه نظرا لأن معلومات هذا المحتوى جمعت من مصادر متنوعة، فإننا نقدمه لك كما هو متاح عندئذ. ونخلي مسئوليتنا تجاهك أو تجاه أي طرف آخر عن أي خطأ أو حذف من أي نوع في المحتوى، وتنكر أية ضمانات أو شروط ، صريحة أو ضمنية ، فيما يتعلق بالمحتوى أو أي أمر مرتبط بالموقع، بما ذلك ، على سبيل المثال لا الحصر ، الضمانات الضمنية أو توافر شروط عدم الانتهاك، وصلاحية العرض في السوق، والملاءمة لغرض ما
                            ان الروابط المتاحة على موقع منصة الدورات تسمح لك بالدخول إلى مواقع لاتدعمها ولا تتحكم فيها. نوفرهذه الروابط لراحتك، ونحن غير مسؤولين عما تتضمنه هذه المواقع من محتوى أو أية تعاملات تجارية. نبذل قصارى الجهد المفترض للتأكد من دقة محتوى موقع منصة الدورات . لكننا لا نستطيع ضمان هذه الدقة والشمول وعدم الانتهاك وصلاحية العرض في السوق أو الملاءمة لغرض معين. فيما يخص أية معلومات أو تعاملات تجارية متاحة على هذه الروابط. إن المواقع التي قد تفضي إليها روابط من موقعنا لا تعني تمثيل لموقعنا ولا تأييد لها. ومن ثم، فإنك المسئول عن التأكد من خلو أي موقع تختار دخوله من أي أشياء مدمرة من المحتمل وجودها كالفيروسات

                            استخدام الموقع
                            لا يحق لك إرسال أو رفع ، أو نشر ، أو نقل ، أو توزيع أي من المعلومات أو المواد الواردة على هذا الموقع منصة الدورات ، في حال: أ) إستخدامها بما يتضمن القيام بأي تصرف يؤدي إلى إساءة جنائية أو مسئولية قانونية ، أو التشجيع على ذلك.
                            ب) تضمنها لحقوق نشر ، أو أية حقوق ملكية فكرية أخرى، أو أعمال تخريبية مرتبطة بذلك، دون ترخيص من صاحب حق النشر.
                            ج) إستخدام هذا الموقع منصة الدورات بصورة تخالف القانون أو أعراف الإنترنت، أو بصورة من شأنها التأثير سلبا على استخدام الآخرين لموقع منصة الدورات أو الإنترنت، بما في ذلك إرسال أو نقل معلومات أو برامج تتضمن فيروسات أو أي مواد مدمرة

                            حقوق النشر
                            إن جميع المحتوى المنشور على موقع منصة الدورات محمي بحقوق النشر. وهذا المحتوى وحقوق النشر ملك لموقع منصة الدورات ، والشركات المزودة، وضمن سيطرتها. يسمح لك باستخدام المعلومات التي يتضمنها المحتوى أو إعادة إنتاجها ، للاستخدام الشخصي، أو غير التجاري، أو التعليمي. ولا يسمح استخدام المحتوى أو إعادة إنتاجه، أو إذاعته، أو نشره، أو نقله دون إذن كتابي مسبق من مالك حقوق النشر لأغراض أخرى بخلاف ذلك. ولابد من التزامك بكافة إشعارات حقوق النشر، والمعلومات، والضوابط التي يتضمنها أي من محتويات موقع منصة الدورات أو المحتويات التي يتم الوصول إليها من خلاله، والحفاظ على مثل هذه الإشعارات في المحتوى

                            الخصوصية والمعلومات السرية
                            تعد سياسة الخصوصية والأمن الخاصة بموقع منصة الدورات جزء ملزما من هذه الشروط. ويمكن الاطلاع على سياسة الخصوصية والأمن على هذا الموقع

                            التعويض
                            إنك بموجب هذا، توافق على حماية، وتعويض موقع منصة الدورات ومزوديه وشركاته ذات الصلة، وإعفائها من كافة المسئوليات والتكاليف والنفقات، بما في ذلك أتعاب المحاماة، فيما يخص أية انتهاكات لهذه الشروط، تقوم بها أو يقوم بها أي مستخدمين لحسابك، أو فيما يخص استخدامك لموقع منصة الدورات ، أو قيامك بنشر أو نقل أية معلومات أو مواد أخرى على هذا الموقع، أو قيام أحد مستخدمي حسابك بأي من هذه الأمور

                            التعديلات
                            إنك بموجب هذا، توافق على حماية، وتعويض موقع منصة الدورات ومزوديه وشركاته ذات الصلة، وإعفائها ميحتفظ موقع منصة الدورات في حقه في تغيير أو إزالة أي من محتويات الموقع كليا أو جزئيا، وله كامل التصرف في ذلك، في أي وقت، دون إشعار مسبق. كما يحتفظ موقع منصة الدورات بحقه في تغيير أو تعديل أي من هذه الشروط وسياسة الخصوصية والأمن في أي وقت، دون إشعار مسبق، ويُعمل بهذه التغييرات فور نشرها على الموقع

                            شروط أخرى
                            إن شروط استخدام موقع منصة الدورات، بما في ذلك سياسة الخصوصية والأمن، وجميع المستندات المشار إليها هنا، تشكل اتفاقا بين موقع منصة الدورات معك فيما يخص استخدامك للموقع. إن فشل الموقع في المطالبة الصارمة أو فرض تطبيق أي شرط من شروط هذه الاتفاقية يجب ألا يفسر على أنه تنازل عن أي شرط أو حق. في حال أصدرت إحدى المحاكم المختصة حكمها بإلغاء أحد الشروط أو إبطال العمل به، أو فرض تطبيقه، فإن ذلك لا يؤثر على باقي الشروط الواردة هنا. ويعد هذا الاتفاق خاضعا لقوانين المملكة العربية السعودية ويفسر وفقا لها. وقد طلب أطراف هذه الشروط أن تصدر هي وجميع المستندات ذات الصلة باللغتين العربية والإنجليزية



                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <img src="{{ asset('images/logo.jpg') }}" style="width: 250px; margin: auto; margin-bottom: 15px;" alt="LOGO">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary w-50 m-auto" data-toggle="modal" data-target="#exampleModal">
                        الشروط والاحكام
                    </button>

                    <h2 id="heading">"(كفالة إعداد عدد 103 معلمي ومعلمات القاعدة النورانية والقرآن الكريم)"</h2>

                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form id="msform" action="{{ route('semester.subscribeOneToOne') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <h4>الشيخ صالح بن ناصر السريع</h4>
                        <h5>المبلغ: $12,490</h5>
                        <br>

                        <input type="hidden" name="token_pay" id="token_pay">
                    </form>

                    <form id="payment-form" method="POST" action="https://merchant.com/charge-card">
                        <div class="one-liner" style="flex-direction: column;justify-content: space-between;align-items: center;height: 100px;">
                            <div class="card-frame"></div>
                            <button class="btn btn-primary" id="pay-button" disabled>
                                {{ __('resubscribe.Checkout') }}
                                <i class="fas fa-spinner fa-spin d-none"></i>
                            </button>
                        </div>
                        <p class="error-message text-center"></p>
                        <p class="success-payment-message text-center"></p>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
{{--                    <form id="payment-form" method="POST" action="https://merchant.com/charge-card">--}}
{{--                        <div class="one-liner" style="flex-direction: column;justify-content: space-between;align-items: center;height: 100px;">--}}
{{--                            <div class="card-frame"></div>--}}
{{--                            <button class="btn btn-primary" id="pay-button" disabled>--}}
{{--                                إتمام الدفع--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        <p class="error-message text-center"></p>--}}
{{--                        <p class="success-payment-message text-center"></p>--}}
{{--                    </form>--}}
                </div>
                <div class="modal-footer d-none">
                    <button type="button" class="d-none" id="close-modal" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>

    <!-- add frames script -->
<script src="https://cdn.checkout.com/js/framesv2.min.js"></script>
<script src="{{ asset('app.js') }}?v=63.61"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function(){

            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;

            current_fs = $(this).parent();

            if(validate(current_fs)){
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();

                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now) {

                        // for making fieldset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({'opacity': opacity});
                    },
                    duration: 500
                });
                setProgressBar(++current);
            }
            if($('#checkout_gateway').is(':checked')){
                $("#payment-form").removeClass('d-none');
            }
        });

        $(".previous").click(function(){

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                // for making fieldset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({'opacity': opacity});
                },
                duration: 500
            });
            setProgressBar(--current);

            $("#payment-form").addClass('d-none');

        });

        function setProgressBar(curStep){
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width",percent+"%")
        }

        $(".submit").click(function(){
            return false;
        })

        $(document).on('click', 'form #apply_coupon_btn', function (e) {
            $('#hidden_apply_coupon').val($('form #apply_coupon').val());
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('apply.coupon') }}?std_number=' + $('form #std-number').val() + '&code=' + $('form #apply_coupon').val(),
                success: function (data) {
                    $('#coupon-description').html("{{ __('resubscribe.discount total is') }}" + data.discount + "$ " + "{{ __('resubscribe.and price after discount is') }}" + data.price_after_discount + "$ ");
                },
                error: function (data){
                    $('#coupon-description').html(data.responseJSON.msg);
                }
            });
        });

        $(document).on('click', 'form #std-number-search', function (e) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('semester.registration.getStudentInfo') }}?std_number=' + $('form #std-number').val() + '&std_section=' + $('form #std-section').val() + '&form_type=one_to_one',
                success: function (data) {
                    $('form #std-name').val(data.name);
                    $('form #std-name').css('border-color', 'green');
                    $('form #std-name-section .alert').addClass('d-none');
                },
                error: function (data){
                    $('form #std-name').val('');
                    $('form #std-name').attr("placeholder", data.responseJSON.msg);
                    $('form #std-name').attr("title", data.responseJSON.msg);
                    $('form #std-name').css('border-color', 'red');
                    $('form #std-name-section .alert').html(data.responseJSON.msg);
                    $('form #std-name-section .alert').removeClass('d-none');
                }
            });
        });

        $(document).on('click', 'form #hsbc', function (e) {

            if($('#agree-terms').is(':checked')){
                $("#hsbc-section-elements").removeClass('d-none');
                $("#hsbc-section-elements").show();
                $("#hsbc-section-elements input").prop('required',true);

                $("#payment-form").addClass('d-none');

                $("#submit-main-form").removeAttr('disabled');
                $("#submit-main-form").removeClass('btn-secondary');
                $("#submit-main-form").addClass('btn-primary');
                $("#submit-main-form").removeClass('d-none');
            }else{
                e.preventDefault();
                alert('يجب عليك الموافقة على صحة البيانات السابقة')
            }
        });

        $(document).on('click', 'form #checkout_gateway', function (e) {

            if($('#agree-terms').is(':checked')){
                $("#hsbc-section-elements").addClass('d-none');
                $("#hsbc-section-elements").hide();
                $("#hsbc-section-elements input").removeAttr('required');

                $("#payment-form").removeClass('d-none');
                $("#submit-main-form").addClass('d-none');

            }else{
                e.preventDefault();
                alert('يجب عليك الموافقة على صحة البيانات السابقة')
            }

        });

        function validate(current_fs) {
            let inputs = current_fs.find("input[required]");
            let radioBoxes = current_fs.find('input[type=radio]');

            flag = true;

            for (index = 0; index < radioBoxes.length; ++index) {
                if (!radioBoxes[index].checked){
                    $(radioBoxes[index]).css('border-color', 'red');
                    flag = false;
                }else{
                    $(radioBoxes[index]).css('border-color', 'green');
                    flag = true;
                    break;
                }

            }

            if(!flag){
                $('.error-msg-times').remove();
                $('#confirm-email').append(`<div class="alert alert-danger error-msg-times" role="alert">
                                              {{ __('one_to_one.please select best time') }}
                                            </div>`);
            }else{
                $('.error-msg-times').remove();
            }

            for (index = 0; index < inputs.length; ++index) {
                if (inputs[index].value == null || inputs[index].value == ""){
                    $(inputs[index]).css('border-color', 'red');
                    flag = false;
                }else{
                    $(inputs[index]).css('border-color', 'green');
                }

                if ($(inputs[index]).attr('id') == 'std-email' || $(inputs[index]).attr('id') == 'std-email-conf'){
                    if ($('#std-email').val() == $('#std-email-conf').val() &&
                        $('#std-email').val() != "" &&
                        $('#std-email').val() != null &&
                        $('#std-email-conf').val() != "" &&
                        $('#std-email-conf').val() != null
                    ){
                        $('#std-email-conf').css('border-color', 'green');
                        $('#std-email').css('border-color', 'green');
                    }else{
                        $('#std-email-conf').css('border-color', 'red');
                        $('#std-email').css('border-color', 'red');
                        flag = false;
                    }

                }

            }

            return flag;
        }

        $(document).on('change', 'form#msform input[required]', function (e) {
            if ($(this).val() != "" && $(this).val() != null){
                $(this).css('border-color', 'green');
            }
        });

        $(document).on('change', '#std-section', function (e) {
            $('form#msform input[type=radio]').prop('checked', false);

            if ($(this).val() == "1") {
                $('#favorite_times_male').removeClass('d-none');
                $('#favorite_times_male').addClass('d-block');
                $('#favorite_times_female').removeClass('d-block');
                $('#favorite_times_female').addClass('d-none');
            }

            if ($(this).val() == "2") {
                $('#favorite_times_female').removeClass('d-none');
                $('#favorite_times_female').addClass('d-block');
                $('#favorite_times_male').removeClass('d-block');
                $('#favorite_times_male').addClass('d-none');
            }
        });

    });
</script>

</body>
</html>
