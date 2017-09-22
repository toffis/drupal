<?php

/* core/themes/classy/templates/form/radios.html.twig */
class __TwigTemplate_ebff8b31ccfcd9e164439425f9caa63c36fb554850d9a52f6a6165e57c82b397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a38cfeb4e1310e19ba9c38c7f71d9fcf11cc554916c432c935ad1a7af8911a1 = $this->env->getExtension("native_profiler");
        $__internal_6a38cfeb4e1310e19ba9c38c7f71d9fcf11cc554916c432c935ad1a7af8911a1->enter($__internal_6a38cfeb4e1310e19ba9c38c7f71d9fcf11cc554916c432c935ad1a7af8911a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/radios.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 13
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "form-radios"), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "</div>
";
        
        $__internal_6a38cfeb4e1310e19ba9c38c7f71d9fcf11cc554916c432c935ad1a7af8911a1->leave($__internal_6a38cfeb4e1310e19ba9c38c7f71d9fcf11cc554916c432c935ad1a7af8911a1_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/radios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a 'radios' #type form element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The rendered radios.
 *
 * @see template_preprocess_radios()
 */
#}
<div{{ attributes.addClass('form-radios') }}>{{ children }}</div>
";
    }
}
