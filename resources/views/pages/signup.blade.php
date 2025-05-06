<!doctype html>
<html lang="en">
  <x-head/>


  <body>
    <!-- ====== Navbar Section Start -->
    <x-navsec/>
    <!-- ====== Navbar Section End -->

    <!-- ====== Banner Section Start -->
    <div
      class="relative z-10 overflow-hidden pt-[120px] pb-[60px] md:pt-[130px] lg:pt-[160px] dark:bg-dark"
    >
      <div
        class="absolute bottom-0 left-0 w-full h-px bg-linear-to-r from-stroke/0 via-stroke dark:via-dark-3 to-stroke/0"
      ></div>
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4">
            <div class="text-center">
              <h1
                class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]"
              >
                Sign Up Page
              </h1>
              <p class="mb-5 text-base text-body-color dark:text-dark-6">
                There are many variations of passages of Lorem Ipsum available.
              </p>

              <ul class="flex items-center justify-center gap-[10px]">
                <li>
                  <a
                    href="{{ route('home') }}"
                    class="flex items-center gap-[10px] text-base font-medium text-dark dark:text-white"
                  >
                    Home
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="flex items-center gap-[10px] text-base font-medium text-body-color"
                  >
                    <span class="text-body-color dark:text-dark-6"> / </span>
                    Sign Up
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Banner Section End -->

    <!-- ====== Forms Section Start -->
    <section class="bg-[#F4F7FF] py-14 lg:py-20 dark:bg-dark">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div
              class="relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-white dark:bg-dark-2 py-14 px-8 text-center sm:px-12 md:px-[60px]"
            >
              <div class="mb-10 text-center">
                <a href="javascript:void(0)" class="mx-auto inline-block max-w-[160px]">
                  <img src="assets/images/logo/logo.svg" alt="logo" class="dark:hidden" />
                  <img src="assets/images/logo/logo-white.svg" alt="logo" class="hidden dark:block" />
                </a>
              </div>
    
              <div class="flex flex-col gap-4 mb-7">
                <a href="/employer/register" class="block w-full px-5 py-3 text-base font-medium bg-blue-500 text-white rounded-md transition hover:bg-blue-900">
                   Continue As Employer
                </a>
                <a href="/employee/register" class="block w-full px-5 py-3 text-base font-medium bg-blue-500 text-white rounded-md transition hover:bg-blue-600">
                   Continue As Employee
                </a>
              </div>
    
             
              <p class="text-base text-body-secondary">
                Already have an account?
                <a href="{{ route('signin') }}" class="text-primary hover:underline">
                  Sign In
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- ====== Forms Section End -->

    <!-- ====== Footer Section Start -->
    <x-footer/>
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a
      href="javascript:void(0)"
      class="fixed left-auto items-center justify-center hidden w-10 h-10 text-white transition duration-300 ease-in-out rounded-md shadow-md back-to-top bottom-8 right-8 z-999 bg-primary hover:bg-dark"
    >
      <span
        class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"
      ></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== Made With Button Start -->
    />
    <!-- ====== Made With Button End -->

    <!-- ====== All Scripts -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
