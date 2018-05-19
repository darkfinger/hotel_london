<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9ef369a0eeb937e09fc70afea8044e9a68d1b1c0247bd7907f7eb3b45eaa1377 extends Twig_Template
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
        $__internal_80c029d34a460db0394eb3e8ee25ccc6562f9b7a2cd25f2044da72a38f161341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c029d34a460db0394eb3e8ee25ccc6562f9b7a2cd25f2044da72a38f161341->enter($__internal_80c029d34a460db0394eb3e8ee25ccc6562f9b7a2cd25f2044da72a38f161341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_505dce0823569b0da62f5f0db93c24b3b07a0ae4c3b6d21112d1bf0a31b1b108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505dce0823569b0da62f5f0db93c24b3b07a0ae4c3b6d21112d1bf0a31b1b108->enter($__internal_505dce0823569b0da62f5f0db93c24b3b07a0ae4c3b6d21112d1bf0a31b1b108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_80c029d34a460db0394eb3e8ee25ccc6562f9b7a2cd25f2044da72a38f161341->leave($__internal_80c029d34a460db0394eb3e8ee25ccc6562f9b7a2cd25f2044da72a38f161341_prof);

        
        $__internal_505dce0823569b0da62f5f0db93c24b3b07a0ae4c3b6d21112d1bf0a31b1b108->leave($__internal_505dce0823569b0da62f5f0db93c24b3b07a0ae4c3b6d21112d1bf0a31b1b108_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
