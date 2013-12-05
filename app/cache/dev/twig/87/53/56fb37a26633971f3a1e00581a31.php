<?php

/* PwebMainBundle:Main:formulaire.html.twig */
class __TwigTemplate_875356fb37a26633971f3a1e00581a31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form method=\"post\" ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<button type=\"submit\" class=\"btn btn-primary\"> <i class=\"icon-file icon-white\"></i> Envoyer</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 3,  19 => 2,  47 => 12,  45 => 11,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
