<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5c9ea249044f0c04031d0d546035742f2da0baa58e900556385475f88ff8646c extends Twig_Template
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
        $__internal_e73416b6c1e86debe89d0cb92d135e21d355be8fe61fed5ba3f4ff1009de9f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73416b6c1e86debe89d0cb92d135e21d355be8fe61fed5ba3f4ff1009de9f94->enter($__internal_e73416b6c1e86debe89d0cb92d135e21d355be8fe61fed5ba3f4ff1009de9f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_0953160f7b7f83daaf183cd0ec70f480f4f94f489f7f59018b84b7803bbb10da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0953160f7b7f83daaf183cd0ec70f480f4f94f489f7f59018b84b7803bbb10da->enter($__internal_0953160f7b7f83daaf183cd0ec70f480f4f94f489f7f59018b84b7803bbb10da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_e73416b6c1e86debe89d0cb92d135e21d355be8fe61fed5ba3f4ff1009de9f94->leave($__internal_e73416b6c1e86debe89d0cb92d135e21d355be8fe61fed5ba3f4ff1009de9f94_prof);

        
        $__internal_0953160f7b7f83daaf183cd0ec70f480f4f94f489f7f59018b84b7803bbb10da->leave($__internal_0953160f7b7f83daaf183cd0ec70f480f4f94f489f7f59018b84b7803bbb10da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
