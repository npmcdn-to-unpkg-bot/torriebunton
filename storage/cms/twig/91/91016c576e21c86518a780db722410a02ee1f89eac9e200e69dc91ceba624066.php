<?php

/* C:\Users\Cody\Projects\tb/themes/emerald/partials/footer.htm */
class __TwigTemplate_001a06fb0a8a8ce474a8e47c6552cb9a448f6359b589af27ceb383861153ad1f extends Twig_Template
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
        echo "<footer id=\"layout-footer\">
    <div id=\"footer\">
\t    <div class=\"container\">
\t        <hr />
\t        <p class=\"muted credit\">&copy; 2015 - ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Torrie Bunton</p>
\t    </div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Cody\\Projects\\tb/themes/emerald/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
/* <footer id="layout-footer">*/
/*     <div id="footer">*/
/* 	    <div class="container">*/
/* 	        <hr />*/
/* 	        <p class="muted credit">&copy; 2015 - {{ "now"|date("Y") }} Torrie Bunton</p>*/
/* 	    </div>*/
/* 	</div>*/
/* </footer>*/
