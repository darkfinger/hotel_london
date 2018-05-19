<?php

/* admin/index.html.twig */
class __TwigTemplate_c051833ebcf161b8ea1de6b615599d1466231b51fe3a66a77f17184617958d34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_90dab23a5b3d85aa1cab0bfe964acbc5e96806c3fe94b9faf28e194ab357c81d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90dab23a5b3d85aa1cab0bfe964acbc5e96806c3fe94b9faf28e194ab357c81d->enter($__internal_90dab23a5b3d85aa1cab0bfe964acbc5e96806c3fe94b9faf28e194ab357c81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_d5abd2ce574261ad0bb18928cb90c9bff22f988242dc849eb1385536b595ae9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5abd2ce574261ad0bb18928cb90c9bff22f988242dc849eb1385536b595ae9b->enter($__internal_d5abd2ce574261ad0bb18928cb90c9bff22f988242dc849eb1385536b595ae9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90dab23a5b3d85aa1cab0bfe964acbc5e96806c3fe94b9faf28e194ab357c81d->leave($__internal_90dab23a5b3d85aa1cab0bfe964acbc5e96806c3fe94b9faf28e194ab357c81d_prof);

        
        $__internal_d5abd2ce574261ad0bb18928cb90c9bff22f988242dc849eb1385536b595ae9b->leave($__internal_d5abd2ce574261ad0bb18928cb90c9bff22f988242dc849eb1385536b595ae9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7aec3defca3b5f0e9308e9fd037f7cba94e28352b69c7c55f51108c2c4e66f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7aec3defca3b5f0e9308e9fd037f7cba94e28352b69c7c55f51108c2c4e66f4->enter($__internal_b7aec3defca3b5f0e9308e9fd037f7cba94e28352b69c7c55f51108c2c4e66f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5cac54696a814c6b0ab58cc6d4519ba68a037d6e5bfd2bbd31f63147a67b9f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cac54696a814c6b0ab58cc6d4519ba68a037d6e5bfd2bbd31f63147a67b9f1d->enter($__internal_5cac54696a814c6b0ab58cc6d4519ba68a037d6e5bfd2bbd31f63147a67b9f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Landon Hotel App</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\" width=\"400\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>Welcome to the Landon Hotel App</p>
        <p>This program was developed to keep track of all of our customers.</p>
        <p>This sofwtare also helps prevent overbooking.</p>
      </div>
    </div>

";
        
        $__internal_5cac54696a814c6b0ab58cc6d4519ba68a037d6e5bfd2bbd31f63147a67b9f1d->leave($__internal_5cac54696a814c6b0ab58cc6d4519ba68a037d6e5bfd2bbd31f63147a67b9f1d_prof);

        
        $__internal_b7aec3defca3b5f0e9308e9fd037f7cba94e28352b69c7c55f51108c2c4e66f4->leave($__internal_b7aec3defca3b5f0e9308e9fd037f7cba94e28352b69c7c55f51108c2c4e66f4_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Landon Hotel App</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\" width=\"400\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>Welcome to the Landon Hotel App</p>
        <p>This program was developed to keep track of all of our customers.</p>
        <p>This sofwtare also helps prevent overbooking.</p>
      </div>
    </div>

{% endblock %}
", "admin/index.html.twig", "/Applications/MAMP/htdocs/learn-symfony-3/creating_routes/start/app/Resources/views/admin/index.html.twig");
    }
}
