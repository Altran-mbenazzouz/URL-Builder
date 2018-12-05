<?php

/* default/index.html.twig */
class __TwigTemplate_13735b6219b2ed4240ab4c45d9589bb6be861f3a3130f7335d28b3994829cedd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_716e185fa8250d9a573689e9be8900f0051e10d97ad31c74fc95fcab02ab0f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716e185fa8250d9a573689e9be8900f0051e10d97ad31c74fc95fcab02ab0f1b->enter($__internal_716e185fa8250d9a573689e9be8900f0051e10d97ad31c74fc95fcab02ab0f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_dfce7f638a9e43113b87f50d05d7362a3afe278e2fd69d2aee5ec004a026396d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfce7f638a9e43113b87f50d05d7362a3afe278e2fd69d2aee5ec004a026396d->enter($__internal_dfce7f638a9e43113b87f50d05d7362a3afe278e2fd69d2aee5ec004a026396d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_716e185fa8250d9a573689e9be8900f0051e10d97ad31c74fc95fcab02ab0f1b->leave($__internal_716e185fa8250d9a573689e9be8900f0051e10d97ad31c74fc95fcab02ab0f1b_prof);

        
        $__internal_dfce7f638a9e43113b87f50d05d7362a3afe278e2fd69d2aee5ec004a026396d->leave($__internal_dfce7f638a9e43113b87f50d05d7362a3afe278e2fd69d2aee5ec004a026396d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c5a29326d54a8d664030d69b9751dba6072b9ae18c2b791a1f73385e4c1115f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5a29326d54a8d664030d69b9751dba6072b9ae18c2b791a1f73385e4c1115f->enter($__internal_0c5a29326d54a8d664030d69b9751dba6072b9ae18c2b791a1f73385e4c1115f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cef0995e255469269632046ec571bdd1f5994af4c54193f976c83370a38f9d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef0995e255469269632046ec571bdd1f5994af4c54193f976c83370a38f9d30->enter($__internal_cef0995e255469269632046ec571bdd1f5994af4c54193f976c83370a38f9d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1>Doctrine on App Engine Flexible</h1>
            </div>

            <div id=\"next\">
                <h2>Products:</h2>
                <ul>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 14
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("productId" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "                    <li><i>No products yet</i></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                </ul>

                <h2> Create a Product</h2>
                <form method=\"POST\" action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_create");
        echo "\">
                    <p><input type=\"text\" name=\"name\" placeholder=\"product name\" /></p>
                    <p><input type=\"text\" name=\"price\" placeholder=\"price\" /></p>
                    <p><textarea name=\"description\" placeholder=\"description\"></textarea></p>
                    <input type=\"submit\" value=\"Create a product\" />
                </form>
            </div>

        </div>
    </div>
";
        
        $__internal_cef0995e255469269632046ec571bdd1f5994af4c54193f976c83370a38f9d30->leave($__internal_cef0995e255469269632046ec571bdd1f5994af4c54193f976c83370a38f9d30_prof);

        
        $__internal_0c5a29326d54a8d664030d69b9751dba6072b9ae18c2b791a1f73385e4c1115f->leave($__internal_0c5a29326d54a8d664030d69b9751dba6072b9ae18c2b791a1f73385e4c1115f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  82 => 18,  75 => 16,  65 => 14,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
            <div id=\"welcome\">
                <h1>Doctrine on App Engine Flexible</h1>
            </div>

            <div id=\"next\">
                <h2>Products:</h2>
                <ul>
                {% for product in products %}
                    <li><a href=\"{{ path('product_show', {productId: product.id }) }}\">{{ product.name }}</a></li>
                {% else %}
                    <li><i>No products yet</i></li>
                {% endfor %}
                </ul>

                <h2> Create a Product</h2>
                <form method=\"POST\" action=\"{{ path('product_create') }}\">
                    <p><input type=\"text\" name=\"name\" placeholder=\"product name\" /></p>
                    <p><input type=\"text\" name=\"price\" placeholder=\"price\" /></p>
                    <p><textarea name=\"description\" placeholder=\"description\"></textarea></p>
                    <input type=\"submit\" value=\"Create a product\" />
                </form>
            </div>

        </div>
    </div>
{% endblock %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\PHP\\symfony-on-app-engine-flex\\app\\Resources\\views\\default\\index.html.twig");
    }
}
