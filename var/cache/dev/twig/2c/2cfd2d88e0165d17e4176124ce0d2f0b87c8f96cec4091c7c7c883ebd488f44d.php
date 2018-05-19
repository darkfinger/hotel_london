<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_126ff0bbf48f3cb1013d0339b5f96018de579560c1e7852b08a3b1a3badc6868 extends Twig_Template
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
        $__internal_d4961d2089aaca78fded40d60ab6157a1de735a846ce5375662ad76c90b4a621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4961d2089aaca78fded40d60ab6157a1de735a846ce5375662ad76c90b4a621->enter($__internal_d4961d2089aaca78fded40d60ab6157a1de735a846ce5375662ad76c90b4a621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_598310a262945211bb2ba0985677850d9cb3ca0d8f0f14233c065fb6826cd204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598310a262945211bb2ba0985677850d9cb3ca0d8f0f14233c065fb6826cd204->enter($__internal_598310a262945211bb2ba0985677850d9cb3ca0d8f0f14233c065fb6826cd204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d4961d2089aaca78fded40d60ab6157a1de735a846ce5375662ad76c90b4a621->leave($__internal_d4961d2089aaca78fded40d60ab6157a1de735a846ce5375662ad76c90b4a621_prof);

        
        $__internal_598310a262945211bb2ba0985677850d9cb3ca0d8f0f14233c065fb6826cd204->leave($__internal_598310a262945211bb2ba0985677850d9cb3ca0d8f0f14233c065fb6826cd204_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
