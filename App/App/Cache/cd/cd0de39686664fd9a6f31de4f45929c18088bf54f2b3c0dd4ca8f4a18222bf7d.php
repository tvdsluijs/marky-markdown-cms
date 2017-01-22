<?php

/* footer.twig */
class __TwigTemplate_9ab84d4573bd8901b0969fba06661f047c24f944f858b2ba6e112b498f3f6c55 extends Twig_Template
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
        echo "<hr>
<!-- Footer -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <ul class=\"list-inline text-center\">
                    <li>
                        <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                                </span>
                        </a>
                    </li>
                </ul>
                <p class=\"copyright text-muted\">Copyright &copy; ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sitedata"] ?? $this->getContext($context, "sitedata")), "sitesubname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sitedata"] ?? $this->getContext($context, "sitedata")), "year", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</footer>

<!-- Latest compiled and minified JavaScript -->
<script
        src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
        integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
        crossorigin=\"anonymous\"></script>

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
        integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
        crossorigin=\"anonymous\"></script>

<!-- Theme JavaScript -->
<script src=\"themes/";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sitedata"] ?? $this->getContext($context, "sitedata")), "themename", array()), "html", null, true);
        echo "/js/clean-blog.min.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 50,  53 => 33,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<hr>
<!-- Footer -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <ul class=\"list-inline text-center\">
                    <li>
                        <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                                </span>
                        </a>
                    </li>
                </ul>
                <p class=\"copyright text-muted\">Copyright &copy; {{ sitedata.sitesubname }} {{ sitedata.year }}</p>
            </div>
        </div>
    </div>
</footer>

<!-- Latest compiled and minified JavaScript -->
<script
        src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
        integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
        crossorigin=\"anonymous\"></script>

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
        integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
        crossorigin=\"anonymous\"></script>

<!-- Theme JavaScript -->
<script src=\"themes/{{ sitedata.themename }}/js/clean-blog.min.js\"></script>

</body>

</html>", "footer.twig", "/var/www/cms/App/Views/footer.twig");
    }
}
