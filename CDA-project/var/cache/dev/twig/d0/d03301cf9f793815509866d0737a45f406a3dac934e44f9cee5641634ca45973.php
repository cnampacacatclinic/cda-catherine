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

/* base.html.twig */
class __TwigTemplate_76faa9bcf1020141c70735c596b15b5e7f1fbf9d218856d69d9a83eee24d5ac0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Bootstrap css -->
        <!-- La fonction asset permet une redirection vers le dossier public -->
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap-5.0.2-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Fichier css personalisé -->
        <!-- La fonction asset permet une redirection vers le dossier public -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 14
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        
        ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </head>
    <body>
        <main>
            <hearder>
                <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                    <div class=\"container-fluid\">
                        <a class=\"navbar-brand\" href=\"#\">Navbar</a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                            <div class=\"navbar-nav\">
                                <ul class=\"navbar-nav mr-auto\">
                                    <li class=\"nav-item active\">
                                        <a class=\"nav-link\" title=\"Home\" href=\"";
        // line 35
        echo "/";
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" title=\"Comment aider\" href=\"";
        // line 38
        echo "/aider";
        echo "\">Comment aider</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" title=\"About\" href=\"";
        // line 41
        echo "/about";
        echo "\">About</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" title=\"Contact\" href=\"";
        // line 44
        echo "/contact";
        echo "\">Contact</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" title=\"Evenements\" href=\"";
        // line 47
        echo "/events";
        echo "\">Evenements</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" title=\"News\" href=\"";
        // line 50
        echo "/news";
        echo "\">News</a>
                                    </li>
                                    <li class=\"nav-item\">

                                        ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54)) {
            // line 55
            echo "                                            <a class=\"nav-link\" title=\"Logout\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                        ";
        }
        // line 57
        echo "                                        ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), false))) {
            // line 58
            echo "                                            <a class=\"nav-link\" title=\"Connexion\" href=\"";
            echo "/login";
            echo "\">Login</a>
                                        ";
        }
        // line 60
        echo "                                    </li>
                                </ul>
                                <form class=\"d-flex\">
                                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                                    <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
                                </form>
                            </div>
                    </div>
            </nav>

                <h1>Asso Animal</h1>
            </header>
                ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "        </main>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap-5.0.2-dist/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  246 => 72,  233 => 19,  223 => 18,  210 => 15,  200 => 14,  181 => 5,  167 => 74,  164 => 73,  162 => 72,  148 => 60,  142 => 58,  139 => 57,  133 => 55,  131 => 54,  124 => 50,  118 => 47,  112 => 44,  106 => 41,  100 => 38,  94 => 35,  78 => 21,  76 => 18,  73 => 17,  70 => 14,  65 => 11,  59 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <!-- Bootstrap css -->
        <!-- La fonction asset permet une redirection vers le dossier public -->
        <link rel=\"stylesheet\" href=\"{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}\">
        <!-- Fichier css personalisé -->
        <!-- La fonction asset permet une redirection vers le dossier public -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
        
        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
        <main>
            <hearder>
                <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                    <div class=\"container-fluid\">
                        <a class=\"navbar-brand\" href=\"#\">Navbar</a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                            <div class=\"navbar-nav\">
                                <ul class=\"navbar-nav mr-auto\">
                                    <li class=\"nav-item active\">
                                        <a class=\"nav-link\" title=\"Home\" href=\"{{ '/' }}\">Home <span class=\"sr-only\">(current)</span></a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" title=\"Comment aider\" href=\"{{ '/aider' }}\">Comment aider</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" title=\"About\" href=\"{{ '/about' }}\">About</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" title=\"Contact\" href=\"{{ '/contact' }}\">Contact</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" title=\"Evenements\" href=\"{{ '/events' }}\">Evenements</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" title=\"News\" href=\"{{ '/news' }}\">News</a>
                                    </li>
                                    <li class=\"nav-item\">

                                        {% if app.user %}
                                            <a class=\"nav-link\" title=\"Logout\" href=\"{{ path('app_logout') }}\">Logout</a>
                                        {% endif %}
                                        {% if app.user==false %}
                                            <a class=\"nav-link\" title=\"Connexion\" href=\"{{ '/login' }}\">Login</a>
                                        {% endif %}
                                    </li>
                                </ul>
                                <form class=\"d-flex\">
                                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                                    <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
                                </form>
                            </div>
                    </div>
            </nav>

                <h1>Asso Animal</h1>
            </header>
                {% block body %}{% endblock %}
        </main>
        <script src=\"{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.js') }}\"></script>
    </body>
</html>
", "base.html.twig", "C:\\Users\\Simplon\\Documents\\prive-cda-catherine\\CDA-project\\templates\\base.html.twig");
    }
}
