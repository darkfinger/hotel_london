<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_08246d6fc50b9cb2f66a1e754433bcd9d9ae852716012dcf2b11d6975c1c9907 extends Twig_Template
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
        $__internal_d76007a355765fd907eb512a7c811f662a2f843b097bd40ad8396d5fa9c101d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76007a355765fd907eb512a7c811f662a2f843b097bd40ad8396d5fa9c101d7->enter($__internal_d76007a355765fd907eb512a7c811f662a2f843b097bd40ad8396d5fa9c101d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_82a8ffc5f372e470f9e8f4df1220d85027cd1db70d59c06430d6e0a0f64ad423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a8ffc5f372e470f9e8f4df1220d85027cd1db70d59c06430d6e0a0f64ad423->enter($__internal_82a8ffc5f372e470f9e8f4df1220d85027cd1db70d59c06430d6e0a0f64ad423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d76007a355765fd907eb512a7c811f662a2f843b097bd40ad8396d5fa9c101d7->leave($__internal_d76007a355765fd907eb512a7c811f662a2f843b097bd40ad8396d5fa9c101d7_prof);

        
        $__internal_82a8ffc5f372e470f9e8f4df1220d85027cd1db70d59c06430d6e0a0f64ad423->leave($__internal_82a8ffc5f372e470f9e8f4df1220d85027cd1db70d59c06430d6e0a0f64ad423_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
