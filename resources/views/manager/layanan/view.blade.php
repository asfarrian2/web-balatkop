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
                  <h4 class="fw-semibold mb-8">Layanan</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{ Route('dashboard')}}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Layanan</li>
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
                        <form action="{{ Route('a.layanan')}}" method="POST" id="formStore" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                              <label for="recipient-name" class="">Nama :</label>
                              <input type="text" name="layanan" class="form-control" id="recipient-name1" required/>
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="">Deskripsi :</label>
                              <input type="text" name="keterangan" class="form-control" id="recipient-name1" required/>
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="">Foto :</label>
                              <input type="file" accept="image/png" name="image" class="form-control" id="recipient-name1" required/>
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
                        <th class="text-center">Nama Layanan</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                       @foreach ($layanan as $d)
                      <!-- start row -->
                      <tr>
                        <td style="text-align:center;">{{ $loop->iteration }}</td>
                        <td>
                          <table style="border-collapse:collapse; border:none; border-color:transparent;">
                            <tr>
                            <td rowspan="3" style="width: 60px"><div class="d-flex align-items-center gap-6">
                              <img src="{{ asset('assets/images/layanan/'.$d->gambar) }} " width="45" height="45" class="rounded-circle" /></div>
                            </td>
                            <td><b class="mb-0"> {{ $d->nama}}</b></td>
                            </tr>  
                          </table>
                        </td>
                        @if ($d->status == 1)
                        <td style="text-align:center;"><span class="mb-1 badge text-bg-success">Aktif</span></td>
                        @else
                        <td style="text-align:center;"><span class="mb-1 badge text-bg-danger">Nonaktif</span></td>
                        @endif
                        <td style="text-align:center;">
                          @if ($d->status == 1)
                          <a title="Nonaktifkan" data-id="{{ Crypt::encrypt($d->id_layanan) }}" class="status btn mb-1 bg-success-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                              <i class="fs-5 ti ti-toggle-left"></i>
                          </a>
                          @else
                          <a title="Aktifkan" data-id="{{ Crypt::encrypt($d->id_layanan) }}" class="status btn mb-1 bg-warning-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                              <i class="fs-5 ti ti-toggle-right"></i>
                          </a>
                          @endif
                          <a title="Edit" href="/11475-adm/layanan/edit/{{ Crypt::encrypt($d->id_layanan) }}" class="btn mb-1 bg-primary-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                              <i class="fs-5 ti ti-pencil"></i>
                          </a>
                          <a title="Hapus" data-id="{{ Crypt::encrypt($d->id_layanan) }}" class="hapus btn mb-1 bg-danger-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
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
                        <th class="text-center">Nama Layanan</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                      <!-- end row -->
                    </tfoot>
                  </table>
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
$('#zero_config').DataTable({
  destroy: true,
  // konfigurasi DataTables
  initComplete: function() {
    $('#zero_config tbody').on('click', '.edit', function(){
      var id_layanan = $(this).attr('data-id');
      $.ajax({
        type: 'POST',
        url: '/11475-adm/layanan/edit',
        cache: false,
        data: {
          _token: "{{ csrf_token() }}",
          id_layanan: id_layanan
        },
        success: function(respond) {
          $("#loadedit").html(respond);
        }
      });
      $("#editdata").modal("show");
    });

    $('#zero_config tbody').on('click', '.status', function(){
      var id_layanan = $(this).attr('data-id');
      Swal.fire({
        title: "Apakah Anda Yakin Ingin Mengubah Status Data Ini ?",
        text: "Jika Ya Maka Status Data Akan Diubah",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Ubah Status!"
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = "/11475-adm/layanan/status/"+id_layanan
        }
      });
    });

    $('#zero_config tbody').on('click', '.hapus', function(){
      var id_layanan = $(this).attr('data-id');
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
          window.location = "/11475-adm/layanan/hapus/"+id_layanan
        }
      });
    });
  }
});
</script>
<!-- END Button Hapus -->
  
@endpush