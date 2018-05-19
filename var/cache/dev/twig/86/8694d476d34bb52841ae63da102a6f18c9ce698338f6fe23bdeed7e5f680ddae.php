<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_3eddd08e19c5cefc16b7e13088a59468c8ec35882f2f12d5c41e5f7629e25472 extends Twig_Template
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
        $__internal_8a7b92655930db23ef331058805a178cf9375b677364a5f854dc46f33a97fc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7b92655930db23ef331058805a178cf9375b677364a5f854dc46f33a97fc6f->enter($__internal_8a7b92655930db23ef331058805a178cf9375b677364a5f854dc46f33a97fc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_26ce33169a04f18421a7eddd819b2c933b128de8dce8d6e36dc7c91e90f0b86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ce33169a04f18421a7eddd819b2c933b128de8dce8d6e36dc7c91e90f0b86a->enter($__internal_26ce33169a04f18421a7eddd819b2c933b128de8dce8d6e36dc7c91e90f0b86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8a7b92655930db23ef331058805a178cf9375b677364a5f854dc46f33a97fc6f->leave($__internal_8a7b92655930db23ef331058805a178cf9375b677364a5f854dc46f33a97fc6f_prof);

        
        $__internal_26ce33169a04f18421a7eddd819b2c933b128de8dce8d6e36dc7c91e90f0b86a->leave($__internal_26ce33169a04f18421a7eddd819b2c933b128de8dce8d6e36dc7c91e90f0b86a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
