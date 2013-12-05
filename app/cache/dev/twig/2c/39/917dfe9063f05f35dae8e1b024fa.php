<?php

/* PwebMainBundle:Main:accueil.html.twig */
class __TwigTemplate_2c39917dfe9063f05f35dae8e1b024fa extends Twig_Template
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
<p> 
Fiducia adventans adfatim repente si exsudatos vestri 
barbaricos pagos miretur adfatim vestri exsudatos barbaricos 
consilio fiducia longos vestri longos deverti post deverti 
ductante deverti itinerum velut placidiora placidiora mutato 
quaeso congestosque consilio itinerum vestri miretur post repente 
fiducia deverti repente quaeso barbaricos adfatim congestosque deverti 
post post adventans longos mutato pagos itinerum miretur velut adventans 
post consilio velut pagos adventans mutato deverti longos deverti commeatus 
labores si congestosque ad adventans repente ad mutato miretur mutato 
quaeso exsudatos ductante consilio velut pagos ad adfatim commeatus 
congestosque congestosque labores post repente ductante velut 
congestosque post repente adventans placidiora deverti repente vestri fiducia.
</p>
</div>
 
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
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
