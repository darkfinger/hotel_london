<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c5574891a8b980cce628984681949843c286794583f49f0e9f1ff6b002d9074e extends Twig_Template
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
        $__internal_bf0b9d8813b7d84ae0352f92b85f96a4234c68e05115a61629d340cc4e15a77a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0b9d8813b7d84ae0352f92b85f96a4234c68e05115a61629d340cc4e15a77a->enter($__internal_bf0b9d8813b7d84ae0352f92b85f96a4234c68e05115a61629d340cc4e15a77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_d4f91be4e2fa7f0c5ff7c27fe68d2c9f70b3f6d6794e7f95ad6ffb7191bd2e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f91be4e2fa7f0c5ff7c27fe68d2c9f70b3f6d6794e7f95ad6ffb7191bd2e6e->enter($__internal_d4f91be4e2fa7f0c5ff7c27fe68d2c9f70b3f6d6794e7f95ad6ffb7191bd2e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_bf0b9d8813b7d84ae0352f92b85f96a4234c68e05115a61629d340cc4e15a77a->leave($__internal_bf0b9d8813b7d84ae0352f92b85f96a4234c68e05115a61629d340cc4e15a77a_prof);

        
        $__internal_d4f91be4e2fa7f0c5ff7c27fe68d2c9f70b3f6d6794e7f95ad6ffb7191bd2e6e->leave($__internal_d4f91be4e2fa7f0c5ff7c27fe68d2c9f70b3f6d6794e7f95ad6ffb7191bd2e6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
