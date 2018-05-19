<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_b83d5b2f40169e59f48efdd2f9af27908d818c858a1188697760897519592de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a923b16fcd466fcba2906f4be7e8eb4eb192c477cb09078202f89143001ec24e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a923b16fcd466fcba2906f4be7e8eb4eb192c477cb09078202f89143001ec24e->enter($__internal_a923b16fcd466fcba2906f4be7e8eb4eb192c477cb09078202f89143001ec24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_4e3b01834bef34d91458967f0ed220c891dbc3421890e34a062fe29ca395a75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e3b01834bef34d91458967f0ed220c891dbc3421890e34a062fe29ca395a75b->enter($__internal_4e3b01834bef34d91458967f0ed220c891dbc3421890e34a062fe29ca395a75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_a923b16fcd466fcba2906f4be7e8eb4eb192c477cb09078202f89143001ec24e->leave($__internal_a923b16fcd466fcba2906f4be7e8eb4eb192c477cb09078202f89143001ec24e_prof);

        
        $__internal_4e3b01834bef34d91458967f0ed220c891dbc3421890e34a062fe29ca395a75b->leave($__internal_4e3b01834bef34d91458967f0ed220c891dbc3421890e34a062fe29ca395a75b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
