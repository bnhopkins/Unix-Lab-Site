<?php

/* appointments.html.twig */
class __TwigTemplate_2dc54d9f6ded5dc8c96b94f9b00671c650b443ba34164cfa74b884c5e0d515c5 extends Twig_Template
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
        $this->loadTemplate("appointments.html.twig", "appointments.html.twig", 1, "270141286")->display($context);
        // line 12
        echo "  ";
    }

    public function getTemplateName()
    {
        return "appointments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
    {% block content %}

 <div id=\"appointments\">
<iframe src=\"https://calendar.google.com/calendar/selfsched?sstoken=UVBRSURUcjM2cUZnfGRlZmF1bHR8OGY2Yzg5OGUyOWU0NGU3MjM1N2M4MWRmODFkOWE0Njg\" frameborder=\"0\" scrolling=\"yes\" width=\"100%\" height=\"-webkit-fill-available\" style=\"height: -webkit-fill-available;\"></iframe>
</div>



    
    {% endblock %}
{% endembed %}  ", "appointments.html.twig", "/Users/brookehopkins/Documents/NYUAD/Senior/UnixLabWebsite/user/themes/woo/templates/appointments.html.twig");
    }
}


/* appointments.html.twig */
class __TwigTemplate_2dc54d9f6ded5dc8c96b94f9b00671c650b443ba34164cfa74b884c5e0d515c5_270141286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "appointments.html.twig", 1);
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
        echo "
 <div id=\"appointments\">
<iframe src=\"https://calendar.google.com/calendar/selfsched?sstoken=UVBRSURUcjM2cUZnfGRlZmF1bHR8OGY2Yzg5OGUyOWU0NGU3MjM1N2M4MWRmODFkOWE0Njg\" frameborder=\"0\" scrolling=\"yes\" width=\"100%\" height=\"-webkit-fill-available\" style=\"height: -webkit-fill-available;\"></iframe>
</div>



    
    ";
    }

    public function getTemplateName()
    {
        return "appointments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 3,  90 => 2,  73 => 1,  21 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
    {% block content %}

 <div id=\"appointments\">
<iframe src=\"https://calendar.google.com/calendar/selfsched?sstoken=UVBRSURUcjM2cUZnfGRlZmF1bHR8OGY2Yzg5OGUyOWU0NGU3MjM1N2M4MWRmODFkOWE0Njg\" frameborder=\"0\" scrolling=\"yes\" width=\"100%\" height=\"-webkit-fill-available\" style=\"height: -webkit-fill-available;\"></iframe>
</div>



    
    {% endblock %}
{% endembed %}  ", "appointments.html.twig", "/Users/brookehopkins/Documents/NYUAD/Senior/UnixLabWebsite/user/themes/woo/templates/appointments.html.twig");
    }
}
