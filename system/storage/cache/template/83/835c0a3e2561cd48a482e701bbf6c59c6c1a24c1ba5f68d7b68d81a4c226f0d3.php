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

/* default/template/account/registeredCustomers.twig */
class __TwigTemplate_6f7aa1981e93ad16fa30187e556918ff75158f2a0b4ae8333d0198cbe544cba7 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "
";
        // line 4
        echo "<div class=\"container\">

    <ul class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>

    <div class=\"col-sm-12\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th class=\"text-center\">Name</th>
                    <th class=\"text-center\">Email</th>
                    <th class=\"text-center\">Telephone</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 23
            echo "                    <tr>
                        <td class=\"text-center\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["customer"], "firstname", [], "any", false, false, false, 24);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["customer"], "lastname", [], "any", false, false, false, 24);
            echo "</td>
                        <td class=\"text-center\">";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 25);
            echo "</td>
                        <td class=\"text-center\">";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["customer"], "telephone", [], "any", false, false, false, 26);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </tbody>
        </table>        
    </div>
</div>
";
        // line 33
        echo ($context["content_top"] ?? null);
        echo "
";
        // line 34
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 35
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/account/registeredCustomers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  115 => 34,  111 => 33,  105 => 29,  96 => 26,  92 => 25,  86 => 24,  83 => 23,  79 => 22,  65 => 10,  54 => 8,  50 => 7,  45 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/registeredCustomers.twig", "");
    }
}
