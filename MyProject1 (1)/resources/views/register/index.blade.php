@extends('layout.app')
@section('content')

  
      
   

<div class="container">
    
    <form action="" method="post">
        @csrf
        <div class="input-group">
            <label for="name">الاسم</label>
            <input type="text" id="first_name" name="name" required>
        </div>
        <div class="input-group">
            <label for="last-name">اسم العائلة</label>
            <input type="text" id="last_name" name="last-name" required>
        </div>
        <div class="input-group">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="password">كلمة السر</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">تسجيل</button>
    </form>
</div>



    @endsection