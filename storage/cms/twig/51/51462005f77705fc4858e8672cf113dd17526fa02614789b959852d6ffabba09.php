<?php

/* /Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/left-content/default.htm */
class __TwigTemplate_52bb34571b4e8ebde9f15408034b85c80e38902263c9709a1cb06a62e5451fa5 extends Twig_Template
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
        echo "<!-- Left Sidebar -->

<div class=\"col-xl-3 pull-xl-6 col-lg-6 pull-lg-0 col-md-6 col-sm-12 col-xs-12\">
\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">Profile Intro</h6>
\t\t</div>
\t\t<div class=\"ui-block-content\">
\t\t\t<ul class=\"widget w-personal-info item-block\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "\t\t\t\t<li>
\t\t\t\t\t<span class=\"title\">About Me:</span>
\t\t\t\t\t<span class=\"text\">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56.</span>
\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t</ul>

\t\t\t<div class=\"widget w-socials\">
\t\t\t\t<h6 class=\"title\">Other Social Networks:</h6>
\t\t\t\t<a href=\"#\" class=\"social-item bg-facebook\">
\t\t\t\t\t<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
\t\t\t\t\tFacebook
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"social-item bg-twitter\">
\t\t\t\t\t<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
\t\t\t\t\tTwitter
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"social-item bg-dribbble\">
\t\t\t\t\t<i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>
\t\t\t\t\tDribbble
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">James’s Badges</h6>
\t\t</div>
\t\t<div class=\"ui-block-content\">

\t\t\t<ul class=\"widget w-badges\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"24-CommunityBadges.html\">
\t\t\t\t\t\t<img src=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/badge1.png");
        echo "\" alt=\"author\">
\t\t\t\t\t\t<div class=\"label-avatar bg-primary\">2</div>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"24-CommunityBadges.html\">
\t\t\t\t\t\t<img src=\"";
            // line 52
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/badge4.png");
            echo "\" alt=\"author\">
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t
\t\t\t</ul>

\t\t</div>
\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">My Spotify Playlist</h6>
\t\t</div>

\t\t<ol class=\"widget w-playlist\">
\t\t\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 69
            echo "\t\t\t<li class=\"js-open-popup\" data-popup-target=\".playlist-popup\">
\t\t\t\t<div class=\"playlist-thumb\">
\t\t\t\t\t<img src=\"img/playlist6.jpg\" alt=\"thumb-composition\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<a href=\"#\" class=\"play-icon\">
\t\t\t\t\t\t<svg class=\"olymp-music-play-icon-big\"><use xlink:href=\"icons/icons-music.svg#olymp-music-play-icon-big\"></use></svg>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"composition\">
\t\t\t\t\t<a href=\"#\" class=\"composition-name\">The Past Starts Slow...</a>
\t\t\t\t\t<a href=\"#\" class=\"composition-author\">System of a Revenge</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"composition-time\">
\t\t\t\t\t<time class=\"published\" datetime=\"2017-03-24T18:18\">3:22</time>
\t\t\t\t\t<div class=\"more\"><i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<ul class=\"more-dropdown\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Add Song to Player</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Add Playlist to Player</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</li>
 \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t\t</ol>
\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">Twitter Feed</h6>
\t\t</div>

\t\t<ul class=\"widget w-twitter\">
\t\t\t";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 109
            echo "\t\t\t<li class=\"twitter-item\">
\t\t\t\t<div class=\"author-folder\">
\t\t\t\t\t<img src=\"img/twitter-avatar1.png\" alt=\"avatar\">
\t\t\t\t\t<div class=\"author\">
\t\t\t\t\t\t<a href=\"#\" class=\"author-name\">Space Cowboy</a>
\t\t\t\t\t\t<a href=\"#\" class=\"group\">@james_spiegelOK</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<p>Tomorrow with the agency we will run 5 km for charity. Come and give us your support! <a href=\"#\" class=\"link-post\">#Daydream5K</a></p>
\t\t\t\t<span class=\"post__date\">
\t\t\t\t\t<time class=\"published\" datetime=\"2017-03-24T18:18\">
\t\t\t\t\t\t2 hours ago
\t\t\t\t\t</time>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "\t\t</ul>
\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">Last Videos</h6>
\t\t</div>
\t\t<div class=\"ui-block-content\">
\t\t\t<ul class=\"widget w-last-video\">
\t\t\t\t";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 135
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://vimeo.com/ondemand/viewfromabluemoon4k/147865858\" class=\"play-video play-video--small\">
\t\t\t\t\t\t<i class=\"fa fa-play\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<img src=\"";
            // line 139
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/video5.jpg");
            echo "\" alt=\"video\">
\t\t\t\t\t<div class=\"video-content\">
\t\t\t\t\t\t<div class=\"title\">System of a Revenge - Hypnotize...</div>
\t\t\t\t\t\t<time class=\"published\" datetime=\"2017-03-24T18:18\">3:25</time>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>

<!-- ... end Left Sidebar -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/left-content/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 147,  210 => 139,  204 => 135,  200 => 134,  189 => 125,  168 => 109,  164 => 108,  153 => 99,  118 => 69,  114 => 68,  100 => 56,  90 => 52,  86 => 50,  82 => 49,  75 => 45,  44 => 16,  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Left Sidebar -->

