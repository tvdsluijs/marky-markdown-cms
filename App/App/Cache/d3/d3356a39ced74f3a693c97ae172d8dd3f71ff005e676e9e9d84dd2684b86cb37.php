<?php

/* homepage.twig */
class __TwigTemplate_74bc05385383367ebf26ecb87d76475c0aff83704b1162b3c5189352240845d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "homepage.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 7
        if (array_key_exists("message", $context)) {
            // line 8
            echo "                ";
            echo ($context["message"] ?? $this->getContext($context, "message"));
            echo "
            ";
        } else {
            // line 10
            echo "                geen message?
            ";
        }
        // line 12
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "homepage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  44 => 10,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.twig\" %}

{% block content %}
    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            {% if message is defined %}
                {{ message|raw }}
            {% else %}
                geen message?
            {% endif %}
        </div>
    </div>
{% endblock %}

", "homepage.twig", "/var/www/cms/App/Views/homepage.twig");
    }
}
