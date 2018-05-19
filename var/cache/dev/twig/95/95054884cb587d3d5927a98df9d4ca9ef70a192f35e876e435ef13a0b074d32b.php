<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_560e8b52d178a5a334d440485f5e98e60f11474ae76e82c895bc816739d46ed5 extends Twig_Template
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
        $__internal_a1f703a8a9158c972f12191a96435f672225a4f17cd76025af75835c6aaa3c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f703a8a9158c972f12191a96435f672225a4f17cd76025af75835c6aaa3c2f->enter($__internal_a1f703a8a9158c972f12191a96435f672225a4f17cd76025af75835c6aaa3c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_4ef8368f04b5bc8a48bdf04f801859522cdacc3f3b5c5ab73a2f26f7ac6915fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef8368f04b5bc8a48bdf04f801859522cdacc3f3b5c5ab73a2f26f7ac6915fe->enter($__internal_4ef8368f04b5bc8a48bdf04f801859522cdacc3f3b5c5ab73a2f26f7ac6915fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a1f703a8a9158c972f12191a96435f672225a4f17cd76025af75835c6aaa3c2f->leave($__internal_a1f703a8a9158c972f12191a96435f672225a4f17cd76025af75835c6aaa3c2f_prof);

        
        $__internal_4ef8368f04b5bc8a48bdf04f801859522cdacc3f3b5c5ab73a2f26f7ac6915fe->leave($__internal_4ef8368f04b5bc8a48bdf04f801859522cdacc3f3b5c5ab73a2f26f7ac6915fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
