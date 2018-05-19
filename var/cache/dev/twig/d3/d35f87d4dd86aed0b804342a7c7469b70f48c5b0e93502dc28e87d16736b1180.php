<?php

/* base.html.twig */
class __TwigTemplate_ffa44970f2e5bc024032da2d395f4da665393d30b585f984685e93e787b682ab extends Twig_Template
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
        $__internal_14e578b96b3038f59aa8dcfb2d91fcd37011552ad34be476275f4119cdf20799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e578b96b3038f59aa8dcfb2d91fcd37011552ad34be476275f4119cdf20799->enter($__internal_14e578b96b3038f59aa8dcfb2d91fcd37011552ad34be476275f4119cdf20799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a0335120628e9b3ff8481a76c09c279f3cda92e22ae7494a78187e13d6980315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0335120628e9b3ff8481a76c09c279f3cda92e22ae7494a78187e13d6980315->enter($__internal_a0335120628e9b3ff8481a76c09c279f3cda92e22ae7494a78187e13d6980315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_clients");
        echo "\">Clients</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservations");
        echo "\">Reservations</a></li>
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
        
        $__internal_14e578b96b3038f59aa8dcfb2d91fcd37011552ad34be476275f4119cdf20799->leave($__internal_14e578b96b3038f59aa8dcfb2d91fcd37011552ad34be476275f4119cdf20799_prof);

        
        $__internal_a0335120628e9b3ff8481a76c09c279f3cda92e22ae7494a78187e13d6980315->leave($__internal_a0335120628e9b3ff8481a76c09c279f3cda92e22ae7494a78187e13d6980315_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_83b191288a7e2ea4d2b7e11dee32479098b672eeef39424b8a2efcdde443d22b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b191288a7e2ea4d2b7e11dee32479098b672eeef39424b8a2efcdde443d22b->enter($__internal_83b191288a7e2ea4d2b7e11dee32479098b672eeef39424b8a2efcdde443d22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_242a1183d7060e2f7441078ef889b2a1df528f624512c59417994e2901ce9afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242a1183d7060e2f7441078ef889b2a1df528f624512c59417994e2901ce9afa->enter($__internal_242a1183d7060e2f7441078ef889b2a1df528f624512c59417994e2901ce9afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_242a1183d7060e2f7441078ef889b2a1df528f624512c59417994e2901ce9afa->leave($__internal_242a1183d7060e2f7441078ef889b2a1df528f624512c59417994e2901ce9afa_prof);

        
        $__internal_83b191288a7e2ea4d2b7e11dee32479098b672eeef39424b8a2efcdde443d22b->leave($__internal_83b191288a7e2ea4d2b7e11dee32479098b672eeef39424b8a2efcdde443d22b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d42523db9e9490d692897329f03526169ce3ee65f7f7ecbe9da5d5e5d63e963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d42523db9e9490d692897329f03526169ce3ee65f7f7ecbe9da5d5e5d63e963->enter($__internal_7d42523db9e9490d692897329f03526169ce3ee65f7f7ecbe9da5d5e5d63e963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0b554683824e3462cf570dc70b7a86feff45662b252da34f51b2005781c40360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b554683824e3462cf570dc70b7a86feff45662b252da34f51b2005781c40360->enter($__internal_0b554683824e3462cf570dc70b7a86feff45662b252da34f51b2005781c40360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0b554683824e3462cf570dc70b7a86feff45662b252da34f51b2005781c40360->leave($__internal_0b554683824e3462cf570dc70b7a86feff45662b252da34f51b2005781c40360_prof);

        
        $__internal_7d42523db9e9490d692897329f03526169ce3ee65f7f7ecbe9da5d5e5d63e963->leave($__internal_7d42523db9e9490d692897329f03526169ce3ee65f7f7ecbe9da5d5e5d63e963_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffcf5fc63d9ae4bb8ec0c91872483a0d24d41cf2b061d974aaeb530ab95e5f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffcf5fc63d9ae4bb8ec0c91872483a0d24d41cf2b061d974aaeb530ab95e5f8d->enter($__internal_ffcf5fc63d9ae4bb8ec0c91872483a0d24d41cf2b061d974aaeb530ab95e5f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d4af36caba88bf1d4eba9520ea7b5dc93cb2d5ee8c81985feceeb96d00bf6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4af36caba88bf1d4eba9520ea7b5dc93cb2d5ee8c81985feceeb96d00bf6df->enter($__internal_4d4af36caba88bf1d4eba9520ea7b5dc93cb2d5ee8c81985feceeb96d00bf6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4d4af36caba88bf1d4eba9520ea7b5dc93cb2d5ee8c81985feceeb96d00bf6df->leave($__internal_4d4af36caba88bf1d4eba9520ea7b5dc93cb2d5ee8c81985feceeb96d00bf6df_prof);

        
        $__internal_ffcf5fc63d9ae4bb8ec0c91872483a0d24d41cf2b061d974aaeb530ab95e5f8d->leave($__internal_ffcf5fc63d9ae4bb8ec0c91872483a0d24d41cf2b061d974aaeb530ab95e5f8d_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff63784c9b0a759fece7eedeefad7f5607416c121a80fea2db4bccd41c9a49e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff63784c9b0a759fece7eedeefad7f5607416c121a80fea2db4bccd41c9a49e1->enter($__internal_ff63784c9b0a759fece7eedeefad7f5607416c121a80fea2db4bccd41c9a49e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_af5a8ea469c42b39606a6124e26ca09a93044bce4aa0fe2234cec2f82fe73142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5a8ea469c42b39606a6124e26ca09a93044bce4aa0fe2234cec2f82fe73142->enter($__internal_af5a8ea469c42b39606a6124e26ca09a93044bce4aa0fe2234cec2f82fe73142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_af5a8ea469c42b39606a6124e26ca09a93044bce4aa0fe2234cec2f82fe73142->leave($__internal_af5a8ea469c42b39606a6124e26ca09a93044bce4aa0fe2234cec2f82fe73142_prof);

        
        $__internal_ff63784c9b0a759fece7eedeefad7f5607416c121a80fea2db4bccd41c9a49e1->leave($__internal_ff63784c9b0a759fece7eedeefad7f5607416c121a80fea2db4bccd41c9a49e1_prof);

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
        return array (  204 => 45,  187 => 31,  170 => 6,  152 => 5,  130 => 51,  126 => 50,  122 => 49,  118 => 48,  114 => 47,  109 => 46,  107 => 45,  92 => 32,  90 => 31,  78 => 22,  74 => 21,  70 => 20,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
            <li><a href=\"{{ path(\"home\") }}\">Home</a></li>
            <li><a href=\"{{ path(\"index_clients\") }}\">Clients</a></li>
            <li><a href=\"{{ path(\"reservations\") }}\">Reservations</a></li>
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
", "base.html.twig", "I:\\WorkSpace\\Udemy\\symfony 1h\\Ex_Files_Chapter2\\Exercise Files\\CH02\\02_02\\start\\app\\Resources\\views\\base.html.twig");
    }
}
