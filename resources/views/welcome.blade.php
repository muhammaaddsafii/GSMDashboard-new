@extends('layout/masterdashboard')

@section('container')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Selamat Datang, {{ Auth::user()->name }} !</h3>
            <h6 class="font-weight-normal mb-0">Selamat Datang di Dashboard Admin E-Learning <a href="https://sekolahmenyenangkan.or.id/" target="_blank" class="text-primary">Gerakan Sekolah Menyenangkan</a></h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4 h-50 grid-margin stretch-card">
        <div class="card mb-4" style="background-color: #a7d1d0">
          <div class="card-people">
            <img src="{{asset('/assets/images/dashboard/people.png')}}" alt="people">
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale p-2" style="background-image:url('assets/images/dashboard/SchoolGSMBg.png');background-size:cover; background-position: center;";>
              <div class="card-body">
                <p class="mb-4 font-weight-bold">Sekolah Model GSM</p>
                <p class="fs-30 mb-2">4006</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue p-2" style="background-image:url('assets/images/dashboard/JejaringBg.png');background-size:cover; background-position: center;";>
              <div class="card-body">
                <p class="mb-4 font-weight-bold">Sekolah Jejaring GSM</p>
                <p class="fs-30 mb-2">61344</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-light-blue p-2" style="background-image:url('assets/images/dashboard/MentorBg.png');background-size:cover; background-position: center;";>
              <div class="card-body">
                <p class="mb-4 font-weight-bold">Mentor</p>
                <p class="fs-30 mb-2">34040</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-light-danger p-2" style="background-image:url('assets/images/dashboard/UserBg.png');background-size:cover; background-position: center;";>
              <div class="card-body">
                <p class="mb-4 font-weight-bold">User</p>
                <p class="fs-30 mb-2">47033</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card position-relative">
          <div class="card-body">
            <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                      <div class="ml-xl-4 mt-3">
                      <p class="card-title">Peta Sekolah GSM</p>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31628.036762503445!2d110.36018364165041!3d-7.736177387458326!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa7b1c10be1c88d90!2sGerakan%20Sekolah%20Menyenangkan!5e0!3m2!1sen!2sid!4v1623210534186!5m2!1sen!2sid" width="970" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                      </div>  
                      </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection