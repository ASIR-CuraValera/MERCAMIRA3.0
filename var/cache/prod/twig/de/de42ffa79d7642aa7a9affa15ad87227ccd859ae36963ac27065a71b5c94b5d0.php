<?php

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_a45432dee9f4d0d789593168bad5951cd90b5420b5fc2af6b138170b1ad5bea9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'sidenav' => array($this, 'block_sidenav'),
            'imput' => array($this, 'block_imput'),
            'iconos' => array($this, 'block_iconos'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("frontend/frontend.css"), "html", null, true);
        echo "\">";
    }

    // line 6
    public function block_sidenav($context, array $blocks = array())
    {
        // line 7
        echo "
<ul id=\"slide-out\" class=\"side-nav\">

\t<li><a class=\"waves-effect\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listar", array("cat" => "all"));
        echo "\">TODAS</a></li>


";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 14
            echo "\t<li><a class=\"waves-effect\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listar", array("cat" => $this->getAttribute($context["c"], "categoriaid", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nombreCategoria", array()), "html", null, true);
            echo "</a></li>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  

\t

</ul>

\t<a href=\"#\" data-activates=\"slide-out\" id=\"color\" class=\"button-collapse btn-floating btn-large\"><i class=\"material-icons\">menu</i></a>

";
    }

    // line 30
    public function block_imput($context, array $blocks = array())
    {
        // line 31
        echo "
    <div class=\"imput\">
        <div class=\"input-field col s6 \">
              <input id=\"first_name\" type=\"text\" class=\"validate\" >
              <label for=\"first_name \">BUSCAR PRODUCTO</label>
        </div>
    </div>

";
    }

    // line 43
    public function block_iconos($context, array $blocks = array())
    {
        // line 44
        echo "
<a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backend_principal");
        echo "\"><i class=\"small material-icons logos color\">account_circle</i></a>
<a href=\"\"><i class=\"small material-icons logos color\">shopping_basket</i></a>

";
    }

    // line 52
    public function block_main($context, array $blocks = array())
    {
        // line 53
        echo "
<h4>LIBROS</h4>
<div class=\"barra\"></div>

  <div class=\"todos\">


    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["libros"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 61
            echo "      
       
    <div class=\"card hoverable\">
    <div class=\"card-image waves-effect waves-block waves-light\">
      <img id=\"imagenes\" class=\"activator\" src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("frontend/img/" . $this->getAttribute($context["l"], "imagen", array()))), "html", null, true);
            echo "\">

    </div>

    <div class=\"card-content\">
      <span class=\"card-title activator\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nombreLibro", array()), "html", null, true);
            echo "</span>
      <a class=\"precio\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "precio", array()), "html", null, true);
            echo "</a>
      </div>
      <div class=\"boton\">
        
      <a id=\"color\" class=\"waves-effect waves-light btn \">comprar</a>

    </div>
    <div class=\"card-reveal\">
      <span class=\"card-title grey-text text-darken-4\">Descripcion<i class=\"material-icons right\">close</i></span>
      <p>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "descripcion", array()), "html", null, true);
            echo "</p>
    </div>
  </div>
       
           
           
      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "  </div>
    


";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 88,  157 => 80,  145 => 71,  141 => 70,  133 => 65,  127 => 61,  123 => 60,  114 => 53,  111 => 52,  103 => 45,  100 => 44,  97 => 43,  85 => 31,  82 => 30,  70 => 17,  58 => 14,  54 => 13,  48 => 10,  43 => 7,  40 => 6,  32 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontendBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\mercamira\\src\\FrontendBundle/Resources/views/Default/index.html.twig");
    }
}
