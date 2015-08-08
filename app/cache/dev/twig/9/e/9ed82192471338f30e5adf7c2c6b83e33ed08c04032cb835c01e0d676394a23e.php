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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_532ea0957b52cc8e6487bc415e536e9f69fb738a5a47c106ed512de5cdbac637 = $this->env->getExtension("native_profiler");
        $__internal_532ea0957b52cc8e6487bc415e536e9f69fb738a5a47c106ed512de5cdbac637->enter($__internal_532ea0957b52cc8e6487bc415e536e9f69fb738a5a47c106ed512de5cdbac637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSCoreBundle:Default:base.html.twig"));

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
    </body>
</html>
";
        
        $__internal_532ea0957b52cc8e6487bc415e536e9f69fb738a5a47c106ed512de5cdbac637->leave($__internal_532ea0957b52cc8e6487bc415e536e9f69fb738a5a47c106ed512de5cdbac637_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dfa6443a3c5fb62c8a3d07b0eb69fe86c36af1c3b5df2efc803ffb82123f0431 = $this->env->getExtension("native_profiler");
        $__internal_dfa6443a3c5fb62c8a3d07b0eb69fe86c36af1c3b5df2efc803ffb82123f0431->enter($__internal_dfa6443a3c5fb62c8a3d07b0eb69fe86c36af1c3b5df2efc803ffb82123f0431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        ";
        
        $__internal_dfa6443a3c5fb62c8a3d07b0eb69fe86c36af1c3b5df2efc803ffb82123f0431->leave($__internal_dfa6443a3c5fb62c8a3d07b0eb69fe86c36af1c3b5df2efc803ffb82123f0431_prof);

    }

    // line 23
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_50aa3f23336cc4721d3b334bb4a0edc5639c04dc5f7a25ba9419232a1f3d6341 = $this->env->getExtension("native_profiler");
        $__internal_50aa3f23336cc4721d3b334bb4a0edc5639c04dc5f7a25ba9419232a1f3d6341->enter($__internal_50aa3f23336cc4721d3b334bb4a0edc5639c04dc5f7a25ba9419232a1f3d6341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        
        $__internal_50aa3f23336cc4721d3b334bb4a0edc5639c04dc5f7a25ba9419232a1f3d6341->leave($__internal_50aa3f23336cc4721d3b334bb4a0edc5639c04dc5f7a25ba9419232a1f3d6341_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b07131801d13cb0f9d69e228f0cfdf89733e8b606eea7e00652ddfc249583a7 = $this->env->getExtension("native_profiler");
        $__internal_0b07131801d13cb0f9d69e228f0cfdf89733e8b606eea7e00652ddfc249583a7->enter($__internal_0b07131801d13cb0f9d69e228f0cfdf89733e8b606eea7e00652ddfc249583a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_0b07131801d13cb0f9d69e228f0cfdf89733e8b606eea7e00652ddfc249583a7->leave($__internal_0b07131801d13cb0f9d69e228f0cfdf89733e8b606eea7e00652ddfc249583a7_prof);

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
        return array (  108 => 30,  97 => 23,  90 => 9,  84 => 8,  73 => 33,  69 => 32,  66 => 31,  64 => 30,  56 => 24,  54 => 23,  39 => 10,  37 => 8,  31 => 5,  25 => 1,);
    }
}
