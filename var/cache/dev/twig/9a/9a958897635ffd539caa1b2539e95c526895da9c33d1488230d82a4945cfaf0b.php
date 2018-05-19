<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_6fab1bb7aeb690b637254b9f083a29f2bbfa7ca82d585cf8d5f5672c35e23dba extends Twig_Template
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
        $__internal_735d8c496edf7a739a6a2cd5de5e6fba6f4bd312e70944048b3e907db8cd2c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735d8c496edf7a739a6a2cd5de5e6fba6f4bd312e70944048b3e907db8cd2c0e->enter($__internal_735d8c496edf7a739a6a2cd5de5e6fba6f4bd312e70944048b3e907db8cd2c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_02ce71e55b2fa34b8144e8e2875bef5d4c2b6deb543b57473fa5745b398e30aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ce71e55b2fa34b8144e8e2875bef5d4c2b6deb543b57473fa5745b398e30aa->enter($__internal_02ce71e55b2fa34b8144e8e2875bef5d4c2b6deb543b57473fa5745b398e30aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_735d8c496edf7a739a6a2cd5de5e6fba6f4bd312e70944048b3e907db8cd2c0e->leave($__internal_735d8c496edf7a739a6a2cd5de5e6fba6f4bd312e70944048b3e907db8cd2c0e_prof);

        
        $__internal_02ce71e55b2fa34b8144e8e2875bef5d4c2b6deb543b57473fa5745b398e30aa->leave($__internal_02ce71e55b2fa34b8144e8e2875bef5d4c2b6deb543b57473fa5745b398e30aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
