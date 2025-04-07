<!DOCTYPE html>
<html lang="en">

@include('user.layouts.head')

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('user.layouts.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('user.layouts.header')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        @yield('main-content')
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      @include('user.layouts.footer')

      <!--Start of Tawk.to Script-->
	    <script type="text/javascript">
		    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		    (function(){
			    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			    s1.async=true;
			    s1.src='https://embed.tawk.to/67f3d8e8a29778190aee7928/1io88ejnb';
			    s1.charset='UTF-8';
			    s1.setAttribute('crossorigin','*');
			    s0.parentNode.insertBefore(s1,s0);
		    })();
	    </script>
	    <!--End of Tawk.to Script-->

</body>

</html>
