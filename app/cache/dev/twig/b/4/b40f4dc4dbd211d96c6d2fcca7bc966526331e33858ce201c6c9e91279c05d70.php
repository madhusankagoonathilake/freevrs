<?php

/* FreeVRSShuttleRoutingBundle:Default:route.html.twig */
class __TwigTemplate_b40f4dc4dbd211d96c6d2fcca7bc966526331e33858ce201c6c9e91279c05d70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FreeVRSCoreBundle:Default:base.html.twig", "FreeVRSShuttleRoutingBundle:Default:route.html.twig", 1);
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
        $__internal_13b6de7d831770fc796f8d062f65419809ba65863927562f1dd28bfa19ee4224 = $this->env->getExtension("native_profiler");
        $__internal_13b6de7d831770fc796f8d062f65419809ba65863927562f1dd28bfa19ee4224->enter($__internal_13b6de7d831770fc796f8d062f65419809ba65863927562f1dd28bfa19ee4224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSShuttleRoutingBundle:Default:route.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b6de7d831770fc796f8d062f65419809ba65863927562f1dd28bfa19ee4224->leave($__internal_13b6de7d831770fc796f8d062f65419809ba65863927562f1dd28bfa19ee4224_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_13017e42c0dc0a5c64e623fce34505cb842ed96040401bd70a537eb22a5a0a93 = $this->env->getExtension("native_profiler");
        $__internal_13017e42c0dc0a5c64e623fce34505cb842ed96040401bd70a537eb22a5a0a93->enter($__internal_13017e42c0dc0a5c64e623fce34505cb842ed96040401bd70a537eb22a5a0a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">
    <h4 class=\"light\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["routeName"]) ? $context["routeName"] : $this->getContext($context, "routeName")), "html", null, true);
        echo " of Time Slot ";
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo " on ";
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo " </h4>
    <div class=\"row\">

        <div class=\"card col l8 m10 s12\">
            <div class=\"card-image\">
                <img border=\"0\" src=\"//maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&amp;zoom=13&amp;size=600x300&amp;maptype=roadmap&amp;markers=color:blue%7Clabel:S%7C40.702147,-74.015794&amp;markers=color:green%7Clabel:G%7C40.711614,-74.012318&amp;markers=color:red%7Clabel:C%7C40.718217,-73.998284\" alt=\"Route to the Destination\">
            </div>
            <div class=\"card-content\">
                <table>
                    <tbody>
                        <tr>
                            <th>Vehicle</th>
                            <td>WPL 34562</td>
                        </tr>
                        <tr>
                            <th>Driver</th>
                            <td>Alan Taylor</td>
                        </tr>
                        <tr>
                            <th>Distance</th>
                            <td>108 km</td>
                        </tr>
                        <tr>
                            <th style=\"vertical-align: top\">Passengers</th>
                            <td>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Passenger 1</td>
                                            <td>Destination</td>
                                        </tr>
                                        <tr>
                                            <td>Passenger 2</td>
                                            <td>Destination</td>
                                        </tr>
                                        <tr>
                                            <td>Passenger 3</td>
                                            <td>Destination</td>
                                        </tr>
                                        <tr>
                                            <td>Passenger 4</td>
                                            <td>Destination</td>
                                        </tr>
                                        <tr>
                                            <td>Passenger 5</td>
                                            <td>Destination</td>
                                        </tr>
                                        <tr>
                                            <td>Passenger 6</td>
                                            <td>Destination</td>
                                        </tr>
                                        <tr>
                                            <td>Passenger 7</td>
                                            <td>Destination</td>
                                        </tr>
                                        <tr>
                                            <td>Passenger 8</td>
                                            <td>Destination</td>
                                        </tr>
                                        <tr>
                                            <td>Passenger 9</td>
                                            <td>Destination</td>
                                        </tr>
                                        <tr>
                                            <td>Passenger 10</td>
                                            <td>Destination</td>
                                        </tr>
                                        <tr>
                                            <td>Passenger 11</td>
                                            <td>Destination</td>
                                        </tr>
                                        <tr>
                                            <td>Passenger 12</td>
                                            <td>Destination</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_13017e42c0dc0a5c64e623fce34505cb842ed96040401bd70a537eb22a5a0a93->leave($__internal_13017e42c0dc0a5c64e623fce34505cb842ed96040401bd70a537eb22a5a0a93_prof);

    }

    public function getTemplateName()
    {
        return "FreeVRSShuttleRoutingBundle:Default:route.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
