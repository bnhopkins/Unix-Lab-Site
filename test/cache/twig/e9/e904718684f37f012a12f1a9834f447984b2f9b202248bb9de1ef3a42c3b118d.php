<?php

/* partials/navigation.html.twig */
class __TwigTemplate_d24ef9c54fa7023df338035e1e680fcad24cf7b769babf3da232067ea3bfbd80 extends Twig_Template
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
        echo "<nav id=\"nav-wrap\">  
 <a class=\"mobile-btn\" href=\"#nav-wrap\" title=\"Show navigation\">Show Menu</a>
 <a class=\"mobile-btn\" href=\"#\" title=\"Hide navigation\">Hide Menu</a>    
 <ul id=\"nav\" class=\"nav\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 6
            echo "        ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 7
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 8
                echo "                <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                    <a href=\"";
                // line 9
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                        ";
                // line 10
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                    </a>
                </li>
            ";
            }
            // line 14
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 16
            echo "            <li>
                <a href=\"";
            // line 17
            if (twig_in_filter("#", $this->getAttribute($context["mitem"], "link", array()))) {
                echo ($context["base_url_absolute"] ?? null);
                echo "/";
                echo $this->getAttribute($context["mitem"], "link", array());
            } else {
                echo $this->getAttribute($context["mitem"], "link", array());
            }
            echo "\" ";
            if (twig_in_filter( !"#", $this->getAttribute($context["mitem"], "link", array()))) {
                echo "class=\"smoothscroll\"";
            }
            echo ">";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>
</nav>          ";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  65 => 17,  62 => 16,  57 => 15,  51 => 14,  44 => 10,  40 => 9,  35 => 8,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav id=\"nav-wrap\">  
 <a class=\"mobile-btn\" href=\"#nav-wrap\" title=\"Show navigation\">Show Menu</a>
 <a class=\"mobile-btn\" href=\"#\" title=\"Hide navigation\">Hide Menu</a>    
 <ul id=\"nav\" class=\"nav\">
    {% for page in pages.children %}
        {% if page.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                <li class=\"{{ current_page }}\">
                    <a href=\"{{ page.url }}\">
                        {{ page.menu }}
                    </a>
                </li>
            {% endif %}
        {% endfor %}
        {% for mitem in site.menu %}
            <li>
                <a href=\"{% if \"#\" in mitem.link %}{{ base_url_absolute }}/{{ mitem.link }}{% else %}{{ mitem.link }}{% endif %}\" {% if not \"#\" in mitem.link  %}class=\"smoothscroll\"{% endif %}>{{ mitem.text }}</a>
            </li>
        {% endfor %}
    </ul>
</nav>          ", "partials/navigation.html.twig", "/Users/brookehopkins/Downloads/grav-skeleton-woo-site/user/themes/woo/templates/partials/navigation.html.twig");
    }
}
