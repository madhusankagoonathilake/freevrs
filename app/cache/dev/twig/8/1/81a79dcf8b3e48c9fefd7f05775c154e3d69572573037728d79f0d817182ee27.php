<?php

/* FreeVRSShuttleRoutingBundle:Default:add-time-slot.html.twig */
class __TwigTemplate_81a79dcf8b3e48c9fefd7f05775c154e3d69572573037728d79f0d817182ee27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FreeVRSCoreBundle:Default:base.html.twig", "FreeVRSShuttleRoutingBundle:Default:add-time-slot.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FreeVRSCoreBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_341665f3aba11c1152f4217c832008afa38b0c3c2ad074d8f0533cdd93282a06 = $this->env->getExtension("native_profiler");
        $__internal_341665f3aba11c1152f4217c832008afa38b0c3c2ad074d8f0533cdd93282a06->enter($__internal_341665f3aba11c1152f4217c832008afa38b0c3c2ad074d8f0533cdd93282a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSShuttleRoutingBundle:Default:add-time-slot.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_341665f3aba11c1152f4217c832008afa38b0c3c2ad074d8f0533cdd93282a06->leave($__internal_341665f3aba11c1152f4217c832008afa38b0c3c2ad074d8f0533cdd93282a06_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d8670c4705b11e6000f25cece052abdfa79bc257e59a06fa2073e3777b2b864 = $this->env->getExtension("native_profiler");
        $__internal_9d8670c4705b11e6000f25cece052abdfa79bc257e59a06fa2073e3777b2b864->enter($__internal_9d8670c4705b11e6000f25cece052abdfa79bc257e59a06fa2073e3777b2b864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">

    <form class=\"col l6 m12 s12\" method=\"post\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("free_vrs_auth_validate_credentials");
        echo "\">

        <h4 class=\"light\">Add Time Slot</h4>

        <div class=\"row\">
            <div class=\"input-field col l3 m5 s6\">
                <input id=\"date\" type=\"date\" class=\"datepicker\" />
                <label for=\"date\">Date</label>
            </div>
            <div class=\"input-field col l3 m5 s6\">
                <input id=\"time\" name=\"time\" type=\"text\" class=\"validate\" />
                <label for=\"time\">Time</label>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col l5 m7 s9\">
                
                <p class=\"range-field\">
                    <input id=\"no_of_vehicles\" type=\"range\" min=\"1\" max=\"100\" value=\"1\" data-target=\"#no_of_vehicles_display\" />
                    
                </p>
                <label for=\"no_of_vehicles\">No. of Vehicles</label>
            </div>
            <div class=\"col l7 m5 s3\">
                <h4 id=\"no_of_vehicles_display\" class=\"range-display\">1</h4>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"input-field col l5 m7 s9\">    
                <p class=\"range-field\">
                    <input id=\"capacity\" type=\"range\" min=\"2\" max=\"100\" value=\"1\" data-target=\"#capacity_display\" />
                </p>
                <label for=\"capacity\">Vehicle Capacity</label>
            </div>
            <div class=\"col l7 m5 s3\">
                <h4 id=\"capacity_display\" class=\"range-display\">1</h4>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col\">
                <button class=\"waves-effect waves-light btn\" type=\"submit\">Add</button>
                <button class=\"btn-flat white red-text\" type=\"button\">Cancel</button>
            </div>
        </div>
    </form>
</div>

";
        
        $__internal_9d8670c4705b11e6000f25cece052abdfa79bc257e59a06fa2073e3777b2b864->leave($__internal_9d8670c4705b11e6000f25cece052abdfa79bc257e59a06fa2073e3777b2b864_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_213807547788a303d3a0b8b3183325b14d350a5c235537bf27bffb4d8c993d6a = $this->env->getExtension("native_profiler");
        $__internal_213807547788a303d3a0b8b3183325b14d350a5c235537bf27bffb4d8c993d6a->enter($__internal_213807547788a303d3a0b8b3183325b14d350a5c235537bf27bffb4d8c993d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "<script type=\"text/javascript\">
    \$('.datepicker').pickadate({
        format: 'yyyy-mm-dd',
        selectMonths: true, 
        selectYears: 2
    });
    
    \$('input[type=\"range\"]').on('input', function() {
        \$(\$(this).data('target')).html(\$(this).val());
    });
</script>
";
        
        $__internal_213807547788a303d3a0b8b3183325b14d350a5c235537bf27bffb4d8c993d6a->leave($__internal_213807547788a303d3a0b8b3183325b14d350a5c235537bf27bffb4d8c993d6a_prof);

    }

    // line 71
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b4bfaeaa665117d2c38c6a4d88842d2cd5acaf338fecc40295e8444c79df25c = $this->env->getExtension("native_profiler");
        $__internal_1b4bfaeaa665117d2c38c6a4d88842d2cd5acaf338fecc40295e8444c79df25c->enter($__internal_1b4bfaeaa665117d2c38c6a4d88842d2cd5acaf338fecc40295e8444c79df25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 72
        echo "<style type=\"text/css\">
    .range-field {
        margin-top: 30px;
    }
    .range-display {
        margin-top: 40px;
    }
</style>
";
        
        $__internal_1b4bfaeaa665117d2c38c6a4d88842d2cd5acaf338fecc40295e8444c79df25c->leave($__internal_1b4bfaeaa665117d2c38c6a4d88842d2cd5acaf338fecc40295e8444c79df25c_prof);

    }

    public function getTemplateName()
    {
        return "FreeVRSShuttleRoutingBundle:Default:add-time-slot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 72,  127 => 71,  109 => 58,  103 => 57,  46 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }
}
