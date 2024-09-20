@extends('layout.app')
@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


<form action ="{{ route('users.update',$user->id) }}" method= "post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="name">الاسم الأول:</label>
            <input type="text" id="name" name="name" required value="{{ $user->name }}" >
        </div>

        <div class="form-group">
            <label for="last-name">الاسم الأخير:</label>
            <input type="text" id="last-name" name="last-name" required value="{{ $user->last-name }}">
        </div>

      

        <div class="form-group">
            <label for="age"> العمر:</label>
            <input type="date" id="age" name="age" required  value="{{ $user->age }}">
        </div>

        <div class="form-group">
            <label for="phone">رقم الموبايل:</label>
            <input type="tel" id="phone" name="phone" required  value="{{ $user->phone }}">
        </div>

        <div class="form-group radio-group">
            <label>الجنس:</label>
            <div>
                <label for="male">ذكر</label>
                <input type="radio" id="male" name="gender"  required  value="{{ $user->gender }}">
            </div>
            <div>
                <label for="female">أنثى</label>
                <input type="radio" id="female" name="gender"  required  value="{{ $user->gender }}">
            </div>
        </div>

        <div class="form-group">
            <label for="location">موقع السكن:</label>
            <input type="text" id="location" name="location" required  value="{{ $user->location }}">
        </div>
       
        <div class="form-group">
            <label for="illness "> الاستشارة :</label>
            <textarea name="illness" id="illness"></textarea>
        </div>

        <button type="submit">تعديل</button>
    </form>

   

@endsection