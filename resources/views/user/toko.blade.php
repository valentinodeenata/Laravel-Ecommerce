@extends('user.app')
@section('content')
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Daftar Toko</strong></div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="{{ route('user.actionbuattoko') }}">
                            @csrf
                            <div class="form-grup">
                                <label for="">Nama Toko</label>
                                <input type="text" name="nama" id="" placeholder="Masukan Nama Tokomu!" class="form-control">
                                </select>
                            </div>
                            <div class="form-grup">
                                <label for="">Alamat Lengkap</label>
                                <input type="text" name="alamat" id="" placeholder="Masukan Alamat Tokomu!" class="form-control">
                                </select>
                            </div>
                            <div class="mt-4 text-right">
                                <button type="submit" class="btn btn-primary">Buat Toko</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>
</div>
@endsection