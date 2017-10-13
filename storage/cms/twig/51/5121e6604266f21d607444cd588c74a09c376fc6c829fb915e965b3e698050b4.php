<?php

/* /Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/page-header-responsive/default.htm */
class __TwigTemplate_7e11e4d04a4c36826bc86a2dd577895da61d689c93ed4419316e3d2515349967 extends Twig_Template
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
\t\t<form class=\"search-bar w-search notification-list friend-requests\">
\t\t\t<div class=\"form-group with-button\">
\t\t\t\t<input class=\"form-control js-user-search\" placeholder=\"Search here people or pages...\" type=\"text\">
\t\t\t\t<button>
\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t</form> 
\t</div>

</header>

<!-- ... end Responsive Header -->

<div class=\"header-spacer\"></div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/page-header-responsive/default.htm";
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
\t\t<form class=\"search-bar w-search notification-list friend-requests\">
\t\t\t<div class=\"form-group with-button\">
\t\t\t\t<input class=\"form-control js-user-search\" placeholder=\"Search here people or pages...\" type=\"text\">
\t\t\t\t<button>
\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t</form> 
\t</div>

</header>

<!-- ... end Responsive Header -->

<div class=\"header-spacer\"></div>", "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/page-header-responsive/default.htm", "");
    }
}
