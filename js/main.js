(function() {
  var initmap;

  initmap = function() {
    var companyMarker, companyPos, map, mapOptions, styledMap, styles;
    styles = [
      {
        featureType: "all",
        elementType: "all",
        stylers: [
          {
            saturation: -100
          }, {
            invert_lightness: true
          }, {
            lightness: -20
          }, {
            visibility: "on"
          }, {
            weight: 2.0
          }
        ]
      }
    ];
    styledMap = new google.maps.StyledMapType(styles, {
      name: "Magnet"
    });
    mapOptions = {
      zoom: 15,
      streetViewControl: false,
      center: new google.maps.LatLng(-33.437816, -70.64097),
      mapTypeControlOptions: {
        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
      },
      scrollwheel: false
    };
    map = new google.maps.Map(document.getElementById('map'), mapOptions);
    companyPos = new google.maps.LatLng(-33.440788, -70.65475);
    companyMarker = new google.maps.Marker({
      position: companyPos,
      map: map
    });
    map.mapTypes.set('map_style', styledMap);
    return map.setMapTypeId('map_style');
  };

  $(document).ready(function() {
    initmap();

    $('#submit').click(function(){
      var form = {};
      form.name = $('#name').val();
      form.email = $('#email').val();
      form.message = $('#message').val();
      $.ajax({
        type: 'POST',
        data: 'form='+JSON.stringify(form),
        success: function(r){
          $('#name').val('');
          $('#email').val('');
          $('#message').val('');
          $('#formOk').fadeIn(300);
          setTimeout(function(){
            $('#formOk').fadeOut(300);
          },4000);
        }
      });
    });

    $('#tellmemore').click(function() {
      var $blackbook;
      $blackbook = $('#blackbook');
      $blackbook.removeClass('hide');
      return $('body, html').scrollTop($blackbook.offset().top);
    });
  });

}).call(this);