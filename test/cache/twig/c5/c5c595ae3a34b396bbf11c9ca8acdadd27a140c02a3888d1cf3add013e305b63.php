<?php

/* partials/header.html.twig */
class __TwigTemplate_580bbaab73fa371b7474a38e04d3dbb90233614c6e7cb32b4486b86d25bd02f2 extends Twig_Template
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
        echo "<header id=\"header\">
  <div class=\"logo\">
    <a ";
        // line 3
        if ( !($context["page"] ?? null)) {
            echo "class=\"smoothscroll\"";
        }
        echo " href=\"";
        if (($context["page"] ?? null)) {
            echo ($context["base_url_absolute"] ?? null);
            echo "/#hero";
        } else {
            echo "#hero";
        }
        echo "\"><img alt=\"\" src=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/logo.png\"></a>
  </div>

  ";
        // line 6
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 6)->display($context);
        // line 7
        echo "  ";
        if ($this->getAttribute(($context["site"] ?? null), "social", array())) {
            // line 8
            echo "    ";
            $this->loadTemplate("partials/social.html.twig", "partials/header.html.twig", 8)->display($context);
            // line 9
            echo "  ";
        }
        // line 10
        echo "</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  48 => 9,  45 => 8,  42 => 7,  40 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"header\">
  <div class=\"logo\">
    <a {% if not page %}class=\"smoothscroll\"{% endif %} href=\"{% if page %}{{ base_url_absolute }}/#hero{% else %}#hero{% endif %}\"><img alt=\"\" src=\"{{ theme_url }}/images/logo.png\"></a>
  </div>

  {% include 'partials/navigation.html.twig' %}
  {% if site.social %}
    {% include 'partials/social.html.twig' %}
  {% endif %}
</header>", "partials/header.html.twig", "/Users/brookehopkins/Downloads/grav-skeleton-woo-site/user/themes/woo/templates/partials/header.html.twig");
    }
}
