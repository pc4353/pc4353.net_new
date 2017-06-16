
function dispgmap() {
    var latlng = new google.maps.LatLng(34.7878272,135.5374162);
    var myOptions = {
      zoom: 15,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      scrollwheel: false
    };
    var map = new google.maps.Map(document.getElementById("gmap"), myOptions);
    var marker = new google.maps.Marker({
      position: latlng, 
      map: map
    });
  };