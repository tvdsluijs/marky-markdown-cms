<?php

/* layout.twig */
class __TwigTemplate_5cb67987b7a7c6f6f8fcef777871804f591421d1bce7c15bf9c0e1d18061c91b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("header.twig", "layout.twig", 1)->display($context);
        // line 2
        echo "<body>
";
        // line 3
        if ($this->getAttribute(($context["sitedata"] ?? null), "analytics", array(), "any", true, true)) {
            // line 4
            echo "<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sitedata"] ?? $this->getContext($context, "sitedata")), "analytics", array()), "html", null, true);
            echo "', 'auto');
    ga('send', 'pageview');
</script>
";
        }
        // line 14
        echo "
";
        // line 15
        $this->loadTemplate("menu.twig", "layout.twig", 15)->display($context);
        // line 16
        echo "
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class=\"intro-header\" style=\"background-image: url('themes/";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sitedata"] ?? $this->getContext($context, "sitedata")), "themename", array()), "html", null, true);
        echo "/img/home-bg.jpg')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"site-heading\">
                    <h1>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sitedata"] ?? $this->getContext($context, "sitedata")), "sitesubname", array()), "html", null, true);
        echo "</h1>
                    <hr class=\"small\">
                    <span class=\"subheading\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sitedata"] ?? $this->getContext($context, "sitedata")), "sitesubname", array()), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>
    </div>
</header>


";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->loadTemplate("footer.twig", "layout.twig", 36)->display($context);
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 34,  81 => 36,  78 => 35,  76 => 34,  65 => 26,  60 => 24,  52 => 19,  47 => 16,  45 => 15,  42 => 14,  35 => 10,  27 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'header.twig' %}
<body>
{% if sitedata.analytics is defined %}
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '{{ sitedata.analytics }}', 'auto');
    ga('send', 'pageview');
</script>
{% endif %}

{% include 'menu.twig' %}

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class=\"intro-header\" style=\"background-image: url('themes/{{ sitedata.themename }}/img/home-bg.jpg')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"site-heading\">
                    <h1>{{ sitedata.sitesubname }}</h1>
                    <hr class=\"small\">
                    <span class=\"subheading\">{{ sitedata.sitesubname }}</span>
                </div>
            </div>
        </div>
    </div>
</header>


{% block content %} {% endblock %}

{% include 'footer.twig' %}", "layout.twig", "/var/www/cms/App/Views/layout.twig");
    }
}
