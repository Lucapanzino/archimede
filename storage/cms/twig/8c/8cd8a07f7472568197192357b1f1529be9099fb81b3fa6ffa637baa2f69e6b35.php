<?php

/* /Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/comment-shared/default.htm */
class __TwigTemplate_0a8a8741bb4a53a9e0c1d2c2d20c12bc17cef9f9ee336eb7ab42baa4b9f5a696 extends Twig_Template
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
        echo "<ul class=\"friends-harmonic\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "\t<li>
\t\t<a href=\"#\">
\t\t\t<img src=\"";
            // line 5
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/friend-harmonic1.jpg");
            echo "\" alt=\"friend\">
\t\t</a>
\t</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/comment-shared/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"friends-harmonic\">
\t{% for i in 0..6 %}
\t<li>
\t\t<a href=\"#\">
\t\t\t<img src=\"{{'assets/img/friend-harmonic1.jpg'|theme}}\" alt=\"friend\">
\t\t</a>
\t</li>
{% endfor %}
</ul>", "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/comment-shared/default.htm", "");
    }
}
