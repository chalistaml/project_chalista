@extends('template/layout')

@section('title','About')

@section('content')
<div class="container">
  <div class="row" style="margin-top:100px;">
    <div class="col-lg-4" >
    <div class="card" style="width: 18rem;">
        <img src="{{asset('img/gbr1.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kegiatan Lomba Ekstrakulikuler Tari Ratoh Jaroe</h5>
          <p class="card-text">Ekstrakulikuler Tari Ratoh Jaroe mendapatkan Juara 1 dalam perlombaan yang diadakan ole SMAN 1 Tangerang.</p>
          <p><small class="text-muted">Last update 10 hours ago</small></p>
        </div>
      
      </div>
    </div>
    <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
        <img src="{{asset('img/gbr2.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">FANATIC 8th</h5>
          <p class="card-text">Tari Ratoh Jaroe SMK Telkom Jakarta mengadakan event lomba Tari Ratoh Jaroe khusus untuk tingkat SMP, SMA, dan sederajat se-JABODETABEK.</p>
          <p><small class="text-muted">Last update yesterday</small></p>
        </div>
      
      </div>
    </div>
    <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
        <img src="{{asset('img/gbr3.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Penampilan Pertama Tari Ratoh Jaroe'27</h5>
          <p class="card-text">Tari Ratoh Jaroe angkatan 27 tampil perdana di Acara Bakti Sosial dan Jambore SMK Telkom Jakarta 2018/2019.</p>
          <p><small class="text-muted">Last update 1 year ago</small></p>
        </div>
      
      </div>
    </div>
  </div>
</div>
<!-- <div class="row " style="margin-top:100px">
  <div class="container">
      <div class="col-lg-4" >
     
      </div>
      
      <div class="col-lg-4" >
    <div class="card" style="width: 18rem;">
      <img src="{{asset('img/gbr1.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
      </div>
    </div>
    <div class="col-lg-4" >
    <div class="card" style="width: 18rem;">
      <img src="{{asset('img/gbr1.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
      </div>
    </div>
  </div>
  
</div> -->

<!-- <div class="card mb-3 mt-3 mr-3" style="max-width: 900px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('img/gbr1.jpg') }}" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Kegiatan Lomba Ekstrakulikuler Tari Ratoh Jaroe</h5>
        <p class="card-text">Ekstrakulikuler Tari Ratoh Jaroe mendapatkan Juara 1 dalam perlombaan
        yang diadakan ole SMAN 1 Tangerang</p>
        <p class="card-text"><small class="text-muted">Last updated 5 hour ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3 mt-3 mr-3" style="max-width: 900px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('img/gbr2.jpg') }}" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">FANATIC 8th</h5>
        <p class="card-text">Tari Ratoh Jaroe SMK Telkom Jakarta mengadakan event lomba Tari Ratoh Jaroe
        khusus untuk tingkat SMP, SMA, dan sederajat se-JABODETABEK</p>
        <p class="card-text"><small class="text-muted">Last updated yesterday</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3 mt-3 mr-3" style="max-width: 900px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('img/gbr3.jpg') }}" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Penampilan Pertama Tari Ratoh Jaroe'27</h5>
        <p class="card-text">Tari Ratoh Jaroe angkatan 27 tampil perdana di Acara Bakti Sosial dan Jambore
        SMK Telkom Jakarta 2018/2019</p>
        <p class="card-text"><small class="text-muted">Last updated 1 years ago</small></p>
      </div>
    </div>
  </div>
</div> -->


@endsection