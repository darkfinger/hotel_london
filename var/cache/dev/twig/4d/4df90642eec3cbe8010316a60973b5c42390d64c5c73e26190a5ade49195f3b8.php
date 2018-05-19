<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2256ecca45113b85f61bda3af7ace20b8e4179eac1b60fcbdcb2ec05e5ed29ac extends Twig_Template
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
        $__internal_ba853ff2cb8e276db6d21c3e26e7b2fd32808915a275d28deaedf8da977dff55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba853ff2cb8e276db6d21c3e26e7b2fd32808915a275d28deaedf8da977dff55->enter($__internal_ba853ff2cb8e276db6d21c3e26e7b2fd32808915a275d28deaedf8da977dff55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_3a7e05e696bfcaf15464139de91916d5ee37aa8990ded50e7d32af5dce4dda74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7e05e696bfcaf15464139de91916d5ee37aa8990ded50e7d32af5dce4dda74->enter($__internal_3a7e05e696bfcaf15464139de91916d5ee37aa8990ded50e7d32af5dce4dda74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ba853ff2cb8e276db6d21c3e26e7b2fd32808915a275d28deaedf8da977dff55->leave($__internal_ba853ff2cb8e276db6d21c3e26e7b2fd32808915a275d28deaedf8da977dff55_prof);

        
        $__internal_3a7e05e696bfcaf15464139de91916d5ee37aa8990ded50e7d32af5dce4dda74->leave($__internal_3a7e05e696bfcaf15464139de91916d5ee37aa8990ded50e7d32af5dce4dda74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
