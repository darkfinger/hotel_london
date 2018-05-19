<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9c416650d2b1e5ef1a8e7ebdf9f82637796b29a736f060a449d843af5f5b66e1 extends Twig_Template
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
        $__internal_e06130d2fc88c122629d8b90ec0c8f86f959c45f9c7d1635808de0c0000a6bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06130d2fc88c122629d8b90ec0c8f86f959c45f9c7d1635808de0c0000a6bab->enter($__internal_e06130d2fc88c122629d8b90ec0c8f86f959c45f9c7d1635808de0c0000a6bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e173473e424d24df4d9f4b1506d28a7e027b74fc9927f3ad296665f285dc4f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e173473e424d24df4d9f4b1506d28a7e027b74fc9927f3ad296665f285dc4f58->enter($__internal_e173473e424d24df4d9f4b1506d28a7e027b74fc9927f3ad296665f285dc4f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e06130d2fc88c122629d8b90ec0c8f86f959c45f9c7d1635808de0c0000a6bab->leave($__internal_e06130d2fc88c122629d8b90ec0c8f86f959c45f9c7d1635808de0c0000a6bab_prof);

        
        $__internal_e173473e424d24df4d9f4b1506d28a7e027b74fc9927f3ad296665f285dc4f58->leave($__internal_e173473e424d24df4d9f4b1506d28a7e027b74fc9927f3ad296665f285dc4f58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
