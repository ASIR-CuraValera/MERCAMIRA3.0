<?php

/* ::base.html.twig */
class __TwigTemplate_df72e7d9c5d9212aa9b2eab275e38b87f08c00b6028f4b8e5a046426f5fcb397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'sidenav' => array($this, 'block_sidenav'),
            'imput' => array($this, 'block_imput'),
            'iconos' => array($this, 'block_iconos'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d90dc8424799bb1b8764e12613726449352ddf220f760ad3a48bca531b8688d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90dc8424799bb1b8764e12613726449352ddf220f760ad3a48bca531b8688d5->enter($__internal_d90dc8424799bb1b8764e12613726449352ddf220f760ad3a48bca531b8688d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>


        <!-- FUENTES -->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
       

        <!-- ESTILOS PROPIOS -->

        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("base/base.css"), "html", null, true);
        echo "\"/>


        <!-- MATERIALIZE CSS -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">

        <!-- MATERIALIZE JS Y JQUERY -->
       <script src=\"https://code.jquery.com/jquery-3.2.1.js\"></script>
       <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>

        <!-- JS PROPIO -->

        <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("base/app.js"), "html", null, true);
        echo "\"></script>


       
        ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "        ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 34
        echo "

</head>
    <body>
<div class=\"linea\"></div>
     

<header>


<div class=\"contenido container\">
    
    <img class=\"logo\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("base/img/logo2.png"), "html", null, true);
        echo "\">   


";
        // line 49
        $this->displayBlock('sidenav', $context, $blocks);
        // line 52
        echo "





  
";
        // line 59
        $this->displayBlock('imput', $context, $blocks);
        // line 62
        echo "


";
        // line 65
        $this->displayBlock('iconos', $context, $blocks);
        // line 68
        echo "





</div>


 
</header>
  
    <main class=\"container\">
        ";
        // line 81
        $this->displayBlock('main', $context, $blocks);
        // line 82
        echo "
    </main>



    
        
 <footer id=\"color\" class=\"page-footer\">
          <div class=\"container\">
            <div class=\"row color\">
              <div class=\"col l6 s12\">
                <h5 class=\"white-text\">ENVIAR SUGERENCIAS</h5>
                <p class=\"grey-text text-lighten-4\">IMPUT</p>
              </div>
              <div class=\"col l4 offset-l2 s12\">
                <h5 class=\"white-text\"></h5>
                <ul>
                  <li><a class=\"grey-text text-lighten-3\" href=\"#!\">POR QUÉ COMPRAR</a></li>
                  <li><a class=\"grey-text text-lighten-3\" href=\"#!\">QUIÉNES SOMOS</a></li>
                  <li><a class=\"grey-text text-lighten-3\" href=\"#!\">CONTACTAR</a></li>
                  <li><a class=\"grey-text text-lighten-3\" href=\"#!\">OTROS</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"footer-copyright\">
            <div class=\"container\">
              
            © 2017 Javier Miras
            
            </div>
            
          </div>
        </footer>

  



       
    </body>
