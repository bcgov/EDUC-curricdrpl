<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/stable/templates/admin/system-themes-page.html.twig */
class __TwigTemplate_b53b4a9db41df85cc315570a16e3faedb8769aea98807f2d17bd606b27cc6aef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 32, "set" => 34, "if" => 52];
        $filters = ["escape" => 31, "safe_join" => 59];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'safe_join'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 31
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 33
            echo "    ";
            // line 34
            $context["theme_group_classes"] = [0 => "system-themes-list", 1 => ("system-themes-list-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 36
$context["theme_group"], "state", []))), 2 => "clearfix"];
            // line 40
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["theme_group"], "attributes", []), "addClass", [0 => ($context["theme_group_classes"] ?? null)], "method")), "html", null, true);
            echo ">
      <h2 class=\"system-themes-list__header\">";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme_group"], "title", [])), "html", null, true);
            echo "</h2>
      ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme_group"], "themes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 43
                echo "        ";
                // line 44
                $context["theme_classes"] = [0 => (($this->getAttribute(                // line 45
$context["theme"], "is_default", [])) ? ("theme-default") : ("")), 1 => (($this->getAttribute(                // line 46
$context["theme"], "is_admin", [])) ? ("theme-admin") : ("")), 2 => "theme-selector", 3 => "clearfix"];
                // line 51
                echo "        <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["theme"], "attributes", []), "addClass", [0 => ($context["theme_classes"] ?? null)], "method")), "html", null, true);
                echo ">
          ";
                // line 52
                if ($this->getAttribute($context["theme"], "screenshot", [])) {
                    // line 53
                    echo "            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "screenshot", [])), "html", null, true);
                    echo "
          ";
                }
                // line 55
                echo "          <div class=\"theme-info\">
            <h3 class=\"theme-info__header\">";
                // line 57
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "name", [])), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "version", [])), "html", null, true);
                // line 58
                if ($this->getAttribute($context["theme"], "notes", [])) {
                    // line 59
                    echo "                (";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "notes", [])), ", "));
                    echo ")";
                }
                // line 61
                echo "</h3>
            <div class=\"theme-info__description\">";
                // line 62
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "description", [])), "html", null, true);
                echo "</div>
            ";
                // line 64
                echo "            ";
                if ($this->getAttribute($context["theme"], "incompatible", [])) {
                    // line 65
                    echo "              <div class=\"incompatible\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "incompatible", [])), "html", null, true);
                    echo "</div>
            ";
                } else {
                    // line 67
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "operations", [])), "html", null, true);
                    echo "
            ";
                }
                // line 69
                echo "          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/system-themes-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 74,  145 => 72,  137 => 69,  131 => 67,  125 => 65,  122 => 64,  118 => 62,  115 => 61,  110 => 59,  108 => 58,  104 => 57,  101 => 55,  95 => 53,  93 => 52,  88 => 51,  86 => 46,  85 => 45,  84 => 44,  82 => 43,  78 => 42,  74 => 41,  69 => 40,  67 => 36,  66 => 34,  64 => 33,  60 => 32,  55 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the Appearance page.
 *
 * Available variables:
 * - attributes: HTML attributes for the main container.
 * - theme_groups: A list of theme groups. Each theme group contains:
 *   - attributes: HTML attributes specific to this theme group.
 *   - title: Title for the theme group.
 *   - state: State of the theme group, e.g. installed or uninstalled.
 *   - themes: A list of themes within the theme group. Each theme contains:
 *     - attributes: HTML attributes specific to this theme.
 *     - screenshot: A screenshot representing the theme.
 *     - description: Description of the theme.
 *     - name: Theme name.
 *     - version: The theme's version number.
 *     - is_default: Boolean indicating whether the theme is the default theme
 *       or not.
 *     - is_admin: Boolean indicating whether the theme is the admin theme or
 *       not.
 *     - notes: Identifies what context this theme is being used in, e.g.,
 *       default theme, admin theme.
 *     - incompatible: Text describing any compatibility issues.
 *     - operations: A list of operation links, e.g., Settings, Enable, Disable,
 *       etc. these links should only be displayed if the theme is compatible.
 *
 * @see template_preprocess_system_themes_page()
 */
#}
<div{{ attributes }}>
  {% for theme_group in theme_groups %}
    {%
      set theme_group_classes = [
        'system-themes-list',
        'system-themes-list-' ~ theme_group.state,
        'clearfix',
      ]
    %}
    <div{{ theme_group.attributes.addClass(theme_group_classes) }}>
      <h2 class=\"system-themes-list__header\">{{ theme_group.title }}</h2>
      {% for theme in theme_group.themes %}
        {%
          set theme_classes = [
            theme.is_default ? 'theme-default',
            theme.is_admin ? 'theme-admin',
            'theme-selector',
            'clearfix',
          ]
        %}
        <div{{ theme.attributes.addClass(theme_classes) }}>
          {% if theme.screenshot %}
            {{ theme.screenshot }}
          {% endif %}
          <div class=\"theme-info\">
            <h3 class=\"theme-info__header\">
              {{- theme.name }} {{ theme.version -}}
              {% if theme.notes %}
                ({{ theme.notes|safe_join(', ') }})
              {%- endif -%}
            </h3>
            <div class=\"theme-info__description\">{{ theme.description }}</div>
            {# Display operation links if the theme is compatible. #}
            {% if theme.incompatible %}
              <div class=\"incompatible\">{{ theme.incompatible }}</div>
            {% else %}
              {{ theme.operations }}
            {% endif %}
          </div>
        </div>
      {% endfor %}
    </div>
  {% endfor %}
</div>
", "core/themes/stable/templates/admin/system-themes-page.html.twig", "C:\\xampp\\htdocs\\bootstrap\\core\\themes\\stable\\templates\\admin\\system-themes-page.html.twig");
    }
}
