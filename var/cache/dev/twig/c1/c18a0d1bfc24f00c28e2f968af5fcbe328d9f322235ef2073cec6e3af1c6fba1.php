<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b4ab0f48e35d788846c09bea88b0a9bbc4773e662c28c735c4f7216f52d4696b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5552dedf51b296a1bf6f61cad3e5ca836ebdf65265ac50e9995e224a9750062d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5552dedf51b296a1bf6f61cad3e5ca836ebdf65265ac50e9995e224a9750062d->enter($__internal_5552dedf51b296a1bf6f61cad3e5ca836ebdf65265ac50e9995e224a9750062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_76a8dcf2fb75ff33ef46bacaf328070eeb7012bce649f2a4df6968ee9b5e1b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a8dcf2fb75ff33ef46bacaf328070eeb7012bce649f2a4df6968ee9b5e1b91->enter($__internal_76a8dcf2fb75ff33ef46bacaf328070eeb7012bce649f2a4df6968ee9b5e1b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5552dedf51b296a1bf6f61cad3e5ca836ebdf65265ac50e9995e224a9750062d->leave($__internal_5552dedf51b296a1bf6f61cad3e5ca836ebdf65265ac50e9995e224a9750062d_prof);

        
        $__internal_76a8dcf2fb75ff33ef46bacaf328070eeb7012bce649f2a4df6968ee9b5e1b91->leave($__internal_76a8dcf2fb75ff33ef46bacaf328070eeb7012bce649f2a4df6968ee9b5e1b91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6532be74509cf510a09bb6f3b25c9fdc44b4483f84527e4c4692386d4a79da96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6532be74509cf510a09bb6f3b25c9fdc44b4483f84527e4c4692386d4a79da96->enter($__internal_6532be74509cf510a09bb6f3b25c9fdc44b4483f84527e4c4692386d4a79da96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e5faf0b1c7f388051aaf0cda1da59ad72487b079256a2c7d2bb652e57e6d2414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5faf0b1c7f388051aaf0cda1da59ad72487b079256a2c7d2bb652e57e6d2414->enter($__internal_e5faf0b1c7f388051aaf0cda1da59ad72487b079256a2c7d2bb652e57e6d2414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e5faf0b1c7f388051aaf0cda1da59ad72487b079256a2c7d2bb652e57e6d2414->leave($__internal_e5faf0b1c7f388051aaf0cda1da59ad72487b079256a2c7d2bb652e57e6d2414_prof);

        
        $__internal_6532be74509cf510a09bb6f3b25c9fdc44b4483f84527e4c4692386d4a79da96->leave($__internal_6532be74509cf510a09bb6f3b25c9fdc44b4483f84527e4c4692386d4a79da96_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_303ba1e9bd3c0daa4e3c2360aa295d8cb924f92e1f5a05944e4aa91f54cc3317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303ba1e9bd3c0daa4e3c2360aa295d8cb924f92e1f5a05944e4aa91f54cc3317->enter($__internal_303ba1e9bd3c0daa4e3c2360aa295d8cb924f92e1f5a05944e4aa91f54cc3317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0434368800d61f162ef04f92319d0020fb3a7b17531138c170fe6121a8d1588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0434368800d61f162ef04f92319d0020fb3a7b17531138c170fe6121a8d1588->enter($__internal_a0434368800d61f162ef04f92319d0020fb3a7b17531138c170fe6121a8d1588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0434368800d61f162ef04f92319d0020fb3a7b17531138c170fe6121a8d1588->leave($__internal_a0434368800d61f162ef04f92319d0020fb3a7b17531138c170fe6121a8d1588_prof);

        
        $__internal_303ba1e9bd3c0daa4e3c2360aa295d8cb924f92e1f5a05944e4aa91f54cc3317->leave($__internal_303ba1e9bd3c0daa4e3c2360aa295d8cb924f92e1f5a05944e4aa91f54cc3317_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e15ae6320c406fcc6e1cf89bbcecdc8ec978616d20844c560069daff9e29b818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e15ae6320c406fcc6e1cf89bbcecdc8ec978616d20844c560069daff9e29b818->enter($__internal_e15ae6320c406fcc6e1cf89bbcecdc8ec978616d20844c560069daff9e29b818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2481f329b4299a39292a05b6609ba7b4f573ac25fe3428847f685816f0512eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2481f329b4299a39292a05b6609ba7b4f573ac25fe3428847f685816f0512eed->enter($__internal_2481f329b4299a39292a05b6609ba7b4f573ac25fe3428847f685816f0512eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2481f329b4299a39292a05b6609ba7b4f573ac25fe3428847f685816f0512eed->leave($__internal_2481f329b4299a39292a05b6609ba7b4f573ac25fe3428847f685816f0512eed_prof);

        
        $__internal_e15ae6320c406fcc6e1cf89bbcecdc8ec978616d20844c560069daff9e29b818->leave($__internal_e15ae6320c406fcc6e1cf89bbcecdc8ec978616d20844c560069daff9e29b818_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/learn-symfony-3/creating_routes/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
