<?php

/* FreeVRSShuttleRoutingBundle:Default:current-request-status.html.twig */
class __TwigTemplate_864fadfb567ea7fbb2bb868142b4299b5bf700cd90803cf5f3ef0ccc458b8531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FreeVRSCoreBundle:Default:base.html.twig", "FreeVRSShuttleRoutingBundle:Default:current-request-status.html.twig", 1);
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
        $__internal_12f8f55648ad2c0f7efe58e80e812feb9e238fba00aa4f339841034b34c890d3 = $this->env->getExtension("native_profiler");
        $__internal_12f8f55648ad2c0f7efe58e80e812feb9e238fba00aa4f339841034b34c890d3->enter($__internal_12f8f55648ad2c0f7efe58e80e812feb9e238fba00aa4f339841034b34c890d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSShuttleRoutingBundle:Default:current-request-status.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12f8f55648ad2c0f7efe58e80e812feb9e238fba00aa4f339841034b34c890d3->leave($__internal_12f8f55648ad2c0f7efe58e80e812feb9e238fba00aa4f339841034b34c890d3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3eddc8c886ced4f9918590a728d1c074b7bb65fa575ca6fdab301304c0f4a34b = $this->env->getExtension("native_profiler");
        $__internal_3eddc8c886ced4f9918590a728d1c074b7bb65fa575ca6fdab301304c0f4a34b->enter($__internal_3eddc8c886ced4f9918590a728d1c074b7bb65fa575ca6fdab301304c0f4a34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">
    <h4 class=\"light\">Current Shuttle Request Status</h4>

    <div class=\"card col l8 m10 s12\">
        <div class=\"card-image\">
            <img border=\"0\" src=\"//maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&amp;zoom=13&amp;size=600x300&amp;maptype=roadmap&amp;markers=color:blue%7Clabel:S%7C40.702147,-74.015794&amp;markers=color:green%7Clabel:G%7C40.711614,-74.012318&amp;markers=color:red%7Clabel:C%7C40.718217,-73.998284\" alt=\"Points of Interest in Lower Manhattan\">
        </div>
        <div class=\"card-content\">
            <p class=\"flow-text\"><strong>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["timeLeft"]) ? $context["timeLeft"] : $this->getContext($context, "timeLeft")), "html", null, true);
        echo "</strong> remaining for your shuttle.</p>
        </div>
        <div class=\"card-action\">
            <a href=\"#\" class=\"red-text\">Request History</a>
        </div>
    </div>


    <a href=\"#\"></a>
</div>
";
        
        $__internal_3eddc8c886ced4f9918590a728d1c074b7bb65fa575ca6fdab301304c0f4a34b->leave($__internal_3eddc8c886ced4f9918590a728d1c074b7bb65fa575ca6fdab301304c0f4a34b_prof);

    }

    public function getTemplateName()
    {
        return "FreeVRSShuttleRoutingBundle:Default:current-request-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
