<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_122a3d6554ab509c3bdefffb9081490c6bd9da5a46f008667c867be4d4bf8ed2 extends Twig_Template
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
        $__internal_a78bc6a6a85394f44fac0da66dc4281ee22c7d474d258bbda3118600963b425c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78bc6a6a85394f44fac0da66dc4281ee22c7d474d258bbda3118600963b425c->enter($__internal_a78bc6a6a85394f44fac0da66dc4281ee22c7d474d258bbda3118600963b425c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6075444f5fe3ef1603673bc3d3e0114adb640af84ca5cf77407a1ab37fdff67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6075444f5fe3ef1603673bc3d3e0114adb640af84ca5cf77407a1ab37fdff67e->enter($__internal_6075444f5fe3ef1603673bc3d3e0114adb640af84ca5cf77407a1ab37fdff67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a78bc6a6a85394f44fac0da66dc4281ee22c7d474d258bbda3118600963b425c->leave($__internal_a78bc6a6a85394f44fac0da66dc4281ee22c7d474d258bbda3118600963b425c_prof);

        
        $__internal_6075444f5fe3ef1603673bc3d3e0114adb640af84ca5cf77407a1ab37fdff67e->leave($__internal_6075444f5fe3ef1603673bc3d3e0114adb640af84ca5cf77407a1ab37fdff67e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3945d7c207b92fa13a0e81590b9545f69abbcf58f5ced2d41f349ad05253da3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3945d7c207b92fa13a0e81590b9545f69abbcf58f5ced2d41f349ad05253da3d->enter($__internal_3945d7c207b92fa13a0e81590b9545f69abbcf58f5ced2d41f349ad05253da3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f7ed8c56ed75376440251112c637ece8a5b2024cdfef97035c231b2bb555b4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ed8c56ed75376440251112c637ece8a5b2024cdfef97035c231b2bb555b4e0->enter($__internal_f7ed8c56ed75376440251112c637ece8a5b2024cdfef97035c231b2bb555b4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f7ed8c56ed75376440251112c637ece8a5b2024cdfef97035c231b2bb555b4e0->leave($__internal_f7ed8c56ed75376440251112c637ece8a5b2024cdfef97035c231b2bb555b4e0_prof);

        
        $__internal_3945d7c207b92fa13a0e81590b9545f69abbcf58f5ced2d41f349ad05253da3d->leave($__internal_3945d7c207b92fa13a0e81590b9545f69abbcf58f5ced2d41f349ad05253da3d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26ff7c79df6de273c6a995f4adcc67ff2429e60272feea65dd2226c0a258feaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ff7c79df6de273c6a995f4adcc67ff2429e60272feea65dd2226c0a258feaa->enter($__internal_26ff7c79df6de273c6a995f4adcc67ff2429e60272feea65dd2226c0a258feaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d836d477842b13c0bc6f241195a35ad091a1574789c5e9b056c159acccdc7f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d836d477842b13c0bc6f241195a35ad091a1574789c5e9b056c159acccdc7f08->enter($__internal_d836d477842b13c0bc6f241195a35ad091a1574789c5e9b056c159acccdc7f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d836d477842b13c0bc6f241195a35ad091a1574789c5e9b056c159acccdc7f08->leave($__internal_d836d477842b13c0bc6f241195a35ad091a1574789c5e9b056c159acccdc7f08_prof);

        
        $__internal_26ff7c79df6de273c6a995f4adcc67ff2429e60272feea65dd2226c0a258feaa->leave($__internal_26ff7c79df6de273c6a995f4adcc67ff2429e60272feea65dd2226c0a258feaa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba000ceaff2fa42fcd3c3719f5459ecd0fb62d78e89d835314eedd025418ae56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba000ceaff2fa42fcd3c3719f5459ecd0fb62d78e89d835314eedd025418ae56->enter($__internal_ba000ceaff2fa42fcd3c3719f5459ecd0fb62d78e89d835314eedd025418ae56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_959b224a954473d5b84a7706c60d08d19af5cdc9a74f286d1db6dc853cf65e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959b224a954473d5b84a7706c60d08d19af5cdc9a74f286d1db6dc853cf65e0b->enter($__internal_959b224a954473d5b84a7706c60d08d19af5cdc9a74f286d1db6dc853cf65e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_959b224a954473d5b84a7706c60d08d19af5cdc9a74f286d1db6dc853cf65e0b->leave($__internal_959b224a954473d5b84a7706c60d08d19af5cdc9a74f286d1db6dc853cf65e0b_prof);

        
        $__internal_ba000ceaff2fa42fcd3c3719f5459ecd0fb62d78e89d835314eedd025418ae56->leave($__internal_ba000ceaff2fa42fcd3c3719f5459ecd0fb62d78e89d835314eedd025418ae56_prof);

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
", "@WebProfiler/Collector/router.html.twig", "I:\\WorkSpace\\Udemy\\symfony 1h\\Ex_Files_Chapter2\\Exercise Files\\CH02\\02_02\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
