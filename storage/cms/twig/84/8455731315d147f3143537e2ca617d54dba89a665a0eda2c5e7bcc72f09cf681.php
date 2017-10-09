<?php

/* /Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/entry-post/default.htm */
class __TwigTemplate_68d7efbb5cc9701a742104a2f71d8691682330c0c916f236a20c606ef362c65b extends Twig_Template
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
        echo "<article class=\"hentry post\">

\t<div class=\"post__author author vcard inline-items\">
\t\t<img src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/author-page.jpg");
        echo "\" alt=\"author\">
\t\t
\t\t";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("author-date/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "
\t</div>

\t<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
\t\tpariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
\t\tmollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
\t\taccusantium doloremque.
\t</p>

\t<div class=\"post-additional-info inline-items\">
 
\t\t
 \t\t
\t\t";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("like-reactions/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "\t\t
\t\t";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("friends-armonic/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "\t\t
\t\t";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("comment-shared/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "\t\t
\t\t
\t</div>

\t\t";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("comment-buttons/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "\t
</article>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/entry-post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  72 => 29,  66 => 25,  62 => 24,  59 => 23,  55 => 22,  52 => 21,  48 => 20,  33 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article class=\"hentry post\">

\t<div class=\"post__author author vcard inline-items\">
\t\t<img src=\"{{'assets/img/author-page.jpg'|theme}}\" alt=\"author\">
\t\t
\t\t{% partial 'author-date/default'%}

\t</div>

\t<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
\t\tpariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
\t\tmollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
\t\taccusantium doloremque.
\t</p>

\t<div class=\"post-additional-info inline-items\">
 
\t\t
 \t\t
\t\t{% partial 'like-reactions/default'%}
\t\t
\t\t{% partial 'friends-armonic/default'%}
\t\t
\t\t{% partial 'comment-shared/default'%}
\t\t
\t\t
\t</div>

\t\t{% partial 'comment-buttons/default'%}
\t
</article>", "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/entry-post/default.htm", "");
    }
}
