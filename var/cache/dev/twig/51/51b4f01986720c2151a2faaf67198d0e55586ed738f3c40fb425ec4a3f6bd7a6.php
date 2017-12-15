<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_59be3ea0cf9477c92d298d6ea21181a4cf56fef1410a051009f5645247606d66 extends Twig_Template
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
        $__internal_5c3fe225e010ef2c5a33a680af92b1ea62d7c324fa134aaf1f87cec6d0ec9381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3fe225e010ef2c5a33a680af92b1ea62d7c324fa134aaf1f87cec6d0ec9381->enter($__internal_5c3fe225e010ef2c5a33a680af92b1ea62d7c324fa134aaf1f87cec6d0ec9381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c3fe225e010ef2c5a33a680af92b1ea62d7c324fa134aaf1f87cec6d0ec9381->leave($__internal_5c3fe225e010ef2c5a33a680af92b1ea62d7c324fa134aaf1f87cec6d0ec9381_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_08ed8722e62ee929a365d84f636ddab3484121932d18b79fc8775b674c43cc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ed8722e62ee929a365d84f636ddab3484121932d18b79fc8775b674c43cc35->enter($__internal_08ed8722e62ee929a365d84f636ddab3484121932d18b79fc8775b674c43cc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/backend.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\"/>

";
        
        $__internal_08ed8722e62ee929a365d84f636ddab3484121932d18b79fc8775b674c43cc35->leave($__internal_08ed8722e62ee929a365d84f636ddab3484121932d18b79fc8775b674c43cc35_prof);

    }

    // line 10
    public function block_iconos($context, array $blocks = array())
    {
        $__internal_a77937d8584fe499aa1d2ac3f69f00fb8a587896c8ead099080c3b4c4cb4108b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77937d8584fe499aa1d2ac3f69f00fb8a587896c8ead099080c3b4c4cb4108b->enter($__internal_a77937d8584fe499aa1d2ac3f69f00fb8a587896c8ead099080c3b4c4cb4108b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "iconos"));

        // line 11
        echo "
<a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frontend_principal");
        echo "\" class=\"volver color\"><i class=\"small material-icons logos \">arrow_back</i>VOLVER</a>

";
        
        $__internal_a77937d8584fe499aa1d2ac3f69f00fb8a587896c8ead099080c3b4c4cb4108b->leave($__internal_a77937d8584fe499aa1d2ac3f69f00fb8a587896c8ead099080c3b4c4cb4108b_prof);

    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        $__internal_91c514d2015e5df6db6fdce9fe1754f8e4854728d9b419b778d3194e6bd06eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c514d2015e5df6db6fdce9fe1754f8e4854728d9b419b778d3194e6bd06eb1->enter($__internal_91c514d2015e5df6db6fdce9fe1754f8e4854728d9b419b778d3194e6bd06eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "    
<h1>Insertar Libros</h1>


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
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 44
            echo "       

        <tbody>
          <tr>
              <th><img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("frontend/img/" . $this->getAttribute($context["l"], "imagen", array()))), "html", null, true);
            echo "\"></th>
              <th>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "libroId", array()), "html", null, true);
            echo "</th>
              <th>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nombreLibro", array()), "html", null, true);
            echo "</th>
              <th>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "descripcion", array()), "html", null, true);
            echo "</th>
              <th>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "precio", array()), "html", null, true);
            echo "</th>
              
              <th>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "categoriaid", array()), "nombreCategoria", array()), "html", null, true);
            echo "</th>
              <th>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "editorid", array()), "nombreEditorial", array()), "html", null, true);
            echo "</th>
              

          </tr>
          
        </tbody>
            





";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "




      </table>

<div class=\"pagination\">
    ";
        // line 76
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
</div>

";
        
        $__internal_91c514d2015e5df6db6fdce9fe1754f8e4854728d9b419b778d3194e6bd06eb1->leave($__internal_91c514d2015e5df6db6fdce9fe1754f8e4854728d9b419b778d3194e6bd06eb1_prof);

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
        return array (  169 => 76,  159 => 68,  140 => 55,  136 => 54,  131 => 52,  127 => 51,  123 => 50,  119 => 49,  115 => 48,  109 => 44,  105 => 43,  79 => 19,  73 => 18,  63 => 12,  60 => 11,  54 => 10,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('backend/backend.css')}}\"/>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\"/>

{% endblock %}


{% block iconos %}

<a href=\"{{ path('frontend_principal') }}\" class=\"volver color\"><i class=\"small material-icons logos \">arrow_back</i>VOLVER</a>

{% endblock %}



{% block main %}
    
<h1>Insertar Libros</h1>


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



{% for l in pagination %}
       

        <tbody>
          <tr>
              <th><img src=\"{{asset('frontend/img/'~l.imagen)}}\"></th>
              <th>{{l.libroId}}</th>
              <th>{{l.nombreLibro}}</th>
              <th>{{l.descripcion}}</th>
              <th>{{l.precio}}</th>
              
              <th>{{l.categoriaid.nombreCategoria}}</th>
              <th>{{l.editorid.nombreEditorial}}</th>
              

          </tr>
          
        </tbody>
            





{% endfor %}





      </table>

<div class=\"pagination\">
    {{ knp_pagination_render(pagination) }}
</div>

{% endblock %}

", "AppBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\mercamira\\src\\AppBundle/Resources/views/Default/index.html.twig");
    }
}
