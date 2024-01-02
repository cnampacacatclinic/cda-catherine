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
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        echo "    ";
        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22></text></svg>\">
</head>
<body>
    <header>
            <nav class=\"navbar navbar-expand-xl fixed-top\">
                <div class=\"container-fluid\">
                    <a class=\"navbar-brand\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" title=\"Home\"><img id=\"logo1\" alt=\"Logo d'Asso Animal\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_asso_animal_couleur_svg.svg"), "html", null, true);
        echo "\"></a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"bi bi-list\"></i>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                        <div class=\"navbar-nav\">
                            <ul class=\"navbar-nav mr-auto\">
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" title=\"Home\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" title=\"Comment aider\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aider");
        echo "\">Comment aider</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" title=\"Evenements\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        echo "\">Evenements</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" title=\"News\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_news");
        echo "\">News</a>
                                </li>
                                <li class=\"nav-item\">

                                    ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
            // line 37
            echo "                                        <a class=\"nav-link\" title=\"Logout\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                    ";
        }
        // line 39
        echo "                                    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), false))) {
            // line 40
            echo "                                        <a class=\"nav-link\" title=\"Connexion\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
                                    ";
        }
        // line 42
        echo "                                </li>
                                ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) {
            // line 44
            echo "                                    <li class=\"nav-item dropdown\">
                                        <span id=\"adminButton\" class=\"dropdown-toggle nav-link\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            Administration
                                        </span>
                                        <ul class=\"dropdown-menu\">
                                            <li><a class=\"dropdown-item\" title=\"Profil utilisateur\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
            echo "\">Votre compte</a></li>
                                            <li><a class=\"dropdown-item\" title=\"Inscription au événements\" href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration_event");
            echo "\">Inscription aux événements</a></li>
                                            ";
            // line 51
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 52
                echo "                                            <li><a class=\"dropdown-item\" title=\"Vos articles\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
                echo "\">Vos articles</a></li>
                                                <li><a class=\"dropdown-item\" title=\"Gestion des événements\" href=\"";
                // line 53
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_event");
                echo "\">Gestion des événements</a></li>
                                                <li><a class=\"dropdown-item\" title=\"Gestion des commentaires\" href=\"";
                // line 54
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_comment");
                echo "\">Gestion des commentaires</a></li>
                                            ";
            }
            // line 56
            echo "                                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 57
                echo "                                                <li><a class=\"dropdown-item\" title=\"Gestion des autres articles\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_management_other_people_content");
                echo "\">Gestion des autres articles</a></li>
                                                <li><a class=\"dropdown-item\" title=\"Gestion des utilisateurs\" href=\"";
                // line 58
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_superadmin");
                echo "\">Gestion des utilisateurs</a></li>
                                                <li><a class=\"dropdown-item\" title=\"Gestion des centres\" href=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_centre");
                echo "\">Gestion des centres</a></li>
                                                <li><a class=\"dropdown-item\" title=\"Les pages\" href=\"";
                // line 60
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_management_page");
                echo "\">Gestions des pages</a></li>
                                                <li><a class=\"dropdown-item\" title=\"Visiteurs\" href=\"";
                // line 61
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visit");
                echo "\">Voir les visites</a></li>
                                            ";
            }
            // line 63
            echo "                                        </ul>
                                    </li>
                                ";
        }
        // line 66
        echo "                            </ul>
                            ";
        // line 68
        echo "                            <form id=\"formMin\" method=\"get\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search");
        echo "\" class=\"d-flex\">
                                <fieldset class=\"d-flex\">
                                    <input name=\"word\" type=\"search\" aria-label=\"Search\">
                                    <button type=\"submit\">Search</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <form id=\"formBig\" method=\"get\" action=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search");
        echo "\" class=\"d-flex\">
                    <fieldset class=\"d-flex\">
                        <input name=\"word\" type=\"search\" aria-label=\"Search\">
                        <button type=\"submit\">Search</button>
                    </fieldset>
                </form>
        </nav>
        ";
        // line 84
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "request", [], "any", false, false, false, 84), "attributes", [], "any", false, false, false, 84), "get", ["_route"], "method", false, false, false, 84), "app_home"))) {
            // line 85
            echo "            <div id=\"banniere\">
                <h1><a class=\"nav-link\" title=\"Home de Asso Animal\" href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\">Asso Animal</a></h1>
            </div>
        ";
        }
        // line 89
        echo "</header>
        <main>
                ";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "        </main>

        <footer class=\"py-3 my-4\">
        ";
        // line 96
        echo "        <div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"modaleCookie\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Les Cookies &#127850;</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        Ce site utilise des cookies, cliquez <a title=\"Cookies\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cookies");
        echo "\">ici</a> pour en savoir plus.
                    </div>
                    <div class=\"modal-footer\">
                        <a href=\"javascript:void(0);\" id=\"cookieButton\"  data-bs-dismiss=\"modal\" class=\"btn btn-secondary\">OK</a>
                        <a href=\"javascript:void(0);\" id=\"noCookieButton\"  data-bs-dismiss=\"modal\" class=\"btn btn-dark\">NO</a>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 113
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113)) {
            // line 114
            echo "            ";
            // line 115
            echo "            <div class=\"modal fade\" id=\"modaleSupp\" tabindex=\"-1\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Confirmation de suppression</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <p>Êtes-vous sûr de vouloir supprimer cet élément ?</p>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            <button type=\"button\" class=\"btn btn-danger\" id=\"confirmDelete\">Supprimer</button>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 133
        echo "
        ";
        // line 135
        echo "         <ul class=\"nav justify-content-center pb-3 mb-3\">
            <li class=\"nav-item\"><a class=\"nav-link\" title=\"Contact\" href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contactez-nous</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" title=\"FAQ\" href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faq");
        echo "\">FAQs</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" title=\"About\" href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\">About</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" title=\"Mentions légales\" href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mentionslegales");
        echo "\">Mentions légales</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" title=\"Confidentialité\" href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_confidentialite");
        echo "\">Politique de confidentialité</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" title=\"Cookies\" href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cookies");
        echo "\">Cookies</a></li>
        </ul>
        <ul class=\"nav justify-content-center pb-3 mb-3\">
            <li class=\"ms-3\">
                <a title=\"Facebook\" class=\"text-muted\" href=\"#\">
                    <i class=\"bi bi-facebook\"></i>
                </a>
            </li>
            
            <li class=\"ms-3\">
                <a title=\"Youtube\" class=\"text-muted\" href=\"#\">
                    <i class=\"bi bi-youtube\"></i>
                </a>
            </li>

            <li class=\"ms-3\">
                <a title=\"Instagram\" class=\"text-muted\" href=\"#\">
                    <i class=\"bi bi-instagram\"></i>
                </a>
            </li>
        </ul>
        <p class=\"text-center\">© 2024 Asso Animal</p>
  </footer>
    </body>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modalCookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modalDelete.js"), "html", null, true);
        echo "\"></script>
