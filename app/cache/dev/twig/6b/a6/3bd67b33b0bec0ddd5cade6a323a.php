<?php

/* PwebMainBundle:Main:voir.html.twig */
class __TwigTemplate_6ba63bd67b33b0bec0ddd5cade6a323a extends Twig_Template
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
        echo "    Projets
";
    }

    // line 7
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"well\">
    <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "libelle"), "html", null, true);
        echo " </h1>
    <p><span class=\"label label-info\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "categorie"), "html", null, true);
        echo "</span>
    <span class=\"label label-info\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "langage"), "html", null, true);
        echo "</span></p>
    
\t<br>
\t<div id=\"myCarousel\" class=\"carousel slide\">
\t\t<center>
    \t<div class=\"carousel-inner\">
    \t";
        // line 18
        $context["i"] = 1;
        // line 19
        echo "  \t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_images"]) ? $context["liste_images"] : $this->getContext($context, "liste_images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 20
            echo "  \t\t";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                // line 21
                echo "    \t<div class=\"item active\"> <img alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "alt"), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "url"), "html", null, true);
                echo "\"/>
      \t\t<div class=\"carousel-caption\">
        \t<p>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "commentaire"), "html", null, true);
                echo "</p>
      \t\t</div>
    \t</div>
    \t";
            } else {
                // line 27
                echo "    \t<div class=\"item\"> <img alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "alt"), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "url"), "html", null, true);
                echo "\"/>
      \t\t<div class=\"carousel-caption\">
        \t<p>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "commentaire"), "html", null, true);
                echo "</p>
      \t\t</div>
    \t</div>
    \t";
            }
            // line 33
            echo "    \t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 34
            echo "    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    \t</div>
    \t</center>
    \t<a class=\"carousel-control left\" data-slide=\"prev\" href=\"#myCarousel\">‹</a> 
    \t<a class=\"carousel-control right\" data-slide=\"next\" href=\"#myCarousel\">›</a>
    </div>
\t<br></br>
\t<p> ";
        // line 41
        echo $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "description");
        echo " </p>
\t<br></br>
\t";
        // line 43
        if (($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "fichier") != "/Symfony_projet/MSW_symf/web/projets/fichiers/NULL")) {
            // line 44
            echo "    <center>
    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "fichier"), "html", null, true);
            echo "\" class=\"btn btn-info\"><i class=\"icon-white icon-download-alt\"></i> Télécharger le code source</a>
    </center>
    ";
        }
        // line 48
        echo "</div>

<center>
  <p>
  ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 53
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_modifier", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id"))), "html", null, true);
            echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier le projet
    </a>
    <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_supprimer", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id"))), "html", null, true);
            echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer le projet
    </a>
  ";
        }
        // line 62
        echo "  </p>
</center>

<script src=\"../bootstrap/js/bootstrap-carousel.js\"></script>
<script src=\"../bootstrap/js/bootstrap-transition.js\"></script>
<script>
\$(function (){
    \$('.carousel').carousel();
});
</script>

  
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 62,  150 => 57,  142 => 53,  140 => 52,  134 => 48,  128 => 45,  125 => 44,  123 => 43,  118 => 41,  110 => 35,  104 => 34,  101 => 33,  94 => 29,  86 => 27,  79 => 23,  71 => 21,  68 => 20,  63 => 19,  61 => 18,  52 => 12,  48 => 11,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
