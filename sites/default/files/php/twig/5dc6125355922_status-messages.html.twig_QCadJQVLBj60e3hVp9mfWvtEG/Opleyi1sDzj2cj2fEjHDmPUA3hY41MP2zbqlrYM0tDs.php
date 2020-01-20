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

/* themes/bootstrap_barrio/templates/misc/status-messages.html.twig */
class __TwigTemplate_9550feff4ed54c0819f4dad2a987ceac5de49b24308d0de357ddae721b942782 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 29, "set" => 31, "if" => 56];
        $filters = ["escape" => 52, "without" => 52];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without'],
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
        // line 28
        echo "<div class=\"alert-wrapper\">
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 30
            echo "  ";
            // line 31
            $context["classes"] = [0 => "alert", 1 => "alert-dismissible", 2 => "fade", 3 => "show", 4 => "col-12", 5 => (((            // line 37
$context["type"] == "status")) ? ("alert-success") : ("")), 6 => (((            // line 38
$context["type"] == "warning")) ? ("alert-warning") : ("")), 7 => (((            // line 39
$context["type"] == "error")) ? ("alert-danger") : ("")), 8 => (((            // line 40
$context["type"] == "info")) ? ("alert-info") : (""))];
            // line 43
            echo "  ";
            // line 44
            $context["role"] = ["status" => "status", "error" => "alert", "warning" => "alert", "info" => "status"];
            // line 51
            echo "
  <div aria-label=\"";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "role", "aria-label"), "addClass", [0 => ($context["classes"] ?? null)], "method"), "setAttribute", [0 => "role", 1 => $this->getAttribute(($context["role"] ?? null), $context["type"], [], "array")], "method")), "html", null, true);
            echo ">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <span aria-hidden=\"true\">&times;</span>
    </button>
    ";
            // line 56
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")) {
                // line 57
                echo "      <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                echo "</h2>
    ";
            }
            // line 59
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 60
                echo "      ";
                if ($this->getAttribute($context["loop"], "last", [])) {
                    // line 61
                    echo "        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                    echo "
      ";
                } else {
                    // line 63
                    echo "        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                    echo "
        <hr>
      ";
                }
                // line 66
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_barrio/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 69,  142 => 67,  128 => 66,  121 => 63,  115 => 61,  112 => 60,  94 => 59,  88 => 57,  86 => 56,  77 => 52,  74 => 51,  72 => 44,  70 => 43,  68 => 40,  67 => 39,  66 => 38,  65 => 37,  64 => 31,  62 => 30,  58 => 29,  55 => 28,);
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
 * Default theme implementation for status messages.
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
 *
 * @see template_preprocess_status_messages()
 *
 * @ingroup themeable
 */
#}
<div class=\"alert-wrapper\">
{% for type, messages in message_list %}
  {%
    set classes = [
      'alert',
      'alert-dismissible',
      'fade',
      'show',
      'col-12',
      type == 'status' ? 'alert-success',
      type == 'warning' ? 'alert-warning',
      type == 'error' ? 'alert-danger',
      type == 'info' ? 'alert-info',
    ]
  %}
  {%
  set role = {
    'status': 'status',
    'error': 'alert',
    'warning': 'alert',
    'info': 'status',
  }
%}

  <div aria-label=\"{{ status_headings[type] }}\" {{ attributes|without('role', 'aria-label').addClass(classes).setAttribute('role', role[type]) }}>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <span aria-hidden=\"true\">&times;</span>
    </button>
    {% if status_headings[type] %}
      <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2>
    {% endif %}
    {% for message in messages %}
      {% if loop.last %}
        {{ message }}
      {% else %}
        {{ message }}
        <hr>
      {% endif %}
    {% endfor %}
  </div>
{% endfor %}
</div>
", "themes/bootstrap_barrio/templates/misc/status-messages.html.twig", "C:\\xampp\\htdocs\\bootstrap\\themes\\bootstrap_barrio\\templates\\misc\\status-messages.html.twig");
    }
}
