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
                  <h4 class="fw-semibold mb-8">Visi dan Misi</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{ Route('dashboard')}}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Visi dan Misi</li>
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
            {{-- Form FIle --}}
            @foreach ($vm as $file )
            @if ($file->status == 'file')
            <div class="col-md-4 col-lg-2">
              <div class="card text-center bg-white alert-dismissible fade show alert p-0 card-hover rounded-4" role="alert">
                <div class="p-2 d-block mt-3">
                  <img src="{{ asset ('assets/images/visimisi/'.$file->deskripsi) }}" width="75" style="width: 75px; height: 75px; object-fit: cover;" class="rounded-circle img-fluid" />
                  <h5 class="card-title mt-3">{{ $file->nama }}</h5>
                  <a data-id="{{ Crypt::encrypt($file->id_visimisi) }}" htype="button" data-bs-toggle="modal" data-bs-target="#editupload" data-bs-whatever="@getbootstrap" class="upload btn btn-primary  d-block w-100">Edit</a>
                </div>
              </div>
            </div>
            @endif
            @endforeach
            <div class="col-lg-6">
              <!-- start Warning Border with Icons -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Visi</h4>
                  @foreach ($vm as $title )
                  @if ($title->nama == 'Visi')
                  <div class="form-group">
                    <label for="recipient-name" class="mb-2">Caption :</label>
                    <div class="input-group mb-3">
                    <input type="text" value="{{ $title->deskripsi }}" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" readonly />
                      <a data-id="{{ Crypt::encrypt($title->id_visimisi) }}" class="edit btn bg-primary text-light" type="button" data-bs-toggle="modal" data-bs-target="#edittext" data-bs-whatever="@getbootstrap">
                      <i class="ti ti-pencil"></i>
                      </a>
                    </div>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
                <!-- end Warning Border with Icons -->
            </div>
          </div>
            <div class="row">
            {{-- Form Text --}}
            <div class="col-lg-12">
              <!-- start Warning Border with Icons -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Misi</h4>
                  <div class="table-responsive">
                  <table id="zero_config" class="table table-striped table-bordered text-nowrap align-middle">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                      @foreach ($misi as $d)
                      <tr>
                      <td style="text-align:center;">{{ $loop->iteration }}</td>
                      <td><h6 class="mb-0"> {{ $d->deskripsi}}</h6></td>
                      <td style="text-align:center;">
                       <a title="Edit" data-id="{{ Crypt::encrypt($d->id_visimisi) }}" class="edit btn mb-1 bg-primary-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#editdata" data-bs-whatever="@getbootstrap">
                              <i class="fs-5 ti ti-pencil"></i>
                       </a>
                       <a title="Hapus" data-id="{{ Crypt::encrypt($d->id_visimisi) }}" class="hapus btn mb-1 bg-danger-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                              <i class="fs-5 ti ti-trash"></i>
                        </a>
                      </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <!-- start row -->
                      <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                      <!-- end row -->
                    </tfoot>
                  </table>
                </div>
              </div>
                <!-- end -->
            </div>
              <!-- end -->
              {{-- Modal Edit --}}
              <div class="modal fade" id="edittext" tabindex="-1" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                      <h4 class="modal-title" id="exampleModalLabel1">
                        Edit Data
                      </h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ Route('u.footer') }}" method="POST" id="formStore">
                    @csrf
                    <div class="modal-body" id="loadedttext">
                      {{-- Isi Data Edit --}}
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn bg-primary-subtle text-primary">
                        Simpan
                      </button>
                      <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">
                        Batal
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
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ Route('u.footer') }}" method="POST" id="formStore" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body" id="loadupload">
                      {{-- Isi Data Upload --}}
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn bg-primary-subtle text-primary">
                        Simpan
                      </button>
                      <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">
                        Batal
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
    var id_footer = $(this).attr('data-id');
    $.ajax({
             type: 'POST',
             url: '/11475-adm/footer/edit',
             cache: false,
             data: {
                 _token: "{{ csrf_token() }}",
                 id_footer: id_footer
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
    var id_footer = $(this).attr('data-id');
    $.ajax({
             type: 'POST',
             url: '/11475-adm/footer/edit',
             cache: false,
             data: {
                 _token: "{{ csrf_token() }}",
                 id_footer: id_footer
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
