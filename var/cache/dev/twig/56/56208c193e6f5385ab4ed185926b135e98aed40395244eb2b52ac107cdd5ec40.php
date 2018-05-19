<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6842060438db324a079140d8af097e9824da4143badaf8cf57560e102adae3ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97a7ad81bc147efb227030152a842694717b5ed1944e68a3fff45ece3f5a0c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a7ad81bc147efb227030152a842694717b5ed1944e68a3fff45ece3f5a0c83->enter($__internal_97a7ad81bc147efb227030152a842694717b5ed1944e68a3fff45ece3f5a0c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0bb7ae59f4aafa9986a60fa925009980233999c7e04427d870b8940c55d6e205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb7ae59f4aafa9986a60fa925009980233999c7e04427d870b8940c55d6e205->enter($__internal_0bb7ae59f4aafa9986a60fa925009980233999c7e04427d870b8940c55d6e205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a7ad81bc147efb227030152a842694717b5ed1944e68a3fff45ece3f5a0c83->leave($__internal_97a7ad81bc147efb227030152a842694717b5ed1944e68a3fff45ece3f5a0c83_prof);

        
        $__internal_0bb7ae59f4aafa9986a60fa925009980233999c7e04427d870b8940c55d6e205->leave($__internal_0bb7ae59f4aafa9986a60fa925009980233999c7e04427d870b8940c55d6e205_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_df66165f0743ff49dfb894a8c64332f6420518fce84079c1d4e78b03bddc1775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df66165f0743ff49dfb894a8c64332f6420518fce84079c1d4e78b03bddc1775->enter($__internal_df66165f0743ff49dfb894a8c64332f6420518fce84079c1d4e78b03bddc1775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_057feeb31c847dceb323bd5fcf8d82bca137f4c8f0c319b7ae4c6b823ea972fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057feeb31c847dceb323bd5fcf8d82bca137f4c8f0c319b7ae4c6b823ea972fe->enter($__internal_057feeb31c847dceb323bd5fcf8d82bca137f4c8f0c319b7ae4c6b823ea972fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_057feeb31c847dceb323bd5fcf8d82bca137f4c8f0c319b7ae4c6b823ea972fe->leave($__internal_057feeb31c847dceb323bd5fcf8d82bca137f4c8f0c319b7ae4c6b823ea972fe_prof);

        
        $__internal_df66165f0743ff49dfb894a8c64332f6420518fce84079c1d4e78b03bddc1775->leave($__internal_df66165f0743ff49dfb894a8c64332f6420518fce84079c1d4e78b03bddc1775_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/learn-symfony-3/creating_routes/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
