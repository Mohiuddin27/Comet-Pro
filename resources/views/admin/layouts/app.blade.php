<!DOCTYPE html>
<html lang="en">

<head>
   @include('admin.layouts.head')
</head>

<body>

    <div class="main-wrapper">

     {{-- header start --}}
     @include('admin.layouts.header')
     {{-- header end --}}


       {{-- Sidebar start --}}
       @include('admin.layouts.siderbar')
       {{-- sidebar end --}}


      @section('main-section')
      @show
    </div>


 @include('admin.layouts.script')
 @yield('script')
</body>


</html>
