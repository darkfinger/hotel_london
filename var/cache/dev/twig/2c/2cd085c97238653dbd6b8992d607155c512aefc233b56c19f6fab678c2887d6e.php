<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_111cad5bc22582befb62fbb9e2be65f365aeb260496cf9bc6a6f79c66b67624f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17135661f453fd38ccd6c9cc1f2501623a26b8a25a8bd73f09f1c5dee3d665ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17135661f453fd38ccd6c9cc1f2501623a26b8a25a8bd73f09f1c5dee3d665ec->enter($__internal_17135661f453fd38ccd6c9cc1f2501623a26b8a25a8bd73f09f1c5dee3d665ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_a0842132157601780c611a00f89d225a2ac4fb51b6d0d15f362406af50313b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0842132157601780c611a00f89d225a2ac4fb51b6d0d15f362406af50313b39->enter($__internal_a0842132157601780c611a00f89d225a2ac4fb51b6d0d15f362406af50313b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_17135661f453fd38ccd6c9cc1f2501623a26b8a25a8bd73f09f1c5dee3d665ec->leave($__internal_17135661f453fd38ccd6c9cc1f2501623a26b8a25a8bd73f09f1c5dee3d665ec_prof);

        
        $__internal_a0842132157601780c611a00f89d225a2ac4fb51b6d0d15f362406af50313b39->leave($__internal_a0842132157601780c611a00f89d225a2ac4fb51b6d0d15f362406af50313b39_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0b7a93e25d966bdbc573d93d5c9cd33b1ab32acfef1491781f6276c4644da3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b7a93e25d966bdbc573d93d5c9cd33b1ab32acfef1491781f6276c4644da3c->enter($__internal_a0b7a93e25d966bdbc573d93d5c9cd33b1ab32acfef1491781f6276c4644da3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_adafbd926f8d9f90a99c392aef3f24354c57a3abe9ff79f7d11ec1c458f8ad68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adafbd926f8d9f90a99c392aef3f24354c57a3abe9ff79f7d11ec1c458f8ad68->enter($__internal_adafbd926f8d9f90a99c392aef3f24354c57a3abe9ff79f7d11ec1c458f8ad68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_adafbd926f8d9f90a99c392aef3f24354c57a3abe9ff79f7d11ec1c458f8ad68->leave($__internal_adafbd926f8d9f90a99c392aef3f24354c57a3abe9ff79f7d11ec1c458f8ad68_prof);

        
        $__internal_a0b7a93e25d966bdbc573d93d5c9cd33b1ab32acfef1491781f6276c4644da3c->leave($__internal_a0b7a93e25d966bdbc573d93d5c9cd33b1ab32acfef1491781f6276c4644da3c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
