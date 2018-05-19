<?php

/* base.html.twig */
class __TwigTemplate_9a3807c73db04dc25e20a7ad187b929620ee17c3605c897e97bb9bb361cfd085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3602fb1db325bfafe34bc0635d7d779ff6c1ca90ba208e2db8cfa8dab30e08c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3602fb1db325bfafe34bc0635d7d779ff6c1ca90ba208e2db8cfa8dab30e08c0->enter($__internal_3602fb1db325bfafe34bc0635d7d779ff6c1ca90ba208e2db8cfa8dab30e08c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7f0742ced3d5dcc42c43792cfe45fe6e1a7984fae41c5313e7e9a80f4a59587d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0742ced3d5dcc42c43792cfe45fe6e1a7984fae41c5313e7e9a80f4a59587d->enter($__internal_7f0742ced3d5dcc42c43792cfe45fe6e1a7984fae41c5313e7e9a80f4a59587d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3602fb1db325bfafe34bc0635d7d779ff6c1ca90ba208e2db8cfa8dab30e08c0->leave($__internal_3602fb1db325bfafe34bc0635d7d779ff6c1ca90ba208e2db8cfa8dab30e08c0_prof);

        
        $__internal_7f0742ced3d5dcc42c43792cfe45fe6e1a7984fae41c5313e7e9a80f4a59587d->leave($__internal_7f0742ced3d5dcc42c43792cfe45fe6e1a7984fae41c5313e7e9a80f4a59587d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c67df13859a335b4d9ca1a60615bb77eb18e2c9f6af1bf859d9700876f3f682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c67df13859a335b4d9ca1a60615bb77eb18e2c9f6af1bf859d9700876f3f682->enter($__internal_3c67df13859a335b4d9ca1a60615bb77eb18e2c9f6af1bf859d9700876f3f682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a8b3eaa74d5872760eb1eab681fa35eb0046428428b35c27a5e6ebf4eac7bc74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b3eaa74d5872760eb1eab681fa35eb0046428428b35c27a5e6ebf4eac7bc74->enter($__internal_a8b3eaa74d5872760eb1eab681fa35eb0046428428b35c27a5e6ebf4eac7bc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a8b3eaa74d5872760eb1eab681fa35eb0046428428b35c27a5e6ebf4eac7bc74->leave($__internal_a8b3eaa74d5872760eb1eab681fa35eb0046428428b35c27a5e6ebf4eac7bc74_prof);

        
        $__internal_3c67df13859a335b4d9ca1a60615bb77eb18e2c9f6af1bf859d9700876f3f682->leave($__internal_3c67df13859a335b4d9ca1a60615bb77eb18e2c9f6af1bf859d9700876f3f682_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40ccd48749282e5f0660f39f53b281d93ff40721295a4494ac5b4344bb0c0154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ccd48749282e5f0660f39f53b281d93ff40721295a4494ac5b4344bb0c0154->enter($__internal_40ccd48749282e5f0660f39f53b281d93ff40721295a4494ac5b4344bb0c0154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a191cbeb58b3b7c4fb93c6b37255e406b0bdafe07756956bf043a3e69dcd34a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a191cbeb58b3b7c4fb93c6b37255e406b0bdafe07756956bf043a3e69dcd34a0->enter($__internal_a191cbeb58b3b7c4fb93c6b37255e406b0bdafe07756956bf043a3e69dcd34a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a191cbeb58b3b7c4fb93c6b37255e406b0bdafe07756956bf043a3e69dcd34a0->leave($__internal_a191cbeb58b3b7c4fb93c6b37255e406b0bdafe07756956bf043a3e69dcd34a0_prof);

        
        $__internal_40ccd48749282e5f0660f39f53b281d93ff40721295a4494ac5b4344bb0c0154->leave($__internal_40ccd48749282e5f0660f39f53b281d93ff40721295a4494ac5b4344bb0c0154_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_920f529575aeb0af42b17c2081e5be257945495c19f5bfb43d0c01a48c748cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920f529575aeb0af42b17c2081e5be257945495c19f5bfb43d0c01a48c748cc5->enter($__internal_920f529575aeb0af42b17c2081e5be257945495c19f5bfb43d0c01a48c748cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6436047c5ba34f4ad63a54406278dca891ec33f9bfeabf587c5aa34a927b4db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6436047c5ba34f4ad63a54406278dca891ec33f9bfeabf587c5aa34a927b4db->enter($__internal_d6436047c5ba34f4ad63a54406278dca891ec33f9bfeabf587c5aa34a927b4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d6436047c5ba34f4ad63a54406278dca891ec33f9bfeabf587c5aa34a927b4db->leave($__internal_d6436047c5ba34f4ad63a54406278dca891ec33f9bfeabf587c5aa34a927b4db_prof);

        
        $__internal_920f529575aeb0af42b17c2081e5be257945495c19f5bfb43d0c01a48c748cc5->leave($__internal_920f529575aeb0af42b17c2081e5be257945495c19f5bfb43d0c01a48c748cc5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7664f0ef046923b910dee032235d9dc432db407148c1b8ffc40b6bbc27ff7296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7664f0ef046923b910dee032235d9dc432db407148c1b8ffc40b6bbc27ff7296->enter($__internal_7664f0ef046923b910dee032235d9dc432db407148c1b8ffc40b6bbc27ff7296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_068e0da3c7b24a3b4d0304fb42e64ff2c48cb3fafb143304f3ce521e4b614015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068e0da3c7b24a3b4d0304fb42e64ff2c48cb3fafb143304f3ce521e4b614015->enter($__internal_068e0da3c7b24a3b4d0304fb42e64ff2c48cb3fafb143304f3ce521e4b614015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_068e0da3c7b24a3b4d0304fb42e64ff2c48cb3fafb143304f3ce521e4b614015->leave($__internal_068e0da3c7b24a3b4d0304fb42e64ff2c48cb3fafb143304f3ce521e4b614015_prof);

        
        $__internal_7664f0ef046923b910dee032235d9dc432db407148c1b8ffc40b6bbc27ff7296->leave($__internal_7664f0ef046923b910dee032235d9dc432db407148c1b8ffc40b6bbc27ff7296_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/learn-symfony-3/creating_routes/start/app/Resources/views/base.html.twig");
    }
}
