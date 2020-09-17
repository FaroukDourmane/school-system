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
      console.log(response);
      //response = $.parseJSON(response);
      if ( response.type == "success" )
      {
        let message = success("and error has occured");
      }else{
        let message = error("and error has occured");
      }

      removeWidgets();
      $("body").prepend(message);
    });
  });
});
