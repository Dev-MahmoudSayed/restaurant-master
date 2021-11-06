   @include('layout.header')
   <base href="/public">

   @include('pages.body')   
    <!-- Restaurant Menu Section -->
   @include('pages.menu')
   {{-- @include('pages.gallery'); --}}
   
   @include('pages.chefs')
   @include('pages.contact')

   @include('layout.footer')