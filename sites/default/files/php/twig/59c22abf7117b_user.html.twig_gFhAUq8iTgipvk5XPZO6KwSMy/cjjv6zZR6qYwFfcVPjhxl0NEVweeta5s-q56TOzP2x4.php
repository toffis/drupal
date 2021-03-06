<?php

/* core/themes/classy/templates/user/user.html.twig */
class __TwigTemplate_889fdb4b5c7b0fcf34160520892f641556d3b236254fefe8ec04b50be765c545 extends Twig_Template
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
        $__internal_c4eb83b00cbe6dbf78ebff6d80a7920a81c20db5548d397b2162dd875c811e37 = $this->env->getExtension("native_profiler");
        $__internal_c4eb83b00cbe6dbf78ebff6d80a7920a81c20db5548d397b2162dd875c811e37->enter($__internal_c4eb83b00cbe6dbf78ebff6d80a7920a81c20db5548d397b2162dd875c811e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/user/user.html.twig"));

        $tags = array("if" => 20);
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

        // line 19
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "profile"), "method"), "html", null, true));
        echo ">
  ";
        // line 20
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        }
        // line 23
        echo "</article>
";
        
        $__internal_c4eb83b00cbe6dbf78ebff6d80a7920a81c20db5548d397b2162dd875c811e37->leave($__internal_c4eb83b00cbe6dbf78ebff6d80a7920a81c20db5548d397b2162dd875c811e37_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  53 => 21,  51 => 20,  46 => 19,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to present all user data.
 *
 * This template is used when viewing a registered user's page,
 * e.g., example.com/user/123. 123 being the user's ID.
 *
 * Available variables:
 * - content: A list of content items. Use 'content' to print all content, or
 *   print a subset such as 'content.field_example'. Fields attached to a user
 *   such as 'user_picture' are available as 'content.user_picture'.
 * - attributes: HTML attributes for the container element.
 * - user: A Drupal User entity.
 *
 * @see template_preprocess_user()
 */
#}
<article{{ attributes.addClass('profile') }}>
  {% if content %}
    {{- content -}}
  {% endif %}
</article>
";
    }
}
