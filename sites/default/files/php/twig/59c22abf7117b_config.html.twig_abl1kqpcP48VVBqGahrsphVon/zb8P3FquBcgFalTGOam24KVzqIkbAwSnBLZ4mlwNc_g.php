<?php

/* @webprofiler/Collector/config.html.twig */
class __TwigTemplate_559062ce3e7ff02245547bf9ffbc53f53d923acff78f3f762a31c91fabf492f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5717a5c0e8f7d021fd429cb2a651f6fa469888f19a4119e6caf06f87388ca34c = $this->env->getExtension("native_profiler");
        $__internal_5717a5c0e8f7d021fd429cb2a651f6fa469888f19a4119e6caf06f87388ca34c->enter($__internal_5717a5c0e8f7d021fd429cb2a651f6fa469888f19a4119e6caf06f87388ca34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/config.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 3, "length" => 6, "default" => 17);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set'),
                array('t', 'length', 'default'),
                array('url')
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

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5717a5c0e8f7d021fd429cb2a651f6fa469888f19a4119e6caf06f87388ca34c->leave($__internal_5717a5c0e8f7d021fd429cb2a651f6fa469888f19a4119e6caf06f87388ca34c_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_54919b419407b97195ce17bf3fa9e1a59a835554eab568d8205ae83f66728c57 = $this->env->getExtension("native_profiler");
        $__internal_54919b419407b97195ce17bf3fa9e1a59a835554eab568d8205ae83f66728c57->enter($__internal_54919b419407b97195ce17bf3fa9e1a59a835554eab568d8205ae83f66728c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "config")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Config")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Config")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getConfigNames", array())), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Config get")));
        echo "</b>
        <span>";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getConfigNames", array())), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_54919b419407b97195ce17bf3fa9e1a59a835554eab568d8205ae83f66728c57->leave($__internal_54919b419407b97195ce17bf3fa9e1a59a835554eab568d8205ae83f66728c57_prof);

    }

    // line 22
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0cebf30a9ce3462927fbcc19b03f504e486ccb97b0c6efc2da1c4c56c5fab6d = $this->env->getExtension("native_profiler");
        $__internal_d0cebf30a9ce3462927fbcc19b03f504e486ccb97b0c6efc2da1c4c56c5fab6d->enter($__internal_d0cebf30a9ce3462927fbcc19b03f504e486ccb97b0c6efc2da1c4c56c5fab6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 23
        echo "    <script id=\"config\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Configuration")));
        echo "</h2>
        <div class=\"panel__container\">
            <table>
                <% _.each( data.config_names, function( item, key ){ %>
                <tr>
                    <th><%- key %></th>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
            </table>

        </div>
    </script>
";
        
        $__internal_d0cebf30a9ce3462927fbcc19b03f504e486ccb97b0c6efc2da1c4c56c5fab6d->leave($__internal_d0cebf30a9ce3462927fbcc19b03f504e486ccb97b0c6efc2da1c4c56c5fab6d_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/config.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 24,  130 => 23,  124 => 22,  114 => 18,  110 => 17,  106 => 15,  100 => 12,  96 => 11,  93 => 10,  90 => 9,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 22,  50 => 21,  48 => 1,);
    }

    public function getSource()
    {
        return "{% block toolbar %}
    {% set icon %}
    <a href=\"{{ url(\"webprofiler.dashboard\", {profile: token}, {fragment: \"config\"}) }}\" title=\"{{ 'Config'|t }}\">
        <img width=\"20\" height=\"28\" alt=\"{{ 'Config'|t }}\"
             src=\"data:image/png;base64,{{ collector.icon }}\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">{{ collector.getConfigNames|length }}</span>
    </a>
    {% endset %}
    {% set text %}
    <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Config get'|t }}</b>
        <span>{{ collector.getConfigNames|length }}</span>
    </div>
    {% endset %}

    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
    </div>
{% endblock %}

{% block panel %}
    <script id=\"config\" type=\"text/template\">
        <h2 class=\"panel__title\">{{ 'Configuration'|t }}</h2>
        <div class=\"panel__container\">
            <table>
                <% _.each( data.config_names, function( item, key ){ %>
                <tr>
                    <th><%- key %></th>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
            </table>

        </div>
    </script>
{% endblock %}
";
    }
}
