<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2876ca16d5c07b86cb194c73514e1def2ed1e7f254770bedd482dd06f0e666ab extends Twig_Template
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
        $__internal_4b8357c051c8ab911f229f1628fb472b3731d690842b06927abb42c1357b7fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8357c051c8ab911f229f1628fb472b3731d690842b06927abb42c1357b7fdf->enter($__internal_4b8357c051c8ab911f229f1628fb472b3731d690842b06927abb42c1357b7fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_20202010a67af1b0e600902204828d3017bc34aadafcf305b188c13f5b9f735a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20202010a67af1b0e600902204828d3017bc34aadafcf305b188c13f5b9f735a->enter($__internal_20202010a67af1b0e600902204828d3017bc34aadafcf305b188c13f5b9f735a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4b8357c051c8ab911f229f1628fb472b3731d690842b06927abb42c1357b7fdf->leave($__internal_4b8357c051c8ab911f229f1628fb472b3731d690842b06927abb42c1357b7fdf_prof);

        
        $__internal_20202010a67af1b0e600902204828d3017bc34aadafcf305b188c13f5b9f735a->leave($__internal_20202010a67af1b0e600902204828d3017bc34aadafcf305b188c13f5b9f735a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
