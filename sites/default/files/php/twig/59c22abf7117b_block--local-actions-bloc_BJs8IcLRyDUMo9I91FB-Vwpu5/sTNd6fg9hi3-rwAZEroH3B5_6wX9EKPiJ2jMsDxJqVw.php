<?php

/* core/themes/seven/templates/block--local-actions-block.html.twig */
class __TwigTemplate_99ddd70caaa05c99a01770dd28ca7aea9a3009db1dc660ec836c68836588c06b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@block/block.html.twig", "core/themes/seven/templates/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4d52c993c0c767f04fc7e2f6785dda6dec89fbc0bc70f03b0710822392b30b7 = $this->env->getExtension("native_profiler");
        $__internal_f4d52c993c0c767f04fc7e2f6785dda6dec89fbc0bc70f03b0710822392b30b7->enter($__internal_f4d52c993c0c767f04fc7e2f6785dda6dec89fbc0bc70f03b0710822392b30b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4d52c993c0c767f04fc7e2f6785dda6dec89fbc0bc70f03b0710822392b30b7->leave($__internal_f4d52c993c0c767f04fc7e2f6785dda6dec89fbc0bc70f03b0710822392b30b7_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_23daec190863352766084fe11aa1b63974c0998ef5d8aeb5f90ee578b48c130f = $this->env->getExtension("native_profiler");
        $__internal_23daec190863352766084fe11aa1b63974c0998ef5d8aeb5f90ee578b48c130f->enter($__internal_23daec190863352766084fe11aa1b63974c0998ef5d8aeb5f90ee578b48c130f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <ul class=\"action-links\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </ul>
  ";
        }
        
        $__internal_23daec190863352766084fe11aa1b63974c0998ef5d8aeb5f90ee578b48c130f->leave($__internal_23daec190863352766084fe11aa1b63974c0998ef5d8aeb5f90ee578b48c130f_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"@block/block.html.twig\" %}
{#
/**
 * @file
 * Theme override for local actions (primary admin actions.)
 */
#}
{% block content %}
  {% if content %}
    <ul class=\"action-links\">
      {{ content }}
    </ul>
  {% endif %}
{% endblock %}
";
    }
}
