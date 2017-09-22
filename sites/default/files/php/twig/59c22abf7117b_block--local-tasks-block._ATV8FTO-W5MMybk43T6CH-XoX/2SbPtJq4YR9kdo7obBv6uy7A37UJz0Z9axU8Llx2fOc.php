<?php

/* core/themes/classy/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_8d7bbe8ac4a9ba018a966b8831fab81499bb34ec45592db337bd04cb5cdaaf4f extends Twig_Template
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
        $__internal_5c600f68450b9a89b657d3f2fb63e8a8783bdc789926856d6427eba8e48808b4 = $this->env->getExtension("native_profiler");
        $__internal_5c600f68450b9a89b657d3f2fb63e8a8783bdc789926856d6427eba8e48808b4->enter($__internal_5c600f68450b9a89b657d3f2fb63e8a8783bdc789926856d6427eba8e48808b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block--local-tasks-block.html.twig"));

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
        
        $__internal_5c600f68450b9a89b657d3f2fb63e8a8783bdc789926856d6427eba8e48808b4->leave($__internal_5c600f68450b9a89b657d3f2fb63e8a8783bdc789926856d6427eba8e48808b4_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_8c4803c4f5ae69139cd86c58e9bc3b5f835660814fce1c724b4c2cac35af511f = $this->env->getExtension("native_profiler");
        $__internal_8c4803c4f5ae69139cd86c58e9bc3b5f835660814fce1c724b4c2cac35af511f->enter($__internal_8c4803c4f5ae69139cd86c58e9bc3b5f835660814fce1c724b4c2cac35af511f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8c4803c4f5ae69139cd86c58e9bc3b5f835660814fce1c724b4c2cac35af511f->leave($__internal_8c4803c4f5ae69139cd86c58e9bc3b5f835660814fce1c724b4c2cac35af511f_prof);

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
