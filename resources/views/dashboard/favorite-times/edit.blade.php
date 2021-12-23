@extends('dashboard.layouts.master')

@section('content')

    @include('dashboard.partials.errors')
    @include('dashboard.partials.success')

    <form class="form" method="POST" action="{{ route('dashboard.favorite-times.update', $favorite_time->id) }}">
        @csrf
        @method('PUT')

        <div class="form-body">
            <h4 class="form-section"><i class="ft-user"></i> تعديل الوقت</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title_ar">التوقيت باللغة العربية</label>
                        <input type="text" id="title_ar" class="form-control" placeholder="التوقيت باللغة العربية" name="title_ar" value="{{ old('title_ar', $favorite_time->getTranslation('title', 'ar')) }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title_en">التوقيت باللغة الانجليزية</label>
                        <input type="text" id="title_en" class="form-control" placeholder="التوقيت باللغة الانجليزية" name="title_en" value="{{ old('title_ar', $favorite_time->getTranslation('title', 'en')) }}" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="title_en">القسم</label>
                        <select name="section" id="" class="form-control select2">
                            <option value="male" {{ $favorite_time->section == 'male' ? 'selected' : '' }}>بنين</option>
                            <option value="female" {{ $favorite_time->section == 'female' ? 'selected' : '' }}>بنات</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="la la-check-square-o"></i> تحديث
            </button>
            <button type="reset" class="btn btn-warning mr-1">
                <i class="ft-x"></i> إلغاء
            </button>
        </div>

    </form>

@endsection
