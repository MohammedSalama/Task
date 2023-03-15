<!DOCTYPE html>
<html lang="en">

@include('Admin.head')

<body>

<div class="wrapper">

<!--=================================
 preloader -->

<div id="pre-loader">
    <img src="{{ URL::asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
</div>

<!--=================================
 preloader -->


<!--=================================
 header start-->

@include('Admin.header')

<!--=================================
 header End-->

<!--=================================
 Main content -->

<div class="container-fluid">
  <div class="row">

  @include('Admin.main-sidebar')

 <!--=================================
wrapper -->

    <div class="content-wrapper">

        @yield('page-title')

        @yield('content')
<!--=================================
 wrapper -->

<!--=================================
 footer -->

        @include('Admin.footer')

    </div><!-- main content wrapper end-->
  </div>
 </div>
</div>

<!--=================================
 footer -->


<!--=================================
 jquery -->

@include('Admin.script')

</body>
</html>
