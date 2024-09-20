@extends('layout.app')
@section('content')
<form action="{{ route('doctors.update,$doctor->id) }}" method="post" enctype="multipart/form-data" >
@csrf
@method('PUT')
        <label for="name">الاسم الأول:</label>
        <input type="text" id="first-name" name="first-name" required value="{{ $doctor->first-name }}">

        <label for="last-name">الاسم الأخير:</label>
        <input type="text" id="last-name" name="last-name" required value="{{ $doctor->last-name }}">

        <label for="email">البريد الإلكتروني:</label>
        <input type="email" id="email" name="email" required value="{{ $doctor->email }}">

        <label for="phone">رقم الموبايل:</label>
        <input type="tel" id="phone" name="phone" required value="{{ $doctor->phone}}">

        <label for="specialization">التخصص:</label>
        <input type="text" id="specialization" name="specialization" required value="{{ $doctor->specialization }}">

        <button type="submit">تعديل</button>
    </form>
    @endsection