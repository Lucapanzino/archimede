<?php

/* /Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/fixed-sidebar-responsive/default.htm */
class __TwigTemplate_f59992d2ba9082efa29e08c791a75c6b579df4f4ecbfca929097217e45c2baab extends Twig_Template
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
        echo "<!-- Fixed Sidebar Left Mobile-->

<div class=\"fixed-sidebar fixed-sidebar-responsive\">

\t<div class=\"fixed-sidebar-left sidebar--small\" id=\"sidebar-left-responsive\">
\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage", false);
        echo "\" class=\"logo js-sidebar-open\">
\t\t\t<img src=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/logo.png");
        echo "\" alt=\"A\">
\t\t</a>

\t</div>

\t<div class=\"fixed-sidebar-left sidebar--large\" id=\"sidebar-left-1-responsive\">
\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage", false);
        echo "\" class=\"logo\">
\t\t\t<img src=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/logo.png");
        echo "\" alt=\"A\">
\t\t\t<h6 class=\"logo-title\">Archimede</h6>
\t\t</a>

\t\t<div class=\"mCustomScrollbar\" data-mcs-theme=\"dark\">

\t\t 

\t\t\t<div class=\"ui-block-title ui-block-title-small\">
\t\t\t\t<h6 class=\"title\">MAIN SECTIONS</h6>
\t\t\t</div>

\t\t\t<ul class=\"left-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"js-sidebar-open\">
\t\t\t\t\t<i class=\"fa fa-times left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Chiudi Menu\" aria-hidden=\"true\"></i>
 \t\t\t\t\t<span class=\"left-menu-title\">Chiudi Menu</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-home left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Home\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Home</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("newsletter", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-newspaper-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"News Letter\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">News letter</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about", false);
        echo "l\">
\t\t\t\t\t\t<i class=\"fa fa-users left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"About Us\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Chi siamo</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("archimede-description", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-user left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Cosè Archimede\" aria-hidden=\"true\"></i>
 \t\t\t\t\t\t<span class=\"left-menu-title\">Cos'è Archimede</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("note-legali", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-cogs left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Note Legali\" aria-hidden=\"true\"></i>
 \t\t\t\t\t\t<span class=\"left-menu-title\">Note Legali</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 65
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("bacheca", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-commenting-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"bacheca\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Bacheca</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 71
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("profilo", false);
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-cogs left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Funzionalità profilo\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Profilo</span>
 \t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
  </div>
\t</div>
</div>

<!-- ... end Fixed Sidebar Left Mobile-->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/fixed-sidebar-responsive/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 71,  112 => 65,  103 => 59,  93 => 52,  84 => 46,  75 => 40,  66 => 34,  43 => 14,  39 => 13,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Fixed Sidebar Left Mobile-->

<div class=\"fixed-sidebar fixed-sidebar-responsive\">

\t<div class=\"fixed-sidebar-left sidebar--small\" id=\"sidebar-left-responsive\">
\t\t<a href=\"{{'homepage'|page(false)}}\" class=\"logo js-sidebar-open\">
\t\t\t<img src=\"{{'assets/img/logo.png'|theme}}\" alt=\"A\">
\t\t</a>

\t</div>

\t<div class=\"fixed-sidebar-left sidebar--large\" id=\"sidebar-left-1-responsive\">
\t\t<a href=\"{{'homepage'|page(false)}}\" class=\"logo\">
\t\t\t<img src=\"{{'assets/img/logo.png'|theme}}\" alt=\"A\">
\t\t\t<h6 class=\"logo-title\">Archimede</h6>
\t\t</a>

\t\t<div class=\"mCustomScrollbar\" data-mcs-theme=\"dark\">

\t\t 

\t\t\t<div class=\"ui-block-title ui-block-title-small\">
\t\t\t\t<h6 class=\"title\">MAIN SECTIONS</h6>
\t\t\t</div>

\t\t\t<ul class=\"left-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"js-sidebar-open\">
\t\t\t\t\t<i class=\"fa fa-times left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Chiudi Menu\" aria-hidden=\"true\"></i>
 \t\t\t\t\t<span class=\"left-menu-title\">Chiudi Menu</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'homepage'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-home left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Home\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Home</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'newsletter'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-newspaper-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"News Letter\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">News letter</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'about'|page(false)}}l\">
\t\t\t\t\t\t<i class=\"fa fa-users left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"About Us\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Chi siamo</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'archimede-description'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-user left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Cosè Archimede\" aria-hidden=\"true\"></i>
 \t\t\t\t\t\t<span class=\"left-menu-title\">Cos'è Archimede</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'note-legali'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-cogs left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Note Legali\" aria-hidden=\"true\"></i>
 \t\t\t\t\t\t<span class=\"left-menu-title\">Note Legali</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'bacheca'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-commenting-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"bacheca\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Bacheca</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{'profilo'|page(false)}}\">
\t\t\t\t\t\t<i class=\"fa fa-cogs left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"Funzionalità profilo\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Profilo</span>
 \t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
  </div>
\t</div>
</div>

<!-- ... end Fixed Sidebar Left Mobile-->", "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/fixed-sidebar-responsive/default.htm", "");
    }
}
