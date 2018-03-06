<div class="navbar-section">
    <nav class="navbar navbar-inverse find-park-nav" role="navigation">
        <div class="container" style="margin-top: 110px">
            
            <div class="collapse-in navbar-collapse navbar-ex1-collapse">
                <form class="navbar-form text-center" role="search" id="location_search">
                    <div class="form-group">
                        <input type="text" id="location_input" autofocus="1" placeholder="Enter location" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" id="from" class="picker" placeholder="Check In">
                    </div>
                    <button type="submit" id="final_search">Search <img src="<?php echo base_url() ?>assets/images/icons/search.png" alt="" /> </button>
                </form>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>

<div id="demo"></div>

<div class="search-content blog-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="side-widget space30">
                    <div class="side-cat2" style="padding: 10px">
                        <div id="maps" style="min-height: 580px"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 dir-search">
                <div id="filterig_result"></div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

var map, infoWindow;
function initAutocomplete() {
    map = new google.maps.Map(document.getElementById('maps'), {
      center: {lat: 23.81054861928934, lng: 90.41211605072021},
      zoom: 10,gestureHandling: 'greedy'
    });
    infoWindow = new google.maps.InfoWindow;

    // Try HTML5 geolocation.
      navigator.geolocation.getCurrentPosition(function(position) {
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };
          showpos(position.coords.latitude,position.coords.longitude); //the function call the ajax

          infoWindow.setPosition(pos);
          infoWindow.setContent('<p class="map-infoWindow"><strong>Destination</strong></p>');
          infoWindow.open(map);
          map.setCenter(pos);
      }, function() {
        //find_disallow_location_result(); //show last hosting
      });

}
$(document).ready(function() {
  find_disallow_location_result(); //show last hosting
});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKf3D0CKv98W_EGTk5QfKANDh0CZuAlNc&libraries=places&callback=initAutocomplete" async defer></script>