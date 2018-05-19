<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1e7a1f8bab4e20aa4dbb7afd21f0d1832f11973f4703c9c645f0aa3e13638cc7 extends Twig_Template
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
        $__internal_6a020a9f72781381ea109f7f4ee4ab2296bcb9cfe996ff7eeb31132f18901bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a020a9f72781381ea109f7f4ee4ab2296bcb9cfe996ff7eeb31132f18901bfb->enter($__internal_6a020a9f72781381ea109f7f4ee4ab2296bcb9cfe996ff7eeb31132f18901bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_713a5ddafe3c3091c70d6e83bbc38436ff3f34bc9680c20b48bc8e3ec001a471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713a5ddafe3c3091c70d6e83bbc38436ff3f34bc9680c20b48bc8e3ec001a471->enter($__internal_713a5ddafe3c3091c70d6e83bbc38436ff3f34bc9680c20b48bc8e3ec001a471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6a020a9f72781381ea109f7f4ee4ab2296bcb9cfe996ff7eeb31132f18901bfb->leave($__internal_6a020a9f72781381ea109f7f4ee4ab2296bcb9cfe996ff7eeb31132f18901bfb_prof);

        
        $__internal_713a5ddafe3c3091c70d6e83bbc38436ff3f34bc9680c20b48bc8e3ec001a471->leave($__internal_713a5ddafe3c3091c70d6e83bbc38436ff3f34bc9680c20b48bc8e3ec001a471_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
