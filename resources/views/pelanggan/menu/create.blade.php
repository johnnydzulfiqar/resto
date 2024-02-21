@extends('layouts.customer', ['titlePage' => 'Buy'])

@section('content')
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } body{background: #f5f5f5}.rounded{border-radius: 1rem}.nav-pills .nav-link{color: #555}.nav-pills .nav-link.active{color: balck}input[type="radio"]{margin-right: 5px}.bold{font-weight:bold}
                                </style>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Buy {{ $selected_menu }} Menu</h6>
            </div>
          </div>
          <div class="card-body px-4 pb-2">
            @include('_partials.alert-error')
            <form class="form" action="{{ route('pelanggan.store-menu') }}" method="post">
              @csrf
                <input type="hidden" name="nama_pelanggan" value="{{ Auth::user()->name }}">

                <div id="list-menu">
                  <div class="row justify-content-center">
                    <div class="col-md-5">
                      <div class="my-3">
                        <label class="form-label">Menu</label>
                        <div class="form-group input-group input-group-outline @error('pesan[0][menu]') has-danger @enderror">
                          <select class="select2bs4 select-count disabled" name="pesan[0][menu]" id="pesan-0-menu" required>
                            @foreach ($menus as $menu)
                              <option value="{{ $menu->id }}" {{ ($selected_menu == $menu->nama_menu) ? 'selected="selected"' : '' }} data-id="0" data-menu-id="{{ $menu->id }}" data-harga="{{ $menu->harga }}">{{ $menu->nama_menu }}</option>
                            @endforeach
                          </select>
                        </div>
                        @error('pesan.0.menu')
                          <div id="menu-error" class="error text-danger pl-3" for="menu" style="display: block;">
                            <small>{{ $errors->first('pesan.0.menu') }}</small>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="my-3">
                        <label class="form-label">Jumlah</label>
                        <div class="input-group input-group-outline @error('pesan[0][jumlah]') has-danger @enderror">
                          <input type="number" value="{{ (old('pesan[0][jumlah]')) ? old('pesan[0][jumlah]') : '1' }}" min="1" name="pesan[0][jumlah]" id="pesan-0-jumlah" placeholder="1" class="form-control jumlah-count" data-id="0"
                          @foreach ($menus as $menu)
                            @if ($selected_menu == $menu->nama_menu)
                            data-menu-id="{{ $menu->id }}" data-harga="{{ $menu->harga }}"
                            @endif
                          @endforeach required>
                        </div>
                        @error('pesan.0.jumlah')
                          <div id="jumlah-error" class="error text-danger pl-3" for="jumlah" style="display: block;">
                            <small>{{ $errors->first('pesan.0.jumlah') }}</small>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="my-3">
                        <label class="form-label">Total Harga</label>
                        <div class="input-group input-group-outline">
                          <input type="text" value="{{ old('pesan[0][total_harga]') }}" id="pesan-0-total" name="pesan[0][total_harga]" class="form-control total" required readonly>
                        </div>
                        @error('pesan.0.total_harga')
                          <div id="total_harga-error" class="error text-danger pl-3" for="total_harga" style="display: block;">
                            <small>{{ $errors->first('pesan.0.total_harga') }}</small>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="my-3">
                        <label class="form-label">Gambar</label>
                        <div class="input-group input-group-outline">
                          <img class="card-img-top" src="{{ asset($menu->foto) }}" style="object-fit: cover;" height="100" width="100" alt="Card image cap" id="image">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="my-3">
                        <label class="form-label">Add Menu</label>
                        <div class="input-group input-group-outline">
                          <button class="btn btn-primary text-md" type="button" onclick="addMenu()" style="border-radius: 100%">+</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="container py-5">
                    <!-- For demo purpose -->
                    <div class="row mb-4">
                        <div class="col-lg-8 mx-auto text-center">
                            <h1 class="display-6">Metode Pembayaraan</h1>
                        </div>
                    </div> <!-- End -->
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="card ">
                                <div class="card-header">
                                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                        <!-- Credit card form tabs -->
                                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                            <li class="nav-item" value="1" > <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Gofood </a> 
                                              <input type="text" name="metode" class="form-control" id="metode" hidden value="Gofood">
                                            </li>
                                            <li class="nav-item" value="2"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> QRIS </a> 
                                              <input type="text" name="metode" class="form-control" id="metode" hidden value="QRIS">
                                            </li>
                                            <li class="nav-item" value="3"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Transfer </a> 
                                              <input type="text" name="metode" class="form-control" id="metode" hidden value="Bank">
                                            </li>
                                            <li class="nav-item" value="4"> <a data-toggle="pill" href="#tunai" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Tunai </a> 
                                              <input type="text" name="metode" class="form-control" id="metode" hidden value="Tunai">
                                            </li>
                                        </ul>
                                    </div> <!-- End -->
                                    <!-- Credit card form content -->
                                    <div class="tab-content">
                                        <!-- credit card info-->
                                        <div id="credit-card" class="tab-pane fade show active pt-3">
                                            <form role="form" onsubmit="event.preventDefault()">
                                                    <input type="text" name="metode" class="form-control" id="metode" hidden value="Gofood">
                                                <div class="form-group"> <label for="username">
                                                        <h6>No Akun Gofood</h6>
                                                    </label> <input type="text" name="username" placeholder="No Akun Gofood"  class="form-control "> </div>
                                                    <div class="form-group"> <label for="cardNumber">
                                                        <h6>No Verifikasi</h6>
                                                    </label>
                                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="No Verifikasi" class="form-control " >
                                                        <div class="input-group-append">  </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="card-footer"> 
                                                  {{-- <button type="button" class="subscribe btn btn-primary btn-block shadow-sm" id="button"> Confirm Payment </button> --}}
                                            </form>
                                        </div>
                                    </div> <!-- End -->
                                    <!-- Paypal info -->
                                    <div id="paypal" class="tab-pane fade pt-3">
                                        <input type="text" name="metode" class="form-control" id="metode" hidden value="QRIS">
                                        <h6 class="pb-2">Pembayaraan QRIS</h6>
                                        <img class="card-img-top" src="https://cdn.ttgtmedia.com/rms/misc/qr_code_barcode.jpg" height="350" width="350" alt="Card image cap">
                                        <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                                    </div> <!-- End -->
                                    <!-- bank transfer info -->
                                    <div id="net-banking" class="tab-pane fade pt-3">
                                      <input type="text" name="metode" class="form-control" id="metode" hidden value="Bank">
                                        <div class="form-group "> <label for="Select Your Bank">
                                                <h6>Select your Bank</h6>
                                            </label> <select class="form-control" id="ccmonth">
                                                <option value="" selected disabled>--Please select your Bank--</option>
                                                <option>BCA</option>
                                                <option>BNI</option>
                                                <option>Mandiri</option>
                                            </select> </div>
                                        <div class="form-group">
                                            {{-- <p> <button type="button" class="btn btn-primary " id="button"><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p> --}}
                                        </div>
                                        <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                                    </div> <!-- End -->
                                    <div id="tunai" class="tab-pane fade pt-3">
                                      <input type="text" name="metode" class="form-control" id="metode" hidden value="Tunai">
                                        <div class="form-group">
                                            {{-- <p> <button type="button" class="btn btn-primary " id="button"><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p> --}}
                                        </div>
                                        <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                                    </div> <!-- End -->
                                    <!-- End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                  <div class="col-md-2 col-6">
                    <div class="my-3">
                      <label class="form-label">Total Bayar</label>
                      <div class="input-group input-group-outline">
                        <input type="text" value="{{ old('total_bayar') }}" id="total_bayar" name="total_bayar" class="form-control" readonly>
                      </div>
                    </div>
                  </div>
                </div>

              <div class="text-end">
                <button type="submit" class="text-uppercase btn btn-primary">Buy</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
    <script>
      $(function() {

      })

      var i = 0;

      function addMenu() {
        ++i
        $('#list-menu').append(`
                  <div class="row justify-content-center menu" id="list-trans-${i}">
                    <div class="col-md-5">
                      <div class="my-3">
                        <label class="form-label">Menu</label>
                        <div class="form-group input-group input-group-outline @error('pesan[${i}][menu]') has-danger @enderror">
                          <select class="form-control select2bs4 select-count" name="pesan[${i}][menu]" id="pesan-${i}-menu" required>
                            <option value="" selected></option>
                            @foreach ($menus as $menu)
                              <option value="{{ $menu->id }}" {{ (old('pesan[${i}][menu]') == $menu->nama_menu) ? 'selected="selected"' : '' }}data-id="${i}" data-menu-id="{{ $menu->id }}" data-harga="{{ $menu->harga }}">{{ $menu->nama_menu }}</option>
                            @endforeach
                          </select>
                        </div>
                        @error('pesan.${i}.menu')
                          <div id="menu-error" class="error text-danger pl-3" for="menu" style="display: block;">
                            <small>{{ $errors->first('pesan.${i}.menu') }}</small>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="my-3">
                        <label class="form-label">Jumlah</label>
                        <div class="input-group input-group-outline @error('pesan[${i}][jumlah]') has-danger @enderror">
                          <input type="number" value="{{ (old('pesan[${i}][jumlah]')) ? old('pesan[${i}][jumlah]') : '1' }}" min="1" name="pesan[${i}][jumlah]" id="pesan-${i}-jumlah" placeholder="1" class="form-control jumlah-count" required>
                        </div>
                        @error('pesan.${i}.jumlah')
                          <div id="jumlah-error" class="error text-danger pl-3" for="jumlah" style="display: block;">
                            <small>{{ $errors->first('pesan.${i}.jumlah') }}</small>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="my-3">
                        <label class="form-label">Total Harga</label>
                        <div class="input-group input-group-outline">
                          <input type="text" value="{{ old('pesan[${i}][total_harga]') }}" id="pesan-${i}-total" name="pesan[${i}][total_harga]" class="form-control total" required readonly>
                        </div>
                        @error('pesan.${i}.total_harga')
                          <div id="total_harga-error" class="error text-danger pl-3" for="total_harga" style="display: block;">
                            <small>{{ $errors->first('pesan.${i}.total_harga') }}</small>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="my-3">
                        <label class="form-label">Remove</label>
                        <div class="input-group input-group-outline">
                          <button class="btn btn-primary text-md remove-trans" type="button" data-id="${i}" style="border-radius: 100%">-</button>
                        </div>
                      </div>
                    </div>
                  </div>`)
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })
      }

      function totalBayar() {
        var sum = 0;
        $('.total').each(function(){
            sum += parseFloat(this.value);
        });
        $('#total_bayar').val(sum)
      }
        
      $(document).on('click', '.remove-trans', function () {
        var id = $(this).attr('data-id')
        $(`#list-trans-${id}`).remove()
        totalBayar()
      });

      $(document).on('change', '.select-count', function () {
        var element = $(this).find('option:selected'); 
        var harga = element.attr("data-harga"); 
        var menu_id = element.attr("data-menu-id"); 
        var id = element.attr("data-id"); 
        var id_jumlah = `#pesan-${id}-jumlah`;
        $(id_jumlah).attr('data-harga', harga)
        $(id_jumlah).attr('data-menu-id', menu_id)
        $(id_jumlah).attr('data-id', id)
        var jumlah = $(id_jumlah).val();
        var total = harga * jumlah
        var total_harga = (total/1000).toFixed(3)
        $(`#pesan-${id}-total`).val(total)
        totalBayar()
      });

      $(document).on('change', '.jumlah-count', function() {
        var harga = $(this).attr('data-harga');
        var menu_id = $(this).attr('data-menu-id');
        var id = $(this).attr('data-id');
        var jumlah = $(this).val()
        var total = harga * jumlah
        var total_harga = (total/1000).toFixed(3)
        $(`#pesan-${id}-total`).val(total)
        totalBayar()
      });
      
  </script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript'>$(function() {
$('[data-toggle="tooltip"]').tooltip()
})</script>
    <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function(e) {
      e.preventDefault();
    });</script>
{{-- <script type="text/javascript">
    document.getElementById("button").onclick = function () {
        location.href = "https://du68market.my.id/public/transaksi";
    };
</script> --}}
<script>
  $(document).on('change', '.image', function() {
        var menu_id = $(this).attr('data-menu-id');
        var id = $(this).attr('data-id');
        document.getElementById('image').src = "{{ asset($menu->foto) }}" + selectedImage;
        imageChange()
      });
  
</script>
@endpush