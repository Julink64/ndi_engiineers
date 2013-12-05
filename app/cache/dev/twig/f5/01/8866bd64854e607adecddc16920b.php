<?php

/* PwebMainBundle:Main:statistiques.html.twig */
class __TwigTemplate_f5018866bd64854e607adecddc16920b extends Twig_Template
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
        echo "  Statistiques
";
    }

    // line 7
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"hero-unit\">
<h2>Tableau</h2>
<table>
<tr><td>Abc</td><td>Def</td></tr>
<tr><td>Ghi</td><td>Jkl</td></tr>
<tr><td>Mno</td><td>Pqr</td></tr>
</table>
</div>
 
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:statistiques.html.twig";
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
