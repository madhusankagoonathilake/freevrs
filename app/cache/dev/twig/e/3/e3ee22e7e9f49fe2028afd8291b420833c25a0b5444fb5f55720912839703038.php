<?php

/* FreeVRSAuthBundle:Default:login.html.twig */
class __TwigTemplate_e3ee22e7e9f49fe2028afd8291b420833c25a0b5444fb5f55720912839703038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FreeVRSCoreBundle:Default:base.html.twig", "FreeVRSAuthBundle:Default:login.html.twig", 1);
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
        $__internal_39e870eb698cf3948a63589a36bea6fa297fe3598a8fd66c4f9ef3021b6ea0cd = $this->env->getExtension("native_profiler");
        $__internal_39e870eb698cf3948a63589a36bea6fa297fe3598a8fd66c4f9ef3021b6ea0cd->enter($__internal_39e870eb698cf3948a63589a36bea6fa297fe3598a8fd66c4f9ef3021b6ea0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSAuthBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39e870eb698cf3948a63589a36bea6fa297fe3598a8fd66c4f9ef3021b6ea0cd->leave($__internal_39e870eb698cf3948a63589a36bea6fa297fe3598a8fd66c4f9ef3021b6ea0cd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bcb50e5f5974a36bb116bf1165fe16b625fd5138b631c517dbb73ee24865aae5 = $this->env->getExtension("native_profiler");
        $__internal_bcb50e5f5974a36bb116bf1165fe16b625fd5138b631c517dbb73ee24865aae5->enter($__internal_bcb50e5f5974a36bb116bf1165fe16b625fd5138b631c517dbb73ee24865aae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">

    <form class=\"col l6 m12 s12\" method=\"post\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("free_vrs_auth_validate_credentials");
        echo "\">

        <h4 class=\"light\">Login</h4>

        <div class=\"row\">
            <div class=\"input-field col l4 m8 s10\">
                <input id=\"username\" name=\"username\" type=\"text\" class=\"validate\" />
                <label for=\"first_name\">Username</label>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col l4 m8 s10\">
                <input id=\"password\" name=\"password\" type=\"password\" class=\"validate\" />
                <label for=\"password\">Password</label>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col\">
                <button class=\"waves-effect waves-light btn\" type=\"submit\">Login</button>
            </div>
        </div>
    </form>
</div>
";
        
        $__internal_bcb50e5f5974a36bb116bf1165fe16b625fd5138b631c517dbb73ee24865aae5->leave($__internal_bcb50e5f5974a36bb116bf1165fe16b625fd5138b631c517dbb73ee24865aae5_prof);

    }

    public function getTemplateName()
    {
        return "FreeVRSAuthBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
