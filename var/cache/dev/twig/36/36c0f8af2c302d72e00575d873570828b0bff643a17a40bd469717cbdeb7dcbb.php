<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0d48afd35a046e2b2baa6070668a4a3311cbcce476240d4c94916fabf34a99bd extends Twig_Template
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
        $__internal_7a897e6c36c8871bc5daa53a1c05e0dfacf5a9a46c6771a4588de46b4f728fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a897e6c36c8871bc5daa53a1c05e0dfacf5a9a46c6771a4588de46b4f728fdc->enter($__internal_7a897e6c36c8871bc5daa53a1c05e0dfacf5a9a46c6771a4588de46b4f728fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2cf63e182df48d0f95cab6e22b2ba55c9af50185d25ac85e31029f2e34c0fcea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf63e182df48d0f95cab6e22b2ba55c9af50185d25ac85e31029f2e34c0fcea->enter($__internal_2cf63e182df48d0f95cab6e22b2ba55c9af50185d25ac85e31029f2e34c0fcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7a897e6c36c8871bc5daa53a1c05e0dfacf5a9a46c6771a4588de46b4f728fdc->leave($__internal_7a897e6c36c8871bc5daa53a1c05e0dfacf5a9a46c6771a4588de46b4f728fdc_prof);

        
        $__internal_2cf63e182df48d0f95cab6e22b2ba55c9af50185d25ac85e31029f2e34c0fcea->leave($__internal_2cf63e182df48d0f95cab6e22b2ba55c9af50185d25ac85e31029f2e34c0fcea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
