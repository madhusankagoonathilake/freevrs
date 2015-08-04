<?php

/* FreeVRSCoreBundle:Default:base.html.twig */
class __TwigTemplate_9ed82192471338f30e5adf7c2c6b83e33ed08c04032cb835c01e0d676394a23e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav_menu' => array($this, 'block_nav_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4b0a884cad75a40ded6e71d26825e2a93a0a27c889babad9610c73eca1d5a25 = $this->env->getExtension("native_profiler");
        $__internal_f4b0a884cad75a40ded6e71d26825e2a93a0a27c889babad9610c73eca1d5a25->enter($__internal_f4b0a884cad75a40ded6e71d26825e2a93a0a27c889babad9610c73eca1d5a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSCoreBundle:Default:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <!--Import materialize.css-->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/freevrscore/materialize/css/materialize.min.css"), "html", null, true);
        echo "\"  media=\"screen,projection\"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    </head>

    <body>


        <nav>
            <div class=\"row col\">

                <div class=\"nav-wrapper\">
                    <div class=\"container\">
                        <a href=\"#!\" class=\"brand-logo\">FreeVRS</a>
                       ";
        // line 20
        $this->displayBlock('nav_menu', $context, $blocks);
        // line 21
        echo "                    </div>
                </div>

            </div>
        </nav>

        ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "        <!--Import jQuery before materialize.js-->
        <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/freevrscore/jquery/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/freevrscore/materialize/js/materialize.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_f4b0a884cad75a40ded6e71d26825e2a93a0a27c889babad9610c73eca1d5a25->leave($__internal_f4b0a884cad75a40ded6e71d26825e2a93a0a27c889babad9610c73eca1d5a25_prof);

    }

    // line 20
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_405f526d5910ae93bdc8128b4c677ae90beb0b903947a90c6c5c521c1626d9a6 = $this->env->getExtension("native_profiler");
        $__internal_405f526d5910ae93bdc8128b4c677ae90beb0b903947a90c6c5c521c1626d9a6->enter($__internal_405f526d5910ae93bdc8128b4c677ae90beb0b903947a90c6c5c521c1626d9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        
        $__internal_405f526d5910ae93bdc8128b4c677ae90beb0b903947a90c6c5c521c1626d9a6->leave($__internal_405f526d5910ae93bdc8128b4c677ae90beb0b903947a90c6c5c521c1626d9a6_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_6c39c2256249c473dab0398d847b28595e38aa6163731b6885e9aa7d6a760d5e = $this->env->getExtension("native_profiler");
        $__internal_6c39c2256249c473dab0398d847b28595e38aa6163731b6885e9aa7d6a760d5e->enter($__internal_6c39c2256249c473dab0398d847b28595e38aa6163731b6885e9aa7d6a760d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_6c39c2256249c473dab0398d847b28595e38aa6163731b6885e9aa7d6a760d5e->leave($__internal_6c39c2256249c473dab0398d847b28595e38aa6163731b6885e9aa7d6a760d5e_prof);

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
        return array (  89 => 27,  78 => 20,  67 => 30,  63 => 29,  60 => 28,  58 => 27,  50 => 21,  48 => 20,  30 => 5,  24 => 1,);
    }
}
