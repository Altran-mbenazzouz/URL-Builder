<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_18f8151750d50ceb60120d6f7be7f00c81abe5375e387e910b1f2f20e5dcf74f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09680e0ac752c78e13bf361706b89530b285d4b247ed436a7a530bc2580bf459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09680e0ac752c78e13bf361706b89530b285d4b247ed436a7a530bc2580bf459->enter($__internal_09680e0ac752c78e13bf361706b89530b285d4b247ed436a7a530bc2580bf459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_04802cda9c93940030db522747d0aba90b78bb69659e06738bc2db24c6f58f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04802cda9c93940030db522747d0aba90b78bb69659e06738bc2db24c6f58f34->enter($__internal_04802cda9c93940030db522747d0aba90b78bb69659e06738bc2db24c6f58f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09680e0ac752c78e13bf361706b89530b285d4b247ed436a7a530bc2580bf459->leave($__internal_09680e0ac752c78e13bf361706b89530b285d4b247ed436a7a530bc2580bf459_prof);

        
        $__internal_04802cda9c93940030db522747d0aba90b78bb69659e06738bc2db24c6f58f34->leave($__internal_04802cda9c93940030db522747d0aba90b78bb69659e06738bc2db24c6f58f34_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_40a33f696d47aee84c4b71f16a6ef3d159562fc10f12255b8fb40f2276b1e355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a33f696d47aee84c4b71f16a6ef3d159562fc10f12255b8fb40f2276b1e355->enter($__internal_40a33f696d47aee84c4b71f16a6ef3d159562fc10f12255b8fb40f2276b1e355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b5e21816c64e06fc738156a654b847835e43d0ee914aca914956a81ab019c544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e21816c64e06fc738156a654b847835e43d0ee914aca914956a81ab019c544->enter($__internal_b5e21816c64e06fc738156a654b847835e43d0ee914aca914956a81ab019c544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b5e21816c64e06fc738156a654b847835e43d0ee914aca914956a81ab019c544->leave($__internal_b5e21816c64e06fc738156a654b847835e43d0ee914aca914956a81ab019c544_prof);

        
        $__internal_40a33f696d47aee84c4b71f16a6ef3d159562fc10f12255b8fb40f2276b1e355->leave($__internal_40a33f696d47aee84c4b71f16a6ef3d159562fc10f12255b8fb40f2276b1e355_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc00f31317d4cf8afd04cc3be2d2bf4d6e017c6906972e92bbcc000f9b5153f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc00f31317d4cf8afd04cc3be2d2bf4d6e017c6906972e92bbcc000f9b5153f6->enter($__internal_cc00f31317d4cf8afd04cc3be2d2bf4d6e017c6906972e92bbcc000f9b5153f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bc338fc26aeeb0830d9f48850825a21efcf259dad5232cbe128b6402692a153e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc338fc26aeeb0830d9f48850825a21efcf259dad5232cbe128b6402692a153e->enter($__internal_bc338fc26aeeb0830d9f48850825a21efcf259dad5232cbe128b6402692a153e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bc338fc26aeeb0830d9f48850825a21efcf259dad5232cbe128b6402692a153e->leave($__internal_bc338fc26aeeb0830d9f48850825a21efcf259dad5232cbe128b6402692a153e_prof);

        
        $__internal_cc00f31317d4cf8afd04cc3be2d2bf4d6e017c6906972e92bbcc000f9b5153f6->leave($__internal_cc00f31317d4cf8afd04cc3be2d2bf4d6e017c6906972e92bbcc000f9b5153f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9308716b3afef6750b416e0ce4da885bf27aa5de460fdbb30d696f5a9f870c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9308716b3afef6750b416e0ce4da885bf27aa5de460fdbb30d696f5a9f870c47->enter($__internal_9308716b3afef6750b416e0ce4da885bf27aa5de460fdbb30d696f5a9f870c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d30ed8c3aa0f01128e2d38a98a338fb736c35ac174df833c9f68d34bf3ea99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d30ed8c3aa0f01128e2d38a98a338fb736c35ac174df833c9f68d34bf3ea99a->enter($__internal_9d30ed8c3aa0f01128e2d38a98a338fb736c35ac174df833c9f68d34bf3ea99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d30ed8c3aa0f01128e2d38a98a338fb736c35ac174df833c9f68d34bf3ea99a->leave($__internal_9d30ed8c3aa0f01128e2d38a98a338fb736c35ac174df833c9f68d34bf3ea99a_prof);

        
        $__internal_9308716b3afef6750b416e0ce4da885bf27aa5de460fdbb30d696f5a9f870c47->leave($__internal_9308716b3afef6750b416e0ce4da885bf27aa5de460fdbb30d696f5a9f870c47_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\PHP\\symfony-on-app-engine-flex\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
