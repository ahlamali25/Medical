@extends('layout.app')
@section('content')
<form action="{{ route('doctors.store') }}" method="post">
    @csrf
 
        <label for="name">الاسم الأول:</label>
        <input type="text" id="first-name" name="name" required value="{{ old('name') }}" ><br>


        <label for="email">البريد الإلكتروني:</label>
        <input type="email" id="email" name="email" required value="{{ old('email') }}"><br>

        <label for="phone">رقم الموبايل:</label>
        <input type="tel" id="phone" name="phone" required value="{{ old('phone') }}"><br>

        <label for="specialization">التخصص:</label>
        <input type="text" id="specialization" name="specialization" required value="{{ old('specialization') }}"><br>
        <div class="form-group radio-group">
            <label>Gender:</label>
            <div>
                <label for="male">ذكر</label>
                <input type="radio" id="male" name="gender" value="male" required>
            </div>
            <div>
                <label for="female">أنثى</label>
                <input type="radio" id="female" name="gender" value="female" required>
            </div>
</div>
        <input type="submit" value="إرسال">
    </form>
    @endsection