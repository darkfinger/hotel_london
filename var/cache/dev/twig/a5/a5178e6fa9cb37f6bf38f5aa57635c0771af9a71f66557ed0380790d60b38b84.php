<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_27ea32d78ca7ec7014d1408831d6d540aea23ce2a4f50f184848a34b6ab01782 extends Twig_Template
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
        $__internal_60a0d31cb2c239cce079c3961904e7473951fd8f33a7097fe83022ba6b1187f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a0d31cb2c239cce079c3961904e7473951fd8f33a7097fe83022ba6b1187f4->enter($__internal_60a0d31cb2c239cce079c3961904e7473951fd8f33a7097fe83022ba6b1187f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4c27457f3a2595c0568f63ddcd838dd01e148266f9553dc8478f0caaea5dfb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c27457f3a2595c0568f63ddcd838dd01e148266f9553dc8478f0caaea5dfb10->enter($__internal_4c27457f3a2595c0568f63ddcd838dd01e148266f9553dc8478f0caaea5dfb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_60a0d31cb2c239cce079c3961904e7473951fd8f33a7097fe83022ba6b1187f4->leave($__internal_60a0d31cb2c239cce079c3961904e7473951fd8f33a7097fe83022ba6b1187f4_prof);

        
        $__internal_4c27457f3a2595c0568f63ddcd838dd01e148266f9553dc8478f0caaea5dfb10->leave($__internal_4c27457f3a2595c0568f63ddcd838dd01e148266f9553dc8478f0caaea5dfb10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
