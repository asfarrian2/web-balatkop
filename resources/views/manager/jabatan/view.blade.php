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
                  <h4 class="fw-semibold mb-8">Jabatan</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{ Route('dashboard')}}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Jabatan</li>
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
          <div class="datatables">
            <!-- start Zero Configuration -->
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <h4 class="card-title mb-0">Data</h4>
                  <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah-modal" data-bs-whatever="@getbootstrap">+ Tambah Data</a>
                  {{-- Modal Tambah --}}
                  <div class="modal fade" id="tambah-modal" tabindex="-1" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="exampleModalLabel1">
                            Tambah Data
                          </h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ Route('a.jabatan')}}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                              <label for="recipient-name" class="">Jabatan :</label>
                              <input type="text" name="nama" class="form-control" id="recipient-name1" required/>
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="">Kelas :</label>
                              <input type="text" name="kelas" class="form-control" id="recipient-name1" required/>
                            </div>
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
                  {{-- End Modal Tambah --}}
                </div>
                 <div class="table-responsive">
                  <table id="zero_config" class="table table-striped table-bordered text-nowrap align-middle">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama Jabatan</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                       @foreach ($jabatan as $d)
                      <!-- start row -->
                      <tr>
                        <td style="text-align:center;">{{ $loop->iteration }}</td>
                        <td><h6 class="mb-0"> {{ $d->jabatan}}</h6></td>
                        <td style="text-align:center;">{{ $d->kelas }}</td>
                        <td style="text-align:center;">
                          <a title="Edit" data-id="{{ Crypt::encrypt($d->id_jabatan) }}" class="edit btn mb-1 bg-primary-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#editdata" data-bs-whatever="@getbootstrap">
                              <i class="fs-5 ti ti-pencil"></i>
                          </a>
                          <a title="Hapus" data-id="{{ Crypt::encrypt($d->id_jabatan) }}" class="hapus btn mb-1 bg-danger-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                              <i class="fs-5 ti ti-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <!-- end row -->
                      @endforeach
                    </tbody>
                    <tfoot>
                      <!-- start row -->
                      <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama Jabatan</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                      <!-- end row -->
                    </tfoot>
                  </table>
                  {{-- Modal Edit --}}
                  <div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="exampleModalLabel1">
                            Edit Data
                          </h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ Route('u.jabatan') }}" method="POST" id="formStore">
                        @csrf
                        <div class="modal-body" id="loadedit">

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
                  {{-- End Edit Tambah --}}
                </div>
              </div>
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
    var id_jabatan = $(this).attr('data-id');
    $.ajax({
             type: 'POST',
             url: '/11475-adm/jabatan/edit',
             cache: false,
             data: {
                 _token: "{{ csrf_token() }}",
                 id_jabatan: id_jabatan
             },
             success: function(respond) {
                 $("#loadedit").html(respond);
             }
         });
     $("#editdata").modal("show");

});
var span = document.getElementsByClassName("close")[0];
</script>
<!-- END Button Edit -->

<!-- Button Hapus -->
<script>
$('.hapus').click(function(){
    var id_jabatan = $(this).attr('data-id');
Swal.fire({
  title: "Apakah Anda Yakin Data Ini Ingin Di Hapus ?",
  text: "Jika Ya Maka Data Akan Terhapus Permanen",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Ya, Hapus Saja!"
  }).then((result) => {
  if (result.isConfirmed) {
    window.location = "/11475-adm/jabatan/hapus/"+id_jabatan
    }
  });
});
</script>
<!-- END Button Hapus -->
  
@endpush