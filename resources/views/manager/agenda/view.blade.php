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
                  <h4 class="fw-semibold mb-8">Agenda</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{ Route('dashboard')}}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Agenda</li>
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
                        <form action="{{ Route('a.agenda')}}" method="POST" id="formStore" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                              <label for="recipient-name" class="">Judul :</label>
                              <input type="text" name="judul" class="form-control" id="recipient-name1" required/>
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="">Tanggal Awal :</label>
                              <input type="date" name="tgl_awal" class="form-control" id="recipient-name1" required/>
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="">Tanggal Akhir :</label>
                              <input type="text" name="tgl_akhir" class="form-control" id="recipient-name1" required/>
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="">Deskripsi</label>
                              <input type="text" name="deskripsi" class="form-control" id="recipient-name1" required/>
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="">Kategori :</label>
                              <select name="kategori" class="form-select" required>
                                <option value="">- Pilih Kategori -</option>
                                 @foreach ($kategori as $d)
                                <option value="{{ Crypt::encrypt($d->id_kategori) }}">{{ $d->kategori }}</option>
                                 @endforeach
                              </select>
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
                        <th class="text-center" style="width: 10px">Judul</th>
                        <th class="text-center">Tanggal <br> Pelaksanaan</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                       @foreach ($agenda as $d)
                      <!-- start row -->
                      <tr>
                        <td style="text-align:center;">{{ $loop->iteration }}</td>
                        <td> <b class="mb-0">
                          @php
                            $kata = explode(' ', $d->judul);
                            $hasil = implode('<br>', array_map(function($chunk) {
                              return implode(' ', $chunk);
                            }, array_chunk($kata, 4)));
                          @endphp
                          {!! $hasil !!}
                        </td>
                        <td style="text-align: center">{{ date('d-m-Y', strtotime($d->tgl_awal)) }} <br>s.d. {{ date('d-m-Y', strtotime($d->tgl_akhir)) }}</td>
                        <td style="text-align: center">{{ $d->kategori->kategori }}</td>
                        @if ($d->status == 1)
                        <td style="text-align:center;"><span class="mb-1 badge text-bg-success">Aktif</span></td>
                        @else
                        <td style="text-align:center;"><span class="mb-1 badge text-bg-danger">Nonaktif</span></td>
                        @endif
                        <td style="text-align:center;">
                          <a title="Detail" href="/11475-adm/agenda/detail" class="btn mb-1 bg-secondary-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                              <i class="fs-5 ti ti-eye"></i>
                          </a>
                          @if ($d->status == 1)
                          <a title="Nonaktifkan" data-id="{{ Crypt::encrypt($d->id_agenda) }}" class="status btn mb-1 bg-success-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                              <i class="fs-5 ti ti-toggle-left"></i>
                          </a>
                          @else
                          <a title="Aktifkan" data-id="{{ Crypt::encrypt($d->id_agenda) }}" class="status btn mb-1 bg-warning-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                              <i class="fs-5 ti ti-toggle-right"></i>
                          </a>
                          @endif
                          <br>
                          <a title="Edit" data-id="{{ Crypt::encrypt($d->id_agenda) }}" class="edit btn mb-1 bg-primary-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#editdata" data-bs-whatever="@getbootstrap">
                              <i class="fs-5 ti ti-pencil"></i>
                          </a>
                          <a title="Hapus" data-id="{{ Crypt::encrypt($d->id_agenda) }}" class="hapus btn mb-1 bg-danger-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
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
                        <th class="text-center">Judul</th>
                        <th class="text-center">Tanggal <br> Pelaksanaan</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Status</th>
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
                        <form action="{{ Route('u.agenda') }}" method="POST" id="formStore" enctype="multipart/form-data">
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
                  {{-- End Edit --}}
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
      var id_agenda = $(this).attr('data-id');
      $.ajax({
        type: 'POST',
        url: '/11475-adm/agenda/edit',
        cache: false,
        data: {
          _token: "{{ csrf_token() }}",
          id_agenda: id_agenda
        },
        success: function(respond) {
          $("#loadedit").html(respond);
        }
      });
      $("#editdata").modal("show");
    });

    $('#zero_config tbody').on('click', '.status', function(){
      var id_agenda = $(this).attr('data-id');
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
          window.location = "/11475-adm/agenda/status/"+id_agenda
        }
      });
    });

    $('#zero_config tbody').on('click', '.hapus', function(){
      var id_agenda = $(this).attr('data-id');
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
          window.location = "/11475-adm/agenda/hapus/"+id_agenda
        }
      });
    });
  }
});
</script>
<!-- END Button Hapus -->
  
@endpush