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
                  <h4 class="fw-semibold mb-8">Info Tips</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{ Route('dashboard')}}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{ Route('tips')}}">Info Tips</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Edit</li>
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
                  <form action="{{ Route('u.tips') }}" method="POST" id="formPoset" enctype="multipart/form-data">
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
                          <input type="text" name="penulis" value="{{ $post->penulis }}" class="form-control" id="tb-email" required />
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
                  <div class="el-overlay w-100 overflow-hidden">
                    <ul class="
                        list-style-none
                        el-info
                        text-white text-uppercase
                        d-inline-block
                        p-0
                      ">
                      <li class="el-item d-inline-block my-0 mx-1">
                        <a class="
                            btn
                            default
                            btn-outline
                            image-popup-vertical-fit
                            el-link
                            text-white
                            border-white
                          " href="{{ asset('assets/images/postingan/'.$post->thumbail) }}">
                          <i class="ti ti-search"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="el-card-content text-center">
                <form id="update-thumbail" action="{{ route('u.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <a class="btn btn-primary btn-sm mb-3" style="width: 90%;" onclick="uploadFile()">
                  <i class="ti ti-upload fs-5"></i> Upload
                </a>
                <input type="hidden" name="id" value="{{ Crypt::encrypt($post->id_post) }}">
                <input type="file" accept="image/png" name="image" id="file-thumbail" class="mb-4" style="display: none">
                </form>
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
        <div class="row">
           <div class="col-lg-8 col-md-8">
             <!-- ----------------------------------------- -->
             <!-- 1. Basic Form -->
             <!-- ----------------------------------------- -->
             <!-- start Basic Form -->
             <div class="card">
               <div class="card-body">
                 <div class="card-body d-flex justify-content-between align-items-center">
                 <h4 class="card-title">Galeri</h4>
                  <form id="save-galeri" action="{{ route('ta.galeri') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <a type="button" class="btn btn-secondary float-end" onclick="tambahGaleri()">+ Tambah</a>
                    <input type="hidden" name="id" value="{{ Crypt::encrypt($post->id_post) }}">
                    <input type="file" accept="image/png" name="image" id="tambah-galeri" class="mb-4" style="display: none">
                  </form>
                 </div> 
                {{-- Galery --}}
                 <div class="row el-element-overlay">
                  @if (count($galeri) > 0)
                  @foreach ($galeri as $gl )
                  <div class="col-lg-4 col-md-4">
                    <div class="card overflow-hidden">
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
                          <img src="{{asset ('assets/images/galeri/'.$gl->gambar) }}" class="d-block position-relative w-100" alt="user" />
                          <div class="el-overlay w-100 overflow-hidden">
                            <ul class="
                                list-style-none
                                el-info
                                text-white text-uppercase
                                d-inline-block
                                p-0
                              ">
                              <li class="el-item d-inline-block my-0 mx-1">
                                <a class="
                                    btn
                                    default
                                    btn-outline
                                    image-popup-vertical-fit
                                    el-link
                                    text-white
                                    border-white
                                  " href="{{asset ('assets/images/galeri/'.$gl->gambar) }}">
                                  <i class="ti ti-search"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="el-card-content text-center">
                          <form id="update-galeri-{{  $loop->iteration }}" action="{{ route('u.galeri') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                           <a class="btn btn-primary btn-sm mb-3" style="width: 90%;" onclick="editGaleri({{ $loop->iteration }})">
                            <i class="ti ti-upload fs-5"></i> Edit 
                          </a>
                          <input type="hidden" name="id" value="{{ Crypt::encrypt($gl->id_galeri) }}">
                          <input type="file" accept="image/png" name="image" id="edit-galeri-{{ $loop->iteration }}" class="mb-4" style="display: none">
                          </form>
                          <a class="del-galeri btn btn-danger btn-sm mb-3" data-id="{{ Crypt::encrypt($gl->id_galeri) }}" style="width: 90%;" data-bs-toggle="modal" data-bs-target="#uploaddata" data-bs-whatever="@getbootstrap">
                              <i class="ti ti-trash fs-5"></i> Hapus
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  @else
                  <div class="col-lg-4 col-md-4">
                    <div class="card overflow-hidden">
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
                          <img src="{{asset ('assets/images/galeri/noimage.jpg') }}" class="d-block position-relative w-100" alt="user" />
                        </div>
                      </div>
                    </div>
                  </div>
                  @endif
                </div>
                {{-- End Galeri --}}
               </div>
             </div>
             <!-- end Basic Form -->   
           </div>
           <div class="col-lg-4 col-md-4 el-element-overlay">
             <div class="card">
              <div class="card-body">
                <h4 class="card-title mb-3">Hastag</h4>
                <div class="row mb-3">
                 <form action="{{ route('t.hastag') }}" method="POST" enctype="multipart/form-data" class="row g-2">
                    @csrf
                    <div class="col-md-10">
                        <input type="hidden" name="id" value="{{ Crypt::encrypt($post->id_post) }}">
                        <input type="text" name="hastag" class="form-control" placeholder="#hastag" />
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="add-hastag btn btn-secondary btn-md"> 
                            <i class="ti ti-plus item-center"></i> 
                        </button>
                    </div>
                </form>
                </div>
                <div class="row">
                  @foreach ($hastag as $ht)
                  <span>
                      <p style="display: inline;">{{ $ht->hastag }}</p>
                      <a class="del-hastag btn btn-light btn-sm mb-3" href="/11475-adm/infotips/hastag/hapus/{{ Crypt::encrypt($ht->id_hastag) }}" style="display: inline;"> x </a>
                  </span>
                  @endforeach
                </div>
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
<script src="{{asset ('admins/libs/quill/dist/quill.min.js') }}"></script>
<script src="{{asset ('admins/js/forms/quill-init.js') }}"></script>
<script src="{{asset ('admins/libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{asset ('admins/js/plugins/meg.init.js') }}"></script>

<script>
  function uploadFile() {
    document.getElementById('file-thumbail').click();
    document.getElementById('file-thumbail').onchange = function() {
      document.getElementById('update-thumbail').submit();
    };
  }
 function editGaleri(id) {
    document.getElementById('edit-galeri-' + id).click();
    document.getElementById('edit-galeri-' + id).onchange = function() {
      document.getElementById('update-galeri-' + id).submit();
    };
  }
  function tambahGaleri() { //Button
    document.getElementById('tambah-galeri').click(); //Input edit
    document.getElementById('tambah-galeri').onchange = function() {
      document.getElementById('save-galeri').submit(); //Form
    };
  }
</script>
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
    window.location = "/11475-adm/infotips/status/"+id_post
    }
  });
});
</script>
<!-- END Button Status -->

<!-- Button Hapus -->
<script>
$('.del-galeri').click(function(){
    var id_galeri = $(this).attr('data-id');
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
    window.location = "/11475-adm/infotips/galeri/hapus/"+id_galeri
    }
  });
});
</script>
<!-- END Button Hapus -->
  
@endpush