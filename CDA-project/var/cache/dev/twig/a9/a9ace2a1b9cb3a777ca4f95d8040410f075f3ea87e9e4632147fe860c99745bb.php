<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* event_page/index.html.twig */
class __TwigTemplate_7df40492f83ce236343d0c99adc143b6ced9a779dbe65538a7c861b74a0e58d7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_page/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event_page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Event";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section class=\"container-lg\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventData"]) || array_key_exists("eventData", $context) ? $context["eventData"] : (function () { throw new RuntimeError('Variable "eventData" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 8
            echo "        <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titleEvent", [], "any", false, false, false, 8), "html", null, true);
            echo "</h2>
        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
                // line 10
                echo "            <a title=\"Inscription aux événements\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_page", ["e" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 10), "x" => "ok"]), "html", null, true);
                echo "\">S'inscrire à l'événement</a>
        ";
            } else {
                // line 12
                echo "            <a title=\"Inscription au événements\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["e" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 12)]), "html", null, true);
                echo "\">S'inscrire à l'événement</a>
        ";
            }
            // line 14
            echo "        <p>Date de début  : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "startDate", [], "any", false, false, false, 14), "d/m/Y"), "html", null, true);
            echo "</p>
        <p>Date de fin : ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "endDate", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
            echo "</p>
        <p>Lieu de l'événement : ";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["evenement"], "locationEvent", [], "any", false, false, false, 16);
            echo "</p>
        <p>";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["evenement"], "descriptionEvent", [], "any", false, false, false, 17);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "event_page/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  135 => 19,  127 => 17,  123 => 16,  119 => 15,  114 => 14,  108 => 12,  102 => 10,  100 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Event{% endblock %}

{% block body %}
<section class=\"container-lg\">
    {% for evenement in eventData %}
        <h2>{{ evenement.titleEvent }}</h2>
        {% if app.user %}
            <a title=\"Inscription aux événements\" href=\"{{ path('app_event_page', {'e': evenement.id, 'x': 'ok'}) }}\">S'inscrire à l'événement</a>
        {% else %}
            <a title=\"Inscription au événements\" href=\"{{ path('app_login', {'e': evenement.id}) }}\">S'inscrire à l'événement</a>
        {% endif %}
        <p>Date de début  : {{ evenement.startDate|date(\"d/m/Y\") }}</p>
        <p>Date de fin : {{ evenement.endDate|date(\"d/m/Y\") }}</p>
        <p>Lieu de l'événement : {{ evenement.locationEvent|raw }}</p>
        <p>{{ evenement.descriptionEvent|raw }}</p>
    {% endfor %}
</section>
{% endblock %}", "event_page/index.html.twig", "C:\\Users\\Admin\\Documents\\cda-catherine\\CDA-project\\templates\\event_page\\index.html.twig");
    }
}
