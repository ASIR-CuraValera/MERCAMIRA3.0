<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_87e342315b9252f747410d45e49966c8733156fb74f8ae30cdb6fe5d38276d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
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

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 4
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/backend.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 8
    public function block_iconos($context, array $blocks = array())
    {
        // line 9
        echo "
<a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frontend_principal");
        echo "\" class=\"volver color\"><i class=\"small material-icons logos \">arrow_back</i>VOLVER</a>

";
    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
        // line 17
        echo "    
<h4>Insertar Libros</h4>
<div class=\"barra\"></div>


    
   
<table class=\"highlight\">
    <thead>
          <tr>
              <th>Imagen</th>
              <th>Libro_id</th>
              <th>Nombre_libro</th>
              <th>Descripcion</th>
              <th>Precio</th>
              
              <th>Categoriaid</th>
              <th>Editoriaid</th>
              <th>Insertar libro</th>
          </tr>
        </thead>



";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["libros"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 42
            echo "       

        <tbody>
          <tr>
              <th><img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("frontend/img/" . $this->getAttribute($context["l"], "imagen", array()))), "html", null, true);
            echo "\"></th>
              <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "libroId", array()), "html", null, true);
            echo "</th>
              <th>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nombreLibro", array()), "html", null, true);
            echo "</th>
              <th>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "descripcion", array()), "html", null, true);
            echo "</th>
              <th>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "precio", array()), "html", null, true);
            echo "</th>
              
              <th>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "categoriaid", array()), "nombreCategoria", array()), "html", null, true);
            echo "</th>
              <th>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "editorid", array()), "nombreEditorial", array()), "html", null, true);
            echo "</th>
              

          </tr>
          
        </tbody>
            





";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
      </table>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 66,  117 => 53,  113 => 52,  108 => 50,  104 => 49,  100 => 48,  96 => 47,  92 => 46,  86 => 42,  82 => 41,  56 => 17,  53 => 16,  46 => 10,  43 => 9,  40 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\mercamira\\src\\AppBundle/Resources/views/Default/index.html.twig");
    }
}
