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
            <div class="col-lg-9">
              <!-- start Warning Border with Icons -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3">Detail Agenda</h4>
                   <hr class="m-0 mb-3" />
                    <div class="form-group row">
                      <label class="form-label text-end col-md-3">Judul :</label>
                      <div class="col-md-9">
                          <p>{{ $agenda->judul}}</p>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="form-label text-end col-md-3">Deskripsi :</label>
                      <div class="col-md-9">
                          <p>{{ $agenda->deskripsi}}</p>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="form-label text-end col-md-3">Tanggal :</label>
                      <div class="col-md-9">
                        @php
                          \Carbon\Carbon::setLocale('id');
                        @endphp
                          <p>{{ \Carbon\Carbon::parse($agenda->tgl_awal)->isoFormat('DD MMMM') }} - {{ \Carbon\Carbon::parse($agenda->tgl_akhir)->isoFormat('DD MMMM Y') }}</p>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="form-label text-end col-md-3">Kategori :</label>
                      <div class="col-md-9">
                          <p>{{ $agenda->kategori->kategori}}</p>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="form-label text-end col-md-3">Tempat :</label>
                      <div class="col-md-9">
                          <p>{{ $agenda->tempat}}</p>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="form-label text-end col-md-3">Alamat :</label>
                      <div class="col-md-9">
                          <p>{{ $agenda->alamat}}</p>
                      </div>
                  </div>
                   <div class="form-group row">
                      <label class="form-label text-end col-md-3">Sumber Dana :</label>
                      <div class="col-md-9">
                          <p>{{ $agenda->sumber_dana}}</p>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="form-label text-end col-md-3">Status :</label>
                      <div class="col-md-9">
                          @if ($agenda->status == 1)
                            <p>Aktif
                          @else
                            <p> Nonaktif
                          @endif
                      </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#edit">
                      <i class="ti ti-edit fs-5"></i>
                        Edit
                      </button>
                    </div>
                  </div>
                </div>
              </div>
                <!-- end Warning Border with Icons -->
            </div>
            <div class="col-lg-3 col-md-6 el-element-overlay">
              <div class="card overflow-hidden">
                <div class="el-card-content text-center">
                  <br>
                    <h4 class="mb-1 card-title">Thumbail</h4>
                    <input type="file" accept="image/png" name="image" id="file-upload" style="display: none;">
                    <a class="upload btn btn-primary btn-sm mb-3" style="width: 90%;" data-bs-toggle="modal" data-bs-target="#uploaddata" data-bs-whatever="@getbootstrap">
                        <i class="ti ti-upload fs-5"></i> Upload
                    </a>
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
                    <img src="{{ asset('assets/images/agenda/'.$agenda->thumbail) }}" class="d-block position-relative w-100" alt="Gambar" />
                  </div>
                </div>
                <!-- Modal -->
                  <div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="scroll-long-outer-modal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="myLargeModalLabel">
                            Edit
                          </h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <form action="{{ Route('u.agenda') }}" method="POST" id="formStore" enctype="multipart/form-data">
                        @csrf
                          <input type="hidden" name="id" value="{{ Crypt::encrypt($agenda->id_agenda)}}" class="form-control" id="recipient-name1" required/>
                          <div class="mb-3">
                            <label for="recipient-name" class="">Judul :</label>
                            <input type="text" name="judul" value="{{ $agenda->judul}}" class="form-control" id="recipient-name1" required/>
                          </div>
                          <div class="mb-3">
                              <label for="recipient-name" class="">Deskripsi :</label>
                              <textarea name="deskripsi" rows="8" class="form-control" id="recipient-name1" required>{{ $agenda->deskripsi }}</textarea>
                          </div>
                          <div class="mb-3">
                              <label for="recipient-name" class="">Tanggal Awal :</label>
                              <input type="date" name="tgl_awal" id="tgl_awal" value="{{ $agenda->tgl_awal}}" class="form-control" required/>
                          </div>
                          <div class="mb-3">
                              <label for="recipient-name" class="">Tanggal Akhir :</label>
                              <input type="date" name="tgl_akhir" id="tgl_akhir" value="{{ $agenda->tgl_akhir}}" class="form-control" required min=""/>
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="">Tempat :</label>
                            <input type="text" name="tempat" value="{{ $agenda->tempat}}" class="form-control" id="recipient-name1" required/>
                          </div>
                          <div class="mb-3">
                              <label for="recipient-name" class="">Alamat :</label>
                              <textarea name="alamat" rows="2" class="form-control" id="recipient-name1" required>{{ $agenda->alamat }}</textarea>
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="">Sumber Dana :</label>
                            <input type="text" name="dana" value="{{ $agenda->tempat}}" class="form-control" id="recipient-name1" required/>
                          </div>
                          <div class="mb-3">
                              <label for="recipient-name" class="">Kategori :</label>
                              <select name="kategori" class="form-select" required>
                              <option value="">-Pilih Kategori-</option>
                              @foreach ($kategori as $d)
                                  <option {{ $agenda->id_kategori == $d->id_kategori ? 'selected' : '' }}
                                  value="{{ Crypt::encrypt($d->id_kategori) }}">{{$d->kategori }}</option>
                              @endforeach
                              </select>
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
                  {{-- End Modal Edit --}}
                  {{-- Modal Upload --}}
                  <div class="modal fade" id="uploaddata" tabindex="-1" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="exampleModalLabel1">
                            Upload Gambar
                          </h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ Route('u.agenda') }}" method="POST" id="formStore" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body" id="loadedit">
                          <input type="hidden" name="id" value="{{ Crypt::encrypt($agenda->id_agenda)}}" class="form-control" id="recipient-name1" required/>
                          <div class="mb-3">
                              <label for="recipient-name" class="">Foto :</label>
                              <input type="file" accept="image/png" name="image" class="form-control" id="recipient-name1"/>
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
                  {{-- End Upload --}}
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

     $("#edittext").modal("show");

});
var span = document.getElementsByClassName("close")[0];
</script>
<!-- END Button Edit -->

<script>
document.getElementById('tgl_awal').addEventListener('change', function() {
    document.getElementById('tgl_akhir').min = this.value;
});

document.getElementById('tgl_akhir').addEventListener('click', function() {
    var tglAwal = document.getElementById('tgl_awal').value;
    if (tglAwal) {
        this.min = tglAwal;
    }
});
</script>

<!-- Button Upload -->
<script>
$('.upload').click(function(){
    var id_agenda = $(this).attr('data-id');

     $("#editupload").modal("show");

});
var span = document.getElementsByClassName("close")[0];
</script>
<!-- END Button Upload -->

@endpush
