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

/* students/Filter.html.twig */
class __TwigTemplate_1cf46e404f2f54a3380acd58db7ce9517bef1a8ab3303b0b92977d65899e1547 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "students/Filter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "students/Filter.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "students/Filter.html.twig", 1);
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

        echo "Filter";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container mt-3 mb-3\">
    <div class=\"row ml-5\">
        <div class=\"col-12\">
        ";
        // line 9
        if ((0 === twig_compare((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 9, $this->source); })()), "grade"))) {
            // line 10
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("grade", ["name" => "grade"]);
            echo "\" class=\"btn-warning btn\"> back to page</a>
        ";
        } else {
            // line 12
            echo "           <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Student", ["st" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn-warning btn\"> back to page</a>
        ";
        }
        // line 14
        echo "        </div>
    </div>
</div>

<table class=\"table mt-5\">
<thead>
";
        // line 20
        if ((0 === twig_compare((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 20, $this->source); })()), "Classes"))) {
            // line 21
            echo "    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Name</th>
      <th scope=\"col\">Section</th>
    </tr>
";
        } elseif ((0 === twig_compare(        // line 26
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 26, $this->source); })()), "Course"))) {
            echo "  
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Name</th>
      <th scope=\"col\">Description</th>
    </tr>  
";
        } elseif ((0 === twig_compare(        // line 32
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 32, $this->source); })()), "student"))) {
            echo "  
<tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">First_Name</th>
      <th scope=\"col\">Last_Name</th>
      <th scope=\"col\">Date_of_birth</th>
      <th scope=\"col\">Course</th>
</tr>
";
        } elseif ((0 === twig_compare(        // line 40
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 40, $this->source); })()), "grade"))) {
            // line 41
            echo "<tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">First_Name</th>
      <th scope=\"col\">Last_Name</th>
      <th scope=\"col\">Course</th>
      <th scope=\"col\">grade</th>
</tr>
";
        }
        // line 49
        echo "  </thead>
  <tbody>
";
        // line 51
        if ((0 === twig_compare((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 51, $this->source); })()), "Classes"))) {
            // line 52
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["filters"]) {
                // line 53
                echo "    <tr>
      <th scope=\"row\">";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "getid", [], "method", false, false, false, 54), "html", null, true);
                echo "</th>
      <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "getName", [], "method", false, false, false, 55), "html", null, true);
                echo "</td>
      <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "getSection", [], "method", false, false, false, 56), "html", null, true);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filters'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ((0 === twig_compare(        // line 59
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 59, $this->source); })()), "Course"))) {
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 60, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["filters"]) {
                // line 61
                echo "    <tr>
      <th scope=\"row\">";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "getid", [], "method", false, false, false, 62), "html", null, true);
                echo "</th>
      <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "getName", [], "method", false, false, false, 63), "html", null, true);
                echo "</td>
      <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "getDescription", [], "method", false, false, false, 64), "html", null, true);
                echo "</td>
    </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filters'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ((0 === twig_compare(        // line 67
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 67, $this->source); })()), "students"))) {
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 68, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["filters"]) {
                // line 69
                echo "    <tr>
      <th scope=\"row\">";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "id", [], "any", false, false, false, 70), "html", null, true);
                echo "</th>
      <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "First_Name", [], "any", false, false, false, 71), "html", null, true);
                echo "</td>
      <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "Last_Name", [], "any", false, false, false, 72), "html", null, true);
                echo "</td>
      <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "Date_of_Birth", [], "any", false, false, false, 73), "Y-m-d"), "html", null, true);
                echo "</td>
      <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "Name", [], "any", false, false, false, 74), "html", null, true);
                echo "</td>
    </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filters'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ((0 === twig_compare(        // line 77
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 77, $this->source); })()), "grade"))) {
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 78, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["filters"]) {
                // line 79
                echo "    <tr>
      <th scope=\"row\">";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "id", [], "any", false, false, false, 80), "html", null, true);
                echo "</th>
      <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "First_Name", [], "any", false, false, false, 81), "html", null, true);
                echo "</td>
      <td>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "Last_Name", [], "any", false, false, false, 82), "html", null, true);
                echo "</td>
      <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "Name", [], "any", false, false, false, 83), "html", null, true);
                echo "</td>
      <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filters"], "Grade", [], "any", false, false, false, 84), "html", null, true);
                echo "</td>
    </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filters'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 88
        echo "  </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "students/Filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 88,  272 => 84,  268 => 83,  264 => 82,  260 => 81,  256 => 80,  253 => 79,  249 => 78,  247 => 77,  238 => 74,  234 => 73,  230 => 72,  226 => 71,  222 => 70,  219 => 69,  215 => 68,  213 => 67,  204 => 64,  200 => 63,  196 => 62,  193 => 61,  189 => 60,  187 => 59,  178 => 56,  174 => 55,  170 => 54,  167 => 53,  162 => 52,  160 => 51,  156 => 49,  146 => 41,  144 => 40,  133 => 32,  124 => 26,  117 => 21,  115 => 20,  107 => 14,  101 => 12,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Filter{% endblock %}

