<?php

/* overview.html.twig */
class __TwigTemplate_4ea6b8f5def9a3939680931eb80353056e486efa8e08f9c4442406264e13a9ff extends Twig_Template
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
        echo "<div class=\"table-responsive\">
    <table class=\"table table-bordered\">
        <colgroup>
            <col style=\"width: 30px\">
            <col style=\"width: 200px\">
            <col style=\"width: 75px\">
            <col style=\"width: 75px\">
            <col style=\"width: 75px\">
            <col style=\"width: 75px\">
            <col style=\"width: 75px\">
            <col style=\"width: 75px\">
            <col style=\"width: 85px\">
            <col style=\"width: 85px\">
            <col style=\"width: 75px\">
            <col style=\"width: 75px\">
            <col style=\"width: 75px\">
            <col style=\"width: 75px\">
            <col style=\"width: 100px\">
            <col style=\"width: 85px\">
        </colgroup>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"transparent\"></th>
            <th colspan=\"6\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_INFO", "coursereport")), "html", null, true);
        echo "</th>
            <th colspan=\"7\">";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_DETAILS", "standard")), "html", null, true);
        echo "</th>
            <th class=\"transparent\"></th>
        </tr>
        <tr>
            <td colspan=\"2\"></td>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_TYPE", "standard")), "html", null, true);
        echo "</td>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_TEST_QUEST_MAXTESTSCORE", "test")), "html", null, true);
        echo "</td>
            <td>";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_REQUIRED_SCORE", "standard")), "html", null, true);
        echo "</td>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_WEIGHT", "coursereport")), "html", null, true);
        echo "</td>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_SHOW_TO_USER", "coursereport")), "html", null, true);
        echo "</td>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_USE_FOR_FINAL", "coursereport")), "html", null, true);
        echo "</td>
            <td>";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_PASSED", "coursereport")), "html", null, true);
        echo "</td>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_NOT_PASSED", "coursereport")), "html", null, true);
        echo "</td>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_NOT_CHECKED", "coursereport")), "html", null, true);
        echo "</td>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_AVERANGE", "standard")), "html", null, true);
        echo "</td>
            <td>";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_MAX_SCORE", "standard")), "html", null, true);
        echo "</td>
            <td>";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_MIN_SCORE", "standard")), "html", null, true);
        echo "</td>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_SHOW_IN_DETAIL", "test")), "html", null, true);
        echo "</td>
            <td></td>
        </tr>
        </thead>
        <tbody class=\"course-sortable\">
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["overview"] ?? null), "tests", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 48
            echo "            <tr>
                <td class=\"handle\"><i class=\"fa fa-sort\"></i></td>
                <td class=\"name\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "typeString", array()), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "max", array()), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "required", array()), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "weight", array()), "html", null, true);
            echo "</td>
                ";
            // line 55
            if ($this->getAttribute($context["test"], "show", array())) {
                // line 56
                echo "                    <td class=\"text-center table-cell\"><i class=\"fa fa-check\"></i></td>
                ";
            } else {
                // line 58
                echo "                    <td class=\"text-center table-cell\"><i class=\"fa fa-close\"></i></td>
                ";
            }
            // line 60
            echo "                ";
            if ($this->getAttribute($context["test"], "final", array())) {
                // line 61
                echo "                    <td class=\"text-center table-cell\"><i class=\"fa fa-check\"></i></td>
                ";
            } else {
                // line 63
                echo "                    <td class=\"text-center table-cell\"><i class=\"fa fa-close\"></i></td>
                ";
            }
            // line 65
            echo "                <td class=\"table-cell\">
                    ";
            // line 66
            if ($this->getAttribute($this->getAttribute($context["test"], "passed", array()), "active", array())) {
                // line 67
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "passed", array()), "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "passed", array()), "value", array()), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 69
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "passed", array()), "value", array()), "html", null, true);
                echo "
                    ";
            }
            // line 71
            echo "                </td>
                <td class=\"table-cell\">
                    ";
            // line 73
            if ($this->getAttribute($this->getAttribute($context["test"], "not_passed", array()), "active", array())) {
                // line 74
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "not_passed", array()), "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "not_passed", array()), "value", array()), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 76
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "not_passed", array()), "value", array()), "html", null, true);
                echo "
                    ";
            }
            // line 78
            echo "                </td>
                <td class=\"table-cell\">
                    ";
            // line 80
            if ($this->getAttribute($this->getAttribute($context["test"], "not_checked", array()), "active", array())) {
                // line 81
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "not_checked", array()), "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "not_checked", array()), "value", array()), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 83
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["test"], "not_checked", array()), "value", array()), "html", null, true);
                echo "
                    ";
            }
            // line 85
            echo "                </td>
                <td class=\"table-cell\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "average", array()), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "max_score", array()), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "min_score", array()), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">
                    <input class=\"js-set-detail-visibility\" type=\"checkbox\" data-value=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "idReport", array()), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($context["test"], "showInDetail", array())) {
                echo "checked";
            }
            echo ">
                </td>
                <td class=\"actions\">
                    ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["test"], "actions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 94
                echo "                        ";
                if ($this->getAttribute($context["action"], "visible", array())) {
                    // line 95
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "link", array()), "html", null, true);
                    echo "\"><i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                    echo "\"></i></a>
                        ";
                }
                // line 97
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "        </tbody>
        <tfoot class=\"empty\">
        <th colspan=\"15\"></th>
        </tfoot>
    </table>

