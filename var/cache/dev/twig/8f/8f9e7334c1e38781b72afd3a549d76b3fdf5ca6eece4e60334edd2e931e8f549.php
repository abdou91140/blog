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

/* order/add.html.twig */
class __TwigTemplate_4b6767db636822c2d9168dd980f2c0801cbe86fe12f46977e1f104c9cce6c2af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 4
        echo "<script src=\"https://js.stripe.com/v3/\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Paiement";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "<h1 class=\"display-1 mt-5 mb-5\">Récapitulatif</h1>
<hr>
<div>
    <div>
        <div class=\"text-center\">
            <b>Ma commande</b><br/>
        </div>
        <div class=\"order-summary\">
            ";
        // line 18
        $context["total"] = null;
        // line 19
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 20
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 20)) {
                // line 21
                echo "                <div class=\"row ";
                if ((1 === twig_compare($context["key"], 0))) {
                    echo "mt-2";
                }
                echo "\">
                    <div class=\"col-2\">
                        <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 23), "illustration", [], "any", false, false, false, 23), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 23), "title", [], "any", false, false, false, 23), "html", null, true);
                echo "\" height=\"75px\">
                    </div>
                    <div class=\"col-8 my-auto\">
                        ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 26), "title", [], "any", false, false, false, 26), "html", null, true);
                echo "<br/>
                        <small>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 27), "author", [], "any", false, false, false, 27), "firstname", [], "any", false, false, false, 27), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 27), "author", [], "any", false, false, false, 27), "lastname", [], "any", false, false, false, 27), "html", null, true);
                echo "</small>
                    </div>
                    <div class=\"col-2 my-auto\">
                        ";
                // line 30
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 30), "price", [], "any", false, false, false, 30) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 30)) / 100), 2, ",", "."), "html", null, true);
                echo " €
                    </div>
                </div>
                ";
                // line 33
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 33, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 33), "price", [], "any", false, false, false, 33) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 33)));
                // line 34
                echo "            ";
            }
            // line 35
            echo "            <div class=\"row ";
            if ((1 === twig_compare($context["key"], 0))) {
                echo "mt-2";
            }
            echo "\">
                <div class=\"col-2\">
                    Abonnement
                </div>
                <div class=\"col-8 my-auto\">
                    Premium
                </div>
                ";
            // line 42
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 42, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 42), "price", [], "any", false, false, false, 42) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 42)));
            // line 43
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </div>

            <hr>
            <strong>Total : </strong> ";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 48, $this->source); })()), 2, ",", "."), "html", null, true);
        echo " €<br/>
            <hr>
            <a class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer
                | ";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()), 2, ",", "."), "html", null, true);
        echo " €</a>
        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 57
        echo "        <script type=\"text/javascript\">
            var stripe = Stripe(\"pk_test_51K72nMK2QiohVyzPIoZYfOiBP6Wc1ZTqNk4mUagEW13587ZMMpmcgfzdGd9Pxq5HIKbgD0ptSMaFlqyOhqPgwyDP00OXHqWJhI\");
            var checkoutButton = document.getElementById(\"checkout-button\");
            checkoutButton.addEventListener(\"click\", function () {
                fetch(\"/commande/create-session/";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "\", {
                    method: \"POST\",
                })
                    .then(function (response) {
                        return response.json();
                    })
                    .then(function (session) {
                        if (session.error == 'order') {
                            window.location.replace('";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "');
                        } else {
                            return stripe.redirectToCheckout({sessionId: session.id});
                        }
                    })
                    .then(function (result) {
                        // If redirectToCheckout fails due to a browser or network
                        // error, you should display the localized error message to your
                        // customer using error.message.
                        if (result.error) {
                            alert(result.error.message);
                        }
                    })
                    .catch(function (error) {
                        console.error(\"Error:\", error);
                    });
            });
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 69,  233 => 61,  227 => 57,  217 => 56,  203 => 51,  197 => 48,  192 => 45,  185 => 43,  183 => 42,  170 => 35,  167 => 34,  165 => 33,  159 => 30,  151 => 27,  147 => 26,  139 => 23,  131 => 21,  128 => 20,  123 => 19,  121 => 18,  111 => 10,  101 => 9,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block javascript %}
<script src=\"https://js.stripe.com/v3/\"></script>
{% endblock %}

{% block title %}Paiement{% endblock %}

{% block content %}
<h1 class=\"display-1 mt-5 mb-5\">Récapitulatif</h1>
<hr>
<div>
    <div>
        <div class=\"text-center\">
            <b>Ma commande</b><br/>
        </div>
        <div class=\"order-summary\">
            {% set total = null %}
            {% for key,item in cart %}
            {% if item.post %}
                <div class=\"row {% if key > 0 %}mt-2{% endif %}\">
                    <div class=\"col-2\">
                        <img src=\"{{ item.post.illustration }}\" alt=\"{{ item.post.title }}\" height=\"75px\">
                    </div>
                    <div class=\"col-8 my-auto\">
                        {{ item.post.title }}<br/>
                        <small>{{ item.post.author.firstname }} {{ item.post.author.lastname }}</small>
                    </div>
                    <div class=\"col-2 my-auto\">
                        {{ ((item.post.price * item.quantity ) / 100)|number_format(2, ',', '.') }} €
                    </div>
                </div>
                {% set total = total + (item.post.price * item.quantity) %}
            {% endif %}
            <div class=\"row {% if key > 0 %}mt-2{% endif %}\">
                <div class=\"col-2\">
                    Abonnement
                </div>
                <div class=\"col-8 my-auto\">
                    Premium
                </div>
                {% set total = total + (item.sub.price * item.quantity) %}

                {% endfor %}
            </div>

            <hr>
            <strong>Total : </strong> {{ total|number_format(2, ',', '.') }} €<br/>
            <hr>
            <a class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer
                | {{ total |number_format(2, ',', '.') }} €</a>
        </div>
    </div>
    {% endblock %}

    {% block script %}
        <script type=\"text/javascript\">
            var stripe = Stripe(\"pk_test_51K72nMK2QiohVyzPIoZYfOiBP6Wc1ZTqNk4mUagEW13587ZMMpmcgfzdGd9Pxq5HIKbgD0ptSMaFlqyOhqPgwyDP00OXHqWJhI\");
            var checkoutButton = document.getElementById(\"checkout-button\");
            checkoutButton.addEventListener(\"click\", function () {
                fetch(\"/commande/create-session/{{ reference }}\", {
                    method: \"POST\",
                })
                    .then(function (response) {
                        return response.json();
                    })
                    .then(function (session) {
                        if (session.error == 'order') {
                            window.location.replace('{{ path('order') }}');
                        } else {
                            return stripe.redirectToCheckout({sessionId: session.id});
                        }
                    })
                    .then(function (result) {
                        // If redirectToCheckout fails due to a browser or network
                        // error, you should display the localized error message to your
                        // customer using error.message.
                        if (result.error) {
                            alert(result.error.message);
                        }
                    })
                    .catch(function (error) {
                        console.error(\"Error:\", error);
                    });
            });
        </script>
    {% endblock %}
", "order/add.html.twig", "C:\\Users\\PC\\PhpstormProjects\\fidlelyTest\\la-boutique-francaise\\templates\\order\\add.html.twig");
    }
}
