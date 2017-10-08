<?php

/* /Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/author-vcard/default.htm */
class __TwigTemplate_b6a676535f1feee70f115376dabeb5b8c60a18ac2bc2f456876ff44253b144a5 extends Twig_Template
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
        echo "<div class=\"post__author author vcard inline-items\">
\t<img src=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/author-page.jpg");
        echo "\" alt=\"author\">

\t";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("author-date/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "
\t<div class=\"more\"><i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i>
\t\t<ul class=\"more-dropdown\">
\t\t\t<li>
\t\t\t\t<a href=\"#\">Edit Post</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\">Delete Post</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\">Turn Off Notifications</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\">Select as Featured</a>
\t\t\t</li>
\t\t</ul>
\t</div>

</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/author-vcard/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"post__author author vcard inline-items\">
\t<img src=\"{{'assets/img/author-page.jpg'|theme}}\" alt=\"author\">

\t{% partial 'author-date/default'%}

\t<div class=\"more\"><i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i>
\t\t<ul class=\"more-dropdown\">
\t\t\t<li>
\t\t\t\t<a href=\"#\">Edit Post</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\">Delete Post</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\">Turn Off Notifications</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\">Select as Featured</a>
\t\t\t</li>
\t\t</ul>
\t</div>

</div>", "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/author-vcard/default.htm", "");
    }
}
