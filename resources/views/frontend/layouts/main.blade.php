@include('frontend.layouts.header')
<section id="transliterateTextarea" class="content">
  <style>
    /* #google_translate_element{
      float:right;
    } */
  </style>
  {{-- <div >
    <button class="btn btn-primary" id="google_translate_element"> --}}
  
  
  {{-- <div class="container-fluid"> --}}
    @yield('add_content')
    {{-- </div> --}}
  </section>
@include('frontend.layouts.footer')