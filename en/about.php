<?php include '../partials/head_en.php' ?>
    <input type="text" value="about" type="hidden" id="activeIdentifier">
    <section class="aboutSection">
        <div class="aboutContainer">
            <div class="aboutBox">
                <!-- <h1>-Mission-</h1>
                <span>Noblefun educational communications, has become a new trend for parents of the 21st century. As outdoor learning becomes more and more popular, our goal is to nurture independent thinking, bold innovation, teamwork, calm and passionate characters in children.
                </span>
                <h2>About us</h2> -->
                <p>
                Noblefun (US) Educational Communications Center, previously known as the 
                New York Noblefun Children's Outdoor Activities Organization, was started in 2014. As the 
                first educational institution that targets Chinese families in outdoor activities, we 
                are now forming our partnerships in studying abroad and students exchange programs with
                major human resource institutions and schools in China. By offering specialized education resources,
                we are now leading the market in the North America's specialized educations. Noblefun promotes
                outdoor education and focus on studying the differences of Chinese and American education systems.
                Spending time with your children will greatly improve the bonds between the parents and the
                children, also helping the children experience the love and care given by their parents.
                Our outdoor programs will help children develop independent and innovative thinking, teamwork,
                problem solving skills and leadership. Our children will no longer be just a school-smart kid,
                but a life-smart future leader of the American society who will remain competitive even
                in the most elite environments. 
                </p>

                <h2>－Noblefun Cultural Communication－</h2>
                <p>Our curriculums range from STEM education to robotics research, from music to liberal arts.</p>
                <p>Premium tours to Ivy League schools like Harvard, MIT and Yale.</p>
                <p>Visit American landmarks like the Statue of Liberty, Empire State Building, Universal Studio and Hollywood. </p>
                <p>Study in American primary schools, middle schools and highschools and enjoy the most original English education.
                </p>
                
                 
                <h2>－Noblefun Outdoors Study Exploration－</h2>
                <p> Join us, you will learn with your children while having fun. Grow together with your children and become best friends with them. Beside private family tours, we also offer family events to all parents to create the most beautiful memories with the children.<br>
                <p>On the ground:   Shooting, archery, equestrian, hunting, hiking, outdoor survival, skiing, rafting, rock climbing, camping, enjoy the beauty of the seasons ... </p>
                <p>On the sea: Boats, fishing, water hunting, kite surfing, grabbing big lobster and abalone ...  </p>
                <p>In the air: Test drive aircraft flight, glider, skydiving, lanterns, hot air balloon ... </p>
                <p><strong> Shang (Noble) - respect and respected, Qu (Fun) - passion and positivity, we take you to explore the world, with children across the United States! </strong></p>
            </div>
            <div class="aboutBox">
                <h2>Our path</h2>
                <div class="placeContainer">
                    <div id="map"></div>
                    <a href="/contact.php" class="btn btn-sm btn-rounded btn-simple btn-simple__blue">Join us today!</a>
                </div>
            </div>
        </div>
    </section>

<?php include '../partials/footer_en.php' ?>

<script>
    function initMap() {
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
               

</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOQ1dZeyI0IQO6esZRxOhg-7gBNszRd7M&callback=initMap">
    </script>