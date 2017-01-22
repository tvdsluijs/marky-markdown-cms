<?php

/* header.twig */
class __TwigTemplate_4e17b15085c957567a7d9fc370b9b2aa60e4876cf8790a1eb49f1123e06dd3ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    ";
        // line 10
        if ($this->getAttribute(($context["header"] ?? null), "metadescription", array(), "any", true, true)) {
            // line 11
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? $this->getContext($context, "header")), "metadescription", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (array_key_exists("title", $context)) {
            // line 15
            echo "        <meta property=\"og:title\" content=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "\"/>
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        if (array_key_exists("pagetype", $context)) {
            // line 19
            echo "        <meta property=\"og:type\" content=\"";
            echo twig_escape_filter($this->env, ($context["pagetype"] ?? $this->getContext($context, "pagetype")), "html", null, true);
            echo "\"/>
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if (array_key_exists("image", $context)) {
            // line 23
            echo "        <meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, ($context["image"] ?? $this->getContext($context, "image")), "html", null, true);
            echo "\"/>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if (array_key_exists("url", $context)) {
            // line 27
            echo "        <meta property=\"og:url\" content=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\"/>
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if ($this->getAttribute(($context["header"] ?? null), "metadescription", array(), "any", true, true)) {
            // line 31
            echo "        <meta property=\"og:description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? $this->getContext($context, "header")), "metadescription", array()), "html", null, true);
            echo "\"/>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if (array_key_exists("url", $context)) {
            // line 35
            echo "        <meta name=\"twitter:card\" content=\"summary\">
        <meta name=\"twitter:url\" content=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\">
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if (array_key_exists("title", $context)) {
            // line 40
            echo "        <meta name=\"twitter:title\" content=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "\">
    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if ($this->getAttribute(($context["header"] ?? null), "metadescription", array(), "any", true, true)) {
            // line 44
            echo "        <meta name=\"twitter:description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? $this->getContext($context, "header")), "metadescription", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 46
        echo "
    ";
        // line 47
        if (array_key_exists("image", $context)) {
            // line 48
            echo "        <meta name=\"twitter:image\" content=\"";
            echo twig_escape_filter($this->env, ($context["image"] ?? $this->getContext($context, "image")), "html", null, true);
            echo "\">
    ";
        }
        // line 50
        echo "
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <!-- Theme CSS -->
    ";
        // line 58
        if ($this->getAttribute(($context["sitedata"] ?? null), "themename", array(), "any", true, true)) {
            // line 59
            echo "    <link href=\"themes/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sitedata"] ?? $this->getContext($context, "sitedata")), "themename", array()), "html", null, true);
            echo "/css/clean-blog.min.css\" rel=\"stylesheet\">
    ";
        }
        // line 61
        echo "
    <!-- Custom Fonts -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    ";
        // line 65
        $this->displayBlock('head', $context, $blocks);
        // line 66
        echo "
    ";
        // line 67
        if (array_key_exists("title", $context)) {
            // line 68
            echo "        <title>";
            $this->displayBlock('title', $context, $blocks);
            echo "</title>
    ";
        }
        // line 70
        echo "</head>";
    }

    // line 65
    public function block_head($context, array $blocks = array())
    {
    }

    // line 68
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 68,  182 => 65,  178 => 70,  172 => 68,  170 => 67,  167 => 66,  165 => 65,  159 => 61,  153 => 59,  151 => 58,  141 => 50,  135 => 48,  133 => 47,  130 => 46,  124 => 44,  122 => 43,  119 => 42,  113 => 40,  111 => 39,  108 => 38,  103 => 36,  100 => 35,  98 => 34,  95 => 33,  89 => 31,  87 => 30,  84 => 29,  78 => 27,  76 => 26,  73 => 25,  67 => 23,  65 => 22,  62 => 21,  56 => 19,  54 => 18,  51 => 17,  45 => 15,  43 => 14,  40 => 13,  34 => 11,  32 => 10,  21 => 1,);
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
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    {% if header.metadescription is defined %}
        <meta name=\"description\" content=\"{{ header.metadescription }}\">
    {% endif %}

    {% if title is defined %}
        <meta property=\"og:title\" content=\"{{ title }}\"/>
    {% endif %}

    {% if pagetype is defined %}
        <meta property=\"og:type\" content=\"{{ pagetype }}\"/>
    {% endif %}

    {% if image is defined %}
        <meta property=\"og:image\" content=\"{{ image }}\"/>
    {% endif %}

    {% if url is defined %}
        <meta property=\"og:url\" content=\"{{ url }}\"/>
    {% endif %}

    {% if header.metadescription is defined %}
        <meta property=\"og:description\" content=\"{{ header.metadescription }}\"/>
    {% endif %}

    {% if url is defined %}
        <meta name=\"twitter:card\" content=\"summary\">
        <meta name=\"twitter:url\" content=\"{{ url }}\">
    {% endif %}

    {% if title is defined %}
        <meta name=\"twitter:title\" content=\"{{ title }}\">
    {% endif %}

    {% if header.metadescription is defined %}
        <meta name=\"twitter:description\" content=\"{{ header.metadescription }}\">
    {% endif %}

    {% if image is defined %}
        <meta name=\"twitter:image\" content=\"{{ image }}\">
    {% endif %}

    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <!-- Theme CSS -->
    {% if sitedata.themename is defined %}
    <link href=\"themes/{{ sitedata.themename }}/css/clean-blog.min.css\" rel=\"stylesheet\">
    {% endif %}

    <!-- Custom Fonts -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    {% block head %}{% endblock %}

    {% if title is defined %}
        <title>{% block title %}{{ title }}{% endblock %}</title>
    {% endif %}
</head>", "header.twig", "/var/www/cms/App/Views/header.twig");
    }
}