<div class=\"col-xl-3 pull-xl-6 col-lg-6 pull-lg-0 col-md-6 col-sm-12 col-xs-12\">
\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">Profile Intro</h6>
\t\t</div>
\t\t<div class=\"ui-block-content\">
\t\t\t<ul class=\"widget w-personal-info item-block\">
\t\t\t\t{% for i in 0..2 %}
\t\t\t\t<li>
\t\t\t\t\t<span class=\"title\">About Me:</span>
\t\t\t\t\t<span class=\"text\">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56.</span>
\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>

\t\t\t<div class=\"widget w-socials\">
\t\t\t\t<h6 class=\"title\">Other Social Networks:</h6>
\t\t\t\t<a href=\"#\" class=\"social-item bg-facebook\">
\t\t\t\t\t<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
\t\t\t\t\tFacebook
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"social-item bg-twitter\">
\t\t\t\t\t<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
\t\t\t\t\tTwitter
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"social-item bg-dribbble\">
\t\t\t\t\t<i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>
\t\t\t\t\tDribbble
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">James’s Badges</h6>
\t\t</div>
\t\t<div class=\"ui-block-content\">

\t\t\t<ul class=\"widget w-badges\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"24-CommunityBadges.html\">
\t\t\t\t\t\t<img src=\"{{'assets/img/badge1.png'|theme}}\" alt=\"author\">
\t\t\t\t\t\t<div class=\"label-avatar bg-primary\">2</div>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% for i in 0..10 %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"24-CommunityBadges.html\">
\t\t\t\t\t\t<img src=\"{{'assets/img/badge4.png'|theme}}\" alt=\"author\">
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t\t
\t\t\t</ul>

\t\t</div>
\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">My Spotify Playlist</h6>
\t\t</div>

\t\t<ol class=\"widget w-playlist\">
\t\t\t{% for i in 0..4 %}
\t\t\t<li class=\"js-open-popup\" data-popup-target=\".playlist-popup\">
\t\t\t\t<div class=\"playlist-thumb\">
\t\t\t\t\t<img src=\"img/playlist6.jpg\" alt=\"thumb-composition\">
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t<a href=\"#\" class=\"play-icon\">
\t\t\t\t\t\t<svg class=\"olymp-music-play-icon-big\"><use xlink:href=\"icons/icons-music.svg#olymp-music-play-icon-big\"></use></svg>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"composition\">
\t\t\t\t\t<a href=\"#\" class=\"composition-name\">The Past Starts Slow...</a>
\t\t\t\t\t<a href=\"#\" class=\"composition-author\">System of a Revenge</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"composition-time\">
\t\t\t\t\t<time class=\"published\" datetime=\"2017-03-24T18:18\">3:22</time>
\t\t\t\t\t<div class=\"more\"><i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<ul class=\"more-dropdown\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Add Song to Player</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Add Playlist to Player</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</li>
 \t\t\t{% endfor %}
\t\t</ol>
\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">Twitter Feed</h6>
\t\t</div>

\t\t<ul class=\"widget w-twitter\">
\t\t\t{% for i in 0..2 %}
\t\t\t<li class=\"twitter-item\">
\t\t\t\t<div class=\"author-folder\">
\t\t\t\t\t<img src=\"img/twitter-avatar1.png\" alt=\"avatar\">
\t\t\t\t\t<div class=\"author\">
\t\t\t\t\t\t<a href=\"#\" class=\"author-name\">Space Cowboy</a>
\t\t\t\t\t\t<a href=\"#\" class=\"group\">@james_spiegelOK</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<p>Tomorrow with the agency we will run 5 km for charity. Come and give us your support! <a href=\"#\" class=\"link-post\">#Daydream5K</a></p>
\t\t\t\t<span class=\"post__date\">
\t\t\t\t\t<time class=\"published\" datetime=\"2017-03-24T18:18\">
\t\t\t\t\t\t2 hours ago
\t\t\t\t\t</time>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{% endfor %}
\t\t</ul>
\t</div>

\t<div class=\"ui-block\">
\t\t<div class=\"ui-block-title\">
\t\t\t<h6 class=\"title\">Last Videos</h6>
\t\t</div>
\t\t<div class=\"ui-block-content\">
\t\t\t<ul class=\"widget w-last-video\">
\t\t\t\t{% for i in 0..1 %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://vimeo.com/ondemand/viewfromabluemoon4k/147865858\" class=\"play-video play-video--small\">
\t\t\t\t\t\t<i class=\"fa fa-play\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<img src=\"{{'assets/img/video5.jpg'|theme}}\" alt=\"video\">
\t\t\t\t\t<div class=\"video-content\">
\t\t\t\t\t\t<div class=\"title\">System of a Revenge - Hypnotize...</div>
\t\t\t\t\t\t<time class=\"published\" datetime=\"2017-03-24T18:18\">3:25</time>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t</li>
\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t</div>
</div>

<!-- ... end Left Sidebar -->", "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/left-content/default.htm", "");
    }
}
