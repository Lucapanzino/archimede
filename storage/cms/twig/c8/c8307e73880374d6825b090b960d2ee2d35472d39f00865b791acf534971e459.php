<?php

/* /Applications/MAMP/htdocs/archimede/themes/archimede/partials/right-content/default.htm */
class __TwigTemplate_2edb14d4159116cfda3fc749802b6b47147b882c9794a5bab1a05b5cb28b2741 extends Twig_Template
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
        echo "<!-- Right Sidebar -->

<div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">Last Photos</h6>
\t\t</div>
\t\t<div class=\"ui-block-content\">
\t\t\t<ul class=\"widget w-last-photo js-zoom-gallery\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"";
            // line 13
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/last-photo10-large.jpg");
            echo "\" alt=\"photo\">
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t
\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">Blog Posts</h6>
\t\t</div>
\t\t<ul class=\"widget w-blog-posts\">
\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            echo "\t\t\t<li>
\t\t\t\t<article class=\"hentry post\">

\t\t\t\t\t<a href=\"#\" class=\"h4\">My Perfect Vacations in South America and Europe</a>

\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et.</p>

\t\t\t\t\t<div class=\"post__date\">
\t\t\t\t\t\t<time class=\"published\" datetime=\"2017-03-24T18:18\">
\t\t\t\t\t\t\t7 hours ago
\t\t\t\t\t\t</time>
\t\t\t\t\t</div>

\t\t\t\t</article>
\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t</ul>
\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">Friends (86)</h6>
\t\t</div>
\t\t<div class=\"ui-block-content\">
\t\t\t<ul class=\"widget w-faved-page js-zoom-gallery\">
\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 54
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"";
            // line 56
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/avatar17-sm.jpg");
            echo "\" alt=\"author\">
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t<li class=\"all-users\">
\t\t\t\t\t<a href=\"#\">+74</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">Favourite Pages</h6>
\t\t</div>

\t\t<ul class=\"widget w-friend-pages-added notification-list friend-requests\">
\t\t\t";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 74
            echo "\t\t\t\t<li class=\"inline-items\">
\t\t\t\t\t<div class=\"author-thumb\">
\t\t\t\t\t\t<img src=\"";
            // line 76
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/avatar17-sm.jpg");
            echo "\" alt=\"author\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"notification-event\">
\t\t\t\t\t\t<a href=\"#\" class=\"h6 notification-friend\">The Marina Bar</a>
\t\t\t\t\t\t<span class=\"chat-message-item\">Restaurant / Bar</span>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"notification-icon\" data-toggle=\"tooltip\" data-placement=\"top\"   data-original-title=\"ADD TO YOUR FAVS\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</span>

\t\t\t\t</li>
 \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
\t\t</ul>

\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">James's Poll</h6>
\t\t</div>
\t\t<div class=\"ui-block-content\">
\t\t\t<ul class=\"widget w-pool\">
\t\t\t\t<li>
\t\t\t\t\t<p>If you had to choose, which actor do you prefer to be the next Darkman? </p>
\t\t\t\t</li>
\t\t\t\t";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 105
            echo "\t\t\t\t<li>
\t\t\t\t\t<div class=\"skills-item\">
\t\t\t\t\t\t<div class=\"skills-item-info\">
\t\t\t\t\t\t\t<span class=\"skills-item-title\">

\t\t\t\t\t\t\t\t<span class=\"radio\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\">
\t\t\t\t\t\t\t\t\tThomas Bale
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"skills-item-count\"><span class=\"count-animate\" data-speed=\"1000\" data-refresh-interval=\"50\" data-to=\"62\" data-from=\"0\"></span><span class=\"units\">62%</span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"skills-item-meter\">
\t\t\t\t\t\t\t<span class=\"skills-item-meter-active bg-primary\" style=\"width: 62%\"></span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"counter-friends\">12 friends voted for this</div>

\t\t\t\t\t\t<ul class=\"friends-harmonic\">
\t\t\t\t\t\t\t";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 127
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 129
                echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/friend-harmonic1.jpg");
                echo "\" alt=\"friend\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"all-users\">+3</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "\t\t\t</ul>
\t\t\t<a href=\"#\" class=\"btn btn-md-2 btn-border-think custom-color c-grey full-width\">Vote Now!</a>
\t\t</div>
\t</div>
</div>

