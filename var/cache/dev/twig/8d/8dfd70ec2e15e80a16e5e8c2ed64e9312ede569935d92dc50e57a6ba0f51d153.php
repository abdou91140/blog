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

/* posts/show.html.twig */
class __TwigTemplate_479c72b0de44bdbd482a6e2dbcf38c41be963b4abacc707672c701e1725b3057 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "posts/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "posts/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "posts/show.html.twig", 1);
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

        echo "Listes des articles ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1 class=\"display-1 mt-5 mb-5\">Liste des articles</h1>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["post"], "premium", [], "any", false, false, false, 7)) {
                // line 8
                echo "                <div class=\" px-4 px-lg-5\">
                <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                <!-- Post preview-->
                <div class=\"post-preview\">
                <div class=\"w-100\"><span><div><h2 class=\"title\"> Titre:</h2></div><p> ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 13), "html", null, true);
                echo "</p></span></div>
                <p class=\"post-meta\">
                    Publié par
                    <span>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 16), "firstname", [], "any", false, false, false, 16), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 16), "lastname", [], "any", false, false, false, 16), "html", null, true);
                echo "</span>
                    ";
                // line 18
                echo "                </p>

                <a class=\"\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\">
                    <button class=\"btn  btn-success mt-3\">Plus de
                        détails...
                    </button>
                </a>
            ";
            } else {
                // line 26
                echo "            ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREMIUM")) {
                    // line 27
                    echo "                <div class=\" px-4 px-lg-5\">
                <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                <!-- Post preview-->
                <div class=\"post-preview\">
                <div class=\"w-100\"><span><div><h2 class=\"title\"> Titre:</h2></div><p> ";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 32), "html", null, true);
                    echo "</p></span></div>
                <p class=\"post-meta\">
                    Publié par
                    <span>";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 35), "firstname", [], "any", false, false, false, 35), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 35), "lastname", [], "any", false, false, false, 35), "html", null, true);
                    echo "</span>
                    ";
                    // line 37
                    echo "                </p>

                <a class=\"\" href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_premium", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                    echo "\">
                    <button class=\"btn  btn-success mt-3\">Plus de
                        détails...
                    </button>
                </a>
                ";
                }
                // line 45
                echo "        ";
            }
            // line 46
            echo "        </div>
        <!-- Divider-->
        <hr class=\"my-4\"/>
        </div>
        </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "posts/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 46,  165 => 45,  156 => 39,  152 => 37,  146 => 35,  140 => 32,  133 => 27,  130 => 26,  121 => 20,  117 => 18,  111 => 16,  105 => 13,  98 => 8,  95 => 7,  91 => 6,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listes des articles {% endblock %}
{% block content %}
    <h1 class=\"display-1 mt-5 mb-5\">Liste des articles</h1>
    {% for post in posts %}
        {% if not post.premium %}
                <div class=\" px-4 px-lg-5\">
                <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                <!-- Post preview-->
                <div class=\"post-preview\">
                <div class=\"w-100\"><span><div><h2 class=\"title\"> Titre:</h2></div><p> {{ post.title }}</p></span></div>
                <p class=\"post-meta\">
                    Publié par
                    <span>{{ post.author.firstname }} {{ post.author.lastname }}</span>
                    {# at {{ post.createAt ? post.createAt|date('Y-m-d H:i:s') : '' }} #}
                </p>

                <a class=\"\" href=\"{{ path('post', {'id': post.id}) }}\">
                    <button class=\"btn  btn-success mt-3\">Plus de
                        détails...
                    </button>
                </a>
            {% else %}
            {% if is_granted('ROLE_PREMIUM') %}
                <div class=\" px-4 px-lg-5\">
                <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                <!-- Post preview-->
                <div class=\"post-preview\">
                <div class=\"w-100\"><span><div><h2 class=\"title\"> Titre:</h2></div><p> {{ post.title }}</p></span></div>
                <p class=\"post-meta\">
                    Publié par
                    <span>{{ post.author.firstname }} {{ post.author.lastname }}</span>
                    {# at {{ post.createAt ? post.createAt|date('Y-m-d H:i:s') : '' }} #}
                </p>

                <a class=\"\" href=\"{{ path('post_premium', {'id': post.id}) }}\">
                    <button class=\"btn  btn-success mt-3\">Plus de
                        détails...
                    </button>
                </a>
                {% endif %}
        {% endif %}
        </div>
        <!-- Divider-->
        <hr class=\"my-4\"/>
        </div>
        </div>
        </div>
    {% endfor %}
{% endblock %}
", "posts/show.html.twig", "C:\\Users\\PC\\PhpstormProjects\\fidlelyTest\\la-boutique-francaise\\templates\\posts\\show.html.twig");
    }
}
