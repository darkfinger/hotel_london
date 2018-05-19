<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4b2e27988eed615d35295441117f8caf5fbec0967cbda51c9f86f9e55d4bde81 extends Twig_Template
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
        $__internal_f53eb2169689e3c47608f58cefbf5311225a90f2331d0dd3ba405c07756e5733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53eb2169689e3c47608f58cefbf5311225a90f2331d0dd3ba405c07756e5733->enter($__internal_f53eb2169689e3c47608f58cefbf5311225a90f2331d0dd3ba405c07756e5733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_689bd801dc682443051363cc48f75baae299f57e4842fd2d4beec374dbdc41fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689bd801dc682443051363cc48f75baae299f57e4842fd2d4beec374dbdc41fe->enter($__internal_689bd801dc682443051363cc48f75baae299f57e4842fd2d4beec374dbdc41fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f53eb2169689e3c47608f58cefbf5311225a90f2331d0dd3ba405c07756e5733->leave($__internal_f53eb2169689e3c47608f58cefbf5311225a90f2331d0dd3ba405c07756e5733_prof);

        
        $__internal_689bd801dc682443051363cc48f75baae299f57e4842fd2d4beec374dbdc41fe->leave($__internal_689bd801dc682443051363cc48f75baae299f57e4842fd2d4beec374dbdc41fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
