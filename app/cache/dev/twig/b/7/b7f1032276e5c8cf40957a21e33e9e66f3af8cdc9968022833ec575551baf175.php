<?php

/* base.html.twig */
class __TwigTemplate_b7f1032276e5c8cf40957a21e33e9e66f3af8cdc9968022833ec575551baf175 extends Twig_Template
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
        $__internal_720b74f3c2e9e4b7928bf816ea2b13786b561301e314a7728a63cf39ffdaa014 = $this->env->getExtension("native_profiler");
        $__internal_720b74f3c2e9e4b7928bf816ea2b13786b561301e314a7728a63cf39ffdaa014->enter($__internal_720b74f3c2e9e4b7928bf816ea2b13786b561301e314a7728a63cf39ffdaa014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_720b74f3c2e9e4b7928bf816ea2b13786b561301e314a7728a63cf39ffdaa014->leave($__internal_720b74f3c2e9e4b7928bf816ea2b13786b561301e314a7728a63cf39ffdaa014_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_946b1eac7f7c9e27864aafb99f498a29282a11dc1e488c89991f7ddadce8bc64 = $this->env->getExtension("native_profiler");
        $__internal_946b1eac7f7c9e27864aafb99f498a29282a11dc1e488c89991f7ddadce8bc64->enter($__internal_946b1eac7f7c9e27864aafb99f498a29282a11dc1e488c89991f7ddadce8bc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_946b1eac7f7c9e27864aafb99f498a29282a11dc1e488c89991f7ddadce8bc64->leave($__internal_946b1eac7f7c9e27864aafb99f498a29282a11dc1e488c89991f7ddadce8bc64_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1244a6b2a89f28671ea28e8626c3b310dd3f73e973a44df9dc162e85c000df17 = $this->env->getExtension("native_profiler");
        $__internal_1244a6b2a89f28671ea28e8626c3b310dd3f73e973a44df9dc162e85c000df17->enter($__internal_1244a6b2a89f28671ea28e8626c3b310dd3f73e973a44df9dc162e85c000df17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1244a6b2a89f28671ea28e8626c3b310dd3f73e973a44df9dc162e85c000df17->leave($__internal_1244a6b2a89f28671ea28e8626c3b310dd3f73e973a44df9dc162e85c000df17_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb3db21ce0c5c05914aa4ff677a3ba3592045d7aee7fe8946496af9cc7e4a264 = $this->env->getExtension("native_profiler");
        $__internal_bb3db21ce0c5c05914aa4ff677a3ba3592045d7aee7fe8946496af9cc7e4a264->enter($__internal_bb3db21ce0c5c05914aa4ff677a3ba3592045d7aee7fe8946496af9cc7e4a264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb3db21ce0c5c05914aa4ff677a3ba3592045d7aee7fe8946496af9cc7e4a264->leave($__internal_bb3db21ce0c5c05914aa4ff677a3ba3592045d7aee7fe8946496af9cc7e4a264_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce6c5e83bfa65c0ed305f0ac50ecce244748555e119f393eca832e846fe2fa32 = $this->env->getExtension("native_profiler");
        $__internal_ce6c5e83bfa65c0ed305f0ac50ecce244748555e119f393eca832e846fe2fa32->enter($__internal_ce6c5e83bfa65c0ed305f0ac50ecce244748555e119f393eca832e846fe2fa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ce6c5e83bfa65c0ed305f0ac50ecce244748555e119f393eca832e846fe2fa32->leave($__internal_ce6c5e83bfa65c0ed305f0ac50ecce244748555e119f393eca832e846fe2fa32_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
