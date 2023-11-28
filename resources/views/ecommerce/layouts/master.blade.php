<!DOCTYPE html>
<html lang="en">

    @include('ecommerce.layouts.head')
    {{-- @include('ecommerce.layouts.customize_css') --}}
    <body>
        <!-- Topbar Start -->
        {{-- @include('ecommerce.layouts.topbar') --}}
        <!-- Topbar End -->


        <!-- Navbar Start -->
        {{-- @include('ecommerce.layouts.navbar') --}}
        <!-- Navbar End -->
        {{-- toster --}}
        @include('admin.layouts.toaster')
        @yield('content')


        <!-- Footer Start -->
        {{-- @include('ecommerce.layouts.footer') --}}
        <!-- Footer End -->


        <!-- Back to Top -->
        <x-ecommerce.button-back-top></x-ecommerce.button-back-top>


        <!-- JavaScript Libraries -->
        @include('ecommerce.layouts.scripts')
    </body>

</html>