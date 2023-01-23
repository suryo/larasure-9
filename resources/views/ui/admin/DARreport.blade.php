@extends('ui/admin/layout')

@section('title')
<title>SIDAR &bull; EDM Report</title>
@endsection

@section('konten')
<section>
   <div class="container-fluid px-md-4">
      <div class="card">
         <div class="card-header">
            <h5 class="fw-bold text-uppercase mb-0 fs-4">report per day</h5>
         </div>
         <div class="card-body">

            <header class="mb-4">
               <div class="row row-cols-2 align-items-center">
                  <div class="col">
                     <input type="text" class="form-control w-sm-auto" placeholder="Period Filter">
                  </div>
                  <div class="col">
                     <div class="form-check form-switch form-check-reverse">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label text-nowrap" for="flexSwitchCheckChecked">Read Filter</label>
                     </div>
                  </div>
               </div>
            </header>

            <div class="table-responsive">
               <ul class="list-group list-group-flush small">
                  <!-- head table on desktop -->
                  <li class="list-group-item p-0 fw-bold text-uppercase d-none d-xl-block bg-white border-top border-dark border-2">
                     <a href="/sidar-ui" class="d-block py-3">
                        <div class="row g-0 flex-nowrap align-items-center">
                           <div class="col-7 order-xl-2 col-xl-8">
                              <div class="row g-0 align-items-center">
                                 <div class="col-xl-4 col-xxl-4">name</div>
                                 <div class="col-4 col-xl-2 col-xxl-2">DAR date</div>
                                 <div class="col-8 col-xl-3 order-xl-3">status</div>
                                 <div class="col-xl-3">DAR sent</div>
                              </div>
                           </div>
                           <div class="col-5 order-xl-1 col-xl-4">
                              <div class="row g-0 text-align-center">
                                 <div class="col-xl-6">dept.</div>
                                 <div class="col-xl-6">company</div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </li>

                  <!-- looping report item -->
                  <li class="list-group-item p-0">
                     <a href="/sidar-ui" class="d-block py-3">
                        <div class="row g-0 flex-nowrap align-items-center">
                           <div class="col-7 order-xl-2 col-xl-8">
                              <div class="row g-0 text-capitalize align-items-center">
                                 <div class="col-xl-4 col-xxl-4 text-uppercase">yoggi d pradhokot</div>
                                 <div class="col-4 col-xl-2 col-xxl-2">25-11-22</div>
                                 <div class="col-8 col-xl-3 order-xl-3"><span class="badge rounded-pill text-bg-success text-uppercase">ontime</span></div>
                                 <div class="col-xl-3">25-11-22 (17.15)</div>
                              </div>
                           </div>
                           <div class="col-5 order-xl-1 col-xl-4">
                              <div class="row g-0 text-uppercase text-align-center">
                                 <div class="col-xl-6">web developer</div>
                                 <div class="col-xl-6">igi surabaya</div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="list-group-item p-0">
                     <a href="/sidar-ui" class="d-block py-3">
                        <div class="row g-0 flex-nowrap align-items-center">
                           <div class="col-7 order-xl-2 col-xl-8">
                              <div class="row g-0 text-capitalize align-items-center">
                                 <div class="col-xl-4 col-xxl-4 text-uppercase">yoggi d pradhokot</div>
                                 <div class="col-4 col-xl-2 col-xxl-2">25-11-22</div>
                                 <div class="col-8 col-xl-3 order-xl-3"><span class="badge rounded-pill text-bg-danger text-uppercase">over</span></div>
                                 <div class="col-xl-3">25-11-22 (17.15)</div>
                              </div>
                           </div>
                           <div class="col-5 order-xl-1 col-xl-4">
                              <div class="row g-0 text-uppercase text-align-center">
                                 <div class="col-xl-6">web developer</div>
                                 <div class="col-xl-6">igi surabaya</div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="list-group-item p-0">
                     <a href="/sidar-ui" class="d-block py-3">
                        <div class="row g-0 flex-nowrap align-items-center">
                           <div class="col-7 order-xl-2 col-xl-8">
                              <div class="row g-0 text-capitalize align-items-center">
                                 <div class="col-xl-4 col-xxl-4 text-uppercase">yoggi d pradhokot</div>
                                 <div class="col-4 col-xl-2 col-xxl-2">25-11-22</div>
                                 <div class="col-8 col-xl-3 order-xl-3"><span class="badge rounded-pill text-bg-warning text-uppercase text-wrap">pending absence</span></div>
                                 <div class="col-xl-3">25-11-22 (17.15)</div>
                              </div>
                           </div>
                           <div class="col-5 order-xl-1 col-xl-4">
                              <div class="row g-0 text-uppercase text-align-center">
                                 <div class="col-xl-6">web developer</div>
                                 <div class="col-xl-6">igi surabaya</div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </li>
                  <!-- end of looping report item -->

               </ul>
            </div>
            <style>
               .table-responsive .list-group-item a {
                  color: inherit;
                  text-decoration: none;
               }

               .table-responsive .list-group-item:hover {
                  background-color: #f1f2f2;
               }
            </style>

         </div>
         <div class="card-footer text-center d-md-flex align-items-center justify-content-between">
            <div class="mb-2">Showing 1 to 20 of 70 entries</div class="mb-2">
            <nav aria-label="...">
               <ul class="pagination justify-content-center mb-0">
                  <li class="page-item disabled">
                     <a class="page-link">Previous</a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                     <a class="page-link" href="#">Next</a>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
   </div>
</section>
@endsection

@section('script')
<script>
   $('#navReportDAR').addClass('active');
   $('#navdownReportDAR').addClass('active');
</script>
@endsection