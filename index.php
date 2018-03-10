<html>
<head>
    <link rel="stylesheet" type="text/css" href="..\bootstrap-4.0.0-dist\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="..\google\css\mymap.css">
    <link rel="script" type="text/js" href="..\google\js\mymap.js">
    <link rel="stylesheet" type="text/css" href="..\style\main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">GeoTrans</a>
  <img class="Logo" src="..\media\earth.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="map"></div>

<div class="container">
  <div class="footer footer-expand-lg">
      <p>&copy; Aleksander Rankovic & Markus Vogl</p>
  </div>
</div>

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