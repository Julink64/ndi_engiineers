<?php

/* PwebMainBundle:Main:index.html.twig */
class __TwigTemplate_a924b5a1119d69be5a8ae8995a63205c extends Twig_Template
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
  <div class=\"row\">
\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 11
            echo "\t
\t  <div class=\"span4\">
\t  
\t    <div class=\"well\">
\t  
\t  \t<h3>
\t\t\t";
            // line 17
            if ((!(null === $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "logo")))) {
                // line 18
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "logo"), "html", null, true);
                echo "\" width=\"50\" height=\"50\" alt=\"logo\" align=left/>
\t\t\t";
            }
            // line 20
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_voir", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "libelle"), "html", null, true);
            echo "</a>
        </h3>
        
        <table class=\"table table-bordered table-striped table-condensed\">
\t\t\t<tbody>
\t\t\t  <tr class=\"info\">
\t\t\t  \t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "phrase"), "html", null, true);
            echo "</td>
\t\t\t  </tr>
\t\t\t</tbody>
\t\t</table>
        
        <center>
\t\t\t";
            // line 32
            if ((!(null === $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "apercu")))) {
                // line 33
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "apercu"), "html", null, true);
                echo "\" align=left/>
\t\t\t";
            }
            // line 35
            echo "        </center>
        
        </div>
      
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "   </div>



";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 41,  93 => 35,  87 => 33,  85 => 32,  76 => 26,  64 => 20,  58 => 18,  56 => 17,  48 => 11,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
