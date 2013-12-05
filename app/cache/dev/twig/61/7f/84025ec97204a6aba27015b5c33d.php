<?php

/* PwebMainBundle::layout.html.twig */
class __TwigTemplate_617f84025ec97204a6aba27015b5c33d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'PwebMain_body' => array($this, 'block_PwebMain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
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
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  ";
        // line 10
        echo "  
  ";
        // line 12
        echo "  ";
        $this->displayBlock('PwebMain_body', $context, $blocks);
        // line 14
        echo " 
";
    }

    // line 12
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 13
        echo "  ";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  50 => 14,  47 => 12,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  104 => 41,  93 => 35,  87 => 33,  85 => 32,  76 => 26,  64 => 20,  58 => 13,  56 => 17,  48 => 11,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
