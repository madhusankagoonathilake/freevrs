<?php

/* FreeVRSShuttleRoutingBundle:Default:index.html.twig */
class __TwigTemplate_b09e7c0eafa367e91225996f324d84b276bb0a03e889273681e37bbb366566b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FreeVRSCoreBundle:Default:base.html.twig", "FreeVRSShuttleRoutingBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FreeVRSCoreBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_887c8d427444e230352604ff894a20b1b7594016b29725513ad1ac01be26ee2c = $this->env->getExtension("native_profiler");
        $__internal_887c8d427444e230352604ff894a20b1b7594016b29725513ad1ac01be26ee2c->enter($__internal_887c8d427444e230352604ff894a20b1b7594016b29725513ad1ac01be26ee2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSShuttleRoutingBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_887c8d427444e230352604ff894a20b1b7594016b29725513ad1ac01be26ee2c->leave($__internal_887c8d427444e230352604ff894a20b1b7594016b29725513ad1ac01be26ee2c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8736e35e838ea9bb773c3a64f4ea540d1a6e61495cca272b0cb5bfa5b093c9ab = $this->env->getExtension("native_profiler");
        $__internal_8736e35e838ea9bb773c3a64f4ea540d1a6e61495cca272b0cb5bfa5b093c9ab->enter($__internal_8736e35e838ea9bb773c3a64f4ea540d1a6e61495cca272b0cb5bfa5b093c9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">
    <h4 class=\"light\">Dashboard of ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</h4>
</div>
";
        
        $__internal_8736e35e838ea9bb773c3a64f4ea540d1a6e61495cca272b0cb5bfa5b093c9ab->leave($__internal_8736e35e838ea9bb773c3a64f4ea540d1a6e61495cca272b0cb5bfa5b093c9ab_prof);

    }

    public function getTemplateName()
    {
        return "FreeVRSShuttleRoutingBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
