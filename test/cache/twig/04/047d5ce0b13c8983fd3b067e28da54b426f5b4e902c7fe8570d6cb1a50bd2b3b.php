<?php

/* error.html.twig */
class __TwigTemplate_20faa99dd39a44bce7856516ab94485049d58e860dc1eda4cce94b87162b8389 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<section id=\"error\" style=\"padding: 90px 0 72px; background: #fff;\">
    <div class=\"row section-head\">
        <h1>Error ";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "http_response_code", array());
        echo "</h1>
        ";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% block content %}
<section id=\"error\" style=\"padding: 90px 0 72px; background: #fff;\">
    <div class=\"row section-head\">
        <h1>Error {{ page.header.http_response_code }}</h1>
        {{ page.content }}
    </div>
</section>
{% endblock %}
    ", "error.html.twig", "/Users/brookehopkins/Downloads/grav-skeleton-woo-site/user/themes/woo/templates/error.html.twig");
    }
}
