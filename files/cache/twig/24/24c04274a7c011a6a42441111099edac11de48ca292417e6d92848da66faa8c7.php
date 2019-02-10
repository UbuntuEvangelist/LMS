<?php

/* lms.html.twig */
class __TwigTemplate_1854148e3b41f53897a82b8371d42ab42a876f808166b57703012dcf32b4dae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lms.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "style/base-old-treeview.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "style/lms.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "style/lms-to-review.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "style/lms-menu.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["layout_path"] ?? null), "html", null, true);
        echo "style/table-responsive.css\"/>

";
    }

    // line 12
    public function block_javascript($context, array $blocks = array())
    {
        // line 13
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Get::rel_path", array(0 => "base")));
        echo "/lib/js_utils.js\"></script>

    <script>
        \$(function () {
            \$('div.menu-area a').bind('click', function (event) {
                event.preventDefault();
                id = \$(this).attr('rel');
                \$('ul.float-left').hide();
                \$('ul#' + id).show();
                \$('div.menu-area').removeClass('menu-selected');
                \$(this).parent().addClass('menu-selected');
            });

            \$(\"#accordion\").accordion({
                collapsible: true,
                active: false,
                icons: false
            });

            // feedback
            \$('#container-feedback').click(function () {
                event.preventDefault();
                \$(this).fadeOut(500);
            });

        });
    </script>


";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "
    ";
        // line 47
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "meta")));
        echo "
    ";
        // line 48
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::meta"));
        echo "

    ";
        // line 50
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::rtl"));
        echo "
    ";
        // line 51
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::accessibility"));
        echo "
    <!-- blind nav -->
    ";
        // line 53
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "blind_navigation")));
        echo "

    <!-- container -->
    <div id=\"container\">
        <!-- header -->


        <!-- menu_over -->
        ";
        // line 61
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "menu_over")));
        echo "
        <!-- feedback -->
        ";
        // line 63
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "feedback")));
        echo "


        <!-- content -->
        <div id=\"lms_main_container\" class=\"row\">

                <!-- MENU LATERALE ON/OFF -->
                <div id=\"course-info-boot\" class=\"col-md-12\">

                    ";
        // line 72
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "menu")));
        echo "
                    ";
        // line 73
        $this->loadTemplate("coursemenu_lat.html.twig", "lms.html.twig", 73)->display(array_merge($context, array("dropdown" => ($context["dropdown"] ?? null), "course_name" => ($context["course_name"] ?? null), "course_img" => ($context["course_img"] ?? null))));
        // line 74
        echo "                </div>

            <div id=\"yui-main-boot\" class='col-md-12'>

                ";
        // line 78
        echo ($context["direct_play"] ?? null);
        echo "


            </div>

            <div class=\"nofloat\"></div>
        </div>
        <!-- footer -->
        <div id=\"footer\" class=\"layout_footer\">
            ";
        // line 87
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "footer")));
        echo "

            ";
        // line 89
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::copyright"));
        echo "


        </div>
    </div>

    <!-- scripts -->
    ";
        // line 96
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "scripts")));
        echo "
    <!-- debug -->
    ";
        // line 98
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "debug")));
        echo "
    <!-- def_lang -->
    ";
        // line 100
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "def_lang")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "lms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 100,  193 => 98,  188 => 96,  178 => 89,  173 => 87,  161 => 78,  155 => 74,  153 => 73,  149 => 72,  137 => 63,  132 => 61,  121 => 53,  116 => 51,  112 => 50,  107 => 48,  103 => 47,  100 => 46,  97 => 45,  63 => 14,  60 => 13,  57 => 12,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lms.html.twig", "/var/www/html/forma/formalms/templates/standard/layout/lms.html.twig");
    }
}
