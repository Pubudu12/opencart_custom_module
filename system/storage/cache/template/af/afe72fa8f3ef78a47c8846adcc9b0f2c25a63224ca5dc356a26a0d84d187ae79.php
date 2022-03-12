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
class __TwigTemplate_00a71577af695be5cf82e51ba59d19d7d4c7d16cc228342e0557e226ae558a3a extends \Twig\Template
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
                    ";
        // line 17
        echo "                    <th class=\"text-center\">Name</th>
                    <th class=\"text-center\">Email</th>
                    <th class=\"text-center\">Telephone</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 24
            echo "                    <tr>
                        ";
            // line 26
            echo "                        <td class=\"text-center\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer"], "firstname", [], "any", false, false, false, 26);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["customer"], "lastname", [], "any", false, false, false, 26);
            echo "</td>
                        <td class=\"text-center\">";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 27);
            echo "</td>
                        <td class=\"text-center\">";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["customer"], "telephone", [], "any", false, false, false, 28);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </tbody>
        </table>        
    </div>
</div>
";
        // line 35
        echo ($context["content_top"] ?? null);
        echo "
";
        // line 36
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 37
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
        return array (  122 => 37,  118 => 36,  114 => 35,  108 => 31,  99 => 28,  95 => 27,  88 => 26,  85 => 24,  81 => 23,  73 => 17,  65 => 10,  54 => 8,  50 => 7,  45 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/registeredCustomers.twig", "");
    }
}
