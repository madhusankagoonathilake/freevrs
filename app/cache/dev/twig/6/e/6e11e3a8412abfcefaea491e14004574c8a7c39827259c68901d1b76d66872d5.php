<?php

/* FreeVRSShuttleRoutingBundle:Default:shuttle-request.html.twig */
class __TwigTemplate_6e11e3a8412abfcefaea491e14004574c8a7c39827259c68901d1b76d66872d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FreeVRSCoreBundle:Default:base.html.twig", "FreeVRSShuttleRoutingBundle:Default:shuttle-request.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FreeVRSCoreBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4da534c554692874c5c4bf3c2d73a0bdcd360485daf2d4beff7ba92f81a8126 = $this->env->getExtension("native_profiler");
        $__internal_f4da534c554692874c5c4bf3c2d73a0bdcd360485daf2d4beff7ba92f81a8126->enter($__internal_f4da534c554692874c5c4bf3c2d73a0bdcd360485daf2d4beff7ba92f81a8126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSShuttleRoutingBundle:Default:shuttle-request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4da534c554692874c5c4bf3c2d73a0bdcd360485daf2d4beff7ba92f81a8126->leave($__internal_f4da534c554692874c5c4bf3c2d73a0bdcd360485daf2d4beff7ba92f81a8126_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_68f5eba5c8a4d6edbe27f83bce0fb52a2e011de80eb3e86e5c5fe676c5c488c9 = $this->env->getExtension("native_profiler");
        $__internal_68f5eba5c8a4d6edbe27f83bce0fb52a2e011de80eb3e86e5c5fe676c5c488c9->enter($__internal_68f5eba5c8a4d6edbe27f83bce0fb52a2e011de80eb3e86e5c5fe676c5c488c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">

    <form class=\"col l6 m12 s12\" method=\"post\" action=\"#!\">

        <h4 class=\"light\">Shuttle Request</h4>

        <div class=\"row\">
            <div class=\"input-field col l3 m5 s6\">
                <input id=\"date\" type=\"date\" class=\"datepicker\" />
                <label for=\"date\">Date</label>
            </div>
            <div class=\"input-field col l3 m5 s6\">
                <input id=\"timeslot\" name=\"timeslot\" type=\"text\" class=\"validate\" />
                <label for=\"time\">Time Slot</label>
            </div>
        </div>
        
        <div class=\"row\">
        </div>

        <div class=\"row\">
            <div class=\"col\">
                <button class=\"waves-effect waves-light btn\" type=\"submit\">Make Request</button>
                <button id=\"cancel\" class=\"btn-flat white red-text\" type=\"button\">View Past Requests</button>
            </div>
        </div>
    </form>
</div>

";
        
        $__internal_68f5eba5c8a4d6edbe27f83bce0fb52a2e011de80eb3e86e5c5fe676c5c488c9->leave($__internal_68f5eba5c8a4d6edbe27f83bce0fb52a2e011de80eb3e86e5c5fe676c5c488c9_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb6820e719aa38094b0781b9ead4e07e6d1fddb1037c10b0bf7ce65ca11f8753 = $this->env->getExtension("native_profiler");
        $__internal_cb6820e719aa38094b0781b9ead4e07e6d1fddb1037c10b0bf7ce65ca11f8753->enter($__internal_cb6820e719aa38094b0781b9ead4e07e6d1fddb1037c10b0bf7ce65ca11f8753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "<script type=\"text/javascript\">
    \$('.datepicker').pickadate({
        format: 'yyyy-mm-dd',
        selectMonths: true, 
        selectYears: 2
    });
</script>
";
        
        $__internal_cb6820e719aa38094b0781b9ead4e07e6d1fddb1037c10b0bf7ce65ca11f8753->leave($__internal_cb6820e719aa38094b0781b9ead4e07e6d1fddb1037c10b0bf7ce65ca11f8753_prof);

    }

    public function getTemplateName()
    {
        return "FreeVRSShuttleRoutingBundle:Default:shuttle-request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 36,  77 => 35,  41 => 4,  35 => 3,  11 => 1,);
    }
}
