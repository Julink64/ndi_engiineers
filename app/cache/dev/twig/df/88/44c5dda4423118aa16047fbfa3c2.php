<?php

/* PwebMainBundle:Main:apropos.html.twig */
class __TwigTemplate_df8844c5dda4423118aa16047fbfa3c2 extends Twig_Template
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


<h3>Tableau</h3>
 \t<div class=\"row\">
    <div class=\"span9 offset1\">
    <table class=\"table table-bordered table-striped table-condensed\">
    <thead>
 \t<tr>
 \t\t<td>
 \t\t<center>
    \t<h4>
    \t\tChamps 1
    \t</h4>
    \t</center>\t
    \t</td>
    </tr>
    </thead>
    <tbody>
 \t<tr class=\"success\">
 \t\t<td>
    \t<p align=\"center\">
    \t\tChamps 1.1
    \t</p>
    \t</td>
    \t<td>
    \t<p align=\"center\">
    \t\tChamps 1.2
    \t</p>
    \t</td>
    </tr>
    </tbody>
    <tbody>
 \t<tr class=\"success\">
 \t\t<td>
    \t<p align=\"center\">
    \t\tChamps 2.1
    \t</p>
    \t</td>
    \t<td>
    \t<p align=\"center\">
    \t\tChamps 2.2
    \t</p>
    \t</td>
    </tr>
    </tbody>
   \t</table>
    </div>
    </div>
</div>



  
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:apropos.html.twig";
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
