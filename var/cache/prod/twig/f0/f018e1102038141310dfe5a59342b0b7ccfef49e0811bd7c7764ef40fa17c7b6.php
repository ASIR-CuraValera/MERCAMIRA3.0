<?php

/* ::base.html.twig */
class __TwigTemplate_3f21bec4fe6764637cfbaee0a8b4c9e364a3c77fb2db8f084ac9040fabbaa74e extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "MERCAMIRA";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 33
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 49
    public function block_sidenav($context, array $blocks = array())
    {
        // line 50
        echo "    
";
    }

    // line 59
    public function block_imput($context, array $blocks = array())
    {
        // line 60
        echo "    
";
    }

    // line 65
    public function block_iconos($context, array $blocks = array())
    {
        // line 66
        echo "
";
    }

    // line 81
    public function block_main($context, array $blocks = array())
    {
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
        return array (  216 => 81,  211 => 66,  208 => 65,  203 => 60,  200 => 59,  195 => 50,  192 => 49,  187 => 33,  182 => 32,  176 => 5,  130 => 82,  128 => 81,  113 => 68,  111 => 65,  106 => 62,  104 => 59,  95 => 52,  93 => 49,  87 => 46,  73 => 34,  70 => 33,  68 => 32,  61 => 28,  46 => 16,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "C:\\xampp\\htdocs\\mercamira\\app/Resources\\views/base.html.twig");
    }
}
