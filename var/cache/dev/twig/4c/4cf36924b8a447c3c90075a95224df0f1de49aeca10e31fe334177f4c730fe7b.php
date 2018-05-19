<?php

/* reservations/index.html.twig */
class __TwigTemplate_ee463235539b69cc2e9539d7966d9f32fe53bacc1e659a0314b14f019bed78a9 extends Twig_Template
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
        $__internal_b23a33a1398e8da63989996108696b87573b1ba051602c4ac7733025b09b6b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23a33a1398e8da63989996108696b87573b1ba051602c4ac7733025b09b6b14->enter($__internal_b23a33a1398e8da63989996108696b87573b1ba051602c4ac7733025b09b6b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_0ab55c9e1ee9e6aab8adefd90e90bf2c092e6527390bbf8d37a1a40871031abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab55c9e1ee9e6aab8adefd90e90bf2c092e6527390bbf8d37a1a40871031abd->enter($__internal_0ab55c9e1ee9e6aab8adefd90e90bf2c092e6527390bbf8d37a1a40871031abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b23a33a1398e8da63989996108696b87573b1ba051602c4ac7733025b09b6b14->leave($__internal_b23a33a1398e8da63989996108696b87573b1ba051602c4ac7733025b09b6b14_prof);

        
        $__internal_0ab55c9e1ee9e6aab8adefd90e90bf2c092e6527390bbf8d37a1a40871031abd->leave($__internal_0ab55c9e1ee9e6aab8adefd90e90bf2c092e6527390bbf8d37a1a40871031abd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e4451daa29a54ba916b1dc02b1d6b7cb269b1f258c292bd4ab2a70a35456d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e4451daa29a54ba916b1dc02b1d6b7cb269b1f258c292bd4ab2a70a35456d0a->enter($__internal_9e4451daa29a54ba916b1dc02b1d6b7cb269b1f258c292bd4ab2a70a35456d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1abf618224be33b8ead89c8b84d99ba4389011432b3de72a73dbc18f63c0bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1abf618224be33b8ead89c8b84d99ba4389011432b3de72a73dbc18f63c0bc0->enter($__internal_a1abf618224be33b8ead89c8b84d99ba4389011432b3de72a73dbc18f63c0bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a1abf618224be33b8ead89c8b84d99ba4389011432b3de72a73dbc18f63c0bc0->leave($__internal_a1abf618224be33b8ead89c8b84d99ba4389011432b3de72a73dbc18f63c0bc0_prof);

        
        $__internal_9e4451daa29a54ba916b1dc02b1d6b7cb269b1f258c292bd4ab2a70a35456d0a->leave($__internal_9e4451daa29a54ba916b1dc02b1d6b7cb269b1f258c292bd4ab2a70a35456d0a_prof);

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
", "reservations/index.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/start/app/Resources/views/reservations/index.html.twig");
    }
}
