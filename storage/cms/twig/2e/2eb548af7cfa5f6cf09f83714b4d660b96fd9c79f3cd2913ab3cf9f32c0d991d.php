<?php

/* /Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/author-date/default.htm */
class __TwigTemplate_f1f3799342109887f3cd35b79e023a63ccc6cde79862acc21b9306def0e9ec07 extends Twig_Template
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
        echo "<div class=\"author-date\">
\t<a class=\"h6 post__author-name fn\" href=\"{'profilo'page(false)}\">James Spiegel</a>
\t<div class=\"post__date\">
\t\t<time class=\"published\" datetime=\"2017-03-24T18:18\">
\t\t\t19 hours ago
\t\t</time>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/author-date/default.htm";
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
        return new Twig_Source("<div class=\"author-date\">
\t<a class=\"h6 post__author-name fn\" href=\"{'profilo'page(false)}\">James Spiegel</a>
\t<div class=\"post__date\">
\t\t<time class=\"published\" datetime=\"2017-03-24T18:18\">
\t\t\t19 hours ago
\t\t</time>
\t</div>
</div>", "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/author-date/default.htm", "");
    }
}
