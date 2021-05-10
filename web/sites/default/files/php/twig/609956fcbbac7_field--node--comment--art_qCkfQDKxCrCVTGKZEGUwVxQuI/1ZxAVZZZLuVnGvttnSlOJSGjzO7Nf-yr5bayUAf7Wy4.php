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

/* themes/contrib/bfd/templates/content/comment/field--node--comment--article.html.twig */
class __TwigTemplate_0d7007206f99ed9264000f57dd386920d7610fab6fc6d847647c1274c9a560c4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 31
($context["field_name"] ?? null), 31, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["field_type"] ?? null), 32, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 33
($context["label_display"] ?? null), 33, $this->source)), 4 => "comment-wrapper"];
        // line 38
        $context["title_classes"] = [0 => "title", 1 => "comment-title-main", 2 => (((        // line 41
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 44
        echo "
";
        // line 45
        if ((($context["comments"] ?? null) &&  !($context["label_hidden"] ?? null))) {
            // line 46
            echo "  <div class=\"my-5 col-print-12\" id=\"comment-container\"> 
    <section";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addclass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
            echo ">
      ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 48, $this->source), "html", null, true);
            echo "
      <h2";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => "comments"], "method", false, false, true, 49), 49, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 49, $this->source), "html", null, true);
            echo "</h2>
      ";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 50, $this->source), "html", null, true);
            echo "

      ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comments"] ?? null), 52, $this->source), "html", null, true);
            echo "
    </section>
  </div>
";
        }
        // line 56
        echo "
";
        // line 57
        if (($context["comment_form"] ?? null)) {
            // line 58
            echo "  <div class=\"container\">
  <div class=\"row justify-content-md-center\">
    <div class=\"col col-md-8 p-2 p-md-4 my-5 bg-light rounded comment-new-container d-print-none\">
      <h2 class=\"title comment-form__title comment-new-title\">";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add new comment"));
            echo "</h2>
      ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_form"] ?? null), 62, $this->source), "html", null, true);
            echo "
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bfd/templates/content/comment/field--node--comment--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 62,  93 => 61,  88 => 58,  86 => 57,  83 => 56,  76 => 52,  71 => 50,  63 => 49,  59 => 48,  55 => 47,  52 => 46,  50 => 45,  47 => 44,  45 => 41,  44 => 38,  42 => 33,  41 => 32,  40 => 31,  39 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bfd/templates/content/comment/field--node--comment--article.html.twig", "/opt/drupal/web/web/themes/contrib/bfd/templates/content/comment/field--node--comment--article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 45);
        static $filters = array("clean_class" => 31, "escape" => 47, "t" => 61);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
