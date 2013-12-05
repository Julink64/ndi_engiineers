<?php

/* PwebMainBundle:Main:ajouter.html.twig */
class __TwigTemplate_cd399a7573050220e8f59feb54f6fc6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PwebMainBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 5
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"hero-unit\">
\t<h2>
\t";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "
\t</h2>  
  ";
        // line 11
        $this->env->loadTemplate("PwebMainBundle:Main:formulaire.html.twig")->display($context);
        // line 12
        echo " 
  <p>
\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i> Retour à l'accueil</a>
  </p>
  
</div>
 
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  43 => 12,  41 => 11,  36 => 9,  31 => 6,  28 => 5,);
    }
}
