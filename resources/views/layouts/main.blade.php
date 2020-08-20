<!DOCTYPE html>
<html lang="zxx">
<!-- Head Includes-->

@include('includes.head')


<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- Offcanvas Menu -->
@include('includes.mobile_menu')
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->
@include('includes.header')
<!-- Header End -->


@yield('container-fluid')


<!-- Footer Section -->
@include('includes.footer')
<!-- Footer Section End -->


<!-- Js Plugins -->
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.magnific-popup.min.js"></script>
<script src="../assets/js/jquery.slicknav.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/main.js"></script>
</body>

</html>












