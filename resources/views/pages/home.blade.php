@extends('layouts.app')

@section('content')
<!-- ====== Navbar Section Start -->
    <x-navbar/>

    <!-- ====== Navbar Section End -->

    <!-- ====== Hero Section Start -->
    <x-hero/>

    <!-- ====== Hero Section End -->


    <!-- ====== Features Section Start -->


    <x-features/>
    <!-- ====== Features Section End -->

<section id="Jobs" class="relative bg-slate-50 dark:bg-slate-800 md:py-24 py-16">
    <div class="container px-4 mx-auto">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold text-blue-600 dark:text-blue-400">
                Popular Jobs</h3>
            <p class="text-slate-500 dark:text-slate-300 max-w-xl mx-auto">
                Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on
                over 30000+ companies worldwide.</p>
        </div>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            <div class="group shadow-sm shadow-gray-200 dark:shadow-gray-700 p-6 rounded-md bg-white dark:bg-slate-900">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div
                            class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm shadow-gray-200 dark:shadow-gray-700 rounded-md">
                            <img class="size-8" alt="" src="/assets/facebook-logo-BA8KIyWJ.png">
                        </div>
                        <div class="ms-3">
                            <a class="block text-[16px] font-semibold hover:text-blue-900 transition-all duration-500"
                                href="/employer-detail/1" data-discover="true">
                                Facebook
                            </a>
                            <span class="block text-sm text-slate-400">
                                2 days ago
                            </span>
                        </div>
                    </div>
                    <span
                        class="bg-blue-600/10 group-hover:bg-blue-600 inline-block text-blue-600 group-hover:text-white text-xs px-2.5 py-0.5 font-semibold rounded-full transition-all duration-500">
                        Full Time
                    </span>
                </div>
                <div class="mt-6">
                    <a class="text-lg hover:text-blue-600 font-semibold transition-all duration-500"
                        href="/job-detail-two/1" data-discover="true">
                        Web Designer / Developer
                    </a>
                    <h6 class="text-base font-medium flex items-center">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                            stroke-linecap="round" stroke-linejoin="round" class="me-1" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                            </path>
                            <circle cx="12" cy="10" r="3">
                            </circle>
                        </svg>
                        Australia
                    </h6>
                </div>
                <div class="mt-6">
                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                        <div class="bg-blue-600 h-[6px] rounded-full" style="width: 55%;">
                        </div>
                    </div>
                    <div class="mt-2">
                        <span class="text-slate-400 text-sm">
                            <span class="text-slate-900 dark:text-white font-semibold inline-block">
                                21 applied</span>
                            of 40 vacancy</span>
                    </div>
                </div>
            </div>
            <div class="group shadow-sm shadow-gray-200 dark:shadow-gray-700 p-6 rounded-md bg-white dark:bg-slate-900">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div
                            class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm shadow-gray-200 dark:shadow-gray-700 rounded-md">
                            <img class="size-8" alt="" src="/assets/google-logo-BMGBKr3O.png">
                        </div>
                        <div class="ms-3">
                            <a class="block text-[16px] font-semibold hover:text-blue-900 transition-all duration-500"
                                href="/employer-detail/2" data-discover="true">
                                Google</a>
                            <span class="block text-sm text-slate-400">
                                2 days ago</span>
                        </div>
                    </div>
                    <span
                        class="bg-blue-600/10 group-hover:bg-blue-600 inline-block text-blue-600 group-hover:text-white text-xs px-2.5 py-0.5 font-semibold rounded-full transition-all duration-500">
                        Part Time</span>
                </div>
                <div class="mt-6">
                    <a class="text-lg hover:text-blue-600 font-semibold transition-all duration-500"
                        href="/job-detail-two/2" data-discover="true">
                        Marketing Director</a>
                    <h6 class="text-base font-medium flex items-center">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                            stroke-linecap="round" stroke-linejoin="round" class="me-1" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                            </path>
                            <circle cx="12" cy="10" r="3">
                            </circle>
                        </svg>
                        USA
                    </h6>
                </div>
                <div class="mt-6">
                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                        <div class="bg-blue-600 h-[6px] rounded-full" style="width: 55%;">
                        </div>
                    </div>
                    <div class="mt-2">
                        <span class="text-slate-400 text-sm">
                            <span class="text-slate-900 dark:text-white font-semibold inline-block">
                                21 applied</span>
                            of 40 vacancy</span>
                    </div>
                </div>
            </div>
            <div class="group shadow-sm shadow-gray-200 dark:shadow-gray-700 p-6 rounded-md bg-white dark:bg-slate-900">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div
                            class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm shadow-gray-200 dark:shadow-gray-700 rounded-md">
                            <img class="size-8" alt="" src="/assets/android-DxDSUxh3.png">
                        </div>
                        <div class="ms-3">
                            <a class="block text-[16px] font-semibold hover:text-blue-900 transition-all duration-500"
                                href="/employer-detail/3" data-discover="true">
                                Android</a>
                            <span class="block text-sm text-slate-400">
                                2 days ago</span>
                        </div>
                    </div>
                    <span
                        class="bg-blue-600/10 group-hover:bg-blue-600 inline-block text-blue-600 group-hover:text-white text-xs px-2.5 py-0.5 font-semibold rounded-full transition-all duration-500">
                        Remote</span>
                </div>
                <div class="mt-6">
                    <a class="text-lg hover:text-blue-600 font-semibold transition-all duration-500"
                        href="/job-detail-two/3" data-discover="true">
                        Application Developer</a>
                    <h6 class="text-base font-medium flex items-center">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                            stroke-linecap="round" stroke-linejoin="round" class="me-1" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                            </path>
                            <circle cx="12" cy="10" r="3">
                            </circle>
                        </svg>
                        China
                    </h6>
                </div>
                <div class="mt-6">
                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                        <div class="bg-blue-600 h-[6px] rounded-full" style="width: 55%;">
                        </div>
                    </div>
                    <div class="mt-2">
                        <span class="text-slate-400 text-sm">
                            <span class="text-slate-900 dark:text-white font-semibold inline-block">
                                21 applied</span>
                            of 40 vacancy</span>
                    </div>
                </div>
            </div>
            <div
                class="group shadow-sm shadow-gray-200 dark:shadow-gray-700 p-6 rounded-md bg-white dark:bg-slate-900">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div
                            class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm shadow-gray-200 dark:shadow-gray-700 rounded-md">
                            <img class="size-8" alt="" src="/assets/lenovo-logo-CWm1nm3g.png">
                        </div>
                        <div class="ms-3">
                            <a class="block text-[16px] font-semibold hover:text-blue-900 transition-all duration-500"
                                href="/employer-detail/4" data-discover="true">
                                Lenovo</a>
                            <span class="block text-sm text-slate-400">
                                2 days ago</span>
                        </div>
                    </div>
                    <span
                        class="bg-blue-600/10 group-hover:bg-blue-600 inline-block text-blue-600 group-hover:text-white text-xs px-2.5 py-0.5 font-semibold rounded-full transition-all duration-500">
                        WFH</span>
                </div>
                <div class="mt-6">
                    <a class="text-lg hover:text-blue-600 font-semibold transition-all duration-500"
                        href="/job-detail-two/4" data-discover="true">
                        Senior Product Designer</a>
                    <h6 class="text-base font-medium flex items-center">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                            stroke-linecap="round" stroke-linejoin="round" class="me-1" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                            </path>
                            <circle cx="12" cy="10" r="3">
                            </circle>
                        </svg>
                        Dubai
                    </h6>
                </div>
                <div class="mt-6">
                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                        <div class="bg-blue-600 h-[6px] rounded-full" style="width: 55%;">
                        </div>
                    </div>
                    <div class="mt-2">
                        <span class="text-slate-400 text-sm">
                            <span class="text-slate-900 dark:text-white font-semibold inline-block">
                                21 applied</span>
                            of 40 vacancy</span>
                    </div>
                </div>
            </div>
            <div
                class="group shadow-sm shadow-gray-200 dark:shadow-gray-700 p-6 rounded-md bg-white dark:bg-slate-900">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div
                            class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm shadow-gray-200 dark:shadow-gray-700 rounded-md">
                            <img class="size-8" alt="" src="/assets/spotify-C55lgJAb.png">
                        </div>
                        <div class="ms-3">
                            <a class="block text-[16px] font-semibold hover:text-blue-900 transition-all duration-500"
                                href="/employer-detail/5" data-discover="true">
                                Spotify</a>
                            <span class="block text-sm text-slate-400">
                                2 days ago</span>
                        </div>
                    </div>
                    <span
                        class="bg-blue-600/10 group-hover:bg-blue-600 inline-block text-blue-600 group-hover:text-white text-xs px-2.5 py-0.5 font-semibold rounded-full transition-all duration-500">
                        Full Time</span>
                </div>
                <div class="mt-6">
                    <a class="text-lg hover:text-blue-600 font-semibold transition-all duration-500"
                        href="/job-detail-two/5" data-discover="true">
                        Web Designer / Developer</a>
                    <h6 class="text-base font-medium flex items-center">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                            stroke-linecap="round" stroke-linejoin="round" class="me-1" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                            </path>
                            <circle cx="12" cy="10" r="3">
                            </circle>
                        </svg>
                        Australia
                    </h6>
                </div>
                <div class="mt-6">
                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                        <div class="bg-blue-600 h-[6px] rounded-full" style="width: 55%;">
                        </div>
                    </div>
                    <div class="mt-2">
                        <span class="text-slate-400 text-sm">
                            <span class="text-slate-900 dark:text-white font-semibold inline-block">
                                21 applied</span>
                            of 40 vacancy</span>
                    </div>
                </div>
            </div>
            <div
                class="group shadow-sm shadow-gray-200 dark:shadow-gray-700 p-6 rounded-md bg-white dark:bg-slate-900">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div
                            class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm shadow-gray-200 dark:shadow-gray-700 rounded-md">
                            <img class="size-8" alt="" src="/assets/linkedin-Df_VHV2-.png">
                        </div>
                        <div class="ms-3">
                            <a class="block text-[16px] font-semibold hover:text-blue-900 transition-all duration-500"
                                href="/employer-detail/6" data-discover="true">
                                Linkedin</a>
                            <span class="block text-sm text-slate-400">
                                2 days ago</span>
                        </div>
                    </div>
                    <span
                        class="bg-blue-600/10 group-hover:bg-blue-600 inline-block text-blue-600 group-hover:text-white text-xs px-2.5 py-0.5 font-semibold rounded-full transition-all duration-500">
                        Remote Time</span>
                </div>
                <div class="mt-6">
                    <a class="text-lg hover:text-blue-600 font-semibold transition-all duration-500"
                        href="/job-detail-two/6" data-discover="true">
                        Php Developer</a>
                    <h6 class="text-base font-medium flex items-center">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                            stroke-linecap="round" stroke-linejoin="round" class="me-1" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                            </path>
                            <circle cx="12" cy="10" r="3">
                            </circle>
                        </svg>
                        Pakistan
                    </h6>
                </div>
                <div class="mt-6">
                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                        <div class="bg-blue-600 h-[6px] rounded-full" style="width: 55%;">
                        </div>
                    </div>
                    <div class="mt-2">
                        <span class="text-slate-400 text-sm">
                            <span class="text-slate-900 dark:text-white font-semibold inline-block">
                                21 applied</span>
                            of 40 vacancy</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                <a class="inline-flex items-center font-semibold tracking-wide border align-middle transition text-base text-center relative border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto text-slate-400 hover:text-blue-600 after:bg-blue-600 duration-500 ease-in-out"
                    href="{{ route('jobs') }}" data-discover="true">
                    See More Jobs <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                        viewBox="0 0 24 24" class="ms-1 align-middle" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" d="M0 0h24v24H0V0z">
                        </path>
                        <path d="m12 4-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8-8-8z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

    <!-- ====== About Section Start -->

    <x-about/>
    <!-- ====== About Section End -->

    <!-- ====== CTA Section Start -->
  
    <!-- ====== CTA Section End -->

    <!-- ====== Pricing Section Start -->

    <x-pricing/>
    <!-- ====== Pricing Section End -->

    <!-- ====== Testimonial Section Start -->

    <x-Testimonials/>

    <!-- ====== Testimonial Section End -->

    <!-- ====== FAQ Section Start -->

    

    <!-- ====== FAQ Section End -->

    <!-- ====== Team Section Start -->
    
    <!-- ====== Team Section End -->

    <!-- ====== Blog Section Start -->
    <section id="blog" class="bg-white pb-10 pt-20 dark:bg-dark lg:pb-20 lg:pt-[120px]">
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[485px] text-center">
              <span class="block mb-2 text-lg font-semibold text-primary">
                Our Blogs
              </span>
              <h2
                class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]"
              >
                Our Recent News
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
              <div class="mb-8 overflow-hidden rounded-[5px]">
                <a href="{{ route('blog') }}" class="block">
                  <img
                    src="images/blog/blog-01.jpg"
                    alt="image"
                    class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                  />
                </a>
              </div>
              <div>
                <span
                  class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"
                >
                  Dec 22, 2023
                </span>
                <h3>
                  <a
                    href="javascript:void(0)"
                    class="inline-block mb-4 text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    Meet AutoManage, the best AI management tools
                  </a>
                </h3>
                <p
                  class="max-w-[370px] text-base text-body-color dark:text-dark-6"
                >
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="mb-10 wow fadeInUp group" data-wow-delay=".15s">
              <div class="mb-8 overflow-hidden rounded-[5px]">
                <a href="{{ route('blog') }}" class="block">
                  <img
                    src="images/blog/blog-02.jpg"
                    alt="image"
                    class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                  />
                </a>
              </div>
              <div>
                <span
                  class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"
                >
                  Mar 15, 2023
                </span>
                <h3>
                  <a
                    href="javascript:void(0)"
                    class="inline-block mb-4 text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    How to earn more money as a wellness coach
                  </a>
                </h3>
                <p
                  class="max-w-[370px] text-base text-body-color dark:text-dark-6"
                >
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="mb-10 wow fadeInUp group" data-wow-delay=".2s">
              <div class="mb-8 overflow-hidden rounded-[5px]">
                <a href="images/blog/blog-03.jpg" class="block">
                  <img
                    src="images/blog/blog-03.jpg"
                    alt="image"
                    class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                  />
                </a>
              </div>
              <div>
                <span
                  class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"
                >
                  Jan 05, 2023
                </span>
                <h3>
                  <a
                    href="javascript:void(0)"
                    class="inline-block mb-4 text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    The no-fuss guide to upselling and cross selling
                  </a>
                </h3>
                <p
                  class="max-w-[370px] text-base text-body-color dark:text-dark-6"
                >
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Blog Section End -->

    <!-- ====== Contact Start ====== -->
    <x-contact/>

    <!-- ====== Contact End ====== -->

    <!-- ====== Brands Section Start -->
    

    <!-- ====== Brands Section End -->

    <!-- ====== Footer Section Start -->
    <x-footer/>
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a 
      id="backToTop"
      href="javascript:void(0)"
      class="fixed left-auto items-center justify-center hidden w-10 h-10 text-white transition duration-300 ease-in-out rounded-md shadow-md back-to-top bottom-8 right-8 z-999 bg-primary hover:bg-dark"
    >
      <span
        class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-white"
      ></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== Made With Button Start -->
  
    <!-- ====== Made With Button End -->

    <!-- ====== All Scripts -->

<script>
  // Show/hide the button on scroll
  window.addEventListener('scroll', function() {
    var btn = document.getElementById('backToTop');
    if(window.scrollY > 200) {
      btn.classList.remove('hidden');
      btn.classList.add('flex');
    } else {
      btn.classList.remove('flex');
      btn.classList.add('hidden');
    }
  });

  // Scroll to top on click
  document.getElementById('backToTop').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
</script>

@endsection
