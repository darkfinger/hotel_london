<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_6c2a44b87bf9f49fbc0b4be3750016bd380ada46eef127a512ee3808f984a286 extends Twig_Template
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
        $__internal_c081c6e6745410198936dfaecc7d570537c6b81d52abeea43986265877b1557f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c081c6e6745410198936dfaecc7d570537c6b81d52abeea43986265877b1557f->enter($__internal_c081c6e6745410198936dfaecc7d570537c6b81d52abeea43986265877b1557f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_8ee578db7fe5dd2c5c033bd99fb3ebbd090f17c0e15083e3c96126ba74c6f9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee578db7fe5dd2c5c033bd99fb3ebbd090f17c0e15083e3c96126ba74c6f9ff->enter($__internal_8ee578db7fe5dd2c5c033bd99fb3ebbd090f17c0e15083e3c96126ba74c6f9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c081c6e6745410198936dfaecc7d570537c6b81d52abeea43986265877b1557f->leave($__internal_c081c6e6745410198936dfaecc7d570537c6b81d52abeea43986265877b1557f_prof);

        
        $__internal_8ee578db7fe5dd2c5c033bd99fb3ebbd090f17c0e15083e3c96126ba74c6f9ff->leave($__internal_8ee578db7fe5dd2c5c033bd99fb3ebbd090f17c0e15083e3c96126ba74c6f9ff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
