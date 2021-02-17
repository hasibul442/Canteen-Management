@include('include.link')
<div class="container-scroller">
      <!--- Sidebar Start---->
    @include('include.nav')
    <!--- Sidebar End---->

            <!---  Nav bar Start---->
        @include('include.sidebar')
        <!---  Nav bar End---->
    <div class="main-panel">

        @yield('content')

        @include('include.footer')
    </div>
</div>
@include('include.script')
