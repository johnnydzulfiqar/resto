@extends('layouts.app', ['titlePage' => 'Transaksi', 'activePage' => 'transaksi-kasir'])

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Transactions table</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="text-end px-4">
              <a href="{{ route('kasir.transaction.create') }}"><button type="button" class="text-uppercase btn btn-sm btn-primary">Create</button></a>
            </div>
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Pelanggan</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Menu</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Jumlah</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Total</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Pegawai</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7" colspan="2">Waktu</th>
                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @if (count($datas) < 1)
                    <tr>
                      <td colspan="8" class="text-center">No Transaksi Recordings</td>
                    </tr>
                  @else
                    @foreach ($datas as $data)
                      <tr>
                        <td class="text-secondary text-center" style="width: 2px">{{ ++$i }}</td>
                        <td>
                          <p class="text-xl text-secondary mb-0">{{ $data->nama_pelanggan }}</p>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $data->menu->nama_menu }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0">{{ $data->jumlah }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0">Rp. {{ number_format($data->total_harga, 0,',','.') }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0">@isset($data->pegawai->name) {{ $data->pegawai->name }} @else - @endisset</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0">{{ $data->created_at->format('D, d M Y') }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xl text-secondary mb-0">{{ $data->created_at->format('H:i') }}</p>
                        </td>
                        <td class="align-middle text-center">
                          <a href="{{ route('kasir.transaction.edit', $data->id) }}" class="text-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit data">
                            Edit
                          </a>
                          |
                          <a href="#" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Hapus data" onclick="deleteModal('{{ $data->id }}')">
                            Hapus
                          </a>
                          <div class="text-end px-4">
                            <a href="{{ route('kasir.transaction.show', $data->id) }}"><button type="button" class="text-uppercase btn btn-sm btn-primary">Struk</button></a>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  @endif
                </tbody>
              </table>
              <div class="text-center m-4" id="data-link">
                {!! $datas->onEachSide(5)->links() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('_partials.delete')
@endsection

@push('js')
  <script>
    async function deleteModal(id) {
      $("#delete-modal").modal('show')
      $("#this-content").html(`Following Transaction, for Real`)
      $("#deleteData").attr('action', `https://du68market.my.id/public/kasir/transaction/${id}`)
    }
  </script>
@endpush