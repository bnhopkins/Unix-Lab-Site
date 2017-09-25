<?php

/* modular/subscribe.html.twig */
class __TwigTemplate_5fb087b2888185d2b3aadfe4bd835e78b9da0657153b68cf513aa02b91ac4d92 extends Twig_Template
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
        echo "<section id=\"subscribe\">
  ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
</section>";
    }

    public function getTemplateName()
    {
        return "modular/subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"subscribe\">
  {{ content }}
</section>", "modular/subscribe.html.twig", "/Users/brookehopkins/Downloads/grav-skeleton-woo-site/user/themes/woo/templates/modular/subscribe.html.twig");
    }
}
