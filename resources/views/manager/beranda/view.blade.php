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
                      <div class="row">
                        <div class="col-md-4">
                          <img src="{{ asset('/assets/images/beranda/BRD-04.png') }}" alt="modernize-img" class="img-fluid" />
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
                      @else
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="recipient-name" class="mb-2">Caption :</label>
                          <div class="input-group mb-3">
                          <input type="text" value="" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" readonly />
                            <a data-id="" class="edit btn bg-primary text-light" type="button" data-bs-toggle="modal" data-bs-target="#edittext" data-bs-whatever="@getbootstrap">
                            <i class="ti ti-pencil"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      @endif
                      @endforeach
                    </div>
                    <div class="tab-pane p-3" id="banner2" role="tabpanel">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="../assets/images/blog/blog-img1.jpg" alt="modernize-img" class="img-fluid" />
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
                    <div class="tab-pane p-3" id="brand" role="tabpanel">
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
            </div>
            <div class="col-md-6">
              <!-- start Tab with Fill & Justify -->
              <div class="card">
                <div class="card-body">

                  <h4 class="card-title">Tab with Fill & Justify</h4>

                  <p class="mb-3 card-subtitle">
                    To proportionately fill all available space with your
                    .nav-items, use
                    <mark>
                      <code>.nav-fill</code>
                    </mark>.
                  </p>
                  <!-- Nav tabs -->
                  <ul class="nav nav-pills nav-fill mt-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="tab" href="#navpill-111" role="tab">
                        <span>Tab 1</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#navpill-222" role="tab">
                        <span>Tab 2</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#navpill-333" role="tab">
                        <span>Tab 3</span>
                      </a>
                    </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content border mt-2">
                    <div class="tab-pane active p-3" id="navpill-111" role="tabpanel">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="../assets/images/blog/blog-img2.jpg" alt="modernize-img" class="img-fluid" />
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
                    <div class="tab-pane p-3" id="navpill-222" role="tabpanel">
                      <div class="row">
                        <div class="col-md-8">
                          <p>
                            Raw denim you probably haven't heard of them jean
                            shorts Austin. Nesciunt tofu stumptown aliqua,
                            retro synth master cleanse. Mustache cliche
                            tempor, williamsburg carles vegan helvetica.
                          </p>
                        </div>
                        <div class="col-md-4">
                          <img src="../assets/images/blog/blog-img1.jpg" alt="modernize-img" class="img-fluid" />
                        </div>
                      </div>
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
            </div>
          </div>
        </div>
      </div>

@endsection