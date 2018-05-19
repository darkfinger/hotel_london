<?php

/* reservations/index.html.twig */
class __TwigTemplate_6e8053c4af566e20e6f7ab027610af5c56cc075c46d3d24060762d54eb5eb93b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/index.html.twig", 1);
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
        $__internal_607572e05afc7db13471fcf039c2a864be76ea77f640e99a2735253cd03c612e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607572e05afc7db13471fcf039c2a864be76ea77f640e99a2735253cd03c612e->enter($__internal_607572e05afc7db13471fcf039c2a864be76ea77f640e99a2735253cd03c612e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_c78a18ca06483d1e93bf789c4662cce7bfb5ce277cae87a92bcb92e43e99d47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78a18ca06483d1e93bf789c4662cce7bfb5ce277cae87a92bcb92e43e99d47a->enter($__internal_c78a18ca06483d1e93bf789c4662cce7bfb5ce277cae87a92bcb92e43e99d47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_607572e05afc7db13471fcf039c2a864be76ea77f640e99a2735253cd03c612e->leave($__internal_607572e05afc7db13471fcf039c2a864be76ea77f640e99a2735253cd03c612e_prof);

        
        $__internal_c78a18ca06483d1e93bf789c4662cce7bfb5ce277cae87a92bcb92e43e99d47a->leave($__internal_c78a18ca06483d1e93bf789c4662cce7bfb5ce277cae87a92bcb92e43e99d47a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b35cc6a26c3a5dc7d3237d1033b42d953440726d71aadf2493bea28350814dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b35cc6a26c3a5dc7d3237d1033b42d953440726d71aadf2493bea28350814dc->enter($__internal_3b35cc6a26c3a5dc7d3237d1033b42d953440726d71aadf2493bea28350814dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4875f978c70e4f7af8b2720acafeaa5db71c5f1864c56f4a64462cb79cba0a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4875f978c70e4f7af8b2720acafeaa5db71c5f1864c56f4a64462cb79cba0a00->enter($__internal_4875f978c70e4f7af8b2720acafeaa5db71c5f1864c56f4a64462cb79cba0a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_4875f978c70e4f7af8b2720acafeaa5db71c5f1864c56f4a64462cb79cba0a00->leave($__internal_4875f978c70e4f7af8b2720acafeaa5db71c5f1864c56f4a64462cb79cba0a00_prof);

        
        $__internal_3b35cc6a26c3a5dc7d3237d1033b42d953440726d71aadf2493bea28350814dc->leave($__internal_3b35cc6a26c3a5dc7d3237d1033b42d953440726d71aadf2493bea28350814dc_prof);

    }

    public function getTemplateName()
    {
        return "reservations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/index.html.twig", "I:\\WorkSpace\\Udemy\\symfony 1h\\Ex_Files_Chapter2\\Exercise Files\\CH02\\02_02\\start\\app\\Resources\\views\\reservations\\index.html.twig");
    }
}
