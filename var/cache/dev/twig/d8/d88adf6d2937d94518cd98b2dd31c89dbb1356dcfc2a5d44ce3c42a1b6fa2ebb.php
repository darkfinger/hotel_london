<?php

/* reservations/book.html.twig */
class __TwigTemplate_a22a3f60692a57ec9d8a9b2a92ac68cd1d835bc2464cf11fb3853af0b622cdf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/book.html.twig", 1);
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
        $__internal_945a35c41a457055ab51833e85cf76999fbb6c56d7daa45debd482d4711f5ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945a35c41a457055ab51833e85cf76999fbb6c56d7daa45debd482d4711f5ee0->enter($__internal_945a35c41a457055ab51833e85cf76999fbb6c56d7daa45debd482d4711f5ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_d4f5ddc13c0428f8124b21953228ddcea60b8a5cc0772f7310ceb445e93d9711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f5ddc13c0428f8124b21953228ddcea60b8a5cc0772f7310ceb445e93d9711->enter($__internal_d4f5ddc13c0428f8124b21953228ddcea60b8a5cc0772f7310ceb445e93d9711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_945a35c41a457055ab51833e85cf76999fbb6c56d7daa45debd482d4711f5ee0->leave($__internal_945a35c41a457055ab51833e85cf76999fbb6c56d7daa45debd482d4711f5ee0_prof);

        
        $__internal_d4f5ddc13c0428f8124b21953228ddcea60b8a5cc0772f7310ceb445e93d9711->leave($__internal_d4f5ddc13c0428f8124b21953228ddcea60b8a5cc0772f7310ceb445e93d9711_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d93cf827e908f432b2c545e487c0dec02263a311ddb3eb6c2363cb8ea372de38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d93cf827e908f432b2c545e487c0dec02263a311ddb3eb6c2363cb8ea372de38->enter($__internal_d93cf827e908f432b2c545e487c0dec02263a311ddb3eb6c2363cb8ea372de38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9dad63f4ddfc99c3a4709db877e891866af83de4ff2dbe6597cd762028a7ff47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dad63f4ddfc99c3a4709db877e891866af83de4ff2dbe6597cd762028a7ff47->enter($__internal_9dad63f4ddfc99c3a4709db877e891866af83de4ff2dbe6597cd762028a7ff47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:";
        // line 8
        echo twig_escape_filter($this->env, ($context["id_client"] ?? $this->getContext($context, "id_client")), "html", null, true);
        echo "</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_9dad63f4ddfc99c3a4709db877e891866af83de4ff2dbe6597cd762028a7ff47->leave($__internal_9dad63f4ddfc99c3a4709db877e891866af83de4ff2dbe6597cd762028a7ff47_prof);

        
        $__internal_d93cf827e908f432b2c545e487c0dec02263a311ddb3eb6c2363cb8ea372de38->leave($__internal_d93cf827e908f432b2c545e487c0dec02263a311ddb3eb6c2363cb8ea372de38_prof);

    }

    public function getTemplateName()
    {
        return "reservations/book.html.twig";
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
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:{{ id_client }}</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/book.html.twig", "I:\\WorkSpace\\Udemy\\symfony 1h\\Ex_Files_Chapter2\\Exercise Files\\CH02\\02_02\\start\\app\\Resources\\views\\reservations\\book.html.twig");
    }
}
