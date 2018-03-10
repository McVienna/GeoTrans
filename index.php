<html>
<head>
    <link rel="stylesheet" type="text/css" href="..\bootstrap-4.0.0-dist\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="..\google\css\mymap.css">
    <link rel="script" type="text/js" href="..\google\js\mymap.js">
    <link rel="stylesheet" type="text/css" href="..\style\main.css">
</head>
<body>
 
<?php include "navi.php"; ?> 
<?php include "map.php"; ?>
<?php include "footer.php"; ?>

</body>

    <!-- Function That Initialises The Map and sets a Marker on a certain point calles uluru -->
    <script>
      function initMap() {
        var vienna = {lat: 48.209, lng: 16.37};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: vienna
        });
        var marker = new google.maps.Marker({
          position: vienna,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0N4Xd7naAfEAEecQC4-sXn-SzMyrgDMs
          &callback=initMap">
    </script>
</html>