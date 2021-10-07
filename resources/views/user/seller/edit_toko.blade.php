@extends('admin.layout.app')
@section('content')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
          <i class="mdi mdi-home"></i>
        </span> Toko Saya </h3>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
          </li>
        </ul>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
        
                <form method="POST" action="{{ route('seller.edit_toko.action') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-grup">
                        <label for="">Nama Toko</label>
                        <input type="text" value="{{$toko->nama }}"name="nama" id="" placeholder="Masukan Nama Tokomu!" class="form-control">
                        </select>
                    </div>
                    <div class="form-grup">
                        <label for="">Alamat Lengkap</label>
                        <input type="text" value="{{$toko->alamat }}" name="alamat" id="" placeholder="Masukan Alamat Tokomu!" class="form-control">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Upload Foto Tokomu!</label>
                        <input type="file" name="foto" id="" class="form-control">
                    </div>
                    <spaN>Maximum Upload File 2MB</span>
                    <div class="mt-4 text-right">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection