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

/* cart/index.html.twig */
class __TwigTemplate_6553fed45e9545283e3fa397002b5d97b045dcfcc253fc2d8b72295000e6f2a8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Mon panier";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"display-1 mt-5 mb-5\">Mon panier</h1>
    ";
        // line 7
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 7, $this->source); })())), 0))) {
            // line 8
            echo "        <div class=\"row\">

            <div class=\"col-10\"> <h3>Articles</h3>
                <table class=\"table mt-3\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Illustration</th>
                        <th scope=\"col\">Titre</th>
                        <th scope=\"col\">Quantité</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">Total</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 23
            $context["total"] = null;
            // line 24
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 25
                echo "                        <tr>
                            <th>
                                <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "posts", [], "any", false, false, false, 27), "illustration", [], "any", false, false, false, 27), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "posts", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27), "html", null, true);
                echo "\"
                                     height=\"75px\"><br/>
                            </th>
                            <td>
                                ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "posts", [], "any", false, false, false, 31), "title", [], "any", false, false, false, 31), "html", null, true);
                echo "<br/>
                            </td>
                            <td>
                                ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "quantity", [], "any", false, false, false, 34), "html", null, true);
                echo "

                            </td>
                            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "posts", [], "any", false, false, false, 37), "price", [], "any", false, false, false, 37), 2, ",", "."), "html", null, true);
                echo " €</td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "posts", [], "any", false, false, false, 38), "price", [], "any", false, false, false, 38), 2, ",", "."), "html", null, true);
                echo " €</td>
                            <td>
                                <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "posts", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">
                                    <img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/delete.png"), "html", null, true);
                echo "\" height=\"18px\"
                                         alt=\"Supprimer mon produit\">
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            ";
                // line 50
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 50, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "posts", [], "any", false, false, false, 50), "price", [], "any", false, false, false, 50) * twig_get_attribute($this->env, $this->source, $context["post"], "quantity", [], "any", false, false, false, 50)));
                // line 51
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
                <div class=\"col-lg-2\">
                <table class=\"table mt-3\">
                    <h3 class=\"text-center\">Abonnement</h3>

                    <thead>
                    <tr>
                        <th scope=\"col\"></th>
                        <th scope=\"col\">Début</th>
                        <th scope=\"col\">Fin</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 66, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 67
                echo "                    <tr>
                        <td>Premium</td>
                        <td>
                            ";
                // line 70
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "sub", [], "any", false, false, false, 70), "startdate", [], "any", false, false, false, 70), "d/m/Y", "Europe/Paris"), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 73
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "sub", [], "any", false, false, false, 73), "enddate", [], "any", false, false, false, 73), "d/m/Y", "Europe/Paris"), "html", null, true);
                echo "
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                    </tbody>
                </table>
        </div>
            <div class=\"text-center mb-5\">
        <b>Nombre de produit :</b> ";
            // line 81
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 81, $this->source); })())), "html", null, true);
            echo "<br/>
        <b>Total de mon panier :</b> ";
            // line 82
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 82, $this->source); })()), 2, ",", "."), "html", null, true);
            echo " €
        <a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\" class=\"btn btn-success btn-block mt-3\">Valider mon panier</a>
    </div> </div>
    ";
        } else {
            // line 86
            echo "        <h3>Abonnement premium</h3>
        <a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_sub-premium");
            echo "\">
            <div class=\"btn btn-dark\">Premium</div>
        </a>
        <hr>
        <p><b>Votre panier est vide.</b></p>
    ";
        }
        // line 93
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 93,  239 => 87,  236 => 86,  230 => 83,  226 => 82,  222 => 81,  216 => 77,  206 => 73,  200 => 70,  195 => 67,  191 => 66,  176 => 53,  169 => 51,  167 => 50,  155 => 41,  151 => 40,  146 => 38,  142 => 37,  136 => 34,  130 => 31,  121 => 27,  117 => 25,  112 => 24,  110 => 23,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier{% endblock %}

{% block content %}
    <h1 class=\"display-1 mt-5 mb-5\">Mon panier</h1>
    {% if cart|length > 0 %}
        <div class=\"row\">

            <div class=\"col-10\"> <h3>Articles</h3>
                <table class=\"table mt-3\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Illustration</th>
                        <th scope=\"col\">Titre</th>
                        <th scope=\"col\">Quantité</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">Total</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% set total = null %}
                    {% for post in cart %}
                        <tr>
                            <th>
                                <img src=\"{{ post.posts.illustration }}\" alt=\"{{ post.posts.title }}\"
                                     height=\"75px\"><br/>
                            </th>
                            <td>
                                {{ post.posts.title }}<br/>
                            </td>
                            <td>
                                {{ post.quantity }}

                            </td>
                            <td>{{ post.posts.price |number_format(2, ',', '.') }} €</td>
                            <td>{{ post.posts.price  |number_format(2, ',', '.') }} €</td>
                            <td>
                                <a href=\"{{ path('delete_to_cart', { 'id' : post.posts.id }) }}\">
                                    <img src=\"{{ asset('assets/img/delete.png') }}\" height=\"18px\"
                                         alt=\"Supprimer mon produit\">
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            {% set total = total + (post.posts.price * post.quantity) %}

            {% endfor %}

                <div class=\"col-lg-2\">
                <table class=\"table mt-3\">
                    <h3 class=\"text-center\">Abonnement</h3>

                    <thead>
                    <tr>
                        <th scope=\"col\"></th>
                        <th scope=\"col\">Début</th>
                        <th scope=\"col\">Fin</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for post in cart %}
                    <tr>
                        <td>Premium</td>
                        <td>
                            {{ post.sub.startdate | date(\"d/m/Y\", \"Europe/Paris\") }}
                        </td>
                        <td>
                            {{ post.sub.enddate | date(\"d/m/Y\", \"Europe/Paris\") }}
                        </td>
                    </tr>
                    {% endfor %}
                    </tbody>
                </table>
        </div>
            <div class=\"text-center mb-5\">
        <b>Nombre de produit :</b> {{ cart|length }}<br/>
        <b>Total de mon panier :</b> {{ total |number_format(2, ',', '.') }} €
        <a href=\"{{ path('order') }}\" class=\"btn btn-success btn-block mt-3\">Valider mon panier</a>
    </div> </div>
    {% else %}
        <h3>Abonnement premium</h3>
        <a href=\"{{ path('cart_sub-premium') }}\">
            <div class=\"btn btn-dark\">Premium</div>
        </a>
        <hr>
        <p><b>Votre panier est vide.</b></p>
    {% endif %}

{% endblock %}
", "cart/index.html.twig", "C:\\Users\\PC\\PhpstormProjects\\fidlelyTest\\la-boutique-francaise\\templates\\cart\\index.html.twig");
    }
}