</div>

<div class=\"button--add\">
    <span>";
        // line 110
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_ADD_ACTIVITY", "coursereport")), "html", null, true);
        echo "</span>
    <ul class=\"dropdown\">
        <li><a href=\"index.php?r=lms/coursereport/addactivity\">";
        // line 112
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_ADD_ACTIVITY_TITLE", "coursereport")), "html", null, true);
        echo "</a>
        </li>
        <li><a href=\"index.php?r=lms/coursereport/addscorm\">";
        // line 114
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_ADD_SCORM_RESULTS", "coursereport")), "html", null, true);
        echo "</a>
        </li>
    </ul>
</div>


<div class=\"activities-container\">
    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["details"] ?? null), "activities", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 122
            echo "        <div data-activityId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "id", array()), "html", null, true);
            echo "\" data-activityName=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "name", array()), "html", null, true);
            echo "\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "</div>


<script type=\"text/javascript\">

    activities = ";
        // line 129
        echo twig_jsonencode_filter(($context["details"] ?? null), twig_constant("JSON_HEX_APOS"));
        echo ";

</script>
";
    }

    public function getTemplateName()
    {
        return "overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 129,  321 => 124,  310 => 122,  306 => 121,  296 => 114,  291 => 112,  286 => 110,  275 => 101,  267 => 98,  261 => 97,  253 => 95,  250 => 94,  246 => 93,  236 => 90,  231 => 88,  227 => 87,  223 => 86,  220 => 85,  214 => 83,  206 => 81,  204 => 80,  200 => 78,  194 => 76,  186 => 74,  184 => 73,  180 => 71,  174 => 69,  166 => 67,  164 => 66,  161 => 65,  157 => 63,  153 => 61,  150 => 60,  146 => 58,  142 => 56,  140 => 55,  136 => 54,  132 => 53,  128 => 52,  124 => 51,  120 => 50,  116 => 48,  112 => 47,  104 => 42,  100 => 41,  96 => 40,  92 => 39,  88 => 38,  84 => 37,  80 => 36,  76 => 35,  72 => 34,  68 => 33,  64 => 32,  60 => 31,  56 => 30,  48 => 25,  44 => 24,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overview.html.twig", "/var/www/html/forma/formalms/appLms/views/coursereport/overview.html.twig");
    }
}
