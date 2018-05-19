<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1014ffb02c9983344996f6b1371c2163a75e9013959f3b811a136441d8153f72 extends Twig_Template
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
        $__internal_5086aa002cc5ffff9c59b943d7cc7f522feeef140132c9b1d3c6513c5c8ad3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5086aa002cc5ffff9c59b943d7cc7f522feeef140132c9b1d3c6513c5c8ad3ed->enter($__internal_5086aa002cc5ffff9c59b943d7cc7f522feeef140132c9b1d3c6513c5c8ad3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_2ec658d8dccb16a9622a7e5bc515cc79da6b5f99cbd74538c1a75f51f9ad201e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec658d8dccb16a9622a7e5bc515cc79da6b5f99cbd74538c1a75f51f9ad201e->enter($__internal_2ec658d8dccb16a9622a7e5bc515cc79da6b5f99cbd74538c1a75f51f9ad201e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_5086aa002cc5ffff9c59b943d7cc7f522feeef140132c9b1d3c6513c5c8ad3ed->leave($__internal_5086aa002cc5ffff9c59b943d7cc7f522feeef140132c9b1d3c6513c5c8ad3ed_prof);

        
        $__internal_2ec658d8dccb16a9622a7e5bc515cc79da6b5f99cbd74538c1a75f51f9ad201e->leave($__internal_2ec658d8dccb16a9622a7e5bc515cc79da6b5f99cbd74538c1a75f51f9ad201e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
