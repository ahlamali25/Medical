@extends('layout.app')
@section('content')
<div class="login-container">
        <div class="login-box">
            <h2>تسجيل الدخول</h2>
            <form action= "{{ route('login') }}" method= "post">
            @csrf
                <div class="input-group">
                    <label for="email-phone">البريد الإلكتروني أو رقم الهاتف</label>
                    <input type="text" id="email-phone" name="email-phone" required>
                </div>
                <div class="input-group">
                    <label for="password">كلمة المرور</label>
                    <input type="password" id="password" name="password" required>
                   
                </div>
                <button type="submit" class="login-btn">تسجيل الدخول</button>
            </form>
            
           
            <div class="signup-link">
               
                <p>هل أنت طبيب؟<a href="#">تسجيل طبيب جديد</a></p>
            </div>
        </div>
    </div>
    @endsection