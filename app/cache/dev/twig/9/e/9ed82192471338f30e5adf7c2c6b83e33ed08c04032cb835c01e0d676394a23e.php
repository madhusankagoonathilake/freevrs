<?php

/* FreeVRSCoreBundle:Default:base.html.twig */
class __TwigTemplate_9ed82192471338f30e5adf7c2c6b83e33ed08c04032cb835c01e0d676394a23e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav_menu' => array($this, 'block_nav_menu'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b74a90a3aaf279101bfe09e89bbf99791a235a09ba049ae9ac86230932200509 = $this->env->getExtension("native_profiler");
        $__internal_b74a90a3aaf279101bfe09e89bbf99791a235a09ba049ae9ac86230932200509->enter($__internal_b74a90a3aaf279101bfe09e89bbf99791a235a09ba049ae9ac86230932200509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSCoreBundle:Default:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <!--Import materialize.css-->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/freevrscore/materialize/css/materialize.min.css"), "html", null, true);
        echo "\"  media=\"screen,projection\"/>
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" />

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    </head>

    <body>

        <nav>
            <div class=\"row\">

                <div class=\"nav-wrapper\">
                    <div class=\"container\">
                        <a href=\"#!\" class=\"brand-logo\">FreeVRS</a>
                       ";
        // line 23
        $this->displayBlock('nav_menu', $context, $blocks);
        // line 24
        echo "                    </div>
                </div>

            </div>
        </nav>

        ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "        <!--Import jQuery before materialize.js-->
        <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/freevrscore/jquery/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/freevrscore/materialize/js/materialize.min.js"), "html", null, true);
        echo "\"></script>
        
        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    </body>
</html>
";
        
        $__internal_b74a90a3aaf279101bfe09e89bbf99791a235a09ba049ae9ac86230932200509->leave($__internal_b74a90a3aaf279101bfe09e89bbf99791a235a09ba049ae9ac86230932200509_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c471dff92e8e48cf980eaf4aeff0fb0117bf6968f61134f487dd5c98e0ade02 = $this->env->getExtension("native_profiler");
        $__internal_1c471dff92e8e48cf980eaf4aeff0fb0117bf6968f61134f487dd5c98e0ade02->enter($__internal_1c471dff92e8e48cf980eaf4aeff0fb0117bf6968f61134f487dd5c98e0ade02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        ";
        
        $__internal_1c471dff92e8e48cf980eaf4aeff0fb0117bf6968f61134f487dd5c98e0ade02->leave($__internal_1c471dff92e8e48cf980eaf4aeff0fb0117bf6968f61134f487dd5c98e0ade02_prof);

    }

    // line 23
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_e5ef1d21c3fab5e3ce2d53074edc70c552982d3cddf9a5e4e5b19e72cc495da0 = $this->env->getExtension("native_profiler");
        $__internal_e5ef1d21c3fab5e3ce2d53074edc70c552982d3cddf9a5e4e5b19e72cc495da0->enter($__internal_e5ef1d21c3fab5e3ce2d53074edc70c552982d3cddf9a5e4e5b19e72cc495da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        
        $__internal_e5ef1d21c3fab5e3ce2d53074edc70c552982d3cddf9a5e4e5b19e72cc495da0->leave($__internal_e5ef1d21c3fab5e3ce2d53074edc70c552982d3cddf9a5e4e5b19e72cc495da0_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_232416d503fd06c98bfd794442fdfd324f9791fe0ff8acc3132a2fe14fdf79a2 = $this->env->getExtension("native_profiler");
        $__internal_232416d503fd06c98bfd794442fdfd324f9791fe0ff8acc3132a2fe14fdf79a2->enter($__internal_232416d503fd06c98bfd794442fdfd324f9791fe0ff8acc3132a2fe14fdf79a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_232416d503fd06c98bfd794442fdfd324f9791fe0ff8acc3132a2fe14fdf79a2->leave($__internal_232416d503fd06c98bfd794442fdfd324f9791fe0ff8acc3132a2fe14fdf79a2_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c26f305bfbc37e513869b8912cb0d8d2f2d31948b73d36ccec85cf0520c8e3b1 = $this->env->getExtension("native_profiler");
        $__internal_c26f305bfbc37e513869b8912cb0d8d2f2d31948b73d36ccec85cf0520c8e3b1->enter($__internal_c26f305bfbc37e513869b8912cb0d8d2f2d31948b73d36ccec85cf0520c8e3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "        ";
        
        $__internal_c26f305bfbc37e513869b8912cb0d8d2f2d31948b73d36ccec85cf0520c8e3b1->leave($__internal_c26f305bfbc37e513869b8912cb0d8d2f2d31948b73d36ccec85cf0520c8e3b1_prof);

    }

    public function getTemplateName()
    {
        return "FreeVRSCoreBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  126 => 35,  114 => 30,  103 => 23,  96 => 9,  90 => 8,  81 => 37,  79 => 35,  74 => 33,  70 => 32,  67 => 31,  65 => 30,  57 => 24,  55 => 23,  40 => 10,  38 => 8,  32 => 5,  26 => 1,);
    }
}
