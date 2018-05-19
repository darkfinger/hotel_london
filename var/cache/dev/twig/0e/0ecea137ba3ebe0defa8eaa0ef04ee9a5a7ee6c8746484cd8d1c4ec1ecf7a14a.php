<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_208be8c6764811f33bd143a36f331c65ffd53d52cb9aecbcf5d11fb50be0281c extends Twig_Template
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
        $__internal_582dec7834705132c305a7e8c28e303b0980fd202059c30ff9f94ae10fdca359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582dec7834705132c305a7e8c28e303b0980fd202059c30ff9f94ae10fdca359->enter($__internal_582dec7834705132c305a7e8c28e303b0980fd202059c30ff9f94ae10fdca359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a4c92d60d398bcdc5fa5a70732119447bb53d1f0e9fb9f9c1049e6fdf2fa20d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c92d60d398bcdc5fa5a70732119447bb53d1f0e9fb9f9c1049e6fdf2fa20d2->enter($__internal_a4c92d60d398bcdc5fa5a70732119447bb53d1f0e9fb9f9c1049e6fdf2fa20d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_582dec7834705132c305a7e8c28e303b0980fd202059c30ff9f94ae10fdca359->leave($__internal_582dec7834705132c305a7e8c28e303b0980fd202059c30ff9f94ae10fdca359_prof);

        
        $__internal_a4c92d60d398bcdc5fa5a70732119447bb53d1f0e9fb9f9c1049e6fdf2fa20d2->leave($__internal_a4c92d60d398bcdc5fa5a70732119447bb53d1f0e9fb9f9c1049e6fdf2fa20d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
