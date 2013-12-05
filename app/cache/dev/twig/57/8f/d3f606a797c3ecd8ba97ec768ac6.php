<?php

/* PwebMainBundle:Main:voirimage.html.twig */
class __TwigTemplate_578fd3f606a797c3ecd8ba97ec768ac6 extends Twig_Template
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
        <th><center>Image</center></th>
        <th><center>Option</center></th>
        </tr>
    </thead>
 \t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_images"]) ? $context["liste_images"] : $this->getContext($context, "liste_images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 18
            echo " \t<tbody>
 \t<tr>
 \t\t<td>
    \t<p align=\"center\"><img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "url"), "html", null, true);
            echo "\" width=\"120\" height=\"120\" alt=\"projet\" align=\"center\"/></p>
    \t</td>
    \t<td>
    \t<br>
    \t<p align=\"center\">
    \t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_supprimerimage", array("id" => $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-small\"><i class=\"icon-white icon-remove\"></i> Supprimer</a>
    \t</p>
    \t</td>
    </tr>
    </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "   \t </table>
    </div>
    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:voirimage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 32,  69 => 26,  61 => 21,  56 => 18,  52 => 17,  40 => 7,  37 => 6,  32 => 4,  29 => 3,);
    }
}
