<?php

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_194f757b0825fc4b758b8b42c24d8fd8e45663e823962456df08c41650c03fdf extends Twig_Template
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
        $__internal_2e164fc52ecdd84499ee789b8bf34365de991602882c355160ec195a33ee5c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e164fc52ecdd84499ee789b8bf34365de991602882c355160ec195a33ee5c1b->enter($__internal_2e164fc52ecdd84499ee789b8bf34365de991602882c355160ec195a33ee5c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e164fc52ecdd84499ee789b8bf34365de991602882c355160ec195a33ee5c1b->leave($__internal_2e164fc52ecdd84499ee789b8bf34365de991602882c355160ec195a33ee5c1b_prof);

    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_112fdba3e70886d0ebbe9ecf726e4b8447005ccd44ec0b6c8632d5002ee80748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112fdba3e70886d0ebbe9ecf726e4b8447005ccd44ec0b6c8632d5002ee80748->enter($__internal_112fdba3e70886d0ebbe9ecf726e4b8447005ccd44ec0b6c8632d5002ee80748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("frontend/frontend.css"), "html", null, true);
        echo "\">";
        
        $__internal_112fdba3e70886d0ebbe9ecf726e4b8447005ccd44ec0b6c8632d5002ee80748->leave($__internal_112fdba3e70886d0ebbe9ecf726e4b8447005ccd44ec0b6c8632d5002ee80748_prof);

    }

    // line 6
    public function block_sidenav($context, array $blocks = array())
    {
        $__internal_32c3227a03ff2e0eb04512661043aa25b38d1f41b8e42e14c440c082a694cedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c3227a03ff2e0eb04512661043aa25b38d1f41b8e42e14c440c082a694cedf->enter($__internal_32c3227a03ff2e0eb04512661043aa25b38d1f41b8e42e14c440c082a694cedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidenav"));

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
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? $this->getContext($context, "categorias")));
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
        
        $__internal_32c3227a03ff2e0eb04512661043aa25b38d1f41b8e42e14c440c082a694cedf->leave($__internal_32c3227a03ff2e0eb04512661043aa25b38d1f41b8e42e14c440c082a694cedf_prof);

    }

    // line 30
    public function block_imput($context, array $blocks = array())
    {
        $__internal_2576d5cd6e5c2159c582919cb26d5607ff6a0e27e77123d66bacf94e140465f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2576d5cd6e5c2159c582919cb26d5607ff6a0e27e77123d66bacf94e140465f5->enter($__internal_2576d5cd6e5c2159c582919cb26d5607ff6a0e27e77123d66bacf94e140465f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "imput"));

        // line 31
        echo "
    <div class=\"imput\">
        <div class=\"input-field col s6 \">
              <input id=\"first_name\" type=\"text\" class=\"validate\" >
              <label for=\"first_name \">BUSCAR PRODUCTO</label>
        </div>
    </div>

";
        
        $__internal_2576d5cd6e5c2159c582919cb26d5607ff6a0e27e77123d66bacf94e140465f5->leave($__internal_2576d5cd6e5c2159c582919cb26d5607ff6a0e27e77123d66bacf94e140465f5_prof);

    }

    // line 43
    public function block_iconos($context, array $blocks = array())
    {
        $__internal_f9bfe7a07ed8d0a5c40a87db373496f2d84c732a2b681ca66f4d00f84714a867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9bfe7a07ed8d0a5c40a87db373496f2d84c732a2b681ca66f4d00f84714a867->enter($__internal_f9bfe7a07ed8d0a5c40a87db373496f2d84c732a2b681ca66f4d00f84714a867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "iconos"));

        // line 44
        echo "
<a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backend_principal");
        echo "\"><i class=\"small material-icons logos color\">account_circle</i></a>
<a href=\"\"><i class=\"small material-icons logos color\">shopping_basket</i></a>

