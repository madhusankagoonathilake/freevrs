<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f016160366a8b1bd6e079a8a1c63236109922f22f9db8dafcf7bdbcd42d77436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddfa96ea9b58db84f304630c066cacc03e0762671075e02fc5c1d3e4c2b0be44 = $this->env->getExtension("native_profiler");
        $__internal_ddfa96ea9b58db84f304630c066cacc03e0762671075e02fc5c1d3e4c2b0be44->enter($__internal_ddfa96ea9b58db84f304630c066cacc03e0762671075e02fc5c1d3e4c2b0be44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddfa96ea9b58db84f304630c066cacc03e0762671075e02fc5c1d3e4c2b0be44->leave($__internal_ddfa96ea9b58db84f304630c066cacc03e0762671075e02fc5c1d3e4c2b0be44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e942efd0319d6797eca9f20cd65c9c6d36841d8fcc2372942813bde30cc69aa6 = $this->env->getExtension("native_profiler");
        $__internal_e942efd0319d6797eca9f20cd65c9c6d36841d8fcc2372942813bde30cc69aa6->enter($__internal_e942efd0319d6797eca9f20cd65c9c6d36841d8fcc2372942813bde30cc69aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e942efd0319d6797eca9f20cd65c9c6d36841d8fcc2372942813bde30cc69aa6->leave($__internal_e942efd0319d6797eca9f20cd65c9c6d36841d8fcc2372942813bde30cc69aa6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2b8618a1576848856d6fe6d4ea3cef16b10cb3d9ff53de96aa92fe1501c977a = $this->env->getExtension("native_profiler");
        $__internal_a2b8618a1576848856d6fe6d4ea3cef16b10cb3d9ff53de96aa92fe1501c977a->enter($__internal_a2b8618a1576848856d6fe6d4ea3cef16b10cb3d9ff53de96aa92fe1501c977a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a2b8618a1576848856d6fe6d4ea3cef16b10cb3d9ff53de96aa92fe1501c977a->leave($__internal_a2b8618a1576848856d6fe6d4ea3cef16b10cb3d9ff53de96aa92fe1501c977a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fd09a20ca7fcc1b58d29f599ac91845ab13a6cda43b7ba18dbf008e4b4c5d81 = $this->env->getExtension("native_profiler");
        $__internal_2fd09a20ca7fcc1b58d29f599ac91845ab13a6cda43b7ba18dbf008e4b4c5d81->enter($__internal_2fd09a20ca7fcc1b58d29f599ac91845ab13a6cda43b7ba18dbf008e4b4c5d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2fd09a20ca7fcc1b58d29f599ac91845ab13a6cda43b7ba18dbf008e4b4c5d81->leave($__internal_2fd09a20ca7fcc1b58d29f599ac91845ab13a6cda43b7ba18dbf008e4b4c5d81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
