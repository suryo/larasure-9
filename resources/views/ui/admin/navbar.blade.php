<!-- NAVBAR TOP -->
<nav class="navbar navbar-expand-lg sticky-top mb-3 navbar-dark">
   <div class="container-fluid px-md-4">
      <button class="navbar-toggler border-0 text-dark rounded-0 lh-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
         <span class="bi bi-list text-light"></span>
      </button>
      <a class="navbar-brand d-grid me-0 order-lg-3" href="dashboardpanel">
         <img src="/ui/img/larasure-logo.svg" width="auto" height="24" alt="logo">
      </a>
      {{--
        <marquee scrollamount="3" behavior="" direction="">New SIDAR - INDRACO - Data Terintegrasi dengan sidar.id</marquee>
       --}}
      <button class="navbar-toggler border-0 rounded-0 lh-0" data-bs-toggle="collapse" data-bs-target="#navcol">
         <i class="bi bi-search"></i>
      </button>
      <div class="collapse navbar-collapse" id="navcol">
         <form class="py-2 py-lg-0 order-lg-1" role="search">
            <div class="input-group bg-white rounded">
               <input class="form-control border-0" type="search" aria-label="Search">
               <button class="btn border-0" type="submit">
                  <i class="bi bi-search d-none d-lg-block"></i>
                  <span class="d-lg-none">Search</span>
               </button>
            </div>
         </form>
      </div>
      <div class="w-100 px-3 text-light text-center">
        {{-- <strong class="text-center" style="background-color: white; color: red;">Tulis Pesan Disini, Silahkan click <a href="https://t.me/+d5vC7M0sRgMzMzJl" target="_blank" style="color: red;"> di sini </a></strong> --}}
      </div>
   </div>
</nav>
<style>
   .navbar {
      border-bottom: solid 1px #b4b4b4;
      background-color: #30027a;
   }

   @media (max-width: 991.98px) {
      .navbar .navbar-toggler {
         padding-left: 0;
         padding-right: 0;
      }

      .navbar form .btn {
         position: relative;
      }

      .navbar form .btn::after {
         content: '';
         border-left: solid 1px #878787 !important;
         position: absolute;
         left: 0;
         top: 0;
         bottom: 0;
      }
   }
</style>
