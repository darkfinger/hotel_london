<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_53b2e01d4fd50fd9be684b15ac0584d21c397f87483e5a12943ac66a30fc17b2 extends Twig_Template
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
        $__internal_cbe6c58cb5c232defa6dd8b0b9f304761d5dfcdd46dbc743075e31d0f386c58a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe6c58cb5c232defa6dd8b0b9f304761d5dfcdd46dbc743075e31d0f386c58a->enter($__internal_cbe6c58cb5c232defa6dd8b0b9f304761d5dfcdd46dbc743075e31d0f386c58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_15d8bae32a604d077e91fe357b2cbf87cddda04b46ee2a4b81740448b330702d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d8bae32a604d077e91fe357b2cbf87cddda04b46ee2a4b81740448b330702d->enter($__internal_15d8bae32a604d077e91fe357b2cbf87cddda04b46ee2a4b81740448b330702d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbe6c58cb5c232defa6dd8b0b9f304761d5dfcdd46dbc743075e31d0f386c58a->leave($__internal_cbe6c58cb5c232defa6dd8b0b9f304761d5dfcdd46dbc743075e31d0f386c58a_prof);

        
        $__internal_15d8bae32a604d077e91fe357b2cbf87cddda04b46ee2a4b81740448b330702d->leave($__internal_15d8bae32a604d077e91fe357b2cbf87cddda04b46ee2a4b81740448b330702d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_15d94d058ceb008a9e623493b4354f8cce33864bf66300a6b1bb10fac1d58895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15d94d058ceb008a9e623493b4354f8cce33864bf66300a6b1bb10fac1d58895->enter($__internal_15d94d058ceb008a9e623493b4354f8cce33864bf66300a6b1bb10fac1d58895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff951831bceade708c2bda75d8d86433d0ac5d58069b00cbd6d6ae23f3143ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff951831bceade708c2bda75d8d86433d0ac5d58069b00cbd6d6ae23f3143ac0->enter($__internal_ff951831bceade708c2bda75d8d86433d0ac5d58069b00cbd6d6ae23f3143ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ff951831bceade708c2bda75d8d86433d0ac5d58069b00cbd6d6ae23f3143ac0->leave($__internal_ff951831bceade708c2bda75d8d86433d0ac5d58069b00cbd6d6ae23f3143ac0_prof);

        
        $__internal_15d94d058ceb008a9e623493b4354f8cce33864bf66300a6b1bb10fac1d58895->leave($__internal_15d94d058ceb008a9e623493b4354f8cce33864bf66300a6b1bb10fac1d58895_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86251a6a016059f9f087ff8c301e589134d3039e36d89fbebbc13e066882c483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86251a6a016059f9f087ff8c301e589134d3039e36d89fbebbc13e066882c483->enter($__internal_86251a6a016059f9f087ff8c301e589134d3039e36d89fbebbc13e066882c483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dff621dac108d952263264cc0e1e85883f5628b000df7b1facfad67283864abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff621dac108d952263264cc0e1e85883f5628b000df7b1facfad67283864abc->enter($__internal_dff621dac108d952263264cc0e1e85883f5628b000df7b1facfad67283864abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_dff621dac108d952263264cc0e1e85883f5628b000df7b1facfad67283864abc->leave($__internal_dff621dac108d952263264cc0e1e85883f5628b000df7b1facfad67283864abc_prof);

        
        $__internal_86251a6a016059f9f087ff8c301e589134d3039e36d89fbebbc13e066882c483->leave($__internal_86251a6a016059f9f087ff8c301e589134d3039e36d89fbebbc13e066882c483_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f65f2dc24b5eefd2269a0623f1dfb7eb50643a96566ef956d61d8d1ca229c1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65f2dc24b5eefd2269a0623f1dfb7eb50643a96566ef956d61d8d1ca229c1e6->enter($__internal_f65f2dc24b5eefd2269a0623f1dfb7eb50643a96566ef956d61d8d1ca229c1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_843898ac50b941485642f3b08f2fc788e5efd8b4dc7bd9a58136550acf30c881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843898ac50b941485642f3b08f2fc788e5efd8b4dc7bd9a58136550acf30c881->enter($__internal_843898ac50b941485642f3b08f2fc788e5efd8b4dc7bd9a58136550acf30c881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_843898ac50b941485642f3b08f2fc788e5efd8b4dc7bd9a58136550acf30c881->leave($__internal_843898ac50b941485642f3b08f2fc788e5efd8b4dc7bd9a58136550acf30c881_prof);

        
        $__internal_f65f2dc24b5eefd2269a0623f1dfb7eb50643a96566ef956d61d8d1ca229c1e6->leave($__internal_f65f2dc24b5eefd2269a0623f1dfb7eb50643a96566ef956d61d8d1ca229c1e6_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "I:\\WorkSpace\\Udemy\\symfony 1h\\Ex_Files_Chapter2\\Exercise Files\\CH02\\02_02\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
