@extends('layouts.master')

@section('content')
<div class="page-wrapper">
  <!-- [ breadcrumb ] start -->
  <div class="page-header">
    <div class="page-block">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="page-header-title">
            <h5>Home</h5>
          </div>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#!">Analytics Dashboard</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- [ breadcrumb ] end -->
  <!-- [ Main Content ] start -->
  <div class="row">

    <!-- product profit start -->
    <div class="col-xl-3 col-md-6">
      <div class="card prod-p-card bg-c-red">
        <div class="card-body">
          <div class="row align-items-center m-b-25">
            <div class="col">
              <h6 class="m-b-5 text-white">Provinsi</h6>
              <h3 class="m-b-0 text-white">{{$count_provinsi}}</h3>
            </div>
            <div class="col-auto">
              <i class="fas fa-money-bill-alt text-c-red f-18"></i>
            </div>
          </div>
          <p class="m-b-0 text-white">Provinsi Di Indonesia</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card prod-p-card bg-c-blue">
        <div class="card-body">
          <div class="row align-items-center m-b-25">
            <div class="col">
              <h6 class="m-b-5 text-white">Kota/Kabupaten</h6>
              <h3 class="m-b-0 text-white">15,830</h3>
            </div>
            <div class="col-auto">
              <i class="fas fa-database text-c-blue f-18"></i>
            </div>
          </div>
          <p class="m-b-0 text-white">Kota/Kabupaten Di Indonesia</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card prod-p-card bg-c-green">
        <div class="card-body">
          <div class="row align-items-center m-b-25">
            <div class="col">
              <h6 class="m-b-5 text-white">Kecamatan</h6>
              <h3 class="m-b-0 text-white">$6,780</h3>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign text-c-green f-18"></i>
            </div>
          </div>
          <p class="m-b-0 text-white">Kecamatan Di Indonesia</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card prod-p-card bg-c-yellow">
        <div class="card-body">
          <div class="row align-items-center m-b-25">
            <div class="col">
              <h6 class="m-b-5 text-white">Desa/Kelurahan</h6>
              <h3 class="m-b-0 text-white">6,784</h3>
            </div>
            <div class="col-auto">
              <i class="fas fa-tags text-c-yellow f-18"></i>
            </div>
          </div>
          <p class="m-b-0 text-white">Desa/Kelurahan Di Indonesia</p>
        </div>
      </div>
    </div>
    <!-- product profit end -->
  </div>

  <!-- [ Main Content ] end -->
</div>
@endsection