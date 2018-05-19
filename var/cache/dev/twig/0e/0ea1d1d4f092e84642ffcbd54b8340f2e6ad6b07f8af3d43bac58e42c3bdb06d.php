<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_dc947c03ff27153303aee18d5a493371064f8f2590e9dc6ee4a72b1ab21cc233 extends Twig_Template
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
        $__internal_a7b08597b968845caf7a7c2161b3ea3aedc7f1180cb113d2fe5e4a0e51329842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b08597b968845caf7a7c2161b3ea3aedc7f1180cb113d2fe5e4a0e51329842->enter($__internal_a7b08597b968845caf7a7c2161b3ea3aedc7f1180cb113d2fe5e4a0e51329842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_27eac53de3746fb10ad73b155e732ed347797b39088b33e1a824e579159df05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27eac53de3746fb10ad73b155e732ed347797b39088b33e1a824e579159df05e->enter($__internal_27eac53de3746fb10ad73b155e732ed347797b39088b33e1a824e579159df05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a7b08597b968845caf7a7c2161b3ea3aedc7f1180cb113d2fe5e4a0e51329842->leave($__internal_a7b08597b968845caf7a7c2161b3ea3aedc7f1180cb113d2fe5e4a0e51329842_prof);

        
        $__internal_27eac53de3746fb10ad73b155e732ed347797b39088b33e1a824e579159df05e->leave($__internal_27eac53de3746fb10ad73b155e732ed347797b39088b33e1a824e579159df05e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
