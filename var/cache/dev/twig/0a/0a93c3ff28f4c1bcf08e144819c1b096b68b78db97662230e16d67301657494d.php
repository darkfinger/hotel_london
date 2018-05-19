<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8d7fc57ec57976c834bdabbe0692a6b93448dc3d151726d1fff2da8573abd814 extends Twig_Template
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
        $__internal_0698dc0fc24ce6e542699155651c20bd276b0968a2a716b165d7e9b8c4c76c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0698dc0fc24ce6e542699155651c20bd276b0968a2a716b165d7e9b8c4c76c39->enter($__internal_0698dc0fc24ce6e542699155651c20bd276b0968a2a716b165d7e9b8c4c76c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_6ba6862eaeaf79bfb2bd71681e4f188dac287d824df8802e3322b828cf81c75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba6862eaeaf79bfb2bd71681e4f188dac287d824df8802e3322b828cf81c75c->enter($__internal_6ba6862eaeaf79bfb2bd71681e4f188dac287d824df8802e3322b828cf81c75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0698dc0fc24ce6e542699155651c20bd276b0968a2a716b165d7e9b8c4c76c39->leave($__internal_0698dc0fc24ce6e542699155651c20bd276b0968a2a716b165d7e9b8c4c76c39_prof);

        
        $__internal_6ba6862eaeaf79bfb2bd71681e4f188dac287d824df8802e3322b828cf81c75c->leave($__internal_6ba6862eaeaf79bfb2bd71681e4f188dac287d824df8802e3322b828cf81c75c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
