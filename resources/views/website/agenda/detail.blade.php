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
                    >Agenda</span
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
                  <img
                    src="{{asset('assets/images/agenda/'.$agenda->thumbail) }}"
                    alt=""
                    class="w-full"
                  >
                   <h1
                    class="text-size-35 font-bold text-blackColor dark:text-blackColor-dark mt-30px !leading-30px"
                    data-aos="fade-up"
                  >
                    {{ $agenda->judul }}
                  </h1>
                </div>
                <!-- blog content -->
                <div class="text-md text-blackColor mb-25px !leading-30px">
                  {!! $agenda->deskripsi !!}

                  <div class="mt-30px">
                    <h4
                      class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-primaryColor before:absolute before:bottom-[5px] before:left-0 leading-30px mb-25px"
                      data-aos="fade-up"
                    >
                      Detail Agenda
                    </h4>

                    <div
                      class="bg-darkdeep3 dark:bg-darkdeep3-dark mb-30px grid grid-cols-1 md:grid-cols-2"
                      data-aos="fade-up"
                    >
                      <table class="ml-30px mt-10px">
                        <tr>
                            <td class="pl-30px pt-5px text-contentColor2 dark:text-contentColor2-dark 
                            flex justify-between items-center">Kategori</td>
                            <td class="px-5px text-contentColor2 dark:text-contentColor2-dark" style="vertical-align: top;">:</td>
                            <td class="pl-10px pt-5px text-blackColor dark:text-deepgreen-dark">
                              {{ $agenda->kategori->kategori}}</td>
                        </tr>
                        <tr>
                            <td class="pl-30px pt-5px text-contentColor2 dark:text-contentColor2-dark 
                            flex justify-between items-center">Periode</td>
                            <td class="px-5px text-contentColor2 dark:text-contentColor2-dark" style="vertical-align: top;">:</td>
                            <td class="pl-10px pt-5px text-blackColor dark:text-deepgreen-dark">
                              {{ \Carbon\Carbon::parse($agenda->tgl_mulai)->translatedFormat('d M Y') }} - {{ \Carbon\Carbon::parse($agenda->tgl_akhir)->translatedFormat('d M Y') }}</td>
                        </tr>
                        <tr>
                            <td class="pl-30px pt-5px text-contentColor2 dark:text-contentColor2-dark 
                            flex justify-between items-center">Tempat</td>
                            <td class="px-5px text-contentColor2 dark:text-contentColor2-dark" style="vertical-align: top;">:</td>
                            <td class="pl-10px pt-5px text-blackColor dark:text-deepgreen-dark">
                              {{ $agenda->tempat }}</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  
                  <!-- tag and share  -->

                  <div
                    class="flex justify-between items-center flex-wrap py-10 mb-10 border-y border-borderColor2 dark:border-borderColor2-dark gap-y-10px mt-15px"
                  >
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
                
                <!-- recent posts -->
                <div
                  class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px border border-borderColor2 dark:border-borderColor2-dark"
                  data-aos="fade-up"
                >
                  <h4
                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-primaryColor before:absolute before:bottom-[5px] before:left-0 leading-30px mb-25px"
                  >
                    Agenda
                  </h4>
                  <ul class="flex flex-col gap-y-25px">
                    @foreach ($sideagenda as $sart )
                    <li class="flex items-center">
                      <div class="w-2/5 pr-5 relative">
                        <a href="blog-details.html" class="w-full"
                          ><img
                            src="{{ asset('assets/images/agenda/'.$sart->thumbail) }}"
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
                          class="w-full text-sm text-contentColor font-small leading-7 dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                          >{{ \Carbon\Carbon::parse($sart->tgl_awal)->translatedFormat('d') }} - {{ \Carbon\Carbon::parse($sart->tgl_akhir)->translatedFormat('d M Y') }}</a
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
        var judul = "{{ $agenda->judul }}";
        var tanggal = "{{ $agenda->tgl_awal }}";
        var thumbail = "{{ $agenda->thumbail }}";
        var konten = "{{ Illuminate\Support\Str::limit($agenda->deskripsi, 10) }}";
        var teks = judul + "\n" + tanggal + "\n" + url + "\n" + konten + "\n" + thumbail;
        navigator.clipboard.writeText(teks).then(function() {
            alert('Link berhasil disalin!');
        }); 
    });
</script>

@endpush