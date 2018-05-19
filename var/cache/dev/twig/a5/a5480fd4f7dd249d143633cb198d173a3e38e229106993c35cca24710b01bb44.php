<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8135d1f43ee6b5a5055b85c1b2dc042c7acc2eb5d13d68e6f011013f80d50cbb extends Twig_Template
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
        $__internal_41f74ca8f78aec2d0d945b4e2317df6190cd9d8766d0947e0937efbf6a25d3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f74ca8f78aec2d0d945b4e2317df6190cd9d8766d0947e0937efbf6a25d3c1->enter($__internal_41f74ca8f78aec2d0d945b4e2317df6190cd9d8766d0947e0937efbf6a25d3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b1b5dbe754fea7dde8aa38ef3a1d1fa2fd552785d56979d1d0ed8f67d8949ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b5dbe754fea7dde8aa38ef3a1d1fa2fd552785d56979d1d0ed8f67d8949ac3->enter($__internal_b1b5dbe754fea7dde8aa38ef3a1d1fa2fd552785d56979d1d0ed8f67d8949ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_41f74ca8f78aec2d0d945b4e2317df6190cd9d8766d0947e0937efbf6a25d3c1->leave($__internal_41f74ca8f78aec2d0d945b4e2317df6190cd9d8766d0947e0937efbf6a25d3c1_prof);

        
        $__internal_b1b5dbe754fea7dde8aa38ef3a1d1fa2fd552785d56979d1d0ed8f67d8949ac3->leave($__internal_b1b5dbe754fea7dde8aa38ef3a1d1fa2fd552785d56979d1d0ed8f67d8949ac3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
