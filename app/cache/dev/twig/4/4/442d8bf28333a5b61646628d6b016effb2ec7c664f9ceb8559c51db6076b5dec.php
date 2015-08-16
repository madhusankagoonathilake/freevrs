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
        $__internal_aa741357f3db90c70a89fc5c1b8934ce50235679f619051ee1db357f511686e5 = $this->env->getExtension("native_profiler");
        $__internal_aa741357f3db90c70a89fc5c1b8934ce50235679f619051ee1db357f511686e5->enter($__internal_aa741357f3db90c70a89fc5c1b8934ce50235679f619051ee1db357f511686e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSShuttleRoutingBundle:Default:todays-shuttle-schedule.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa741357f3db90c70a89fc5c1b8934ce50235679f619051ee1db357f511686e5->leave($__internal_aa741357f3db90c70a89fc5c1b8934ce50235679f619051ee1db357f511686e5_prof);

    }

    // line 3
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_2e125a73fb4ba5ca196434dfe0813d655e6e0e569f654a99c30a56b8b25338b5 = $this->env->getExtension("native_profiler");
        $__internal_2e125a73fb4ba5ca196434dfe0813d655e6e0e569f654a99c30a56b8b25338b5->enter($__internal_2e125a73fb4ba5ca196434dfe0813d655e6e0e569f654a99c30a56b8b25338b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        
        $__internal_2e125a73fb4ba5ca196434dfe0813d655e6e0e569f654a99c30a56b8b25338b5->leave($__internal_2e125a73fb4ba5ca196434dfe0813d655e6e0e569f654a99c30a56b8b25338b5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b83a3142b9470a1d4c56a2ea264cc832854c0797895047fba87f193c3925b34 = $this->env->getExtension("native_profiler");
        $__internal_3b83a3142b9470a1d4c56a2ea264cc832854c0797895047fba87f193c3925b34->enter($__internal_3b83a3142b9470a1d4c56a2ea264cc832854c0797895047fba87f193c3925b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<style type=\"text/css\">
    table.schedule thead tr th,
    table.schedule tbody tr td
    {
        padding-left: 2%;
    }
</style>
";
        
        $__internal_3b83a3142b9470a1d4c56a2ea264cc832854c0797895047fba87f193c3925b34->leave($__internal_3b83a3142b9470a1d4c56a2ea264cc832854c0797895047fba87f193c3925b34_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_27faaebe424dfd7acc0b43102a6ca1117892922784cefb0285a874daa7ce1677 = $this->env->getExtension("native_profiler");
        $__internal_27faaebe424dfd7acc0b43102a6ca1117892922784cefb0285a874daa7ce1677->enter($__internal_27faaebe424dfd7acc0b43102a6ca1117892922784cefb0285a874daa7ce1677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_27faaebe424dfd7acc0b43102a6ca1117892922784cefb0285a874daa7ce1677->leave($__internal_27faaebe424dfd7acc0b43102a6ca1117892922784cefb0285a874daa7ce1677_prof);

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
