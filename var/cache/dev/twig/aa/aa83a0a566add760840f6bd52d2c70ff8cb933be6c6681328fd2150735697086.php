<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d5cca6cc74f015fb48d321ef79264e7cc69bfdadc255f22b73c3e73eed45a5a9 extends Twig_Template
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
        $__internal_e180fcc1da969a5fe09af4f0d981f60ff098ababa6c6a2e44dc4e492424141fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e180fcc1da969a5fe09af4f0d981f60ff098ababa6c6a2e44dc4e492424141fc->enter($__internal_e180fcc1da969a5fe09af4f0d981f60ff098ababa6c6a2e44dc4e492424141fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_1833bba9d58aa2d5351cca1fef46fecbedcfbce3a98e777ef67b2bbf7416c3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1833bba9d58aa2d5351cca1fef46fecbedcfbce3a98e777ef67b2bbf7416c3e2->enter($__internal_1833bba9d58aa2d5351cca1fef46fecbedcfbce3a98e777ef67b2bbf7416c3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e180fcc1da969a5fe09af4f0d981f60ff098ababa6c6a2e44dc4e492424141fc->leave($__internal_e180fcc1da969a5fe09af4f0d981f60ff098ababa6c6a2e44dc4e492424141fc_prof);

        
        $__internal_1833bba9d58aa2d5351cca1fef46fecbedcfbce3a98e777ef67b2bbf7416c3e2->leave($__internal_1833bba9d58aa2d5351cca1fef46fecbedcfbce3a98e777ef67b2bbf7416c3e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
