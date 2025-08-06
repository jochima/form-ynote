<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* form/ynote.html.twig */
class __TwigTemplate_c44690429d8d6675b2e03094519975e7 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/ynote.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/ynote.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>FORMULAIRE Y-NOTE</title>
    <link rel=\"stylesheet\" href=\"./styles/style.css\">
</head>
<body class=\"light\">
<div class=\"theme-toggle\">
    <button id=\"toggle-theme\">Mode Nuit</button>
</div>

<section>
    <div class=\"content\">
        <form action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ynote_save");
        yield "\" method=\"post\" id=\"ynote-form\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\">
            <fieldset>
                <legend>FORMULAIRE Y-NOTE</legend>
                ";
        // line 20
        $context["success"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", ["success"], "method", false, false, false, 20);
        // line 21
        yield "                ";
        if ((($tmp = (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 21, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                    <div class=\"alert alert-success\">
                        <p><strong>Informations enregistrées :</strong></p>
                        <ul>
                            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 25, $this->source); })()), 0, [], "array", false, false, false, 25));
            foreach ($context['_seq'] as $context["field"] => $context["value"]) {
                // line 26
                yield "                                <li><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["field"]), "html", null, true);
                yield " :</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['field'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "                        </ul>
                    </div>
                ";
        }
        // line 31
        yield "
                ";
        // line 32
        $context["errors"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", ["error"], "method", false, false, false, 32);
        // line 33
        yield "                ";
        if ((($tmp = (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 33, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "                    <div class=\"alert alert-error\">
                        <p><strong>Erreur de validation</strong></p>
                        <ul>
                            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 38
                yield "                                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "                        </ul>
                    </div>
                ";
        }
        // line 43
        yield "
                <div class=\"input\">
                    <input type=\"text\" id=\"fname\" name=\"fullname\" placeholder=\"Nom complet\"
                           value=\"";
        // line 46
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "fullname", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldFields"]) || array_key_exists("oldFields", $context) ? $context["oldFields"] : (function () { throw new RuntimeError('Variable "oldFields" does not exist.', 46, $this->source); })()), "fullname", [], "any", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldFields"]) || array_key_exists("oldFields", $context) ? $context["oldFields"] : (function () { throw new RuntimeError('Variable "oldFields" does not exist.', 46, $this->source); })()), "fullname", [], "any", false, false, false, 46), "html", null, true)) : (""));
        yield "\">
                    <span class=\"error-message\" id=\"fname-error\"></span>
                    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\" value=\"";
        // line 48
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "email", [], "any", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldFields"]) || array_key_exists("oldFields", $context) ? $context["oldFields"] : (function () { throw new RuntimeError('Variable "oldFields" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldFields"]) || array_key_exists("oldFields", $context) ? $context["oldFields"] : (function () { throw new RuntimeError('Variable "oldFields" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), "html", null, true)) : (""));
        yield "\">
                    <span class=\"error-message\" id=\"email-error\"></span>
                </div>
                <div class=\"input\">
                    <input type=\"text\" id=\"phone\" name=\"phone\" placeholder=\"phone\" value=\"";
        // line 52
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "phone", [], "any", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldFields"]) || array_key_exists("oldFields", $context) ? $context["oldFields"] : (function () { throw new RuntimeError('Variable "oldFields" does not exist.', 52, $this->source); })()), "phone", [], "any", false, false, false, 52)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldFields"]) || array_key_exists("oldFields", $context) ? $context["oldFields"] : (function () { throw new RuntimeError('Variable "oldFields" does not exist.', 52, $this->source); })()), "phone", [], "any", false, false, false, 52), "html", null, true)) : (""));
        yield "\">
                    <span class=\"error-message\" id=\"phone-error\"></span>

                    <input type=\"date\" id=\"date\" name=\"birth\" placeholder=\"birth\" value=\"";
        // line 55
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "birth", [], "any", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldFields"]) || array_key_exists("oldFields", $context) ? $context["oldFields"] : (function () { throw new RuntimeError('Variable "oldFields" does not exist.', 55, $this->source); })()), "birth", [], "any", false, false, false, 55)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldFields"]) || array_key_exists("oldFields", $context) ? $context["oldFields"] : (function () { throw new RuntimeError('Variable "oldFields" does not exist.', 55, $this->source); })()), "birth", [], "any", false, false, false, 55), "html", null, true)) : (""));
        yield "\">
                    <span class=\"error-message\" id=\"date-error\"></span>
                </div>
                <div class=\"input\">
                    <select class=\"\" id=\"address\" name=\"address\">
                        <option value=\"\">Sélectionner une adresse</option>
                        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["adresses"]) || array_key_exists("adresses", $context) ? $context["adresses"] : (function () { throw new RuntimeError('Variable "adresses" does not exist.', 61, $this->source); })()), "features", [], "array", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 62
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "properties", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "properties", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                        <option value=\"\"></option>
                    </select>
                </div>

                <div class=\"input\">
                    <button type=\"submit\" id=\"submit\">Soumettre</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<script type=\"text/javascript\" src=\"/scripts/validation.js\"></script>
