<?php

/* base.html.twig */
class __TwigTemplate_820014a7d11e5630f7b8f96636ab25f9df9e043eb564847d32007105b80be4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1546441a22b6fb23f9528a675f3ed13e26b8635a40420b98cdb0b93987e00330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1546441a22b6fb23f9528a675f3ed13e26b8635a40420b98cdb0b93987e00330->enter($__internal_1546441a22b6fb23f9528a675f3ed13e26b8635a40420b98cdb0b93987e00330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_31fc4a23b2c4284225c4cf47d991c9ba556b89ad0c386c6b2fcb78afd550af99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31fc4a23b2c4284225c4cf47d991c9ba556b89ad0c386c6b2fcb78afd550af99->enter($__internal_31fc4a23b2c4284225c4cf47d991c9ba556b89ad0c386c6b2fcb78afd550af99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
        
        $__internal_1546441a22b6fb23f9528a675f3ed13e26b8635a40420b98cdb0b93987e00330->leave($__internal_1546441a22b6fb23f9528a675f3ed13e26b8635a40420b98cdb0b93987e00330_prof);

        
        $__internal_31fc4a23b2c4284225c4cf47d991c9ba556b89ad0c386c6b2fcb78afd550af99->leave($__internal_31fc4a23b2c4284225c4cf47d991c9ba556b89ad0c386c6b2fcb78afd550af99_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5340e3cffa09d1959935a2b94f067304ae8f4553e7e381ee966c1e6b26845bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5340e3cffa09d1959935a2b94f067304ae8f4553e7e381ee966c1e6b26845bd0->enter($__internal_5340e3cffa09d1959935a2b94f067304ae8f4553e7e381ee966c1e6b26845bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f0e4d075e366f357619956349e5b4ea8bc709b0c4ab9f0af1878d369a17d25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0e4d075e366f357619956349e5b4ea8bc709b0c4ab9f0af1878d369a17d25b->enter($__internal_8f0e4d075e366f357619956349e5b4ea8bc709b0c4ab9f0af1878d369a17d25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8f0e4d075e366f357619956349e5b4ea8bc709b0c4ab9f0af1878d369a17d25b->leave($__internal_8f0e4d075e366f357619956349e5b4ea8bc709b0c4ab9f0af1878d369a17d25b_prof);

        
        $__internal_5340e3cffa09d1959935a2b94f067304ae8f4553e7e381ee966c1e6b26845bd0->leave($__internal_5340e3cffa09d1959935a2b94f067304ae8f4553e7e381ee966c1e6b26845bd0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c93db0c2135283fc2330c36b8c60324e27c0befea189ee9925ef3759ff1e2a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93db0c2135283fc2330c36b8c60324e27c0befea189ee9925ef3759ff1e2a98->enter($__internal_c93db0c2135283fc2330c36b8c60324e27c0befea189ee9925ef3759ff1e2a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2cc7c02a993d62ab59e576b7ab4979078f0c8629d4ac46b86ad899a9763deeb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc7c02a993d62ab59e576b7ab4979078f0c8629d4ac46b86ad899a9763deeb5->enter($__internal_2cc7c02a993d62ab59e576b7ab4979078f0c8629d4ac46b86ad899a9763deeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <style>
            body { background: #F5F5F5; font: 18px/1.5 sanas-serif; }
            h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
            h1 { font-size: 36px; }
            h2 { font-size: 21px; margin-bottom: 1em; }
            p { margin: 0 0 1em 0; }
            a { color: #0000F0; }
            a:hover { text-decoration: none; }
            code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
            #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
            #container { padding: 2em; }
            #welcome, #status { margin-bottom: 2em; }
            #welcome h1 span { display: block; font-size: 75%; }
        </style>
        ";
        
        $__internal_2cc7c02a993d62ab59e576b7ab4979078f0c8629d4ac46b86ad899a9763deeb5->leave($__internal_2cc7c02a993d62ab59e576b7ab4979078f0c8629d4ac46b86ad899a9763deeb5_prof);

        
        $__internal_c93db0c2135283fc2330c36b8c60324e27c0befea189ee9925ef3759ff1e2a98->leave($__internal_c93db0c2135283fc2330c36b8c60324e27c0befea189ee9925ef3759ff1e2a98_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6153d88b3689d0b49acad4f87a9e50288052a413d5b123a1aef71bb3d2de977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6153d88b3689d0b49acad4f87a9e50288052a413d5b123a1aef71bb3d2de977->enter($__internal_c6153d88b3689d0b49acad4f87a9e50288052a413d5b123a1aef71bb3d2de977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b029077ca1dcd1dd61d91aa173c31b242589e0371f22c7ee3e1c62958f4a1767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b029077ca1dcd1dd61d91aa173c31b242589e0371f22c7ee3e1c62958f4a1767->enter($__internal_b029077ca1dcd1dd61d91aa173c31b242589e0371f22c7ee3e1c62958f4a1767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b029077ca1dcd1dd61d91aa173c31b242589e0371f22c7ee3e1c62958f4a1767->leave($__internal_b029077ca1dcd1dd61d91aa173c31b242589e0371f22c7ee3e1c62958f4a1767_prof);

        
        $__internal_c6153d88b3689d0b49acad4f87a9e50288052a413d5b123a1aef71bb3d2de977->leave($__internal_c6153d88b3689d0b49acad4f87a9e50288052a413d5b123a1aef71bb3d2de977_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b46ca711d7dc8e90e41aa5ef85c603f02c89a6f1c94f7ff17d84ba6b162aa09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b46ca711d7dc8e90e41aa5ef85c603f02c89a6f1c94f7ff17d84ba6b162aa09->enter($__internal_4b46ca711d7dc8e90e41aa5ef85c603f02c89a6f1c94f7ff17d84ba6b162aa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_49b297349c97d006898e750f8615687b143d6dd2dbf40cf1fcddd9425d113d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b297349c97d006898e750f8615687b143d6dd2dbf40cf1fcddd9425d113d36->enter($__internal_49b297349c97d006898e750f8615687b143d6dd2dbf40cf1fcddd9425d113d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_49b297349c97d006898e750f8615687b143d6dd2dbf40cf1fcddd9425d113d36->leave($__internal_49b297349c97d006898e750f8615687b143d6dd2dbf40cf1fcddd9425d113d36_prof);

        
        $__internal_4b46ca711d7dc8e90e41aa5ef85c603f02c89a6f1c94f7ff17d84ba6b162aa09->leave($__internal_4b46ca711d7dc8e90e41aa5ef85c603f02c89a6f1c94f7ff17d84ba6b162aa09_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 26,  116 => 25,  92 => 7,  83 => 6,  65 => 5,  53 => 27,  50 => 26,  48 => 25,  41 => 22,  39 => 6,  35 => 5,  29 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <style>
            body { background: #F5F5F5; font: 18px/1.5 sanas-serif; }
            h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
            h1 { font-size: 36px; }
            h2 { font-size: 21px; margin-bottom: 1em; }
            p { margin: 0 0 1em 0; }
            a { color: #0000F0; }
            a:hover { text-decoration: none; }
            code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
            #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
            #container { padding: 2em; }
            #welcome, #status { margin-bottom: 2em; }
            #welcome h1 span { display: block; font-size: 75%; }
        </style>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\PHP\\symfony-on-app-engine-flex\\app\\Resources\\views\\base.html.twig");
    }
}
