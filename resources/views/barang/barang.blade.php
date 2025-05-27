@extends('layout.app')

@section('title')
    Barang
@endsection

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Barang</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Data Barang</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Modal</th>
                                    <th>Harga Jual</th>
                                    <th>Jumlah (pcs)</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangs as $barang)
                                    <tr>
                                        <td>{{ $barang->nama_produk }}</td>
                                        <td>Rp{{ number_format($barang->modal, 0, ',', '.') }}</td>
                                        <td>Rp{{ number_format($barang->harga_jual, 0, ',', '.') }}</td>
                                        <td>{{ $barang->jumlah }}</td>
                                        <td>
                                            <a href="#" class="text-warning">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="#" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                                                    <i class="text-danger bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
