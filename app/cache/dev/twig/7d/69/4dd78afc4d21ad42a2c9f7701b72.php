<?php

/* ::layout.html.twig */
class __TwigTemplate_7d694dd78afc4d21ad42a2c9f7701b72 extends Twig_Template
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
        // line 12
        echo "    <script src=\"/js-global/FancyZoom.js\" type=\"text/javascript\"></script>
    <script src=\"/js-global/FancyZoomHTML.js\" type=\"text/javascript\"></script>
  </head>
  <body>

\t<div id=\"header\" class=\"navbar-inner\">
\t\t<div class=\"container\">
      \t<h1> Nuit de l'info 2013 </h1>
      \t<p> </p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i> Accueil</a>
    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_connecter"), "html", null, true);
        echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-pencil\"></i> Se connecter</a>
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_voirtout"), "html", null, true);
        echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-th-list\"></i> Page 1</a>
    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_cv"), "html", null, true);
        echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-pencil\"></i> Page 2</a>
    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_apropos"), "html", null, true);
        echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-pencil\"></i> Page 3</a>
     \t</div>
     \t<p> </p>
    </div>
    <br>
    <div class=\"container\">
\t\t  ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 32
            echo "\t\t  
   \t\t  <div class=\"navbar\">
  \t\t\t<div class=\"navbar-inner\">
  \t\t\t  <div class=\"container\">
     \t\t\t <ul class=\"nav\">
     \t\t\t <li> <a href=\"#\">[ADMINISTRATION]</a> </li>
   \t\t\t     <li> <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_deconnecter"), "html", null, true);
            echo "\">Déconnecter</a> </li>
   \t\t\t     <li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> Option 1 <b class=\"caret\"></b> </a>
   \t\t\t       <ul class=\"dropdown-menu\">
   \t\t\t         <li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_ajouter"), "html", null, true);
            echo "\">Option 1.1</a></li>
   \t\t\t         <li><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_ajouterimage"), "html", null, true);
            echo "\">Option 1.2</a></li>
    \t\t      </ul>
  \t\t\t      </li>
  \t\t\t      <li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> Option 2 <b class=\"caret\"></b> </a>
   \t\t\t       <ul class=\"dropdown-menu\">
   \t\t\t         <li><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_gererprojet"), "html", null, true);
            echo "\">Option 2.1</a></li>
   \t\t\t         <li><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_voirimage"), "html", null, true);
            echo "\">Option 2.2</a></li>
    \t\t      </ul>
  \t\t\t      </li>
 \t\t       <li> <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_statistiques"), "html", null, true);
            echo "\">Option 3</a> </li>
  \t\t       </ul>
    \t\t</div>
\t\t  </div>
\t\t</div>
\t\t  ";
        }
        // line 57
        echo "\t\t  
      
          ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "    \t<div class=\"well\">
      <footer>
      \t<center>
        <p>All rights reserved <b>Engiineers</b> © 2013</p>
        </center>
      </footer>
    </div>
 
  ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo " 
  </body>
</html>";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    ";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "          
          ";
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        // line 72
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 73
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
        return array (  180 => 73,  177 => 72,  175 => 71,  172 => 70,  167 => 60,  164 => 59,  158 => 10,  153 => 9,  150 => 8,  144 => 6,  138 => 75,  136 => 70,  126 => 62,  124 => 59,  120 => 57,  111 => 51,  105 => 48,  101 => 47,  89 => 41,  83 => 38,  75 => 32,  73 => 31,  60 => 24,  52 => 22,  35 => 8,  23 => 1,  55 => 12,  50 => 14,  47 => 12,  41 => 8,  38 => 7,  33 => 4,  30 => 6,  104 => 41,  93 => 42,  87 => 33,  85 => 32,  76 => 26,  64 => 25,  58 => 13,  56 => 23,  48 => 21,  44 => 10,  40 => 8,  37 => 12,  32 => 4,  29 => 3,);
    }
}
