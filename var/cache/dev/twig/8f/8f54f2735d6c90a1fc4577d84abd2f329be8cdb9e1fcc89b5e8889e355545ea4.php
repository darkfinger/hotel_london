<?php

/* base.html.twig */
class __TwigTemplate_e1a21658618236c3ad4315e62836718610e2a7f3b7eb5435e504531ee60882fa extends Twig_Template
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
        $__internal_1f16918aec5a9d94c38bd3d98eba6efdf7d30aa26d2f56faeed1a3011476c255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f16918aec5a9d94c38bd3d98eba6efdf7d30aa26d2f56faeed1a3011476c255->enter($__internal_1f16918aec5a9d94c38bd3d98eba6efdf7d30aa26d2f56faeed1a3011476c255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e5229ff4014739dff5bcd0da526611fa273ef36f076418ebe4ae36bf26cc3e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5229ff4014739dff5bcd0da526611fa273ef36f076418ebe4ae36bf26cc3e0c->enter($__internal_e5229ff4014739dff5bcd0da526611fa273ef36f076418ebe4ae36bf26cc3e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Clients</a></li>
            <li><a href=\"#\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
";
        
        $__internal_1f16918aec5a9d94c38bd3d98eba6efdf7d30aa26d2f56faeed1a3011476c255->leave($__internal_1f16918aec5a9d94c38bd3d98eba6efdf7d30aa26d2f56faeed1a3011476c255_prof);

        
        $__internal_e5229ff4014739dff5bcd0da526611fa273ef36f076418ebe4ae36bf26cc3e0c->leave($__internal_e5229ff4014739dff5bcd0da526611fa273ef36f076418ebe4ae36bf26cc3e0c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_532c21c639760a3730dd71b157790f206ee606e5954def363ae5f39d4731ca20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532c21c639760a3730dd71b157790f206ee606e5954def363ae5f39d4731ca20->enter($__internal_532c21c639760a3730dd71b157790f206ee606e5954def363ae5f39d4731ca20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92fca52b9c3e295999902b1980e90549e31609eda14d6608d7cdbf532faf4aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fca52b9c3e295999902b1980e90549e31609eda14d6608d7cdbf532faf4aee->enter($__internal_92fca52b9c3e295999902b1980e90549e31609eda14d6608d7cdbf532faf4aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_92fca52b9c3e295999902b1980e90549e31609eda14d6608d7cdbf532faf4aee->leave($__internal_92fca52b9c3e295999902b1980e90549e31609eda14d6608d7cdbf532faf4aee_prof);

        
        $__internal_532c21c639760a3730dd71b157790f206ee606e5954def363ae5f39d4731ca20->leave($__internal_532c21c639760a3730dd71b157790f206ee606e5954def363ae5f39d4731ca20_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0405c1b54f9eefd2dce5256b16f14c2727bb2f8b1f46c86f0689332bc2b0947c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0405c1b54f9eefd2dce5256b16f14c2727bb2f8b1f46c86f0689332bc2b0947c->enter($__internal_0405c1b54f9eefd2dce5256b16f14c2727bb2f8b1f46c86f0689332bc2b0947c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b0fb98c2026b1a1e28e8395e49c8b7e6d0904262e2181165e882803d81a8afa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fb98c2026b1a1e28e8395e49c8b7e6d0904262e2181165e882803d81a8afa3->enter($__internal_b0fb98c2026b1a1e28e8395e49c8b7e6d0904262e2181165e882803d81a8afa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b0fb98c2026b1a1e28e8395e49c8b7e6d0904262e2181165e882803d81a8afa3->leave($__internal_b0fb98c2026b1a1e28e8395e49c8b7e6d0904262e2181165e882803d81a8afa3_prof);

        
        $__internal_0405c1b54f9eefd2dce5256b16f14c2727bb2f8b1f46c86f0689332bc2b0947c->leave($__internal_0405c1b54f9eefd2dce5256b16f14c2727bb2f8b1f46c86f0689332bc2b0947c_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_f62103d50efb837314a7b3b77633b84d64f1464d61347c5997d59980cb295809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62103d50efb837314a7b3b77633b84d64f1464d61347c5997d59980cb295809->enter($__internal_f62103d50efb837314a7b3b77633b84d64f1464d61347c5997d59980cb295809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7971305342d86d2503d06a9e075338be807d431f09f796405ccbcfd4b0c0449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7971305342d86d2503d06a9e075338be807d431f09f796405ccbcfd4b0c0449->enter($__internal_b7971305342d86d2503d06a9e075338be807d431f09f796405ccbcfd4b0c0449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b7971305342d86d2503d06a9e075338be807d431f09f796405ccbcfd4b0c0449->leave($__internal_b7971305342d86d2503d06a9e075338be807d431f09f796405ccbcfd4b0c0449_prof);

        
        $__internal_f62103d50efb837314a7b3b77633b84d64f1464d61347c5997d59980cb295809->leave($__internal_f62103d50efb837314a7b3b77633b84d64f1464d61347c5997d59980cb295809_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39cb3b974e9c5a3c45713cfe1318687b920cbcd1411490f01e26a5cff5a8abfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39cb3b974e9c5a3c45713cfe1318687b920cbcd1411490f01e26a5cff5a8abfe->enter($__internal_39cb3b974e9c5a3c45713cfe1318687b920cbcd1411490f01e26a5cff5a8abfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f396200d56a46de3ab3c45f907afb9fcfad920217a241d0d68c551a2b630ebd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f396200d56a46de3ab3c45f907afb9fcfad920217a241d0d68c551a2b630ebd9->enter($__internal_f396200d56a46de3ab3c45f907afb9fcfad920217a241d0d68c551a2b630ebd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f396200d56a46de3ab3c45f907afb9fcfad920217a241d0d68c551a2b630ebd9->leave($__internal_f396200d56a46de3ab3c45f907afb9fcfad920217a241d0d68c551a2b630ebd9_prof);

        
        $__internal_39cb3b974e9c5a3c45713cfe1318687b920cbcd1411490f01e26a5cff5a8abfe->leave($__internal_39cb3b974e9c5a3c45713cfe1318687b920cbcd1411490f01e26a5cff5a8abfe_prof);

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
        return array (  195 => 45,  178 => 31,  161 => 6,  143 => 5,  121 => 51,  117 => 50,  113 => 49,  109 => 48,  105 => 47,  100 => 46,  98 => 45,  83 => 32,  81 => 31,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Landon Hotel App{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Clients</a></li>
            <li><a href=\"#\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    {% block body %}{% endblock %}
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        {% block javascripts %}{% endblock %}
        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/learn-symfony-3/creating_routes/start/app/Resources/views/base.html.twig");
    }
}
