@extends('layout.app')
@section('content')

<section class="doctor_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
         أطباءنا 
        </h2>
        <p class="col-md-10 mx-auto px-0">
        مرحبًا بكم في عيادتنا الطبية حيث نعتز بتقديم أفضل رعاية صحية لمرضانا. فريقنا الطبي يتكون من نخبة من الأطباء ذوي الخبرة والمهارة في مختلف التخصصات الطبية، والذين يسعون دائمًا لتقديم أحدث ما توصل إليه الطب من علاجات وخدمات متميزة.
        </p>
      </div>
      <div class="row">
        @foreach ($doctors as $doctor)
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              @if($doctor->gender == 'female')
                <img src="images/female.png" alt="female doctor">
              @else

<img src="images/male.png" alt="male doctor">
              @endif
            </div>
            <div class="detail-box">
              <h5>
                {{ $doctor->name }} - {{ $doctor->specialization }}
              </h5>
              <h6 class="">
                طبيب
              </h6>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <button><a href="{{ route('doctors.create') }}" class="btn">إضافة طبيب جديد</a></button>
</section>
@endsection