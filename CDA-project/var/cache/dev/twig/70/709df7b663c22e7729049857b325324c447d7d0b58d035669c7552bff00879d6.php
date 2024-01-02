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

/* home/index.html.twig */
class __TwigTemplate_6ada0bc41488b6b3f5f3cbf9d29b84d66e1759325d51daed5c532d59bc33e866 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Home du site de Asso Animal";
        
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
        echo "
<section class=\"container-lg\" id=\"sectionAider\">
    <div class=\"row\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articleData"]) || array_key_exists("articleData", $context) ? $context["articleData"] : (function () { throw new RuntimeError('Variable "articleData" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "        <div class=\"col-md-6\">
            <h3>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titleArticle", [], "any", false, false, false, 11), "html", null, true);
            echo "</h3>
            ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["article"], "textArticle", [], "any", false, false, false, 12);
            echo "
            <a class=\"btn btn-orange\" title=\"En savoir plus \" href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aider");
            echo "\">En savoir plus sur comment aider</a>
        </div>
        <figure class=\"col-md-6\">
            <img alt=\"Un chien dans d'un refuge, à travers les barreaux, tend sa patte à un humain qui la serre entre sa main. Photo de Wpadington\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/chienWpadington.jpg"), "html", null, true);
            echo "\">
        </figure>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>
</section>

<section id=\"sectionLibreDOr\"  class=\"container\">
    <h3>Ils ont trouvé leur bonheur</h3>
    <article>
        <figure>
            <img alt=\"Un chaton paisiblement endormi\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/chat-23juillet2009-catclinic.jpg"), "html", null, true);
        echo "\">
        </figure>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livreDOr"]) || array_key_exists("livreDOr", $context) ? $context["livreDOr"] : (function () { throw new RuntimeError('Variable "livreDOr" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 29
            echo "            <h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "titleArticle", [], "any", false, false, false, 29), "html", null, true);
            echo "</h5>
            <p>";
            // line 30
            echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["avis"], "textArticle", [], "any", false, false, false, 30)), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </article>
</section>


<section class=\"container-lg\">
    <h3>Les dernières news</h3>
    <div class=\"row\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastNews"]) || array_key_exists("lastNews", $context) ? $context["lastNews"] : (function () { throw new RuntimeError('Variable "lastNews" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 40
            echo "            <div class=\"col-md-4\">
                <div class=\"card\">
                    <img src=\"...\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a title=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "titleArticle", [], "any", false, false, false, 44), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article", ["a" => twig_get_attribute($this->env, $this->source, $context["news"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">
                            <h4 class=\"card-title\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "titleArticle", [], "any", false, false, false, 45), "html", null, true);
            echo "</h4>
                        </a>
                        <p class=\"card-text\">";
            // line 47
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["news"], "textArticle", [], "any", false, false, false, 47)), 0, 200), "html", null, true);
            echo " (...)</p>
                        <p class=\"card-text\">
                            <small class=\"text-muted\">
                                <a title=\"Lire la suite\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article", ["a" => twig_get_attribute($this->env, $this->source, $context["news"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">Lire la suite</a>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </div>
    <p><a class=\"btn btn-orange\" title=\"News\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_news");
        echo "\">Lire toutes les news</a></p>
</section>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  206 => 58,  203 => 57,  190 => 50,  184 => 47,  179 => 45,  173 => 44,  167 => 40,  163 => 39,  154 => 32,  146 => 30,  141 => 29,  137 => 28,  132 => 26,  123 => 19,  114 => 16,  108 => 13,  104 => 12,  100 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home du site de Asso Animal{% endblock %}

{% block body %}

<section class=\"container-lg\" id=\"sectionAider\">
    <div class=\"row\">
    {% for article in articleData %}
        <div class=\"col-md-6\">
            <h3>{{ article.titleArticle }}</h3>
            {{ article.textArticle|raw }}
            <a class=\"btn btn-orange\" title=\"En savoir plus \" href=\"{{ path('app_aider') }}\">En savoir plus sur comment aider</a>
        </div>
        <figure class=\"col-md-6\">
            <img alt=\"Un chien dans d'un refuge, à travers les barreaux, tend sa patte à un humain qui la serre entre sa main. Photo de Wpadington\" src=\"{{ asset('img/chienWpadington.jpg') }}\">
        </figure>
    {% endfor %}
</div>
</section>

<section id=\"sectionLibreDOr\"  class=\"container\">
    <h3>Ils ont trouvé leur bonheur</h3>
    <article>
        <figure>
            <img alt=\"Un chaton paisiblement endormi\" src=\"{{ asset('img/chat-23juillet2009-catclinic.jpg') }}\">
        </figure>
        {% for avis in livreDOr %}
            <h5>{{ avis.titleArticle }}</h5>
            <p>{{ avis.textArticle|striptags }}</p>
        {% endfor %}
    </article>
</section>


<section class=\"container-lg\">
    <h3>Les dernières news</h3>
    <div class=\"row\">
        {% for news in lastNews %}
            <div class=\"col-md-4\">
                <div class=\"card\">
                    <img src=\"...\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a title=\"{{ news.titleArticle }}\" href=\"{{ path('app_article', {'a': news.id}) }}\">
                            <h4 class=\"card-title\">{{ news.titleArticle }}</h4>
                        </a>
                        <p class=\"card-text\">{{ news.textArticle|striptags|slice(0, 200) }} (...)</p>
                        <p class=\"card-text\">
                            <small class=\"text-muted\">
                                <a title=\"Lire la suite\" href=\"{{ path('app_article', {'a': news.id}) }}\">Lire la suite</a>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
    <p><a class=\"btn btn-orange\" title=\"News\" href=\"{{ path('app_news') }}\">Lire toutes les news</a></p>
</section>



{% endblock %}", "home/index.html.twig", "C:\\Users\\Admin\\Documents\\cda-catherine\\CDA-project\\templates\\home\\index.html.twig");
    }
}
