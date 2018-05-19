<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ef0bec61c4b2aa57b76a1d82b09797bc1877fb49da66dfdc43a5ff03a830d3a6 extends Twig_Template
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
        $__internal_93bb60d190f52186eb32db783976e1bcb45a1c52077f6b2dcd85042c1611c347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93bb60d190f52186eb32db783976e1bcb45a1c52077f6b2dcd85042c1611c347->enter($__internal_93bb60d190f52186eb32db783976e1bcb45a1c52077f6b2dcd85042c1611c347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_8e3007485b183cda801a434f8bcd54add984d8d7c596688e711f61f853ab68b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3007485b183cda801a434f8bcd54add984d8d7c596688e711f61f853ab68b6->enter($__internal_8e3007485b183cda801a434f8bcd54add984d8d7c596688e711f61f853ab68b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_93bb60d190f52186eb32db783976e1bcb45a1c52077f6b2dcd85042c1611c347->leave($__internal_93bb60d190f52186eb32db783976e1bcb45a1c52077f6b2dcd85042c1611c347_prof);

        
        $__internal_8e3007485b183cda801a434f8bcd54add984d8d7c596688e711f61f853ab68b6->leave($__internal_8e3007485b183cda801a434f8bcd54add984d8d7c596688e711f61f853ab68b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
