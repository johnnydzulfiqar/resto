@extends('layouts.app', ['titlePage' => 'Transaksi', 'activePage' => 'dahsbroad-kasir'])
@section('content')
  <style>
    a:hover{
      color: black;
    }
  </style>
  <div class="container mt-5">
          <div class="col-xl-6 py-4">
                <div class="card">
                  <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                      <i class="material-icons opacity-10">summarize</i>
                    </div>
                    <div class="text-end pt-1">
                      <p class="text-sm mb-0 text-capitalize">Total Ketersedian Barang</p>
                      <h4>{{ $stok }}</h4>
                      {{-- <h4 class="mb-0 text-xl">Rp. {{ number_format($income, 2, ',', '.') }} <span class="text-md">in a day</span></h4> --}}
                    </div>
                  </div>
                  <hr class="dark horizontal my-0">
                  <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">{{ $stok_terjual }} </span>Total Barang Terjual</p>
                  </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header p-3 pt-2">
                      <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">summarize</i>
                      </div>
                      <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Harga Barang</p>
                        <h4>Rp. {{ number_format($total_aset, 2, ',', '.') }}</h4>
                        {{-- <h4 class="mb-0 text-xl">Rp. {{ number_format($income, 2, ',', '.') }} <span class="text-md">in a day</span></h4> --}}
                      </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                      <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Rp. {{ number_format($total_terjual, 2, ',', '.') }} </span>Total Barang Terjual</p>
                    </div>
                  </div>
          </div>
      </div>
  </div>
@endsection