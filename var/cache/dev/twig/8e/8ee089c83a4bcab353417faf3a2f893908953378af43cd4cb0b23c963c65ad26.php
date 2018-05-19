<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a6c30209a0ee35b37683e288466f63f773d44181ece6d4f921f4433a2ec8b871 extends Twig_Template
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
        $__internal_59fde5903a9c6e40d3e344ef6bc248ce8079bfc77af8f2727816d68035764773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59fde5903a9c6e40d3e344ef6bc248ce8079bfc77af8f2727816d68035764773->enter($__internal_59fde5903a9c6e40d3e344ef6bc248ce8079bfc77af8f2727816d68035764773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3dd35e239ae9aae368e2b20db7195dcc94af3b17b43fb84b4171178f679cdb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd35e239ae9aae368e2b20db7195dcc94af3b17b43fb84b4171178f679cdb6d->enter($__internal_3dd35e239ae9aae368e2b20db7195dcc94af3b17b43fb84b4171178f679cdb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_59fde5903a9c6e40d3e344ef6bc248ce8079bfc77af8f2727816d68035764773->leave($__internal_59fde5903a9c6e40d3e344ef6bc248ce8079bfc77af8f2727816d68035764773_prof);

        
        $__internal_3dd35e239ae9aae368e2b20db7195dcc94af3b17b43fb84b4171178f679cdb6d->leave($__internal_3dd35e239ae9aae368e2b20db7195dcc94af3b17b43fb84b4171178f679cdb6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
