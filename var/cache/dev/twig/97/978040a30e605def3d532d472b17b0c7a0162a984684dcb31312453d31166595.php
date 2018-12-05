<?php

/* default/show.html.twig */
class __TwigTemplate_025459e0d80239b00c5c195bdd698addbb145b62f8bc30f106288a212c50d851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1a8e0bec02ebb783d8849157c8d8a6a3f97e6aa1bd0007490e5032e88fa46e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a8e0bec02ebb783d8849157c8d8a6a3f97e6aa1bd0007490e5032e88fa46e6->enter($__internal_f1a8e0bec02ebb783d8849157c8d8a6a3f97e6aa1bd0007490e5032e88fa46e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/show.html.twig"));

        $__internal_b64d3c8d6544f7a0ccb188d372959fa3d8ab22aaef9713ade2f5ddbb1cd50db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64d3c8d6544f7a0ccb188d372959fa3d8ab22aaef9713ade2f5ddbb1cd50db0->enter($__internal_b64d3c8d6544f7a0ccb188d372959fa3d8ab22aaef9713ade2f5ddbb1cd50db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1a8e0bec02ebb783d8849157c8d8a6a3f97e6aa1bd0007490e5032e88fa46e6->leave($__internal_f1a8e0bec02ebb783d8849157c8d8a6a3f97e6aa1bd0007490e5032e88fa46e6_prof);

        
        $__internal_b64d3c8d6544f7a0ccb188d372959fa3d8ab22aaef9713ade2f5ddbb1cd50db0->leave($__internal_b64d3c8d6544f7a0ccb188d372959fa3d8ab22aaef9713ade2f5ddbb1cd50db0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eee854d6db2bb188f5a15526bb8a0b5787aa09bf806cbcb0b148677f95e3a3df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee854d6db2bb188f5a15526bb8a0b5787aa09bf806cbcb0b148677f95e3a3df->enter($__internal_eee854d6db2bb188f5a15526bb8a0b5787aa09bf806cbcb0b148677f95e3a3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26c3fe67c78683a6be7e0bc99bce54d1cc67ce09c806d617840f743a5cb06284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c3fe67c78683a6be7e0bc99bce54d1cc67ce09c806d617840f743a5cb06284->enter($__internal_26c3fe67c78683a6be7e0bc99bce54d1cc67ce09c806d617840f743a5cb06284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"product\">
                <h1>Product: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</h1>
                <ul>
                    <li><strong>Price: </strong> \$";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</li>
                    <li><strong>Description: </strong> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</li>
                </ul>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Back</a>
            </div>
        </div>
    </div>
";
        
        $__internal_26c3fe67c78683a6be7e0bc99bce54d1cc67ce09c806d617840f743a5cb06284->leave($__internal_26c3fe67c78683a6be7e0bc99bce54d1cc67ce09c806d617840f743a5cb06284_prof);

        
        $__internal_eee854d6db2bb188f5a15526bb8a0b5787aa09bf806cbcb0b148677f95e3a3df->leave($__internal_eee854d6db2bb188f5a15526bb8a0b5787aa09bf806cbcb0b148677f95e3a3df_prof);

    }

    public function getTemplateName()
    {
        return "default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  63 => 10,  59 => 9,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"product\">
                <h1>Product: {{ product.name }}</h1>
                <ul>
                    <li><strong>Price: </strong> \${{ product.price }}</li>
                    <li><strong>Description: </strong> {{ product.description }}</li>
                </ul>
                <a href=\"{{ path('homepage') }}\">Back</a>
            </div>
        </div>
    </div>
{% endblock %}
", "default/show.html.twig", "C:\\xampp\\htdocs\\PHP\\symfony-on-app-engine-flex\\app\\Resources\\views\\default\\show.html.twig");
    }
}
