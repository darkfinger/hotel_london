<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_55dc4ff4ec25618af240e492554721c72dfbb4129db45e92ccf57967e2af1292 extends Twig_Template
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
        $__internal_d06c811ebaebe8d7f06b1226cddf0684f1dc657ecf84f9d8c0676027f52ce215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06c811ebaebe8d7f06b1226cddf0684f1dc657ecf84f9d8c0676027f52ce215->enter($__internal_d06c811ebaebe8d7f06b1226cddf0684f1dc657ecf84f9d8c0676027f52ce215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_4681576580a2e8de23f69719c06bf129bb8020590056e1bf9746321b8dfeea2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4681576580a2e8de23f69719c06bf129bb8020590056e1bf9746321b8dfeea2b->enter($__internal_4681576580a2e8de23f69719c06bf129bb8020590056e1bf9746321b8dfeea2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d06c811ebaebe8d7f06b1226cddf0684f1dc657ecf84f9d8c0676027f52ce215->leave($__internal_d06c811ebaebe8d7f06b1226cddf0684f1dc657ecf84f9d8c0676027f52ce215_prof);

        
        $__internal_4681576580a2e8de23f69719c06bf129bb8020590056e1bf9746321b8dfeea2b->leave($__internal_4681576580a2e8de23f69719c06bf129bb8020590056e1bf9746321b8dfeea2b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "I:\\WorkSpace\\Udemy\\symfony 1h\\Ex_Files_Chapter2\\Exercise Files\\CH02\\02_02\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
