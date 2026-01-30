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
                    | <i class="icofont-user"></i> {{ $post->penulis}}
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

                  <!-- previous comment area -->
                  <div
                    class="pt-50px pb-15px border-y border-borderColor2 dark:border-borderColor2-dark"
                  >
                    <h4
                      class="text-size-26 font-bold text-blackColor dark:text-blackColor-dark mb-30px !leading-30px"
                      data-aos="fade-up"
                    >
                      (04) Komentar
                    </h4>
                    <ul>
                      <li class="flex gap-30px mb-10">
                        <div class="flex-shrink-0">
                          <div>
                            <img
                              src="./assets/images/blog-details/blog-details__1.png"
                              alt=""
                              class="w-20 h-20 rounded-full"
                            >
                          </div>
                        </div>
                        <div class="flex-grow">
                          <div class="flex justify-between items-center">
                            <div>
                              <h4>
                                <a
                                  href="#"
                                  class="text-lg font-semibold text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor leading-25px"
                                >
                                  Rohan De Spond</a
                                >
                              </h4>
                              <p
                                class="text-xs font-medium text-contentColor dark:text-contentColor-dark leading-29px uppercase mb-5px"
                              >
                                25 JANUARY 2024
                              </p>
                            </div>
                            <div class="author__icon">
                              <button class="group">
                                <svg
                                  width="26"
                                  height="19"
                                  viewBox="0 0 26 19"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    class="group-hover:fill-primaryColor dark:fill-blackColor-dark dark:group-hover:fill-primaryColor block"
                                    d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z"
                                    fill="#121416"
                                  ></path>
                                </svg>
                              </button>
                            </div>
                          </div>

                          <p
                            class="text-sm text-contentColor dark:text-contentColor-dark leading-23px mb-15px"
                          >
                            There are many variations of passages of Lorem Ipsum
                            available, but the majority have. There are many
                            variations of passages of Lorem Ipsum available, but
                            the majority have
                          </p>
                        </div>
                      </li>
                      <li class="flex gap-30px mb-10 lg:pl-100px">
                        <div class="flex-shrink-0">
                          <div>
                            <img
                              src="./assets/images/blog-details/blog-details__2.png"
                              alt=""
                              class="w-20 h-20 rounded-full"
                            >
                          </div>
                        </div>
                        <div class="flex-grow">
                          <div class="flex justify-between items-center">
                            <div>
                              <h4>
                                <a
                                  href="#"
                                  class="text-lg font-semibold text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor leading-25px"
                                >
                                  Rohan De Spond</a
                                >
                              </h4>
                              <p
                                class="text-xs font-medium text-contentColor dark:text-contentColor-dark leading-29px uppercase mb-5px"
                              >
                                25 JANUARY 2024
                              </p>
                            </div>
                            <div class="author__icon">
                              <button class="group">
                                <svg
                                  width="26"
                                  height="19"
                                  viewBox="0 0 26 19"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    class="group-hover:fill-primaryColor dark:fill-blackColor-dark dark:group-hover:fill-primaryColor block"
                                    d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z"
                                    fill="#121416"
                                  ></path>
                                </svg>
                              </button>
                            </div>
                          </div>

                          <p
                            class="text-sm text-contentColor dark:text-contentColor-dark leading-23px mb-15px"
                          >
                            There are many variations of passages of Lorem Ipsum
                            available, but the majority have. There are many
                            variations of passages of Lorem Ipsum available, but
                            the majority have
                          </p>
                        </div>
                      </li>
                      <li class="flex gap-30px mb-10">
                        <div class="flex-shrink-0">
                          <div>
                            <img
                              src="./assets/images/blog-details/blog-details__3.png"
                              alt=""
                              class="w-20 h-20 rounded-full"
                            >
                          </div>
                        </div>
                        <div class="flex-grow">
                          <div class="flex justify-between items-center">
                            <div>
                              <h4>
                                <a
                                  href="#"
                                  class="text-lg font-semibold text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor leading-25px"
                                >
                                  Rohan De Spond</a
                                >
                              </h4>
                              <p
                                class="text-xs font-medium text-contentColor dark:text-contentColor-dark leading-29px uppercase mb-5px"
                              >
                                25 JANUARY 2024
                              </p>
                            </div>
                            <div class="author__icon">
                              <button class="group">
                                <svg
                                  width="26"
                                  height="19"
                                  viewBox="0 0 26 19"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    class="group-hover:fill-primaryColor dark:fill-blackColor-dark dark:group-hover:fill-primaryColor block"
                                    d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z"
                                    fill="#121416"
                                  ></path>
                                </svg>
                              </button>
                            </div>
                          </div>

                          <p
                            class="text-sm text-contentColor dark:text-contentColor-dark leading-23px mb-15px"
                          >
                            There are many variations of passages of Lorem Ipsum
                            available, but the majority have. There are many
                            variations of passages of Lorem Ipsum available, but
                            the majority have
                          </p>
                        </div>
                      </li>
                      <li class="flex gap-30px mb-10 lg:pl-100px">
                        <div class="flex-shrink-0">
                          <div>
                            <img
                              src="./assets/images/blog-details/blog-details__4.png"
                              alt=""
                              class="w-20 h-20 rounded-full"
                            >
                          </div>
                        </div>
                        <div class="flex-grow">
                          <div class="flex justify-between items-center">
                            <div>
                              <h4>
                                <a
                                  href="#"
                                  class="text-lg font-semibold text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor leading-25px"
                                >
                                  Rohan De Spond</a
                                >
                              </h4>
                              <p
                                class="text-xs font-medium text-contentColor dark:text-contentColor-dark leading-29px uppercase mb-5px"
                              >
                                25 JANUARY 2024
                              </p>
                            </div>
                            <div class="author__icon">
                              <button class="group">
                                <svg
                                  width="26"
                                  height="19"
                                  viewBox="0 0 26 19"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    class="group-hover:fill-primaryColor dark:fill-blackColor-dark dark:group-hover:fill-primaryColor block"
                                    d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z"
                                    fill="#121416"
                                  ></path>
                                </svg>
                              </button>
                            </div>
                          </div>

                          <p
                            class="text-sm text-contentColor dark:text-contentColor-dark leading-23px mb-15px"
                          >
                            There are many variations of passages of Lorem Ipsum
                            available, but the majority have. There are many
                            variations of passages of Lorem Ipsum available, but
                            the majority have
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- write comment area -->
                  <div class="pt-50px">
                    <h4
                      class="text-size-26 font-bold text-blackColor dark:text-blackColor-dark mb-30px !leading-30px"
                      data-aos="fade-up"
                    >
                      Write your comment
                    </h4>
                    <form class="pt-5" data-aos="fade-up">
                      <div
                        class="grid grid-cols-1 xl:grid-cols-2 xl:gap-x-30px mb-10 gap-10"
                      >
                        <input
                          type="text"
                          placeholder="Enter your name*"
                          class="w-full pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor2 dark:border-borderColor2-dark placeholder:text-placeholder placeholder:opacity-80 h-15 leading-15 font-medium rounded"
                        >
                        <input
                          type="email"
                          placeholder="Enter your email*"
                          class="w-full pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor2 dark:border-borderColor2-dark placeholder:text-placeholder placeholder:opacity-80 h-15 leading-15 font-medium rounded"
                        >
                      </div>

                      <div
                        class="grid grid-cols-1 xl:grid-cols-2 xl:gap-x-30px mb-10 gap-10"
                      >
                        <input
                          type="text"
                          placeholder="Enter your number*"
                          class="w-full pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor2 dark:border-borderColor2-dark placeholder:text-placeholder placeholder:opacity-80 h-15 leading-15 font-medium rounded"
                        >
                        <input
                          type="text"
                          placeholder="Website*"
                          class="w-full pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor2 dark:border-borderColor2-dark placeholder:text-placeholder placeholder:opacity-80 h-15 leading-15 font-medium rounded"
                        >
                      </div>

                      <textarea
                       
                        class="w-full p-5 mb-2 bg-transparent text-sm text-contentColor dark:text-contentColor-dark border border-borderColor2 dark:border-borderColor2-dark rounded"
                        
                        cols="30"
                        rows="8"
                      >
                        Enter your Massage*</textarea

                      >
                      <div data-aos="fade-up" class="text-center">
                        <input type="checkbox" checked >
                        <span
                          class="text-size-15 text-contentColor dark:text-contentColor-dark font-medium text-center"
                        >
                          Save my name, email, and website in this browser for
                          the next time I comment.</span
                        >
                      </div>
                      <div class="mt-30px text-center">
                        <button
                          type="submit"
                          class="text-size-15 text-whiteColor bg-primaryColor px-70px py-13px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                        >
                          Post a Comment
                        </button>
                      </div>
                    </form>
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