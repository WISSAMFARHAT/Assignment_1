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

/* students/grade.html.twig */
class __TwigTemplate_338dd293ba32e98c8628949bf6b9cee07926c26de804aa8f5c81028fb49a3894 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "students/grade.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "students/grade.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "students/grade.html.twig", 1);
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

        echo "grade";
        
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
     <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Filter", ["student" => "filter", "filter" => "show"]), "html", null, true);
        echo "\">
     <div class=\"form-group\" >
            <label class=\"control-label\">Search By
            <select name=\"type\" id=\"type\" class=\"mb-3\">
                <option value=\"First_Name\">First Name</option>
                <option value=\"Course\">Course</option>
                <option value=\"grade\">grade</option>
              </select>
            </label>
            <div class=\"input-group\">
                <input id=\"text\" name='input' type=\"text\" class=\" btn-default form-control\">
                <button id=\"text\" type=\"text\" class=\" btn-primary go inlineinput-group-btn btn \">Search</button>
            </div>
     </form>
        <div class=\"col-12 mt-3\">
           <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Student", ["st" => "students"]);
        echo "\" class=\"btn-warning btn\"> back to page</a>
        </div>
    </div>
</div>

<table class=\"table mt-5\">
<thead>
<tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">First_Name</th>
      <th scope=\"col\">Last_Name</th>
      <th scope=\"col\">Course</th>
      <th scope=\"col\">grade</th>
</tr>
  </thead>
  <tbody>
  ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grade"]) || array_key_exists("grade", $context) ? $context["grade"] : (function () { throw new RuntimeError('Variable "grade" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["grades"]) {
            // line 40
            echo "    <tr>
      <th scope=\"row\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grades"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</th>
      <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grades"], "First_Name", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
      <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grades"], "Last_Name", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
      <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grades"], "Name", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
      <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grades"], "Grade", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grades'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "students/grade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 48,  152 => 45,  148 => 44,  144 => 43,  140 => 42,  136 => 41,  133 => 40,  129 => 39,  110 => 23,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}grade{% endblock %}

{% block body %}
<div class=\"container mt-3 mb-3\">
    <div class=\"row ml-5\">
     <form action=\"{{ path('Filter',{'student':'filter','filter':'show'})}}\">
     <div class=\"form-group\" >
            <label class=\"control-label\">Search By
            <select name=\"type\" id=\"type\" class=\"mb-3\">
                <option value=\"First_Name\">First Name</option>
                <option value=\"Course\">Course</option>
                <option value=\"grade\">grade</option>
              </select>
            </label>
            <div class=\"input-group\">
                <input id=\"text\" name='input' type=\"text\" class=\" btn-default form-control\">
                <button id=\"text\" type=\"text\" class=\" btn-primary go inlineinput-group-btn btn \">Search</button>
            </div>
     </form>
        <div class=\"col-12 mt-3\">
           <a href=\"{{ path('Student',{'st':'students'}) }}\" class=\"btn-warning btn\"> back to page</a>
        </div>
    </div>
</div>

<table class=\"table mt-5\">
<thead>
<tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">First_Name</th>
      <th scope=\"col\">Last_Name</th>
      <th scope=\"col\">Course</th>
      <th scope=\"col\">grade</th>
</tr>
  </thead>
  <tbody>
  {% for grades in grade%}
    <tr>
      <th scope=\"row\">{{grades.id}}</th>
      <td>{{grades.First_Name}}</td>
      <td>{{grades.Last_Name}}</td>
      <td>{{grades.Name}}</td>
      <td>{{grades.Grade}}</td>
    </tr>
    {%endfor%}
  </tbody>
</table>
{% endblock %}
", "students/grade.html.twig", "C:\\Users\\farha\\OneDrive\\Desktop\\projet\\ob_soft\\templates\\students\\grade.html.twig");
    }
}
