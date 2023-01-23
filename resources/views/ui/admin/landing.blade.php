@extends('ui/admin/layout')

@section('title')
<title>SIDAR &bull; Dashboard</title>
@endsection

@section('konten')

<section>
   <div class="container-fluid px-md-4">

      <div class="row">
         <div class="col-12">
            <!-- font-size sub title pages -->
            <h4 class="fw-bold">Subtitle Dashboard</h4>
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic libero possimus sequi non qui odio laudantium officiis neque repellat, necessitatibus aspernatur quos iste nulla et asperiores rerum voluptatum? Aliquid, vel?
            </p>
         </div>
         <div class="col-xl-6">
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur incidunt illum error magni reprehenderit. Minima culpa sed vitae quis. Similique hic, ad maxime assumenda sit pariatur in quidem voluptates quia.
            </p>
         </div>
         <div class="col-xl-6">
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur incidunt illum error magni reprehenderit. Minima culpa sed vitae quis. Similique hic, ad maxime assumenda sit pariatur in quidem voluptates quia.
            </p>
         </div>
      </div>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
         Launch static backdrop modal
      </button>
      <a href="/sidar-ui/geolocation" class="btn btn-dark">Launch Camera</a>

      <!-- Modal -->
      <!-- add modal-center to modal class for centered modal to window -->
      <div class="modal fade modal-center" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  ...
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Understood</button>
               </div>
            </div>
         </div>
      </div>

   </div>
</section>
@endsection

@section('script')
<script>
   $('#navDashboard').addClass('active');
   $('#navdownDashboard').addClass('active');
</script>
@endsection