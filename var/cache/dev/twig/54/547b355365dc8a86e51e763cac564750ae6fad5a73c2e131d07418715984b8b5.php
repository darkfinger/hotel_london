<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_15c00127392710abb9a21bacbad0f804745c7f2ad4b33d5628346b8c9bb9edc8 extends Twig_Template
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
        $__internal_14626f6c617edf3f202a3e7950cabcceb82de2db9b6015a157c4a4cad84e4583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14626f6c617edf3f202a3e7950cabcceb82de2db9b6015a157c4a4cad84e4583->enter($__internal_14626f6c617edf3f202a3e7950cabcceb82de2db9b6015a157c4a4cad84e4583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_9313a8b477789726ce07c1b119af128a0dab57a49f09d166827d92ec137ae134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9313a8b477789726ce07c1b119af128a0dab57a49f09d166827d92ec137ae134->enter($__internal_9313a8b477789726ce07c1b119af128a0dab57a49f09d166827d92ec137ae134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_14626f6c617edf3f202a3e7950cabcceb82de2db9b6015a157c4a4cad84e4583->leave($__internal_14626f6c617edf3f202a3e7950cabcceb82de2db9b6015a157c4a4cad84e4583_prof);

        
        $__internal_9313a8b477789726ce07c1b119af128a0dab57a49f09d166827d92ec137ae134->leave($__internal_9313a8b477789726ce07c1b119af128a0dab57a49f09d166827d92ec137ae134_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
