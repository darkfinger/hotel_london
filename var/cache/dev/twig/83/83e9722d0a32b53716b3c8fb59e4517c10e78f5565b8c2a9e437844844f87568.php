<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7b8dedebbcaf0a4e981bec2f3859260da2ebd5acaa1d1b18c477fa7ae977e80f extends Twig_Template
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
        $__internal_ee63250d4f867c5d72a6a74c19fd05eb0ee5e86aeda49763c27dd0eef96a3641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee63250d4f867c5d72a6a74c19fd05eb0ee5e86aeda49763c27dd0eef96a3641->enter($__internal_ee63250d4f867c5d72a6a74c19fd05eb0ee5e86aeda49763c27dd0eef96a3641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_3ffcb904da6acc2237d7d3e7584dc0e737f13ea0ea2cead4a890131cb1b3cc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffcb904da6acc2237d7d3e7584dc0e737f13ea0ea2cead4a890131cb1b3cc79->enter($__internal_3ffcb904da6acc2237d7d3e7584dc0e737f13ea0ea2cead4a890131cb1b3cc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ee63250d4f867c5d72a6a74c19fd05eb0ee5e86aeda49763c27dd0eef96a3641->leave($__internal_ee63250d4f867c5d72a6a74c19fd05eb0ee5e86aeda49763c27dd0eef96a3641_prof);

        
        $__internal_3ffcb904da6acc2237d7d3e7584dc0e737f13ea0ea2cead4a890131cb1b3cc79->leave($__internal_3ffcb904da6acc2237d7d3e7584dc0e737f13ea0ea2cead4a890131cb1b3cc79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
