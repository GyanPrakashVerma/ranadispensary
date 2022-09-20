@include('frontend.layouts.header')
<section class="content">
    
    {{-- <div class="container-fluid"> --}}
      @yield('add_content')
    {{-- </div> --}}
</section>
@include('frontend.layouts.footer')