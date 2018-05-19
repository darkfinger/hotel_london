<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_db569b3f96c5c2488946217496f960117d133363ab56acf6bdd35d230ce8f6b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03f090b3e28b569205826c3c7fee1aea99bf669f911d5dea41f15d7115f7789c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f090b3e28b569205826c3c7fee1aea99bf669f911d5dea41f15d7115f7789c->enter($__internal_03f090b3e28b569205826c3c7fee1aea99bf669f911d5dea41f15d7115f7789c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_3b423dc956e6c3ee455df551452587ae2b3e50707686df0729a09465f6209b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b423dc956e6c3ee455df551452587ae2b3e50707686df0729a09465f6209b53->enter($__internal_3b423dc956e6c3ee455df551452587ae2b3e50707686df0729a09465f6209b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03f090b3e28b569205826c3c7fee1aea99bf669f911d5dea41f15d7115f7789c->leave($__internal_03f090b3e28b569205826c3c7fee1aea99bf669f911d5dea41f15d7115f7789c_prof);

        
        $__internal_3b423dc956e6c3ee455df551452587ae2b3e50707686df0729a09465f6209b53->leave($__internal_3b423dc956e6c3ee455df551452587ae2b3e50707686df0729a09465f6209b53_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_974de42f8aea49a4c79deee2c8b2629cc84d5255010fff895857776f70fab366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974de42f8aea49a4c79deee2c8b2629cc84d5255010fff895857776f70fab366->enter($__internal_974de42f8aea49a4c79deee2c8b2629cc84d5255010fff895857776f70fab366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_13562731f1b418475613505ad212109e9415394f66f7132d01037968b1a3ff1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13562731f1b418475613505ad212109e9415394f66f7132d01037968b1a3ff1f->enter($__internal_13562731f1b418475613505ad212109e9415394f66f7132d01037968b1a3ff1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_13562731f1b418475613505ad212109e9415394f66f7132d01037968b1a3ff1f->leave($__internal_13562731f1b418475613505ad212109e9415394f66f7132d01037968b1a3ff1f_prof);

        
        $__internal_974de42f8aea49a4c79deee2c8b2629cc84d5255010fff895857776f70fab366->leave($__internal_974de42f8aea49a4c79deee2c8b2629cc84d5255010fff895857776f70fab366_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0d72807a4e59ffd9e225f6a9ad933e8f1c8b891e13307db8724c03f72db85da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d72807a4e59ffd9e225f6a9ad933e8f1c8b891e13307db8724c03f72db85da->enter($__internal_e0d72807a4e59ffd9e225f6a9ad933e8f1c8b891e13307db8724c03f72db85da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dbecb339d1bcd31c76d4ad47e98223402ad5d09d80e228bf71ea8aba043ea4ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbecb339d1bcd31c76d4ad47e98223402ad5d09d80e228bf71ea8aba043ea4ba->enter($__internal_dbecb339d1bcd31c76d4ad47e98223402ad5d09d80e228bf71ea8aba043ea4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_dbecb339d1bcd31c76d4ad47e98223402ad5d09d80e228bf71ea8aba043ea4ba->leave($__internal_dbecb339d1bcd31c76d4ad47e98223402ad5d09d80e228bf71ea8aba043ea4ba_prof);

        
        $__internal_e0d72807a4e59ffd9e225f6a9ad933e8f1c8b891e13307db8724c03f72db85da->leave($__internal_e0d72807a4e59ffd9e225f6a9ad933e8f1c8b891e13307db8724c03f72db85da_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
