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
class __TwigTemplate_d7d367baf3dcbbf2689c7eb571ca4adf33453826246272400667ae43d0ddf760 extends Template
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
    <div class=\"d-flex justify-content-center\">";
        // line 6
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 6, $this->source); })()), "posts/pagination.html.twig");
        echo "</div>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["post"], "premium", [], "any", false, false, false, 9)) {
                // line 10
                echo "                <div class=\" px-4 px-lg-5\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                <!-- Post preview-->
                <div class=\"post-preview\">
           <h2>";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 14), "html", null, true);
                echo "</h2>
                <p class=\"post-meta\">
                    Publié par
                    <span>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 17), "firstname", [], "any", false, false, false, 17), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 17), "lastname", [], "any", false, false, false, 17), "html", null, true);
                echo "</span>
                    ";
                // line 19
                echo "                </p>
                <a class=\"\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\">
                    <button class=\"btn  btn-success mt-3\">Plus de
                        détails...
                    </button>
                </a>
                </div>
                </div>
                </div>
            <hr>
        ";
            } else {
                // line 30
                echo "
            <div class=\" px-4 px-lg-5 \" ";
                // line 31
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_IMPERSONATOR")) {
                    echo " style=\"filter: blur(5px);pointer-events: none\"";
                }
                echo " >
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                    <!-- Post preview-->
                    <div class=\"post-preview\">
                        <h2>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 35), "html", null, true);
                echo "</h2>
                        <p class=\"post-meta\">
                            Publié par
                            <span>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 38), "firstname", [], "any", false, false, false, 38), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 38), "lastname", [], "any", false, false, false, 38), "html", null, true);
                echo "</span>
                            ";
                // line 40
                echo "                        </p>
                        <a   class=\"disabled\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">
                            <button  class=\"btn btn-success mt-3 \">Plus de
                                détails...
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
        ";
            }
            // line 51
            echo "    ";
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
        return array (  177 => 51,  164 => 41,  161 => 40,  155 => 38,  149 => 35,  140 => 31,  137 => 30,  124 => 20,  121 => 19,  115 => 17,  109 => 14,  103 => 10,  100 => 9,  96 => 8,  91 => 6,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listes des articles {% endblock %}
{% block content %}
    <h1 class=\"display-1 mt-5 mb-5\">Liste des articles</h1>
    <div class=\"d-flex justify-content-center\">{{ knp_pagination_render(pagination,'posts/pagination.html.twig') }}</div>

    {% for post in pagination %}
        {% if not post.premium %}
                <div class=\" px-4 px-lg-5\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                <!-- Post preview-->
                <div class=\"post-preview\">
           <h2>{{ post.title }}</h2>
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
                </div>
                </div>
                </div>
            <hr>
        {% else %}

            <div class=\" px-4 px-lg-5 \" {% if is_granted('IS_IMPERSONATOR') %} style=\"filter: blur(5px);pointer-events: none\"{% endif%} >
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                    <!-- Post preview-->
                    <div class=\"post-preview\">
                        <h2>{{ post.title }}</h2>
                        <p class=\"post-meta\">
                            Publié par
                            <span>{{ post.author.firstname }} {{ post.author.lastname }}</span>
                            {# at {{ post.createAt ? post.createAt|date('Y-m-d H:i:s') : '' }} #}
                        </p>
                        <a   class=\"disabled\" href=\"{{ path('post', {'id': post.id}) }}\">
                            <button  class=\"btn btn-success mt-3 \">Plus de
                                détails...
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
        {% endif %}
    {% endfor %}
{% endblock %}
", "posts/show.html.twig", "C:\\Users\\PC\\PhpstormProjects\\fidlelyTest\\la-boutique-francaise\\templates\\posts\\show.html.twig");
    }
}
