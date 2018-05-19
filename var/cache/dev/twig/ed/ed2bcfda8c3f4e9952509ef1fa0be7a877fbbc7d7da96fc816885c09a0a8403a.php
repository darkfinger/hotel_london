<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_966c31e5eba600d44dd07f93b2e403c957bf8804aef09a9f8c45109fc681a15b extends Twig_Template
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
        $__internal_4ec050b72e25bb4792058cafdd16d73ddadf8e60bb21d2356f51d317bb8b2913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec050b72e25bb4792058cafdd16d73ddadf8e60bb21d2356f51d317bb8b2913->enter($__internal_4ec050b72e25bb4792058cafdd16d73ddadf8e60bb21d2356f51d317bb8b2913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_bffba94ca86b642f07cf12555666f73e032f8f56dd109edfe4c1fb74acd272eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffba94ca86b642f07cf12555666f73e032f8f56dd109edfe4c1fb74acd272eb->enter($__internal_bffba94ca86b642f07cf12555666f73e032f8f56dd109edfe4c1fb74acd272eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4ec050b72e25bb4792058cafdd16d73ddadf8e60bb21d2356f51d317bb8b2913->leave($__internal_4ec050b72e25bb4792058cafdd16d73ddadf8e60bb21d2356f51d317bb8b2913_prof);

        
        $__internal_bffba94ca86b642f07cf12555666f73e032f8f56dd109edfe4c1fb74acd272eb->leave($__internal_bffba94ca86b642f07cf12555666f73e032f8f56dd109edfe4c1fb74acd272eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
