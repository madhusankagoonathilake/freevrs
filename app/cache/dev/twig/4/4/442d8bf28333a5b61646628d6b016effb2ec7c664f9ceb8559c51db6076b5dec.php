<?php

/* FreeVRSShuttleRoutingBundle:Default:todays-shuttle-schedule.html.twig */
class __TwigTemplate_442d8bf28333a5b61646628d6b016effb2ec7c664f9ceb8559c51db6076b5dec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FreeVRSCoreBundle:Default:base.html.twig", "FreeVRSShuttleRoutingBundle:Default:todays-shuttle-schedule.html.twig", 1);
        $this->blocks = array(
            'nav_menu' => array($this, 'block_nav_menu'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FreeVRSCoreBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7c089b79946b8409005eaf0399e7d55a1c379307b0d3edc251b3d6edef99804 = $this->env->getExtension("native_profiler");
        $__internal_f7c089b79946b8409005eaf0399e7d55a1c379307b0d3edc251b3d6edef99804->enter($__internal_f7c089b79946b8409005eaf0399e7d55a1c379307b0d3edc251b3d6edef99804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSShuttleRoutingBundle:Default:todays-shuttle-schedule.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7c089b79946b8409005eaf0399e7d55a1c379307b0d3edc251b3d6edef99804->leave($__internal_f7c089b79946b8409005eaf0399e7d55a1c379307b0d3edc251b3d6edef99804_prof);

    }

    // line 3
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_a04deb304265528c5fe1082814384d0bf87f8f55f40680d6b01c0a4bc81f4a74 = $this->env->getExtension("native_profiler");
        $__internal_a04deb304265528c5fe1082814384d0bf87f8f55f40680d6b01c0a4bc81f4a74->enter($__internal_a04deb304265528c5fe1082814384d0bf87f8f55f40680d6b01c0a4bc81f4a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        
        $__internal_a04deb304265528c5fe1082814384d0bf87f8f55f40680d6b01c0a4bc81f4a74->leave($__internal_a04deb304265528c5fe1082814384d0bf87f8f55f40680d6b01c0a4bc81f4a74_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e73becb4c95f42d5a390d3aa37689c6fd50d4b162d7e07779feea52852396056 = $this->env->getExtension("native_profiler");
        $__internal_e73becb4c95f42d5a390d3aa37689c6fd50d4b162d7e07779feea52852396056->enter($__internal_e73becb4c95f42d5a390d3aa37689c6fd50d4b162d7e07779feea52852396056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<style type=\"text/css\">
    table.schedule thead tr th,
    table.schedule tbody tr td
    {
        padding-left: 2%;
    }
</style>
";
        
        $__internal_e73becb4c95f42d5a390d3aa37689c6fd50d4b162d7e07779feea52852396056->leave($__internal_e73becb4c95f42d5a390d3aa37689c6fd50d4b162d7e07779feea52852396056_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_68053a324ad07041d43a060c68b24d26e29a393c88f5b56a1032f9509fe8ee60 = $this->env->getExtension("native_profiler");
        $__internal_68053a324ad07041d43a060c68b24d26e29a393c88f5b56a1032f9509fe8ee60->enter($__internal_68053a324ad07041d43a060c68b24d26e29a393c88f5b56a1032f9509fe8ee60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "<div class=\"container\">

    <h4 class=\"light\">Today's Shuttle Schedule</h4>

    <div class=\"row\">
        <div class=\"col l4 m6 s12\">
            <div class=\"card\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">07:00 PM</h3>
                </div>
                <div class=\"card-action center\">
                    <a href=\"#\" class=\"red-text\">38 people</a>
                    <a href=\"#\" class=\"red-text\">3 routes</a>
                </div>
            </div>
        </div>
        <div class=\"col l4 m6 s12\">
            <div class=\"card green lighten-2\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">07:30 PM</h3>
                </div>
                <div class=\"card-action center\">
                    <a href=\"#\" class=\"black-text\">66 people</a>
                    <a href=\"#\" class=\"black-text\">5 routes</a>
                </div>
            </div>
        </div>
        <div class=\"col l4 m6 s12\">
            <div class=\"card\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">08:00 PM</h3>
                </div>
                <div class=\"card-action center\">
                    <a href=\"#\" class=\"red-text\">22 people</a>
                    <a href=\"#\" class=\"red-text\">2 routes</a>
                </div>
            </div>
        </div>
        <div class=\"col l4 m6 s12\">
            <div class=\"card\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">08:30 PM</h3>
                </div>
                <div class=\"card-action center\">
                    <a href=\"#\" class=\"red-text\">40 people</a>
                    <a href=\"#\" class=\"red-text\">3 routes</a>
                </div>
            </div>
        </div>
        <div class=\"col l4 m6 s12\">
            <div class=\"card\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">09:00 PM</h3>
                </div>
                <div class=\"card-action center\">
                    <a href=\"#\" class=\"red-text\">111 people</a>
                    <a href=\"#\" class=\"red-text\">8 routes</a>
                </div>
            </div>
        </div>
        <div class=\"col l4 m6 s12\">
            <div class=\"card\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">09:30 PM</h3>
                </div>
                <div class=\"card-action center\">
                    <a href=\"#\" class=\"red-text\">12 people</a>
                    <a href=\"#\" class=\"red-text\">1 routes</a>
                </div>
            </div>

        </div>

    </div>

    <div class=\"row\">
        <div class=\"col\">
            <button class=\"btn-large\">View Past Records</button>
        </div>
    </div>

</div>

<div class=\"fixed-action-btn\" style=\"bottom: 10%; right: 1%; top: unset;\">
    <a class=\"btn-floating btn-large waves-effect waves-light red tooltipped\" href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("free_vrs_shuttle_routing_add_timeslot");
        echo "\" 
       data-tooltip=\"Add a time slot\" data-position=\"left\">
        <i class=\"material-icons\">add</i>
    </a>
</div>

";
        
        $__internal_68053a324ad07041d43a060c68b24d26e29a393c88f5b56a1032f9509fe8ee60->leave($__internal_68053a324ad07041d43a060c68b24d26e29a393c88f5b56a1032f9509fe8ee60_prof);

    }

    public function getTemplateName()
    {
        return "FreeVRSShuttleRoutingBundle:Default:todays-shuttle-schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 101,  73 => 17,  67 => 16,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }
}
