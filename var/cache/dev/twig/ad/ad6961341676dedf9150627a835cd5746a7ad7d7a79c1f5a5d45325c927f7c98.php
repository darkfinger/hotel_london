<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_42ba24b1d21359d1b826573d77b0857ab9c89dda48babfc45c7198892839bbfa extends Twig_Template
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
        $__internal_60bd42ae7c1ca4ec804a5f165c14dfd8c92956d2ee851c3115c01335b39bd83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60bd42ae7c1ca4ec804a5f165c14dfd8c92956d2ee851c3115c01335b39bd83c->enter($__internal_60bd42ae7c1ca4ec804a5f165c14dfd8c92956d2ee851c3115c01335b39bd83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9fc3d81e167872cde816cbceac2e306fb94cb7fbb01ee138fd98d8ba49bf8919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc3d81e167872cde816cbceac2e306fb94cb7fbb01ee138fd98d8ba49bf8919->enter($__internal_9fc3d81e167872cde816cbceac2e306fb94cb7fbb01ee138fd98d8ba49bf8919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60bd42ae7c1ca4ec804a5f165c14dfd8c92956d2ee851c3115c01335b39bd83c->leave($__internal_60bd42ae7c1ca4ec804a5f165c14dfd8c92956d2ee851c3115c01335b39bd83c_prof);

        
        $__internal_9fc3d81e167872cde816cbceac2e306fb94cb7fbb01ee138fd98d8ba49bf8919->leave($__internal_9fc3d81e167872cde816cbceac2e306fb94cb7fbb01ee138fd98d8ba49bf8919_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eecc50647b905f7d46f6ee7e4198b90589819fc369b2dfc75f3a9efa1bb07900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecc50647b905f7d46f6ee7e4198b90589819fc369b2dfc75f3a9efa1bb07900->enter($__internal_eecc50647b905f7d46f6ee7e4198b90589819fc369b2dfc75f3a9efa1bb07900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a23cdcc3d0525d82fe06a6cc7a19e0098bf34f5dc24701960d3c97cfc97da872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23cdcc3d0525d82fe06a6cc7a19e0098bf34f5dc24701960d3c97cfc97da872->enter($__internal_a23cdcc3d0525d82fe06a6cc7a19e0098bf34f5dc24701960d3c97cfc97da872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a23cdcc3d0525d82fe06a6cc7a19e0098bf34f5dc24701960d3c97cfc97da872->leave($__internal_a23cdcc3d0525d82fe06a6cc7a19e0098bf34f5dc24701960d3c97cfc97da872_prof);

        
        $__internal_eecc50647b905f7d46f6ee7e4198b90589819fc369b2dfc75f3a9efa1bb07900->leave($__internal_eecc50647b905f7d46f6ee7e4198b90589819fc369b2dfc75f3a9efa1bb07900_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0526f815f7dbbec7771c9d969f61a4b77f4b4898b1407175e05cf334f36fdc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0526f815f7dbbec7771c9d969f61a4b77f4b4898b1407175e05cf334f36fdc5->enter($__internal_a0526f815f7dbbec7771c9d969f61a4b77f4b4898b1407175e05cf334f36fdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_be9535fce52a34f618c9b87c329aa91a917f67c31860e60a10d45abc00d83fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9535fce52a34f618c9b87c329aa91a917f67c31860e60a10d45abc00d83fbf->enter($__internal_be9535fce52a34f618c9b87c329aa91a917f67c31860e60a10d45abc00d83fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be9535fce52a34f618c9b87c329aa91a917f67c31860e60a10d45abc00d83fbf->leave($__internal_be9535fce52a34f618c9b87c329aa91a917f67c31860e60a10d45abc00d83fbf_prof);

        
        $__internal_a0526f815f7dbbec7771c9d969f61a4b77f4b4898b1407175e05cf334f36fdc5->leave($__internal_a0526f815f7dbbec7771c9d969f61a4b77f4b4898b1407175e05cf334f36fdc5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_650dd989e736e3ad19fcb10651602b4dbdb5bd6cb18d129a638d5f27fa3dae3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650dd989e736e3ad19fcb10651602b4dbdb5bd6cb18d129a638d5f27fa3dae3b->enter($__internal_650dd989e736e3ad19fcb10651602b4dbdb5bd6cb18d129a638d5f27fa3dae3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_43f6218173412c2ae9e997a4f69448fefc609b8473c1d727b2be9d20701d6840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f6218173412c2ae9e997a4f69448fefc609b8473c1d727b2be9d20701d6840->enter($__internal_43f6218173412c2ae9e997a4f69448fefc609b8473c1d727b2be9d20701d6840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_43f6218173412c2ae9e997a4f69448fefc609b8473c1d727b2be9d20701d6840->leave($__internal_43f6218173412c2ae9e997a4f69448fefc609b8473c1d727b2be9d20701d6840_prof);

        
        $__internal_650dd989e736e3ad19fcb10651602b4dbdb5bd6cb18d129a638d5f27fa3dae3b->leave($__internal_650dd989e736e3ad19fcb10651602b4dbdb5bd6cb18d129a638d5f27fa3dae3b_prof);

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
