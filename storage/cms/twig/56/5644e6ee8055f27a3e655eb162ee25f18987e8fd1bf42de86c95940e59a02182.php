<?php

/* C:\Users\Cody\Projects\tb/themes/emerald/layouts/default.htm */
class __TwigTemplate_8c06405a4d087a2be0a9fc2380ab962769f1fb7254dcbea831ff465851ac8fd9 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>TorrieBunton - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Torrie Bunton\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <script src=\"https://npmcdn.com/masonry-layout@4.1/dist/masonry.pkgd.min.js\"></script>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/emerald.png");
        echo "\" />
        ";
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 14
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/fonts/icons.css", 1 => "assets/css/theme.css"));
        // line 17
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        <div class=\"gallery-overlay\">
            <div class=\"gallery-modal\">
                <div class=\"modal-close\"></div>
            </div>
        </div>
        ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "        <div class=\"float-pusher\"></div>
        <main id=\"layout-content\" class=\"grid\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galleryImages"]) ? $context["galleryImages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 29
            echo "                <img class=\"grid-item\" src=\"../../storage/app/";
            echo twig_escape_filter($this->env, $context["url"], "html", null, true);
            echo "\"/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </main>
        ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("scripts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Cody\\Projects\\tb/themes/emerald/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  85 => 32,  82 => 31,  73 => 29,  69 => 28,  65 => 26,  61 => 25,  51 => 17,  48 => 14,  45 => 13,  41 => 12,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>TorrieBunton - {{ this.page.title }}</title>*/
/*         <meta name="description" content="{{ this.page.meta_description }}">*/
/*         <meta name="title" content="{{ this.page.meta_title }}">*/
/*         <meta name="author" content="Torrie Bunton">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="generator" content="OctoberCMS">*/
/*         <script src="https://npmcdn.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>*/
/*         <link rel="icon" type="image/png" href="{{ 'assets/images/emerald.png'|theme }}" />*/
/*         {% styles %}*/
/*         <link href="{{ [*/
/*             'assets/fonts/icons.css',*/
/*             'assets/css/theme.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/*     </head>*/
/*     <body>*/
/*         <div class="gallery-overlay">*/
/*             <div class="gallery-modal">*/
/*                 <div class="modal-close"></div>*/
/*             </div>*/
/*         </div>*/
/*         {% partial "nav" %}*/
/*         <div class="float-pusher"></div>*/
/*         <main id="layout-content" class="grid">*/
/*             {% for url in galleryImages %}*/
/*                 <img class="grid-item" src="../../storage/app/{{ url }}"/>*/
/*             {% endfor %}*/
/*         </main>*/
/*         {% partial "scripts" %}*/
/*     </body>*/
/* </html>*/
