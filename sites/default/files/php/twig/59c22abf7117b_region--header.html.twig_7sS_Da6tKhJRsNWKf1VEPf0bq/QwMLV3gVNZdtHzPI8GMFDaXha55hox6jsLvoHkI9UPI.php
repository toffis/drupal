<?php

/* core/themes/bartik/templates/region--header.html.twig */
class __TwigTemplate_280125ce227e1f6627615a3d057df21a8ae7713cfc040032b326c1177d8bc67d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("region.html.twig", "core/themes/bartik/templates/region--header.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "region.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13f3eac64350db124edb0b26f76abb4d86c156839a51f8d8d6088a91ec878379 = $this->env->getExtension("native_profiler");
        $__internal_13f3eac64350db124edb0b26f76abb4d86c156839a51f8d8d6088a91ec878379->enter($__internal_13f3eac64350db124edb0b26f76abb4d86c156839a51f8d8d6088a91ec878379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/region--header.html.twig"));

        $tags = array("set" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "clearfix"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13f3eac64350db124edb0b26f76abb4d86c156839a51f8d8d6088a91ec878379->leave($__internal_13f3eac64350db124edb0b26f76abb4d86c156839a51f8d8d6088a91ec878379_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/region--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 1,  51 => 16,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"region.html.twig\" %}
{#
/**
 * @file
 * Bartik's theme implementation to display a header region.
 *
 * Available variables:
 * - content: The content for this region, typically blocks.
 * - attributes: HTML attributes for the region div.
 * - region: The name of the region variable as defined in the theme's
 *   .info.yml file.
 *
 * @see template_preprocess_region()
 */
#}
{% set attributes = attributes.addClass('clearfix') %}
";
    }
}
