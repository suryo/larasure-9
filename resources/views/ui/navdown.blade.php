<nav id="navdown" class="nav nav-pills nav-justified sticky-bottom bg-light text-uppercase d-lg-none">
   <a href="/sidar-ui" class="nav-link lh-1 rounded-0" id="navdownDashboard">
      <i class="bi bi-speedometer2"></i>
      <br>
      <span class="nav-text">dashboard</span>
   </a>
   <a href="/sidar-ui/dar-report" class="nav-link lh-1 rounded-0" id="navdownReportDAR">
      <i class="bi bi-flag"></i>
      <br>
      <span class="nav-text">DAR Report</span>
   </a>
   <a href="/sidar-ui" class="nav-link lh-1 rounded-0 position-relative" id="navdownDAR">
      <i class="bi bi-pencil"></i>
      <br>
      <span class="nav-text">DAR</span>
      <span class="badge rounded-pill text-bg-danger position-absolute top-0 start-50 translate-middle ms-3">+99</span>
   </a>
</nav>
<style>
   #navdown {
      border-top: solid 1px #323232;
   }

   #navdown .nav-link {
      color: #323232;
   }

   #navdown .nav-link .bi {
      font-size: 1.25rem;
   }

   #navdown .nav-link span.nav-text {
      font-size: .6rem;
   }

   #navdown .nav-link.active {
      background-color: #323232;
      color: #f1f2f2;
   }
</style>