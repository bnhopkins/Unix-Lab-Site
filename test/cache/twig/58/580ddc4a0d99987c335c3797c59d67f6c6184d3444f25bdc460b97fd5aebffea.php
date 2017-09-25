<?php

/* partials/base.html.twig */
class __TwigTemplate_4996cdbd2723b26a73ed4f6c64dd4a7ca5979abf35f3dc7209067bd64318a444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <!--<![endif]-->
<head>
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 24
        echo "    </head>
    <body>

        <div id=\"preloader\">
            <div id=\"status\">
                <img src=\"";
        // line 29
        echo ($context["theme_url"] ?? null);
        echo "/images/preloader.gif\" height=\"64\" width=\"64\" alt=\"\">
            </div>
        </div>

        ";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo "
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('footer', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
    </body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
        ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\" />

         ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
        <script src=\"";
        // line 22
        echo ($context["theme_url"] ?? null);
        echo "/js/modernizr.js\"></script>
        ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/default.css"), "method");
        // line 16
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/layout.css"), "method");
        // line 17
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/media-queries.css"), "method");
        // line 18
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/animate.css"), "method");
        // line 19
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/prettyPhoto.css"), "method");
        // line 20
        echo "        ";
    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        // line 34
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 34)->display($context);
        // line 35
        echo "        ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "        ";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
    }

    // line 41
    public function block_footer($context, array $blocks = array())
    {
        // line 42
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 42)->display($context);
        // line 43
        echo "        ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 47
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery-migrate-1.2.1.min.js"), "method");
        // line 48
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.flexslider.js"), "method");
        // line 49
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/waypoints.js"), "method");
        // line 50
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.fittext.js"), "method");
        // line 51
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.fitvids.js"), "method");
        // line 52
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/imagelightbox.js"), "method");
        // line 53
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.prettyPhoto.js"), "method");
        // line 54
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/main.js"), "method");
        // line 55
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 55,  209 => 54,  206 => 53,  203 => 52,  200 => 51,  197 => 50,  194 => 49,  191 => 48,  188 => 47,  185 => 46,  182 => 45,  178 => 43,  175 => 42,  172 => 41,  167 => 38,  163 => 39,  160 => 38,  157 => 37,  153 => 35,  150 => 34,  147 => 33,  143 => 20,  140 => 19,  137 => 18,  134 => 17,  131 => 16,  128 => 15,  125 => 14,  119 => 22,  114 => 21,  112 => 14,  107 => 12,  104 => 11,  102 => 10,  94 => 9,  91 => 8,  88 => 7,  79 => 57,  77 => 45,  74 => 44,  72 => 41,  69 => 40,  67 => 37,  64 => 36,  62 => 33,  55 => 29,  48 => 24,  46 => 7,  41 => 5,  37 => 4,  33 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <!--<![endif]-->
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />

         {% block stylesheets %}
                {% do assets.addCss('theme://css/default.css') %}
                {% do assets.addCss('theme://css/layout.css') %}
                {% do assets.addCss('theme://css/media-queries.css') %}
                {% do assets.addCss('theme://css/animate.css') %}
                {% do assets.addCss('theme://css/prettyPhoto.css') %}
        {% endblock %}
        {{ assets.css() }}
        <script src=\"{{ theme_url }}/js/modernizr.js\"></script>
        {% endblock head%}
    </head>
    <body>

        <div id=\"preloader\">
            <div id=\"status\">
                <img src=\"{{ theme_url }}/images/preloader.gif\" height=\"64\" width=\"64\" alt=\"\">
            </div>
        </div>

        {% block header %}
             {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}

        {% block footer %}
             {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://js/jquery-migrate-1.2.1.min.js') %}
            {% do assets.addJs('theme://js/jquery.flexslider.js') %}
            {% do assets.addJs('theme://js/waypoints.js') %}
            {% do assets.addJs('theme://js/jquery.fittext.js') %}
            {% do assets.addJs('theme://js/jquery.fitvids.js') %}
            {% do assets.addJs('theme://js/imagelightbox.js') %}
            {% do assets.addJs('theme://js/jquery.prettyPhoto.js') %}
            {% do assets.addJs('theme://js/main.js') %}

        {% endblock %}
        {{ assets.js() }}
    </body>
</html>
", "partials/base.html.twig", "/Users/brookehopkins/Downloads/grav-skeleton-woo-site/user/themes/woo/templates/partials/base.html.twig");
    }
}
