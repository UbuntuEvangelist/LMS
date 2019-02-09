<?php

/* lms_user.html.twig */
class __TwigTemplate_d3ee8b6ab699ca26a9889c98fef30e1cda557897c2f3922684c75d5de70e1098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lms_user.html.twig", 1);
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
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "style/lms.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "style/lms-to-review.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::path"));
        echo "style/lms-menu.css\"/>
";
    }

    // line 9
    public function block_javascript($context, array $blocks = array())
    {
        // line 10
        echo "    <script type=\"text/javascript\" src=\"";
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Get::rel_path", array(0 => "base")));
        echo "/lib/js_utils.js\"></script>
        <script>
            \$(function() {
                // feedback
                \$('#container-feedback').click(function(){
                   event.preventDefault();
                    \$( this ).fadeOut( 500 );
                });
            });
        </script>    
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    <!-- blind nav -->
    ";
        // line 24
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "blind_navigation")));
        echo "
    <!-- container -->
    <div id=\"container\">
        
        
        
        
        
        <!-- menu_over -->
        <div id=\"menu_over\" class=\"layout_menu_over\">
        <!-- feedback -->
          ";
        // line 35
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "feedback")));
        echo "
          ";
        // line 36
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::cart"));
        echo "
          ";
        // line 37
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "menu_over")));
        echo "
                    
        </div>
        
        
    
        
        <!-- content  -->   
        ";
        // line 46
        echo "        <div class=\"row\">
            <div class=\"container-fluid\">
                ";
        // line 48
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "content")));
        echo "
                
                <div class=\"nofloat\"></div>
            </div>
        </div>
    </div>
    <!-- footer  -->
    <div id=\"footer\" class=\"layout_footer\">
        ";
        // line 56
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "footer")));
        echo "
            ";
        // line 57
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::copyright"));
        echo "
    </div>
        
        
    
    
    <!-- scripts -->
    ";
        // line 64
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "scripts")));
        echo "
    <!-- debug -->
    ";
        // line 66
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "debug")));
        echo "
    <!-- def_lang -->
    ";
        // line 68
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::zone", array(0 => "def_lang")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "lms_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 68,  140 => 66,  135 => 64,  125 => 57,  121 => 56,  110 => 48,  106 => 46,  95 => 37,  91 => 36,  87 => 35,  73 => 24,  70 => 23,  67 => 22,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lms_user.html.twig", "/var/www/html/forma/formalms/templates/standard/layout/lms_user.html.twig");
    }
}
