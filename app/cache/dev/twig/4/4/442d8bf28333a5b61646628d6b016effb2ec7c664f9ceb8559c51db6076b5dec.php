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
        $__internal_878090015636ba77269ccaf1fdc0731bcc5372cd924b2c35e653c8c8dc00e8d3 = $this->env->getExtension("native_profiler");
        $__internal_878090015636ba77269ccaf1fdc0731bcc5372cd924b2c35e653c8c8dc00e8d3->enter($__internal_878090015636ba77269ccaf1fdc0731bcc5372cd924b2c35e653c8c8dc00e8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSShuttleRoutingBundle:Default:todays-shuttle-schedule.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_878090015636ba77269ccaf1fdc0731bcc5372cd924b2c35e653c8c8dc00e8d3->leave($__internal_878090015636ba77269ccaf1fdc0731bcc5372cd924b2c35e653c8c8dc00e8d3_prof);

    }

    // line 3
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_e9f45ed7791351e570221158e66eb1cb6b5d928dc1d8506a43eb4e1619278c18 = $this->env->getExtension("native_profiler");
        $__internal_e9f45ed7791351e570221158e66eb1cb6b5d928dc1d8506a43eb4e1619278c18->enter($__internal_e9f45ed7791351e570221158e66eb1cb6b5d928dc1d8506a43eb4e1619278c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        
        $__internal_e9f45ed7791351e570221158e66eb1cb6b5d928dc1d8506a43eb4e1619278c18->leave($__internal_e9f45ed7791351e570221158e66eb1cb6b5d928dc1d8506a43eb4e1619278c18_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4319ff965acf5d05e25508fac1d193fe93c0acd6ee1f13ff72a7ce9468e05fa4 = $this->env->getExtension("native_profiler");
        $__internal_4319ff965acf5d05e25508fac1d193fe93c0acd6ee1f13ff72a7ce9468e05fa4->enter($__internal_4319ff965acf5d05e25508fac1d193fe93c0acd6ee1f13ff72a7ce9468e05fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<style type=\"text/css\">
    table.schedule thead tr th,
    table.schedule tbody tr td
    {
        padding-left: 2%;
    }
</style>
";
        
        $__internal_4319ff965acf5d05e25508fac1d193fe93c0acd6ee1f13ff72a7ce9468e05fa4->leave($__internal_4319ff965acf5d05e25508fac1d193fe93c0acd6ee1f13ff72a7ce9468e05fa4_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_bedb31e901f21dc17badf5610a5345cb4f66f89787be6f8e00bd68c0e2d4c0df = $this->env->getExtension("native_profiler");
        $__internal_bedb31e901f21dc17badf5610a5345cb4f66f89787be6f8e00bd68c0e2d4c0df->enter($__internal_bedb31e901f21dc17badf5610a5345cb4f66f89787be6f8e00bd68c0e2d4c0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
    <a class=\"btn-floating btn-large waves-effect waves-light red tooltipped\" data-tooltip=\"Add a time slot\" data-position=\"left\">
        <i class=\"material-icons\">add</i>
    </a>
</div>

";
        
        $__internal_bedb31e901f21dc17badf5610a5345cb4f66f89787be6f8e00bd68c0e2d4c0df->leave($__internal_bedb31e901f21dc17badf5610a5345cb4f66f89787be6f8e00bd68c0e2d4c0df_prof);

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
        return array (  73 => 17,  67 => 16,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }
}
