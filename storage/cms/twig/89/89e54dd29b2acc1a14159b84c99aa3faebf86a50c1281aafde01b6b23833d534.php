<?php

/* /Applications/MAMP/htdocs/archimede_copy/themes/archimede/pages/homepage.htm */
class __TwigTemplate_c365cf1f1e86ee123a9897d29278049cd226eb0058d2ea1b7929f4ea49fc12b3 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->partialFunction("top-header/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<div class=\"container\">
\t<div class=\"row\">

\t\t<!-- Main Content -->

\t\t<div class=\"col-xl-6 push-xl-3 col-lg-12 push-lg-0 col-md-12 col-sm-12 col-xs-12\">
\t\t\t<div id=\"newsfeed-items-grid\">

\t\t\t\t<div class=\"ui-block\">
\t\t\t\t\t";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("entry-post/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "\t\t\t\t</div>
 

\t\t\t\t<div class=\"ui-block\">
\t\t\t\t\t";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("entry-post/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "
\t\t\t\t\t<ul class=\"comments-list\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("author-vcard/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "\t\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

\t\t\t\t\t\t\t<a href=\"#\" class=\"reply\">Reply</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("author-vcard/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "
\t\t\t\t\t\t\t<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
 
\t\t\t\t\t\t\t<a href=\"#\" class=\"reply\">Reply</a>

\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<a href=\"#\" class=\"more-comments\">View more comments <span>+</span></a>
\t\t\t\t\t<form class=\"comment-form inline-items\">

\t\t\t\t\t\t<div class=\"post__author author vcard inline-items\">
\t\t\t\t\t\t\t<img src=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/author-page.jpg");
        echo "\" alt=\"author\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group with-icon-right \">
\t\t\t\t\t\t\t<textarea class=\"form-control\" placeholder=\"\"  ></textarea>
\t\t\t\t\t\t\t<div class=\"add-options-message\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"options-message\" data-toggle=\"modal\" data-target=\"#update-header-photo\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-camera\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"material-input\"></span></div>

\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<!-- <div class=\"ui-block\">
\t\t\t\t\t<article class=\"hentry post has-post-thumbnail shared-photo\">

\t\t\t\t\t\t";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("author-vcard/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "
\t\t\t\t\t\t<p>Hi! Everyone should check out these amazing photographs that my friend shot the past week. Here’s one of them...leave a kind comment!</p>

\t\t\t\t\t\t<div class=\"post-thumb\">
\t\t\t\t\t\t\t<img src=\"";
        // line 63
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/post-photo6.jpg");
        echo "\" alt=\"photo\">
\t\t\t\t\t\t</div>
 

\t\t\t\t\t\t<div class=\"post-additional-info inline-items\">
 

\t\t\t\t\t\t\t";
        // line 70
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("friends-armonic/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 71
        echo "\t\t\t\t\t\t\t<div class=\"names-people-likes\">
\t\t\t\t\t\t\t\t<a href=\"#\">Diana</a>, <a href=\"#\">Nicholas</a> and
\t\t\t\t\t\t\t\t<br>13 more liked this
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"comments-shared\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comment\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<span>0</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"contribuisci\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"control-block-button post-control-button\">
 
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-control\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-control\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-share\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</article>
\t\t\t\t</div> -->

\t\t\t</div>

\t\t\t<a id=\"load-more-button\" href=\"#\" class=\"btn btn-control btn-more\" data-load-link=\"items-to-load.html\" data-container=\"newsfeed-items-grid\"><i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i></a>
\t\t</div>

\t\t<!-- ... end Main Content -->
\t\t
\t\t<!-- left Content -->
\t\t
\t\t";
        // line 113
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("left-content/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 114
        echo "\t\t
\t\t<!-- ... end Right Content -->

\t\t<!-- left Content -->
\t\t
\t\t";
        // line 119
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("right-content/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 120
        echo "\t\t
\t\t<!-- ... end Right Content -->

\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 120,  183 => 119,  176 => 114,  172 => 113,  128 => 71,  124 => 70,  114 => 63,  108 => 59,  104 => 58,  83 => 40,  69 => 28,  65 => 27,  58 => 22,  54 => 21,  49 => 18,  45 => 17,  39 => 13,  35 => 12,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'top-header/default'%}

<div class=\"container\">
\t<div class=\"row\">

\t\t<!-- Main Content -->

\t\t<div class=\"col-xl-6 push-xl-3 col-lg-12 push-lg-0 col-md-12 col-sm-12 col-xs-12\">
\t\t\t<div id=\"newsfeed-items-grid\">

\t\t\t\t<div class=\"ui-block\">
\t\t\t\t\t{% partial 'entry-post/default'%}
\t\t\t\t</div>
 

\t\t\t\t<div class=\"ui-block\">
\t\t\t\t\t{% partial 'entry-post/default'%}

\t\t\t\t\t<ul class=\"comments-list\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t{% partial 'author-vcard/default'%}
\t\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

\t\t\t\t\t\t\t<a href=\"#\" class=\"reply\">Reply</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t{% partial 'author-vcard/default'%}

\t\t\t\t\t\t\t<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
 
\t\t\t\t\t\t\t<a href=\"#\" class=\"reply\">Reply</a>

\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<a href=\"#\" class=\"more-comments\">View more comments <span>+</span></a>
\t\t\t\t\t<form class=\"comment-form inline-items\">

\t\t\t\t\t\t<div class=\"post__author author vcard inline-items\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/author-page.jpg'|theme}}\" alt=\"author\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group with-icon-right \">
\t\t\t\t\t\t\t<textarea class=\"form-control\" placeholder=\"\"  ></textarea>
\t\t\t\t\t\t\t<div class=\"add-options-message\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"options-message\" data-toggle=\"modal\" data-target=\"#update-header-photo\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-camera\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"material-input\"></span></div>

\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<!-- <div class=\"ui-block\">
\t\t\t\t\t<article class=\"hentry post has-post-thumbnail shared-photo\">

\t\t\t\t\t\t{% partial 'author-vcard/default'%}

\t\t\t\t\t\t<p>Hi! Everyone should check out these amazing photographs that my friend shot the past week. Here’s one of them...leave a kind comment!</p>

\t\t\t\t\t\t<div class=\"post-thumb\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/post-photo6.jpg'|theme}}\" alt=\"photo\">
\t\t\t\t\t\t</div>
 

\t\t\t\t\t\t<div class=\"post-additional-info inline-items\">
 

\t\t\t\t\t\t\t{% partial 'friends-armonic/default'%}
\t\t\t\t\t\t\t<div class=\"names-people-likes\">
\t\t\t\t\t\t\t\t<a href=\"#\">Diana</a>, <a href=\"#\">Nicholas</a> and
\t\t\t\t\t\t\t\t<br>13 more liked this
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"comments-shared\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comment\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<span>0</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"contribuisci\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"control-block-button post-control-button\">
 
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-control\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-control\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-share\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</article>
\t\t\t\t</div> -->

\t\t\t</div>

\t\t\t<a id=\"load-more-button\" href=\"#\" class=\"btn btn-control btn-more\" data-load-link=\"items-to-load.html\" data-container=\"newsfeed-items-grid\"><i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i></a>
\t\t</div>

\t\t<!-- ... end Main Content -->
\t\t
\t\t<!-- left Content -->
\t\t
\t\t{% partial 'left-content/default'%}
\t\t
\t\t<!-- ... end Right Content -->

\t\t<!-- left Content -->
\t\t
\t\t{% partial 'right-content/default'%}
\t\t
\t\t<!-- ... end Right Content -->

\t</div>
</div>", "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/pages/homepage.htm", "");
    }
}
