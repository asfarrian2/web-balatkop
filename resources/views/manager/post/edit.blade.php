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
                  <h4 class="fw-semibold mb-8">Postingan</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{ Route('dashboard')}}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Postingan</li>
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
            <div class="col-lg-8 col-md-8">
              <!-- ----------------------------------------- -->
              <!-- 1. Basic Form -->
              <!-- ----------------------------------------- -->
              <!-- start Basic Form -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3">Head</h4>
                  <form action="{{ Route('u.post') }}" method="POST" id="formStore" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="mb-2" for="recipient-name">Judul :</label>
                          <input type="hidden" name="id" value="{{ Crypt::encrypt($post->id_post) }}">
                          <textarea name="judul" rows="6" class="form-control" id="recipient-name1" required>{{ $post->judul }}</textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="mb-2" for="recipient-name">Penulis :</label>
                          <input type="text" name="penulis" value="{{ $post->penulis }}" class="form-control" id="tb-email" placeholder="name@example.com" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-3">
                              <label class="mb-2" for="recipient-name" class="">Kategori :</label>
                              <select name="kategori" class="form-select" required>
                              <option value="">-Pilih Kategori-</option>
                              @foreach ($kategori as $d)
                                  <option {{ $post->id_kategori == $d->id_kategori ? 'selected' : '' }}
                                  value="{{ Crypt::encrypt($d->id_kategori) }}">{{$d->kategori }}</option>
                              @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="col-12">
                        <div class="d-md-flex align-items-center">
                          <div class="ms-auto mt-3 mt-md-0">
                            <button type="submit" class="btn btn-primary hstack gap-6">
                              <i class="ti ti-edit fs-4"></i>
                              Edit
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Basic Form -->   
            </div>
            <div class="col-lg-4 col-md-4 el-element-overlay">
              <div class="card">
              <div class="card-body">
                <h4 class="card-title mb-3">Status</h4>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mb-0">
                        @if ($post->status == 1)
                        <a type="submit" data-id="{{ Crypt::encrypt($post->id_post) }}" class="status btn btn-success btn-sm" style="width: 90%;">
                          <i class="ti ti-send fs-5"></i> Terposting
                        </a>
                        @else
                        <a type="submit" data-id="{{ Crypt::encrypt($post->id_post) }}" class="status btn btn-warning btn-sm" style="width: 90%;">
                          <i class="ti ti-notes fs-5"></i> Draft
                        </a>
                        @endif
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="card overflow-hidden">
              <div class="el-card-content text-center">
                <br>
                  <h4 class="mb-2 card-title">Thumbail</h4>
              </div>
              <div class="el-card-item pb-3">
                <div class="
                    el-card-avatar
                    mb-3
                    el-overlay-1
                    w-100
                    overflow-hidden
                    position-relative
                    text-center
                  ">
                  <img src="{{ asset('assets/images/postingan/'.$post->thumbail) }}" class="d-block position-relative w-100" alt="Gambar" />
                </div>
              </div>
              <div class="el-card-content text-center">
              <input type="file" accept="image/png" name="image" id="file-upload" style="display: none;">
                  <a class="upload btn btn-primary btn-sm mb-3" style="width: 90%;" data-bs-toggle="modal" data-bs-target="#uploaddata" data-bs-whatever="@getbootstrap">
                      <i class="ti ti-upload fs-5"></i> Upload
                  </a>
              </div>
            </div>
          </div>
        </div>
        <form action="{{ Route('u.konten') }}" method="POST" id="formKonten" enctype="multipart/form-data">
          @csrf
          <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-3">Konten</h4>
            <!-- Create the editor container -->
            <div id="editor">
               <p>{!! $post->konten !!}</p>
            </div>
            <div class="mt-3">
            <input type="hidden" name="id" value="{{ Crypt::encrypt($post->id_post) }}">
            <input type="hidden" name="konten" id="konten">
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>

@endsection

@push('myscript')

<script src="{{asset ('admins/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{asset ('admins/js/datatable/datatable-basic.init.js') }}"></script>
<script src="{{asset ('admins/libs/quill/dist/quill.min.js') }}"></script>
<script src="{{asset ('admins/js/forms/quill-init.js') }}"></script>

<script>
// Simpan data Quill Editor ke input hidden
    quill.on('text-change', function() {
        document.getElementById('konten').value = quill.root.innerHTML;
    });
</script>

<!-- Button Status -->
<script>
$('.status').click(function(){
    var id_post = $(this).attr('data-id');
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
    window.location = "/11475-adm/post/status/"+id_post
    }
  });
});
</script>
<!-- END Button Status -->
  
@endpush