<?php

/* /Applications/MAMP/htdocs/archimede/themes/archimede/partials/page-header-responsive/default.htm */
class __TwigTemplate_4e9edd9c1adec54721f256510f26a2146f7b7ee889f73e9597a007ec42654130 extends Twig_Template
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
        echo "<!-- Responsive Header -->

<header class=\"header header-responsive\" id=\"site-header-responsive\">

\t<div class=\"header-content-wrapper\">
\t\t<ul class=\"nav nav-tabs mobile-app-tabs\" role=\"tablist\">
\t\t\t <li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#search\" role=\"tab\">
\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>

</header>

<!-- ... end Responsive Header -->

<div class=\"header-spacer\"></div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede/themes/archimede/partials/page-header-responsive/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Responsive Header -->

<header class=\"header header-responsive\" id=\"site-header-responsive\">

\t<div class=\"header-content-wrapper\">
\t\t<ul class=\"nav nav-tabs mobile-app-tabs\" role=\"tablist\">
\t\t\t <li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#search\" role=\"tab\">
\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>

</header>

<!-- ... end Responsive Header -->

<div class=\"header-spacer\"></div>", "/Applications/MAMP/htdocs/archimede/themes/archimede/partials/page-header-responsive/default.htm", "");
    }
}