{% block body %}
<div class=\"container mt-3 mb-3\">
    <div class=\"row ml-5\">
        <div class=\"col-12\">
        {%if type=='grade'%}
        <a href=\"{{ path('grade',{'name':'grade'}) }}\" class=\"btn-warning btn\"> back to page</a>
        {%else%}
           <a href=\"{{ path('Student',{'st':type}) }}\" class=\"btn-warning btn\"> back to page</a>
        {%endif%}
        </div>
    </div>
</div>

<table class=\"table mt-5\">
<thead>
{%if type=='Classes'%}
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Name</th>
      <th scope=\"col\">Section</th>
    </tr>
{% elseif type=='Course'%}  
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Name</th>
      <th scope=\"col\">Description</th>
    </tr>  
{% elseif type=='student'%}  
<tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">First_Name</th>
      <th scope=\"col\">Last_Name</th>
      <th scope=\"col\">Date_of_birth</th>
      <th scope=\"col\">Course</th>
</tr>
{%elseif type=='grade'%}
<tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">First_Name</th>
      <th scope=\"col\">Last_Name</th>
      <th scope=\"col\">Course</th>
      <th scope=\"col\">grade</th>
</tr>
{%endif%}
  </thead>
  <tbody>
{%if type=='Classes'%}
  {% for filters in filter%}
    <tr>
      <th scope=\"row\">{{filters.getid()}}</th>
      <td>{{filters.getName()}}</td>
      <td>{{filters.getSection()}}</td>
    </tr>
    {%endfor%}
{% elseif type=='Course'%}
{% for filters in filter%}
    <tr>
      <th scope=\"row\">{{filters.getid()}}</th>
      <td>{{filters.getName()}}</td>
      <td>{{filters.getDescription()}}</td>
    </tr>
{%endfor%}
{% elseif type=='students'%}
{% for filters in filter%}
    <tr>
      <th scope=\"row\">{{filters.id}}</th>
      <td>{{filters.First_Name}}</td>
      <td>{{filters.Last_Name}}</td>
      <td>{{filters.Date_of_Birth|date('Y-m-d')}}</td>
      <td>{{filters.Name}}</td>
    </tr>
{%endfor%}
{%elseif type=='grade'%}
{% for filters in filter%}
    <tr>
      <th scope=\"row\">{{filters.id}}</th>
      <td>{{filters.First_Name}}</td>
      <td>{{filters.Last_Name}}</td>
      <td>{{filters.Name}}</td>
      <td>{{filters.Grade}}</td>
    </tr>
{%endfor%}
{%endif%}
  </tbody>
</table>
{% endblock %}
", "students/Filter.html.twig", "C:\\Users\\farha\\OneDrive\\Desktop\\projet\\ob_soft\\templates\\students\\Filter.html.twig");
    }
}
