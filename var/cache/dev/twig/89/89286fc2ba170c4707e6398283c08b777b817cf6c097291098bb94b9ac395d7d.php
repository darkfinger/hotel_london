<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7db9032a528ac897a0aa9513cc3133c8d4ad9f605b092b4c3753ff5351bfb33d extends Twig_Template
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
        $__internal_2959dea531598113633ee014217e12f2e95b3e78d368db908fb139f7e495b9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2959dea531598113633ee014217e12f2e95b3e78d368db908fb139f7e495b9d2->enter($__internal_2959dea531598113633ee014217e12f2e95b3e78d368db908fb139f7e495b9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_754bc41fd0c6c83f736ddf70287758b49906487684b83d092329fb8b7a325126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754bc41fd0c6c83f736ddf70287758b49906487684b83d092329fb8b7a325126->enter($__internal_754bc41fd0c6c83f736ddf70287758b49906487684b83d092329fb8b7a325126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2959dea531598113633ee014217e12f2e95b3e78d368db908fb139f7e495b9d2->leave($__internal_2959dea531598113633ee014217e12f2e95b3e78d368db908fb139f7e495b9d2_prof);

        
        $__internal_754bc41fd0c6c83f736ddf70287758b49906487684b83d092329fb8b7a325126->leave($__internal_754bc41fd0c6c83f736ddf70287758b49906487684b83d092329fb8b7a325126_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_789bc02abbf9d72e7db9c69f4cd26e8d45e98f0cd9578dc5c3ee603732ebe257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789bc02abbf9d72e7db9c69f4cd26e8d45e98f0cd9578dc5c3ee603732ebe257->enter($__internal_789bc02abbf9d72e7db9c69f4cd26e8d45e98f0cd9578dc5c3ee603732ebe257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c16ae88ffe2a79ed57c2f0d728492a6edeaf3d1924f45b2d59d775b3403a406b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16ae88ffe2a79ed57c2f0d728492a6edeaf3d1924f45b2d59d775b3403a406b->enter($__internal_c16ae88ffe2a79ed57c2f0d728492a6edeaf3d1924f45b2d59d775b3403a406b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c16ae88ffe2a79ed57c2f0d728492a6edeaf3d1924f45b2d59d775b3403a406b->leave($__internal_c16ae88ffe2a79ed57c2f0d728492a6edeaf3d1924f45b2d59d775b3403a406b_prof);

        
        $__internal_789bc02abbf9d72e7db9c69f4cd26e8d45e98f0cd9578dc5c3ee603732ebe257->leave($__internal_789bc02abbf9d72e7db9c69f4cd26e8d45e98f0cd9578dc5c3ee603732ebe257_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1ed11bda768fc10285d8da872dadf6589e914170ad7a753231cd878622e5ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ed11bda768fc10285d8da872dadf6589e914170ad7a753231cd878622e5ec0->enter($__internal_b1ed11bda768fc10285d8da872dadf6589e914170ad7a753231cd878622e5ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9167fdfc312719c89944d94a221dde8112c07907136c35639ddd77e364a10cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9167fdfc312719c89944d94a221dde8112c07907136c35639ddd77e364a10cd7->enter($__internal_9167fdfc312719c89944d94a221dde8112c07907136c35639ddd77e364a10cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9167fdfc312719c89944d94a221dde8112c07907136c35639ddd77e364a10cd7->leave($__internal_9167fdfc312719c89944d94a221dde8112c07907136c35639ddd77e364a10cd7_prof);

        
        $__internal_b1ed11bda768fc10285d8da872dadf6589e914170ad7a753231cd878622e5ec0->leave($__internal_b1ed11bda768fc10285d8da872dadf6589e914170ad7a753231cd878622e5ec0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f708d19978fc462b23bb96c311bffce32c3f53baa0ef2fda9da305915dcb2a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f708d19978fc462b23bb96c311bffce32c3f53baa0ef2fda9da305915dcb2a0->enter($__internal_3f708d19978fc462b23bb96c311bffce32c3f53baa0ef2fda9da305915dcb2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_92b6a0977df54c60ec96251351ff04e60cd85c66ccce1a8cf13fa6f46cff3bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b6a0977df54c60ec96251351ff04e60cd85c66ccce1a8cf13fa6f46cff3bb4->enter($__internal_92b6a0977df54c60ec96251351ff04e60cd85c66ccce1a8cf13fa6f46cff3bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_92b6a0977df54c60ec96251351ff04e60cd85c66ccce1a8cf13fa6f46cff3bb4->leave($__internal_92b6a0977df54c60ec96251351ff04e60cd85c66ccce1a8cf13fa6f46cff3bb4_prof);

        
        $__internal_3f708d19978fc462b23bb96c311bffce32c3f53baa0ef2fda9da305915dcb2a0->leave($__internal_3f708d19978fc462b23bb96c311bffce32c3f53baa0ef2fda9da305915dcb2a0_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/learn-symfony-3/creating_routes/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
