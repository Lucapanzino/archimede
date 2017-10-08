<?php

/* /Applications/MAMP/htdocs/archimede/themes/archimede/pages/homepage.htm */
class __TwigTemplate_cd980aeedb58045b880fabbf4227e91786d2e537e989488e44f4454c5f0ad4c4 extends Twig_Template
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

\t\t\t\t\t\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>8</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"reply\">Reply</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("author-vcard/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "
\t\t\t\t\t\t\t<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugiten, sed quia
\t\t\t\t\t\t\t\tconsequuntur magni dolores eos qui ratione voluptatem sequi en lod nesciunt. Neque porro
\t\t\t\t\t\t\t\tquisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit en lorem ipsum der.
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>5</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"reply\">Reply</a>

\t\t\t\t\t\t\t<ul class=\"children\">
\t\t\t\t\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 46
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
            // line 47
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("author-vcard/default"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 48
            echo "
\t\t\t\t\t\t\t\t\t<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>2</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"reply\">Reply</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</li>



\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        // line 65
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("author-vcard/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 66
        echo "
\t\t\t\t\t\t\t<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

\t\t\t\t\t\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>7</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"reply\">Reply</a>

\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<a href=\"#\" class=\"more-comments\">View more comments <span>+</span></a>
\t\t\t\t\t<form class=\"comment-form inline-items\">

\t\t\t\t\t\t<div class=\"post__author author vcard inline-items\">
\t\t\t\t\t\t\t<img src=\"";
        // line 82
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

\t\t\t\t<div class=\"ui-block\">
\t\t\t\t\t<article class=\"hentry post has-post-thumbnail shared-photo\">

\t\t\t\t\t\t";
        // line 100
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("author-vcard/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 101
        echo "
\t\t\t\t\t\t<p>Hi! Everyone should check out these amazing photographs that my friend shot the past week. Here’s one of them...leave a kind comment!</p>

\t\t\t\t\t\t<div class=\"post-thumb\">
\t\t\t\t\t\t\t<img src=\"";
        // line 105
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/post-photo6.jpg");
        echo "\" alt=\"photo\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"children single-children\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
        // line 110
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("author-vcard/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 111
        echo "
\t\t\t\t\t\t\t\t<p>Here’s the first photo of our incredible photoshoot from yesterday. If you like it please say so and tel me what you wanna see next!</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"post-additional-info inline-items\">

\t\t\t\t\t\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>15</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t";
        // line 123
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("friends-armonic/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 124
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
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-share\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<span>16</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"control-block-button post-control-button\">

\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-control\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-control\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-control\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-share\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</article>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<a id=\"load-more-button\" href=\"#\" class=\"btn btn-control btn-more\" data-load-link=\"items-to-load.html\" data-container=\"newsfeed-items-grid\"><i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i></a>
\t\t</div>

\t\t<!-- ... end Main Content -->
\t\t
\t\t<!-- left Content -->
\t\t
\t\t";
        // line 171
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("left-content/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 172
        echo "\t\t
\t\t<!-- ... end Right Content -->

\t\t<!-- left Content -->
\t\t
\t\t";
        // line 177
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("right-content/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 178
        echo "\t\t
\t\t<!-- ... end Right Content -->

\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede/themes/archimede/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 178,  266 => 177,  259 => 172,  255 => 171,  206 => 124,  202 => 123,  188 => 111,  184 => 110,  176 => 105,  170 => 101,  166 => 100,  145 => 82,  127 => 66,  123 => 65,  114 => 58,  99 => 48,  95 => 47,  92 => 46,  88 => 45,  73 => 32,  69 => 31,  58 => 22,  54 => 21,  49 => 18,  45 => 17,  39 => 13,  35 => 12,  23 => 2,  19 => 1,);
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

\t\t\t\t\t\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>8</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"reply\">Reply</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t{% partial 'author-vcard/default'%}

\t\t\t\t\t\t\t<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugiten, sed quia
\t\t\t\t\t\t\t\tconsequuntur magni dolores eos qui ratione voluptatem sequi en lod nesciunt. Neque porro
\t\t\t\t\t\t\t\tquisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit en lorem ipsum der.
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>5</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"reply\">Reply</a>

\t\t\t\t\t\t\t<ul class=\"children\">
\t\t\t\t\t\t\t\t{% for i in 0..2 %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{% partial 'author-vcard/default'%}

\t\t\t\t\t\t\t\t\t<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>2</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"reply\">Reply</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</li>



\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t{% partial 'author-vcard/default'%}

\t\t\t\t\t\t\t<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

\t\t\t\t\t\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>7</span>
\t\t\t\t\t\t\t</a>
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

\t\t\t\t<div class=\"ui-block\">
\t\t\t\t\t<article class=\"hentry post has-post-thumbnail shared-photo\">

\t\t\t\t\t\t{% partial 'author-vcard/default'%}

\t\t\t\t\t\t<p>Hi! Everyone should check out these amazing photographs that my friend shot the past week. Here’s one of them...leave a kind comment!</p>

\t\t\t\t\t\t<div class=\"post-thumb\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/post-photo6.jpg'|theme}}\" alt=\"photo\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"children single-children\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{% partial 'author-vcard/default'%}

\t\t\t\t\t\t\t\t<p>Here’s the first photo of our incredible photoshoot from yesterday. If you like it please say so and tel me what you wanna see next!</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"post-additional-info inline-items\">

\t\t\t\t\t\t\t<a href=\"#\" class=\"post-add-icon inline-items\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span>15</span>
\t\t\t\t\t\t\t</a>

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
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-share\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<span>16</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"control-block-button post-control-button\">

\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-control\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-control\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-control\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-share\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</article>
\t\t\t\t</div>

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
</div>", "/Applications/MAMP/htdocs/archimede/themes/archimede/pages/homepage.htm", "");
    }
}