<!-- ... end Right Sidebar -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede/themes/archimede/partials/right-content/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 141,  218 => 133,  208 => 129,  204 => 127,  200 => 126,  177 => 105,  173 => 104,  157 => 90,  137 => 76,  133 => 74,  129 => 73,  114 => 60,  104 => 56,  100 => 54,  96 => 53,  85 => 44,  64 => 28,  60 => 27,  48 => 17,  38 => 13,  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Right Sidebar -->

<div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">Last Photos</h6>
\t\t</div>
\t\t<div class=\"ui-block-content\">
\t\t\t<ul class=\"widget w-last-photo js-zoom-gallery\">
\t\t\t\t{% for i in 0..8%}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"{{'assets/img/last-photo10-large.jpg'|theme}}\" alt=\"photo\">
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t
\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">Blog Posts</h6>
\t\t</div>
\t\t<ul class=\"widget w-blog-posts\">
\t\t\t{% for i in 0..1 %}
\t\t\t<li>
\t\t\t\t<article class=\"hentry post\">

\t\t\t\t\t<a href=\"#\" class=\"h4\">My Perfect Vacations in South America and Europe</a>

\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et.</p>

\t\t\t\t\t<div class=\"post__date\">
\t\t\t\t\t\t<time class=\"published\" datetime=\"2017-03-24T18:18\">
\t\t\t\t\t\t\t7 hours ago
\t\t\t\t\t\t</time>
\t\t\t\t\t</div>

\t\t\t\t</article>
\t\t\t</li>
\t\t\t{% endfor %}
\t\t</ul>
\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">Friends (86)</h6>
\t\t</div>
\t\t<div class=\"ui-block-content\">
\t\t\t<ul class=\"widget w-faved-page js-zoom-gallery\">
\t\t\t\t{% for i in 0..14 %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"{{'assets/img/avatar17-sm.jpg'|theme}}\" alt=\"author\">
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t\t<li class=\"all-users\">
\t\t\t\t\t<a href=\"#\">+74</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">Favourite Pages</h6>
\t\t</div>

\t\t<ul class=\"widget w-friend-pages-added notification-list friend-requests\">
\t\t\t{% for i in 0..5 %}
\t\t\t\t<li class=\"inline-items\">
\t\t\t\t\t<div class=\"author-thumb\">
\t\t\t\t\t\t<img src=\"{{'assets/img/avatar17-sm.jpg'|theme}}\" alt=\"author\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"notification-event\">
\t\t\t\t\t\t<a href=\"#\" class=\"h6 notification-friend\">The Marina Bar</a>
\t\t\t\t\t\t<span class=\"chat-message-item\">Restaurant / Bar</span>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"notification-icon\" data-toggle=\"tooltip\" data-placement=\"top\"   data-original-title=\"ADD TO YOUR FAVS\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</span>

\t\t\t\t</li>
 \t\t\t{% endfor %}

\t\t</ul>

\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">James's Poll</h6>
\t\t</div>
\t\t<div class=\"ui-block-content\">
\t\t\t<ul class=\"widget w-pool\">
\t\t\t\t<li>
\t\t\t\t\t<p>If you had to choose, which actor do you prefer to be the next Darkman? </p>
\t\t\t\t</li>
\t\t\t\t{% for i in 0..2 %}
\t\t\t\t<li>
\t\t\t\t\t<div class=\"skills-item\">
\t\t\t\t\t\t<div class=\"skills-item-info\">
\t\t\t\t\t\t\t<span class=\"skills-item-title\">

\t\t\t\t\t\t\t\t<span class=\"radio\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\">
\t\t\t\t\t\t\t\t\tThomas Bale
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"skills-item-count\"><span class=\"count-animate\" data-speed=\"1000\" data-refresh-interval=\"50\" data-to=\"62\" data-from=\"0\"></span><span class=\"units\">62%</span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"skills-item-meter\">
\t\t\t\t\t\t\t<span class=\"skills-item-meter-active bg-primary\" style=\"width: 62%\"></span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"counter-friends\">12 friends voted for this</div>

\t\t\t\t\t\t<ul class=\"friends-harmonic\">
\t\t\t\t\t\t\t{% for i in 0..11 %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/friend-harmonic1.jpg'|theme}}\" alt=\"friend\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"all-users\">+3</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t\t<a href=\"#\" class=\"btn btn-md-2 btn-border-think custom-color c-grey full-width\">Vote Now!</a>
\t\t</div>
\t</div>
</div>

<!-- ... end Right Sidebar -->", "/Applications/MAMP/htdocs/archimede/themes/archimede/partials/right-content/default.htm", "");
    }
}
