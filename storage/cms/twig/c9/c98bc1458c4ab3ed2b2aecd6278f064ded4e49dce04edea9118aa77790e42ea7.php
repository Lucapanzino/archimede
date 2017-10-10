<?php

/* /Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/comment-buttons/default.htm */
class __TwigTemplate_7fca83c9285d747637614deaff5cb11421e44e08d33bf9614d4798133e551fe6 extends Twig_Template
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
        echo "<div class=\"control-block-button post-control-button\">

\t<a href=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("singolo-post", array("id" => 5));
        echo "\" class=\"btn btn-control featured-post\">
\t\t<i class=\"fa fa-eye\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"vedi post\" aria-hidden=\"true\"></i>
\t</a>

\t<a href=\"#\" class=\"btn btn-control\">
\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t</a>

\t<a href=\"#\" class=\"btn btn-control\">
\t\t<i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i>
\t</a>

\t<a href=\"#\" class=\"btn btn-control\">
\t\t<i class=\"fa fa-pencil\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"contribuisci\" aria-hidden=\"true\"></i> 
\t</a>

</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/comment-buttons/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"control-block-button post-control-button\">

\t<a href=\"{{'singolo-post'|page({id:5})}}\" class=\"btn btn-control featured-post\">
\t\t<i class=\"fa fa-eye\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"vedi post\" aria-hidden=\"true\"></i>
\t</a>

\t<a href=\"#\" class=\"btn btn-control\">
\t\t<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
\t</a>

\t<a href=\"#\" class=\"btn btn-control\">
\t\t<i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i>
\t</a>

\t<a href=\"#\" class=\"btn btn-control\">
\t\t<i class=\"fa fa-pencil\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"contribuisci\" aria-hidden=\"true\"></i> 
\t</a>

</div>", "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/comment-buttons/default.htm", "");
    }
}
