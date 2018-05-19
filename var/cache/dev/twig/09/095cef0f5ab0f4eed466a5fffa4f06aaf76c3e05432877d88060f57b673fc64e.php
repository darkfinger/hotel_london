<?php

/* admin/index.html.twig */
class __TwigTemplate_811f2a1ba1a458f4cc309dde3eba8143027c8d96070b02c7e579dfd0591c693b extends Twig_Template
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
        $__internal_9cd90529273ae0f1d47fe8c4a4b48b44d5111314b09030be44ba6e772fc6f822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd90529273ae0f1d47fe8c4a4b48b44d5111314b09030be44ba6e772fc6f822->enter($__internal_9cd90529273ae0f1d47fe8c4a4b48b44d5111314b09030be44ba6e772fc6f822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_269639633634536908f5f3cb2abe923ff5c227c9bf189500457d19f74ff43567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269639633634536908f5f3cb2abe923ff5c227c9bf189500457d19f74ff43567->enter($__internal_269639633634536908f5f3cb2abe923ff5c227c9bf189500457d19f74ff43567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cd90529273ae0f1d47fe8c4a4b48b44d5111314b09030be44ba6e772fc6f822->leave($__internal_9cd90529273ae0f1d47fe8c4a4b48b44d5111314b09030be44ba6e772fc6f822_prof);

        
        $__internal_269639633634536908f5f3cb2abe923ff5c227c9bf189500457d19f74ff43567->leave($__internal_269639633634536908f5f3cb2abe923ff5c227c9bf189500457d19f74ff43567_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bff081ef478402df35b7a4552c5a669d68e722b4975c3ab0bc45b533b2c2f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bff081ef478402df35b7a4552c5a669d68e722b4975c3ab0bc45b533b2c2f46->enter($__internal_3bff081ef478402df35b7a4552c5a669d68e722b4975c3ab0bc45b533b2c2f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c436d48854f8a1fb36352956787ba0a7526a2ccde9722add63b29e78017d3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c436d48854f8a1fb36352956787ba0a7526a2ccde9722add63b29e78017d3dc->enter($__internal_0c436d48854f8a1fb36352956787ba0a7526a2ccde9722add63b29e78017d3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0c436d48854f8a1fb36352956787ba0a7526a2ccde9722add63b29e78017d3dc->leave($__internal_0c436d48854f8a1fb36352956787ba0a7526a2ccde9722add63b29e78017d3dc_prof);

        
        $__internal_3bff081ef478402df35b7a4552c5a669d68e722b4975c3ab0bc45b533b2c2f46->leave($__internal_3bff081ef478402df35b7a4552c5a669d68e722b4975c3ab0bc45b533b2c2f46_prof);

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
", "admin/index.html.twig", "/Applications/MAMP/htdocs/learn-symfony-3/creating_routes/start/app/Resources/views/admin/index.html.twig");
    }
}
