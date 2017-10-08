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
\t\t<a href=\"02-ProfilePage.html\" class=\"logo\">
\t\t\t<img src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/logo.png");
        echo "\" alt=\"A\">
\t\t</a>

\t\t<div class=\"mCustomScrollbar\" data-mcs-theme=\"dark\">
\t\t\t<ul class=\"left-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"js-sidebar-open\">
\t\t\t\t\t\t<i class=\"fa fa-bars left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"homepage.html\">
\t\t\t\t\t\t<i class=\"fa fa-home left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"news-letter.html\">
\t\t\t\t\t\t<i class=\"fa fa-newspaper-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"about-us.html\">
\t\t\t\t\t\t<i class=\"fa fa-users left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"archimede.html\">
\t\t\t\t\t\t<i class=\"fa fa-user left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"note-legali.html\">
\t\t\t\t\t\t<i class=\"fa fa-gavel left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"post.html\">
\t\t\t\t\t\t<i class=\"fa fa-commenting-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>

\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"profilo.html\">
\t\t\t\t\t\t<i class=\"fa fa-cogs left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
 \t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"fixed-sidebar-left sidebar--large\" id=\"sidebar-left-1\">
\t\t<a href=\"02-ProfilePage.html\" class=\"logo\">
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
\t\t\t\t\t\t<i class=\"fa fa-times left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Chiudi Menu</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"homepage.html\">
\t\t\t\t\t\t<i class=\"fa fa-home left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Home page</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"news-letter.html\">
\t\t\t\t\t\t<i class=\"fa fa-newspaper-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">News letters</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"about-us.html\">
\t\t\t\t\t\t<i class=\"fa fa-users left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Chi siamo</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"archimede.html\">
\t\t\t\t\t\t<i class=\"fa fa-user left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Cos'è Archimede</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"note-legali.html\">
\t\t\t\t\t\t<i class=\"fa fa-gavel left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Note legali</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"post.html\">
\t\t\t\t\t\t<i class=\"fa fa-commenting-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Post</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"profilo.html\"> 
\t\t\t\t\t\t\t<i class=\"fa fa-cogs left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
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
        return array (  82 => 59,  26 => 6,  19 => 1,);
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
\t\t<a href=\"02-ProfilePage.html\" class=\"logo\">
\t\t\t<img src=\"{{'assets/img/logo.png'|theme}}\" alt=\"A\">
\t\t</a>

\t\t<div class=\"mCustomScrollbar\" data-mcs-theme=\"dark\">
\t\t\t<ul class=\"left-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"js-sidebar-open\">
\t\t\t\t\t\t<i class=\"fa fa-bars left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"homepage.html\">
\t\t\t\t\t\t<i class=\"fa fa-home left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"news-letter.html\">
\t\t\t\t\t\t<i class=\"fa fa-newspaper-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"about-us.html\">
\t\t\t\t\t\t<i class=\"fa fa-users left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"archimede.html\">
\t\t\t\t\t\t<i class=\"fa fa-user left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"note-legali.html\">
\t\t\t\t\t\t<i class=\"fa fa-gavel left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"post.html\">
\t\t\t\t\t\t<i class=\"fa fa-commenting-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>

\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"profilo.html\">
\t\t\t\t\t\t<i class=\"fa fa-cogs left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
 \t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"fixed-sidebar-left sidebar--large\" id=\"sidebar-left-1\">
\t\t<a href=\"02-ProfilePage.html\" class=\"logo\">
\t\t\t<img src=\"{{'assets/img/logo.png'|theme}}\" alt=\"Archimede\">
\t\t\t<h6 class=\"logo-title\">Archimede</h6>
\t\t</a>

\t\t<div class=\"mCustomScrollbar\" data-mcs-theme=\"dark\">
\t\t\t<ul class=\"left-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"js-sidebar-open\">
\t\t\t\t\t\t<i class=\"fa fa-times left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Chiudi Menu</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"homepage.html\">
\t\t\t\t\t\t<i class=\"fa fa-home left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Home page</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"news-letter.html\">
\t\t\t\t\t\t<i class=\"fa fa-newspaper-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">News letters</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"about-us.html\">
\t\t\t\t\t\t<i class=\"fa fa-users left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Chi siamo</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"archimede.html\">
\t\t\t\t\t\t<i class=\"fa fa-user left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Cos'è Archimede</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"note-legali.html\">
\t\t\t\t\t\t<i class=\"fa fa-gavel left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Note legali</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"post.html\">
\t\t\t\t\t\t<i class=\"fa fa-commenting-o left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"left-menu-title\">Post</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"profilo.html\"> 
\t\t\t\t\t\t\t<i class=\"fa fa-cogs left-menu-icon\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"TITLE\" aria-hidden=\"true\"></i>
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
