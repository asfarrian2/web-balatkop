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
                    >Tentang</span
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- about  section -->
      <section>
        <div class="container py-50px md:py-70px lg:py-20 2xl:py-100px">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-30px">
            <!-- about left -->
            <div data-aos="fade-up">
              <div class="tilt relative overflow-hidden z-0">
                <img
                  class="absolute left-0 top-0 lg:top-4 right-0 mx-auto -z-1"
                  src="./assets/images/about/about_8.png"
                  alt=""
                ><img
                  class="w-full"
                  src="{{ asset ('assets/images/tentang/'.$tentang->where('status', 'file')->first()->keterangan) }}"
                  alt=""
                >
              </div>
            </div>
            <!-- about right -->
            <div data-aos="fade-up" class="2xl:ml-65px">
              <span
                class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block"
              >
                Profil
              </span>
              <h3
                class="text-3xl md:text-size-45 leading-10 md:leading-2xl font-bold text-blackColor dark:text-blackColor-dark pb-25px"
              >
                Tentang
              </h3>
              <p
                class="text-sm md:text-base leading-7 text-contentColor dark:text-contentColor-dark"
              >
                {!! nl2br($tentang->where('status','text')->first()->keterangan) !!}
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>


@endsection