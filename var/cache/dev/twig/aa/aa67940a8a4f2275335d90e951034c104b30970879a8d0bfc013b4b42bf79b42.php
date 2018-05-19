<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3bebc8679f9932a3df7e07ad45f5a9b8adbda48f5750ff05169b957a8855987c extends Twig_Template
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
        $__internal_3e72a214aa5d8ca17a8274ef888e4698411a5d8390def9e31535fe0049a5f77f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e72a214aa5d8ca17a8274ef888e4698411a5d8390def9e31535fe0049a5f77f->enter($__internal_3e72a214aa5d8ca17a8274ef888e4698411a5d8390def9e31535fe0049a5f77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_fecb3c85930cc8eb1ef24d468631c4c99e585ae6c5e7241fa86d7b2c5278c47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fecb3c85930cc8eb1ef24d468631c4c99e585ae6c5e7241fa86d7b2c5278c47e->enter($__internal_fecb3c85930cc8eb1ef24d468631c4c99e585ae6c5e7241fa86d7b2c5278c47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3e72a214aa5d8ca17a8274ef888e4698411a5d8390def9e31535fe0049a5f77f->leave($__internal_3e72a214aa5d8ca17a8274ef888e4698411a5d8390def9e31535fe0049a5f77f_prof);

        
        $__internal_fecb3c85930cc8eb1ef24d468631c4c99e585ae6c5e7241fa86d7b2c5278c47e->leave($__internal_fecb3c85930cc8eb1ef24d468631c4c99e585ae6c5e7241fa86d7b2c5278c47e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
