<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7a6fdc327dc8747a13a5413a15b34c103ab647e65b3b9f71cd948e3de5a6b772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_425891e273e89a0516d89013c60049b315cdce1f03fcb33048fc4b80f309e6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425891e273e89a0516d89013c60049b315cdce1f03fcb33048fc4b80f309e6a4->enter($__internal_425891e273e89a0516d89013c60049b315cdce1f03fcb33048fc4b80f309e6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_c4315a3a0c2de8451c072de676c165458139e3f227f4e366a25cbeeccb68ec62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4315a3a0c2de8451c072de676c165458139e3f227f4e366a25cbeeccb68ec62->enter($__internal_c4315a3a0c2de8451c072de676c165458139e3f227f4e366a25cbeeccb68ec62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_425891e273e89a0516d89013c60049b315cdce1f03fcb33048fc4b80f309e6a4->leave($__internal_425891e273e89a0516d89013c60049b315cdce1f03fcb33048fc4b80f309e6a4_prof);

        
        $__internal_c4315a3a0c2de8451c072de676c165458139e3f227f4e366a25cbeeccb68ec62->leave($__internal_c4315a3a0c2de8451c072de676c165458139e3f227f4e366a25cbeeccb68ec62_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eab308fd2370f318c6e6524d876ce05e187f5ba89552e5982d5fdacce4a3b684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab308fd2370f318c6e6524d876ce05e187f5ba89552e5982d5fdacce4a3b684->enter($__internal_eab308fd2370f318c6e6524d876ce05e187f5ba89552e5982d5fdacce4a3b684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_470842d47987e4c365b1374d6489e8e0e74fbee1ae71a9424a60d0464166c2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470842d47987e4c365b1374d6489e8e0e74fbee1ae71a9424a60d0464166c2b4->enter($__internal_470842d47987e4c365b1374d6489e8e0e74fbee1ae71a9424a60d0464166c2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_470842d47987e4c365b1374d6489e8e0e74fbee1ae71a9424a60d0464166c2b4->leave($__internal_470842d47987e4c365b1374d6489e8e0e74fbee1ae71a9424a60d0464166c2b4_prof);

        
        $__internal_eab308fd2370f318c6e6524d876ce05e187f5ba89552e5982d5fdacce4a3b684->leave($__internal_eab308fd2370f318c6e6524d876ce05e187f5ba89552e5982d5fdacce4a3b684_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eb60d71bec793fa55654231d62eb2a56e068be071f21f726f07bad32e145554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb60d71bec793fa55654231d62eb2a56e068be071f21f726f07bad32e145554->enter($__internal_9eb60d71bec793fa55654231d62eb2a56e068be071f21f726f07bad32e145554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cdefc1bdb3ec50afdbad621f81e5cba85234425f0fe5e214cacc4dcc64fe02b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdefc1bdb3ec50afdbad621f81e5cba85234425f0fe5e214cacc4dcc64fe02b4->enter($__internal_cdefc1bdb3ec50afdbad621f81e5cba85234425f0fe5e214cacc4dcc64fe02b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cdefc1bdb3ec50afdbad621f81e5cba85234425f0fe5e214cacc4dcc64fe02b4->leave($__internal_cdefc1bdb3ec50afdbad621f81e5cba85234425f0fe5e214cacc4dcc64fe02b4_prof);

        
        $__internal_9eb60d71bec793fa55654231d62eb2a56e068be071f21f726f07bad32e145554->leave($__internal_9eb60d71bec793fa55654231d62eb2a56e068be071f21f726f07bad32e145554_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
