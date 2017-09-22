<?php

/* core/themes/classy/templates/user/username.html.twig */
class __TwigTemplate_eea5bbb2b5cc14b031d301434d4a7dcc9aeb18b9e1e2939ba09be9652d5936e0 extends Twig_Template
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
        $__internal_c28ff16101d78fdb8e0f8a38e0895615cb4ee95c57c3804b4333e318d5093e76 = $this->env->getExtension("native_profiler");
        $__internal_c28ff16101d78fdb8e0f8a38e0895615cb4ee95c57c3804b4333e318d5093e76->enter($__internal_c28ff16101d78fdb8e0f8a38e0895615cb4ee95c57c3804b4333e318d5093e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/user/username.html.twig"));

        $tags = array("if" => 25);
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

        // line 25
        if ((isset($context["link_path"]) ? $context["link_path"] : null)) {
            // line 26
            echo "<a";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "username"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true));
            echo "</a>";
        } else {
            // line 28
            echo "<span";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true));
            echo "</span>";
        }
        
        $__internal_c28ff16101d78fdb8e0f8a38e0895615cb4ee95c57c3804b4333e318d5093e76->leave($__internal_c28ff16101d78fdb8e0f8a38e0895615cb4ee95c57c3804b4333e318d5093e76_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/user/username.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 28,  48 => 26,  46 => 25,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for displaying a username.
 *
 * Available variables:
 * - account: The full account information for the user.
 * - uid: The user ID, or zero if not a user. As used in anonymous comments.
 * - name: The user's name, sanitized, and optionally truncated.
 * - name_raw: The user's name, un-truncated.
 * - truncated: Whether the user's name was truncated.
 * - extra: Additional text to append to the user's name, sanitized.
 * - profile_access: Whether the current user has permission to access this
     users profile page.
 * - link_path: The path or URL of the user's profile page, home page,
 *   or other desired page to link to for more information about the user.
 * - homepage: (optional) The home page of the account, only set for non users.
 * - link_options: Options to set on the \\Drupal\\Core\\Url object if linking the
 *   user's name to the user's page.
 * - attributes: HTML attributes for the containing element.
 *
 * @see template_preprocess_username()
 */
#}
{% if link_path -%}
  <a{{ attributes.addClass('username') }}>{{ name }}{{ extra }}</a>
{%- else -%}
  <span{{ attributes }}>{{ name }}{{ extra }}</span>
{%- endif -%}
";
    }
}