</html>
";
        
        $__internal_d90dc8424799bb1b8764e12613726449352ddf220f760ad3a48bca531b8688d5->leave($__internal_d90dc8424799bb1b8764e12613726449352ddf220f760ad3a48bca531b8688d5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b873d0e043fc00698a9bec81c6a5bceea0d72cf598139613a335256edbd3307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b873d0e043fc00698a9bec81c6a5bceea0d72cf598139613a335256edbd3307->enter($__internal_1b873d0e043fc00698a9bec81c6a5bceea0d72cf598139613a335256edbd3307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MERCAMIRA";
        
        $__internal_1b873d0e043fc00698a9bec81c6a5bceea0d72cf598139613a335256edbd3307->leave($__internal_1b873d0e043fc00698a9bec81c6a5bceea0d72cf598139613a335256edbd3307_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40fd522223ca88d76720290ef4043b6d759d73dce8aba32aa6d515c1e314a0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fd522223ca88d76720290ef4043b6d759d73dce8aba32aa6d515c1e314a0dc->enter($__internal_40fd522223ca88d76720290ef4043b6d759d73dce8aba32aa6d515c1e314a0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_40fd522223ca88d76720290ef4043b6d759d73dce8aba32aa6d515c1e314a0dc->leave($__internal_40fd522223ca88d76720290ef4043b6d759d73dce8aba32aa6d515c1e314a0dc_prof);

    }

    // line 33
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d70b1539680d974ed5aacaeadca133f0cd5770a198d06e2766726cee80322224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70b1539680d974ed5aacaeadca133f0cd5770a198d06e2766726cee80322224->enter($__internal_d70b1539680d974ed5aacaeadca133f0cd5770a198d06e2766726cee80322224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_d70b1539680d974ed5aacaeadca133f0cd5770a198d06e2766726cee80322224->leave($__internal_d70b1539680d974ed5aacaeadca133f0cd5770a198d06e2766726cee80322224_prof);

    }

    // line 49
    public function block_sidenav($context, array $blocks = array())
    {
        $__internal_9263530c50603769c76143c99972924470096cfd751bcc6271b435257854377e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9263530c50603769c76143c99972924470096cfd751bcc6271b435257854377e->enter($__internal_9263530c50603769c76143c99972924470096cfd751bcc6271b435257854377e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidenav"));

        // line 50
        echo "    
";
        
        $__internal_9263530c50603769c76143c99972924470096cfd751bcc6271b435257854377e->leave($__internal_9263530c50603769c76143c99972924470096cfd751bcc6271b435257854377e_prof);

    }

    // line 59
    public function block_imput($context, array $blocks = array())
    {
        $__internal_e93d85916980aad8298db3d4be37bdcdfe6be29f022c3d0c2eac166e9e3389dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93d85916980aad8298db3d4be37bdcdfe6be29f022c3d0c2eac166e9e3389dd->enter($__internal_e93d85916980aad8298db3d4be37bdcdfe6be29f022c3d0c2eac166e9e3389dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "imput"));

        // line 60
        echo "    
";
        
        $__internal_e93d85916980aad8298db3d4be37bdcdfe6be29f022c3d0c2eac166e9e3389dd->leave($__internal_e93d85916980aad8298db3d4be37bdcdfe6be29f022c3d0c2eac166e9e3389dd_prof);

    }

    // line 65
    public function block_iconos($context, array $blocks = array())
    {
        $__internal_8b0a75a15e80f004cdb71b37e19b5b1b877b6ea0fe90fe7de3bf6b662381dd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0a75a15e80f004cdb71b37e19b5b1b877b6ea0fe90fe7de3bf6b662381dd74->enter($__internal_8b0a75a15e80f004cdb71b37e19b5b1b877b6ea0fe90fe7de3bf6b662381dd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "iconos"));

        // line 66
        echo "
";
        
        $__internal_8b0a75a15e80f004cdb71b37e19b5b1b877b6ea0fe90fe7de3bf6b662381dd74->leave($__internal_8b0a75a15e80f004cdb71b37e19b5b1b877b6ea0fe90fe7de3bf6b662381dd74_prof);

    }

    // line 81
    public function block_main($context, array $blocks = array())
    {
        $__internal_d54910525d8e08c8b35e6447890780ca0d0c63575d68fbe81485e2227c813044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54910525d8e08c8b35e6447890780ca0d0c63575d68fbe81485e2227c813044->enter($__internal_d54910525d8e08c8b35e6447890780ca0d0c63575d68fbe81485e2227c813044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_d54910525d8e08c8b35e6447890780ca0d0c63575d68fbe81485e2227c813044->leave($__internal_d54910525d8e08c8b35e6447890780ca0d0c63575d68fbe81485e2227c813044_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 81,  250 => 66,  244 => 65,  236 => 60,  230 => 59,  222 => 50,  216 => 49,  205 => 33,  194 => 32,  182 => 5,  133 => 82,  131 => 81,  116 => 68,  114 => 65,  109 => 62,  107 => 59,  98 => 52,  96 => 49,  90 => 46,  76 => 34,  73 => 33,  71 => 32,  64 => 28,  49 => 16,  35 => 5,  29 => 1,);
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
        <title>{% block title %}MERCAMIRA{% endblock %}</title>
        
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>


        <!-- FUENTES -->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
       

        <!-- ESTILOS PROPIOS -->

        <link rel=\"stylesheet\" href=\"{{ asset('base/base.css')}}\"/>


        <!-- MATERIALIZE CSS -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">

        <!-- MATERIALIZE JS Y JQUERY -->
       <script src=\"https://code.jquery.com/jquery-3.2.1.js\"></script>
       <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>

        <!-- JS PROPIO -->

        <script type=\"text/javascript\" src=\"{{ asset('base/app.js')}}\"></script>


       
        {% block javascripts %}{% endblock %}
        {% block stylesheet %}{% endblock %}


</head>
    <body>
<div class=\"linea\"></div>
     

<header>


<div class=\"contenido container\">
    
    <img class=\"logo\" src=\"{{asset ('base/img/logo2.png')}}\">   


{% block sidenav %}
    
{% endblock %}






  
{% block imput %}
    
{% endblock %}



{% block iconos %}

{% endblock %}






</div>


 
</header>
  
    <main class=\"container\">
        {% block main %}{% endblock %}

    </main>



    
        
 <footer id=\"color\" class=\"page-footer\">
          <div class=\"container\">
            <div class=\"row color\">
              <div class=\"col l6 s12\">
                <h5 class=\"white-text\">ENVIAR SUGERENCIAS</h5>
                <p class=\"grey-text text-lighten-4\">IMPUT</p>
              </div>
              <div class=\"col l4 offset-l2 s12\">
                <h5 class=\"white-text\"></h5>
                <ul>
                  <li><a class=\"grey-text text-lighten-3\" href=\"#!\">POR QUÉ COMPRAR</a></li>
                  <li><a class=\"grey-text text-lighten-3\" href=\"#!\">QUIÉNES SOMOS</a></li>
                  <li><a class=\"grey-text text-lighten-3\" href=\"#!\">CONTACTAR</a></li>
                  <li><a class=\"grey-text text-lighten-3\" href=\"#!\">OTROS</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"footer-copyright\">
            <div class=\"container\">
              
            © 2017 Javier Miras
            
            </div>
            
          </div>
        </footer>

  



       
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\mercamira\\app/Resources\\views/base.html.twig");
    }
}
