jQuery(document).ready(function($){
  
  var rechercheEnCours=false;
  
  $('section#slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });
  
  console.log(ajaxurl);
  
  $(".list-category-annonces a").on("click",function(e){
    e.preventDefault();
    var term_id = $(this).attr("data-id");
    var content= $(".annonces");
    $(".list-category-annonces a").removeClass("current");
    $(this).addClass("current");
    content.empty().append("Recherche en cours...");
    jQuery.post(
        ajaxurl,
        {
            'action'  : 'filtre-category',
            'term_id' : term_id,
            'paged'   : 1
        },
        function(response)
        {
          content.html(response);
        }
    );
    
  });

        $("body").on("click",".buttonMore", function(e){
          e.preventDefault();
          var data_id=$(this).attr("data-id");
          var paged=$(this).attr("data-paged");
          var content= $(".annonces");
          $(this).remove();
          content.append("<span class='ajaxtext'>Recherche en cours</span>");
          jQuery.post(
              ajaxurl,
              {
                  'action'  : 'filtre-category',
                  'term_id' : data_id,
                  'paged'   : paged
              },
              function(response)
              {
                $('.ajaxtext').remove();
                content.append(response);
              }
          );

        });
  
  $("#searchAjaxInput").on("keyup",function(e){
    if(rechercheEnCours==false)
    {
        rechercheEnCours=true;
        var search_input= $("#searchAjaxInput").val();
        var content_result= $('#searchResult');
        console.log(search_input);
        jQuery.post(
            ajaxurl,
            {
              'action' : 'autocompletion',
              'search_input' : search_input
            },
            function(response)
            {
             content_result.show();
             content_result.html(response);
             rechercheEnCours=false;
            }
        );
    }
  });
  
  $("#searchAjaxInput").on("blur",function(e){
  setTimeout(
   function(){
    $('#searchResult').hide();
     },
    1000
  );
});
  
});













