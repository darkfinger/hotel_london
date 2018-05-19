<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_acc67efbe8dfabf866610a8d2ddf729d502aec8ccff741537b46cc72db61ee6a extends Twig_Template
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
        $__internal_119aa97e158e4124383ce284ae5ed77cf5d8914a0d789ddf910ed4a95de69d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_119aa97e158e4124383ce284ae5ed77cf5d8914a0d789ddf910ed4a95de69d81->enter($__internal_119aa97e158e4124383ce284ae5ed77cf5d8914a0d789ddf910ed4a95de69d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f74a7680b489f2c0b609c724b954b37e4528cec6db1a8caa140385046d2ca2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74a7680b489f2c0b609c724b954b37e4528cec6db1a8caa140385046d2ca2df->enter($__internal_f74a7680b489f2c0b609c724b954b37e4528cec6db1a8caa140385046d2ca2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_119aa97e158e4124383ce284ae5ed77cf5d8914a0d789ddf910ed4a95de69d81->leave($__internal_119aa97e158e4124383ce284ae5ed77cf5d8914a0d789ddf910ed4a95de69d81_prof);

        
        $__internal_f74a7680b489f2c0b609c724b954b37e4528cec6db1a8caa140385046d2ca2df->leave($__internal_f74a7680b489f2c0b609c724b954b37e4528cec6db1a8caa140385046d2ca2df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
