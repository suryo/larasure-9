<!-- SIDEBAR MENU -->
<div class="offcanvas-lg offcanvas-start h-100 bg-light" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
   <div class="offcanvas-header d-block text-center position-relative py-4">
      <div class="position-relative d-inline-block mb-1">
         <img src="/ui/img/user.jpg" class="img-thumbnail rounded-circle border-0 bg-dark" width="66" alt="" style="padding: .35rem;">
         {{-- <img src="/ui/img/bunga-kopi.svg" class="img-fluid position-absolute top-0 end-0" width="20" alt="" style="transform: translateY(-18%) translateX(54%);"> --}}
      </div>
      <h5 class="offcanvas-title mb-1" id="sidebarLabel">Suryo Atmojo</h5>
      <p class="mb-1 small text-secondary">
         WEB DEVELOPER
      </p>
      <p class="mb-0 small text-secondary">
         2.8.211118.0119
      </p>
      <button type="button" class="btn-close position-absolute top-0 end-0 m-1 d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#sidebar" aria-label="Close"></button>
   </div>
   <div class="offcanvas-body d-block p-0" style="overflow-y: auto; height: calc(100% - 192px);">
      <!-- sidebar user menu -->
      <section>
         <ul class="list-group mb-4 rounded-0">
            <li class="list-group-item">
               <a href="/sidar-ui" class="btn" id="navDashboard">
                  <div class="btn-header me-3">
                     <i class="bi bi-speedometer2"></i>
                  </div>
                  <div class="btn-body">
                     Dashboard
                  </div>
               </a>
            </li>
            <li class="list-group-item">
               <a href="/sidar-ui" class="btn" id="navDAR">
                  <div class="btn-header me-3">
                     <i class="bi bi-pencil"></i>
                  </div>
                  <div class="btn-body">
                     Notes
                  </div>
               </a>
            </li>
            <li class="list-group-item">
               <a href="sidar-ui/dar-report" class="btn" id="navReportDAR">
                  <div class="btn-header me-3">
                     <i class="bi bi-flag"></i>
                  </div>
                  <div class="btn-body">
                     Notes Report
                  </div>
               </a>
            </li>
            <li class="list-group-item">
               <a class="btn">
                  <div class="btn-header me-3">
                     <i class="bi bi-chat"></i>
                  </div>
                  <div class="btn-body">
                     Inbox
                  </div>
               </a>
            </li>
            <li class="list-group-item">
               <a class="btn">
                  <div class="btn-header me-3">
                     <i class="bi bi-calendar-day"></i>
                  </div>
                  <div class="btn-body">
                     Dates <label for="" class="small">*Beta</label>
                  </div>
               </a>
            </li>
          
         </ul>
      </section>
      <!-- sidebar manager menu -->
      <section>
         <div class="container-fluid">
            <h6 class="fw-bold">Manage</h6>
         </div>
         <ul class="list-group mb-4 rounded-0">
            <li class="list-group-item">
               <a class="btn">
                  <div class="btn-header me-3">
                     <i class="bi bi-eraser"></i>
                  </div>
                  <div class="btn-body">
                     Menu 1
                  </div>
               </a>
            </li>
            <li class="list-group-item">
               <a class="btn">
                  <div class="btn-header me-3">
                     <i class="bi bi-briefcase"></i>
                  </div>
                  <div class="btn-body">
                    Menu 2
                  </div>
               </a>
            </li>
            <li class="list-group-item">
               <a class="btn">
                  <div class="btn-header me-3">
                     <i class="bi bi-display"></i>
                  </div>
                  <div class="btn-body">
                     Menu 3
                  </div>
               </a>
            </li>
            <li class="list-group-item">
               <a class="btn">
                  <div class="btn-header me-3">
                     <i class="bi bi-person-check"></i>
                  </div>
                  <div class="btn-body">
                     Menu 4
                  </div>
               </a>
            </li>
            <li class="list-group-item">
               <a class="btn">
                  <div class="btn-header me-3">
                     <i class="bi bi-diagram-3"></i>
                  </div>
                  <div class="btn-body">
                     Menu 5
                  </div>
               </a>
            </li>
            <li class="list-group-item">
               <a class="btn">
                  <div class="btn-header me-3">
                     <i class="bi bi-airplane"></i>
                  </div>
                  <div class="btn-body">
                     Menu 6
                  </div>
               </a>
            </li>
            <li class="list-group-item">
               <a class="btn">
                  <div class="btn-header me-3">
                     <i class="bi bi-people"></i>
                  </div>
                  <div class="btn-body">
                     Menu 7
                  </div>
               </a>
            </li>
         </ul>
      </section>
      <!-- sidebar setting menu -->
      <section>
         <div class="container-fluid">
            <h6 class="fw-bold">Setting</h6>
         </div>
         <ul class="list-group mb-4 rounded-0">

            <!-- collapse menu / accordion item (add "collapse-tem" class on list-group item class, then add "collapse" div after add attribute "data-bs-toggle & data-bs-target" also add "collapsed" class on trigger button ) -->
            <li class="list-group-item collapse-item">
               <a class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#sideCol1">
                  <div class="btn-header me-3">
                     <i class="bi bi-person-gear"></i>
                  </div>
                  <div class="btn-body">
                     Profile
                  </div>
               </a>
               <div class="collapse" id="sideCol1">
                  <ul class="list-group mb-4 rounded-0">
                     <li class="list-group-item">
                        <a class="btn">
                           <div class="btn-header me-3">
                              <i class="bi bi-x-diamond"></i>
                           </div>
                           <div class="btn-body">
                              Reset Password
                           </div>
                        </a>
                     </li>
                     <li class="list-group-item">
                        <a class="btn">
                           <div class="btn-header me-3">
                              <i class="bi bi-x-diamond"></i>
                           </div>
                           <div class="btn-body">
                              Upload Identity Card
                           </div>
                        </a>
                     </li>
                     <li class="list-group-item">
                        <a class="btn">
                           <div class="btn-header me-3">
                              <i class="bi bi-x-diamond"></i>
                           </div>
                           <div class="btn-body">
                              Upload Image Profile
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
            </li>
            <!-- end collapse menu -->

            <li class="list-group-item">
               <a class="btn">
                  <div class="btn-header me-3">
                     <i class="bi bi-google-play"></i>
                  </div>
                  <div class="btn-body">
                     Mobile APPs
                  </div>
               </a>
            </li>
            <li class="list-group-item">
               <a class="btn">
                  <div class="btn-header me-3">
                     <i class="bi bi-info-circle"></i>
                  </div>
                  <div class="btn-body">
                     Help
                  </div>
               </a>
            </li>
            <li class="list-group-item">
               <a class="btn">
                  <div class="btn-header me-3">
                     <i class="bi bi-person-x"></i>
                  </div>
                  <div class="btn-body">
                     Logout
                  </div>
               </a>
            </li>
         </ul>
      </section>
      <!-- end of sidebar menu -->
   </div>
