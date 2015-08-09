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
        $__internal_ea98b885a993649e24b7ca1e52447498705332aed470fed1824f8f8bb342b45b = $this->env->getExtension("native_profiler");
        $__internal_ea98b885a993649e24b7ca1e52447498705332aed470fed1824f8f8bb342b45b->enter($__internal_ea98b885a993649e24b7ca1e52447498705332aed470fed1824f8f8bb342b45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSShuttleRoutingBundle:Default:add-time-slot.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea98b885a993649e24b7ca1e52447498705332aed470fed1824f8f8bb342b45b->leave($__internal_ea98b885a993649e24b7ca1e52447498705332aed470fed1824f8f8bb342b45b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a16455436e348e524f2ae076d880e60c4f608f4fecd213b497ed633c3447ff7 = $this->env->getExtension("native_profiler");
        $__internal_6a16455436e348e524f2ae076d880e60c4f608f4fecd213b497ed633c3447ff7->enter($__internal_6a16455436e348e524f2ae076d880e60c4f608f4fecd213b497ed633c3447ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">

    <form class=\"col l6 m12 s12\" method=\"post\" action=\"#!\">

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
                <button id=\"cancel\" class=\"btn-flat white red-text\" type=\"button\">Cancel</button>
            </div>
        </div>
    </form>
</div>

";
        
        $__internal_6a16455436e348e524f2ae076d880e60c4f608f4fecd213b497ed633c3447ff7->leave($__internal_6a16455436e348e524f2ae076d880e60c4f608f4fecd213b497ed633c3447ff7_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52997d84db6df9bb91a40f26ed2ddd91e7ddf2693bff1851d822781c32da9093 = $this->env->getExtension("native_profiler");
        $__internal_52997d84db6df9bb91a40f26ed2ddd91e7ddf2693bff1851d822781c32da9093->enter($__internal_52997d84db6df9bb91a40f26ed2ddd91e7ddf2693bff1851d822781c32da9093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
    
    \$('#cancel').on('click', function() {
        location.href = '";
        // line 70
        echo $this->env->getExtension('routing')->getPath("free_vrs_shuttle_routing_homepage");
        echo "';
    });
</script>
";
        
        $__internal_52997d84db6df9bb91a40f26ed2ddd91e7ddf2693bff1851d822781c32da9093->leave($__internal_52997d84db6df9bb91a40f26ed2ddd91e7ddf2693bff1851d822781c32da9093_prof);

    }

    // line 75
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af6f01086960face0328ae9b29a77675f648cbbe7187bc092a786443ebc614ba = $this->env->getExtension("native_profiler");
        $__internal_af6f01086960face0328ae9b29a77675f648cbbe7187bc092a786443ebc614ba->enter($__internal_af6f01086960face0328ae9b29a77675f648cbbe7187bc092a786443ebc614ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 76
        echo "<style type=\"text/css\">
    .range-field {
        margin-top: 30px;
    }
    .range-display {
        margin-top: 40px;
    }
</style>
";
        
        $__internal_af6f01086960face0328ae9b29a77675f648cbbe7187bc092a786443ebc614ba->leave($__internal_af6f01086960face0328ae9b29a77675f648cbbe7187bc092a786443ebc614ba_prof);

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
        return array (  137 => 76,  131 => 75,  120 => 70,  106 => 58,  100 => 57,  42 => 4,  36 => 3,  11 => 1,);
    }
}
