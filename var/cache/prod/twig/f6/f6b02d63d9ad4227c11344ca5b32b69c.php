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
class __TwigTemplate_fdac6a9f3c3a572480d7fbe8b33ca756 extends Template
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
        <form action=\"https://form-ynote.onrender.com";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ynote_save");
        yield "\" method=\"post\" id=\"ynote-form\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\">
            <fieldset>
                <legend>FORMULAIRE Y-NOTE</legend>
                ";
        // line 20
        $context["success"] = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 20);
        // line 21
        yield "                ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                    <div class=\"alert alert-success\">
                        <p><strong>Informations enregistrées :</strong></p>
                        <ul>
                            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v0 = ($context["success"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null));
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
        $context["errors"] = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 32);
        // line 33
        yield "                ";
        if ((($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "                    <div class=\"alert alert-error\">
                        <p><strong>Erreur de validation</strong></p>
                        <ul>
                            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
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
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "fullname", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "fullname", [], "any", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "fullname", [], "any", false, false, false, 46), "html", null, true)) : (""));
        yield "\">
                    <span class=\"error-message\" id=\"fname-error\"></span>
                    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\" value=\"";
        // line 48
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "email", [], "any", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "email", [], "any", false, false, false, 48)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "email", [], "any", false, false, false, 48), "html", null, true)) : (""));
        yield "\">
                    <span class=\"error-message\" id=\"email-error\"></span>
                </div>
                <div class=\"input\">
                    <input type=\"text\" id=\"phone\" name=\"phone\" placeholder=\"phone\" value=\"";
        // line 52
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "phone", [], "any", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "phone", [], "any", false, false, false, 52)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "phone", [], "any", false, false, false, 52), "html", null, true)) : (""));
        yield "\">
                    <span class=\"error-message\" id=\"phone-error\"></span>

                    <input type=\"date\" id=\"date\" name=\"birth\" placeholder=\"birth\" value=\"";
        // line 55
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "birth", [], "any", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "birth", [], "any", false, false, false, 55)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oldFields"] ?? null), "birth", [], "any", false, false, false, 55), "html", null, true)) : (""));
        yield "\">
                    <span class=\"error-message\" id=\"date-error\"></span>
                </div>
                <div class=\"input\">
                    <select class=\"\" id=\"address\" name=\"address\">
                        <option value=\"\">Sélectionner une adresse</option>
                        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((($_v1 = ($context["adresses"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["features"] ?? null) : null));
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
        return array (  177 => 64,  166 => 62,  162 => 61,  153 => 55,  147 => 52,  140 => 48,  135 => 46,  130 => 43,  125 => 40,  116 => 38,  112 => 37,  107 => 34,  104 => 33,  102 => 32,  99 => 31,  94 => 28,  83 => 26,  79 => 25,  74 => 22,  71 => 21,  69 => 20,  63 => 17,  59 => 16,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "form/ynote.html.twig", "/Users/joachimk/Documents/GitHub/form-ynote/templates/form/ynote.html.twig");
    }
}
