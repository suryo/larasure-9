<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @yield('title')
   <link rel="icon" href="/ui/img/ikon.png">
   <link rel="stylesheet" href="/ui/bootstrap-5.2.1-dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="/ui/bootstrap-icons-1.10.2/bootstrap-icons.css">
   <link rel="stylesheet" href="/ui/css/global.css">
</head>

<body>

   @include('ui/sidebar')
   @include('ui/navbar')

   <!-- KONTEN -->
   <main class="wrapper">
      @yield('konten')
   </main>

   <footer class="copyright text-center small opacity-50 d-none d-lg-block">
      <div class="container-fluid px-md-4">
         <div class="row py-3 justify-content-lg-between">
            <div class="col-lg-auto">
               Develop with <i class="bi bi-heart-fill"></i> by SuryoAtm
            </div>
            <div class="col-lg-auto">
               Copyright &copy; 2023 LARASURE. All rights reserved
            </div>
         </div>
      </div>
   </footer>

   @include('ui/navdown')

   <script src="/ui/jquery-3.6.1/jquery-3.6.1.min.js"></script>
   <script src="/ui/bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>

   <script>
      // shrink navbar on scroll window
      // $(document).on("scroll", function() {
      //    if ($(document).scrollTop() > 100) {
      //       $(".navbar").addClass("border-bottom");
      //    } else {
      //       $(".navbar").removeClass("border-bottom");
      //    }
      // });

      // hover on input and textarea
      $('input').hover(function() {
         $(this).select();
      });

      if ($(window).width() >= 992) {
         $(".navbar .form-control").attr("placeholder", "Search");
      }
   </script>

   @yield('script')

   <script>
      // garis bantu
      [].forEach.call(document.querySelectorAll("*"), function(a) {
         // a.style.outline = "1px solid green";
      });
   </script>

</body>

</html>