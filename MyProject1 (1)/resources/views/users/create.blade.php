@extends('layout.app')
@section('content')
    <div class="container mt-5">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
    </div>
        @endif
    <form action ="{{ route('users.store') }}" method= "post" enctype="multipart/form-data">
         @csrf
        <div class="form-group">
            <label for="name">الاسم الأول:</label>
            <input type="text" id="name" name="name" required  >
        </div>

        <div class="form-group">
            <label for="last-name">الاسم الأخير:</label>
            <input type="text" id="last-name" name="last-name" required  >
        </div>

        

        <div class="form-group">
            <label for="age">العمر :</label>
            <input type="date" id="dob" name="age" required value="{{ old('age') }}" >
        </div>

        <div class="form-group">
            <label for="phone">رقم الموبايل:</label>
            <input type="tel" id="phone" name="phone" required value="{{ old('phone') }}" >
        </div>

        <div class="form-group radio-group">
            <label>الجنس:</label>
            <div>
                <label for="male">ذكر</label>
                <input type="radio" id="male" name="gender"  required value="{{ old('gender') }}" >
            </div>
            <div>
                <label for="female">أنثى</label>
                <input type="radio" id="male" name="gender"  required  value="{{ old('gender') }}" >
            </div>
        </div>

        <div class="form-group">
            <label for="location">موقع السكن:</label>
            <input type="text" id="location" name="location" required value="{{ old('location') }}" >
        </div>
       
        <div class="form-group">
            <label for=" illness"> الاستشارة :</label>
        <textarea name="illness" id="illness"></textarea>
        </div>
        <button type="submit">ارسال</button>
       
    </form>

   

@endsection