</div>
<style>
   #sidebar {
      max-width: 320px;
      border-right: solid 1px #d1d2d2;
      box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
   }

   #sidebar .list-group-item {
      background-color: inherit;
      padding: 0;
      border-left-width: 0 !important;
      border-right-width: 0 !important;
   }

   #sidebar .list-group-item .btn {
      display: flex;
      flex-wrap: nowrap;
      text-align: left;
      line-height: normal;
      border-radius: 0;
      width: 100%;
      padding: .5rem 1rem .5rem 1.5rem;
      text-transform: capitalize;
   }

   #sidebar .collapse-item .list-group-item .btn {
      padding-left: 3rem;
   }

   #sidebar .list-group-item .btn:hover,
   #sidebar .list-group-item .btn.active {
      background-color: #30027a;
      color: white;
   }

   @media (min-width: 992px) {
      #sidebar {
         position: fixed;
         top: 0;
         left: 0;
         bottom: 0;
         width: 100%;
         max-width: 280px;
         z-index: 1030;
         box-shadow: .25rem 0 .5rem rgba(0, 0, 0, .25) !important;
      }
   }

   #sidebar .small {
      font-size: .75em;
   }

   .collapse-item {
      overflow-x: hidden;
   }

   .collapse-item>.btn {
      position: relative;
   }

   .collapse-item>.btn::after {
      content: url(../ui/bootstrap-icons-1.10.2/chevron-up.svg);
      width: 20px;
      height: 20px;
      position: absolute;
      top: 50%;
      left: calc(100% - 15px);
      transform: translate(-50%, -50%) rotate(0deg);
      transition: all .36s;
   }

   .collapse-item>.btn.collapsed::after {
      transform: translate(-50%, -50%) rotate(180deg);
   }

   .collapse-item>.btn:hover::after,
   .collapse-item>.btn.active::after {
      filter: invert(1);
   }
</style>