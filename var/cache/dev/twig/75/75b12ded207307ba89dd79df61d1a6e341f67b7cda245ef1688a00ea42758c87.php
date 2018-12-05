<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_92afae8f0a8b2a127401ed5edabf1caa0186b55ffbfe779b077167282bc0889d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_993aee0c4a7879a2d46c9c7fef3dec807f969b12af337f4666b010f089f8078a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993aee0c4a7879a2d46c9c7fef3dec807f969b12af337f4666b010f089f8078a->enter($__internal_993aee0c4a7879a2d46c9c7fef3dec807f969b12af337f4666b010f089f8078a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_01ee091a1f240160fde8bcabd94e1231abe2a58822935d08cd1ae8371b3ec7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ee091a1f240160fde8bcabd94e1231abe2a58822935d08cd1ae8371b3ec7cf->enter($__internal_01ee091a1f240160fde8bcabd94e1231abe2a58822935d08cd1ae8371b3ec7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_993aee0c4a7879a2d46c9c7fef3dec807f969b12af337f4666b010f089f8078a->leave($__internal_993aee0c4a7879a2d46c9c7fef3dec807f969b12af337f4666b010f089f8078a_prof);

        
        $__internal_01ee091a1f240160fde8bcabd94e1231abe2a58822935d08cd1ae8371b3ec7cf->leave($__internal_01ee091a1f240160fde8bcabd94e1231abe2a58822935d08cd1ae8371b3ec7cf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a45410ad75e8a9a5bfd073311c2739d3d5ae55f9c85bdc210c9e9625a8cbe5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45410ad75e8a9a5bfd073311c2739d3d5ae55f9c85bdc210c9e9625a8cbe5aa->enter($__internal_a45410ad75e8a9a5bfd073311c2739d3d5ae55f9c85bdc210c9e9625a8cbe5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e02b41db96072f5b61f3c2c6faf729f622acc4913ea2754c0564084ff6615276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02b41db96072f5b61f3c2c6faf729f622acc4913ea2754c0564084ff6615276->enter($__internal_e02b41db96072f5b61f3c2c6faf729f622acc4913ea2754c0564084ff6615276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e02b41db96072f5b61f3c2c6faf729f622acc4913ea2754c0564084ff6615276->leave($__internal_e02b41db96072f5b61f3c2c6faf729f622acc4913ea2754c0564084ff6615276_prof);

        
        $__internal_a45410ad75e8a9a5bfd073311c2739d3d5ae55f9c85bdc210c9e9625a8cbe5aa->leave($__internal_a45410ad75e8a9a5bfd073311c2739d3d5ae55f9c85bdc210c9e9625a8cbe5aa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\PHP\\symfony-on-app-engine-flex\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
