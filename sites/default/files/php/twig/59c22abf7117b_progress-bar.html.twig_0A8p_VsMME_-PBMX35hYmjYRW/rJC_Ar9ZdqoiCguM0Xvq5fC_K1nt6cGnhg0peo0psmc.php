<?php

/* core/themes/classy/templates/misc/progress-bar.html.twig */
class __TwigTemplate_8433d9b22cef9d99dfd63261f63ec009c2aa04f8f6d50673e4be4919a34f70f1 extends Twig_Template
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
        $__internal_31f893893ea68715ed05790efc8e0e4f62ba7a558f623156d8e1beed46b8159a = $this->env->getExtension("native_profiler");
        $__internal_31f893893ea68715ed05790efc8e0e4f62ba7a558f623156d8e1beed46b8159a->enter($__internal_31f893893ea68715ed05790efc8e0e4f62ba7a558f623156d8e1beed46b8159a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/misc/progress-bar.html.twig"));

        $tags = array("if" => 16);
        $filters = array();
        $functions = array("attach_library" => 14);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
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

        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("classy/progress"), "html", null, true));
        echo "
<div class=\"progress\" data-drupal-progress>
  ";
        // line 16
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 17
            echo "    <div class=\"progress__label\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</div>
  ";
        }
        // line 19
        echo "  <div class=\"progress__track\"><div class=\"progress__bar\" style=\"width: ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["percent"]) ? $context["percent"] : null), "html", null, true));
        echo "%\"></div></div>
  <div class=\"progress__percentage\">";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["percent"]) ? $context["percent"] : null), "html", null, true));
        echo "%</div>
  <div class=\"progress__description\">";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true));
        echo "</div>
</div>
";
        
        $__internal_31f893893ea68715ed05790efc8e0e4f62ba7a558f623156d8e1beed46b8159a->leave($__internal_31f893893ea68715ed05790efc8e0e4f62ba7a558f623156d8e1beed46b8159a_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/misc/progress-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  64 => 20,  59 => 19,  53 => 17,  51 => 16,  46 => 14,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a progress bar.
 *
 * Note that the core Batch API uses this only for non-JavaScript batch jobs.
 *
 * Available variables:
 * - label: The label of the working task.
 * - percent: The percentage of the progress.
 * - message: A string containing information to be displayed.
 */
#}
{{ attach_library('classy/progress') }}
<div class=\"progress\" data-drupal-progress>
  {% if label %}
    <div class=\"progress__label\">{{ label }}</div>
  {% endif %}
  <div class=\"progress__track\"><div class=\"progress__bar\" style=\"width: {{ percent }}%\"></div></div>
  <div class=\"progress__percentage\">{{ percent }}%</div>
  <div class=\"progress__description\">{{ message }}</div>
</div>
";
    }
}
