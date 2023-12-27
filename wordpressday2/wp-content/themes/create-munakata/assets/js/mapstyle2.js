function initialize() {
  var latlng = new google.maps.LatLng(33.814313, 130.564226);
  var myOptions = {
    zoom: 13,/*拡大比率*/
    center: latlng,/*表示枠内の中心点*/
    mapTypeControlOptions: { mapTypeIds: ['sample', google.maps.MapTypeId.ROADMAP] }/*表示タイプの指定*/
  };
  var map = new google.maps.Map(document.getElementById('map_canvas2'), myOptions);
  /*アイコン設定▼*/
  var icon = new google.maps.MarkerImage('https://www.create-munakata.co.jp/wp-content/themes/create-munakata/assets/img/top/mapicon.png',
  new google.maps.Size(100,137),/*アイコンサイズ設定*/
  new google.maps.Point(0,0)/*アイコン位置設定*/
  );
  var markerOptions = {
  position: {lat: 33.814313, lng: 130.564226},
  map: map,
  icon: icon,
  };
  var marker = new google.maps.Marker(markerOptions);
　/*アイコン設定ここまで▲*/

}


google.maps.event.addDomListener(window, 'load', initialize);
