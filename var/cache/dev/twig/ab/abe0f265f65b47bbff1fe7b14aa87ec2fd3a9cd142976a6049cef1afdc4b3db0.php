<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_495cfb1d25d8f3bdec897196383990c2ecbced19b77ac0f19df36d603f51b252 extends Twig_Template
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
        $__internal_b434542805f86107715fa6540e60684b873c739e84bd78412f927be1adf565e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b434542805f86107715fa6540e60684b873c739e84bd78412f927be1adf565e8->enter($__internal_b434542805f86107715fa6540e60684b873c739e84bd78412f927be1adf565e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_67439c1060b767684316c78a86c5cda07d1870a0a2a590d72424bf66fa8e46de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67439c1060b767684316c78a86c5cda07d1870a0a2a590d72424bf66fa8e46de->enter($__internal_67439c1060b767684316c78a86c5cda07d1870a0a2a590d72424bf66fa8e46de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b434542805f86107715fa6540e60684b873c739e84bd78412f927be1adf565e8->leave($__internal_b434542805f86107715fa6540e60684b873c739e84bd78412f927be1adf565e8_prof);

        
        $__internal_67439c1060b767684316c78a86c5cda07d1870a0a2a590d72424bf66fa8e46de->leave($__internal_67439c1060b767684316c78a86c5cda07d1870a0a2a590d72424bf66fa8e46de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
