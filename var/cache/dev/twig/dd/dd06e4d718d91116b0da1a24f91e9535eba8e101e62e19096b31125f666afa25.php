<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_37cf9a4eee5ce3a42c38e8f687e5a9504db0e9b0e7d1afcd4e17964689c5540d extends Twig_Template
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
        $__internal_13fbaed144d2a34f8d317ef46d97f710732e91018eb13f8c97d7049e752539c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13fbaed144d2a34f8d317ef46d97f710732e91018eb13f8c97d7049e752539c2->enter($__internal_13fbaed144d2a34f8d317ef46d97f710732e91018eb13f8c97d7049e752539c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_683a2a79d4af443029af4e138c74aaaf81253670e5dcd6da3b45bb50af94178e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683a2a79d4af443029af4e138c74aaaf81253670e5dcd6da3b45bb50af94178e->enter($__internal_683a2a79d4af443029af4e138c74aaaf81253670e5dcd6da3b45bb50af94178e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13fbaed144d2a34f8d317ef46d97f710732e91018eb13f8c97d7049e752539c2->leave($__internal_13fbaed144d2a34f8d317ef46d97f710732e91018eb13f8c97d7049e752539c2_prof);

        
        $__internal_683a2a79d4af443029af4e138c74aaaf81253670e5dcd6da3b45bb50af94178e->leave($__internal_683a2a79d4af443029af4e138c74aaaf81253670e5dcd6da3b45bb50af94178e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3c687800972041166fd6dc86db46eae8b2c9a371b6230df02bc1fa8232d54c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c687800972041166fd6dc86db46eae8b2c9a371b6230df02bc1fa8232d54c5->enter($__internal_a3c687800972041166fd6dc86db46eae8b2c9a371b6230df02bc1fa8232d54c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6592650ff757970efc2966b88e37af52d8220982d3ee4688699b6883daca003a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6592650ff757970efc2966b88e37af52d8220982d3ee4688699b6883daca003a->enter($__internal_6592650ff757970efc2966b88e37af52d8220982d3ee4688699b6883daca003a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6592650ff757970efc2966b88e37af52d8220982d3ee4688699b6883daca003a->leave($__internal_6592650ff757970efc2966b88e37af52d8220982d3ee4688699b6883daca003a_prof);

        
        $__internal_a3c687800972041166fd6dc86db46eae8b2c9a371b6230df02bc1fa8232d54c5->leave($__internal_a3c687800972041166fd6dc86db46eae8b2c9a371b6230df02bc1fa8232d54c5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57c8ee9afa0e2f9450d7ea57246089d0ca89d4cde07ead7626af94df32dae717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c8ee9afa0e2f9450d7ea57246089d0ca89d4cde07ead7626af94df32dae717->enter($__internal_57c8ee9afa0e2f9450d7ea57246089d0ca89d4cde07ead7626af94df32dae717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3d026eac164d40937b639c179150e048ad5d31a287d79e75e7ae58bf03335d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d026eac164d40937b639c179150e048ad5d31a287d79e75e7ae58bf03335d79->enter($__internal_3d026eac164d40937b639c179150e048ad5d31a287d79e75e7ae58bf03335d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3d026eac164d40937b639c179150e048ad5d31a287d79e75e7ae58bf03335d79->leave($__internal_3d026eac164d40937b639c179150e048ad5d31a287d79e75e7ae58bf03335d79_prof);

        
        $__internal_57c8ee9afa0e2f9450d7ea57246089d0ca89d4cde07ead7626af94df32dae717->leave($__internal_57c8ee9afa0e2f9450d7ea57246089d0ca89d4cde07ead7626af94df32dae717_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0954c5817e4423c0d4ee7943846903a7d75dda638cc98161d85d8bb0d99721d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0954c5817e4423c0d4ee7943846903a7d75dda638cc98161d85d8bb0d99721d0->enter($__internal_0954c5817e4423c0d4ee7943846903a7d75dda638cc98161d85d8bb0d99721d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_631b0bb7543e22ac81e9930826917c7223ac6794c560cb84b2687e2ac4cb8f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631b0bb7543e22ac81e9930826917c7223ac6794c560cb84b2687e2ac4cb8f5a->enter($__internal_631b0bb7543e22ac81e9930826917c7223ac6794c560cb84b2687e2ac4cb8f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_631b0bb7543e22ac81e9930826917c7223ac6794c560cb84b2687e2ac4cb8f5a->leave($__internal_631b0bb7543e22ac81e9930826917c7223ac6794c560cb84b2687e2ac4cb8f5a_prof);

        
        $__internal_0954c5817e4423c0d4ee7943846903a7d75dda638cc98161d85d8bb0d99721d0->leave($__internal_0954c5817e4423c0d4ee7943846903a7d75dda638cc98161d85d8bb0d99721d0_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/learn-symfony-3/creating_routes/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
