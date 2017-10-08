<?php

/* /Applications/MAMP/htdocs/archimede/themes/archimede/layouts/default.htm */
class __TwigTemplate_dcca0e2787b2b499f59a28a04c96978f7100799af3f0055a11b849bdcb60a13a extends Twig_Template
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
        echo "description = \"Archimede Layout\"
 ==
<html>

    <head>
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("style"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </head>

    <body>
        ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "
             ";
        // line 12
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 13
        echo "            
        ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("script"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede/themes/archimede/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  47 => 14,  44 => 13,  42 => 12,  39 => 11,  35 => 10,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("description = \"Archimede Layout\"
 ==
<html>

    <head>
        {% partial 'style' %}
    </head>

    <body>
        {% partial 'header' %}

             {% page %}
            
        {% partial 'script' %}
    </body>

</html>", "/Applications/MAMP/htdocs/archimede/themes/archimede/layouts/default.htm", "");
    }
}
