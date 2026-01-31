@extends('layouts.visitors')

@section('content')

    <!-- main body -->
    <main class="bg-transparent">
      <!-- banner section -->
      <section>
        <!-- banner section -->
        <div
          class="bg-lightGrey10 dark:bg-lightGrey10-dark relative z-0 overflow-y-visible py-20px md:py-10px lg:py-5px 2xl:pb-10px 2xl:pt-20px" >
          <!-- animated icons -->
          <div>
            <img
              class="absolute right-[30px] top-[212px] md:right-10 md:top-[157px] lg:right-[45px] lg:top-[100px] animate-move-hor"
              src="{{ asset('assets/images/herobanner/herobanner__5.png') }}"
              alt=""
            >
          </div>
          <div class="container">
            <div class="text-center">
              <ul class="flex gap-1 justify-center">
                <li>
                  <a
                    href="/"
                    class="text-lg text-blackColor2 dark:text-blackColor2-dark"
                    >Beranda <i class="icofont-simple-right"></i
                  ></a>
                </li>
                <li>
                  <span
                    class="text-lg text-blackColor2 dark:text-blackColor2-dark"
                    >Berita</span
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

       @php
      \Carbon\Carbon::setLocale('id');
       @endphp

      <!--blog details section -->
      <section>
        <div class="container py-10 md:py-50px lg:py-60px 2xl:py-100px">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-30px">
            <div class="lg:col-start-1 lg:col-span-8 space-y-[35px]">
              <!-- blog 1 -->
              <div data-aos="fade-up">
                <!-- blog thumbnail -->
                <div class="overflow-hidden relative mb-30px">
                  <h1
                    class="text-size-35 font-bold text-blackColor dark:text-blackColor-dark mb-15px !leading-30px"
                    data-aos="fade-up"
                  >
                    {{ $post->judul }}
                  </h1>
                  <p
                    class="text-size-15 text-primaryColor mb-15px !leading-30px"
                    data-aos="fade-up"
                  ><i class="icofont-calendar"></i>
                    {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d M Y') }}
                    | @if ($post->jenis == 1 ) <i class="icofont-newspaper"></i> Berita @else <i class="icofont-book"></i> Info Tips @endif
                    | <i class="icofont-user"></i> {{ $post->penulis->nickname}}
                  </p>
                  <img
                    src="{{asset('assets/images/postingan/'.$post->thumbail) }}"
                    alt=""
                    class="w-full"
                  >
                </div>
                <!-- blog content -->
                <div class="text-md text-blackColor mb-25px !leading-30px">
                  {!! $post->konten !!}

                  <!-- Foto Galeri -->
                  <div
                    class="flex justify-between items-center flex-wrap py-10 mb-10 border-y border-borderColor2 dark:border-borderColor2-dark gap-y-10px mt-30px"
                  >
                  <div class="gallary-container">
                    <div class="popup">
                      <div id="slider-container" class="slider-container">
                        <span class="close-btn">&times;</span>
                        <div class="slider-container-wrapper"></div>
                      </div>
                      <div class="slider-navigation">
                        <button class="prev-btn">Prev</button>
                        <button class="next-btn">Next</button>
                      </div>
                    </div>

                    <h4
                      class="text-size-26 font-bold text-blackColor dark:text-blackColor-dark mb-30px !leading-30px"
                      data-aos="fade-up"
                    >
                      Foto Galeri
                    </h4>

                    <div class="grid grid-cols-{{ ceil(count($galeri) / 2) }} gap-5px">
                      @foreach ($galeri as $foto )
                      <div
                        class="image-wrapper relative group"
                        data-aos="fade-up"
                      >
                        <img
                          src="{{asset ('assets/images/galeri/'.$foto->gambar) }}"
                          alt="Image 1"
                          class="gallery-image w-full"
                        >
                        <div
                          class="absolute left-0 top-0 right-0 bottom-0 bg-blackColor bg-opacity-0 transition-all duration-300 group-hover:bg-opacity-60 text-whiteColor flex items-center justify-center"
                        >
                          <button class="popup-open">
                            <i
                              class="icofont-eye-alt opacity-0 group-hover:opacity-100"
                            ></i>
                          </button>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  </div>

                  <!-- tag and share  -->

                  <div
                    class="flex justify-between items-center flex-wrap py-10 mb-10 border-y border-borderColor2 dark:border-borderColor2-dark gap-y-10px mt-15px"
                  >
                    <div>
                      <ul class="flex flex-wrap gap-10px">
                        <li>
                          <p
                            class="text-lg md:text-size-22 leading-7 md:leading-30px text-blackColor dark:text-blackColor-dark font-bold"
                          >
                            Tag
                          </p>
                        </li>
                        @foreach ($tag as $tag )
                        <li>
                          <a
                            href="blog-details.html"
                            class="px-2 py-5px md:px-3 md:py-9px text-contentColor text-size-11 md:text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor rounded"
                            >{{ $tag->hastag }}</a
                          >
                        </li>
                        @endforeach
                      </ul>
                    </div>
                    <div>
                      <!-- social -->
                      <div>
                        <ul class="flex gap-10px justify-center items-center">
                          <li>
                            <p
                              class="text-lg md:text-size-22 leading-7 md:leading-30px text-blackColor dark:text-blackColor-dark font-bold"
                            >
                              Share
                            </p>
                          </li>
                          <li>
                            <button id="copy-link"
                              class="h-35px w-35px leading-35px md:w-38px md:h-38px md:leading-38px text-size-11 md:text-xs text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"
                              ><i class="icofont-paper-clip"></i
                            ></button>
                            <p style="display: none;" id="url">{{ request()->url() }}</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- blog sidebar -->
            <div class="lg:col-start-9 lg:col-span-4">
              <div class="flex flex-col">
                <!-- author details -->
                <div
                  class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px border border-borderColor2 dark:border-borderColor2-dark text-center"
                  data-aos="fade-up"
                >
                  <!-- athor avatar -->
                  <div class="mb-30px flex justify-center">
                    <img
                      src="{{ asset('assets/images/tentang/'.$tentang->where('status', 'file')->first()->keterangan) }}"
                      alt=""
                      class="w-24 h-24 rounded-full"
                    >
                  </div>
                  <!-- author name -->
                  <div class="mb-3">
                    <h3 class="mb-7px">
                      <a
                        href="#"
                        class="text-xl font-bold text-blackColor2 dark:text-blackColor2-dark"
                        >Balai Pelatihan Koperasi <br> dan Usaha Kecil <br> Provinsi Kalimantan Selatan</a
                      >
                    </h3>
                  </div>
                  <!-- description -->
                  <p
                    class="text-sm text-contentColor dark:text-contentColor-dark mb-15px"
                  >
                    Mewujudkan Kalimantan Selatan Maju: Makmur, Sejahtera, dan Berkelanjutan sebagai Gerbang Ibukota Negara
                    melalui Koperasi Modern dan UMKM Naik Kelas
                  </p>
                </div>
                
                <!-- search input -->
                <div
                  class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px border border-borderColor2 dark:border-borderColor2-dark"
                  data-aos="fade-up"
                >
                  <h4
                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-blackColor before:absolute before:bottom-[5px] before:left-0 leading-30px mb-25px"
                  >
                    Pencarian
                  </h4>
                  <form
                    class="w-full px-4 py-15px text-sm text-contentColor bg-lightGrey10 dark:bg-lightGrey10-dark dark:text-contentColor-dark flex justify-center items-center leading-26px"
                  >
                    <input
                      type="text"
                      placeholder="Telusuri Artikel"
                      class="placeholder:text-placeholder bg-transparent focus:outline-none placeholder:opacity-80 w-full"
                    >
                    <button type="submit">
                      <i class="icofont-search-1 text-base"></i>
                    </button>
                  </form>
                </div>
                <!-- categories -->
                <div
                  class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px border border-borderColor2 dark:border-borderColor2-dark"
                  data-aos="fade-up"
                >
                  <h4
                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-blackColor before:absolute before:bottom-[5px] before:left-0 leading-30px mb-25px"
                  >
                    Kategori
                  </h4>
                  <ul class="flex flex-col gap-y-4">
                    @foreach ($kategori as $k)
                    <li
                      class="text-contentColor hover:text-contentColor-dark hover:bg-primaryColor transition-all duration-300 text-sm font-medium px-4 py-2 border border-borderColor2 hover:border-primaryColor dark:border-borderColor2-dark dark:hover:border-primaryColor flex justify-between leading-7"
                    >
                      <a href="#">{{ $k->kategori }}</a> <a href="#">{{ $k->posts_count }}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
                <!-- recent posts -->
                <div
                  class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px border border-borderColor2 dark:border-borderColor2-dark"
                  data-aos="fade-up"
                >
                  <h4
                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-primaryColor before:absolute before:bottom-[5px] before:left-0 leading-30px mb-25px"
                  >
                    Berita Terbaru
                  </h4>
                  <ul class="flex flex-col gap-y-25px">
                    @foreach ($sideberita as $sart )
                    <li class="flex items-center">
                      <div class="w-2/5 pr-5 relative">
                        <a href="blog-details.html" class="w-full"
                          ><img
                            src="{{ asset('assets/images/postingan/'.$sart->thumbail) }}"
                            alt=""
                            class="w-full"
                        ></a>
                        <span
                          class="text-xs font-medium text-whiteColor h-6 w-6 leading-6 text-center bg-primaryColor absolute top-0 left-0"
                          >{{$loop->iteration}}</span
                        >
                      </div>
                      <div class="w-3/5">
                        <a
                          href="/artikel/{{ $sart->slug }}"
                          class="w-full text-sm text-contentColor font-medium leading-7 dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                          >{{ \Carbon\Carbon::parse($sart->created_at)->translatedFormat('d M Y') }}</a
                        >
                        <h3 class="font-bold leading-22px">
                          <a
                            class="text-blackColor dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                            href="/artikel/{{ $sart->slug }}"
                            >{{ $sart->judul }}</a
                          >
                        </h3>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>

                <!-- recent posts -->
                <div
                  class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px border border-borderColor2 dark:border-borderColor2-dark"
                  data-aos="fade-up"
                >
                  <h4
                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-secondaryColor before:absolute before:bottom-[5px] before:left-0 leading-30px mb-25px"
                  >
                    Info Tips Terbaru
                  </h4>
                  <ul class="flex flex-col gap-y-25px">
                    @foreach ($sideinfotips as $sart )
                    <li class="flex items-center">
                      <div class="w-2/5 pr-5 relative">
                        <a href="blog-details.html" class="w-full"
                          ><img
                            src="{{ asset('assets/images/postingan/'.$sart->thumbail) }}"
                            alt=""
                            class="w-full"
                        ></a>
                        <span
                          class="text-xs font-medium text-whiteColor h-6 w-6 leading-6 text-center bg-primaryColor absolute top-0 left-0"
                          >{{$loop->iteration}}</span
                        >
                      </div>
                      <div class="w-3/5">
                        <a
                          href="/artikel/{{ $sart->slug }}"
                          class="w-full text-sm text-contentColor font-medium leading-7 dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                          >{{ \Carbon\Carbon::parse($sart->created_at)->translatedFormat('d M Y') }}</a
                        >
                        <h3 class="font-bold leading-22px mb-15px">
                          <a
                            class="text-blackColor dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                            href="/artikel/{{ $sart->slug }}"
                            >{{ $sart->judul }}</a
                          >
                        </h3>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
                
                <!-- tags -->
                <div
                  class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px border border-borderColor2 dark:border-borderColor2-dark"
                  data-aos="fade-up"
                >
                  <h4
                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-primaryColor before:absolute before:bottom-[5px] before:left-0 leading-30px mb-25px"
                  >
                    Popular tag
                  </h4>
                  <ul class="flex flex-wrap gap-x-5px">
                    @foreach ($hastag as $hg)
                    <li>
                      <a
                        href="blog-details.html"
                        class="m-5px px-19px py-3px text-contentColor text-xs font-medium border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor leading-30px dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor"
                        >{{ $hg->hastag }}</a
                      >
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>


@endsection

@push('myscript')

<!-- Script untuk Salin Link -->
<script>
    document.getElementById('copy-link').addEventListener('click', function() {
        var url = document.getElementById('url').innerText;
        var judul = "{{ $post->judul }}";
        var tanggal = "{{ $post->created_at->format('d M Y') }}";
        var thumbail = "{{ $post->thumbail }}";
        var konten = "{{ Illuminate\Support\Str::limit($post->konten, 10) }}";
        var teks = judul + "\n" + tanggal + "\n" + url + "\n" + konten + "\n" + thumbail;
        navigator.clipboard.writeText(teks).then(function() {
            alert('Link berhasil disalin!');
        }); 
    });
</script>

@endpush