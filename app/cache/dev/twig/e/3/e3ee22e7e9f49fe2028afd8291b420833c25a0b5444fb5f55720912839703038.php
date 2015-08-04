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
        $__internal_d1700d0b4d2805a4c506b944ef4e0646e2385da3bcab23cb283d6d4a383168d3 = $this->env->getExtension("native_profiler");
        $__internal_d1700d0b4d2805a4c506b944ef4e0646e2385da3bcab23cb283d6d4a383168d3->enter($__internal_d1700d0b4d2805a4c506b944ef4e0646e2385da3bcab23cb283d6d4a383168d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSAuthBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1700d0b4d2805a4c506b944ef4e0646e2385da3bcab23cb283d6d4a383168d3->leave($__internal_d1700d0b4d2805a4c506b944ef4e0646e2385da3bcab23cb283d6d4a383168d3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a8edee6c317ebc224d70f93cde66d8afc91e8c78489d39a5d49779a304652283 = $this->env->getExtension("native_profiler");
        $__internal_a8edee6c317ebc224d70f93cde66d8afc91e8c78489d39a5d49779a304652283->enter($__internal_a8edee6c317ebc224d70f93cde66d8afc91e8c78489d39a5d49779a304652283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">
<div class=\"row\">

    <form class=\"col l6 m12 s12\" method=\"post\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("free_vrs_auth_validate_credentials");
        echo "\">

        <h4 class=\"light\">Login</h4>
        
        <div class=\"row\">
            <div class=\"input-field col s12\">
                <input id=\"username\" name=\"username\" type=\"text\" class=\"validate\">
                <label for=\"first_name\">Username</label>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"input-field col s12\">
                <input id=\"password\" name=\"password\" type=\"password\" class=\"validate\">
                <label for=\"password\">Password</label>
            </div>
        </div>

        <div class=\"row\">
            <button class=\"waves-effect waves-light btn\" type=\"submit\">Login</button>
        </div>
    </form>
</div>
</div>
";
        
        $__internal_a8edee6c317ebc224d70f93cde66d8afc91e8c78489d39a5d49779a304652283->leave($__internal_a8edee6c317ebc224d70f93cde66d8afc91e8c78489d39a5d49779a304652283_prof);

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
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
