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
        $__internal_52a83bb1a05cd5028aa45e1ff80583f796d8dd52e36ec7a61e103bed3120ba8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a83bb1a05cd5028aa45e1ff80583f796d8dd52e36ec7a61e103bed3120ba8d->enter($__internal_52a83bb1a05cd5028aa45e1ff80583f796d8dd52e36ec7a61e103bed3120ba8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_19f67f7309e6b9b9044f891dc282798f5c3f4772f12ef5cbe28c8aa068bb7646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f67f7309e6b9b9044f891dc282798f5c3f4772f12ef5cbe28c8aa068bb7646->enter($__internal_19f67f7309e6b9b9044f891dc282798f5c3f4772f12ef5cbe28c8aa068bb7646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52a83bb1a05cd5028aa45e1ff80583f796d8dd52e36ec7a61e103bed3120ba8d->leave($__internal_52a83bb1a05cd5028aa45e1ff80583f796d8dd52e36ec7a61e103bed3120ba8d_prof);

        
        $__internal_19f67f7309e6b9b9044f891dc282798f5c3f4772f12ef5cbe28c8aa068bb7646->leave($__internal_19f67f7309e6b9b9044f891dc282798f5c3f4772f12ef5cbe28c8aa068bb7646_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da2b14bd5011de3690b4dd25c25fb5d7e794981727f77d856d4291bd5f1e8006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2b14bd5011de3690b4dd25c25fb5d7e794981727f77d856d4291bd5f1e8006->enter($__internal_da2b14bd5011de3690b4dd25c25fb5d7e794981727f77d856d4291bd5f1e8006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5be149effdcd66223c265a64357dbf47a3d874701fda7ada7e50058f281a55a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be149effdcd66223c265a64357dbf47a3d874701fda7ada7e50058f281a55a5->enter($__internal_5be149effdcd66223c265a64357dbf47a3d874701fda7ada7e50058f281a55a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>New Client</h4>
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
            echo "\">Mr.</option>
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
            <input name=\"form[lastName]\" value=\"";
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
            <input name=\"form[zipCode]\" value=\"";
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
        
        $__internal_5be149effdcd66223c265a64357dbf47a3d874701fda7ada7e50058f281a55a5->leave($__internal_5be149effdcd66223c265a64357dbf47a3d874701fda7ada7e50058f281a55a5_prof);

        
        $__internal_da2b14bd5011de3690b4dd25c25fb5d7e794981727f77d856d4291bd5f1e8006->leave($__internal_da2b14bd5011de3690b4dd25c25fb5d7e794981727f77d856d4291bd5f1e8006_prof);

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
        return array (  120 => 43,  113 => 39,  106 => 35,  99 => 31,  92 => 27,  85 => 23,  78 => 19,  72 => 15,  63 => 13,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>New Client</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
              {% for title in titles %}
              <option value=\"{{ title }}\">Mr.</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"{{ form.name is defined ? form.name:'' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"{{ form.name is defined ? form.last_name:'' }}\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"{{ form.name is defined ? form.address:'' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"{{ form.name is defined ? form.zip_code:'' }}\" type=\"text\" />
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
", "clients/form.html.twig", "I:\\WorkSpace\\Udemy\\symfony 1h\\Ex_Files_Chapter2\\Exercise Files\\CH02\\02_02\\start\\app\\Resources\\views\\clients\\form.html.twig");
    }
}
