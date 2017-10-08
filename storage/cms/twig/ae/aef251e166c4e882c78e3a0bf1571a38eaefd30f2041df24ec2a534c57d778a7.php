<?php

/* /Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/style.htm */
class __TwigTemplate_0fffc3f295c5355328488a71c2759f017b3c6094f2275e4e31dde04dd921903e extends Twig_Template
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
        echo "<link
    href=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/Bootstrap/dist/css/bootstrap-reboot.css", 1 => "assets/Bootstrap/dist/css/bootstrap.css", 2 => "assets/Bootstrap/dist/css/bootstrap-grid.css", 3 => "assets/css/theme-styles.css", 4 => "assets/css/blocks.css", 5 => "assets/css/bootstrap-select.css", 6 => "assets/css/fonts.css", 7 => "assets/css/jquery.mCustomScrollbar.min.css", 8 => "assets/css/mediaelement-playlist-plugin.min.css", 9 => "assets/css/mediaelementplayer.css", 10 => "assets/css/magnific-popup.css", 11 => "~/modules/system/assets/css/framework.extras.css"));
        // line 15
        echo "\"
    rel=\"stylesheet\">
    
    

\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"Bootstrap/dist/css/bootstrap-reboot.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"Bootstrap/dist/css/bootstrap.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"Bootstrap/dist/css/bootstrap-grid.css\">

\t<!-- Theme Styles CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/theme-styles.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/blocks.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/fonts.css\">

\t<!-- Styles for plugins -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.mCustomScrollbar.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/mediaelement-playlist-plugin.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/mediaelementplayer.css\">

\t<!-- Lightbox popup script-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/magnific-popup.css\">";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/style.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 15,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link
    href=\"{{ [
        'assets/Bootstrap/dist/css/bootstrap-reboot.css',
        'assets/Bootstrap/dist/css/bootstrap.css',
        'assets/Bootstrap/dist/css/bootstrap-grid.css',
        'assets/css/theme-styles.css',
        'assets/css/blocks.css',
        'assets/css/bootstrap-select.css',
        'assets/css/fonts.css',
        'assets/css/jquery.mCustomScrollbar.min.css',
        'assets/css/mediaelement-playlist-plugin.min.css',
        'assets/css/mediaelementplayer.css',
        'assets/css/magnific-popup.css',
        '~/modules/system/assets/css/framework.extras.css'
        ]|theme }}\"
    rel=\"stylesheet\">
    
    

\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"Bootstrap/dist/css/bootstrap-reboot.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"Bootstrap/dist/css/bootstrap.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"Bootstrap/dist/css/bootstrap-grid.css\">

\t<!-- Theme Styles CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/theme-styles.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/blocks.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/fonts.css\">

\t<!-- Styles for plugins -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.mCustomScrollbar.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/mediaelement-playlist-plugin.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/mediaelementplayer.css\">

\t<!-- Lightbox popup script-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/magnific-popup.css\">", "/Applications/MAMP/htdocs/archimede_copy/themes/archimede/partials/style.htm", "");
    }
}
