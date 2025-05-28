@extends('layout.app')

@section('title')
    Input Penjualan
@endsection

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Input Data Penjualan</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Input Data Penjualan</li>
                </ol>
            </nav>
        </div>

         @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3 mb-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body py-4">
                        <!-- Horizontal Form -->
                            <form action="/create-laporan" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="namaProduk" class="col-sm-2 col-form-label">Nama Produk</label>
                                    <div class="col-sm-10">
                                        <select name="barang_id" class="form-select" aria-label="Default select example" required>
                                            <option value="" disabled selected>-- Pilih Produk --</option>
                                            @foreach($barangs as $barang)
                                                <option value="{{ $barang->id }}">{{ $barang->nama_produk }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Barang</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="jumlah" name="jumlah_terjual">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                        <!-- End Horizontal Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection