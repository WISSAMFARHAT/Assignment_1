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

/* students/st_insert_update.html.twig */
class __TwigTemplate_2751020eafbc12723d957a449db3e9351d87fcd2b56843ea3cc8c53875f45aa4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "students/st_insert_update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "students/st_insert_update.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "students/st_insert_update.html.twig", 1);
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
        echo "<div class=\"container mt-3 mb-3\">
    <div class=\"row ml-5\">
        <div class=\"col-12\">
           <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Student", ["st" => (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 7, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn-warning btn\"> back to page</a>
        </div>
    </div>
</div>
";
        // line 11
        if ((0 === twig_compare((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 11, $this->source); })()), "Insert"))) {
            // line 12
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
            // line 13
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
            echo "
    ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'widget');
            echo "
        <button class=\"btn btn-success mt-3\">Insert</button>
    ";
            // line 16
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_end');
            echo "
";
        } elseif ((0 === twig_compare(        // line 17
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 17, $this->source); })()), "Update"))) {
            // line 18
            echo "<form action=\"\" >
<div class=\"container mt-3\">
    <div class=\"row\">
        <div class=\"col-4\">
        <img class=\"card-img-top\" src=\"data:image/*;base64,";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 22, $this->source); })()), "getImage", [], "method", false, false, false, 22), "html", null, true);
            echo "\" alt=\"Card image cap\">
        </div>
        <div class=\"col-6\">
        <div class=\"row\">
            <div class=\"col-12\">
               <label>First Name </label>
               <input id=\"First\" name='First' type=\"text\" class=\" btn-default form-control\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 28, $this->source); })()), "getFirstName", [], "method", false, false, false, 28), "html", null, true);
            echo "\">
            </div>
            <div class=\"col-12\">
            <label>Last Name </label>
               <input id=\"Last\" name='Last' type=\"text\" class=\" btn-default form-control\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 32, $this->source); })()), "getLastName", [], "method", false, false, false, 32), "html", null, true);
            echo "\">
            </div>
            <div class=\"col-12\">
            <label>Date of birth </label>
               <input id=\"date\" name='Date' type=\"date\" class=\" btn-default form-control\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 36, $this->source); })()), "getDateOfBirth", [], "method", false, false, false, 36), "Y-m-d"), "html", null, true);
            echo "\">
            </div>
            <div class=\"col-12\">
                <button class=\"btn btn-success mt-3\">Update</button>
            </div>
        </div>
        </div>
    </div>
</div>
</form>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "students/st_insert_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 36,  142 => 32,  135 => 28,  126 => 22,  120 => 18,  118 => 17,  114 => 16,  109 => 14,  104 => 13,  102 => 12,  100 => 11,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{name}}{% endblock %}
{% block body %}
<div class=\"container mt-3 mb-3\">
    <div class=\"row ml-5\">
        <div class=\"col-12\">
           <a href=\"{{ path('Student',{'st':Page}) }}\" class=\"btn-warning btn\"> back to page</a>
        </div>
    </div>
</div>
{%if name =='Insert'%}
{%form_theme form 'bootstrap_4_layout.html.twig'%}
    {{form_start(form)}}
    {{form_widget(form)}}
        <button class=\"btn btn-success mt-3\">Insert</button>
    {{form_end(form)}}
{% elseif name=='Update'%}
<form action=\"\" >
<div class=\"container mt-3\">
    <div class=\"row\">
        <div class=\"col-4\">
        <img class=\"card-img-top\" src=\"data:image/*;base64,{{student.getImage()}}\" alt=\"Card image cap\">
        </div>
        <div class=\"col-6\">
        <div class=\"row\">
            <div class=\"col-12\">
               <label>First Name </label>
               <input id=\"First\" name='First' type=\"text\" class=\" btn-default form-control\" value=\"{{student.getFirstName()}}\">
            </div>
            <div class=\"col-12\">
            <label>Last Name </label>
               <input id=\"Last\" name='Last' type=\"text\" class=\" btn-default form-control\" value=\"{{student.getLastName()}}\">
            </div>
            <div class=\"col-12\">
            <label>Date of birth </label>
               <input id=\"date\" name='Date' type=\"date\" class=\" btn-default form-control\" value=\"{{student.getDateOfBirth()|date('Y-m-d')}}\">
            </div>
            <div class=\"col-12\">
                <button class=\"btn btn-success mt-3\">Update</button>
            </div>
        </div>
        </div>
    </div>
</div>
</form>
{%endif%}
{% endblock %}

", "students/st_insert_update.html.twig", "C:\\Users\\farha\\OneDrive\\Desktop\\projet\\ob_soft\\templates\\students\\st_insert_update.html.twig");
    }
}
