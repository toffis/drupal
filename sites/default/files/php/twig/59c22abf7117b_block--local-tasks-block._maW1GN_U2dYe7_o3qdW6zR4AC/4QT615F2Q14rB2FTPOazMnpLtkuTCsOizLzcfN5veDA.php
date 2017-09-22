<?php

/* core/themes/classy/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_bd8595b4af0c72cb9aea51f921cecf6fd71ff542840a647f71b48809a7bf35d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/classy/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3621b31537639bfe4f4da49adfcf3fe047d64c2b4ba917a381f1f2c2fc95106 = $this->env->getExtension("native_profiler");
        $__internal_c3621b31537639bfe4f4da49adfcf3fe047d64c2b4ba917a381f1f2c2fc95106->enter($__internal_c3621b31537639bfe4f4da49adfcf3fe047d64c2b4ba917a381f1f2c2fc95106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array("t" => 10);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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
        
        $__internal_c3621b31537639bfe4f4da49adfcf3fe047d64c2b4ba917a381f1f2c2fc95106->leave($__internal_c3621b31537639bfe4f4da49adfcf3fe047d64c2b4ba917a381f1f2c2fc95106_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_4e34b2d2d34876bf9df1dc2a9ba200ae22498dced79fef06ac0dc08d7f1c34b0 = $this->env->getExtension("native_profiler");
        $__internal_4e34b2d2d34876bf9df1dc2a9ba200ae22498dced79fef06ac0dc08d7f1c34b0->enter($__internal_4e34b2d2d34876bf9df1dc2a9ba200ae22498dced79fef06ac0dc08d7f1c34b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_4e34b2d2d34876bf9df1dc2a9ba200ae22498dced79fef06ac0dc08d7f1c34b0->leave($__internal_4e34b2d2d34876bf9df1dc2a9ba200ae22498dced79fef06ac0dc08d7f1c34b0_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for tabs.
 */
#}
{% block content %}
  {% if content %}
    <nav class=\"tabs\" role=\"navigation\" aria-label=\"{{ 'Tabs'|t }}\">
      {{ content }}
    </nav>
  {% endif %}
{% endblock %}
";
    }
}
