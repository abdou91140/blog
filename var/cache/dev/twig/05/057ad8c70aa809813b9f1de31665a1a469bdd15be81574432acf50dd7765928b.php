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
class __TwigTemplate_26681b539f888d553db1b13b5aeed46430d741cddbce6cebb01bc8b97523438b extends Template
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

            <div class=\"col-10\"><h3>Articles</h3>
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 25
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "                        <tr>
                            <th>
                                <img src=\"";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 28), "illustration", [], "any", false, false, false, 28), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 28), "title", [], "any", false, false, false, 28), "html", null, true);
                    echo "\"
                                     height=\"75px\"><br/>
                            </th>
                            <td>
                                ";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
                    echo "<br/>
                            </td>
                            <td>
                                ";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 35), "html", null, true);
                    echo "

                            </td>
                            <td>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 38), "price", [], "any", false, false, false, 38), 2, ",", "."), "html", null, true);
                    echo " €</td>
                            <td>";
                    // line 39
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 39), "price", [], "any", false, false, false, 39), 2, ",", "."), "html", null, true);
                    echo " €</td>
                            <td>
                                <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]), "html", null, true);
                    echo "\">
                                    <img src=\"";
                    // line 42
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
                    // line 51
                    $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 51), "price", [], "any", false, false, false, 51) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 51)));
                    // line 52
                    echo "            ";
                }
                // line 53
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
            <div class=\"col-lg-2\">
                <table class=\"table mt-3\">
                    <h3 class=\"text-center\">Abonnement</h3>

                    <thead>
                    <tr>
                        <th scope=\"col\"></th>
                        <th scope=\"col\">Début</th>
                        <th scope=\"col\">Fin</th>
                        <th scope=\"col\">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 69, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 70
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 70)) {
                    // line 71
                    echo "                        ";
                    $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 71, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 71), "price", [], "any", false, false, false, 71) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 71)));
                    // line 72
                    echo "
                        <tr>
                            <td>";
                    // line 74
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 74), "price", [], "any", false, false, false, 74), "html", null, true);
                    echo "</td>
                            <td>
                                ";
                    // line 76
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 76), "startdate", [], "any", false, false, false, 76), "d/m/Y", "Europe/Paris"), "html", null, true);
                    echo "
                            </td>
                            <td>
                                ";
                    // line 79
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 79), "enddate", [], "any", false, false, false, 79), "d/m/Y", "Europe/Paris"), "html", null, true);
                    echo "
                            </td>
                            <td>
                            <a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82)]), "html", null, true);
                    echo "\">
                                <img src=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/delete.png"), "html", null, true);
                    echo "\" height=\"18px\"
                                     alt=\"Supprimer mon produit\">
                            </a></td>
                        </tr> ";
                }
                // line 87
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                    </tbody>
                </table>
                <hr>
            </div>
            <div class=\" mb-5\">
                <b>Nombre de produit :</b> ";
            // line 93
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 93, $this->source); })())), "html", null, true);
            echo "<br/>
                <b>Total de mon panier :</b> ";
            // line 94
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 94, $this->source); })()), 2, ",", "."), "html", null, true);
            echo " €
                <a href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\" class=\"btn btn-success btn-block mt-3\">Valider mon panier</a>
            </div>
        </div>

    ";
        } else {
            // line 100
            echo "
    ";
        }
        // line 102
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
        return array (  273 => 102,  269 => 100,  261 => 95,  257 => 94,  253 => 93,  246 => 88,  240 => 87,  233 => 83,  229 => 82,  223 => 79,  217 => 76,  212 => 74,  208 => 72,  205 => 71,  202 => 70,  198 => 69,  181 => 54,  175 => 53,  172 => 52,  170 => 51,  158 => 42,  154 => 41,  149 => 39,  145 => 38,  139 => 35,  133 => 32,  124 => 28,  120 => 26,  117 => 25,  112 => 24,  110 => 23,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier{% endblock %}

{% block content %}
    <h1 class=\"display-1 mt-5 mb-5\">Mon panier</h1>
    {% if cart|length > 0 %}
        <div class=\"row\">

            <div class=\"col-10\"><h3>Articles</h3>
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
                    {% for item in cart %}
                    {% if item.post %}
                        <tr>
                            <th>
                                <img src=\"{{ item.post.illustration }}\" alt=\"{{ item.post.title }}\"
                                     height=\"75px\"><br/>
                            </th>
                            <td>
                                {{ item.post.title }}<br/>
                            </td>
                            <td>
                                {{ item.quantity }}

                            </td>
                            <td>{{ item.post.price |number_format(2, ',', '.') }} €</td>
                            <td>{{ item.post.price  |number_format(2, ',', '.') }} €</td>
                            <td>
                                <a href=\"{{ path('delete_to_cart', { 'id' : item.post.id }) }}\">
                                    <img src=\"{{ asset('assets/img/delete.png') }}\" height=\"18px\"
                                         alt=\"Supprimer mon produit\">
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            {% set total = total + (item.post.price * item.quantity) %}
            {% endif %}
            {% endfor %}

            <div class=\"col-lg-2\">
                <table class=\"table mt-3\">
                    <h3 class=\"text-center\">Abonnement</h3>

                    <thead>
                    <tr>
                        <th scope=\"col\"></th>
                        <th scope=\"col\">Début</th>
                        <th scope=\"col\">Fin</th>
                        <th scope=\"col\">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    {% for item in cart %}
                        {% if item.sub %}
                        {% set total = total + (item.sub.price * item.quantity) %}

                        <tr>
                            <td>{{ item.sub.price }}</td>
                            <td>
                                {{ item.sub.startdate | date(\"d/m/Y\", \"Europe/Paris\") }}
                            </td>
                            <td>
                                {{ item.sub.enddate | date(\"d/m/Y\", \"Europe/Paris\") }}
                            </td>
                            <td>
                            <a href=\"{{ path('delete_to_cart', { 'id' : item.sub.id }) }}\">
                                <img src=\"{{ asset('assets/img/delete.png') }}\" height=\"18px\"
                                     alt=\"Supprimer mon produit\">
                            </a></td>
                        </tr> {% endif %}
                    {% endfor %}
                    </tbody>
                </table>
                <hr>
            </div>
            <div class=\" mb-5\">
                <b>Nombre de produit :</b> {{ cart|length }}<br/>
                <b>Total de mon panier :</b> {{ total |number_format(2, ',', '.') }} €
                <a href=\"{{ path('order') }}\" class=\"btn btn-success btn-block mt-3\">Valider mon panier</a>
            </div>
        </div>

    {% else %}

    {% endif %}

{% endblock %}
", "cart/index.html.twig", "C:\\Users\\PC\\PhpstormProjects\\fidlelyTest\\la-boutique-francaise\\templates\\cart\\index.html.twig");
    }
}
