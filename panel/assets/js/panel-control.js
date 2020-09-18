$(document).ready(function(){
  const hash = location.hash;
  const ajaxContainer = $(".panel-container .window-container .content-wrapper .content");

  var pages = {
    "#dashboard": "pages/dashboard.php",
    "#prints": "pages/prints.php",
    "#visits": "pages/visits.php"
  };

  // AJAX Page Changer
  $(document).on("click","#getPage",function(e){
    var url = $(this).attr("href");
    var exists = page_exists(url,pages);
    var button = $(this);

    var data = "";

    if ( typeof $(this).attr("data-json") !== typeof undefined && $(this).attr("data-json") !== false )
    {
      data = $(this).attr("data-json");
      data = $.parseJSON(data);
    }

    if ( exists )
    {
      location.hash = url;
      //$(".ajaxContainer").html("");
      add_loader();

      $(ajaxContainer).load(pages[url], data,function(){
        $(ajaxContainer).removeClass('loading');

        $("a#getPage").removeClass("active");
        $(button).addClass("active");
      });
    }else{
      //pushNotification("Page was not found !","error");
    }
  });

  function add_loader(){
    $(".panel-container .window-container .content-wrapper .content").addClass('loading');
  }

  // Initialize Page
  initialize_page(pages);
});

// Push notification to the page
function pushNotification(text,css_class="") {
  $("<div class='notification "+css_class+"'>"+text+"</div>")
        .appendTo('.push-notifications-container')
        .delay(4000)
        .queue(function() {
            $(this).remove();
        });
  // Scroll to bottom of notifications box
  $('.push-notifications-container').scrollTop($('.push-notifications-container')[0].scrollHeight);
}

function initialize_page(pages) {
  var hash = location.hash;
  const ajaxContainer = $(".panel-container .window-container .content-wrapper .content");
  var default_hash = "#dashboard";

  // Initialize Page Content
  if ( $.trim(hash).length > 0  && page_exists(hash,pages))
    {
      var load_page = hash;
    }
  else
    {
      location.hash = default_hash;
      hash = location.hash;
    }

    setLoading();

    $(ajaxContainer).load(pages[hash],function(){
      $(ajaxContainer).removeClass('loading');
    });

  var button = $("a[href='"+hash+"']");
  $(button).addClass("active");
}

function page_exists(page,array) {
  var exists = 0;
  if ( page in array )
  {
    exists = 1;
  }
  return exists;
}

function setLoading() {
  const loader_svg = '<svg version="1.1" class="loader" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 29.643 29.643" style="enable-background:new 0 0 29.643 29.643;" xml:space="preserve"><g><path class="big" d="M18.621,12.397l-0.546-1.295c0,0,1.267-2.859,1.157-2.969l-1.678-1.639c-0.117-0.113-2.978,1.191-2.978,1.191l-1.32-0.533 c0,0-1.169-2.898-1.327-2.898h-2.37c-0.164,0-1.242,2.906-1.242,2.906L6.998,7.695c0,0-2.922-1.242-3.034-1.135L2.287,8.203 c-0.116,0.115,1.219,2.916,1.219,2.916l-0.544,1.295c0,0-2.962,1.139-2.962,1.295v2.322c0,0.16,2.969,1.217,2.969,1.217 l0.545,1.291c0,0-1.268,2.861-1.157,2.971l1.679,1.641c0.113,0.111,2.976-1.195,2.976-1.195l1.321,0.537 c0,0,1.166,2.896,1.326,2.896h2.37c0.163,0,1.244-2.906,1.244-2.906l1.32-0.535c0,0,2.918,1.242,3.031,1.135l1.678-1.643 c0.115-0.111-1.221-2.914-1.221-2.914l0.546-1.295c0,0,2.963-1.143,2.963-1.299v-2.32C21.591,13.453,18.621,12.397,18.621,12.397z M10.795,18.207c-1.905,0-3.459-1.52-3.459-3.387c0-1.865,1.554-3.385,3.459-3.385c1.908,0,3.459,1.52,3.459,3.385 C14.254,16.688,12.703,18.207,10.795,18.207z"></path><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>';
  const ajaxContainer = $(".panel-container .window-container .content-wrapper .content");

  $(ajaxContainer).addClass("loading");
  $(ajaxContainer).prepend(loader_svg);
}

$(document).on("click","a[href='#']",function(e){
  e.preventDefault();
});
