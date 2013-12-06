<?php

/* ::layout.html.twig */
class __TwigTemplate_7d152a2df9362a8b7baa31264b27b132e1f5b63137ed65d03bd78e2f95f949bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <script src=\"/js-global/FancyZoom.js\" type=\"text/javascript\"></script>
    <script src=\"/js-global/FancyZoomHTML.js\" type=\"text/javascript\"></script>
  </head>
  <body>

\t<div id=\"header\" class=\"navbar-inner\">
\t\t<div class=\"container\">
      \t<img src=\"../img/Toredo_logo_small.png\" alt=\"Toredo\" />
      \t<p> </p>
    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i> Accueil</a>
\t";
        // line 25
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_LAMBDA"))) {
            // line 26
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_utilisateur"), "html", null, true);
            echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-th-list\"></i> Espace utilisateur</a>
\t";
        } else {
            // line 28
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_connecter"), "html", null, true);
            echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-pencil\"></i> Se connecter</a>
<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_enregistrer"), "html", null, true);
            echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-pencil\"></i> S'enregistrer</a>
\t";
        }
        // line 31
        echo "\t";
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_LAMBDA"))) {
            // line 32
            echo "\t";
        } else {
            // line 33
            echo "\t";
        }
        // line 34
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_apropos"), "html", null, true);
        echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-pencil\"></i> A propos</a>
     \t</div>
     \t<p> </p>
    </div>
    <br>
    <div class=\"container\">
\t\t";
        // line 40
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo "  
\t\t  
   \t\t  <div class=\"navbar\">
  \t\t\t<div class=\"navbar-inner\">
  \t\t\t  <div class=\"container\">
\t
     \t\t\t <ul class=\"nav\">
     \t\t\t <li> <a href=\"#\">[ADMINISTRATION]</a> </li>
   \t\t\t     <li> <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_deconnecter"), "html", null, true);
            echo "\">Déconnecter</a> </li>
   \t\t\t     <li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> Option 1 <b class=\"caret\"></b> </a>
   \t\t\t       <ul class=\"dropdown-menu\">
   \t\t\t         <li><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_ajouter"), "html", null, true);
            echo "\">Option 1.1</a></li>
   \t\t\t         <li><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_ajouterimage"), "html", null, true);
            echo "\">Option 1.2</a></li>
    \t\t      </ul>
  \t\t\t      </li>
  \t\t\t      <li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> Option 2 <b class=\"caret\"></b> </a>
   \t\t\t       <ul class=\"dropdown-menu\">
   \t\t\t         <li><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_gererprojet"), "html", null, true);
            echo "\">Option 2.1</a></li>
   \t\t\t         <li><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_voirimage"), "html", null, true);
            echo "\">Option 2.2</a></li>
    \t\t      </ul>
  \t\t\t      </li>
 \t\t       <li> <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_statistiques"), "html", null, true);
            echo "\">Option 3</a> </li>
  \t\t       </ul>

    \t\t</div>
\t</div>
\t\t  </div>

\t ";
        }
        // line 68
        echo "\t
\t\t 
\t\t  
      
          ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "</div>
    \t<div class=\"well\">
      <footer>
      \t<center>
        <p>All rights reserved <b>Engiineers</b> © 2013</p>
        </center>
      </footer>
    </div>
 
  ";
        // line 84
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo " 
  </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "NI 2013";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" />
 <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
    ";
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "          
          ";
    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        // line 85
        echo "    ";
        // line 86
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 87,  212 => 86,  210 => 85,  207 => 84,  202 => 73,  199 => 72,  193 => 13,  189 => 12,  185 => 11,  181 => 10,  176 => 9,  173 => 8,  167 => 6,  160 => 89,  158 => 84,  147 => 75,  145 => 72,  139 => 68,  128 => 61,  122 => 58,  118 => 57,  110 => 52,  106 => 51,  100 => 48,  89 => 40,  79 => 34,  76 => 33,  73 => 32,  70 => 31,  65 => 29,  60 => 28,  54 => 26,  52 => 25,  48 => 24,  37 => 15,  35 => 8,  30 => 6,  23 => 1,);
    }
}
