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

\t\t<!-- css for resize -->
\t\t<link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/base/jquery-ui.css\">
\t\t
\t\t<!-- css for custom scrollbar -->
\t\t<link href=\"../../../custom-scrollbar-plugin/jquery.mCustomScrollbar.css\" rel=\"stylesheet\"/>

\t\t<!-- The initial stylesheet -->
\t\t<link rel=\"stylesheet\" href=\"style.css\">

  </head>
  <body>

\t<div style=\"background: url('../img/fond-banniere.png'); background-position:right; background-repeat : no-repeat; background-color: #ffffff;\" id=\"header\" class=\"navbar-inner\">
\t\t<div class=\"container\">
      \t<img src=\"../img/Toredo_logo_small.png\" alt=\"Toredo\" />
      \t<p> </p>
    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i> Accueil</a>
\t";
        // line 35
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_LAMBDA"))) {
            // line 36
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_utilisateur"), "html", null, true);
            echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-th-list\"></i> Espace utilisateur</a>
\t";
        } else {
            // line 38
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_connecter"), "html", null, true);
            echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-pencil\"></i> Se connecter</a>
<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_enregistrer"), "html", null, true);
            echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-pencil\"></i> S'enregistrer</a>
\t";
        }
        // line 41
        echo "\t";
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_LAMBDA"))) {
            // line 42
            echo "\t";
        } else {
            // line 43
            echo "\t";
        }
        // line 44
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_apropos"), "html", null, true);
        echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-pencil\"></i> A propos</a>
     \t</div>
     \t<p> </p>
    </div>
    <br>
    <div class=\"container\">
\t\t";
        // line 50
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
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_deconnecter"), "html", null, true);
            echo "\">Déconnecter</a> </li>
   \t\t\t     <li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> Option 1 <b class=\"caret\"></b> </a>
   \t\t\t       <ul class=\"dropdown-menu\">
   \t\t\t         <li><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_ajouter"), "html", null, true);
            echo "\">Option 1.1</a></li>
   \t\t\t         <li><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_ajouterimage"), "html", null, true);
            echo "\">Option 1.2</a></li>
    \t\t      </ul>
  \t\t\t      </li>
  \t\t\t      <li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> Option 2 <b class=\"caret\"></b> </a>
   \t\t\t       <ul class=\"dropdown-menu\">
   \t\t\t         <li><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_gererprojet"), "html", null, true);
            echo "\">Option 2.1</a></li>
   \t\t\t         <li><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_voirimage"), "html", null, true);
            echo "\">Option 2.2</a></li>
    \t\t      </ul>
  \t\t\t      </li>
 \t\t       <li> <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_statistiques"), "html", null, true);
            echo "\">Option 3</a> </li>
  \t\t       </ul>

    \t\t</div>
\t</div>
\t\t  </div>

\t ";
        }
        // line 78
        echo "\t
\t\t 
\t\t  
      
          ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "</div>
    \t<div class=\"well\">
      <footer>
      \t<center>
        <p>All rights reserved <b>Engiineers</b> © 2013</p>
        </center>
      </footer>
    </div>
 
  ";
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "

<!-- Jquery for resizeble -->
\t\t<script src=\"../../../jQuery.js\"></script>
\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js\"></script> 

\t\t<!-- Jquery Custom scrollbar -->
\t\t<script src=\"../../../custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js\"></script>
\t\t<!-- Custom scrollbar -->
\t   \t<script>
\t\t(function(\$){
\t\t\t\$(window).load(function(){
\t\t\t\t\$(\".scrollbar\").mCustomScrollbar({
\t\t\t\t\tautoHideScrollbar: false,
\t\t\t\t\tcontentTouchScroll: true,//for mobile device
\t\t\t\t\tscrollButtons:{
\t\t\t\t\t\tenable:true
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t})(jQuery);
\t\t</script>

\t\t<!-- resizable classes -->
\t\t<script>
\t  \t\$(function() {
\t    \t\$('.resizable').resizable();
\t  \t\t});\t
\t  </script>
 
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

    // line 82
    public function block_body($context, array $blocks = array())
    {
        // line 83
        echo "          
          ";
    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        // line 95
        echo "    ";
        // line 96
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 97
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
        return array (  254 => 97,  251 => 96,  249 => 95,  246 => 94,  241 => 83,  238 => 82,  232 => 13,  228 => 12,  224 => 11,  220 => 10,  215 => 9,  212 => 8,  206 => 6,  170 => 99,  168 => 94,  157 => 85,  155 => 82,  149 => 78,  138 => 71,  132 => 68,  128 => 67,  120 => 62,  116 => 61,  110 => 58,  99 => 50,  89 => 44,  86 => 43,  83 => 42,  80 => 41,  75 => 39,  70 => 38,  64 => 36,  62 => 35,  58 => 34,  37 => 15,  35 => 8,  30 => 6,  23 => 1,);
    }
}
