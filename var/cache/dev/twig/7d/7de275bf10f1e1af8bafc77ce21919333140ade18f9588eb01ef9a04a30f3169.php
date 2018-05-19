<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7b2117e1ceccd64d72d5f05077f27c022ddb91b0a90b387bc397c3ed6c381f93 extends Twig_Template
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
        $__internal_1dc98aaf4c8551b97509e29fd11ad439f3107afcb2ce210dbe494770664805bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc98aaf4c8551b97509e29fd11ad439f3107afcb2ce210dbe494770664805bd->enter($__internal_1dc98aaf4c8551b97509e29fd11ad439f3107afcb2ce210dbe494770664805bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_71970229c4aac533c05a58ef8bbfee205acb1d7158977e63d50503576572d06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71970229c4aac533c05a58ef8bbfee205acb1d7158977e63d50503576572d06b->enter($__internal_71970229c4aac533c05a58ef8bbfee205acb1d7158977e63d50503576572d06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1dc98aaf4c8551b97509e29fd11ad439f3107afcb2ce210dbe494770664805bd->leave($__internal_1dc98aaf4c8551b97509e29fd11ad439f3107afcb2ce210dbe494770664805bd_prof);

        
        $__internal_71970229c4aac533c05a58ef8bbfee205acb1d7158977e63d50503576572d06b->leave($__internal_71970229c4aac533c05a58ef8bbfee205acb1d7158977e63d50503576572d06b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
