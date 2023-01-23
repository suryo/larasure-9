<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDAR &bull; Absence</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        html {
            background-color: #323232;
        }

        body {
            background-color: white;
            color: #323232;
        }

        .navbar {
            z-index: 1030;
        }

        #navtop {
            background-image: linear-gradient(to bottom, black, transparent);
        }

        #navdown {
            background-image: linear-gradient(to top, black, transparent);
        }

        @media (min-width: 768px) {
            html {
                display: flex;
                align-items: center;
            }

            body {
                max-width: 400px;
                max-height: 700px;
                margin: auto;
            }
        }
    </style>
</head>

<body class="position-relative">

    <!-- navtop -->
    <nav id="navtop" class="navbar position-absolute start-0 top-0 end-0" style="padding-top: .75rem; padding-bottom: 7rem;">
        <div class="container-fluid">
            <a href="/sidar-ui/geolocation" class="navbar-brand">
                <img src="/ui/img/logo-sidar-light.svg" class="img-fluid" width="160" alt="">
            </a>
            <button class="btn text-light p-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="bi bi-chat-square-text fs-5"></i>
            </button>
        </div>
    </nav>

    <main class="wrapper overflow-auto h-100 position-relative">

        <!-- photo area -->
        <div class="photo-area w-100 h-100 position-relative overflow-hidden" style="background-color: black;">

            <div class="collapse fade show">
                <div id="my_camera" class="w-100 h-100 position-relative" style="background-color: #323232;"></div>
                <!-- take photo -->

                <!-- cek lokasi -->
                <div class="lokasi text-light opacity-75" style="position: absolute; top: 64px; left: 15px; z-index: 1032; font-size: .875em;">
                    <div id="longitude">unidentified</div>
                    <div id="latitude">unidentified</div>
                    <p id='distance'>Tidak teridentifikasi</p>
                </div>
            </div>

            <!-- preview photo -->
            <div class="collapse">
                <div id="results" class="position-absolute top-50 start-50 translate-middle w-100 h-100" style="z-index: 100;"></div>
                <button class="btn btn-outline-light d-flex align-items-center" data-bs-toggle="collapse" data-bs-target=".collapse" style="position: absolute; z-index: 1032; top: 64px; right: 15px;">
                    <small style="font-size: 12px;">Retake Photo</small> <i class="bi bi-x-circle fs-4 ms-2"></i>
                </button>
            </div>

        </div>

        <!-- maps area -->
        <div class="position-absolute w-100" style="z-index: 1032; left: 0; bottom: 52px;">
            <div class="container-fluid w-100">
                <iframe class="border-0 rounded overflow-hidden" src="https://maps.google.com/maps?q=-7.4016,112.5929&z=12&output=embed" width="40%" height="auto" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p class="small text-light">
                    Pakuwon Square AK-1/37, Babatan, Kec. Wiyung, Kota SBY, Jawa Timur 60227
                </p>
            </div>
        </div>
    </main>

    <!-- modal textarea / message -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        <i class="bi bi-chat"></i> <span>Write Message</span>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea name="" id="" cols="30" rows="5" class="form-control border-0 rounded-0" placeholder="Write your message here"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Submit Message</button>
                </div>
            </div>
        </div>
    </div>

    <!-- navdown -->
    <nav id="navdown" class="navbar position-absolute start-0 bottom-0 end-0" style="padding-bottom: .75rem; padding-top: 10rem;">
        <div class="container-fluid d-block">
            <div class="row row-cols-2 g-2">
                <div class="col">
                    <button class="btn btn-secondary w-100 py-2" onClick="take_snapshot()" data-bs-toggle="collapse" data-bs-target=".collapse">
                        <i class="bi bi-camera me-2"></i> TAKE PHOTO
                    </button>
                </div>
                <div class="col">
                    <button class="btn btn-primary w-100 py-2">
                        <i class="bi bi-send me-2"></i> SEND
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@turf/turf@6/turf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script>
        // fungsi lokasi
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

        window.onload = function() {
            console.log("test");
            getLocation()

        }

        // fungsi camera
        Webcam.set({
            width: 1244,
            height: 700,
            crop_width: 400,
            crop_height: 700,
            // dest_width: 400,
            // dest_height: 700,
            image_format: 'jpeg',
            jpeg_quality: 90,
        });

        Webcam.attach('#my_camera');

        function take_snapshot() {
            Webcam.snap(function(data_uri) {
                document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
            });
        }

        // garis bantu
        [].forEach.call(document.querySelectorAll("*"), function(a) {
            // a.style.outline = "1px solid green";
        });
    </script>

</body>

</html>