<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8b87475347bcd6bc9fe060ec4260beea5b38d682fdb039cd2a60fac765d81f92 extends Twig_Template
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
        $__internal_80b56d9acc1b00d6d35fe2e3778f4e5e07d4596d460ad9499e5e33cb92c09b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b56d9acc1b00d6d35fe2e3778f4e5e07d4596d460ad9499e5e33cb92c09b9f->enter($__internal_80b56d9acc1b00d6d35fe2e3778f4e5e07d4596d460ad9499e5e33cb92c09b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_81cdddce15406815d028e99503fe474a2d1cfc37bee0b8a146b9d12551884e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cdddce15406815d028e99503fe474a2d1cfc37bee0b8a146b9d12551884e10->enter($__internal_81cdddce15406815d028e99503fe474a2d1cfc37bee0b8a146b9d12551884e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_80b56d9acc1b00d6d35fe2e3778f4e5e07d4596d460ad9499e5e33cb92c09b9f->leave($__internal_80b56d9acc1b00d6d35fe2e3778f4e5e07d4596d460ad9499e5e33cb92c09b9f_prof);

        
        $__internal_81cdddce15406815d028e99503fe474a2d1cfc37bee0b8a146b9d12551884e10->leave($__internal_81cdddce15406815d028e99503fe474a2d1cfc37bee0b8a146b9d12551884e10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
