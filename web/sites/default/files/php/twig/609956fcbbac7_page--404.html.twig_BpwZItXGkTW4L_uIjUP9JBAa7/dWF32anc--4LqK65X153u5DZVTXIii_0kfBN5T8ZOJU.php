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

/* themes/contrib/bfd/templates/page/page--404.html.twig */
class __TwigTemplate_bdefe9ec7d6065abf9b2d926dd51d15ce82442ed8dd9f05bb74396fcfe850cc0 extends \Twig\Template
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
        // line 45
        echo "

<!-- HEADER-->
";
        // line 48
        $this->loadTemplate("@bootstrap_for_drupal/includes/header.html.twig", "themes/contrib/bfd/templates/page/page--404.html.twig", 48)->display($context);
        // line 49
        echo "<!-- HEADER-->

<!-- MAIN -->
<main role=\"main\">
   <a id=\"main-content\" tabindex=\"-1\"></a>
   ";
        // line 55
        echo "   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col\">
            <div class=\"flex-column d-flex justify-content-center flex-grow-1 align-items-center vh-75\">
               <div class=\"p-5 p-md-7 rounded text-center\">
                  <h1 class=\"display-3 text-danger text-uppercase\">";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("error 404"));
        echo "</h1>
                  <p class=\"lead\">";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Page not found"));
        echo "</p>
                  <a href=\"/\" class=\"btn btn-outline-primary\">";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Back to Home page"));
        echo "</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<!-- MAIN -->

<!-- FOOTER -->
";
        // line 72
        $this->loadTemplate("@bootstrap_for_drupal/includes/footer.html.twig", "themes/contrib/bfd/templates/page/page--404.html.twig", 72)->display($context);
        // line 73
        echo "<!-- FOOTER -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bfd/templates/page/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 73,  81 => 72,  68 => 62,  64 => 61,  60 => 60,  53 => 55,  46 => 49,  44 => 48,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bfd/templates/page/page--404.html.twig", "/opt/drupal/web/web/themes/contrib/bfd/templates/page/page--404.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 48);
        static $filters = array("t" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['t'],
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
