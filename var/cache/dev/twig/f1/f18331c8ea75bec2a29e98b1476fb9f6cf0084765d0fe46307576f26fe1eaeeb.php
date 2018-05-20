<?php

/* clients/form.html.twig */
class __TwigTemplate_2185ba714e4f299335165693dc013b5661b49ce717c9d8eacb3a232737c44705 extends Twig_Template
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
        $__internal_5908e447876292869028abbb1ee36fb2a22bc3b7a8b0c0f6fb4baf41b02cf8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5908e447876292869028abbb1ee36fb2a22bc3b7a8b0c0f6fb4baf41b02cf8fb->enter($__internal_5908e447876292869028abbb1ee36fb2a22bc3b7a8b0c0f6fb4baf41b02cf8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_b190c82c17143d468ac9ee86b73adcd995cca7615300041fcb50d464887f57fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b190c82c17143d468ac9ee86b73adcd995cca7615300041fcb50d464887f57fb->enter($__internal_b190c82c17143d468ac9ee86b73adcd995cca7615300041fcb50d464887f57fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5908e447876292869028abbb1ee36fb2a22bc3b7a8b0c0f6fb4baf41b02cf8fb->leave($__internal_5908e447876292869028abbb1ee36fb2a22bc3b7a8b0c0f6fb4baf41b02cf8fb_prof);

        
        $__internal_b190c82c17143d468ac9ee86b73adcd995cca7615300041fcb50d464887f57fb->leave($__internal_b190c82c17143d468ac9ee86b73adcd995cca7615300041fcb50d464887f57fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_252cb34bca7ae93d1a7b6588e810f921f7b805eb735a8a5e734ae18373f56bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252cb34bca7ae93d1a7b6588e810f921f7b805eb735a8a5e734ae18373f56bb6->enter($__internal_252cb34bca7ae93d1a7b6588e810f921f7b805eb735a8a5e734ae18373f56bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c45ed7305e18c619937683a843a8a60682f15987c2a37b23cff0132edb71b14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45ed7305e18c619937683a843a8a60682f15987c2a37b23cff0132edb71b14a->enter($__internal_c45ed7305e18c619937683a843a8a60682f15987c2a37b23cff0132edb71b14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>";
        // line 7
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new_client")) ? ("Add new client") : ("Modify client"));
        echo "</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
              ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["titles"] ?? $this->getContext($context, "titles")));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 13
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "\" ";
            echo ((($context["title"] == $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["title"]), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[last_name]\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "last_name", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zip_code]\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zip_code", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

";
        
        $__internal_c45ed7305e18c619937683a843a8a60682f15987c2a37b23cff0132edb71b14a->leave($__internal_c45ed7305e18c619937683a843a8a60682f15987c2a37b23cff0132edb71b14a_prof);

        
        $__internal_252cb34bca7ae93d1a7b6588e810f921f7b805eb735a8a5e734ae18373f56bb6->leave($__internal_252cb34bca7ae93d1a7b6588e810f921f7b805eb735a8a5e734ae18373f56bb6_prof);

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
        return array (  127 => 43,  120 => 39,  113 => 35,  106 => 31,  99 => 27,  92 => 23,  85 => 19,  79 => 15,  66 => 13,  62 => 12,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>{{ mode=='new_client'?'Add new client':'Modify client' }}</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
              {% for title in titles %}
              <option value=\"{{ title }}\" {{ title==form.title?'selected':'' }}>{{ title  | capitalize }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"{{ form.name is defined ? form.name:'' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[last_name]\" value=\"{{ form.name is defined ? form.last_name:'' }}\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"{{ form.name is defined ? form.address:'' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zip_code]\" value=\"{{ form.name is defined ? form.zip_code:'' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"{{ form.name is defined ? form.city:'' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"{{ form.name is defined ? form.state:'' }}\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"{{ form.name is defined ? form.email:'' }}\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

{% endblock %}
", "clients/form.html.twig", "I:\\WorkSpace\\Udemy\\symfony 1h\\Ex_Files_Chapter2\\Exercise Files\\CH02\\02_02\\hotel_london\\app\\Resources\\views\\clients\\form.html.twig");
    }
}
