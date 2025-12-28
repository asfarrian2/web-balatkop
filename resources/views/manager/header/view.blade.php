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
                  <h4 class="fw-semibold mb-8">Header</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{ Route('dashboard')}}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Header</li>
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
            @foreach ($header as $file )
            @if ($file->status == 'file')
            <div class="col-md-4 col-lg-2">
              <div class="card text-center bg-white alert-dismissible fade show alert p-0 card-hover rounded-4" role="alert">
                <div class="p-2 d-block mt-3">
                  <img src="{{ asset ('assets/images/header/'.$file->keterangan) }}" width="75" style="width: 75px; height: 75px; object-fit: cover;" class="rounded-circle img-fluid" />
                  <h5 class="card-title mt-3">{{ $file->nama }}</h5>
                  <a href="javascript:void(0)" class="btn btn-primary  d-block w-100">Edit</a>
                </div>
              </div>
            </div>
            @endif  
            @endforeach
            <div class="col-lg-6">
              <!-- start Warning Border with Icons -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Title Website</h4>
                  @foreach ($header as $title )
                  @if ($title->nama == 'Title Website')
                  <div class="form-group">
                    <label for="recipient-name" class="mb-2">Keterangan :</label>
                    <div class="input-group mb-3">
                    <input type="text" value="{{ $title->keterangan }}" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" readonly />
                      <button class="btn bg-primary text-light " type="button">
                      <i class="ti ti-pencil"></i>
                      </button>
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
            <div class="col-lg-6">
              <!-- start Warning Border with Icons -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Alamat / Kontak</h4>
                  @foreach ($header as $contact )
                  @if ($contact->jenis == 'Contact')
                  <div class="form-group">
                    <label for="recipient-name" class="mb-2">{{ $contact->nama }} :</label>
                    <div class="input-group mb-3">
                    <input type="text" value="{{ $contact->keterangan }}" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" readonly />
                      <button class="btn bg-primary text-light " type="button">
                      <i class="ti ti-pencil"></i>
                      </button>
                    </div>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
                <!-- end -->
            </div>
            <div class="col-lg-6">
              <!-- start Warning Border with Icons -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tombol Utama</h4>
                  @foreach ($header as $button )
                  @if ($button->jenis == 'Button')
                  <div class="form-group">
                    <label for="recipient-name" class="mb-2">Keterangan :</label>
                    <div class="input-group mb-3">
                    <input type="text" value="{{ $button->keterangan }}" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" readonly />
                      <button class="btn bg-primary text-light " type="button">
                      <i class="ti ti-pencil"></i>
                      </button>
                    </div>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
              <!-- end -->
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