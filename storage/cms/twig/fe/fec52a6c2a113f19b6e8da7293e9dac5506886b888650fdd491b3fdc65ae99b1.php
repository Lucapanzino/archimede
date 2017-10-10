<?php

/* /Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/fixed-sidebar/default.htm */
class __TwigTemplate_37e7f07bd554f67deff7bd0d4b7ad84000c2225198c2742ffe8cfa0ea5db9a65 extends Twig_Template
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
        echo "<!-- Fixed Sidebar Left -->

<div class=\"fixed-sidebar\">
\t<div class=\"fixed-sidebar-left sidebar--small\" id=\"sidebar-left\">
\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage", false);
        echo "\" class=\"logo\">
\t\t\t<img src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/logo.png");
        echo "\" alt=\"A\">
\t\t</a>

\t\t<div class=\"mCustomScrollbar\" data-mcs-theme=\"dark\">
\t\t\t<ul class=\"left-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"js-sidebar-open\">
\t\t\t\t\t\t<i class=\"fa fa-bars left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Menu\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-home left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Home\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("newsletter", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-newspaper-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"News letter\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-users left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"About Us\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("archimede-description", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-user left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Cosè Archimede\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("note-legali", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-gavel left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Note Legali\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("bacheca", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-commenting-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"bacheca\" aria-hidden=\"true\"></i>

\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("profilo", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-cogs left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Funzionalità profilo\" aria-hidden=\"true\"></i>
 \t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"fixed-sidebar-left sidebar--large\" id=\"sidebar-left-1\">
\t\t<a href=\"";
        // line 58
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage", false);
        echo "\" class=\"logo\">
\t\t\t<img src=\"";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/logo.png");
        echo "\" alt=\"Archimede\">
\t\t\t<h6 class=\"logo-title\">Archimede</h6>
\t\t</a>

\t\t<div class=\"mCustomScrollbar\" data-mcs-theme=\"dark\">
\t\t\t<ul class=\"left-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"js-sidebar-open\">
\t\t\t\t\t\t<i class=\"fa fa-times left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Chiudi Menu\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Chiudi Menu</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 72
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-home left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Home\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Home page</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 78
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("news-letter", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-newspaper-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"News Letter\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">News letters</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 84
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-users left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"About Us\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Chi siamo</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 90
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("archimede-description", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-user left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Cos'è Archimede\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Cos'è Archimede</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 96
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("note-legali", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-gavel left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Note Legali\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Note legali</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 102
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("bacheca", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-commenting-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Bacheca\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Bacheca</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 108
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("profilo", false);
        echo "\"> 
\t\t\t\t\t\t\t<i class=\"fa fa-cogs left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Funzionalità Profilo\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Profilo</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t  </ul>  
\t\t</div>
\t</div>
</div>

<!-- ... end Fixed Sidebar Left -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/fixed-sidebar/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 108,  170 => 102,  161 => 96,  152 => 90,  143 => 84,  134 => 78,  125 => 72,  109 => 59,  105 => 58,  92 => 48,  83 => 42,  75 => 37,  67 => 32,  59 => 27,  51 => 22,  43 => 17,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Fixed Sidebar Left -->

<div class=\"fixed-sidebar\">
\t<div class=\"fixed-sidebar-left sidebar--small\" id=\"sidebar-left\">
\t\t<a href=\"{{'homepage'|page(false)}}\" class=\"logo\">
\t\t\t<img src=\"{{'assets/img/logo.png'|theme}}\" alt=\"A\">
\t\t</a>

\t\t<div class=\"mCustomScrollbar\" data-mcs-theme=\"dark\">
\t\t\t<ul class=\"left-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"js-sidebar-open\">
\t\t\t\t\t\t<i class=\"fa fa-bars left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Menu\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'homepage'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-home left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Home\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'newsletter'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-newspaper-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"News letter\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'about'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-users left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"About Us\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'archimede-description'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-user left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Cosè Archimede\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'note-legali'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-gavel left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Note Legali\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'bacheca'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-commenting-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"bacheca\" aria-hidden=\"true\"></i>

\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'profilo'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-cogs left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Funzionalità profilo\" aria-hidden=\"true\"></i>
 \t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"fixed-sidebar-left sidebar--large\" id=\"sidebar-left-1\">
\t\t<a href=\"{{'homepage'|page(false)}}\" class=\"logo\">
\t\t\t<img src=\"{{'assets/img/logo.png'|theme}}\" alt=\"Archimede\">
\t\t\t<h6 class=\"logo-title\">Archimede</h6>
\t\t</a>

\t\t<div class=\"mCustomScrollbar\" data-mcs-theme=\"dark\">
\t\t\t<ul class=\"left-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"js-sidebar-open\">
\t\t\t\t\t\t<i class=\"fa fa-times left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Chiudi Menu\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Chiudi Menu</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'homepage'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-home left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Home\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Home page</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'news-letter'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-newspaper-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"News Letter\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">News letters</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'about'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-users left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"About Us\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Chi siamo</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'archimede-description'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-user left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Cos'è Archimede\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Cos'è Archimede</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'note-legali'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-gavel left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Note Legali\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Note legali</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'bacheca'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-commenting-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Bacheca\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Bacheca</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'profilo'|page(false)}}\"> 
\t\t\t\t\t\t\t<i class=\"fa fa-cogs left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Funzionalità Profilo\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Profilo</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t  </ul>  
\t\t</div>
\t</div>
</div>

<!-- ... end Fixed Sidebar Left -->", "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/fixed-sidebar/default.htm", "");
    }
}
