@extends('layout.backend.frontendSupplier')

@section('content')
     
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daging Shop</title>

        <!-- leaflet css  -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin="" />

        <!-- bootstrap cdn  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>

            /* ukuran peta */
            #mapid {
                height: 100%;
            }
            .jumbotron{
                height: 100%;
                border-radius: 0;
            }
            body{
                background-color: #ebe7e1;
            }
        </style>
    </head>

    <div id="mapid"></div>

    <input type="hidden" id="latlong" name="latlong">

    <script>
        // buat variabel berisi fungsi L.popup
        var popup = L.popup();

        // buat fungsi popup saat map diklik
        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("koordinatnya adalah " + e.latlng.toString()) // set isi konten yang ingin ditampilkan, kali ini kita akan menampilkan latitude dan longitude
                .openOn(mymap);

            document.getElementById('latlong').value = e.latlng; // value pada form latitude dan longitude akan berganti secara otomatis
        }
        mymap.on('click', onMapClick); // jalankan fungsi
    </script>

    <body>
        <div class="row"> <!-- class row digunakan sebelum membuat column  -->
            <div class="col-4"> <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
                <div class="jumbotron"> <!-- untuk membuat semacam container berwarna abu -->
                <h1>Add Location</h1>

                <hr>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="latlong">Latitude</label>
                            <input type="text" class="form-control" id="latlong" name="latlong">
                        </div>

                        <div class="form-group">
                            <label for="latlong">Longitude</label>
                            <input type="text" class="form-control" id="latlong" name="latlong">
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_tempat">Nama Tempat</label>
                            <input type="text" class="form-control" name="nama_tempat">
                        </div>

                        <div class="form-group">
                            <label for="namapem_tempat">Nama Pemilik</label>
                            <input type="text" class="form-control" name="namapem_tempat">
                        </div>

                        <div class="form-group">
                            <label for="jalan_tempat">Jalan </label>
                            <input type="text" class="form-control" name="jalan_tempat">
                        </div>

                        <div class="form-group">
                            <label for="asalkot_tempat">Asal Kota </label>
                            <input type="text" class="form-control" name="asalkot_tempat">
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori Tempat</label>
                            <select class="form-control" name="kategori" id="kategori">
                                <option value="">--Kategori Tempat--</option>
                                <option value="peternakan hewan besar">Peternakan Ruminansia</option>
                                <option value="peternakan unggas">Peternakan Unggas</option>
                                <option value="perikanan tawar">Perikanan Tawar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Add</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-8"> <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
                <!-- peta akan ditampilkan dengan id = mapid -->
                <div id="mapid"></div>
            </div>
        </div>

        <!-- leaflet js  -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin="">
        </script>

        {{-- <script>

            // // set lokasi latitude dan longitude, lokasinya kota palembang 
            // var mymap = L.map('mapid').setView([-2.9547949, 104.6929233], 13);   
            // //setting maps menggunakan api mapbox bukan google maps, daftar dan dapatkan token      
            // L.tileLayer(
            //     'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            //         attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            //         maxZoom: 20,
            //         id: 'mapbox/streets-v11', //menggunakan peta model streets-v11 kalian bisa melihat jenis-jenis peta lainnnya di web resmi mapbox
            //         tileSize: 512,
            //         zoomOffset: -1,
            //         accessToken: 'your.mapbox.access.token'
            //     }).addTo(mymap);


            // // buat variabel berisi fugnsi L.popup 
            // var popup = L.popup();

            // // buat fungsi popup saat map diklik
            // // function onMapClick(e) {
            // //     popup
            // //         .setLatLng(e.latlng)
            // //         .setContent("koordinatnya adalah " + e.latlng
            // //             .toString()
            // //             ) //set isi konten yang ingin ditampilkan, kali ini kita akan menampilkan latitude dan longitude
            // //         .openOn(mymap);

            // //     document.getElementById('latlong').value = e.latlng //value pada form latitde, longitude akan berganti secara otomatis
            // // }
            // // mymap.on('click', onMapClick); //jalankan fungsi

            

        </script> --}}
    </body>

    @push('scripts')
        <script>
            // set lokasi latitude dan longitude, lokasinya kota palembang
            var mymap = L.map('mapid').setView([-2.9547949, 104.6929233], 13);
            // setting maps menggunakan API mapbox bukan Google Maps, daftar dan dapatkan token
            L.tileLayer(
                'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    maxZoom: 20,
                    id: 'mapbox/streets-v11', // menggunakan peta model streets-v11, Anda bisa melihat jenis-jenis peta lainnya di web resmi mapbox
                    tileSize: 512,
                    zoomOffset: -1,
                    accessToken: '#'
                }).addTo(mymap);
        </script>
    @endpush


    

@endsection
