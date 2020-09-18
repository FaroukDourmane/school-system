$(function(){

  /* Widget forms submit actions */
  $(document).on("submit",".widget form",function(e){
    e.preventDefault();
    addLoader();

    let form = $(this).serializeArray();
    let data = {};

    $.each(form,function(i,v){
      data[v.name] = v.value;
    });

    $.post("widgets/actions.php", data)
    .done(function(response){
      response = $.parseJSON(response);

      if ( response.type == "success" )
      {
        var message = success(response.message);
      }else{
        var message = error(response.message);
      }

      if ( response.close == "yes" )
      {
        removeWidgets();
      }else{
        removeLoader();
      }

      $("body").prepend(message);
    });
  });
});
