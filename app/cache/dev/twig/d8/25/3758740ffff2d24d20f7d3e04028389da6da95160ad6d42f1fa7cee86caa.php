<?php

/* PwebMainBundle:Main:accueil.html.twig */
class __TwigTemplate_d8253758740ffff2d24d20f7d3e04028389da6da95160ad6d42f1fa7cee86caa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PwebMainBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'PwebMain_body' => array($this, 'block_PwebMain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PwebMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Accueil
";
    }

    // line 7
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"hero-unit\">
\t<p> 
\t\t<h1>Accueil</h1>
\t</p>
</div>




";
        // line 18
        echo $this->getContext($context, "result");
        echo "


";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
