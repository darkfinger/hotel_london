<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_67ed0b308a3b20af32497669367b6f76949cf51537563c750d886bdd9c14e7ab extends Twig_Template
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
        $__internal_87e4371f72f9f44deaedb36940b166e3e1795e8dc2c557b4e51f1adf74347862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e4371f72f9f44deaedb36940b166e3e1795e8dc2c557b4e51f1adf74347862->enter($__internal_87e4371f72f9f44deaedb36940b166e3e1795e8dc2c557b4e51f1adf74347862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8679e919e324d52b2d4482df176993c255c1d1d64b33ee05e5e7c0f5798d7e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8679e919e324d52b2d4482df176993c255c1d1d64b33ee05e5e7c0f5798d7e32->enter($__internal_8679e919e324d52b2d4482df176993c255c1d1d64b33ee05e5e7c0f5798d7e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_87e4371f72f9f44deaedb36940b166e3e1795e8dc2c557b4e51f1adf74347862->leave($__internal_87e4371f72f9f44deaedb36940b166e3e1795e8dc2c557b4e51f1adf74347862_prof);

        
        $__internal_8679e919e324d52b2d4482df176993c255c1d1d64b33ee05e5e7c0f5798d7e32->leave($__internal_8679e919e324d52b2d4482df176993c255c1d1d64b33ee05e5e7c0f5798d7e32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
