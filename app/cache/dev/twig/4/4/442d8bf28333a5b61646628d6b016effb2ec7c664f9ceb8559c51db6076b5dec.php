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
        $__internal_f9273497e97d515ff1cbcad4f0256c94be246130e6369c633b4b4346a13029bc = $this->env->getExtension("native_profiler");
        $__internal_f9273497e97d515ff1cbcad4f0256c94be246130e6369c633b4b4346a13029bc->enter($__internal_f9273497e97d515ff1cbcad4f0256c94be246130e6369c633b4b4346a13029bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSShuttleRoutingBundle:Default:todays-shuttle-schedule.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9273497e97d515ff1cbcad4f0256c94be246130e6369c633b4b4346a13029bc->leave($__internal_f9273497e97d515ff1cbcad4f0256c94be246130e6369c633b4b4346a13029bc_prof);

    }

    // line 3
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_9aacb142adf433f0c24296750279da6b8a851059cbe98c508657b9d83e6aca20 = $this->env->getExtension("native_profiler");
        $__internal_9aacb142adf433f0c24296750279da6b8a851059cbe98c508657b9d83e6aca20->enter($__internal_9aacb142adf433f0c24296750279da6b8a851059cbe98c508657b9d83e6aca20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        
        $__internal_9aacb142adf433f0c24296750279da6b8a851059cbe98c508657b9d83e6aca20->leave($__internal_9aacb142adf433f0c24296750279da6b8a851059cbe98c508657b9d83e6aca20_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91fe1bb57b5126d9847666810d3c7a604d46f43608429e2424f88a157e0fedb1 = $this->env->getExtension("native_profiler");
        $__internal_91fe1bb57b5126d9847666810d3c7a604d46f43608429e2424f88a157e0fedb1->enter($__internal_91fe1bb57b5126d9847666810d3c7a604d46f43608429e2424f88a157e0fedb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<style type=\"text/css\">
    table.schedule thead tr th,
    table.schedule tbody tr td
    {
        padding-left: 2%;
    }
</style>
";
        
        $__internal_91fe1bb57b5126d9847666810d3c7a604d46f43608429e2424f88a157e0fedb1->leave($__internal_91fe1bb57b5126d9847666810d3c7a604d46f43608429e2424f88a157e0fedb1_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_0d60693b0a3ea41b84ee05e10fe60b14c240b6219c09b6f9e466bc8c75db868a = $this->env->getExtension("native_profiler");
        $__internal_0d60693b0a3ea41b84ee05e10fe60b14c240b6219c09b6f9e466bc8c75db868a->enter($__internal_0d60693b0a3ea41b84ee05e10fe60b14c240b6219c09b6f9e466bc8c75db868a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            <div class=\"card light-green lighten-1\">
                <div class=\"card-content center\">
                    <h3 class=\"light\">07:30 PM</h3>
                </div>
                <div class=\"card-action center\">
                    <a href=\"#\" class=\"green-text text-darken-4\">66 people</a>
                    <a href=\"#\" class=\"green-text text-darken-4\">5 routes</a>
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
        
        $__internal_0d60693b0a3ea41b84ee05e10fe60b14c240b6219c09b6f9e466bc8c75db868a->leave($__internal_0d60693b0a3ea41b84ee05e10fe60b14c240b6219c09b6f9e466bc8c75db868a_prof);

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
