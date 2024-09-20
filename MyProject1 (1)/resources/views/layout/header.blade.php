<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
  


      <div class="container"> 
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <!-- <a class="navbar-brand" href="index.html">
            <span>
              طبيبنا
            </span>
          </a> -->
          <img src="{{ asset ('images/logo.png') }}" alt="" class="logo">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('homes.index') }}">الصفحة الرئيسية </a>
              </li>
             
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('register.index') }}">التسجيل<span class="sr-only">(current)</span> </a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="{{route('doctors.index')}}">الأطباء</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('users.index')}}">الاستشارة الطبية</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href=" "id="example" >Doctors</a>
              </li> -->
              
             
            </ul>
          </div>
        </nav>
      </div>
    
    </header>
    <!-- end header section -->
  </div>