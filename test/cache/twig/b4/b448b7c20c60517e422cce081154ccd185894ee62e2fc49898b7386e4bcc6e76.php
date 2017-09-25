<?php

/* default.html.twig */
class __TwigTemplate_c59e4043d05589ea601bf9535de65b7bb4b7948e27bec35330e0e87f1c33f870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
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
        echo "<a id=\"hero\" href=\"#\" style=\"visibility: hidden;\"></a>
 <section id=\"styles\" style=\"padding: 90px 0 72px; background: #fff;\">
  <div class=\"row\">
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
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
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
<a id=\"hero\" href=\"#\" style=\"visibility: hidden;\"></a>
 <section id=\"styles\" style=\"padding: 90px 0 72px; background: #fff;\">
  <div class=\"row\">
   {{ page.content }}
 </div>
</section>
{% endblock %}
", "default.html.twig", "/Users/brookehopkins/Downloads/grav-skeleton-woo-site/user/themes/woo/templates/default.html.twig");
    }
}
