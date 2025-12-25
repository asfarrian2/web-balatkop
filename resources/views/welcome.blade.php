<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Balatkop-uk Prov. Kalsel</title>
    <meta name="description" content="Portal Resmi Balai Pelatihan Koperasi dan Usaha Kecil Provinsi Kalimantan Selatan" />
	<meta name="keywords" content="Balai Pelatihan Koperasi dan Usaha Kecil Prov. Kalimantan Selatan" />
	<meta name="author" content="Balatkop-UK"/>
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{ asset('assets/images/favicon.png') }}"
    >
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
              <p>Telepon : (0511) 4707559 - Email: web.balatkopuk@gmail.com</p>
            </div>
            <div class="flex gap-37px items-center">
              <div>
                <p>
                  <i
                    class="icofont-location-pin text-primaryColor text-size-15 mr-5px"
                  ></i>
                  <a class="hover:text-primaryColor" href="https://maps.app.goo.gl/FUaeDrXhwijyqEcTA" target="_BLANK"><span>Jl. Ahmad Yani KM. 18.200 Kec. Liang Anggang Kota Banjarbaru</span></a>
                </p>
              </div>
              <div>
                <!-- header social list -->
                <ul class="flex gap-13px text-size-15">
                  <li>
                  </li>
                  <li>
                    <a class="hover:text-primaryColor" href="https://www.instagram.com/balatkop.provkalsel/" target="_BLANK"
                      ><i class="icofont-instagram"></i
                    ></a>
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
                <a href="index.html" class="block">
                    <img
                    src="{{ asset ('assets/images/logo/logo_1.png') }}"
                    alt="Logo"
                    class="w-logo-sm lg:w-auto py-2">
                </a>
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
                    <a
                      href="#"
                      class="text-size-12 2xl:text-size-15 text-whiteColor bg-primaryColor block border-primaryColor border hover:text-primaryColor hover:bg-white px-15px py-2 rounded-standard dark:hover:bg-whiteColor-dark dark: dark:hover:text-whiteColor"
                      >Ingin Ikut Diklat ? Gabung Disini</a
                    >
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
                <a class="instagram" href="https://www.instagram.com/balatkop.provkalsel/" target="_BLANK"
                  ><i
                    class="icofont icofont-instagram dark:text-whiteColor dark:hover:text-secondaryColor"
                  ></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <!-- main body -->
    <main class="bg-transparent">
      <section>
        <!-- bannaer section -->
        <div
          class="container2-xl bg-darkdeep1 pt-50px md:pt-20 pb-205px md:pb-35 rounded-2xl relative overflow-hidden shadow-brand"
        >
          <div class="container grid grid-cols-1 lg:grid-cols-2 items-center">
            <!-- banner Left -->
            <div data-aos="fade-up">
              <h3
                class="uppercase text-secondaryColor text-size-15 mb-5px md:mb-15px font-inter tracking-5px"
              >
                SELAMAT DATANG DI
              </h3>
              <h1
                class="text-3xl text-whiteColor md:text-6xl lg:text-size-50 2xl:text-6xl leading-10 md:leading-18 lg:leading-62px 2xl:leading-18 md:tracking-half lg:tracking-normal 2xl:tracking-half font-bold mb-15px"
              >
                Balai Pelatihan Koperasi <br class="hidden md:block" >
                dan Usaha Kecil <br> Prov. Kalsel
              </h1>
              <p class="text-size-15md:text-lg text-white font-medium mb-45px">
                Koperasi Modern UMKM Naik Kelas, Bekerja Bersama Merangkul Semua Provinsi Kalimantan Selatan
              </p>

              <div>
                <a
                  href="course.html"
                  class="text-sm md:text-size-15 font-semibold text-darkdeep2 bg-whiteColor border border-whiteColor px-5 md:px-30px py-3 md:py-4 hover:text-whiteColor hover:bg-darkblack rounded inline-block mr-6px md:mr-30px shadow-hero-action dark:bg-whiteColor-dark dark:hover:bg-whiteColor dark:text-whiteColor dark:hover:text-whiteColor-dark dark:border-none"
                >
                  Gabung Diklat
                </a>
                <a
                  href="#"
                  class="text-sm md:text-size-15 font-semibold text-whiteColor py-3 md:py-4 hover:text-secondaryColor inline-block"
                >
                  Informasi Lebih Lanjut <i class="icofont-long-arrow-right"></i>
                </a>
              </div>
            </div>
            <!-- banner right -->
            <div data-aos="fade-up">
              <div class="tilt relative">
                <img
                  class="w-full"
                  src="./assets/images/about/about_8.png"
                  alt=""
                ><img
                  class="absolute left-0 top-0 lg:top-4 right-0 mx-auto"
                  src="./assets/images/about/about_1.png"
                  alt=""
                >
              </div>
            </div>
          </div>

          <div>
            <img
              class="absolute left-1/2 bottom-[15%] animate-spin-slow"
              src="./assets/images/register/register__2.png"
              alt=""
            ><img
              class="absolute left-[42%] sm:left-[65%] md:left-[42%] lg:left-[5%] top-[4%] sm:top-[1%] md:top-[4%] lg:top-[10%] animate-move-hor"
              src="./assets/images/herobanner/herobanner__6.png"
              alt=""
            ><img
              class="absolute right-[5%] bottom-[15%]"
              src="./assets/images/herobanner/herobanner__7.png"
              alt=""
            ><img
              class="absolute top-[5%] left-[45%]"
              src="./assets/images/herobanner/herobanner__7.png"
              alt=""
            >
          </div>
        </div>
      </section>

       <!-- brand section -->
      <div data-aos="fade-up">
        <div class="container2-md flex flex-wrap items-center justify-center bg-white dark:bg-whiteColor-dark rounded-md mx-auto md:-translate-y-1/2 w-full shadow-brand">
          <div class="w-1/3 md:basis-1/4 lg:basis-1/5 flex justify-center py-5 lg:py-35px 2xl:py-45px">
            <a href="#">
              <img src="./assets/images/brand/brand_3.png" alt="">
            </a>
          </div>
          <div class="w-1/3 md:basis-1/4 lg:basis-1/5 flex justify-center py-5 lg:py-35px 2xl:py-45px">
            <a href="#">
              <img src="./assets/images/brand/brand_4.png" alt="">
            </a>
          </div>
          <div class="w-1/3 md:basis-1/4 lg:basis-1/5 flex justify-center py-5 lg:py-35px 2xl:py-45px">
            <a href="#">
              <img src="./assets/images/brand/brand_5.png" alt="">
            </a>
          </div>
        </div>
      </div>
      <!-- about and counter section -->
      <section>
        <div class="container">
          <!-- about section  -->
          <div class="grid grid-cols-1 lg:grid-cols-2 pt-30px gap-x-30px">
            <!-- about left -->
            <div
              class="relative z-0 mb-30px lg:mb-0 pb-0 md:pb-30px xl:pb-0 overflow-visible"
              data-aos="fade-up"
            >
              <div class="tilt">
                <img
                  class="md:ml-[70px]"
                  src="./assets/images/about/about_2.png"
                  alt=""
                >
                <img
                  class="absolute right-0 sm:right-[-17px] md:right-36 lg:right-4 bottom-[91px] md:bottom-0"
                  src="./assets/images/about/about_3.png"
                  alt=""
                >
                <img
                  class="absolute top-[-18px] left-[30px] animate-move-hor z-[-1]"
                  src="./assets/images/about/about_4.png"
                  alt=""
                >
                <img
                  class="absolute top-[30%] left-0 z-[-1]"
                  src="./assets/images/about/about_11.png"
                  alt=""
                >
              </div>
              <!-- experience -->
              <div
                class="px-10px py-3 md:py-25px border-l-4 border-primaryColor shadow-experience absolute bottom-0 left-0 bg-white dark:bg-whiteColor-dark animate-move-var w-[290px]"
              >
                <div class="counter flex items-center">
                  <p
                    class="text-[40px] text-primaryColor font-bold uppercase pr-10px leading-1"
                  >
                    <span data-countup-number="12">12</span>
                  </p>
                  <p
                    class="text-blackColor dark:text-blackColor-dark font-bold leading-26px"
                  >
                    Desember 2025
                  </p>
                </div>
              </div>
            </div>
            <!-- about right -->
            <div data-aos="fade-up">
              <span
                class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block"
              >
                Banner
              </span>
              <h3
                class="text-3xl md:text-size-45 leading-10 md:leading-2xl font-bold text-blackColor dark:text-blackColor-dark pb-25px"
              >
                Selamat Hari
                <span
                  class="relative after:w-full after:h-[7px] after:bg-secondaryColor after:absolute after:left-0 after:bottom-3 md:after:bottom-5"
                  >Natal <br></span
                >
                Marry Chrismass
              </h3>
              <p
                class="text-sm md:text-base leading-7 text-contentColor dark:text-contentColor-dark mb-6 pl-3 border-l-2 border-primaryColor"
              >
                “Di bawah cahaya pohon Natal, semoga harapan barumu bersinar terang. Selamat merayakan Natal!”
              </p>
              <ul class="space-y-5">
                <li class="flex items-center group">
                  <i
                    class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"
                  ></i>
                  <p
                    class="text-sm md:text-base font-medium text-blackColor dark:text-blackColor-dark"
                  >
                    #selamatharinatal2025
                  </p>
                </li>
                <li class="flex items-center group">
                  <i
                    class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"
                  ></i>
                  <p
                    class="text-sm md:text-base font-medium text-blackColor dark:text-blackColor-dark"
                  >
                    #koperasimodern
                  </p>
                </li>
                <li class="flex items-center group">
                  <i
                    class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"
                  ></i>
                  <p
                    class="text-sm md:text-base font-medium text-blackColor dark:text-blackColor-dark"
                  >
                    #umkmnaikkelas
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Popular Subject Sectoion-->
      <section class="bg-lightGrey10 dark:bg-lightGrey10-dark pt-50px pb-110px">
        <div class="container">
          <!-- about section  -->
          <div class="grid grid-cols-1 lg:grid-cols-2 pt-30px gap-x-30px">
            <!-- about left -->
            <div
              class="mb-30px lg:mb-0 pb-0 md:pb-30px xl:pb-0"
              data-aos="fade-up"
            >
              <div class="relative">
                <div>
                  <img
                    class="absolute bottom-9 lg:bottom-[-50px] right-[50px] animate-move-hor"
                    src="./assets/images/service/service__shape__1.png"
                    alt=""
                  >
                </div>
                <span
                  class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block"
                >
                  Tentang
                </span>
                <h3
                  class="text-3xl md:text-size-35 2xl:text-size-38 3xl:text-size-42 leading-10 md:leading-45px 2xl:leading-50px 3xl:leading-2xl font-bold text-blackColor dark:text-blackColor-dark pb-25px"
                >
                  Balai Pelatihan Koperasi & Usaha Kecil Prov. Kalsel
                </h3>
                <p
                  class="text-sm md:text-base text-contentColor dark:text-contentColor-dark mb-10px 2xl:mb-50px"
                >
                  adalah unit pelaksana teknis di bawah Dinas Koperasi dan UKM Provinsi Kalimantan Selatan
                </p>
                <p
                  class="text-sm md:text-base leading-7 text-contentColor dark:text-contentColor-dark mb-10 pl-3 border-l-[3px] border-secondaryColor"
                >
                  yang memiliki fungsi utama sebagai pusat pendidikan dan pelatihan untuk pengembangan sumber daya manusia (SDM) koperasi dan pelaku usaha kecil di Provinsi Kalimantan Selatan.
                </p>
                <div>
                  <a
                    class="text-size-15 text-whiteColor bg-secondaryColor px-25px py-10px border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor inline-block rounded dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor"
                    href="#"
                    >Selengkapnya <i class="icofont-long-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- sbject right -->
            <div class="relative z-0 overflow-visible">
              <!-- animted area -->
              <div data-aos="fade-up">
                <img
                  class="absolute sm:block xl:left-1/4 z-[-1] top-6 animate-move-var"
                  src="./assets/images/service/service__shape__bg__1.png"
                  alt=""
                >
              </div>
              <!-- subject card -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-30px">
                <!-- card 1 -->
                <div data-aos="fade-up">
                  <div
                    class="p-35px group bg-whiteColor rounded-xl transition-all duration-300 shadow-dropdown-secodary hover:bg-primaryColor hover:-translate-y-5px hover:text-whiteColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor"
                  >
                    <!-- card svg -->
                    <div
                      class="-translate-y-2 flex justify-between overflow-hidden mb-10px"
                    >
                      <div class="relative w-20 h-[60px]">
                        <svg
                          class="absolute inline-block translate-y-3 translate-x-2 w-20 h-[60px]"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.30281 28.9536H8.45394C9.05625 28.9536 9.48648 29.5426 9.48648 30.2495V36.8465C9.48648 37.6711 9.05625 38.2602 8.45394 38.2602H6.30281C5.78654 38.2602 5.27026 37.6711 5.27026 36.8465V30.2495C5.27026 29.5426 5.78654 28.9536 6.30281 28.9536Z"
                            fill="#5F2DED"
                          ></path>
                            <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M13.7027 23.7833H15.8987C16.4257 23.7833 16.8649 24.4239 16.8649 25.3207V36.7228C16.8649 37.6196 16.4257 38.2602 15.8987 38.2602H13.7027C13.0879 38.2602 12.6487 37.6196 12.6487 36.7228V25.3207C12.6487 24.4239 13.0879 23.7833 13.7027 23.7833Z"
                            fill="#5F2DED"
                          ></path>
                            <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M21.0596 19.6471H23.2108C23.727 19.6471 24.2433 20.412 24.2433 21.1769V36.7303C24.2433 37.6227 23.727 38.2602 23.2108 38.2602H21.0596C20.4573 38.2602 20.0271 37.6227 20.0271 36.7303V21.1769C20.0271 20.412 20.4573 19.6471 21.0596 19.6471Z"
                            fill="#5F2DED"
                          ></path>
                            <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M28.4381 15.5109H30.5892C31.1055 15.5109 31.6217 16.1499 31.6217 17.0445V36.7265C31.6217 37.6212 31.1055 38.2602 30.5892 38.2602H28.4381C27.8357 38.2602 27.4055 37.6212 27.4055 36.7265V17.0445C27.4055 16.1499 27.8357 15.5109 28.4381 15.5109Z"
                            fill="#5F2DED"
                          ></path>
                            <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M26.9989 7.6293L23.05 18.137L20.3744 15.4678C15.622 19.6266 9.96272 22.5976 3.63238 24.2568C1.36694 24.9297 0.353173 21.6176 2.74495 21.0505C8.47735 19.533 13.5443 16.8156 17.8363 13.1279L15.5453 10.8879L26.9989 7.6293Z"
                            fill="#FFB31F"
                          ></path>
                        </svg>

                        <div class="service__bg__img w-20 h-[60px]">
                          <svg
                            class="w-20 h-[60px]"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M63.3775 44.4535C54.8582 58.717 39.1005 53.2202 23.1736 47.5697C7.2467 41.9192 -5.18037 32.7111 3.33895 18.4477C11.8583 4.18418 31.6595 -2.79441 47.5803 2.85105C63.5011 8.49652 71.8609 30.2313 63.3488 44.4865L63.3775 44.4535Z"
                              fill="#5F2DED"
                              fill-opacity="0.05"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <div class="service__small__img w-7 h-[60px]">
                        <svg
                          class="icon__hover__img w-7 h-[60px] opacity-0 group-hover:opacity-100"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.5961 10.265L19 1.33069L10.0022 3.73285L1 6.1306L7.59393 12.6627L14.1879 19.1992L16.5961 10.265Z"
                            stroke="#FFB31F"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <!-- card content -->
                    <div>
                      <a
                        href="#"
                        class="text-2xl lg:text-lg 2xl:text-2xl font-semibold mb-15px md:mb-0 2xl:mb-15px hover:text-secondaryColor font-hind  dark:text-whiteColor dark:hover:text-secondaryColor dark:transition-all dark:duration-300"
                      >
                        Menyelenggarakan Pelatihan
                      </a>
                      <p
                        class="text-sm lg:text-xs 2xl:text-sm text-contentColor group-hover:text-whiteColor mb-15px lg:mb-2 2xl:mb-15px transition-all duration-300"
                      >
                        Kegiatan Pelatihan teknis dan manajerial untuk meningkatkan keterampilan SDM Koperasi dan UMKM 
                      </p>
                      <div>
                        <div
                          class="text-sm text-black dark:text-blackColor-darkColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor-dark"
                        >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- card 2 -->
                <div data-aos="fade-up">
                  <div class="md:translate-y-[30px]">
                    <div
                      class="p-35px group bg-whiteColor rounded-xl transition-all duration-300 shadow-dropdown-secodary hover:bg-primaryColor hover:-translate-y-5px hover:text-whiteColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor "
                    >
                      <!-- card svg -->
                      <div
                        class="-translate-y-2 flex justify-between overflow-hidden mb-10px"
                      >
                        <div class="relative w-20 h-[60px]">
                          <svg
                            class="absolute inline-block translate-y-3 translate-x-2 w-20 h-[60px]"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              d="M28.525 44.0499H20.4753C18.7037 44.0499 17.2625 42.7046 17.2625 41.0509C17.2625 36.723 15.7895 32.4935 13.115 29.1417C11.2743 26.835 10.3045 24.0912 10.3103 21.2067C10.3172 17.7711 11.7888 14.4906 14.4541 11.9697C17.1201 9.44796 20.6146 8.03229 24.2939 7.98346C28.1232 7.9323 31.7312 9.28502 34.4566 11.7915C37.1864 14.302 38.6898 17.6547 38.6898 21.2322C38.6898 24.0423 37.7594 26.7272 35.9993 28.9965C33.2113 32.5912 31.7377 36.7597 31.7377 41.0511C31.7377 42.7046 30.2964 44.0499 28.525 44.0499ZM24.5008 10.6603C24.4454 10.6603 24.3904 10.6607 24.3349 10.6614C18.3004 10.7416 13.1927 15.5731 13.1814 21.2117C13.1767 23.5138 13.9501 25.7029 15.418 27.5424C18.4589 31.3533 20.1335 36.1507 20.1335 41.0509C20.1335 41.2278 20.2869 41.3716 20.4752 41.3716H28.5249C28.7133 41.3716 28.8665 41.2278 28.8665 41.051C28.8665 36.1921 30.5286 31.4809 33.6733 27.4265C35.0768 25.6168 35.8187 23.4749 35.8187 21.2321C35.8187 18.3773 34.6191 15.7019 32.4409 13.6987C30.3067 11.7359 27.4925 10.6603 24.5008 10.6603Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              d="M34.5884 35.3186H14.4117V37.9969H34.5884V35.3186Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              d="M23.8501 30.4466L21.4301 29.0054L24.8268 24.0417H21.5536C21.0311 24.0417 20.5498 23.7768 20.297 23.3501C20.0444 22.9235 20.0602 22.4024 20.3384 21.9897L25.0805 14.9543L27.5109 16.38L24.1519 21.3634H27.4464C27.9708 21.3634 28.4533 21.63 28.7053 22.059C28.9573 22.4879 28.9385 23.0109 28.6564 23.4232L23.8501 30.4466Z"
                              fill="#FFB31F"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              d="M25.9355 2.17908H23.0645V6.19654H25.9355V2.17908Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              d="M10.6816 6.93133L8.65027 8.8241L11.6922 11.6649L13.7235 9.77218L10.6816 6.93133Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              d="M38.3173 6.93027L35.2754 9.77112L37.3067 11.6639L40.3486 8.82304L38.3173 6.93027Z"
                              fill="#5F2DED"
                            ></path>
                          </svg>

                          <div class="service__bg__img w-20 h-[60px]">
                            <svg
                              class="w-20 h-[60px]"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M63.3775 44.4535C54.8582 58.717 39.1005 53.2202 23.1736 47.5697C7.2467 41.9192 -5.18037 32.7111 3.33895 18.4477C11.8583 4.18418 31.6595 -2.79441 47.5803 2.85105C63.5011 8.49652 71.8609 30.2313 63.3488 44.4865L63.3775 44.4535Z"
                                fill="#5F2DED"
                                fill-opacity="0.05"
                              ></path>
                            </svg>
                          </div>
                        </div>
                        <div class="service__small__img w-7 h-[60px]">
                          <svg
                            class="icon__hover__img w-7 h-[60px] opacity-0 group-hover:opacity-100"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M16.5961 10.265L19 1.33069L10.0022 3.73285L1 6.1306L7.59393 12.6627L14.1879 19.1992L16.5961 10.265Z"
                              stroke="#FFB31F"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <!-- card content -->
                      <div>
                        <a
                          href="#"
                          class="text-2xl lg:text-lg 2xl:text-2xl font-semibold mb-15px md:mb-0 2xl:mb-15px hover:text-secondaryColor font-hind  dark:text-whiteColor dark:hover:text-secondaryColor dark:transition-all dark:duration-300"
                        >
                          Meningkatkan Kapasitas SDM
                        </a>
                        <p
                          class="text-sm lg:text-xs 2xl:text-sm text-contentColor group-hover:text-whiteColor mb-15px lg:mb-2 2xl:mb-15px transition-all duration-300"
                        >
                          Mengembangkan kompetensi pelaku Koperasi dan UMKM agar lebih profesional, produktif dan mampu bersaing di pasar hingga era digital
                        </p>
                        <div>
                          <div
                            class="text-sm text-black dark:text-blackColor-darkColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor-dark"
                          >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- card 3 -->
                <div data-aos="fade-up">
                  <div
                    class="p-35px group bg-whiteColor rounded-xl transition-all duration-300 shadow-dropdown-secodary hover:bg-primaryColor hover:-translate-y-5px hover:text-whiteColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor"
                  >
                    <!-- card svg -->
                    <div
                      class="-translate-y-2 flex justify-between overflow-hidden mb-10px"
                    >
                      <div class="relative w-20 h-[60px]">
                        <svg
                          class="absolute inline-block translate-y-3 translate-x-2 w-20 h-[60px]"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                            d="M45.8483 26.6935C45.3965 26.2639 44.7953 26.0262 44.1558 26.0262C43.5164 26.0262 42.9166 26.2639 42.4634 26.6935L33.7409 34.9886C33.7306 34.9886 33.7183 34.9867 33.708 34.9867H25.1438C25.1438 34.9541 25.1458 34.9229 25.1458 34.8898C25.1458 34.2537 25.0301 33.6443 24.8165 33.0772H29.4735C29.7924 33.6951 30.4593 34.1214 31.2316 34.1214C32.314 34.1214 33.193 33.2873 33.193 32.258C33.193 31.2287 32.314 30.3946 31.2316 30.3946C30.4593 30.3946 29.7924 30.821 29.4735 31.4389H23.8321C22.7928 30.2507 21.2243 29.4949 19.4716 29.4949C17.9393 29.4949 16.5502 30.0736 15.53 31.0111L15.5281 31.0092L2.44995 43.5669H15.5486L19.0217 40.2842H33.708C34.1956 40.2842 34.6542 40.1645 35.0526 39.9548C35.325 39.8434 35.5749 39.6827 35.79 39.4776L45.8488 29.9124C46.3015 29.4832 46.5499 28.911 46.5499 28.3029C46.5499 27.6949 46.3015 27.1231 45.8483 26.6935ZM19.4716 37.1422C18.1633 37.1422 17.1034 36.1325 17.1034 34.8902C17.1034 33.6461 18.1633 32.6369 19.4716 32.6369C20.7799 32.6369 21.8397 33.6466 21.8397 34.8902C21.8397 36.1325 20.7799 37.1422 19.4716 37.1422ZM33.6664 38.9106C32.9255 38.9106 32.3253 38.3402 32.3253 37.6352C32.3253 36.9321 32.925 36.3599 33.6664 36.3599C34.4077 36.3599 35.0075 36.9321 35.0075 37.6352C35.0075 38.3402 34.4077 38.9106 33.6664 38.9106ZM36.3001 36.6749C36.133 36.2634 35.8606 35.9028 35.5127 35.6209L42.0537 29.4026C42.2727 29.7814 42.602 30.096 43.0019 30.3024L36.3001 36.6749ZM36.231 9.4762H28.4753V8.49301H36.231V9.4762ZM36.231 12.0986H28.4753V11.1155H36.231V12.0986ZM23.3048 9.4762H15.5486V8.49301H23.3044L23.3048 9.4762ZM23.3048 12.0986H15.5486V11.1155H23.3044L23.3048 12.0986ZM41.057 5.87011H39.3308V4.23132H28.589C27.7295 4.23132 26.9215 4.55004 26.3139 5.1283C26.1517 5.28253 26.0106 5.45121 25.8886 5.63014C25.7666 5.45121 25.6255 5.28253 25.4633 5.1283C24.8557 4.55004 24.0477 4.23132 23.1882 4.23132H12.4464V5.87011H10.7231V23.8991H24.0217C24.2677 24.6582 25.011 25.2103 25.8901 25.2103C26.7691 25.2103 27.5125 24.6586 27.7585 23.8991H41.057V5.87011ZM27.0455 5.82305C27.4576 5.43071 28.0059 5.2145 28.589 5.2145H38.2964L38.2797 20.6211H30.4471C29.0344 20.6211 27.6364 20.9873 26.4237 21.6644L26.407 7.29176C26.4065 6.73727 26.6329 6.21586 27.0455 5.82305ZM13.4803 5.21497H23.1877C23.7708 5.21497 24.3191 5.43118 24.7312 5.82352C25.1433 6.21586 25.3702 6.73773 25.3697 7.29223L25.353 21.6653C24.1388 20.9878 22.7413 20.6215 21.3296 20.6215H13.4803V5.21497Z"
                            fill="#5F2DED"
                          ></path>
                          <rect
                            x="15"
                            y="8.54175"
                            width="8"
                            height="0.993317"
                            fill="#FFB31F"
                          ></rect>
                          <rect
                            x="28"
                            y="8.54175"
                            width="8"
                            height="0.993317"
                            fill="#FFB31F"
                          ></rect>
                          <rect
                            x="15"
                            y="11.5198"
                            width="8"
                            height="0.993319"
                            fill="#FFB31F"
                          ></rect>
                          <rect
                            x="28"
                            y="11.5198"
                            width="8"
                            height="0.993319"
                            fill="#FFB31F"
                          ></rect>
                        </svg>

                        <div class="service__bg__img w-20 h-[60px]">
                          <svg
                            class="w-20 h-[60px]"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M63.3775 44.4535C54.8582 58.717 39.1005 53.2202 23.1736 47.5697C7.2467 41.9192 -5.18037 32.7111 3.33895 18.4477C11.8583 4.18418 31.6595 -2.79441 47.5803 2.85105C63.5011 8.49652 71.8609 30.2313 63.3488 44.4865L63.3775 44.4535Z"
                              fill="#5F2DED"
                              fill-opacity="0.05"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <div class="service__small__img w-7 h-[60px]">
                        <svg
                          class="icon__hover__img w-7 h-[60px] opacity-0 group-hover:opacity-100"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.5961 10.265L19 1.33069L10.0022 3.73285L1 6.1306L7.59393 12.6627L14.1879 19.1992L16.5961 10.265Z"
                            stroke="#FFB31F"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <!-- card content -->
                    <div>
                      <a
                        href="#"
                        class="text-2xl lg:text-lg 2xl:text-2xl font-semibold mb-15px md:mb-0 2xl:mb-15px hover:text-secondaryColor font-hind  dark:text-whiteColor dark:hover:text-secondaryColor dark:transition-all dark:duration-300"
                      >
                        Fasilitasi Pembinaan dan Pendampingan
                      </a>
                      <p
                        class="text-sm lg:text-xs 2xl:text-sm text-contentColor group-hover:text-whiteColor mb-15px lg:mb-2 2xl:mb-15px transition-all duration-300"
                      >
                        Berperan dalam membantu pendampingan, konsultasi, dan bimbingan teknis pasca pelatihan SDM Koperasi dan UMKM
                      </p>
                      <div>
                        <div
                          class="text-sm text-black dark:text-blackColor-darkColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor-dark"
                        >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- card 4 -->
                <div data-aos="fade-up">
                  <div class="md:translate-y-[30px]">
                    <div
                      class="p-35px group bg-whiteColor rounded-xl transition-all  duration-300 shadow-dropdown-secodary hover:bg-primaryColor hover:-translate-y-5px hover:text-whiteColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor "
                    >
                      <!-- card svg -->
                      <div
                        class="-translate-y-2 flex justify-between overflow-hidden mb-10px"
                      >
                        <div class="relative w-20 h-[60px]">
                          <svg
                            class="absolute inline-block translate-y-3 translate-x-2 w-20 h-[60px]"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M6.30281 28.9536H8.45394C9.05625 28.9536 9.48648 29.5426 9.48648 30.2495V36.8465C9.48648 37.6711 9.05625 38.2602 8.45394 38.2602H6.30281C5.78654 38.2602 5.27026 37.6711 5.27026 36.8465V30.2495C5.27026 29.5426 5.78654 28.9536 6.30281 28.9536Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M13.7027 23.7833H15.8987C16.4257 23.7833 16.8649 24.4239 16.8649 25.3207V36.7228C16.8649 37.6196 16.4257 38.2602 15.8987 38.2602H13.7027C13.0879 38.2602 12.6487 37.6196 12.6487 36.7228V25.3207C12.6487 24.4239 13.0879 23.7833 13.7027 23.7833Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M21.0596 19.6471H23.2108C23.727 19.6471 24.2433 20.412 24.2433 21.1769V36.7303C24.2433 37.6227 23.727 38.2602 23.2108 38.2602H21.0596C20.4573 38.2602 20.0271 37.6227 20.0271 36.7303V21.1769C20.0271 20.412 20.4573 19.6471 21.0596 19.6471Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M28.4381 15.5109H30.5892C31.1055 15.5109 31.6217 16.1499 31.6217 17.0445V36.7265C31.6217 37.6212 31.1055 38.2602 30.5892 38.2602H28.4381C27.8357 38.2602 27.4055 37.6212 27.4055 36.7265V17.0445C27.4055 16.1499 27.8357 15.5109 28.4381 15.5109Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M26.9989 7.6293L23.05 18.137L20.3744 15.4678C15.622 19.6266 9.96272 22.5976 3.63238 24.2568C1.36694 24.9297 0.353173 21.6176 2.74495 21.0505C8.47735 19.533 13.5443 16.8156 17.8363 13.1279L15.5453 10.8879L26.9989 7.6293Z"
                              fill="#FFB31F"
                            ></path>
                          </svg>

                          <div class="service__bg__img w-20 h-[60px]">
                            <svg
                              class="w-20 h-[60px]"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M63.3775 44.4535C54.8582 58.717 39.1005 53.2202 23.1736 47.5697C7.2467 41.9192 -5.18037 32.7111 3.33895 18.4477C11.8583 4.18418 31.6595 -2.79441 47.5803 2.85105C63.5011 8.49652 71.8609 30.2313 63.3488 44.4865L63.3775 44.4535Z"
                                fill="#5F2DED"
                                fill-opacity="0.05"
                              ></path>
                            </svg>
                          </div>
                        </div>
                        <div class="service__small__img w-7 h-[60px]">
                          <svg
                            class="icon__hover__img w-7 h-[60px] opacity-0 group-hover:opacity-100"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M16.5961 10.265L19 1.33069L10.0022 3.73285L1 6.1306L7.59393 12.6627L14.1879 19.1992L16.5961 10.265Z"
                              stroke="#FFB31F"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <!-- card content -->
                      <div>
                        <a
                          class="text-2xl lg:text-lg 2xl:text-2xl font-semibold mb-15px md:mb-0 2xl:mb-15px hover:text-secondaryColor font-hind  dark:text-whiteColor dark:hover:text-secondaryColor dark:transition-all dark:duration-300"
                        >
                          Mendorong Transformasi Koperasi dan UMKM
                        </a>
                        <p
                          class="text-sm lg:text-xs 2xl:text-sm text-contentColor group-hover:text-whiteColor mb-15px lg:mb-2 2xl:mb-15px transition-all duration-300"
                        >
                          Bertransformasi menjadi SDM Koperasi dan UMKM yang modern dan berdaya saing, melalui pelatihan digitalisasi, tata kelola modern dan peningkatan sistem manajemen
                        </p>
                        <div>
                          <div
                            class="text-sm text-black dark:text-blackColor-darkColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor-dark"
                          >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- events  section -->
      <section>
        <div class="overflow-hidden">
          <div
            class="container py-50px md:pt-60px lg:pt-50px lg:pb-20 2xl:pb-100px relative z-0"
          >
            <!-- animated bg -->
            <div
              class="absolute top-[20%] left-[-135px] z-[-1] animate-move-hor"
            >
              <svg
                width="938"
                height="919"
                viewBox="0 0 938 919"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M926.588 668.954C845.79 881.299 578.082 976.498 328.645 881.587C79.2083 786.675 -57.5003 537.594 23.2975 325.25C104.095 112.905 842.659 -201.917 722.687 181.03C612.239 533.576 1007.39 456.609 926.588 668.954Z"
                  fill="url(#paint0_linear_141_3)"
                ></path>
                <defs>
                  <linearGradient
                    id="paint0_linear_141_3"
                    x1="621.24"
                    y1="112.617"
                    x2="328.645"
                    y2="881.586"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop
                      offset="0.9999"
                      stop-color="#FBAED8"
                      stop-opacity="0.08"
                    ></stop>
                    <stop
                      offset="1"
                      stop-color="#B64AA4"
                      stop-opacity="0"
                    ></stop>
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <!-- heading -->
            <div
              class="grid grid-cols-1 md:grid-cols-12 md:gap-30px items-center"
            >
              <div class="md:col-start-1 md:col-span-7" data-aos="fade-up">
                <span
                  class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block"
                >
                  Agenda
                </span>
                <h3
                  class="text-3xl md:text-size-35 2xl:text-size-38 3xl:text-size-42 leading-10 md:leading-45px 2xl:leading-50px 3xl:leading-2xl font-bold rounded text-blackColor dark:text-blackColor-dark mb-5 md:mb-10"
                >
                  Jadwal
                  <span
                    class="relative after:w-full after:h-[7px] z-0 after:bg-secondaryColor after:absolute after:left-0 after:bottom-3 md:after:bottom-5 after:z-[-1]"
                    >Diklat</span
                  >

                  <br class="hidden md:block" >
                  SDM Koperasi dan UMKM
                </h3>
              </div>
              <div class="md:col-start-8 md:col-span-5" data-aos="fade-up">
                <p
                  class="text-base text-contentColor dark:text-contentColor-dark relative before:w-1px before:h-full before:bg-darkdeep7 before:absolute before:left-[-30px]"
                >
                  Pendidikan dan Pelatihan ini diselenggarakan sebagai upaya peningkatan kompetensi sumber daya manusia 
                  Koperasi dan UMKM secara terencana, terarah, dan berkelanjutan.
                </p>
              </div>
            </div>

            
              <div class="tab-contents">
                <!-- Monday Event-->
                <div
                  class="block opacity-100 transition-opacity duration-150 ease-linear"
                >
                  <div class="flex flex-col gap-y-6">
                    <!-- event 1 -->
                    <div
                      class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:items-star bg-whiteColor dark:whiteColor-dark p-15px md:p-5 transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded"
                      data-aos="fade-up"
                    >
                      <!-- event thumb -->
                      <div class="flex-shrink-0">
                        <img
                          src="./assets/images/event/event__1.png"
                          alt=""
                          class="w-170px"
                        >
                      </div>
                      <!-- event content -->
                      <div class="py-18px">
                        <div>
                          <p
                            class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor"
                          >
                            <i
                              class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"
                            ></i>
                            <span class="pr-2">10.00Am - 11.00 am</span>
                            <span
                              class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor"
                              >Mirnsdo .H </span
                            ><span>- Event Speaker</span>
                          </p>
                        </div>
                        <h3
                          class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor"
                        >
                          <a
                            href="event-details.html"
                            class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                            >Forging relationships between multi to national
                            governments and global.
                          </a>
                        </h3>
                        <p
                          class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor"
                        >
                          <a
                            class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                            href="#"
                            >Read More
                            <i class="icofont-simple-right"></i>
                          </a>
                        </p>
                      </div>
                    </div>

                    <!-- event 2 -->
                    <div
                      class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:justify-between bg-whiteColor dark:whiteColor-dark p-15px md:p-5 md:pl-45px transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded"
                      data-aos="fade-up"
                    >
                      <div class="py-18px">
                        <div>
                          <p
                            class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor"
                          >
                            <i
                              class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"
                            ></i>
                            <span class="pr-2">10.00Am - 11.00 am</span>
                            <span
                              class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor"
                              >Mirnsdo .H </span
                            ><span>- Event Speaker</span>
                          </p>
                        </div>
                        <h3
                          class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor"
                        >
                          <a
                            href="event-details.html"
                            class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                            >Forging relationships between multi to national
                            governments and global.
                          </a>
                        </h3>
                        <p
                          class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor"
                        >
                          <a
                            class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                            href="#"
                            >Read More
                            <i class="icofont-simple-right"></i>
                          </a>
                        </p>
                      </div>
                      <!-- event thumb -->
                      <div
                        class="flex-shrink-0 flex flex-col items-center md:items-end"
                      >
                        <img
                          src="./assets/images/event/event__2.png"
                          alt=""
                          class="w-170px"
                        >
                      </div>
                    </div>

                    <!-- event 3 -->
                    <div
                      class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:items-star bg-whiteColor dark:whiteColor-dark p-15px md:p-5 transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded"
                      data-aos="fade-up"
                    >
                      <!-- event thumb -->
                      <div class="flex-shrink-0">
                        <img
                          src="./assets/images/event/event__3.png"
                          alt=""
                          class="w-170px"
                        >
                      </div>
                      <!-- event content -->
                      <div class="py-18px">
                        <div>
                          <p
                            class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor"
                          >
                            <i
                              class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"
                            ></i>
                            <span class="pr-2">10.00Am - 11.00 am</span>
                            <span
                              class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor"
                              >Mirnsdo .H </span
                            ><span>- Event Speaker</span>
                          </p>
                        </div>
                        <h3
                          class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor"
                        >
                          <a
                            href="event-details.html"
                            class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                            >Forging relationships between multi to national
                            governments and global.
                          </a>
                        </h3>
                        <p
                          class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor"
                        >
                          <a
                            class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                            href="#"
                            >Read More
                            <i class="icofont-simple-right"></i>
                          </a>
                        </p>
                      </div>
                    </div>
                    <!-- event 4 -->
                    <div
                      class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:justify-between bg-whiteColor dark:whiteColor-dark p-15px md:p-5 md:pl-45px transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded"
                      data-aos="fade-up"
                    >
                      <div class="py-18px">
                        <div>
                          <p
                            class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor"
                          >
                            <i
                              class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"
                            ></i>
                            <span class="pr-2">10.00Am - 11.00 am</span>
                            <span
                              class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor"
                              >Mirnsdo .H </span
                            ><span>- Event Speaker</span>
                          </p>
                        </div>
                        <h3
                          class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor"
                        >
                          <a
                            href="event-details.html"
                            class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                            >Forging relationships between multi to national
                            governments and global.
                          </a>
                        </h3>
                        <p
                          class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor"
                        >
                          <a
                            class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                            href="#"
                            >Read More
                            <i class="icofont-simple-right"></i>
                          </a>
                        </p>
                      </div>
                      <!-- event thumb -->
                      <div
                        class="flex-shrink-0 flex flex-col items-center md:items-end"
                      >
                        <img
                          src="./assets/images/event/event__4.png"
                          alt=""
                          class="w-170px"
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- News and blog section -->
      <section>
        <div class="container pt-100px pb-70px">
          <!-- heading -->
          <div class="mb-5 md:mb-10" data-aos="fade-up">
            <div class="relative">
              <div>
                <div class="text-center">
                  <span
                    class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block"
                  >
                    Post
                  </span>
                </div>
              </div>
              <h3
                class="text-3xl md:text-size-35 2xl:text-size-38 3xl:text-size-42 md:leading-45px 2xl:leading-50px 3xl:leading-2xl font-bold text-blackColor text-center dark:text-blackColor-dark"
              >
                Berita dan Postingan
              </h3>
            </div>
          </div>

          <!-- blogs -->

          <div class="grid grid-cols-1 lg:grid-cols-12 gap-30px">
            <!-- blog 1 -->
            <div
              class="lg:col-start-1 lg:col-span-8 group shadow-blog"
              data-aos="fade-up"
            >
              <!-- blog thumbnail -->
              <div class="overflow-hidden relative">
                <img
                  src="./assets/images/blog/blog_1.png"
                  alt=""
                  class="w-full group-hover:scale-110 transition-all duration-300"
                >
                <div
                  class="text-base md:text-3xl leading-5 md:leading-9 font-semibold text-white px-15px py-5px md:px-6 md:py-2 bg-primaryColor rounded text-center absolute top-5 left-5"
                >
                  20 Oct<br >
                  2026
                </div>
              </div>
              <!-- blog content -->
              <div class="p-5 md:p-35px md:pt-10">
                <h3
                  class="text-2xl md:text-4xl leading-30px md:leading-45px font-bold text-blackColor hover:text-primaryColor pb-25px dark:text-blackColor-dark dark:hover:text-primaryColor"
                >
                  <a href="blog-details.html"
                    >It is a long established fact that a reader will be
                    Standard Part</a
                  >
                </h3>
                <p
                  class="text-base text-contentColor dark:text-contentColor-dark mb-30px"
                >
                  A wonderful serenity has taken possssion of my entire souing
                  like these sweet morning spring whch enjoy with my whole heart
                  I am alone, and feel the charm of existenceths spot whch was
                  create For the bliss of souls like mineing am so happy my dear
                  frend so absori bed in the exquste sens of mere. A wonderful
                  serenity has taken posseson of my entire soung like these
                  sweet mornngs spring whch enjoy …
                </p>
                <div class="flex justify-between items-center">
                  <div class="flex items-center gap-3">
                    <div>
                      <img
                        src="./assets/images/blog/blog_2.png"
                        alt=""
                        class="w-11 h-11 rounded-full"
                      >
                    </div>
                    <div
                      class="text-sm md:text-lg text-darkdeep5 dark:text-darkdeep5-dark"
                    >
                      By:
                      <span class="text-blackColor dark:text-blackColor-dark">
                        Mirnsdo Jons</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- blog 2 & 3 -->
            <div class="lg:col-start-9 lg:col-span-4">
              <div class="flex flex-col gap-y-30px">
                <!-- blog 2 -->
                <div class="group shadow-blog" data-aos="fade-up">
                  <!-- blog thumbnail -->
                  <div class="overflow-hidden relative">
                    <img
                      src="./assets/images/blog/blog_3.png"
                      alt=""
                      class="w-full group-hover:scale-110 transition-all duration-300"
                    >
                    <div
                      class="text-base md:text-2xl leading-5 md:leading-30px font-semibold text-white px-15px py-5px md:px-22px md:py-7px bg-primaryColor rounded text-center absolute top-5 left-5"
                    >
                      20 <br >
                      Oct
                    </div>
                  </div>
                  <!-- blog content -->
                  <div class="px-5 py-25px">
                    <h3
                      class="text-2xl md:text-size-28 leading-30px md:leading-35px font-bold text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                    >
                      <a href="blog-details.html"
                        >It is a long established fact that a reader will be
                        Standard Part</a
                      >
                    </h3>
                  </div>
                </div>
                <!-- blog 3 -->
                <div class="group shadow-blog" data-aos="fade-up">
                  <!-- blog thumbnail -->
                  <div class="overflow-hidden relative">
                    <img
                      src="./assets/images/blog/blog_4.png"
                      alt=""
                      class="w-full group-hover:scale-110 transition-all duration-300"
                    >
                    <div
                      class="text-base md:text-2xl leading-5 md:leading-30px font-semibold text-white px-15px py-5px md:px-22px md:py-7px bg-primaryColor rounded text-center absolute top-5 left-5"
                    >
                      20 <br >
                      Oct
                    </div>
                  </div>
                  <!-- blog content -->
                  <div class="px-5 py-25px">
                    <h3
                      class="text-2xl md:text-size-28 leading-30px md:leading-35px font-bold text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                    >
                      <a href="blog-details.html"
                        >It is a long established fact that a reader will be
                        Standard Part</a
                      >
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="flex justify-center" data-aos="fade-up">
            <a
              href="#"
              class="text-size-15 px-47px py-15px bg-primaryColor text-whiteColor border border-primaryColor hover:text-primaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor mt-10 md:mt-50px rounded uppercase"
              >Selengkapnya</a
            >
          </div>
        </div>
      </section>
    </main>
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
                Balatkop-uk Provinsi Kalimantan Selatan
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
