@extends('layouts.master')

@section('content')
<div class="page-wrapper">
  <!-- [ Main Content ] start -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h5>Provinsi</h5>
          <span class="d-block m-t-5">Data Provinsi di Indonesia</span>
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
                  <th>ID Provinsi</th>
                  <th>Nama Provinsi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 0; ?>
                @foreach($data_provinsi as $provinsi)
                <?php $no++; ?>
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$provinsi['id']}}</td>
                  <td>{{$provinsi['nama']}}</td>
                  <td>
                    <a href="{{ route('provinsi.show', $provinsi['id']) }}" class="btn btn-sm btn-info"><i class="feather icon-eye"></i> Lihat Data Kabupaten</a>
                  </td>
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