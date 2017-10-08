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
        echo "\t\t

\t\t<div class=\"more\"><i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i>
\t\t\t<ul class=\"more-dropdown\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Edit Post</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Delete Post</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Turn Off Notifications</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Select as Featured</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t</div>

\t<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
\t\tpariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
\t\tmollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
\t\taccusantium doloremque.
\t</p>

\t<div class=\"post-additional-info inline-items\">

\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t<span>8</span>
\t\t</a>

\t\t";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("friends-armonic/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "
\t\t<div class=\"names-people-likes\">
\t\t\t<a href=\"#\">Jenny</a>, <a href=\"#\">Robert</a> and
\t\t\t<br>6 more liked this
\t\t</div>


\t\t";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("comment-shared/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "
\t</div>

\t\t";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("comment-buttons/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 54
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
        return array (  95 => 54,  91 => 53,  86 => 50,  82 => 49,  73 => 42,  69 => 41,  33 => 7,  29 => 6,  24 => 4,  19 => 1,);
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
\t\t

\t\t<div class=\"more\"><i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i>
\t\t\t<ul class=\"more-dropdown\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Edit Post</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Delete Post</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Turn Off Notifications</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Select as Featured</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t</div>

\t<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
\t\tpariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
\t\tmollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
\t\taccusantium doloremque.
\t</p>

\t<div class=\"post-additional-info inline-items\">

\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t<span>8</span>
\t\t</a>

\t\t{% partial 'friends-armonic/default'%}

\t\t<div class=\"names-people-likes\">
\t\t\t<a href=\"#\">Jenny</a>, <a href=\"#\">Robert</a> and
\t\t\t<br>6 more liked this
\t\t</div>


\t\t{% partial 'comment-shared/default'%}

\t</div>

\t\t{% partial 'comment-buttons/default'%}
\t

</article>", "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/entry-post/default.htm", "");
    }
}
