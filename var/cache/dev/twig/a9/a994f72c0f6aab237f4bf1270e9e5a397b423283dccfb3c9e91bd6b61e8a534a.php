<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f98984adee02d152b80e35d966878cf5bb2a7fff21c8ed03e615c8da3e44d481 extends Twig_Template
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
        $__internal_44c0081a1137c12cc230b57bb13a0ef944ce835b555102fcdaf599315ce5a590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c0081a1137c12cc230b57bb13a0ef944ce835b555102fcdaf599315ce5a590->enter($__internal_44c0081a1137c12cc230b57bb13a0ef944ce835b555102fcdaf599315ce5a590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_18c50453d3f5585822b86e8144453c026ffb1d3a44218606654f2bbfbed088fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c50453d3f5585822b86e8144453c026ffb1d3a44218606654f2bbfbed088fa->enter($__internal_18c50453d3f5585822b86e8144453c026ffb1d3a44218606654f2bbfbed088fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_44c0081a1137c12cc230b57bb13a0ef944ce835b555102fcdaf599315ce5a590->leave($__internal_44c0081a1137c12cc230b57bb13a0ef944ce835b555102fcdaf599315ce5a590_prof);

        
        $__internal_18c50453d3f5585822b86e8144453c026ffb1d3a44218606654f2bbfbed088fa->leave($__internal_18c50453d3f5585822b86e8144453c026ffb1d3a44218606654f2bbfbed088fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
