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
        $__internal_8d7a441acb7a2c2645f7c5497d15b4a8a00724fff0798a61ab4b65eb8f992eaa = $this->env->getExtension("native_profiler");
        $__internal_8d7a441acb7a2c2645f7c5497d15b4a8a00724fff0798a61ab4b65eb8f992eaa->enter($__internal_8d7a441acb7a2c2645f7c5497d15b4a8a00724fff0798a61ab4b65eb8f992eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSShuttleRoutingBundle:Default:todays-shuttle-schedule.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d7a441acb7a2c2645f7c5497d15b4a8a00724fff0798a61ab4b65eb8f992eaa->leave($__internal_8d7a441acb7a2c2645f7c5497d15b4a8a00724fff0798a61ab4b65eb8f992eaa_prof);

    }

    // line 3
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_d2928765c12dc2a6a019302f74987d903ccb6d2cef7f67b76fee61571317d89c = $this->env->getExtension("native_profiler");
        $__internal_d2928765c12dc2a6a019302f74987d903ccb6d2cef7f67b76fee61571317d89c->enter($__internal_d2928765c12dc2a6a019302f74987d903ccb6d2cef7f67b76fee61571317d89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        
        $__internal_d2928765c12dc2a6a019302f74987d903ccb6d2cef7f67b76fee61571317d89c->leave($__internal_d2928765c12dc2a6a019302f74987d903ccb6d2cef7f67b76fee61571317d89c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b76e03c06562c5a4815b00ccad38d988a33ab539e4eec12a04788e7087f6e235 = $this->env->getExtension("native_profiler");
        $__internal_b76e03c06562c5a4815b00ccad38d988a33ab539e4eec12a04788e7087f6e235->enter($__internal_b76e03c06562c5a4815b00ccad38d988a33ab539e4eec12a04788e7087f6e235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<style type=\"text/css\">
    table.schedule thead tr th,
    table.schedule tbody tr td
    {
        padding-left: 2%;
    }
</style>
";
        
        $__internal_b76e03c06562c5a4815b00ccad38d988a33ab539e4eec12a04788e7087f6e235->leave($__internal_b76e03c06562c5a4815b00ccad38d988a33ab539e4eec12a04788e7087f6e235_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_170d71205f4e176788ea0540a1e3c65b91b7d0bb88d1327a7106929a2896dfba = $this->env->getExtension("native_profiler");
        $__internal_170d71205f4e176788ea0540a1e3c65b91b7d0bb88d1327a7106929a2896dfba->enter($__internal_170d71205f4e176788ea0540a1e3c65b91b7d0bb88d1327a7106929a2896dfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <a href=\"#\" class=\"red-text\">38 persons</a>
                    <a href=\"#\" class=\"red-text\">3 routes</a>
                </div>
            </div>
        </div>
        <div class=\"col l4 m6 s12\">
            <div class=\"card light-green lighten-1\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">07:30 PM</h3>
                </div>
                <div class=\"card-action center\">
                    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("free_vrs_shuttle_routing_view_timeslot", array("date" => "2015-08-01", "time" => "07:30")), "html", null, true);
        echo "\" class=\"green-text text-darken-4\">66 persons</a>
                    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("free_vrs_shuttle_routing_view_timeslot", array("date" => "2015-08-01", "time" => "07:30")), "html", null, true);
        echo "\" class=\"green-text text-darken-4\">5 routes</a>
                </div>
            </div>
        </div>
        <div class=\"col l4 m6 s12\">
            <div class=\"card\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">08:00 PM</h3>
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
                    <h3 class=\"light\">08:30 PM</h3>
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
                    <h3 class=\"light\">09:00 PM</h3>
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
                    <h3 class=\"light\">09:30 PM</h3>
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
        
        $__internal_170d71205f4e176788ea0540a1e3c65b91b7d0bb88d1327a7106929a2896dfba->leave($__internal_170d71205f4e176788ea0540a1e3c65b91b7d0bb88d1327a7106929a2896dfba_prof);

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
