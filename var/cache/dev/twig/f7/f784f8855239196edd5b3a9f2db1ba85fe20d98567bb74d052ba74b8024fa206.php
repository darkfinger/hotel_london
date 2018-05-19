<?php

/* admin/index.html.twig */
class __TwigTemplate_af9293491fabf2ef093bfdc063a5df2dae4e2e5170037984fa83993178cdcb3c extends Twig_Template
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
        $__internal_334fc8ae0fb88090dd97cb3a71af331a39b95d1f7038ee541340ba84ac033dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334fc8ae0fb88090dd97cb3a71af331a39b95d1f7038ee541340ba84ac033dfb->enter($__internal_334fc8ae0fb88090dd97cb3a71af331a39b95d1f7038ee541340ba84ac033dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_df64c6d17deee3ac3c3baba53442dddfb2188e82f8ab8a10919595ca93349d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df64c6d17deee3ac3c3baba53442dddfb2188e82f8ab8a10919595ca93349d08->enter($__internal_df64c6d17deee3ac3c3baba53442dddfb2188e82f8ab8a10919595ca93349d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_334fc8ae0fb88090dd97cb3a71af331a39b95d1f7038ee541340ba84ac033dfb->leave($__internal_334fc8ae0fb88090dd97cb3a71af331a39b95d1f7038ee541340ba84ac033dfb_prof);

        
        $__internal_df64c6d17deee3ac3c3baba53442dddfb2188e82f8ab8a10919595ca93349d08->leave($__internal_df64c6d17deee3ac3c3baba53442dddfb2188e82f8ab8a10919595ca93349d08_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa7c24b1655b57c849b9840e7a4c085488a55ca3e54e9181d4d7ffac1c6cd7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7c24b1655b57c849b9840e7a4c085488a55ca3e54e9181d4d7ffac1c6cd7de->enter($__internal_fa7c24b1655b57c849b9840e7a4c085488a55ca3e54e9181d4d7ffac1c6cd7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad3484c3704dd8fca827c6ba49e59933ac57e3190a112c7b477c05b10a496f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3484c3704dd8fca827c6ba49e59933ac57e3190a112c7b477c05b10a496f3e->enter($__internal_ad3484c3704dd8fca827c6ba49e59933ac57e3190a112c7b477c05b10a496f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

";
        
        $__internal_ad3484c3704dd8fca827c6ba49e59933ac57e3190a112c7b477c05b10a496f3e->leave($__internal_ad3484c3704dd8fca827c6ba49e59933ac57e3190a112c7b477c05b10a496f3e_prof);

        
        $__internal_fa7c24b1655b57c849b9840e7a4c085488a55ca3e54e9181d4d7ffac1c6cd7de->leave($__internal_fa7c24b1655b57c849b9840e7a4c085488a55ca3e54e9181d4d7ffac1c6cd7de_prof);

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

    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

{% endblock %}
", "admin/index.html.twig", "I:\\WorkSpace\\Udemy\\symfony 1h\\Ex_Files_Chapter2\\Exercise Files\\CH02\\02_02\\start\\app\\Resources\\views\\admin\\index.html.twig");
    }
}
