<?php

/* clients/index.html.twig */
class __TwigTemplate_01553599b1627482f7dcac53533ad427a13e26fde9cc797f725c5f6906645da7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
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
        $__internal_1eba961002ec6fa1668ba70b563947f4bfc9e6383a9f9eec2abdf027e3be745e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eba961002ec6fa1668ba70b563947f4bfc9e6383a9f9eec2abdf027e3be745e->enter($__internal_1eba961002ec6fa1668ba70b563947f4bfc9e6383a9f9eec2abdf027e3be745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_db79ee77b6f11c080da0cf1a66f0e333c3fdbefaeb60865adf2c62d61d398c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db79ee77b6f11c080da0cf1a66f0e333c3fdbefaeb60865adf2c62d61d398c87->enter($__internal_db79ee77b6f11c080da0cf1a66f0e333c3fdbefaeb60865adf2c62d61d398c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eba961002ec6fa1668ba70b563947f4bfc9e6383a9f9eec2abdf027e3be745e->leave($__internal_1eba961002ec6fa1668ba70b563947f4bfc9e6383a9f9eec2abdf027e3be745e_prof);

        
        $__internal_db79ee77b6f11c080da0cf1a66f0e333c3fdbefaeb60865adf2c62d61d398c87->leave($__internal_db79ee77b6f11c080da0cf1a66f0e333c3fdbefaeb60865adf2c62d61d398c87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a21709177239003d5a364af3e0127a5f1da5e44ad42f8d43f2d3e5fce0fbe55d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21709177239003d5a364af3e0127a5f1da5e44ad42f8d43f2d3e5fce0fbe55d->enter($__internal_a21709177239003d5a364af3e0127a5f1da5e44ad42f8d43f2d3e5fce0fbe55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6854335ad1d529b2b65ad66d4241c80618e7c6fe36f439467b850d340e72fb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6854335ad1d529b2b65ad66d4241c80618e7c6fe36f439467b850d340e72fb9a->enter($__internal_6854335ad1d529b2b65ad66d4241c80618e7c6fe36f439467b850d340e72fb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_6854335ad1d529b2b65ad66d4241c80618e7c6fe36f439467b850d340e72fb9a->leave($__internal_6854335ad1d529b2b65ad66d4241c80618e7c6fe36f439467b850d340e72fb9a_prof);

        
        $__internal_a21709177239003d5a364af3e0127a5f1da5e44ad42f8d43f2d3e5fce0fbe55d->leave($__internal_a21709177239003d5a364af3e0127a5f1da5e44ad42f8d43f2d3e5fce0fbe55d_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
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
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "clients/index.html.twig", "/Applications/MAMP/htdocs/learn-symfony-3/creating_routes/start/app/Resources/views/clients/index.html.twig");
    }
}
