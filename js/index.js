$('.contenedor').click(function () {
    if($("#video-narrativa").get(0).paused){
        $("#video-narrativa").get(0).play();
        $(".playpause").fadeOut();
  }else{
    $(".playpause").fadeIn();
  }
});

$('.contenedor2').click(function () {
  if($("#video-comercial").get(0).paused){
      $("#video-comercial").get(0).play();
      $(".playpause2").fadeOut();
}else{
  $(".playpause2").fadeIn();
}
});

$('.contenedor3').click(function () {
  if($("#video-musical").get(0).paused){
      $("#video-musical").get(0).play();
      $(".playpause3").fadeOut();
}else{
  $(".playpause3").fadeIn();
}
});

