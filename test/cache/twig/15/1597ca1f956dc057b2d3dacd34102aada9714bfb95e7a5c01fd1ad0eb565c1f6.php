<?php

/* modular/testimonials.html.twig */
class __TwigTemplate_1f95254041254eed0102d5e9c67d29e8f1bfaca423fc7dbfb417459ebd471701 extends Twig_Template
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
        echo "<section id=\"testimonials\">
    <div class=\"row content\">
        <span><i class=\"quote-left fa fa-quote-left\"></i></span>
        <div class=\"text-container\">
            <div class=\"twelve columns\">
                ";
        // line 6
        echo ($context["content"] ?? null);
        echo "
            </div>
            <div class=\"twelve columns flex-container\">
                <div class=\"flexslider\">

                    <ul class=\"slides\">
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "testimonials", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "                            <li>
                                <blockquote>
                                    <p> ";
            // line 15
            echo $this->getAttribute($context["item"], "quote", array());
            echo "</p>
                                    <cite>";
            // line 16
            echo $this->getAttribute($context["item"], "title", array());
            echo "</cite>
                                </blockquote>
                            </li> 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    </ul>

                </div>
            </div>
        </div>
        <span><i class=\"quote-right fa fa-quote-right\"></i></span>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  47 => 16,  43 => 15,  39 => 13,  35 => 12,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"testimonials\">
    <div class=\"row content\">
        <span><i class=\"quote-left fa fa-quote-left\"></i></span>
        <div class=\"text-container\">
            <div class=\"twelve columns\">
                {{ content }}
            </div>
            <div class=\"twelve columns flex-container\">
                <div class=\"flexslider\">

                    <ul class=\"slides\">
                        {% for item in page.header.testimonials %}
                            <li>
                                <blockquote>
                                    <p> {{ item.quote }}</p>
                                    <cite>{{ item.title }}</cite>
                                </blockquote>
                            </li> 
                        {% endfor %}
                    </ul>

                </div>
            </div>
        </div>
        <span><i class=\"quote-right fa fa-quote-right\"></i></span>
    </div>
</section>", "modular/testimonials.html.twig", "/Users/brookehopkins/Downloads/grav-skeleton-woo-site/user/themes/woo/templates/modular/testimonials.html.twig");
    }
}
