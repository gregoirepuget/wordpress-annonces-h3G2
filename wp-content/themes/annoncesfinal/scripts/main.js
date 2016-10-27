jQuery(document).ready(function($){
  
  $('section#slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });
  
  
  $(".list-category-annonces a").on("click", function(e){
        e.preventDefault();
        var term_id=$(this).attr("data-id"); // exemple de récupération de contenu
        var ajax_section =$(".annonces"); // zone ou renvoyer le contenu de l'AJAX
        ajax_section.empty();
        jQuery.post(
            ajaxurl, // url du fichier admin-ajax.php,
            {
                'action': 'ajax-annonceCategory', // nom de l'action à créer
                'term_id': term_id // exemple de variable à envoyer.
            },
            function(response){
              ajax_section.append(response);
            }
        );
    });
  
});
