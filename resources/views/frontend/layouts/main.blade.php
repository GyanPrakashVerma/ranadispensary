@include('frontend.layouts.header')
<section id="transliterateTextarea" class="content">
  {{-- <div >
    <button class="btn btn-primary" id="google_translate_element"> --}}
      <div   id="google_translate_element"></div>
  
  
  {{-- <div class="container-fluid"> --}}
    @yield('add_content')
    {{-- </div> --}}
  </section>
@include('frontend.layouts.footer')