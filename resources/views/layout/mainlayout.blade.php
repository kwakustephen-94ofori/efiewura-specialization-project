<!DOCTYPE html>
<html>
<head>

	@include('partials._css')


	<title></title>
</head>
<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>

		@include('partials._nav')


		@yield('content')



		@include('partials._footer')





	</div>
	<!--End pagewrapper-->

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html">
	<span class="fa fa-long-arrow-up"></span></div>


	@include('partials._javascript')

</body>
</html>