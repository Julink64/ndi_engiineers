<?php

/* PwebMainBundle:Main:formulaire_requete.html.twig */
class __TwigTemplate_7b484e8ebe39aebbf75912d7ca42d83c extends Twig_Template
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
<div class=\"well\">
<h2> Formulaire </h2>
";
        // line 11
        $this->env->loadTemplate("PwebMainBundle:Main:formulaire.html.twig")->display($context);
        // line 12
        echo "</div> 
   
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:formulaire_requete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  45 => 11,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
