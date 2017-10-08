<?php

/* /Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/script.htm */
class __TwigTemplate_2865c321517700ef1b2b45c46168f5e4223db48b02000f6b637a1fc7d9398429 extends Twig_Template
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
        echo "<!-- Main Font -->
<script src=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/webfontloader.min.js");
        echo "\"></script>
<script>
    WebFont.load({
        google: {
            families: ['Roboto:300,400,500,700:latin']
        }
    });
</script>


<!-- jQuery first, then Other JS. -->
<script src=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery-3.2.0.min.js");
        echo "\"></script>
<!-- Js effects for material design. + Tooltips -->
<script src=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/material.min.js");
        echo "\"></script>
<!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
<script src=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/theme-plugins.js");
        echo "\"></script>
<!-- Init functions -->
<script src=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/main.js");
        echo "\"></script>

<!-- Load more news AJAX script -->
<script src=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/ajax-pagination.js");
        echo "\"></script>

<!-- Select / Sorting script -->
<script src=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/selectize.min.js");
        echo "\"></script>

<!-- Lightbox popup script-->
<script src=\"";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.magnific-popup.min.js");
        echo "\"></script>

<script src=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/mediaelement-and-player.min.js");
        echo "\"></script>
<script src=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/mediaelement-playlist-plugin.min.js");
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/script.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  74 => 30,  69 => 28,  63 => 25,  57 => 22,  51 => 19,  46 => 17,  41 => 15,  36 => 13,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Main Font -->
<script src=\"{{'assets/js/webfontloader.min.js'|theme}}\"></script>
<script>
    WebFont.load({
        google: {
            families: ['Roboto:300,400,500,700:latin']
        }
    });
</script>


<!-- jQuery first, then Other JS. -->
<script src=\"{{'assets/js/jquery-3.2.0.min.js'|theme}}\"></script>
<!-- Js effects for material design. + Tooltips -->
<script src=\"{{'assets/js/material.min.js'|theme}}\"></script>
<!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
<script src=\"{{'assets/js/theme-plugins.js'|theme}}\"></script>
<!-- Init functions -->
<script src=\"{{'assets/js/main.js'|theme}}\"></script>

<!-- Load more news AJAX script -->
<script src=\"{{'assets/js/ajax-pagination.js'|theme}}\"></script>

<!-- Select / Sorting script -->
<script src=\"{{'assets/js/selectize.min.js'|theme}}\"></script>

<!-- Lightbox popup script-->
<script src=\"{{'assets/js/jquery.magnific-popup.min.js'|theme}}\"></script>

<script src=\"{{'assets/js/mediaelement-and-player.min.js'|theme}}\"></script>
<script src=\"{{'assets/js/mediaelement-playlist-plugin.min.js'|theme}}\"></script>", "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/script.htm", "");
    }
}
