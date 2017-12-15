<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bca00d533abd1cbf8579f7cca55b876971a5753b41b4d1859a7b98a8bef02a1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66ca5ec5a2e211008f469f70cad8a655495e2cd734063b19e10fe9368d6673d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ca5ec5a2e211008f469f70cad8a655495e2cd734063b19e10fe9368d6673d8->enter($__internal_66ca5ec5a2e211008f469f70cad8a655495e2cd734063b19e10fe9368d6673d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66ca5ec5a2e211008f469f70cad8a655495e2cd734063b19e10fe9368d6673d8->leave($__internal_66ca5ec5a2e211008f469f70cad8a655495e2cd734063b19e10fe9368d6673d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea4b414300f1395110fc6406bea3ef74c3c8c36f602addae867603ca773e2252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4b414300f1395110fc6406bea3ef74c3c8c36f602addae867603ca773e2252->enter($__internal_ea4b414300f1395110fc6406bea3ef74c3c8c36f602addae867603ca773e2252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ea4b414300f1395110fc6406bea3ef74c3c8c36f602addae867603ca773e2252->leave($__internal_ea4b414300f1395110fc6406bea3ef74c3c8c36f602addae867603ca773e2252_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_304f32dbead5865d0d40d4908864e961cb2851afb81d19746608626d1105441e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304f32dbead5865d0d40d4908864e961cb2851afb81d19746608626d1105441e->enter($__internal_304f32dbead5865d0d40d4908864e961cb2851afb81d19746608626d1105441e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_304f32dbead5865d0d40d4908864e961cb2851afb81d19746608626d1105441e->leave($__internal_304f32dbead5865d0d40d4908864e961cb2851afb81d19746608626d1105441e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c6df5d427eec22c0e955aa767b72e4629ec2823eba62181791fa596ff5f5fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6df5d427eec22c0e955aa767b72e4629ec2823eba62181791fa596ff5f5fea->enter($__internal_9c6df5d427eec22c0e955aa767b72e4629ec2823eba62181791fa596ff5f5fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9c6df5d427eec22c0e955aa767b72e4629ec2823eba62181791fa596ff5f5fea->leave($__internal_9c6df5d427eec22c0e955aa767b72e4629ec2823eba62181791fa596ff5f5fea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\mercamira\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
