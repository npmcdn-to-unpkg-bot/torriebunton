<?php

/* C:\Users\Cody\Projects\tb/themes/emerald/partials/scripts.htm */
class __TwigTemplate_5598ba5722cb048e0dc3f92d00bc400964658e4ab43b7015f0afad906fd92461 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Scripts -->
 <script src=\"";
        // line 2
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/javascript/app.js"));
        // line 5
        echo "\"></script>
<script>
\tvar elem = document.querySelector('.grid');
\tvar msnry = new Masonry( elem, {
\t  // options go here
\t  itemSelector: '.grid-item',
\t  // use element for option
\t  columnWidth: '.grid-sizer',
\t  percentPosition: true
\t});
\t// element argument can be a selector string for an individual element
\tvar msnry = new Masonry( '.grid', {
\t  // options go here
\t});


\tvar gridItems = \$('.grid-item');
\tvar fadeTime = 300;
\tvar longFadeTime = 600;
\t\$(document).ready(function(){
\t\tinitGallery();
\t});
\tfunction galleryImageEventListener() {
\t    for (var i=0; i<gridItems.length; i++) {
\t\t\t(function(gridItem){
\t\t\t\tvar imageSrc = \$(gridItem).attr('src');
\t\t\t\t\$(gridItem).click(function(){
\t\t\t\t\t\$('.gallery-modal').append(\$('<img>').attr('src', imageSrc));
\t\t\t\t\tvar imageWidth, imageHeight;
\t\t\t\t\t\$('.gallery-modal img').on('load', function(){
\t\t\t\t\t\timageWidth = \$(this).outerWidth(true);
\t\t\t\t\t\timageHeight = \$(this).outerHeight(true);
\t\t\t\t\t\t\$('.gallery-modal').css('width', imageWidth).css('height', imageHeight);
\t\t\t\t\t});
\t\t\t\t\t\$('.gallery-overlay').fadeIn(fadeTime);
\t\t\t\t});
\t\t\t})(gridItems[i]);
\t    }
\t}
\tfunction modalCloseEventListener() {
\t\t\$('.modal-close, .gallery-overlay').click(function(){
\t\t\t\$('.gallery-overlay').fadeOut(fadeTime, function(){
\t\t\t\t\$('.gallery-modal img').remove();
\t\t\t\t\$('.gallery-modal').css('width', 0).css('height', 0);\t\t\t\t\t
\t\t\t});
\t\t});
\t\t\$('.gallery-modal').click(function(event) {
\t\t\tevent.stopPropagation();
\t\t});
\t}
\tfunction mouseHoverEventListener() {
\t\t\$('.gallery-modal').on('mouseenter', function(){
\t\t\t\$('.modal-close').fadeIn(fadeTime);
\t\t}); \t\t
\t\t\$('.gallery-modal').on('mouseleave', function(){
\t\t\t\$('.modal-close').fadeOut(longFadeTime);
\t\t});
\t}
\tfunction initGallery() {
\t\tgalleryImageEventListener();
\t\tmodalCloseEventListener();
\t\tmouseHoverEventListener();
\t}
</script>
";
        // line 69
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Cody\\Projects\\tb/themes/emerald/partials/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 69,  24 => 5,  22 => 2,  19 => 1,);
    }
}
/* <!-- Scripts -->*/
/*  <script src="{{ [*/
/*     'assets/javascript/jquery.js',*/
/*     'assets/javascript/app.js'*/
/* ]|theme }}"></script>*/
/* <script>*/
/* 	var elem = document.querySelector('.grid');*/
/* 	var msnry = new Masonry( elem, {*/
/* 	  // options go here*/
/* 	  itemSelector: '.grid-item',*/
/* 	  // use element for option*/
/* 	  columnWidth: '.grid-sizer',*/
/* 	  percentPosition: true*/
/* 	});*/
/* 	// element argument can be a selector string for an individual element*/
/* 	var msnry = new Masonry( '.grid', {*/
/* 	  // options go here*/
/* 	});*/
/* */
/* */
/* 	var gridItems = $('.grid-item');*/
/* 	var fadeTime = 300;*/
/* 	var longFadeTime = 600;*/
/* 	$(document).ready(function(){*/
/* 		initGallery();*/
/* 	});*/
/* 	function galleryImageEventListener() {*/
/* 	    for (var i=0; i<gridItems.length; i++) {*/
/* 			(function(gridItem){*/
/* 				var imageSrc = $(gridItem).attr('src');*/
/* 				$(gridItem).click(function(){*/
/* 					$('.gallery-modal').append($('<img>').attr('src', imageSrc));*/
/* 					var imageWidth, imageHeight;*/
/* 					$('.gallery-modal img').on('load', function(){*/
/* 						imageWidth = $(this).outerWidth(true);*/
/* 						imageHeight = $(this).outerHeight(true);*/
/* 						$('.gallery-modal').css('width', imageWidth).css('height', imageHeight);*/
/* 					});*/
/* 					$('.gallery-overlay').fadeIn(fadeTime);*/
/* 				});*/
/* 			})(gridItems[i]);*/
/* 	    }*/
/* 	}*/
/* 	function modalCloseEventListener() {*/
/* 		$('.modal-close, .gallery-overlay').click(function(){*/
/* 			$('.gallery-overlay').fadeOut(fadeTime, function(){*/
/* 				$('.gallery-modal img').remove();*/
/* 				$('.gallery-modal').css('width', 0).css('height', 0);					*/
/* 			});*/
/* 		});*/
/* 		$('.gallery-modal').click(function(event) {*/
/* 			event.stopPropagation();*/
/* 		});*/
/* 	}*/
/* 	function mouseHoverEventListener() {*/
/* 		$('.gallery-modal').on('mouseenter', function(){*/
/* 			$('.modal-close').fadeIn(fadeTime);*/
/* 		}); 		*/
/* 		$('.gallery-modal').on('mouseleave', function(){*/
/* 			$('.modal-close').fadeOut(longFadeTime);*/
/* 		});*/
/* 	}*/
/* 	function initGallery() {*/
/* 		galleryImageEventListener();*/
/* 		modalCloseEventListener();*/
/* 		mouseHoverEventListener();*/
/* 	}*/
/* </script>*/
/* {% framework extras %}*/
