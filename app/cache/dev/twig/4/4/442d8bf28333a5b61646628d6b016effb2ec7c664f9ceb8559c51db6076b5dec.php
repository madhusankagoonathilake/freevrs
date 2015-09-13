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
        $__internal_88c0dba8bc760cc1a4305ce20d79cdd449b249707c7b126cdd1fae37c924a79f = $this->env->getExtension("native_profiler");
        $__internal_88c0dba8bc760cc1a4305ce20d79cdd449b249707c7b126cdd1fae37c924a79f->enter($__internal_88c0dba8bc760cc1a4305ce20d79cdd449b249707c7b126cdd1fae37c924a79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSShuttleRoutingBundle:Default:todays-shuttle-schedule.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88c0dba8bc760cc1a4305ce20d79cdd449b249707c7b126cdd1fae37c924a79f->leave($__internal_88c0dba8bc760cc1a4305ce20d79cdd449b249707c7b126cdd1fae37c924a79f_prof);

    }

    // line 3
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_1b5d80df062d3a506f795a45da9bc34de7f610962878605e4ed69f3605d592d2 = $this->env->getExtension("native_profiler");
        $__internal_1b5d80df062d3a506f795a45da9bc34de7f610962878605e4ed69f3605d592d2->enter($__internal_1b5d80df062d3a506f795a45da9bc34de7f610962878605e4ed69f3605d592d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        
        $__internal_1b5d80df062d3a506f795a45da9bc34de7f610962878605e4ed69f3605d592d2->leave($__internal_1b5d80df062d3a506f795a45da9bc34de7f610962878605e4ed69f3605d592d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96a6f6a51b57f982ca4f8f2fc4a093cbde287f48fbc5bc39ddbeecae46f2764f = $this->env->getExtension("native_profiler");
        $__internal_96a6f6a51b57f982ca4f8f2fc4a093cbde287f48fbc5bc39ddbeecae46f2764f->enter($__internal_96a6f6a51b57f982ca4f8f2fc4a093cbde287f48fbc5bc39ddbeecae46f2764f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<style type=\"text/css\">
    table.schedule thead tr th,
    table.schedule tbody tr td
    {
        padding-left: 2%;
    }
</style>
";
        
        $__internal_96a6f6a51b57f982ca4f8f2fc4a093cbde287f48fbc5bc39ddbeecae46f2764f->leave($__internal_96a6f6a51b57f982ca4f8f2fc4a093cbde287f48fbc5bc39ddbeecae46f2764f_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4a6d3c8dfc86726f46197e2f5719b9563284c6c1adb841f31015d005112ca31 = $this->env->getExtension("native_profiler");
        $__internal_e4a6d3c8dfc86726f46197e2f5719b9563284c6c1adb841f31015d005112ca31->enter($__internal_e4a6d3c8dfc86726f46197e2f5719b9563284c6c1adb841f31015d005112ca31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "<div class=\"container\">

    <h4 class=\"light\">Today's Shuttle Schedule</h4>

    <div class=\"row\">
        <div class=\"col l4 m6 s12\">
            <div class=\"card\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">7:00 PM</h3>
                </div>
                <div class=\"card-action center\">
                    <a href=\"#\" class=\"red-text\">38 persons</a>
                    <a href=\"#\" class=\"red-text\">3 routes</a>
                </div>
            </div>
        </div>
        <div class=\"col l4 m6 s12\">
            <div class=\"card light-green lighten-1\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">7:30 PM</h3>
                </div>
                <div class=\"card-action center\">
                    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("free_vrs_shuttle_routing_view_timeslot", array("date" => "2015-08-01", "time" => "7:30")), "html", null, true);
        echo "\" class=\"green-text text-darken-4\">66 persons</a>
                    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("free_vrs_shuttle_routing_view_timeslot", array("date" => "2015-08-01", "time" => "7:30")), "html", null, true);
        echo "\" class=\"green-text text-darken-4\">5 routes</a>
                </div>
            </div>
        </div>
        <div class=\"col l4 m6 s12\">
            <div class=\"card\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">8:00 PM</h3>
                </div>
                <div class=\"card-action center\">
                    <a href=\"#\" class=\"red-text\">22 persons</a>
                    <a href=\"#\" class=\"red-text\">2 routes</a>
                </div>
            </div>
        </div>
        <div class=\"col l4 m6 s12\">
            <div class=\"card\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">8:30 PM</h3>
                </div>
                <div class=\"card-action center\">
                    <a href=\"#\" class=\"red-text\">40 persons</a>
                    <a href=\"#\" class=\"red-text\">3 routes</a>
                </div>
            </div>
        </div>
        <div class=\"col l4 m6 s12\">
            <div class=\"card\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">9:00 PM</h3>
                </div>
                <div class=\"card-action center\">
                    <a href=\"#\" class=\"red-text\">111 persons</a>
                    <a href=\"#\" class=\"red-text\">8 routes</a>
                </div>
            </div>
        </div>
        <div class=\"col l4 m6 s12\">
            <div class=\"card\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">9:30 PM</h3>
                </div>
                <div class=\"card-action center\">
                    <a href=\"#\" class=\"red-text\">12 persons</a>
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
        
        $__internal_e4a6d3c8dfc86726f46197e2f5719b9563284c6c1adb841f31015d005112ca31->leave($__internal_e4a6d3c8dfc86726f46197e2f5719b9563284c6c1adb841f31015d005112ca31_prof);

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
        return array (  165 => 101,  101 => 40,  97 => 39,  73 => 17,  67 => 16,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }
}
