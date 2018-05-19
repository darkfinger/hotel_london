<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_74b6eb33431e1d2269b8a34ddf75e4ac32bc6551b85f60c0f8b13f43a4f556e8 extends Twig_Template
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
        $__internal_59dd9e183689506b7b7f97eb476609bbcb45ec231c7b8e49756c5ce03ec0b529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59dd9e183689506b7b7f97eb476609bbcb45ec231c7b8e49756c5ce03ec0b529->enter($__internal_59dd9e183689506b7b7f97eb476609bbcb45ec231c7b8e49756c5ce03ec0b529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_8cacd9ab04e028de06fbeb829d08ce9ec4630f6c74e78340fe20334847cd4b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cacd9ab04e028de06fbeb829d08ce9ec4630f6c74e78340fe20334847cd4b0e->enter($__internal_8cacd9ab04e028de06fbeb829d08ce9ec4630f6c74e78340fe20334847cd4b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_59dd9e183689506b7b7f97eb476609bbcb45ec231c7b8e49756c5ce03ec0b529->leave($__internal_59dd9e183689506b7b7f97eb476609bbcb45ec231c7b8e49756c5ce03ec0b529_prof);

        
        $__internal_8cacd9ab04e028de06fbeb829d08ce9ec4630f6c74e78340fe20334847cd4b0e->leave($__internal_8cacd9ab04e028de06fbeb829d08ce9ec4630f6c74e78340fe20334847cd4b0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
