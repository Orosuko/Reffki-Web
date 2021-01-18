$('.contenedor').click(function () {
    if($("#video-narrativa").get(0).paused){
        $("#video-narrativa").get(0).play();
        $(".playpause").fadeOut();
  }else if($("#video-narrativa").get(0).paused){
    $("#video-narrativa").get(0).play();
  }
});