</html>";
        
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

    // line 91
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
        return array (  379 => 91,  360 => 5,  348 => 168,  344 => 167,  340 => 166,  336 => 165,  309 => 141,  305 => 140,  301 => 139,  297 => 138,  293 => 137,  289 => 136,  286 => 135,  283 => 133,  263 => 115,  261 => 114,  259 => 113,  247 => 104,  237 => 96,  232 => 92,  230 => 91,  226 => 89,  220 => 86,  217 => 85,  215 => 84,  205 => 77,  192 => 68,  189 => 66,  184 => 63,  179 => 61,  175 => 60,  171 => 59,  167 => 58,  162 => 57,  159 => 56,  154 => 54,  150 => 53,  145 => 52,  143 => 51,  139 => 50,  135 => 49,  128 => 44,  126 => 43,  123 => 42,  117 => 40,  114 => 39,  108 => 37,  106 => 36,  99 => 32,  93 => 29,  87 => 26,  81 => 23,  68 => 15,  57 => 8,  55 => 7,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {# Fichier css personnalisé contenant l'import de Bootstrap #}
    {# La fonction asset permet une redirection vers le dossier public #}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22></text></svg>\">
</head>
<body>
    <header>
            <nav class=\"navbar navbar-expand-xl fixed-top\">
                <div class=\"container-fluid\">
                    <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\" title=\"Home\"><img id=\"logo1\" alt=\"Logo d'Asso Animal\" src=\"{{ asset('img/logo_asso_animal_couleur_svg.svg') }}\"></a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"bi bi-list\"></i>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                        <div class=\"navbar-nav\">
                            <ul class=\"navbar-nav mr-auto\">
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" title=\"Home\" href=\"{{ path('app_home') }}\">Home</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" title=\"Comment aider\" href=\"{{ path('app_aider') }}\">Comment aider</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" title=\"Evenements\" href=\"{{ path('app_events') }}\">Evenements</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" title=\"News\" href=\"{{ path('app_news') }}\">News</a>
                                </li>
                                <li class=\"nav-item\">

                                    {% if app.user %}
                                        <a class=\"nav-link\" title=\"Logout\" href=\"{{ path('app_logout') }}\">Logout</a>
                                    {% endif %}
                                    {% if app.user==false %}
                                        <a class=\"nav-link\" title=\"Connexion\" href=\"{{ path('app_login') }}\">Login</a>
                                    {% endif %}
                                </li>
                                {% if app.user %}
                                    <li class=\"nav-item dropdown\">
                                        <span id=\"adminButton\" class=\"dropdown-toggle nav-link\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            Administration
                                        </span>
                                        <ul class=\"dropdown-menu\">
                                            <li><a class=\"dropdown-item\" title=\"Profil utilisateur\" href=\"{{ path('app_user') }}\">Votre compte</a></li>
                                            <li><a class=\"dropdown-item\" title=\"Inscription au événements\" href=\"{{ path('app_registration_event') }}\">Inscription aux événements</a></li>
                                            {% if is_granted('ROLE_ADMIN') %}
                                            <li><a class=\"dropdown-item\" title=\"Vos articles\" href=\"{{ path('app_admin') }}\">Vos articles</a></li>
                                                <li><a class=\"dropdown-item\" title=\"Gestion des événements\" href=\"{{ path('app_gestion_event') }}\">Gestion des événements</a></li>
                                                <li><a class=\"dropdown-item\" title=\"Gestion des commentaires\" href=\"{{ path('app_gestion_comment') }}\">Gestion des commentaires</a></li>
                                            {% endif %}
                                            {% if is_granted('ROLE_SUPER_ADMIN') %}
                                                <li><a class=\"dropdown-item\" title=\"Gestion des autres articles\" href=\"{{ path('app_management_other_people_content') }}\">Gestion des autres articles</a></li>
                                                <li><a class=\"dropdown-item\" title=\"Gestion des utilisateurs\" href=\"{{ path('app_superadmin') }}\">Gestion des utilisateurs</a></li>
                                                <li><a class=\"dropdown-item\" title=\"Gestion des centres\" href=\"{{ path('app_gestion_centre') }}\">Gestion des centres</a></li>
                                                <li><a class=\"dropdown-item\" title=\"Les pages\" href=\"{{ path('app_management_page') }}\">Gestions des pages</a></li>
                                                <li><a class=\"dropdown-item\" title=\"Visiteurs\" href=\"{{ path('app_visit') }}\">Voir les visites</a></li>
                                            {% endif %}
                                        </ul>
                                    </li>
                                {% endif %}
                            </ul>
                            {# en GET pour aider l' utilisateur à retrouver et à partager la recherche #}
                            <form id=\"formMin\" method=\"get\" action=\"{{ path('app_search') }}\" class=\"d-flex\">
                                <fieldset class=\"d-flex\">
                                    <input name=\"word\" type=\"search\" aria-label=\"Search\">
                                    <button type=\"submit\">Search</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <form id=\"formBig\" method=\"get\" action=\"{{ path('app_search') }}\" class=\"d-flex\">
                    <fieldset class=\"d-flex\">
                        <input name=\"word\" type=\"search\" aria-label=\"Search\">
                        <button type=\"submit\">Search</button>
                    </fieldset>
                </form>
        </nav>
        {% if app.request.attributes.get('_route') == 'app_home' %}
            <div id=\"banniere\">
                <h1><a class=\"nav-link\" title=\"Home de Asso Animal\" href=\"{{ path('app_home') }}\">Asso Animal</a></h1>
            </div>
        {% endif %}
</header>
        <main>
                {% block body %}{% endblock %}
        </main>

        <footer class=\"py-3 my-4\">
        {# Modal Bootstrap pour les cookies #}
        <div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"modaleCookie\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Les Cookies &#127850;</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        Ce site utilise des cookies, cliquez <a title=\"Cookies\" href=\"{{ path('app_cookies') }}\">ici</a> pour en savoir plus.
                    </div>
                    <div class=\"modal-footer\">
                        <a href=\"javascript:void(0);\" id=\"cookieButton\"  data-bs-dismiss=\"modal\" class=\"btn btn-secondary\">OK</a>
                        <a href=\"javascript:void(0);\" id=\"noCookieButton\"  data-bs-dismiss=\"modal\" class=\"btn btn-dark\">NO</a>
                    </div>
                </div>
            </div>
        </div>
        {% if app.user %}
            {# Si on est connecté on affiche une modal Bootstrap pour les suppression #}
            <div class=\"modal fade\" id=\"modaleSupp\" tabindex=\"-1\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Confirmation de suppression</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <p>Êtes-vous sûr de vouloir supprimer cet élément ?</p>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            <button type=\"button\" class=\"btn btn-danger\" id=\"confirmDelete\">Supprimer</button>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}

        {# Nav du footer #}
         <ul class=\"nav justify-content-center pb-3 mb-3\">
            <li class=\"nav-item\"><a class=\"nav-link\" title=\"Contact\" href=\"{{ path('app_contact') }}\">Contactez-nous</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" title=\"FAQ\" href=\"{{ path('app_faq') }}\">FAQs</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" title=\"About\" href=\"{{ path('app_about') }}\">About</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" title=\"Mentions légales\" href=\"{{ path('app_mentionslegales') }}\">Mentions légales</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" title=\"Confidentialité\" href=\"{{ path('app_confidentialite') }}\">Politique de confidentialité</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" title=\"Cookies\" href=\"{{ path('app_cookies') }}\">Cookies</a></li>
        </ul>
        <ul class=\"nav justify-content-center pb-3 mb-3\">
            <li class=\"ms-3\">
                <a title=\"Facebook\" class=\"text-muted\" href=\"#\">
                    <i class=\"bi bi-facebook\"></i>
                </a>
            </li>
            
            <li class=\"ms-3\">
                <a title=\"Youtube\" class=\"text-muted\" href=\"#\">
                    <i class=\"bi bi-youtube\"></i>
                </a>
            </li>

            <li class=\"ms-3\">
                <a title=\"Instagram\" class=\"text-muted\" href=\"#\">
                    <i class=\"bi bi-instagram\"></i>
                </a>
            </li>
        </ul>
        <p class=\"text-center\">© 2024 Asso Animal</p>
  </footer>
    </body>
    <script src=\"{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('node_modules/jquery/dist/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('js/modalCookie.js') }}\"></script>
    <script src=\"{{ asset('js/modalDelete.js') }}\"></script>
</html>", "base.html.twig", "C:\\Users\\Admin\\Documents\\cda-catherine\\CDA-project\\templates\\base.html.twig");
    }
}
