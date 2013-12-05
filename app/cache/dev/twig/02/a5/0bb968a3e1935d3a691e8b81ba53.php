<?php

/* PwebMainBundle:Main:gerer_projet.html.twig */
class __TwigTemplate_02a50bb968a3e1935d3a691e8b81ba53 extends Twig_Template
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
        echo "    projets
";
    }

    // line 6
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 7
        echo " \t<div class=\"well\">
 \t<div class=\"row\">
    <div class=\"span9 offset1\">
      <table class=\"table table-bordered table-striped table-condensed\">
 \t<thead>
        <tr>
        <th><center>Identifiant</center></th>
        <th><center>Description</center></th>
        <th><center>Options</center></th>
        </tr>
    </thead>
 \t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_projets"]) ? $context["liste_projets"] : $this->getContext($context, "liste_projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 19
            echo " \t<tbody>
 \t<tr>
 \t\t<td>
 \t\t<br>
    \t<p align=\"center\"> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id"), "html", null, true);
            echo " </p>
    \t</td>
    \t<td>
    \t<br>
    \t<p align=\"center\"> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "libelle"), "html", null, true);
            echo " </p>
    \t<p align=\"center\"> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "langage"), "html", null, true);
            echo " </p>
    \t</td>
    \t<td>
    \t<br>
    \t<p align=\"center\">
    \t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_supprimer", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-small\"><i class=\"icon-remove\"></i> Supprimer</a>
    \t</p>
    \t</td>
    \t<td>
    \t<br>
    \t<p align=\"center\">
    \t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_lierimages", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-info btn-small\"><i class=\"icon-th-list\"></i> Ajouter des images</a>
    \t</td>
    \t
    </tr>
    </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "   \t </table>
    </div>
    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:gerer_projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 45,  91 => 39,  82 => 33,  74 => 28,  70 => 27,  63 => 23,  57 => 19,  53 => 18,  40 => 7,  37 => 6,  32 => 4,  29 => 3,);
    }
}
