<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    @foreach ($headers as $header )
      @if ($header->id_header == 'HDR-04')
        <title>{{ $header->keterangan}}</title>  
      @endif
    @endforeach
	  <meta name="keywords" content="Balatkop-uk Prov. Kalsel" />
	  <meta name="author" content="Balai Pelatihan Koperasi dan Usaha Kecil Provinsi Kalimantan Selatan" />
	  <meta name="robots" content="" />
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="Balatkop-UK Provinsi Kalimantan Selatan" />
	  <meta property="og:title" content="Portal Resmi Balai Pelatihan Koperasi dan Usaha Kecil Provinsi Kalimantan Selatan" />
	  <meta property="og:description" content="Koperasi Modern, UMKM  Naik Kelas" />
    <meta property="og:image" content="{{ asset ('assets/images/logo/logo_1.png') }}" />
	  <meta name="format-detection" content="telephone=no">
      @foreach($headers as $header)
        @if($header->id_header == 'HDR-02')
        <link
            rel="shortcut icon"
            type="image/x-icon"
            href="{{ asset('assets/images/'.$header->keterangan ) }}" 
        >
        @endif
       @endforeach
    <!-- link stylesheet -->
    <link rel="stylesheet" href="./assets/css/icofont.min.css" >
    <link rel="stylesheet" href="./assets/css/video-modal.css" >
    <link rel="stylesheet" href="./assets/css/aos.css" >
    <link rel="stylesheet" href="./assets/css/style.css" >
  </head>
  <body
    class="relative font-inter font-normal text-base leading-[1.8] bg-bodyBg dark:bg-bodyBg-dark"
  >
    <!-- preloader -->
    <div
      class="preloader flex fixed top-0 left-0 h-screen w-full items-center justify-center z-xxl bg-whiteColor opacity-100 visible transition-all duration-700"
    >
      <!-- spinner -->
      <div
        class="w-90px h-90px border-5px border-t-blue border-r-blue border-b-blue-light border-l-blue-light rounded-full animate-spin-infinit"
      ></div>
      <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
        <img src="./assets/images/pre.png" alt="Preloader" class="h-10 w-10 block" >
      </div>
    </div>
    <!-- theme fixed shadow -->
    <div>
      <div class="fixed-shadow left-[-250px]"></div>
      <div class="fixed-shadow right-[-250px]"></div>
    </div>

    <!-- theme controller -->
    <div
      class="fixed top-[100px] 2xl:top-[300px] transition-all duration-300 right-[-50px] hover:right-0 z-xl"
    >
      <button
        class="theme-controller w-90px h-10 bg-primaryColor dark:bg-whiteColor-dark rounded-l-lg2 text-whiteColor px-10px flex items-center dark:shadow-theme-controller"
      >
        <!-- dark -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="mr-10px w-5 block dark:hidden"
          viewBox="0 0 512 512"
        >
          <path
            d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="32"
          ></path>
        </svg>
        <span class="text-base block dark:hidden">Dark</span>
        <!-- light -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="hidden mr-10px w-5 dark:block"
          viewBox="0 0 512 512"
        >
          <path
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-miterlimit="10"
            stroke-width="32"
            d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94"
          ></path>
          <circle
            cx="256"
            cy="256"
            r="80"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-miterlimit="10"
            stroke-width="32"
          ></circle>
        </svg>
        <span class="text-base hidden dark:block">Light</span>
      </button>
    </div>
    <!-- scroll up button -->
    <div>
      <button
        class="scroll-up w-50px h-50px leading-50px text-center text-primaryColor bg-white hover:text-whiteColor hover:bg-primaryColor rounded-full fixed right-5 bottom-[60px] shadow-scroll-up z-medium text-xl dark:text-whiteColor dark:bg-primaryColor dark:hover:text-whiteColor-dark hidden"
      >
        <i class="icofont-rounded-up"></i>
      </button>
    </div>
    <!--======= Header area start =======-->
    <header>
      <!-- header top start -->
      <div class="bg-blackColor2 dark:bg-lightGrey10-dark hidden lg:block">
        <div
          class="container 3xl:container2-lg 4xl:container mx-auto text-whiteColor text-size-12 xl:text-sm py-5px xl:py-9px"
        >
          <div class="flex justify-between items-center">
            <div>
              @foreach($headers as $header)
                @if($header->id_header == 'HDR-05')
                 <p>Telepon : {{$header->keterangan}}
                @endif
              @endforeach

              @foreach($headers as $header)
                @if($header->id_header == 'HDR-06')
                 - Email: {{$header->keterangan}}</p>
                @endif
              @endforeach
              
            </div>
            <div class="flex gap-37px items-center">
              <div>
                @foreach($headers as $header)
                @if($header->id_header == 'HDR-07')
                 <p>
                  <i
                    class="icofont-location-pin text-primaryColor text-size-15 mr-5px"
                  ></i>
                  <a class="hover:text-primaryColor" href="{{ $header->link }}" target="_BLANK"><span>{{ $header->keterangan }}</span></a>
                </p>
                @endif
              @endforeach
              </div>
              <div>
                <!-- header social list -->
                <ul class="flex gap-13px text-size-15">
                  <li>
                    @foreach($headers as $header)
                    @if($header->id_header == 'HDR-08')
                    <a class="hover:text-primaryColor" href="{{ $header->link }}" target="_BLANK"
                      ><i class="icofont-instagram"></i
                    ></a>
                    @endif
                    @endforeach
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- header top end -->

      <!-- navbar start -->
      <div class="transition-all duration-500 sticky-header z-medium dark:bg-whiteColor-dark">
        <nav>
          <div
            class="py-15px lg:py-0 px-15px lg:container 3xl:container2-lg 4xl:container mx-auto relative">
            <div class="grid grid-cols-2 lg:grid-cols-12 items-center gap-15px">
              <!-- navbar left -->
              <div class="lg:col-start-1 lg:col-span-2">
                @foreach($headers as $header)
                 @if($header->id_header == 'HDR-01')
                <a href="{{ $header->link }}" class="block">
                    <img
                    src="{{ asset('assets/images/logo/'.$header->keterangan) }}"
                    alt="Logo"
                    class="w-logo-sm lg:w-auto py-2">
                </a>
                @endif
                @endforeach
              </div>
              <!-- Main menu -->
              <div class="hidden lg:block lg:col-start-3 lg:col-span-7">
                <ul class="nav-list flex justify-center">
                  <li class="nav-item group">
                    <a
                      href="#"
                      class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor"
                    >
                      Beranda
                    </a>
                  </li>

                  <li class="nav-item group relative">
                    <a
                      href="./pages/dashboards/instructor-dashboard.html"
                      class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor"
                    >
                      Profil
                      <i class="icofont-rounded-down"></i>
                    </a>
                    <!-- dropdown menu -->
                    <div
                      class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                      style="transition: 0.3s">
                      <div
                        class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark">
                        <ul>
                          <li>
                            <a
                              href="./pages/ecommerce/product-details.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >Tentang
                            </a>
                          </li>
                          <li>
                            <a
                              href="./pages/ecommerce/product-details.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >Visi dan Misi
                            </a>
                          </li>
                          <li>
                            <a
                              href="./pages/ecommerce/product-details.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >Maklumat Pelayanan
                            </a>
                          </li>
                          <li>
                            <a
                              href="./pages/ecommerce/product-details.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >Struktur Organisasi
                            </a>
                          </li>
                          <li class="relative group/nested">
                            <a
                              href="./pages/dashboards/instructor-dashboard.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg flex justify-between items-center dark:bg-whiteColor-dark dark:text-contentColor-dark dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                              >Pegawai <i class="icofont-rounded-right"></i>
                            </a>
                            <!-- nested dropdown menu -->
                            <!-- dropdown menu -->
                            <div class="nested-dropdown absolute left-full top-0 z-50 hidden opacity-0 group-hover/nested:block group-hover/nested:opacity-100" style="transition: 0.3s">
                              <div class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark"
                              >
                                <ul>
                                  <li>
                                    <a
                                      href="./pages/dashboards/instructor-dashboard.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Kepala Balai
                                    </a>
                                  </li>
                                  <li>
                                    <a
                                      href="./pages/dashboards/instructor-message.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Kelompok Jabatan Fungsional
                                      </a>
                                  </li>
                                  <li>
                                    <a
                                      href="./pages/dashboards/instructor-profile.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Sub Bagian Tata Usaha
                                    </a>
                                  </li>
                                  <li>
                                    <a
                                      href="./pages/dashboards/instructor-message.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Seksi Diklat SDM Koperasi
                                      </a>
                                  </li>
                                  <li>
                                    <a
                                      href="./pages/dashboards/instructor-wishlist.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Seksi Diklat SDM Usaha Kecil
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <li>
                            <a
                              href="./pages/ecommerce/product-details.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >Fasilitas
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item group relative">
                    <a
                      href="./pages/dashboards/instructor-dashboard.html"
                      class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor"
                    >
                      Layanan
                      <i class="icofont-rounded-down"></i>
                    </a>
                    <!-- dropdown menu -->
                    <div
                      class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                      style="transition: 0.3s">
                      <div
                        class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark">
                        <ul>
                          <li>
                            <a
                              href="./pages/ecommerce/product-details.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >Diklat SDM Koperasi
                            </a>
                          </li>
                          <li>
                            <a
                              href="./pages/ecommerce/product-details.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >Diklat SDM UMKM
                            </a>
                          </li>
                          <li>
                            <a
                              href="./pages/ecommerce/product-details.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >Rumah Kemasan
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item group">
                    <a
                      href="#"
                      class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor"
                    >
                      Berita
                    </a>
                  </li>
                  <li class="nav-item group relative">
                    <a
                      href="./pages/dashboards/instructor-dashboard.html"
                      class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor"
                    >
                      Info Tips
                      <i class="icofont-rounded-down"></i>
                    </a>
                    <!-- dropdown menu -->
                    <div
                      class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                      style="transition: 0.3s">
                      <div
                        class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark">
                        <ul>
                          <li>
                            <a
                              href="./pages/ecommerce/product-details.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >Koperasi
                            </a>
                          </li>
                          <li>
                            <a
                              href="./pages/ecommerce/product-details.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >UMKM
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

              <!-- navbar right -->
              <div class="lg:col-start-10 lg:col-span-3">
                <ul class="relative nav-list flex justify-end items-center">
                  <li class="hidden lg:block">
                    @foreach ($headers as $header )
                      @if ($header->id_header == 'HDR-09')
                    <a
                      href="{{ $header->link }}"
                      class="text-size-12 2xl:text-size-15 text-whiteColor bg-primaryColor block border-primaryColor border hover:text-primaryColor hover:bg-white px-15px py-2 rounded-standard dark:hover:bg-whiteColor-dark dark: dark:hover:text-whiteColor"
                      >{{ $header->keterangan}}</a
                    >
                    @endif
                    @endforeach
                  </li>
                  <li class="block lg:hidden">
                    <button
                      class="open-mobile-menu text-3xl text-darkdeep1 hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    >
                      <i class="icofont-navigation-menu"></i>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <!-- navbar end -->

      <!-- mobile menu -->
      <div
        class="mobile-menu w-mobile-menu-sm md:w-mobile-menu-lg fixed top-0 -right-[280px] md:-right-[330px] transition-all duration-500 w-mobile-menu h-full shadow-dropdown-secodary bg-whiteColor dark:bg-whiteColor-dark z-high block lg:hidden"
      >
        <button
          class="close-mobile-menu text-lg bg-darkdeep1 hover:bg-secondaryColor text-white px-[11px] py-[6px] absolute top-0 right-full hidden"
        >
          <i class="icofont icofont-close-line"></i>
        </button>
        <!-- mobile menu wrapper -->
        <div
          class="px-5 md:px-30px pt-5 md:pt-10 pb-50px h-full overflow-y-auto"
        >

          <!-- mobile menu accordions -->
          <div
            class="pt-8 pb-6 border-b border-borderColor dark:border-borderColor-dark"
          >
            <ul class="accordion-container">
              <li class="accordion">
                <!-- accordion header -->
                <div class="flex items-center justify-between">
                  <a
                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    href="index.html"
                    >Beranda</a
                  >
                </div>
              </li>
              <li class="accordion">
                <!-- accordion header -->
                <div class="flex items-center justify-between">
                  <a
                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    href="#"
                    >Profil</a
                  >
                  <button class="accordion-controller px-3 py-4">
                    <span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                    ></span
                    ><span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                    ></span>
                  </button>
                </div>
                <!-- accordion content -->
                <div
                  class="accordion-content h-0 overflow-hidden transition-all duration-500"
                >
                  <div class="content-wrapper">
                    <ul class="accordion-container">
                      <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="#"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Tentang</a
                          >
                        </div>
                        <div class="flex items-center justify-between">
                          <a
                            href="#"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Visi dan Misi</a
                          >
                        </div>
                        <div class="flex items-center justify-between">
                          <a
                            href="#"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Maklumat Pelayanan</a
                          >
                        </div>
                        <div class="flex items-center justify-between">
                          <a
                            href="#"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Struktur Organisasi</a
                          >
                        </div>
                      </li>
                      <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="#"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Pegawai</a
                          >
                          <button class="accordion-controller px-3 py-4">
                            <span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                            ></span>
                          </button>
                        </div>
                        <!-- accordion content -->
                        <div
                          class="accordion-content h-0 overflow-hidden transition-all duration-300"
                        >
                          <div class="content-wrapper">
                            <!-- Dropdown -->
                            <ul>
                              <li>
                                <a
                                  href="error.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Kepala Balai</a
                                >
                              </li>
                              <li>
                                <a
                                  href="error.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Kelompok Jabatan Fungsional</a
                                >
                              </li>
                              <li>
                                <a
                                  href="error.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Sub Bagian Tata Usaha</a
                                >
                              </li>
                              <li>
                                <a
                                  href="error-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Seksi Diklat SDM Koperasi</a
                                >
                              </li>
                              <li>
                                <a
                                  href="event-details.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Seksi Diklat SDM Usaha Kecil</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                  </div>
                </div>
              </li>
              <li class="accordion">
                <!-- accordion header -->
                <div class="flex items-center justify-between">
                  <a
                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    href="course.html"
                    >Layanan</a
                  >
                  <button class="accordion-controller px-3 py-4">
                    <span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                    ></span
                    ><span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                    ></span>
                  </button>
                </div>
                <!-- accordion content -->
                <div
                  class="accordion-content h-0 overflow-hidden transition-all duration-500"
                >
                  <div class="content-wrapper">
                    <ul class="accordion-container">
                      <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="#"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Diklat SDM Koperasi</a
                          >
                        </div>
                        <div class="flex items-center justify-between">
                          <a
                            href="#"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Diklat SDM UMKM</a
                          >
                        </div>
                        <div class="flex items-center justify-between">
                          <a
                            href="#"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Rumah Kemasan</a
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="accordion">
                <!-- accordion header -->
                <div class="flex items-center justify-between">
                  <a
                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    href="index.html"
                    >Berita</a
                  >
                </div>
              </li>
              <li class="accordion">
                <!-- accordion header -->
                <div class="flex items-center justify-between">
                  <a
                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    href="course.html"
                    >Info Tips</a
                  >
                  <button class="accordion-controller px-3 py-4">
                    <span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                    ></span
                    ><span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                    ></span>
                  </button>
                </div>
                <!-- accordion content -->
                <div
                  class="accordion-content h-0 overflow-hidden transition-all duration-500"
                >
                  <div class="content-wrapper">
                    <ul class="accordion-container">
                      <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="#"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Koperasi</a
                          >
                        </div>
                        <div class="flex items-center justify-between">
                          <a
                            href="#"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >UMKM</a
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- Mobile menu social area -->
          <div>
            <ul class="flex gap-6 items-center mb-5">
              <li>
                @foreach ($headers as $header)
                @if ($header->id_header == 'HDR-08')
                <a class="instagram" href="{{ $header->link }}" target="_BLANK"
                  ><i
                    class="icofont icofont-instagram dark:text-whiteColor dark:hover:text-secondaryColor"
                  ></i
                ></a>
                @endif
                @endforeach
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    @yield('content')

    <footer class="bg-darkblack">
      <div class="container pt-15px pb-5 lg:pb-10">
        <!-- footer main -->
        <section>
          <div
            class="grid grid-cols-12 gap-30px md:gap-y-5 lg:gap-y-0 pt-60px pb-50px md:pt-30px md:pb-30px lg:pt-110px lg:pb-20"
          >
            <!-- left -->
            <div
              class="col-start-1 col-span-12 md:col-span-6 lg:col-span-4 mr-30px"
              data-aos="fade-up"
            >
              <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                Tentang
              </h4>
              <p
                class="text-base lg:text-sm 2xl:text-base text-darkgray mb-30px leading-1.8 2xl:leading-1.8"
              >
                Balai Pelatihan Koperasi & Usaha Kecil Prov. Kalsel
                memiliki fungsi utama sebagai pusat pendidikan dan pelatihan untuk pengembangan 
                sumber daya manusia (SDM) koperasi dan pelaku usaha kecil di Provinsi Kalimantan Selatan.
              </p>
              <div class="flex items-center">
                <div>
                  <a
                    href="https://maps.app.goo.gl/FUaeDrXhwijyqEcTA" target="_BLANK"
                    >
                  <i
                    class="icofont-google-map text-3xl text-whiteColor h-78px w-78px bg-primaryColor leading-78px mr-22px block text-center
                    hover:text-primaryColor hover:bg-whiteColor inline-block rounded dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor"
                  ></i>
                  </a>
                </div>
                <div>
                  <h6 class="text-lg text-whiteColor font-medium leading-29px">
                    <a
                    href="https://maps.app.goo.gl/FUaeDrXhwijyqEcTA" target="_BLANK"
                    class="text-whiteColor relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >
                    Google Maps</a>
                  </h6>
                  <p class="text-sm text-whiteColor text-opacity-60 mb-1">
                    Jl. Ahmad Yani KM. 18.200 Kec. Liang Anggang Kota Banjarbaru
                  </p>
                </div>
              </div>
            </div>
            <!-- middle 1 -->
            <div
              class="col-start-1 col-span-12 md:col-start-7 lg:col-start-5 md:col-span-6 lg:col-span-2"
              data-aos="fade-up"
            >
              <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                Profil
              </h4>
              <ul class="flex flex-col gap-y-3">
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Tentang</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Visi dan Misi</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Maklumat Pelayanan</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Struktur Organisasi</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Fasilitas</a
                  >
                </li>
              </ul>
            </div>
            <!-- middle 2 -->
            <div
              class="col-start-1 col-span-12 md:col-start-1 lg:col-start-7 md:col-span-6 lg:col-span-3 pl-0 2xl:pl-60px"
              data-aos="fade-up"
            >
              <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                Layanan
              </h4>
              <ul class="flex flex-col gap-y-3">
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Diklat SDM Koperasi</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Diklat SDM UMKM</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Rumah Kemasan</a
                  >
                </li>
              </ul>
            </div>
            <!-- right -->
            <div
              class="col-start-1 col-span-12 md:col-start-7 lg:col-start-10 md:col-span-6 lg:col-span-3 pl-0 2xl:pl-50px"
              data-aos="fade-up"
            >
              <ul class="flex flex-col gap-y-5">
                <li>
                  <a class="flex items-center gap-3 group cursor-pointer">
                    <div class="lg:col-start-1 lg:col-span-3">
                      <a href="index.html">
                        <img src="./assets/images/logo/logo_3.png" alt="" >
                      </a>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="flex items-center gap-3 group cursor-pointer">
                    <div class="lg:col-start-1 lg:col-span-3">
                      <a href="index.html">
                        <img src="./assets/images/logo/logo_4.png" alt="" >
                      </a>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <!-- footer copyright  -->
       <div>
          <div
            class="grid grid-cols-1 lg:grid-cols-12 gap-5 lg:gap-30px pt-10 items-center"
          >
            <div class="lg:col-start-1 lg:col-span-3">
              <a href="index.html">
                <img src="./assets/images/logo/logo_2.png" alt="" >
              </a>
            </div>

            <div class="lg:col-start-4 lg:col-span-6">
              <p class="text-whiteColor">
                Copyright © <span class="text-primaryColor">2025 </span> by
                Balatkop-uk Prov. Kalsel
              </p>
            </div>

            <div class="lg:col-start-10 lg:col-span-3">
              <ul class="flex gap-3 lg:gap-2 2xl:gap-3 lg:justify-end">
                <li>
                  <a
                    href="https://www.instagram.com/balatkop.provkalsel/" target="_BLANK"
                    class="w-40.19px lg:w-35px 2xl:w-40.19px h-37px lg:h-35px 2xl:h-37px leading-37px lg:leading-35px 2xl:leading-37px text-whiteColor bg-whiteColor bg-opacity-10 hover:bg-primaryColor text-center"
                    ><i class="icofont-instagram"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/isotope.pkgd.min.js"></script>
    <script src="./assets/js/accordion.js"></script>
    <script src="./assets/js/chart.js"></script>
    <script src="./assets/js/count.js"></script>
    <script src="./assets/js/countdown.js"></script>
    <script src="./assets/js/counterup.js"></script>
    <script src="./assets/js/dropdown.js"></script>
    <script src="./assets/js/filter.js"></script>
    <script src="./assets/js/mobileMenu.js"></script>
    <script src="./assets/js/modal.js"></script>
    <script src="./assets/js/popup.js"></script>
    <script src="./assets/js/preloader.js"></script>
    <script src="./assets/js/scrollUp.js"></script>
    <script src="./assets/js/slider.js"></script>
    <script src="./assets/js/smoothScroll.js"></script>
    <script src="./assets/js/stickyHeader.js"></script>
    <script src="./assets/js/tabs.js"></script>
    <script src="./assets/js/theme.js"></script>
    <script src="./assets/js/videoModal.js"></script>
    <script  src="./assets/js/vanilla-tilt.js"></script>
    <script  src="./assets/js/aos.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>
</html>
