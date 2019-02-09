<?php

/* lostpwd.html.twig */
class __TwigTemplate_776112863d3ead9197936c444ee32e03fcf7d0348f715e8c464e385f4296c5a6 extends Twig_Template
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
        echo "<div class=\"homepage__row homepage__row--gray homepage__back\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["back"] ?? null), "link", array()), "html", null, true);
        echo "\">
        <span class=\"fa fa-chevron-left\"></span> ";
        // line 3
        echo $this->getAttribute(($context["back"] ?? null), "title", array());
        echo "
    </a>
</div>
<div class=\"homepage__row homepage__row--gray\">
    <p class=\"homepage__text homepage__text--centered homepage__text--title\">
        Recupera password o username
    </p>
</div>
<div class=\"homepage__row homepage__row--gray\">
    <p class=\"homepage__text homepage__text--left\">
        <strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lost_username"] ?? null), "title", array()), "html", null, true);
        echo "</strong><br>
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lost_username"] ?? null), "istruction", array()), "html", null, true);
        echo "
    </p>
</div>
<div class=\"homepage__form homepage__form--lost-pwd\">
    ";
        // line 18
        echo $this->getAttribute(($context["lost_username"] ?? null), "form", array());
        echo "
</div>
<div class=\"homepage__row homepage__row--gray\">
    <br>
    <p class=\"homepage__text homepage__text--left\">

        <strong>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lost_pwd"] ?? null), "title", array()), "html", null, true);
        echo "</strong><br>
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lost_pwd"] ?? null), "istruction", array()), "html", null, true);
        echo "

    </p>
</div>
<div class=\"homepage__form homepage__form--lost-pwd\">
    ";
        // line 30
        echo $this->getAttribute(($context["lost_pwd"] ?? null), "form", array());
        echo "
</div>
<br>
<div class=\"homepage__row homepage__row--footer\">
    <nav class=\"homepage__links\">
        ";
        // line 35
        if (array_key_exists("externalPages", $context)) {
            // line 36
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["externalPages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["externalPage"]) {
                // line 37
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["externalPage"], "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["externalPage"], "title", array()), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['externalPage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        ";
        }
        // line 40
        echo "    </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return "lostpwd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 40,  97 => 39,  86 => 37,  81 => 36,  79 => 35,  71 => 30,  63 => 25,  59 => 24,  50 => 18,  43 => 14,  39 => 13,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lostpwd.html.twig", "/var/www/html/forma/formalms/templates/standard/layout/appCore/homepage/lostpwd.html.twig");
    }
}
