<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_79679ad6c3dd2a55ae6d34e4ec2393f5eb46513f7d85244bac745220d300d58a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_12ae9d1b48aa476dfc1d2970f2ea75acd9ed72bd99426efbf608a25c12cb5664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ae9d1b48aa476dfc1d2970f2ea75acd9ed72bd99426efbf608a25c12cb5664->enter($__internal_12ae9d1b48aa476dfc1d2970f2ea75acd9ed72bd99426efbf608a25c12cb5664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3c0849d49d7ce8032ecbb13f6a86aac1e500f276ed4a20f5a3bd1ae316674bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0849d49d7ce8032ecbb13f6a86aac1e500f276ed4a20f5a3bd1ae316674bdc->enter($__internal_3c0849d49d7ce8032ecbb13f6a86aac1e500f276ed4a20f5a3bd1ae316674bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12ae9d1b48aa476dfc1d2970f2ea75acd9ed72bd99426efbf608a25c12cb5664->leave($__internal_12ae9d1b48aa476dfc1d2970f2ea75acd9ed72bd99426efbf608a25c12cb5664_prof);

        
        $__internal_3c0849d49d7ce8032ecbb13f6a86aac1e500f276ed4a20f5a3bd1ae316674bdc->leave($__internal_3c0849d49d7ce8032ecbb13f6a86aac1e500f276ed4a20f5a3bd1ae316674bdc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c959dbf18a3ba14959dd3c3b89bbde5fd50e81247cc0001514b0ccf6bf624bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c959dbf18a3ba14959dd3c3b89bbde5fd50e81247cc0001514b0ccf6bf624bef->enter($__internal_c959dbf18a3ba14959dd3c3b89bbde5fd50e81247cc0001514b0ccf6bf624bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0e0d8c55dbad0656f0c6fe4da0c8e31517d2277c8155307cf3d423a566300e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0d8c55dbad0656f0c6fe4da0c8e31517d2277c8155307cf3d423a566300e19->enter($__internal_0e0d8c55dbad0656f0c6fe4da0c8e31517d2277c8155307cf3d423a566300e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0e0d8c55dbad0656f0c6fe4da0c8e31517d2277c8155307cf3d423a566300e19->leave($__internal_0e0d8c55dbad0656f0c6fe4da0c8e31517d2277c8155307cf3d423a566300e19_prof);

        
        $__internal_c959dbf18a3ba14959dd3c3b89bbde5fd50e81247cc0001514b0ccf6bf624bef->leave($__internal_c959dbf18a3ba14959dd3c3b89bbde5fd50e81247cc0001514b0ccf6bf624bef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f09855af23021fea7e01ab120010bd7b611e1ad498ffe48a0dfd3ce4f22f9957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09855af23021fea7e01ab120010bd7b611e1ad498ffe48a0dfd3ce4f22f9957->enter($__internal_f09855af23021fea7e01ab120010bd7b611e1ad498ffe48a0dfd3ce4f22f9957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7b0cb891ec8ba7a0d11754c69c65c74501713de06cb2846ed2345525034e07b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0cb891ec8ba7a0d11754c69c65c74501713de06cb2846ed2345525034e07b4->enter($__internal_7b0cb891ec8ba7a0d11754c69c65c74501713de06cb2846ed2345525034e07b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7b0cb891ec8ba7a0d11754c69c65c74501713de06cb2846ed2345525034e07b4->leave($__internal_7b0cb891ec8ba7a0d11754c69c65c74501713de06cb2846ed2345525034e07b4_prof);

        
        $__internal_f09855af23021fea7e01ab120010bd7b611e1ad498ffe48a0dfd3ce4f22f9957->leave($__internal_f09855af23021fea7e01ab120010bd7b611e1ad498ffe48a0dfd3ce4f22f9957_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8c72c83aec16c2c47246e1c3637cb1020b7b74f52e9467b463dc40193c44ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c72c83aec16c2c47246e1c3637cb1020b7b74f52e9467b463dc40193c44ad3->enter($__internal_d8c72c83aec16c2c47246e1c3637cb1020b7b74f52e9467b463dc40193c44ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d2623a0978b83ce9f88100a99662cc8ff681193be479fa3edcd0ea913bbc828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2623a0978b83ce9f88100a99662cc8ff681193be479fa3edcd0ea913bbc828->enter($__internal_4d2623a0978b83ce9f88100a99662cc8ff681193be479fa3edcd0ea913bbc828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4d2623a0978b83ce9f88100a99662cc8ff681193be479fa3edcd0ea913bbc828->leave($__internal_4d2623a0978b83ce9f88100a99662cc8ff681193be479fa3edcd0ea913bbc828_prof);

        
        $__internal_d8c72c83aec16c2c47246e1c3637cb1020b7b74f52e9467b463dc40193c44ad3->leave($__internal_d8c72c83aec16c2c47246e1c3637cb1020b7b74f52e9467b463dc40193c44ad3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\PHP\\symfony-on-app-engine-flex\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
