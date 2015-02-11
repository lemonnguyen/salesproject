<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_88b58498513e6d05798f62a1c52d71109ba2d4eee93f5788fda426c6bda92e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("AdminBundle::admin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_name($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"title-breadcrumb-option-demo\" class=\"page-title-breadcrumb\">
\t<div class=\"page-header pull-left\">
\t\t<div class=\"page-title\">Change Password</div>
\t</div>
\t<ol class=\"breadcrumb page-breadcrumb pull-right\">
\t\t<li><i class=\"fa fa-home\"></i>&nbsp;<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("admin_homepage");
        echo "\">Home</a>&nbsp;&nbsp;<i
\t\t\tclass=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
\t\t<li class=\"hidden\"><a href=\"#\">Profile</a>&nbsp;&nbsp;<i
\t\t\tclass=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
\t\t<li class=\"active\">Profile</li>
\t</ol>
\t<div class=\"clearfix\"></div>
</div>
";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"col-lg-6\">
\t<div class=\"panel-body pan\">
\t\t<form action=\"#\" class=\"form-horizontal\">
\t\t\t<div class=\"form-body pal\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"inputName\" class=\"col-md-3 control-label\"> New Password</label>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"input-icon right\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i> <input id=\"inputName\" type=\"text\"
\t\t\t\t\t\t\t\tplaceholder=\"\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"inputPassword\" class=\"col-md-3 control-label\"> Confirm
\t\t\t\t\t\tPassword</label>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"input-icon right\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i> <input id=\"inputPassword\" type=\"text\"
\t\t\t\t\t\t\t\tplaceholder=\"\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-offset-5 col-md-6\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Change Password</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  60 => 19,  47 => 9,  40 => 4,  37 => 3,  11 => 1,);
    }
}
