<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_44bf8ebaa60aa3923717b0613d579fb96e739e4724e4bed73bdd8897a5366928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24f95df61eb3a2bd905f5c7c5f26826f3ddcc739f3b61da52a87d81c97809157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f95df61eb3a2bd905f5c7c5f26826f3ddcc739f3b61da52a87d81c97809157->enter($__internal_24f95df61eb3a2bd905f5c7c5f26826f3ddcc739f3b61da52a87d81c97809157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_c5944e46076064cc8f65df6a34ea2cf16346c1a780bcebf2ef2aaa77114c137a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5944e46076064cc8f65df6a34ea2cf16346c1a780bcebf2ef2aaa77114c137a->enter($__internal_c5944e46076064cc8f65df6a34ea2cf16346c1a780bcebf2ef2aaa77114c137a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f95df61eb3a2bd905f5c7c5f26826f3ddcc739f3b61da52a87d81c97809157->leave($__internal_24f95df61eb3a2bd905f5c7c5f26826f3ddcc739f3b61da52a87d81c97809157_prof);

        
        $__internal_c5944e46076064cc8f65df6a34ea2cf16346c1a780bcebf2ef2aaa77114c137a->leave($__internal_c5944e46076064cc8f65df6a34ea2cf16346c1a780bcebf2ef2aaa77114c137a_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_78d444caac1c65e55780b18793ea1f0fd8fbfcb88e37612379e94294ab33b059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d444caac1c65e55780b18793ea1f0fd8fbfcb88e37612379e94294ab33b059->enter($__internal_78d444caac1c65e55780b18793ea1f0fd8fbfcb88e37612379e94294ab33b059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f6f0bceb66c2321bbde70d4697d2cd2e47e119dc0f4cf2a67f511ed5b4a8202b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f0bceb66c2321bbde70d4697d2cd2e47e119dc0f4cf2a67f511ed5b4a8202b->enter($__internal_f6f0bceb66c2321bbde70d4697d2cd2e47e119dc0f4cf2a67f511ed5b4a8202b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_f6f0bceb66c2321bbde70d4697d2cd2e47e119dc0f4cf2a67f511ed5b4a8202b->leave($__internal_f6f0bceb66c2321bbde70d4697d2cd2e47e119dc0f4cf2a67f511ed5b4a8202b_prof);

        
        $__internal_78d444caac1c65e55780b18793ea1f0fd8fbfcb88e37612379e94294ab33b059->leave($__internal_78d444caac1c65e55780b18793ea1f0fd8fbfcb88e37612379e94294ab33b059_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_944d9827edeefdf7146b7b0827b5b1a7683db012770f5702333736caee1c22ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944d9827edeefdf7146b7b0827b5b1a7683db012770f5702333736caee1c22ac->enter($__internal_944d9827edeefdf7146b7b0827b5b1a7683db012770f5702333736caee1c22ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_996c58630ca39c2d872a234a9e54b0b8d753226e4d732095c39a3671eab4b0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996c58630ca39c2d872a234a9e54b0b8d753226e4d732095c39a3671eab4b0ea->enter($__internal_996c58630ca39c2d872a234a9e54b0b8d753226e4d732095c39a3671eab4b0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_996c58630ca39c2d872a234a9e54b0b8d753226e4d732095c39a3671eab4b0ea->leave($__internal_996c58630ca39c2d872a234a9e54b0b8d753226e4d732095c39a3671eab4b0ea_prof);

        
        $__internal_944d9827edeefdf7146b7b0827b5b1a7683db012770f5702333736caee1c22ac->leave($__internal_944d9827edeefdf7146b7b0827b5b1a7683db012770f5702333736caee1c22ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
