<?php

/* home.html.twig */
class __TwigTemplate_bdfd19af4c55cf13887aac3a87615182735f3bbf2c1793ecc7a25df56ee6b6c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'jquery_core' => array($this, 'block_jquery_core'),
            'bootstrap' => array($this, 'block_bootstrap'),
            'jquery_addons' => array($this, 'block_jquery_addons'),
            'css_addons' => array($this, 'block_css_addons'),
            'locale_calendar' => array($this, 'block_locale_calendar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"";
        // line 2
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::lang_code"));
        echo "\">
<head>
\t<!--Fix funzionamento scorm su IE9-->
\t<meta http-equiv=\"x-ua-compatible\" content=\"IE=9\" />
\t<!--END -->

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t<title>";
        // line 10
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::title"));
        echo "</title>
\t";
        // line 11
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "meta")));
        echo "
\t<link rel=\"shortcut icon\" href=\"";
        // line 12
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "images/favicon.png\" type=\"image/png\" />
\t<link rel=\"shortcut icon\" href=\"";
        // line 13
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "images/favicon.ico\" />
\t<!-- reset and font stylesheet -->
\t";
        // line 15
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::resetter"));
        echo "
\t<!-- common stylesheet -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "style/base.css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "style/lms-home.css\" />

    ";
        // line 20
        if (array_key_exists("custom_css_path", $context)) {
            // line 21
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["custom_css_path"] ?? null), "html", null, true);
            echo "\" />
    ";
        }
        // line 23
        echo "\t";
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::rtl"));
        echo "
\t<!-- specific stylesheet -->
\t";
        // line 25
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("YuiLib::load", array(0 => "base")));
        echo "
\t<!-- printer stylesheet-->
\t";
        // line 27
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::accessibility"));
        echo "
\t<!-- Page Head area -->
\t";
        // line 29
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "page_head")));
        echo "

\t<!-- JQuery, Bootstrap  -->
\t";
        // line 32
        $this->displayBlock('jquery_core', $context, $blocks);
        // line 35
        echo "
\t";
        // line 36
        $this->displayBlock('bootstrap', $context, $blocks);
        // line 39
        echo "
\t";
        // line 40
        $this->displayBlock('jquery_addons', $context, $blocks);
        // line 44
        echo "
\t";
        // line 45
        $this->displayBlock('css_addons', $context, $blocks);
        // line 49
        echo "    
    ";
        // line 50
        $this->displayBlock('locale_calendar', $context, $blocks);
        // line 54
        echo "
\t<!-- Restyling -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "static/main.min.css\">
\t<!--
    To use or edit the not minified css uncomment this portion of code
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "static/main.css\">
    -->
\t<script type=\"text/js\" src=\"";
        // line 61
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "static/main.js\"></script>
</head>
<body class=\"homepage js-router--homepage\">
";
        // line 64
        if ((($context["under_maintenence"] ?? null) == false)) {
            // line 65
            echo "<!-- content -->
<main class=\"homepage__content content-margin\">
\t<div class=\"homepage__row homepage__row--header\">
\t\t<a href=\"index.php\">
\t\t\t<img class=\"left_logo\" src=\"";
            // line 69
            echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
            echo "images/company_logo.png\" alt=\"Left logo\" />
\t\t</a>
\t\t<div class=\"pull-right\">
            ";
            // line 72
            if ((($context["lang_number"] ?? null) > 1)) {
                echo "        
\t\t\t<div class=\"select-language\">
\t\t\t\t<span class=\"hidden-xs\">";
                // line 74
                echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Lang::t", array(0 => "_CHANGELANG", 1 => "register")));
                echo ": </span>";
                echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::change_lang"));
                echo "
\t\t\t</div>
            ";
            }
            // line 77
            echo "\t\t\t<div class=\"hidden-xs\">
\t\t\t\t";
            // line 78
            echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::get_catalogue"));
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            // line 82
            echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "content")));
            echo "
</main>
<!-- footer -->
<footer class=\"homepage__footer\">
\t";
            // line 86
            echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "footer")));
            echo "
\t";
            // line 87
            echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::copyright"));
            echo "
</footer>
";
        }
        // line 90
        echo "<!-- def lang -->
";
        // line 91
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "def_lang")));
        echo "
<!-- scripts -->
";
        // line 93
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "scripts")));
        echo "
<!-- end scripts -->
";
        // line 95
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "debug")));
        echo "
";
        // line 96
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::analytics"));
        echo "
</body>
</html>";
    }

    // line 32
    public function block_jquery_core($context, array $blocks = array())
    {
        // line 33
        echo "\t\t";
        echo ($context["jqueryLib"] ?? null);
        echo "
\t";
    }

    // line 36
    public function block_bootstrap($context, array $blocks = array())
    {
        // line 37
        echo "\t\t";
        echo ($context["boostrap"] ?? null);
        echo "
\t";
    }

    // line 40
    public function block_jquery_addons($context, array $blocks = array())
    {
        // line 41
        echo "\t\t<!-- addons: js -->
\t\t";
        // line 42
        echo ($context["jsAddons"] ?? null);
        echo "
\t";
    }

    // line 45
    public function block_css_addons($context, array $blocks = array())
    {
        // line 46
        echo "\t\t<!-- addons: css -->
\t\t";
        // line 47
        echo ($context["cssAddons"] ?? null);
        echo "
\t";
    }

    // line 50
    public function block_locale_calendar($context, array $blocks = array())
    {
        // line 51
        echo "    <!-- locale data format -->        
    ";
        // line 52
        echo ($context["locale_calendar"] ?? null);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 52,  267 => 51,  264 => 50,  258 => 47,  255 => 46,  252 => 45,  246 => 42,  243 => 41,  240 => 40,  233 => 37,  230 => 36,  223 => 33,  220 => 32,  213 => 96,  209 => 95,  204 => 93,  199 => 91,  196 => 90,  190 => 87,  186 => 86,  179 => 82,  172 => 78,  169 => 77,  161 => 74,  156 => 72,  150 => 69,  144 => 65,  142 => 64,  136 => 61,  131 => 59,  125 => 56,  121 => 54,  119 => 50,  116 => 49,  114 => 45,  111 => 44,  109 => 40,  106 => 39,  104 => 36,  101 => 35,  99 => 32,  93 => 29,  88 => 27,  83 => 25,  77 => 23,  71 => 21,  69 => 20,  64 => 18,  60 => 17,  55 => 15,  50 => 13,  46 => 12,  42 => 11,  38 => 10,  27 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/var/www/html/forma/formalms/templates/standard/layout/home.html.twig");
    }
}
