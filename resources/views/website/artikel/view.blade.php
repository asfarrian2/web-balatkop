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
              class="absolute left-0 top-0 lg:left-[50px] lg:top-[100px] animate-spin-slow"
              src="./assets/images/herobanner/herobanner__3.png"
              alt=""
            >
            <img
              class="absolute right-[30px] top-[212px] md:right-10 md:top-[157px] lg:right-[45px] lg:top-[100px] animate-move-hor"
              src="./assets/images/herobanner/herobanner__5.png"
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

      <!-- News and blog section -->
      <section>
        <div class="container py-10 md:py-50px lg:py-60px 2xl:py-100px">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-30px">
            <!-- blogs -->
            <div class="lg:col-start-1 lg:col-span-8 space-y-[35px]">
              @foreach ($post as $d)
              <!-- blog 1 -->
              <div class="group shadow-blog2" data-aos="fade-up">
                <!-- blog thumbnail -->
                <div class="overflow-hidden relative">
                  <img
                    src="{{ asset('assets/images/postingan/'.$d->thumbail) }}"
                    alt=""
                    class="w-full"
                  >
                  <div
                    class="text-size-15 leading-6 font-semibold text-white px-15px py-5px md:px-6 md:py-2 bg-primaryColor rounded text-center absolute top-5 right-5"
                  >
                    <p>
                      {{ $d->kategori->kategori}}
                    </p>
                  </div>
                </div>
                <!-- blog content -->
                <div class="pt-26px pb-5 px-30px">
                  <h3
                    class="text-2xl md:text-size-32 lg:text-size-28 2xl:text-size-34 leading-34px md:leading-10 2xl:leading-13.5 font-bold text-blackColor2 hover:text-primaryColor dark:text-blackColor2-dark dark:hover:text-primaryColor"
                  >
                    <a href="/artikel/{{$d->slug}}"
                      >{{ $d->judul }}</a
                    >
                  </h3>
                  <div
                    class="mb-14px pb-19px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <ul class="flex flex-wrap items-center gap-x-15px">
                      <li>
                        <a
                          
                          class="text-contentColor text-sm hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor"
                          ><i class="icofont-calendar"></i>
                          {{ \Carbon\Carbon::parse($d->created_at)->translatedFormat('d M Y') }}</a
                        >
                      </li>
                      @if (@$d->jenis == 1)
                      <li>
                        <a
                          
                          class="text-contentColor text-sm hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor"
                          ><i class="icofont-newspaper"></i> Berita</a
                        >
                      </li>
                      @else
                      <li>
                        <a
                          
                          class="text-contentColor text-sm hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor"
                          ><i class="icofont-book"></i> Info Tips</a
                        >
                      </li>
                      @endif
                      <li>
                        <a
                          
                          class="text-contentColor text-sm hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor"
                          ><i class="icofont-user"></i> {{ $d->penulis->nickname }}</a
                        >
                      </li>
                    </ul>
                  </div>
                  <p
                    class="text-base text-contentColor dark:text-contentColor-dark mb-15px !leading-30px"
                  >
                    {!! Str::limit((string) $d->konten, 180) !!}
                  </p>
                  <div class="flex justify-between items-center">
                    <div>
                      <a
                        href="/artikel/{{$d->slug}}"
                        class="uppercase text-secondaryColor hover:text-primaryColor"
                      >
                        Baca Selengkapnya <i class="icofont-double-right"></i
                      ></a>
                    </div>
                    <div
                      class="text-primaryColor hover:text-secondaryColor space-y-1"
                    >
                      <a href="/artikel/{{$d->slug}}"
                        ><i
                          class="icofont-share bg-whitegrey1 dark:bg-whitegrey1-dark hover:text-whiteColor hover:bg-primaryColor w-8 h-7 leading-7 text-center inline-block rounded transition-all duration-300"
                        ></i
                      ></a>
                      <a href="/artikel/{{$d->slug}}"
                        ><i
                          class="icofont-heart bg-whitegrey1 dark:bg-whitegrey1-dark hover:text-whiteColor hover:bg-primaryColor w-8 h-7 leading-7 text-center inline-block rounded transition-all duration-300"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              <!-- pagination -->
              <div>
                <ul class="flex items-center justify-center gap-15px mt-60px mb-30px">
                    @if ($post->currentPage() > 1)
                        <li>
                            <a href="{{ $post->previousPageUrl() }}" class="w-10 h-10 leading-10 md:w-50px md:h-50px md:leading-50px text-center text-blackColor2 hover:text-whiteColor bg-whitegrey1 hover:bg-primaryColor dark:text-blackColor2-dark dark:hover:text-whiteColor dark:bg-whitegrey1-dark dark:hover:bg-primaryColor">
                                <i class="icofont-double-left"></i>
                            </a>
                        </li>
                    @endif
                      
                    @for ($i = 1; $i <= $post->lastPage(); $i++)
                        <li>
                            <a href="{{ $post->url($i) }}" class="w-10 h-10 leading-10 md:w-50px md:h-50px md:leading-50px text-center {{ $post->currentPage() == $i ? '10 text-whiteColor hover:text-whiteColor bg-primaryColor hover:bg-primaryColor dark:text-blackColor2-dark dark:hover:text-whiteColor dark:bg-whitegrey1-dark dark:hover:bg-primaryColor' : 'text-blackColor2 hover:text-whiteColor bg-whitegrey1 hover:bg-primaryColor dark:text-blackColor2-dark dark:hover:text-whiteColor dark:bg-whitegrey1-dark dark:hover:bg-primaryColor'}}">
                                {{ $i }}
                            </a>
                        </li>
                    @endfor
                      
                    @if ($post->currentPage() < $post->lastPage())
                        <li>
                            <a href="{{ $post->nextPageUrl() }}" class="w-10 h-10 leading-10 md:w-50px md:h-50px md:leading-50px text-center text-blackColor2 hover:text-whiteColor bg-whitegrey1 hover:bg-primaryColor dark:text-blackColor2-dark dark:hover:text-whiteColor dark:bg-whitegrey1-dark dark:hover:bg-primaryColor">
                                <i class="icofont-double-right"></i>
                            </a>
                        </li>
                    @endif
                </ul>
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