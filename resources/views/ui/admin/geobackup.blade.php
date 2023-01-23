<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Bootstrap demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/@turf/turf@6/turf.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>


   <script>
      function getLocation() {
         if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
         } else {
            console.log("Geolocation is not supported by this browser.");
         }
      }

      function showPosition(position) {
         var Latitude = position.coords.latitude;
         var Longitude = position.coords.longitude;
         console.log("coba");
         console.log(Latitude);
         console.log(Longitude);
         document.getElementById('longitude').innerHTML = Longitude;
         document.getElementById('latitude').innerHTML = Latitude;
         var from = turf.point([document.getElementById('longitude').innerHTML, document.getElementById('latitude').innerHTML]);
         var to = turf.point([112.6752611, -7.2933999]);
         var options = {
            units: 'kilometers'
         };

         var distance = turf.distance(from, to, options);



         document.getElementById('distance')
            .innerHTML = new Number(distance).toFixed(2) + " Km";

      }
   </script>
</head>

<body>

   <h1>Check Geolocation and camera</h1>
   <div id="longitude">unidentified</div>
   <div id="latitude">unidentified</div>
   <p id='distance'>Tidak teridentifikasi</p>



   <form method="POST" action="#">

      @csrf

      <div class="row">

         <div class="col-md-6">

            <div id="my_camera"></div>

            <br />

            <input type=button value="Take Snapshot" onClick="take_snapshot()">

            <input type="hidden" name="image" class="image-tag">

         </div>

         <div class="col-md-6">

            <div id="results">Your captured image will appear here...</div>

         </div>

         <div class="col-md-12 text-center">

            <br />

            <button class="btn btn-success">Submit</button>

         </div>

      </div>

   </form>

   <script>
      //format long, lat
   </script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
<Script>
   window.onload = function() {
      console.log("test");
      getLocation()

   }
</script>
<script language="JavaScript">
   Webcam.set({

      width: 490,

      height: 350,

      image_format: 'jpeg',

      jpeg_quality: 90

   });



   Webcam.attach('#my_camera');



   function take_snapshot() {

      Webcam.snap(function(data_uri) {

         $(".image-tag").val(data_uri);

         document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';

      });

   }
</script>

<script>
   // garis bantu
   [].forEach.call(document.querySelectorAll("*"), function(a) {
      a.style.outline = "1px solid green";
   });
</script>

</html>