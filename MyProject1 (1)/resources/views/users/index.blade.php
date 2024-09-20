@extends('layout.app')

@section('content')

<section class="user_section layout_padding">

<div class="one">
    <div class="container">
        <h2>عرض بيانات المستخدمين</h2>

        <table>
            <thead>
                <tr>
                    <th>الاسم الأول</th>
                    <th>الاسم الأخير</th>
                    <th>رقم الهاتف</th>
                    <th>العمر</th>
                    <th>الجنس</th>
                    <th>المرض</th>
                    <th>الموقع</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->illness }}</td>
                    <td>{{ $user->location }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 </div>
 <button class="btn2"><a href="{{ route('users.create') }} ">استشارة </a></button>
 </section>
@endsection