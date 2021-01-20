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

/* students/student.html.twig */
class __TwigTemplate_bf57172dbfbc7ff2d7dac2b3cf1516323a97477bb3bce5886a52c56cad5111d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "students/student.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "students/student.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "students/student.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 2, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if ((0 === twig_compare((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 4, $this->source); })()), "students"))) {
            // line 5
            echo "<div class=\"container mt-5\">
    <div class=\"row\">
    <div class=\"col-12\">
        <form action=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Filter", ["student" => "filter", "filter" => "students"]), "html", null, true);
            echo "\">
            <div class=\"form-group\" >
                <label class=\"control-label\">Search By
                <select name=\"type\" id=\"type\" class=\"mb-3\">
                <option value=\"First_Name\">First Name</option>
                <option value=\"Last_Name\">Last Name</option>
                <option value=\"course\">course</option>
                </select>
                </label>
            </div>
            <div class=\"input-group\">
                <input id=\"text\" name='input' type=\"text\" class=\" btn-default form-control\">
                <button id=\"text\" type=\"text\" class=\" btn-primary go inlineinput-group-btn btn \">Search</button>
            </div>
        </form>
    </div>
    <div class=\"col-12\">
      <div class=\"row\">
        <div class=\"col-3 mt-1 mb-3 mr-4\">
            <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new", ["name" => "Insert"]);
            echo "\"  class=\"btn btn-dark mt-3\">Insert another student</a>
        </div>
        <div class=\"col-3 mt-3 mb-3 \">
            <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("grade", ["name" => "grade"]);
            echo "\"  class=\"btn btn-success\">show grade</a>
        </div>
      </div>
    </div>
    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stt"]) || array_key_exists("stt", $context) ? $context["stt"] : (function () { throw new RuntimeError('Variable "stt" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 35
                echo "     <div class=\"col-lg-4 col-md-4 col-sm-12 mb-4\">
         <div class=\"card\" style=\"width: 18rem;\">
          <img class=\"card-img-top \" src=\"data:image/*;base64,";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "getImage", [], "method", false, false, false, 37), "html", null, true);
                echo "\" alt=\"Card image cap\">
           <div class=\"card-body\">
           <h5 class=\"card-title\">";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "getFirstName", [], "method", false, false, false, 39), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "getLastName", [], "method", false, false, false, 39), "html", null, true);
                echo "</h5>
           <p class=\"card-text\">Date of birth :";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "getDateOfBirth", [], "method", false, false, false, 40), "Y-m-d"), "html", null, true);
                echo "</p>
           <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Show", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "getId", [], "method", false, false, false, 41)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Show detail</a>
           <a  href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Remove", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "getId", [], "method", false, false, false, 42)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Delete</a>
           <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "getId", [], "method", false, false, false, 43)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">Edit</a>
           <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_course", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "getId", [], "method", false, false, false, 44)]), "html", null, true);
                echo "\"  class=\"btn btn-warning mt-3\">Insert cours for student</a>
           </div>
         </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "    </div>
</div>
";
        } elseif ((0 === twig_compare(        // line 51
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 51, $this->source); })()), "Classes"))) {
            // line 52
            echo "<div class=\"navigation text-center mt-3\">
    ";
            // line 53
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["Cl"]) || array_key_exists("Cl", $context) ? $context["Cl"] : (function () { throw new RuntimeError('Variable "Cl" does not exist.', 53, $this->source); })()));
            echo "
</div>
<table class=\"table mt-5\">

<div class=\"container mt-5\">
    <div class=\"row\">
        <form action=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Filter", ["student" => "filter", "filter" => "Classes"]), "html", null, true);
            echo "\">
     <div class=\"form-group\" >
            <label class=\"control-label\">Search By
            <select name=\"type\" id=\"type\" class=\"mb-3\">
                <option value=\"Name\">Name</option>
              </select>
            </label>
            <div class=\"input-group\">
                <input id=\"text\" name='input' type=\"text\" class=\" btn-default form-control\">
                <button id=\"text\" type=\"text\" class=\" btn-primary go inlineinput-group-btn btn \">Search</button>
            </div>
     </form>
        <div class=\"col-2 mt-3\">
        <a href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insert_classes", ["name" => "Insert"]);
            echo "\" class=\"btn btn-danger\">Add</a>
        </div>
    </div>
</div>
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Name</th>
      <th scope=\"col\">Section</th>
      <th scope=\"col\"></th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Cl"]) || array_key_exists("Cl", $context) ? $context["Cl"] : (function () { throw new RuntimeError('Variable "Cl" does not exist.', 86, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["classes"]) {
                // line 87
                echo "    <tr>
      <th scope=\"row\">";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classes"], "getid", [], "method", false, false, false, 88), "html", null, true);
                echo "</th>
      <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classes"], "getName", [], "method", false, false, false, 89), "html", null, true);
                echo "</td>
      <td>";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classes"], "getSection", [], "method", false, false, false, 90), "html", null, true);
                echo "</td>
      <td><a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Remove_classes", ["id" => twig_get_attribute($this->env, $this->source, $context["classes"], "getId", [], "method", false, false, false, 91)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Delete</a></td>
      <td><a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_classes", ["id" => twig_get_attribute($this->env, $this->source, $context["classes"], "getId", [], "method", false, false, false, 92)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Edit</a></td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "  </tbody>
</table>

";
        } elseif ((0 === twig_compare(        // line 98
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 98, $this->source); })()), "Courses"))) {
            // line 99
            echo "<div class=\"navigation text-center mt-3 \">
    ";
            // line 100
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["Course"]) || array_key_exists("Course", $context) ? $context["Course"] : (function () { throw new RuntimeError('Variable "Course" does not exist.', 100, $this->source); })()));
            echo "
</div>
<div class=\"container mt-5\">
    <div class=\"row\">
        <form action=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Filter", ["student" => "filter", "filter" => "Courses"]), "html", null, true);
            echo "\">
     <div class=\"form-group\" >
            <label class=\"control-label\">Search By
            <select name=\"type\" id=\"type\" class=\"mb-3\">
                <option value=\"Name\">Name</option>
              </select>
            </label>
            <div class=\"input-group\">
                <input id=\"text\" name='input' type=\"text\" class=\" btn-default form-control\">
                <button id=\"text\" type=\"text\" class=\" btn-primary go inlineinput-group-btn btn \">Search</button>
            </div>
     </form>
        <div class=\"col-2 mt-3 \">
        <a href=\"";
            // line 117
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insert_course", ["name" => "Insert"]);
            echo "\" class=\"btn btn-danger\">Add</a>
        </div>
    </div>
</div>
<table class=\"table mt-5\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Name</th>
      <th scope=\"col\">Descritpion</th>
      <th scope=\"col\"></th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Course"]) || array_key_exists("Course", $context) ? $context["Course"] : (function () { throw new RuntimeError('Variable "Course" does not exist.', 132, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["courses"]) {
                // line 133
                echo "    <tr>
      <th scope=\"row\">";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courses"], "getid", [], "method", false, false, false, 134), "html", null, true);
                echo "</th>
      <td>";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courses"], "getName", [], "method", false, false, false, 135), "html", null, true);
                echo "</td>
      <td>";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courses"], "getDescription", [], "method", false, false, false, 136), "html", null, true);
                echo "</td>
      <td><a href=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Remove_course", ["id" => twig_get_attribute($this->env, $this->source, $context["courses"], "getId", [], "method", false, false, false, 137)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Delete</a></td>
      <td><a href=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_course", ["id" => twig_get_attribute($this->env, $this->source, $context["courses"], "getId", [], "method", false, false, false, 138)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Edit</a></td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courses'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "  </tbody>
</table>

";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "students/student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 141,  333 => 138,  329 => 137,  325 => 136,  321 => 135,  317 => 134,  314 => 133,  310 => 132,  292 => 117,  276 => 104,  269 => 100,  266 => 99,  264 => 98,  259 => 95,  250 => 92,  246 => 91,  242 => 90,  238 => 89,  234 => 88,  231 => 87,  227 => 86,  210 => 72,  194 => 59,  185 => 53,  182 => 52,  180 => 51,  176 => 49,  165 => 44,  161 => 43,  157 => 42,  153 => 41,  149 => 40,  143 => 39,  138 => 37,  134 => 35,  130 => 34,  123 => 30,  117 => 27,  95 => 8,  90 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{name}}{% endblock %}
{% block body %}
{% if name =='students'%}
<div class=\"container mt-5\">
    <div class=\"row\">
    <div class=\"col-12\">
        <form action=\"{{ path('Filter',{'student':'filter','filter':'students'})}}\">
            <div class=\"form-group\" >
                <label class=\"control-label\">Search By
                <select name=\"type\" id=\"type\" class=\"mb-3\">
                <option value=\"First_Name\">First Name</option>
                <option value=\"Last_Name\">Last Name</option>
                <option value=\"course\">course</option>
                </select>
                </label>
            </div>
            <div class=\"input-group\">
                <input id=\"text\" name='input' type=\"text\" class=\" btn-default form-control\">
                <button id=\"text\" type=\"text\" class=\" btn-primary go inlineinput-group-btn btn \">Search</button>
            </div>
        </form>
    </div>
    <div class=\"col-12\">
      <div class=\"row\">
        <div class=\"col-3 mt-1 mb-3 mr-4\">
            <a href=\"{{ path('new',{'name':'Insert'}) }}\"  class=\"btn btn-dark mt-3\">Insert another student</a>
        </div>
        <div class=\"col-3 mt-3 mb-3 \">
            <a href=\"{{ path('grade',{'name':'grade'}) }}\"  class=\"btn btn-success\">show grade</a>
        </div>
      </div>
    </div>
    {%for student in stt%}
     <div class=\"col-lg-4 col-md-4 col-sm-12 mb-4\">
         <div class=\"card\" style=\"width: 18rem;\">
          <img class=\"card-img-top \" src=\"data:image/*;base64,{{student.getImage()}}\" alt=\"Card image cap\">
           <div class=\"card-body\">
           <h5 class=\"card-title\">{{student.getFirstName()}} {{student.getLastName()}}</h5>
           <p class=\"card-text\">Date of birth :{{student.getDateOfBirth()|date('Y-m-d')}}</p>
           <a href=\"{{path('Show',{'id':student.getId()})}}\" class=\"btn btn-primary\">Show detail</a>
           <a  href=\"{{path('Remove',{'id':student.getId()})}}\" class=\"btn btn-danger\">Delete</a>
           <a href=\"{{path('update',{'id':student.getId()})}}\" class=\"btn btn-secondary\">Edit</a>
           <a href=\"{{ path('new_course',{'id':student.getId()}) }}\"  class=\"btn btn-warning mt-3\">Insert cours for student</a>
           </div>
         </div>
    </div>
    {%endfor%}
    </div>
</div>
{%elseif name=='Classes'%}
<div class=\"navigation text-center mt-3\">
    {{ knp_pagination_render(Cl)}}
</div>
<table class=\"table mt-5\">

<div class=\"container mt-5\">
    <div class=\"row\">
        <form action=\"{{ path('Filter',{'student':'filter','filter':'Classes'})}}\">
     <div class=\"form-group\" >
            <label class=\"control-label\">Search By
            <select name=\"type\" id=\"type\" class=\"mb-3\">
                <option value=\"Name\">Name</option>
              </select>
            </label>
            <div class=\"input-group\">
                <input id=\"text\" name='input' type=\"text\" class=\" btn-default form-control\">
                <button id=\"text\" type=\"text\" class=\" btn-primary go inlineinput-group-btn btn \">Search</button>
            </div>
     </form>
        <div class=\"col-2 mt-3\">
        <a href=\"{{ path('insert_classes',{'name':\"Insert\"}) }}\" class=\"btn btn-danger\">Add</a>
        </div>
    </div>
</div>
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Name</th>
      <th scope=\"col\">Section</th>
      <th scope=\"col\"></th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  {% for classes in Cl%}
    <tr>
      <th scope=\"row\">{{classes.getid()}}</th>
      <td>{{classes.getName()}}</td>
      <td>{{classes.getSection()}}</td>
      <td><a href=\"{{ path('Remove_classes',{'id':classes.getId()}) }}\" class=\"btn btn-danger\">Delete</a></td>
      <td><a href=\"{{ path('update_classes',{'id':classes.getId()}) }}\" class=\"btn btn-danger\">Edit</a></td>
    </tr>
    {%endfor%}
  </tbody>
</table>

{%elseif name=='Courses'%}
<div class=\"navigation text-center mt-3 \">
    {{ knp_pagination_render(Course) }}
</div>
<div class=\"container mt-5\">
    <div class=\"row\">
        <form action=\"{{ path('Filter',{'student':'filter','filter':'Courses'})}}\">
     <div class=\"form-group\" >
            <label class=\"control-label\">Search By
            <select name=\"type\" id=\"type\" class=\"mb-3\">
                <option value=\"Name\">Name</option>
              </select>
            </label>
            <div class=\"input-group\">
                <input id=\"text\" name='input' type=\"text\" class=\" btn-default form-control\">
                <button id=\"text\" type=\"text\" class=\" btn-primary go inlineinput-group-btn btn \">Search</button>
            </div>
     </form>
        <div class=\"col-2 mt-3 \">
        <a href=\"{{ path('insert_course',{'name':'Insert'}) }}\" class=\"btn btn-danger\">Add</a>
        </div>
    </div>
</div>
<table class=\"table mt-5\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Name</th>
      <th scope=\"col\">Descritpion</th>
      <th scope=\"col\"></th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  {% for courses in Course%}
    <tr>
      <th scope=\"row\">{{courses.getid()}}</th>
      <td>{{courses.getName()}}</td>
      <td>{{courses.getDescription()}}</td>
      <td><a href=\"{{ path('Remove_course',{'id':courses.getId()}) }}\" class=\"btn btn-danger\">Delete</a></td>
      <td><a href=\"{{ path('update_course',{'id':courses.getId()}) }}\" class=\"btn btn-danger\">Edit</a></td>
    </tr>
    {%endfor%}
  </tbody>
</table>

{%endif%}
{% endblock %}
", "students/student.html.twig", "C:\\Users\\farha\\OneDrive\\Desktop\\projet\\ob_soft\\templates\\students\\student.html.twig");
    }
}
