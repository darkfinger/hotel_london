<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c894797157bdf3a7c1341bccd7bceff6a1f87da3d39b5477103fd25bd29f0c9b extends Twig_Template
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
        $__internal_a718799a1ec270503e02ca4d78f7419d4a197c4d06ae0309dd6b3b1fec26d118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a718799a1ec270503e02ca4d78f7419d4a197c4d06ae0309dd6b3b1fec26d118->enter($__internal_a718799a1ec270503e02ca4d78f7419d4a197c4d06ae0309dd6b3b1fec26d118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_77acf7698ed3ad674818f2b9a7e6623fe2cdd2c7bb0af624921c25d72c2e6a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77acf7698ed3ad674818f2b9a7e6623fe2cdd2c7bb0af624921c25d72c2e6a6e->enter($__internal_77acf7698ed3ad674818f2b9a7e6623fe2cdd2c7bb0af624921c25d72c2e6a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a718799a1ec270503e02ca4d78f7419d4a197c4d06ae0309dd6b3b1fec26d118->leave($__internal_a718799a1ec270503e02ca4d78f7419d4a197c4d06ae0309dd6b3b1fec26d118_prof);

        
        $__internal_77acf7698ed3ad674818f2b9a7e6623fe2cdd2c7bb0af624921c25d72c2e6a6e->leave($__internal_77acf7698ed3ad674818f2b9a7e6623fe2cdd2c7bb0af624921c25d72c2e6a6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
