<?php

/* clients/form.html.twig */
class __TwigTemplate_ce18e47ee04cb7e7ab0432bf867b59c8d6d90ba3d4e79c9d4114516f067d1828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/form.html.twig", 1);
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
        $__internal_cde2a566a9bf169d957243e12276f88f1405e65ef43234545d4d5b1686a750fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde2a566a9bf169d957243e12276f88f1405e65ef43234545d4d5b1686a750fe->enter($__internal_cde2a566a9bf169d957243e12276f88f1405e65ef43234545d4d5b1686a750fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_7c2f52cccd78200dc7f753e900d42b898dd85295cf084a3d1741d43d1a0229c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2f52cccd78200dc7f753e900d42b898dd85295cf084a3d1741d43d1a0229c1->enter($__internal_7c2f52cccd78200dc7f753e900d42b898dd85295cf084a3d1741d43d1a0229c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cde2a566a9bf169d957243e12276f88f1405e65ef43234545d4d5b1686a750fe->leave($__internal_cde2a566a9bf169d957243e12276f88f1405e65ef43234545d4d5b1686a750fe_prof);

        
        $__internal_7c2f52cccd78200dc7f753e900d42b898dd85295cf084a3d1741d43d1a0229c1->leave($__internal_7c2f52cccd78200dc7f753e900d42b898dd85295cf084a3d1741d43d1a0229c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_83fa25833ff8b4e8d4b8141095bdbbc6c9684a2585fd098252a98cada51ea4d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83fa25833ff8b4e8d4b8141095bdbbc6c9684a2585fd098252a98cada51ea4d1->enter($__internal_83fa25833ff8b4e8d4b8141095bdbbc6c9684a2585fd098252a98cada51ea4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d16657fe3582fde8a62b995b06aec3edfae313beed4f658db47fd9d23cad50c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16657fe3582fde8a62b995b06aec3edfae313beed4f658db47fd9d23cad50c1->enter($__internal_d16657fe3582fde8a62b995b06aec3edfae313beed4f658db47fd9d23cad50c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>";
        // line 7
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "n")) ? ("New Client") : ("Modify Client"));
        echo "</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
              <option value=\"mr\">Mr.</option>
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

";
        
        $__internal_d16657fe3582fde8a62b995b06aec3edfae313beed4f658db47fd9d23cad50c1->leave($__internal_d16657fe3582fde8a62b995b06aec3edfae313beed4f658db47fd9d23cad50c1_prof);

        
        $__internal_83fa25833ff8b4e8d4b8141095bdbbc6c9684a2585fd098252a98cada51ea4d1->leave($__internal_83fa25833ff8b4e8d4b8141095bdbbc6c9684a2585fd098252a98cada51ea4d1_prof);

    }

    public function getTemplateName()
    {
        return "clients/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>{{mode == 'n' ? 'New Client' : 'Modify Client'}}</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
              <option value=\"mr\">Mr.</option>
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

{% endblock %}
", "clients/form.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/start/app/Resources/views/clients/form.html.twig");
    }
}