";
        
        $__internal_f9bfe7a07ed8d0a5c40a87db373496f2d84c732a2b681ca66f4d00f84714a867->leave($__internal_f9bfe7a07ed8d0a5c40a87db373496f2d84c732a2b681ca66f4d00f84714a867_prof);

    }

    // line 52
    public function block_main($context, array $blocks = array())
    {
        $__internal_392dd03485d1530feb808fbe6664bb65284a167684eaa35ce3e0f52edc8202e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392dd03485d1530feb808fbe6664bb65284a167684eaa35ce3e0f52edc8202e5->enter($__internal_392dd03485d1530feb808fbe6664bb65284a167684eaa35ce3e0f52edc8202e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 53
        echo "
<h4>LIBROS</h4>
<div class=\"barra\"></div>

  <div class=\"todos\">


    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["libros"] ?? $this->getContext($context, "libros")));
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
        // line 87
        echo "

   
      

  </div>
    


";
        
        $__internal_392dd03485d1530feb808fbe6664bb65284a167684eaa35ce3e0f52edc8202e5->leave($__internal_392dd03485d1530feb808fbe6664bb65284a167684eaa35ce3e0f52edc8202e5_prof);

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
        return array (  203 => 87,  190 => 80,  178 => 71,  174 => 70,  166 => 65,  160 => 61,  156 => 60,  147 => 53,  141 => 52,  130 => 45,  127 => 44,  121 => 43,  106 => 31,  100 => 30,  85 => 17,  73 => 14,  69 => 13,  63 => 10,  58 => 7,  52 => 6,  38 => 4,  11 => 1,);
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


{% block stylesheet %}<link rel=\"stylesheet\" href=\"{{ asset('frontend/frontend.css')}}\">{% endblock %}

{% block sidenav %}

<ul id=\"slide-out\" class=\"side-nav\">

\t<li><a class=\"waves-effect\" href=\"{{path('listar',{'cat':'all'})}}\">TODAS</a></li>


{% for c in categorias %}
\t<li><a class=\"waves-effect\" href=\"{{path('listar',{'cat':c.categoriaid})}}\">{{c.nombreCategoria}}</a></li>
    
{% endfor %}
  

\t

</ul>

\t<a href=\"#\" data-activates=\"slide-out\" id=\"color\" class=\"button-collapse btn-floating btn-large\"><i class=\"material-icons\">menu</i></a>

{% endblock %}




{% block imput %}

    <div class=\"imput\">
        <div class=\"input-field col s6 \">
              <input id=\"first_name\" type=\"text\" class=\"validate\" >
              <label for=\"first_name \">BUSCAR PRODUCTO</label>
        </div>
    </div>

{% endblock %}



{% block iconos %}

<a href=\"{{ path('backend_principal') }}\"><i class=\"small material-icons logos color\">account_circle</i></a>
<a href=\"\"><i class=\"small material-icons logos color\">shopping_basket</i></a>

{% endblock %}



{% block main %}

<h4>LIBROS</h4>
<div class=\"barra\"></div>

  <div class=\"todos\">


    {% for l in libros %}
      
       
    <div class=\"card hoverable\">
    <div class=\"card-image waves-effect waves-block waves-light\">
      <img id=\"imagenes\" class=\"activator\" src=\"{{asset('frontend/img/'~l.imagen)}}\">

    </div>

    <div class=\"card-content\">
      <span class=\"card-title activator\">{{l.nombreLibro}}</span>
      <a class=\"precio\">{{l.precio}}</a>
      </div>
      <div class=\"boton\">
        
      <a id=\"color\" class=\"waves-effect waves-light btn \">comprar</a>

    </div>
    <div class=\"card-reveal\">
      <span class=\"card-title grey-text text-darken-4\">Descripcion<i class=\"material-icons right\">close</i></span>
      <p>{{l.descripcion}}</p>
    </div>
  </div>
       
           
   
    {% endfor %}


   
      

  </div>
    


{% endblock %}




", "FrontendBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\mercamira\\src\\FrontendBundle/Resources/views/Default/index.html.twig");
    }
}
