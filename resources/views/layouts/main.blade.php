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
<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>-->
</body>

</html>












