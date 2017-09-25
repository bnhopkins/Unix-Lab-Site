<?php

/* modular/screenshots.html.twig */
class __TwigTemplate_187403c55ff17cb9288c122a5ec67e1f15e6a110b11f1b7343555ca7ed00b449 extends Twig_Template
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
        echo "<section id=\"screenshots\">
    <div class=\"row section-head\">
        ";
        // line 3
        echo ($context["content"] ?? null);
        echo "
    </div>
    <div class=\"row\">
        <div class=\"twelve columns\">
            <div id=\"screenshots-wrapper\" class=\"bgrid-quarters s-bgrid-thirds cf\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "                    <div class=\"columns item\">
                        <div class=\"item-wrap\">
                            <a href=\"";
            // line 11
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute($context["item"], "filename", array());
            echo "\" data-imagelightbox=\"a\" >
                                ";
            // line 12
            echo $this->getAttribute($this->getAttribute($context["item"], "cropZoom", array(0 => 700, 1 => 700), "method"), "html", array(0 => twig_replace_filter($this->getAttribute($context["item"], "filename", array()), array("-" => " ")), 1 => twig_replace_filter($this->getAttribute($context["item"], "filename", array()), array("-" => " "))), "method");
            echo "
                                <div class=\"overlay\"></div> 
                                <div class=\"link-icon\"><i class=\"icon-plus\"></i></div>
                            </a>
                        </div>
                    </div> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div> 
        </div> 
    </div> 
</section>";
    }

    public function getTemplateName()
    {
        return "modular/screenshots.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  45 => 12,  39 => 11,  35 => 9,  31 => 8,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"screenshots\">
    <div class=\"row section-head\">
        {{ content }}
    </div>
    <div class=\"row\">
        <div class=\"twelve columns\">
            <div id=\"screenshots-wrapper\" class=\"bgrid-quarters s-bgrid-thirds cf\">
                {% for item in page.media.images %}
                    <div class=\"columns item\">
                        <div class=\"item-wrap\">
                            <a href=\"{{ page.url(true) }}/{{ item.filename }}\" data-imagelightbox=\"a\" >
                                {{ item.cropZoom(700, 700).html( item.filename|replace({'-': \" \"}), item.filename|replace({'-': \" \"})) }}
                                <div class=\"overlay\"></div> 
                                <div class=\"link-icon\"><i class=\"icon-plus\"></i></div>
                            </a>
                        </div>
                    </div> 
                {% endfor %}
            </div> 
        </div> 
    </div> 
</section>", "modular/screenshots.html.twig", "/Users/brookehopkins/Downloads/grav-skeleton-woo-site/user/themes/woo/templates/modular/screenshots.html.twig");
    }
}
