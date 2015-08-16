<?php

/* FreeVRSShuttleRoutingBundle:Default:time-slot.html.twig */
class __TwigTemplate_7bba0512807b9f102d71387ab896ef44f1e1d26267816b4ff68313d654ed38ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FreeVRSCoreBundle:Default:base.html.twig", "FreeVRSShuttleRoutingBundle:Default:time-slot.html.twig", 1);
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
        $__internal_811f5ecd9ca139f435486af172c10a24b3cf4ff5ab1bf256cb82b25fbf6ae1ec = $this->env->getExtension("native_profiler");
        $__internal_811f5ecd9ca139f435486af172c10a24b3cf4ff5ab1bf256cb82b25fbf6ae1ec->enter($__internal_811f5ecd9ca139f435486af172c10a24b3cf4ff5ab1bf256cb82b25fbf6ae1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FreeVRSShuttleRoutingBundle:Default:time-slot.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_811f5ecd9ca139f435486af172c10a24b3cf4ff5ab1bf256cb82b25fbf6ae1ec->leave($__internal_811f5ecd9ca139f435486af172c10a24b3cf4ff5ab1bf256cb82b25fbf6ae1ec_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a1cb328dddf7c3a72fc1005ae96ba8ca46222ae54903f824c4610b1e86154d4 = $this->env->getExtension("native_profiler");
        $__internal_5a1cb328dddf7c3a72fc1005ae96ba8ca46222ae54903f824c4610b1e86154d4->enter($__internal_5a1cb328dddf7c3a72fc1005ae96ba8ca46222ae54903f824c4610b1e86154d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">
    <h4 class=\"light\">Shuttle Schedule at ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo " on ";
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo " </h4>


    <div class=\"row\">
        
        <div class=\"col l6 m6 s12\">

            <div class=\"card\">
                <div class=\"card-image\">
                    <img border=\"0\" src=\"//maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&amp;zoom=13&amp;size=600x300&amp;maptype=roadmap&amp;markers=color:blue%7Clabel:S%7C40.702147,-74.015794&amp;markers=color:green%7Clabel:G%7C40.711614,-74.012318&amp;markers=color:red%7Clabel:C%7C40.718217,-73.998284\" alt=\"Route to the Destination\">
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title activator grey-text text-darken-4\">Route 1
                        <i class=\"material-icons right\">more_vert</i>
                    </span>
                    
                </div>
                <div class=\"card-action card-reveal\">
                    <span class=\"card-title grey-text text-darken-4\">Route 1<i class=\"material-icons right\">close</i></span>
                    <table>
                        <tbody>
                            <tr>
                                <th>Total Distance</th>
                                <td>108 km</td>
                            </tr>
                            <tr>
                                <th>Total Saving</th>
                                <td>27 km</td>
                            </tr>
                            <tr>
                                <th>No. of Passengers</th>
                                <td>12</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan=\"2\">
                                    <a href=\"#!\" class=\"red-text\">Details</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        
        <div class=\"col l6 m6 s12\">

            <div class=\"card\">
                <div class=\"card-image\">
                    <img border=\"0\" src=\"//maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&amp;zoom=13&amp;size=600x300&amp;maptype=roadmap&amp;markers=color:blue%7Clabel:S%7C40.702147,-74.015794&amp;markers=color:green%7Clabel:G%7C40.711614,-74.012318&amp;markers=color:red%7Clabel:C%7C40.718217,-73.998284\" alt=\"Route to the Destination\">
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title activator grey-text text-darken-4\">Route 2
                        <i class=\"material-icons right\">more_vert</i>
                    </span>
                    
                </div>
                <div class=\"card-action card-reveal\">
                    <span class=\"card-title grey-text text-darken-4\">Route 2<i class=\"material-icons right\">close</i></span>
                    <table>
                        <tbody>
                            <tr>
                                <th>Total Distance</th>
                                <td>135 km</td>
                            </tr>
                            <tr>
                                <th>Total Saving</th>
                                <td>33 km</td>
                            </tr>
                            <tr>
                                <th>No. of Passengers</th>
                                <td>15</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan=\"2\">
                                    <a href=\"#!\" class=\"red-text\">Details</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        
        <div class=\"col l6 m6 s12\">

            <div class=\"card\">
                <div class=\"card-image\">
                    <img border=\"0\" src=\"//maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&amp;zoom=13&amp;size=600x300&amp;maptype=roadmap&amp;markers=color:blue%7Clabel:S%7C40.702147,-74.015794&amp;markers=color:green%7Clabel:G%7C40.711614,-74.012318&amp;markers=color:red%7Clabel:C%7C40.718217,-73.998284\" alt=\"Route to the Destination\">
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title activator grey-text text-darken-4\">Route 3
                        <i class=\"material-icons right\">more_vert</i>
                    </span>
                    
                </div>
                <div class=\"card-action card-reveal\">
                    <span class=\"card-title grey-text text-darken-4\">Route 3<i class=\"material-icons right\">close</i></span>
                    <table>
                        <tbody>
                            <tr>
                                <th>Total Distance</th>
                                <td>129 km</td>
                            </tr>
                            <tr>
                                <th>Total Saving</th>
                                <td>32 km</td>
                            </tr>
                            <tr>
                                <th>No. of Passengers</th>
                                <td>14</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan=\"2\">
                                    <a href=\"#!\" class=\"red-text\">Details</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        
        <div class=\"col l6 m6 s12\">

            <div class=\"card\">
                <div class=\"card-image\">
                    <img border=\"0\" src=\"//maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&amp;zoom=13&amp;size=600x300&amp;maptype=roadmap&amp;markers=color:blue%7Clabel:S%7C40.702147,-74.015794&amp;markers=color:green%7Clabel:G%7C40.711614,-74.012318&amp;markers=color:red%7Clabel:C%7C40.718217,-73.998284\" alt=\"Route to the Destination\">
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title activator grey-text text-darken-4\">Route 4
                        <i class=\"material-icons right\">more_vert</i>
                    </span>
                    
                </div>
                <div class=\"card-action card-reveal\">
                    <span class=\"card-title grey-text text-darken-4\">Route 4<i class=\"material-icons right\">close</i></span>
                    <table>
                        <tbody>
                            <tr>
                                <th>Total Distance</th>
                                <td>124 km</td>
                            </tr>
                            <tr>
                                <th>Total Saving</th>
                                <td>20 km</td>
                            </tr>
                            <tr>
                                <th>No. of Passengers</th>
                                <td>11</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan=\"2\">
                                    <a href=\"#!\" class=\"red-text\">Details</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        
        <div class=\"col l6 m6 s12\">

            <div class=\"card\">
                <div class=\"card-image\">
                    <img border=\"0\" src=\"//maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&amp;zoom=13&amp;size=600x300&amp;maptype=roadmap&amp;markers=color:blue%7Clabel:S%7C40.702147,-74.015794&amp;markers=color:green%7Clabel:G%7C40.711614,-74.012318&amp;markers=color:red%7Clabel:C%7C40.718217,-73.998284\" alt=\"Route to the Destination\">
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title activator grey-text text-darken-4\">Route 5
                        <i class=\"material-icons right\">more_vert</i>
                    </span>
                    
                </div>
                <div class=\"card-action card-reveal\">
                    <span class=\"card-title grey-text text-darken-4\">Route 5<i class=\"material-icons right\">close</i></span>
                    <table>
                        <tbody>
                            <tr>
                                <th>Total Distance</th>
                                <td>130 km</td>
                            </tr>
                            <tr>
                                <th>Total Saving</th>
                                <td>30 km</td>
                            </tr>
                            <tr>
                                <th>No. of Passengers</th>
                                <td>14</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan=\"2\">
                                    <a href=\"#!\" class=\"red-text\">Details</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        


    </div>
</div>


";
        
        $__internal_5a1cb328dddf7c3a72fc1005ae96ba8ca46222ae54903f824c4610b1e86154d4->leave($__internal_5a1cb328dddf7c3a72fc1005ae96ba8ca46222ae54903f824c4610b1e86154d4_prof);

    }

    public function getTemplateName()
    {
        return "FreeVRSShuttleRoutingBundle:Default:time-slot.html.twig";
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