<script type=\"text/javascript\" src=\"/scripts/themes.js\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "form/ynote.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  183 => 64,  172 => 62,  168 => 61,  159 => 55,  153 => 52,  146 => 48,  141 => 46,  136 => 43,  131 => 40,  122 => 38,  118 => 37,  113 => 34,  110 => 33,  108 => 32,  105 => 31,  100 => 28,  89 => 26,  85 => 25,  80 => 22,  77 => 21,  75 => 20,  69 => 17,  65 => 16,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>FORMULAIRE Y-NOTE</title>
    <link rel=\"stylesheet\" href=\"./styles/style.css\">
</head>
<body class=\"light\">
<div class=\"theme-toggle\">
    <button id=\"toggle-theme\">Mode Nuit</button>
</div>

<section>
    <div class=\"content\">
        <form action=\"{{ path('ynote_save') }}\" method=\"post\" id=\"ynote-form\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token }}\">
            <fieldset>
                <legend>FORMULAIRE Y-NOTE</legend>
                {% set success = app.flashes('success') %}
                {% if success %}
                    <div class=\"alert alert-success\">
                        <p><strong>Informations enregistrées :</strong></p>
                        <ul>
                            {% for field, value in success[0] %}
                                <li><strong>{{ field|capitalize }} :</strong> {{ value }}</li>
                            {% endfor %}
                        </ul>
                    </div>
                {% endif %}

                {% set errors = app.flashes('error') %}
                {% if errors %}
                    <div class=\"alert alert-error\">
                        <p><strong>Erreur de validation</strong></p>
                        <ul>
                            {% for message in errors %}
                                <li>{{ message }}</li>
                            {% endfor %}
                        </ul>
                    </div>
                {% endif %}

                <div class=\"input\">
                    <input type=\"text\" id=\"fname\" name=\"fullname\" placeholder=\"Nom complet\"
                           value=\"{{ oldFields.fullname ?? '' }}\">
                    <span class=\"error-message\" id=\"fname-error\"></span>
                    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\" value=\"{{ oldFields.email ?? '' }}\">
                    <span class=\"error-message\" id=\"email-error\"></span>
                </div>
                <div class=\"input\">
                    <input type=\"text\" id=\"phone\" name=\"phone\" placeholder=\"phone\" value=\"{{ oldFields.phone ?? '' }}\">
                    <span class=\"error-message\" id=\"phone-error\"></span>

                    <input type=\"date\" id=\"date\" name=\"birth\" placeholder=\"birth\" value=\"{{ oldFields.birth ?? '' }}\">
                    <span class=\"error-message\" id=\"date-error\"></span>
                </div>
                <div class=\"input\">
                    <select class=\"\" id=\"address\" name=\"address\">
                        <option value=\"\">Sélectionner une adresse</option>
                        {% for feature in adresses['features'] %}
                            <option value=\"{{ feature.properties.name }}\">{{ feature.properties.name }}</option>
                        {% endfor %}
                        <option value=\"\"></option>
                    </select>
                </div>

                <div class=\"input\">
                    <button type=\"submit\" id=\"submit\">Soumettre</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<script type=\"text/javascript\" src=\"/scripts/validation.js\"></script>
<script type=\"text/javascript\" src=\"/scripts/themes.js\"></script>
</body>
</html>
", "form/ynote.html.twig", "/var/www/templates/form/ynote.html.twig");
    }
}
