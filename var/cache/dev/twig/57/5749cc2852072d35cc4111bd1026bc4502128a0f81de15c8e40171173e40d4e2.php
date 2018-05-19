<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_cd5652ebacd9dfddf5784ed9afcdcc0904a62fe3c3f8dc825f8ab84b48236128 extends Twig_Template
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
        $__internal_cdc0f63b21421a6711a331efa6bf0e5eb64e7ee54367941bae6bec0494339066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc0f63b21421a6711a331efa6bf0e5eb64e7ee54367941bae6bec0494339066->enter($__internal_cdc0f63b21421a6711a331efa6bf0e5eb64e7ee54367941bae6bec0494339066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2b0aa26aa8cae354fa05c91bdbdf3e486fc8d257db4750e60988d5e8a06048da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0aa26aa8cae354fa05c91bdbdf3e486fc8d257db4750e60988d5e8a06048da->enter($__internal_2b0aa26aa8cae354fa05c91bdbdf3e486fc8d257db4750e60988d5e8a06048da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_cdc0f63b21421a6711a331efa6bf0e5eb64e7ee54367941bae6bec0494339066->leave($__internal_cdc0f63b21421a6711a331efa6bf0e5eb64e7ee54367941bae6bec0494339066_prof);

        
        $__internal_2b0aa26aa8cae354fa05c91bdbdf3e486fc8d257db4750e60988d5e8a06048da->leave($__internal_2b0aa26aa8cae354fa05c91bdbdf3e486fc8d257db4750e60988d5e8a06048da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
