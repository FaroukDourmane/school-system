$(function(){
  // Include configuration file
  //$.getScript('assets/js/widgets-config.js');

  /* Open widget action */
  $(document).on("click",".openWidget",function(e){
    e.preventDefault();
    $("body").addClass("disabled");
    addLoader(loader);

    var id = $(this).attr("id");

    $.post("widgets/controller.php", {request: "widget", id: id})
    .done(function(data){
      data = $.parseJSON(data);
      removeWidgets()

      if ( data.type == "success" )
      {
        $("body").prepend(data.content);
        let widget_form = $("body .widget form");

        if( widget_form.length > 0 )
        {
          let action_input = $(widget_form).find("input[name='action']");
          if ( action_input.length == 0 )
          { $(widget_form).prepend("<input type='hidden' name='action' value='"+data.action+"' /> "); }
        }
      }else{
        $("body").removeClass("disabled");
      }
    });
  });


  /* Close widget action */
  $(document).on("click",".widget .close",function(e){
    e.preventDefault();
    $("body").removeClass("disabled");
    removeWidgets()
  });

});
