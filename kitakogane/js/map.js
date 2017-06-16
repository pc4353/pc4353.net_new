
function dispgmap() {
    var latlng = new google.maps.LatLng(35.8326804,139.9317806);
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