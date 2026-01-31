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
                    >Fasilitas</span
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- about  section -->
      <!-- courses section -->
      <div>
        <div class="container tab py-10 md:py-50px lg:py-60px 2xl:py-100px">
          <!-- courses header -->
          <div
            class="courses-header flex justify-between items-center flex-wrap px-13px py-10px border border-borderColor dark:border-borderColor-dark mb-30px gap-y-5"
            data-aos="fade-up"
          >
            <div>
              <p class="text-blackColor dark:text-blackColor-dark">
                Data Fasilitas
              </p>
            </div>
            <div class="flex items-center">
              <div
                class="tab-links transition-all duraton-300 text-contentColor dark:text-contentColor-dark flex gap-11px"
              >
                <button class="inline-block hover:text-primaryColor active">
                  <i class="icofont-layout"></i>
                </button>
              </div>
              <div class="pl-50px sm:pl-20 pr-10px">
                
              </div>
            </div>
          </div>
          <!-- courses -->
          <div class="tab-contents">
            <!-- grid ordered cards -->
            <div class="transition-all duration-300">
              <div
                class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-30px"
              >
              @foreach ($fasilitas as $d )
                <!-- card 1 -->
                <div class="group grid grid-rows-1 h-full">
                  <div class="tab-content-wrapper" data-aos="fade-up">
                      <div class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark h-full">
                          <!-- card image -->
                          <div class="relative mb-4 overflow-hidden">
                              <a class="w-full">
                                  <img src="{{asset ('assets/images/fasilitas/'.$d->gambar) }}" alt="" class="w-full transition-all duration-300 group-hover:scale-110" >
                              </a>
                          </div>
                          <!-- card content -->
                          <div>
                              <a class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor" >
                                  {{ $d->fasilitas}}
                              </a>
                          </div>
                          <div>
                              <a class="text-md font text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor" >
                                  {!! $d->keterangan !!}
                              </a>
                          </div>
                      </div>
                  </div>
                </div>
                <!-- End card content -->
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div> 
    </main>


@endsection