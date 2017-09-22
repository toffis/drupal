<?php

/* core/themes/bartik/templates/form--search-block-form.html.twig */
class __TwigTemplate_46650731b87b3dfddf1ee5ad57e307e62a993e251c16eb42d19e28827c4264e6 extends Twig_Template
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
        $__internal_b79c6911ebe1ac1aad0cd8c5b2e11c23d3ded586e761a2a8f282342d251d00d3 = $this->env->getExtension("native_profiler");
        $__internal_b79c6911ebe1ac1aad0cd8c5b2e11c23d3ded586e761a2a8f282342d251d00d3->enter($__internal_b79c6911ebe1ac1aad0cd8c5b2e11c23d3ded586e761a2a8f282342d251d00d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/form--search-block-form.html.twig"));

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
        echo "<form";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "search-form", 1 => "search-block-form"), "method"), "html", null, true));
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
</form>
";
        
        $__internal_b79c6911ebe1ac1aad0cd8c5b2e11c23d3ded586e761a2a8f282342d251d00d3->leave($__internal_b79c6911ebe1ac1aad0cd8c5b2e11c23d3ded586e761a2a8f282342d251d00d3_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/form--search-block-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  46 => 13,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a 'form' element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The child elements of the form.
 *
 * @see template_preprocess_form()
 */
#}
<form{{ attributes.addClass('search-form', 'search-block-form') }}>
  {{ children }}
</form>
";
    }
}
