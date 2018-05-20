<?php

/* clients/index.html.twig */
class __TwigTemplate_628b97b041006991dbfb0da6c71e12ab70828b2f2a64883bf622836618d7ed31 extends Twig_Template
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
        $__internal_ef5c0698d46a1ef037cada6330ca10359e20c4ae441025907f2d5f39567803fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5c0698d46a1ef037cada6330ca10359e20c4ae441025907f2d5f39567803fa->enter($__internal_ef5c0698d46a1ef037cada6330ca10359e20c4ae441025907f2d5f39567803fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_211541450fd3e1f550704e789087abb28dc6151a726ea7f48c16ce4185556b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211541450fd3e1f550704e789087abb28dc6151a726ea7f48c16ce4185556b52->enter($__internal_211541450fd3e1f550704e789087abb28dc6151a726ea7f48c16ce4185556b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef5c0698d46a1ef037cada6330ca10359e20c4ae441025907f2d5f39567803fa->leave($__internal_ef5c0698d46a1ef037cada6330ca10359e20c4ae441025907f2d5f39567803fa_prof);

        
        $__internal_211541450fd3e1f550704e789087abb28dc6151a726ea7f48c16ce4185556b52->leave($__internal_211541450fd3e1f550704e789087abb28dc6151a726ea7f48c16ce4185556b52_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b4ec7b02f4cd9b8a818b514c9125cd2a38c0e5faee2093268087ef16c623569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4ec7b02f4cd9b8a818b514c9125cd2a38c0e5faee2093268087ef16c623569->enter($__internal_5b4ec7b02f4cd9b8a818b514c9125cd2a38c0e5faee2093268087ef16c623569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e38eb89e3b46d12dc5fa646b23e94cb44dcc189ab75667bb394f9cd71614b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e38eb89e3b46d12dc5fa646b23e94cb44dcc189ab75667bb394f9cd71614b4a->enter($__internal_9e38eb89e3b46d12dc5fa646b23e94cb44dcc189ab75667bb394f9cd71614b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_clients");
        echo "\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 19
            echo "              <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["client"], "title", array())), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "last_name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                  <a class=\"hollow button\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_client", array("id_client" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">BOOK A ROOM</a>
                </td>
              </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_9e38eb89e3b46d12dc5fa646b23e94cb44dcc189ab75667bb394f9cd71614b4a->leave($__internal_9e38eb89e3b46d12dc5fa646b23e94cb44dcc189ab75667bb394f9cd71614b4a_prof);

        
        $__internal_5b4ec7b02f4cd9b8a818b514c9125cd2a38c0e5faee2093268087ef16c623569->leave($__internal_5b4ec7b02f4cd9b8a818b514c9125cd2a38c0e5faee2093268087ef16c623569_prof);

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
        return array (  102 => 28,  92 => 24,  88 => 23,  83 => 21,  75 => 20,  72 => 19,  68 => 18,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"{{ path('new_clients') }}\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          {% for client in clients %}
              <tr>
                <td>{{ client.title | capitalize }}. {{ client.name }} {{ client.last_name }}</td>
                <td>{{ client.email }}</td>
                <td>
                  <a class=\"hollow button\" href=\"{{ path(\"modify_client\",{'id_client':client.id}) }}\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"{{ path(\"booking\",{'id_client':client.id}) }}\">BOOK A ROOM</a>
                </td>
              </tr>
          {% endfor %}
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "clients/index.html.twig", "I:\\WorkSpace\\Udemy\\symfony 1h\\Ex_Files_Chapter2\\Exercise Files\\CH02\\02_02\\hotel_london\\app\\Resources\\views\\clients\\index.html.twig");
    }
}
