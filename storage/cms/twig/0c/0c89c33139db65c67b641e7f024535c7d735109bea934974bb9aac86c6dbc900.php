<?php

/* /Applications/MAMP/htdocs/archimede/themes/archimede/partials/header.htm */
class __TwigTemplate_39884251fb197a9ea0778aa969de296045d04096f7ae3a4db9eecbea98f05cc5 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("fixed-sidebar/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("fixed-sidebar-responsive/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("page-header/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("page-header-responsive/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede/themes/archimede/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  37 => 6,  33 => 5,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'fixed-sidebar/default'%}

{% partial 'fixed-sidebar-responsive/default'%}

{% partial 'page-header/default'%}

{% partial 'page-header-responsive/default'%}", "/Applications/MAMP/htdocs/archimede/themes/archimede/partials/header.htm", "");
    }
}
