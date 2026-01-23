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
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{ Route('agenda')}}">Agenda</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Detail</li>
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
            <div class="col-lg-6">
              <!-- start Warning Border with Icons -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Title Website</h4>
                  <div class="form-group">
                    <label for="recipient-name" class="mb-2">Caption :</label>
                    <div class="input-group mb-3">
                    
                    </div>
                  </div>
                </div>
              </div>
                <!-- end Warning Border with Icons -->
            </div>
            <div class="col-lg-6">
              <!-- start Warning Border with Icons -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Title Website</h4>
                  <div class="form-group">
                    <label for="recipient-name" class="mb-2">Caption :</label>
                    <div class="input-group mb-3">
                    
                    </div>
                  </div>
                </div>
              </div>
                <!-- end Warning Border with Icons -->
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