<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4d4feffea5edcccc51cda82847fdd83d69a97886366809a7595d4698e3f2af24 extends Twig_Template
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
        $__internal_5d337e872fc810ae4a11be94cc153fedf058617fb35661067101a7402fda1265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d337e872fc810ae4a11be94cc153fedf058617fb35661067101a7402fda1265->enter($__internal_5d337e872fc810ae4a11be94cc153fedf058617fb35661067101a7402fda1265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ead42ec20be65b81ae63e9fb46a527f6933c40ef0ccd0503632019366d5b13d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead42ec20be65b81ae63e9fb46a527f6933c40ef0ccd0503632019366d5b13d3->enter($__internal_ead42ec20be65b81ae63e9fb46a527f6933c40ef0ccd0503632019366d5b13d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d337e872fc810ae4a11be94cc153fedf058617fb35661067101a7402fda1265->leave($__internal_5d337e872fc810ae4a11be94cc153fedf058617fb35661067101a7402fda1265_prof);

        
        $__internal_ead42ec20be65b81ae63e9fb46a527f6933c40ef0ccd0503632019366d5b13d3->leave($__internal_ead42ec20be65b81ae63e9fb46a527f6933c40ef0ccd0503632019366d5b13d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_df3f4eb9d76e0c6d11cf1fcaedf5e3c23c5fb64241569ce25c3f5da86a204304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3f4eb9d76e0c6d11cf1fcaedf5e3c23c5fb64241569ce25c3f5da86a204304->enter($__internal_df3f4eb9d76e0c6d11cf1fcaedf5e3c23c5fb64241569ce25c3f5da86a204304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_171753de0b22488f78a3f710efeaf261c2dd101c2ddf2264d77c8d85dc4b23c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171753de0b22488f78a3f710efeaf261c2dd101c2ddf2264d77c8d85dc4b23c6->enter($__internal_171753de0b22488f78a3f710efeaf261c2dd101c2ddf2264d77c8d85dc4b23c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_171753de0b22488f78a3f710efeaf261c2dd101c2ddf2264d77c8d85dc4b23c6->leave($__internal_171753de0b22488f78a3f710efeaf261c2dd101c2ddf2264d77c8d85dc4b23c6_prof);

        
        $__internal_df3f4eb9d76e0c6d11cf1fcaedf5e3c23c5fb64241569ce25c3f5da86a204304->leave($__internal_df3f4eb9d76e0c6d11cf1fcaedf5e3c23c5fb64241569ce25c3f5da86a204304_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f3ae868b0785791ac8d8dd8202c6df1b690d26406209cd4e14884df7bc3a1b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ae868b0785791ac8d8dd8202c6df1b690d26406209cd4e14884df7bc3a1b66->enter($__internal_f3ae868b0785791ac8d8dd8202c6df1b690d26406209cd4e14884df7bc3a1b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e3360fd0bdc2d90e78cab74d0d283ebb1bd25e0f58e8e4f4b3a63812b146240f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3360fd0bdc2d90e78cab74d0d283ebb1bd25e0f58e8e4f4b3a63812b146240f->enter($__internal_e3360fd0bdc2d90e78cab74d0d283ebb1bd25e0f58e8e4f4b3a63812b146240f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e3360fd0bdc2d90e78cab74d0d283ebb1bd25e0f58e8e4f4b3a63812b146240f->leave($__internal_e3360fd0bdc2d90e78cab74d0d283ebb1bd25e0f58e8e4f4b3a63812b146240f_prof);

        
        $__internal_f3ae868b0785791ac8d8dd8202c6df1b690d26406209cd4e14884df7bc3a1b66->leave($__internal_f3ae868b0785791ac8d8dd8202c6df1b690d26406209cd4e14884df7bc3a1b66_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2a2184309cc694b367e0944d497fe7e2f2290fdcb7ff64cca08e6e45860ea25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a2184309cc694b367e0944d497fe7e2f2290fdcb7ff64cca08e6e45860ea25->enter($__internal_f2a2184309cc694b367e0944d497fe7e2f2290fdcb7ff64cca08e6e45860ea25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2dcb7deca142a784bf45c739eb857e8b44ae84b30f63dd7cb1552ee4d8bbf7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcb7deca142a784bf45c739eb857e8b44ae84b30f63dd7cb1552ee4d8bbf7b5->enter($__internal_2dcb7deca142a784bf45c739eb857e8b44ae84b30f63dd7cb1552ee4d8bbf7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2dcb7deca142a784bf45c739eb857e8b44ae84b30f63dd7cb1552ee4d8bbf7b5->leave($__internal_2dcb7deca142a784bf45c739eb857e8b44ae84b30f63dd7cb1552ee4d8bbf7b5_prof);

        
        $__internal_f2a2184309cc694b367e0944d497fe7e2f2290fdcb7ff64cca08e6e45860ea25->leave($__internal_f2a2184309cc694b367e0944d497fe7e2f2290fdcb7ff64cca08e6e45860ea25_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/learn-symfony-3/creating_routes/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
