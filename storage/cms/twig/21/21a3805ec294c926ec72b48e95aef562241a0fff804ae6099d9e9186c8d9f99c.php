<?php

/* /Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/page-header/default.htm */
class __TwigTemplate_fe192f9a6128cf011e4b65a964278a3d898af6b69c0faa0790370d1a1e17b995 extends Twig_Template
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
        echo "<!-- Header -->

<header class=\"header\" id=\"site-header\">

\t<div class=\"page-title\">
\t\t<h6>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h6>
\t</div>

\t<div class=\"header-content-wrapper\">
\t\t<form class=\"search-bar w-search notification-list friend-requests\">
\t\t\t<div class=\"form-group with-button\">
\t\t\t\t<input class=\"form-control js-user-search\" placeholder=\"Search here people or pages...\" type=\"text\" maxlength=\"250\">
\t\t\t\t<button>
\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t</form> 


\t</div>

</header>

<!-- ... end Header -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/page-header/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Header -->

<header class=\"header\" id=\"site-header\">

\t<div class=\"page-title\">
\t\t<h6>{{ this.page.title }}</h6>
\t</div>

\t<div class=\"header-content-wrapper\">
\t\t<form class=\"search-bar w-search notification-list friend-requests\">
\t\t\t<div class=\"form-group with-button\">
\t\t\t\t<input class=\"form-control js-user-search\" placeholder=\"Search here people or pages...\" type=\"text\" maxlength=\"250\">
\t\t\t\t<button>
\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t</form> 


\t</div>

</header>

<!-- ... end Header -->", "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/page-header/default.htm", "");
    }
}
