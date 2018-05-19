<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_fe8050a2cbc9c395ed5994a58512bb40178dab386d86d6810aa8dad7bc83838a extends Twig_Template
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
        $__internal_575d390de85137e68a355ab3fbce60c04f80438c6e558adc7959e53e815cb1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575d390de85137e68a355ab3fbce60c04f80438c6e558adc7959e53e815cb1f5->enter($__internal_575d390de85137e68a355ab3fbce60c04f80438c6e558adc7959e53e815cb1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_612c03238a3f44ef3627ef30108b7b3c6305e5b38092e21ac088b85a9818daa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612c03238a3f44ef3627ef30108b7b3c6305e5b38092e21ac088b85a9818daa4->enter($__internal_612c03238a3f44ef3627ef30108b7b3c6305e5b38092e21ac088b85a9818daa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_575d390de85137e68a355ab3fbce60c04f80438c6e558adc7959e53e815cb1f5->leave($__internal_575d390de85137e68a355ab3fbce60c04f80438c6e558adc7959e53e815cb1f5_prof);

        
        $__internal_612c03238a3f44ef3627ef30108b7b3c6305e5b38092e21ac088b85a9818daa4->leave($__internal_612c03238a3f44ef3627ef30108b7b3c6305e5b38092e21ac088b85a9818daa4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
