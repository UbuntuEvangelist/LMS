<?php

/* webpage.html.twig */
class __TwigTemplate_ba54c67eeee0d552a4d5a1798e7ea78fda845179798a212d83dcc2ffccd3afd0 extends Twig_Template
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
    <a href=\"./index.php\">
        <span class=\"fa fa-chevron-left\"></span> Indietro
    </a>
</div>
<div class=\"homepage__row homepage__row--gray\">
    <p class=\"homepage__text homepage__text--centered homepage__text--title\">
        ";
        // line 8
        echo ($context["title"] ?? null);
        echo "
    </p>
</div>
<div class=\"homepage__row homepage__row--gray\">
    <p class=\"homepage__text homepage__text--justified homepage__text--description\">
        ";
        // line 13
        echo ($context["description"] ?? null);
        echo "
    </p>
</div>
<div class=\"homepage__row homepage__row--footer\">
    <nav class=\"homepage__links\">
        ";
        // line 18
        if (array_key_exists("externalPages", $context)) {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["externalPages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["externalPage"]) {
                // line 20
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["externalPage"], "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["externalPage"], "title", array()), "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['externalPage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        ";
        }
        // line 23
        echo "    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "webpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  62 => 22,  51 => 20,  46 => 19,  44 => 18,  36 => 13,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "webpage.html.twig", "/var/www/html/forma/formalms/templates/standard/layout/appCore/homepage/webpage.html.twig");
    }
}
