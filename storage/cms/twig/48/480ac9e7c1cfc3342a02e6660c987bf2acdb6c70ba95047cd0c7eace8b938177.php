<?php

/* /Applications/MAMP/htdocs/archimede/themes/archimede/partials/topHeader/default.htm */
class __TwigTemplate_bbfac38dcc283ba5bee3b3fe3b7b87ec975d1c56bbd5d8c095239e12d48880a6 extends Twig_Template
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
        echo "<!-- Top Header -->

<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t<div class=\"ui-block\">
\t\t\t\t<div class=\"top-header\">
\t\t\t\t\t<div class=\"top-header-thumb\">
\t\t\t\t\t\t<img src=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/top-header1.jpg");
        echo "\" alt=\"nature\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"profile-section\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-5 \">
\t\t\t\t\t\t\t\t<ul class=\"profile-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage", false);
        echo "\" class=\"active\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about", false);
        echo "\">Cos'è Archimede</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("newsletter", false);
        echo "\">News letter</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-2 col-md-5 offset-md-2\">
\t\t\t\t\t\t\t\t<ul class=\"profile-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("post", array("id" => 5));
        echo "\">Post</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("note-legali", false);
        echo "\">Note Legali</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"more\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"more-dropdown more-with-triangle\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("profilo", false);
        echo "\">Funzionalità profilo</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Altro</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"top-header-author\">
\t\t\t\t\t\t<a href=\"";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage", false);
        echo "\" class=\"author-thumb\">
\t\t\t\t\t\t\t<img src=\"";
        // line 54
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/author-main1.jpg");
        echo "\" alt=\"author\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"author-content\">
\t\t\t\t\t\t\t<a href=\"";
        // line 57
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage", false);
        echo "\" class=\"h4 author-name\">Archimede</a>
\t\t\t\t\t\t\t<div class=\"country\">Lorem Ipsum</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- ... end Top Header -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede/themes/archimede/partials/topHeader/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 57,  98 => 54,  94 => 53,  77 => 39,  67 => 32,  61 => 29,  51 => 22,  45 => 19,  39 => 16,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Top Header -->

<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t<div class=\"ui-block\">
\t\t\t\t<div class=\"top-header\">
\t\t\t\t\t<div class=\"top-header-thumb\">
\t\t\t\t\t\t<img src=\"{{'assets/img/top-header1.jpg'|theme}}\" alt=\"nature\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"profile-section\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-5 \">
\t\t\t\t\t\t\t\t<ul class=\"profile-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{'homepage'|page(false)}}\" class=\"active\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{'about'|page(false)}}\">Cos'è Archimede</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{'newsletter'|page(false)}}\">News letter</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-2 col-md-5 offset-md-2\">
\t\t\t\t\t\t\t\t<ul class=\"profile-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{'post'|page({id:5})}}\">Post</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{'note-legali'|page(false)}}\">Note Legali</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"more\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"more-dropdown more-with-triangle\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{'profilo'|page(false)}}\">Funzionalità profilo</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Altro</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"top-header-author\">
\t\t\t\t\t\t<a href=\"{{'homepage'|page(false)}}\" class=\"author-thumb\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/author-main1.jpg'|theme}}\" alt=\"author\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"author-content\">
\t\t\t\t\t\t\t<a href=\"{{'homepage'|page(false)}}\" class=\"h4 author-name\">Archimede</a>
\t\t\t\t\t\t\t<div class=\"country\">Lorem Ipsum</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- ... end Top Header -->", "/Applications/MAMP/htdocs/archimede/themes/archimede/partials/topHeader/default.htm", "");
    }
}
