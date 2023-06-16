// import L from 'leaflet';
// import 'leaflet-control-geocoder';

// // Initialize the map
// const map = L.map('map').setView([0, 0], 13);

// // Add a tile layer (you can choose a different tile provider if desired)
// L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
//     attribution: '&copy; OpenStreetMap contributors'
// }).addTo(map);

// // Add the geocoder control
// const geocoder = L.Control.Geocoder.nominatim();
// L.Control.geocoder({
//     defaultMarkGeocode: false
// })
//     .on('markgeocode', function (e) {
//         const latlng = e.geocode.center;
//         map.flyTo(latlng, 13);
//     })
//     .addTo(map);

// // Get the input field and attach the geocoder to it
// const input = document.getElementById('location-input');
// L.DomEvent.addListener(input, 'keydown', function (e) {
//     if (e.keyCode === 13) {
//         L.DomEvent.preventDefault(e);
//         geocoder.geocode(input.value, function (results) {
//             if (results.length > 0) {
//                 const latlng = results[0].center;
//                 map.flyTo(latlng, 13);

//                 // Clear existing markers
//                 map.eachLayer(function (layer) {
//                     if (layer instanceof L.Marker) {
//                         map.removeLayer(layer);
//                     }
//                 });

//                 // Add a marker for the selected location
//                 L.marker(latlng).addTo(map);
//             }
//         });
//     }
// });

// // Get the input fields
// const addressInput = document.getElementById('address');
// const latitudeInput = document.getElementById('latitude');
// const longitudeInput = document.getElementById('longitude');

// // Input file
// geocoder.geocode(input.value, function (results) {
//     if (results.length > 0) {
//         const latlng = results[0].center;
//         map.flyTo(latlng, 13);

//         // Set the latitude and longitude values
//         latitudeInput.value = latlng.lat;
//         longitudeInput.value = latlng.lng;

//         // Clear existing markers
//         map.eachLayer(function (layer) {
//             if (layer instanceof L.Marker) {
//                 map.removeLayer(layer);
//             }
//         });

//         // Add a marker for the selected location
//         L.marker(latlng).addTo(map);
//     }
// });
