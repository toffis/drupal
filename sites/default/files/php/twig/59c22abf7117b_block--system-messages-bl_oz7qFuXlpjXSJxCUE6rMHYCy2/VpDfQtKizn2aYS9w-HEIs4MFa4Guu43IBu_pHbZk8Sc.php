<?php

/* core/themes/stable/templates/block/block--system-messages-block.html.twig */
class __TwigTemplate_bca7e05c760fe64b81b786f776ad126e510dff7be910769749daa1d440022c7c extends Twig_Template
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
        $__internal_d7dbc1c76d5d239696ba2e358f213a58255c82f47b3c4a8c506c95af4083286b = $this->env->getExtension("native_profiler");
        $__internal_d7dbc1c76d5d239696ba2e358f213a58255c82f47b3c4a8c506c95af4083286b->enter($__internal_d7dbc1c76d5d239696ba2e358f213a58255c82f47b3c4a8c506c95af4083286b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/block/block--system-messages-block.html.twig"));

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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
";
        
        $__internal_d7dbc1c76d5d239696ba2e358f213a58255c82f47b3c4a8c506c95af4083286b->leave($__internal_d7dbc1c76d5d239696ba2e358f213a58255c82f47b3c4a8c506c95af4083286b_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/block/block--system-messages-block.html.twig";
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
 * Theme override for the messages block.
 *
 * Removes wrapper elements from block so that empty block does not appear when
 * there are no messages.
 *
 * Available variables:
 * - content: The content of this block.
 */
#}
{{ content }}
";
    }
}
