@extends('layouts.admins')

@section('content')

      <div class="body-wrapper">
        <div class="container-fluid">
          @php
            $sukses = Session::get('success');
            $gagal = Session::get('warning');
          @endphp
          @if (Session::get('success'))
          <div class="alert customize-alert alert-dismissible alert-light-success bg-success-subtle text-success fade show remove-close-icon" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <div class="d-flex align-items-center  me-3 me-md-0">
                <i class="ti ti-alert-circle fs-5 me-2 text-success"></i>
                    Sukses ! {{ $sukses}}
              </div>
          </div>
          @endif
          @if (Session::get('warning'))
          <div class="alert customize-alert alert-dismissible alert-light-danger bg-danger-subtle text-danger fade show remove-close-icon" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <div class="d-flex align-items-center  me-3 me-md-0">
                <i class="ti ti-alert-circle fs-5 me-2 text-danger"></i>
                    Gagal ! {{ $gagal }}
              </div>
          </div>
          @endif
          <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Beranda</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{ Route('dashboard')}}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Beranda</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">
                    <img src="{{asset ('admins/images/breadcrumb/ChatBc.png')}}" alt="modernize-img" class="img-fluid mb-n4" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <!-- start Tab with Fill & Justify -->
              <div class="card">
                <div class="card-body">

                  <h4 class="card-title">Banner / Brand</h4>

                  <p class="mb-3 card-subtitle">
                  </p>
                  <!-- Nav tabs -->
                  <ul class="nav nav-pills nav-fill mt-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="tab" href="#banner1" role="tab">
                        <span>Banner Utama</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#banner2" role="tab">
                        <span>Banner Card</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#brand" role="tab">
                        <span>Brand</span>
                      </a>
                    </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content border mt-2">
                    <div class="tab-pane active p-3" id="banner1" role="tabpanel">
                      @foreach ($bp as $b1 )
                      @if ($b1->status == 'File')
                      <div class="row mb-2">
                        <div class="col-md-4">
                          <img src="{{ asset('/assets/images/beranda/BRD-01.png') }}" alt="modernize-img" class="img-fluid" />
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title mt-3">{{ $b1->nama }}</h5>
                            <a data-id="{{ Crypt::encrypt($b1->id_beranda) }}" type="button" data-bs-toggle="modal" data-bs-target="#editupload" data-bs-whatever="@getbootstrap" class="upload btn btn-primary d-block w-50">Edit</a>
                        </div>
                      </div>
                      @else
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="recipient-name" class="mb-2">{{ $b1->nama }}, Caption :</label>
                          <div class="input-group mb-3">
                          <input type="text" value="{{ $b1->keterangan_1 }}" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" readonly />
                            <a data-id="{{ Crypt::encrypt($b1->id_beranda) }}" class="edit btn bg-primary text-light" type="button" data-bs-toggle="modal" data-bs-target="#edittext" data-bs-whatever="@getbootstrap">
                            <i class="ti ti-pencil"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      @endif
                      @endforeach
                    </div>
                    <div class="tab-pane p-3" id="banner2" role="tabpanel">
                      @foreach ($bs as $b2 )
                      @if ($b2->status == 'File')
                      <div class="row mb-2">
                        <div class="col-md-4">
                          <img src="{{ asset('/assets/images/beranda/'.$b2->keterangan_1) }}" alt="banner-card" class="img-fluid" />
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title mt-3">{{ $b2->nama }}</h5>
                            <a data-id="{{ Crypt::encrypt($b2->id_beranda) }}" type="button" data-bs-toggle="modal" data-bs-target="#editupload" data-bs-whatever="@getbootstrap" class="upload btn btn-primary d-block w-50">Edit</a>
                        </div>
                      </div>
                      @else
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="recipient-name" class="mb-2">{{ $b2->nama }}, Caption :</label>
                          <div class="input-group mb-3">
                          <input type="text" value="{{ $b2->keterangan_1 }}" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" readonly />
                            <a data-id="{{ Crypt::encrypt($b2->id_beranda) }}" class="edit btn bg-primary text-light" type="button" data-bs-toggle="modal" data-bs-target="#edittext" data-bs-whatever="@getbootstrap">
                            <i class="ti ti-pencil"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      @endif
                      @endforeach
                    </div>
                    <div class="tab-pane p-3" id="brand" role="tabpanel">
                      @foreach ($br as $b3 )
                      @if ($b3->status == 'File')
                      <div class="row mb-2">
                        <div class="col-md-4">
                          <img src="{{ asset('/assets/images/beranda/'.$b3->keterangan_1) }}" alt="brand-card" class="img-fluid" />
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title mt-3">{{ $b3->nama }}</h5>
                            <a data-id="{{ Crypt::encrypt($b3->id_beranda) }}" type="button" data-bs-toggle="modal" data-bs-target="#editupload" data-bs-whatever="@getbootstrap" class="upload btn btn-primary d-block w-50">Edit</a>
                        </div>
                      </div>
                      @else
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="recipient-name" class="mb-2">{{ $b3->nama }}, Caption :</label>
                          <div class="input-group mb-3">
                          <input type="text" value="{{ $b3->keterangan_1 }}" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" readonly />
                            <a data-id="{{ Crypt::encrypt($b3->id_beranda) }}" class="edit btn bg-primary text-light" type="button" data-bs-toggle="modal" data-bs-target="#edittext" data-bs-whatever="@getbootstrap">
                            <i class="ti ti-pencil"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      @endif
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
              <!-- end Tab with Fill & Justify -->
            </div>
            <div class="col-md-6">
              <!-- start Tab with Fill & Justify -->
              <div class="card">
                <div class="card-body">

                  <h4 class="card-title">Highlight Layanan</h4>

                  <!-- Nav tabs -->
                  <ul class="nav nav-pills nav-fill mt-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="tab" href="#tentang" role="tab">
                        <span>Tentang</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#card" role="tab">
                        <span>Card</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#agenda" role="tab">
                        <span>Agenda</span>
                      </a>
                    </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content border mt-2">
                    <div class="tab-pane active p-3" id="tentang" role="tabpanel">
                      @foreach ($tentang as $t )
                      @if ($t->status == 'File')
                      <div class="row mb-2">
                        <div class="col-md-4">
                          <img src="{{ asset('/assets/images/beranda/'.$t->keterangan_1) }}" alt="brand-card" class="img-fluid" />
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title mt-3">{{ $t->nama }}</h5>
                            <a data-id="{{ Crypt::encrypt($t->id_beranda) }}" type="button" data-bs-toggle="modal" data-bs-target="#editupload" data-bs-whatever="@getbootstrap" class="upload btn btn-primary d-block w-50">Edit</a>
                        </div>
                      </div>
                      @else
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="recipient-name" class="mb-2">{{ $t->nama }}, Caption :</label>
                          <div class="input-group mb-3">
                          <input type="text" value="{{ $t->keterangan_1 }}" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" readonly />
                            <a data-id="{{ Crypt::encrypt($t->id_beranda) }}" class="edit btn bg-primary text-light" type="button" data-bs-toggle="modal" data-bs-target="#edittext" data-bs-whatever="@getbootstrap">
                            <i class="ti ti-pencil"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      @endif
                      @endforeach
                    </div>
                    <div class="tab-pane p-3" id="card" role="tabpanel">
                      @foreach ($card as $c )
                      @if ($c->status == 'File')
                      <div class="row mb-2">
                        <div class="col-md-4">
                          <img src="{{ asset('/assets/images/beranda/'.$c->keterangan_1) }}" alt="brand-card" class="img-fluid" />
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title mt-3">{{ $c->nama }}</h5>
                            <a data-id="{{ Crypt::encrypt($c->id_beranda) }}" type="button" data-bs-toggle="modal" data-bs-target="#editupload" data-bs-whatever="@getbootstrap" class="upload btn btn-primary d-block w-50">Edit</a>
                        </div>
                      </div>
                      @else
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="recipient-name" class="mb-2">{{ $c->nama }}, Caption :</label>
                          <div class="input-group mb-3">
                          <input type="text" value="{{ $c->keterangan_1 }}" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" readonly />
                            <a data-id="{{ Crypt::encrypt($c->id_beranda) }}" class="edit btn bg-primary text-light" type="button" data-bs-toggle="modal" data-bs-target="#edittext" data-bs-whatever="@getbootstrap">
                            <i class="ti ti-pencil"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      @endif
                      @endforeach
                    </div>
                    <div class="tab-pane p-3" id="navpill-333" role="tabpanel">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="../assets/images/blog/blog-img3.jpg" alt="modernize-img" class="img-fluid" />
                        </div>
                        <div class="col-md-8">
                          <p>
                            Raw denim you probably haven't heard of them jean
                            shorts Austin. Nesciunt tofu stumptown aliqua,
                            retro synth master cleanse. Mustache cliche
                            tempor, williamsburg carles vegan helvetica.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end Tab with Fill & Justify -->
              {{-- Modal Edit --}}
                <div class="modal fade" id="edittext" tabindex="-1" aria-labelledby="exampleModalLabel1">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="exampleModalLabel1">
                          Edit Data
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                      </div>
                      <form action="{{ Route('u.beranda') }}" method="POST" id="formStore">
                      @csrf
                      <div class="modal-body" id="loadedttext">
                        {{-- Isi Data Edit --}}
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn bg-primary-subtle text-primary">
                          Simpan
                        </button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                {{-- End Edit --}}

                {{-- Modal Upload --}}
                <div class="modal fade" id="editupload" tabindex="-1" aria-labelledby="exampleModalLabel1">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="exampleModalLabel1">
                          Edit Data
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                      </div>
                      <form action="{{ Route('u.beranda') }}" method="POST" id="formStore" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body" id="loadupload">
                        {{-- Isi Data Upload --}}
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn bg-primary-subtle text-primary">
                          Simpan
                        </button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                {{-- End Upload --}}
            </div>
          </div>
        </div>
      </div>

@endsection

@push('myscript')

<script src="{{asset ('admins/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{asset ('admins/js/datatable/datatable-basic.init.js') }}"></script>

<!-- Button Edit -->
<script>
$('.edit').click(function(){
    var id_beranda = $(this).attr('data-id');
    $.ajax({
             type: 'POST',
             url: '/11475-adm/beranda/edit',
             cache: false,
             data: {
                 _token: "{{ csrf_token() }}",
                 id_beranda: id_beranda
             },
             success: function(respond) {
                 $("#loadedttext").html(respond);
             }
         });
     $("#edittext").modal("show");

});
var span = document.getElementsByClassName("close")[0];
</script>
<!-- END Button Edit -->

<!-- Button Upload -->
<script>
$('.upload').click(function(){
    var id_beranda = $(this).attr('data-id');
    $.ajax({
             type: 'POST',
             url: '/11475-adm/beranda/edit',
             cache: false,
             data: {
                 _token: "{{ csrf_token() }}",
                 id_beranda: id_beranda
             },
             success: function(respond) {
                 $("#loadupload").html(respond);
             }
         });
     $("#editupload").modal("show");

});
var span = document.getElementsByClassName("close")[0];
</script>
<!-- END Button Upload -->

@endpush
