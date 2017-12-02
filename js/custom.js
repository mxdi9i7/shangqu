



(navLinkActive = () => {
    var whosActive = $('#activeIdentifier').val()
    console.log(whosActive)
    switch (whosActive) {
        case "home":
            $('.nav-item').removeClass('active');
            console.log($('#homeLink'))
            $('#homeLink').addClass('active');
            break;
        case "about":
            $('.nav-item').removeClass('active');
            $('#aboutLink').addClass('active');
            break;
        case "city":
            $('.nav-item').removeClass('active');
            $('#cityLink').addClass('active');
            break;
        case "school":
            $('.nav-item').removeClass('active');
            $('#schoolLink').addClass('active');
            break;
        case "events":
            $('.nav-item').removeClass('active');
            $('#eventsLink').addClass('active');
            break;
        case "contact":
            $('.nav-item').removeClass('active');
            $('#contactLink').addClass('active');
            break;
        case "jobs":
            $('.nav-item').removeClass('active');
            $('#jobLink').addClass('active');
            break;
        case "news":
            $('.nav-item').removeClass('active');
            $('#newsLink').addClass('active');
            break;
    }   
})()




initMap = () => {
    if ($('#activeIdentifier').val() === "about") {
         // Create a map object and specify the DOM element for display.
         var myLatLng = {lat: 41.32, lng: -97.28};
                 // Create a map object and specify the DOM element for display.
                 var map = new google.maps.Map(document.getElementById('map'), {
                   center: myLatLng,
                   zoom: 4
                 });
         
                 // Create a marker and set its position.
                 var orlando = new google.maps.Marker({
                   map: map,
                   position: {lat: 28.541488, lng: -81.352142},
                   title: 'Orlando!'
                 });
                 var miami = new google.maps.Marker({
                   map: map,
                   position: {lat: 25.787028, lng: -80.2088},
                   title: 'Miami!'
                 });
                 var diego = new google.maps.Marker({
                   map: map,
                   position: {lat: 32.781531, lng: -117.15},
                   title: 'San Diego!'
                 });
                 var la = new google.maps.Marker({
                   map: map,
                   position: {lat: 34.05, lng: -118.41},
                   title: 'Los Angeles!'
                 });
                 var sf = new google.maps.Marker({
                   map: map,
                   position: {lat: 37.786, lng: -122.4374},
                   title: 'San Francisco!'
                 });
                 var nyc = new google.maps.Marker({
                   map: map,
                   position: {lat: 40.7659, lng: -73.9724},
                   title: 'New York City!'
                 });
                 var pa = new google.maps.Marker({
                   map: map,
                   position: {lat: 39.9582, lng: -75.1681},
                   title: 'Philadephia!'
                 });
                 var ak = new google.maps.Marker({
                   map: map,
                   position: {lat: 34.947, lng: -92.342},
                   title: 'Arkansas!'
                 });
                 var seattle = new google.maps.Marker({
                   map: map,
                   position: {lat: 47.618960, lng: -122.3324},
                   title: 'Seattle!'
                 });
                 var houston = new google.maps.Marker({
                   map: map,
                   position: {lat: 29.8, lng: -95.37},
                   title: 'Houston!'
                 });
                 var penn = new google.maps.Marker({
                   map: map,
                   position: {lat: 41.1673, lng: -75.4481},
                   title: 'Pennsylvania!'
                 });
                 var boston = new google.maps.Marker({
                   map: map,
                   position: {lat: 42.3566, lng: -71.0691},
                   title: 'Boston!'
                 });
                 var nf = new google.maps.Marker({
                   map: map,
                   position: {lat:43.0885 , lng: -79.079},
                   title: 'Nigara Falls!'
                 });
                 var pitts = new google.maps.Marker({
                   map: map,
                   position: {lat: 40.44, lng: -79.99},
                   title: 'Pittsburgh!'
                 });
    }
}
