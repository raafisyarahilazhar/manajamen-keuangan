@extends('layout.app')

@section('title')
    Laporan
@endsection

@section('content')
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Laporan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Laporan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @if (session('delete'))
      <div class="alert alert-danger alert-dismissible fade show mt-3 mb-3" role="alert">
          {{ session('delete') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th data-type="date" data-format="YYYY/DD/MM">Tanggal</th>
                    <th>Nama Produk</th>
                    <th>Jumlah (pcs)</th>
                    <th>Harga Jual</th>
                    <th>Total Harga</th>
                    <th>Modal</th>
                    <th>Keuntungan</th>
                    <th>Simpanan (5%)</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($laporans as $laporan)
                    <tr>
                        <td>{{ $laporan->tanggal }}</td>
                        <td>{{ $laporan->barang->nama_produk ?? 'Barang tidak ditemukan' }}</td>
                        <td>{{ $laporan->jumlah_terjual }}</td>
                        <td>Rp{{ number_format($laporan->barang->harga_jual ?? 0, 0, ',', '.') }}</td>
                        <td>Rp{{ number_format($laporan->total_harga, 0, ',', '.') }}</td>
                        <td>Rp{{ number_format($laporan->modal, 0, ',', '.') }}</td>
                        <td>Rp{{ number_format($laporan->keuntungan, 0, ',', '.') }}</td>
                        <td>Rp{{ number_format($laporan->simpanan, 0, ',', '.') }}</td>
                        <td class="d-flex gap-2 align-items-center">
                            <a href="#" class="text-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="/laporan/{{ $laporan->id }}" method="POST">
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