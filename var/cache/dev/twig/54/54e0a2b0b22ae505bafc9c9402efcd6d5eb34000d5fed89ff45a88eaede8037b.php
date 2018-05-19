<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_117d7e6ba912c8024a0275b56ed8553d86fb57108b92f907017796efd08f20dd extends Twig_Template
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
        $__internal_ed2c1b9d61c052f5afba655855a7e7c0cfbd3c789c0468ba957f428b16d088cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2c1b9d61c052f5afba655855a7e7c0cfbd3c789c0468ba957f428b16d088cf->enter($__internal_ed2c1b9d61c052f5afba655855a7e7c0cfbd3c789c0468ba957f428b16d088cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_c1a2f5994bda0da9da11a968d346f82f64727c938069df2c51cd80dfa5d89328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a2f5994bda0da9da11a968d346f82f64727c938069df2c51cd80dfa5d89328->enter($__internal_c1a2f5994bda0da9da11a968d346f82f64727c938069df2c51cd80dfa5d89328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ed2c1b9d61c052f5afba655855a7e7c0cfbd3c789c0468ba957f428b16d088cf->leave($__internal_ed2c1b9d61c052f5afba655855a7e7c0cfbd3c789c0468ba957f428b16d088cf_prof);

        
        $__internal_c1a2f5994bda0da9da11a968d346f82f64727c938069df2c51cd80dfa5d89328->leave($__internal_c1a2f5994bda0da9da11a968d346f82f64727c938069df2c51cd80dfa5d89328_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
