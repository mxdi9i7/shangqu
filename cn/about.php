<?php include '../partials/head.php' ?>
    <input type="text" value="about" type="hidden" id="activeIdentifier">
    <section class="aboutSection">
        <div class="aboutContainer">
            <div class="aboutBox">
                <h1>-我们的使命-</h1>
                <span>尚趣教育传播，已经成为新锐父母们研究北美教育、推广户外教学的不二园地，我们的主旨在于训练孩子们养成独立思考、大胆创新、团队合作、冷静应急的性格。
                </span>
                <h2>尚趣的前生今世</h2>
                <p>
                尚趣的覆盖面积从各个名校深入学习，再从各式各样欧美户外体验学习领略文化差异；从小学、初中、高中、再到大学，为家长和孩子们提供一个从“行”和“学”中360度全方位教学模式，激活孩子们对于知识的探索、抛开局限孩子思维和目光的框架，撇开阻碍人生成功的短板。鼓励孩子多去尝试，在磨炼中成长！

                尚趣名校名胜游学：游览北美名校、寄宿美国当地本土家庭、插班学习、语言学习、体验美国当地特色文化，对比中西文化差异，让孩子们在混合文化中汲取中西精华，获得质地提升！
                </p>
                <p>从数理化到科学技术机器人研究探讨，从音乐美术从获得不一样的文化熏陶点化 </p>
                <p>哈佛、麻省、耶鲁、哥伦比亚等知名常青藤大学深度游览体验 </p>
                <p>自由女神、帝国大厦、环球影城、好莱坞等知名地标 </p>
                <p>小学、初中、高中插班游学，语言学习 
                </p>
                <p>
                尚趣户外深度旅行：跟随我们，你可以和孩子们在玩乐中共同学习，一起进步，和孩子们成为知心朋友，一起成长，除了私人订制亲子游，我们也对广大北美亲子们开放提供我们所有的亲子时光活动，给父母们营造和孩子们最美的时光。<br>
                <p>地上 射击，马术，狩猎，登山，滑雪，漂流，攀岩，野营，欣赏四季之美... </p>
                <p>海上 驾船，钓鱼，钓螃蟹，抓大龙虾，潜水，游艇... </p>
                <p>空中 试驾飞机飞行，滑翔机，跳伞，孔明灯，热气球... </p>
                <p><strong>尚--尊重与推崇，趣--激情与使之愉快，带你学行天下，和孩子们纵横北美！ </strong></p>
            </div>
            <div class="aboutBox">
                <h2>我们的足迹</h2>
                <div class="placeContainer">
                    <div id="map"></div>
                    <a href="" class="btn btn-sm btn-rounded btn-simple btn-simple__blue">加入我们</a>
                </div>
            </div>
        </div>
    </section>

<?php include '../partials/footer.php' ?>

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