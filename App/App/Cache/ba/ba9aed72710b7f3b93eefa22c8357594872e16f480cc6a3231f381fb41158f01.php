<?php

/* menu.twig */
class __TwigTemplate_1bab8c4c5ce6ed21e6bf7a4a85008252729a1c477d1f44706e9e132e33748f3f extends Twig_Template
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
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                Menu <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 17
            echo "                    <li>
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "pathUrl", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "menuName", array()));
            echo "</a>
                    </li>
                    ";
            // line 20
            if ($this->getAttribute($context["m"], "children", array(), "any", true, true)) {
                // line 21
                echo "                        <ul>
                            ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["m"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["mm"]) {
                    // line 23
                    echo "                                <li>
                                    <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mm"], "pathUrl", array()));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mm"], "menuName", array()));
                    echo "</a>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                        </ul>
                    ";
            }
            // line 29
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>";
    }

    public function getTemplateName()
    {
        return "menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  77 => 29,  73 => 27,  62 => 24,  59 => 23,  55 => 22,  52 => 21,  50 => 20,  43 => 18,  40 => 17,  36 => 16,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                Menu <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                {% for m in menu %}
                    <li>
                        <a href=\"{{ m.pathUrl|e }}\">{{ m.menuName|e }}</a>
                    </li>
                    {% if m.children is defined %}
                        <ul>
                            {% for mm in m.children %}
                                <li>
                                    <a href=\"{{ mm.pathUrl|e }}\">{{ mm.menuName|e }}</a>
                                </li>
                            {% endfor %}
                        </ul>
                    {% endif %}
                {% endfor %}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>", "menu.twig", "/var/www/cms/App/Views/menu.twig");
    }
}
