<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from colorlib.com/polygon/gentelella/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 24 Jun 2018 00:48:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Efiewuragh | @yield('title') </title>

     @include('partials._admincss')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        @include('partials._adminsidebar')

        @include('partials._admintopmenu')

      
        @yield('content')


        @include('partials._adminfooter')

      </div>
    </div>
  

   @include('partials._adminjavascript')
  </body>

<!-- Mirrored from colorlib.com/polygon/gentelella/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 24 Jun 2018 00:49:05 GMT -->
</html>
