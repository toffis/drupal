<?php

/* core/themes/classy/templates/misc/status-messages.html.twig */
class __TwigTemplate_5eaa098f007f256ca2a9c240858094a790e67b447c4717461013c5fbcb94c20c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8d843fc0a8bcacb0dac85bb81b41940f2509808bcf88ffb56db636515f9fd4e = $this->env->getExtension("native_profiler");
        $__internal_f8d843fc0a8bcacb0dac85bb81b41940f2509808bcf88ffb56db636515f9fd4e->enter($__internal_f8d843fc0a8bcacb0dac85bb81b41940f2509808bcf88ffb56db636515f9fd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/misc/status-messages.html.twig"));

        $tags = array("block" => 25, "for" => 26, "set" => 28, "if" => 34);
        $filters = array("without" => 33, "length" => 40, "first" => 47);
        $functions = array("attach_library" => 24);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'for', 'set', 'if'),
                array('without', 'length', 'first'),
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

        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("classy/messages"), "html", null, true));
        echo "
";
        // line 25
        $this->displayBlock('messages', $context, $blocks);
        
        $__internal_f8d843fc0a8bcacb0dac85bb81b41940f2509808bcf88ffb56db636515f9fd4e->leave($__internal_f8d843fc0a8bcacb0dac85bb81b41940f2509808bcf88ffb56db636515f9fd4e_prof);

    }

    public function block_messages($context, array $blocks = array())
    {
        $__internal_c7b724fbb02cee009ebbec03a25275f863afa11a8f71a3b0fcfa2c60d597d233 = $this->env->getExtension("native_profiler");
        $__internal_c7b724fbb02cee009ebbec03a25275f863afa11a8f71a3b0fcfa2c60d597d233->enter($__internal_c7b724fbb02cee009ebbec03a25275f863afa11a8f71a3b0fcfa2c60d597d233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "  ";
            // line 28
            $context["classes"] = array(0 => "messages", 1 => ("messages--" .             // line 30
$context["type"]));
            // line 33
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "role", "aria-label"), "html", null, true));
            echo ">
    ";
            // line 34
            if (($context["type"] == "error")) {
                // line 35
                echo "      <div role=\"alert\">
    ";
            }
            // line 37
            echo "      ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 38
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "</h2>
      ";
            }
            // line 40
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 41
                echo "        <ul class=\"messages__list\">
          ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 43
                    echo "            <li class=\"messages__item\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "        </ul>
      ";
            } else {
                // line 47
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "
      ";
            }
            // line 49
            echo "    ";
            if (($context["type"] == "error")) {
                // line 50
                echo "      </div>
    ";
            }
            // line 52
            echo "  </div>
  ";
            // line 54
            echo "  ";
            $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c7b724fbb02cee009ebbec03a25275f863afa11a8f71a3b0fcfa2c60d597d233->leave($__internal_c7b724fbb02cee009ebbec03a25275f863afa11a8f71a3b0fcfa2c60d597d233_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 54,  130 => 52,  126 => 50,  123 => 49,  117 => 47,  113 => 45,  104 => 43,  100 => 42,  97 => 41,  94 => 40,  88 => 38,  85 => 37,  81 => 35,  79 => 34,  72 => 33,  70 => 30,  69 => 28,  67 => 27,  63 => 26,  51 => 25,  47 => 24,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - display: (optional) May have a value of 'status' or 'error' when only
 *   displaying messages of that specific type.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 */
#}
{{ attach_library('classy/messages') }}
{% block messages %}
{% for type, messages in message_list %}
  {%
    set classes = [
      'messages',
      'messages--' ~ type,
    ]
  %}
  <div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\"{{ attributes.addClass(classes)|without('role', 'aria-label') }}>
    {% if type == 'error' %}
      <div role=\"alert\">
    {% endif %}
      {% if status_headings[type] %}
        <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2>
      {% endif %}
      {% if messages|length > 1 %}
        <ul class=\"messages__list\">
          {% for message in messages %}
            <li class=\"messages__item\">{{ message }}</li>
          {% endfor %}
        </ul>
      {% else %}
        {{ messages|first }}
      {% endif %}
    {% if type == 'error' %}
      </div>
    {% endif %}
  </div>
  {# Remove type specific classes. #}
  {% set attributes = attributes.removeClass(classes) %}
{% endfor %}
{% endblock messages %}
";
    }
}
