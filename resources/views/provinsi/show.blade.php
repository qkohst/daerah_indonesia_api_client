@extends('layouts.master')

@section('content')
<div class="page-wrapper">
  <!-- [ Main Content ] start -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h5>Kota/Kabupaten</h5>
          <span class="d-block m-t-5">Data Kota/Kabupaten di Provinsi {{$provinsi['nama']}}</span>
          <div class="card-header-right">
            <div class="btn-group card-option">
              <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="feather icon-more-horizontal"></i>
              </button>
              <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a>
                </li>
                <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card-body table-border-style">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Provinsi</th>
                  <th>ID Kabupaten</th>
                  <th>Nama Kabupaten</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 0; ?>
                @foreach($data_kota_kabupaten as $kota_kabupaten)
                <?php $no++; ?>
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$provinsi['nama']}}</td>
                  <td>{{$kota_kabupaten['id']}}</td>
                  <td>{{$kota_kabupaten['nama']}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- [ Main Content ] end -->
</div>
@endsection