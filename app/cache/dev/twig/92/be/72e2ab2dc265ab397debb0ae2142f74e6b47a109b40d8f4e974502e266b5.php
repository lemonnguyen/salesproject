<?php

/* AdminBundle:Default:catalog.html.twig */
class __TwigTemplate_92be72e2ab2dc265ab397debb0ae2142f74e6b47a109b40d8f4e974502e266b5 extends Twig_Template
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
            'title' => array($this, 'block_title'),
            'name' => array($this, 'block_name'),
            'modal' => array($this, 'block_modal'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    public function block_title($context, array $blocks = array())
    {
        echo "Catalog
Management ";
    }

    // line 2
    public function block_name($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"title-breadcrumb-option-demo\" class=\"page-title-breadcrumb\">
\t<div class=\"page-header pull-left\">
\t\t<div class=\"page-title\">
\t\t\t<i class=\"btn btn-primary\" data-target=\"#modal-config\"
\t\t\t\tdata-toggle=\"modal\">New Catalog</i>
\t\t</div>
\t</div>
\t<ol class=\"breadcrumb page-breadcrumb pull-right\">
\t\t<li><i class=\"fa fa-home\"></i>&nbsp;<a
\t\t\thref=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("admin_homepage");
        echo "\">Home</a>&nbsp;&nbsp;<i
\t\t\tclass=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
\t\t<li class=\"hidden\"><a href=\"#\">Catalog</a>&nbsp;&nbsp;<i
\t\t\tclass=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
\t\t<li class=\"active\">Catalog</li>
\t</ol>
\t<div class=\"clearfix\"></div>
</div>
";
    }

    // line 20
    public function block_modal($context, array $blocks = array())
    {
        // line 21
        echo "<!--BEGIN MODAL CONFIG PORTLET-->
<div id=\"modal-config\" class=\"modal fade\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\"
\t\t\t\t\tclass=\"close\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">Add New Catalog</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"panel-body pan\">
\t\t\t\t\t<form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("admin_insertCatalog");
        echo "\"
\t\t\t\t\t\tclass=\"form-horizontal\" method=\"post\">
\t\t\t\t\t\t<div class=\"form-body pal\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"inputName\" class=\"col-md-3 control-label\"> Catalog
\t\t\t\t\t\t\t\t\tName</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t<div class=\"input-icon right\">
\t\t\t\t\t\t\t\t\t\t<input id=\"inputName\" type=\"text\" name=\"inputName\"
\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"inputDesc\" class=\"col-md-3 control-label\">
\t\t\t\t\t\t\t\t\tDescription</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t<div class=\"input-icon right\">
\t\t\t\t\t\t\t\t\t\t<textarea id=\"inputDesc\" rows=\"5\" placeholder=\"\"
\t\t\t\t\t\t\t\t\t\t\tname=\"inputDesc\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<button type=\"button\" data-dismiss=\"modal\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-default\">Close</button>
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" name=\"submit\"
\t\t\t\t\t\t\t\t\tvalue=\"Add New Catalog\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!--END MODAL CONFIG PORTLET-->
";
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        // line 70
        echo "<div class=\"row mbl\">
\t<div class=\"col-lg-12\">
\t\t<div class=\"col-md-12\">
\t\t\t<div id=\"area-chart-spline\"
\t\t\t\tstyle=\"width: 100%; height: 300px; display: none;\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-lg-12\">
\t\t<div class=\"page-content\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"panel\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div id=\"grid-layout-table-1\" class=\"box jplist\">
\t\t\t\t\t\t\t\t<div class=\"jplist-ios-button\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-sort\"></i>Actions
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"jplist-panel box panel-top\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-control-type=\"reset\"
\t\t\t\t\t\t\t\t\t\tdata-control-name=\"reset\" data-control-action=\"reset\"
\t\t\t\t\t\t\t\t\t\tclass=\"jplist-reset-btn btn btn-default\">
\t\t\t\t\t\t\t\t\t\tReset<i class=\"fa fa-share mls\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<div data-control-type=\"drop-down\" data-control-name=\"paging\"
\t\t\t\t\t\t\t\t\t\tdata-control-action=\"paging\"
\t\t\t\t\t\t\t\t\t\tclass=\"jplist-drop-down form-control\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><span data-number=\"3\"> 3 per page</span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span data-number=\"5\"> 5 per page</span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span data-number=\"10\" data-default=\"true\"> 10 per page</span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span data-number=\"all\"> view all</span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div data-control-type=\"drop-down\" data-control-name=\"sort\"
\t\t\t\t\t\t\t\t\t\tdata-control-action=\"sort\" data-datetime-format=\"{
\t\t\t\t\t\t\t\t\t\tmonth}/{day}/{year}\" class=\"jplist-drop-down form-control\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><span data-path=\"default\">Sort by</span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span data-path=\".title\" data-order=\"asc\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-type=\"text\">Name A-Z</span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span data-path=\".title\" data-order=\"desc\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-type=\"text\">Name Z-A</span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span data-path=\".desc\" data-order=\"asc\" data-type=\"text\">Description
\t\t\t\t\t\t\t\t\t\t\t\t\tA-Z</span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span data-path=\".desc\" data-order=\"desc\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-type=\"text\">Description Z-A</span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text-filter-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span><input
\t\t\t\t\t\t\t\t\t\t\t\tdata-path=\".title\" type=\"text\" value=\"\"
\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"Filter by Name\" data-control-type=\"textbox\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-control-name=\"title-filter\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-control-action=\"filter\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text-filter-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span><input
\t\t\t\t\t\t\t\t\t\t\t\tdata-path=\".desc\" type=\"text\" value=\"\"
\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"Filter by Description\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-control-type=\"textbox\" data-control-name=\"desc-filter\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-control-action=\"filter\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box text-shadow\">
\t\t\t\t\t\t\t\t\t<table class=\"demo-tbl col-md-12\">
\t\t\t\t\t\t\t\t\t\t<!--<item>1</item>-->
\t\t\t\t\t\t\t\t\t\t";
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 141
            echo "\t\t\t\t\t\t\t\t\t\t<tr class=\"tbl-item\">
\t\t\t\t\t\t\t\t\t\t\t<!--<data></data>-->
\t\t\t\t\t\t\t\t\t\t\t<td class=\"td-block col-md-11\"><p class=\"date\">";
            // line 143
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "createDate", array()), "m/d/Y"), "html", null, true);
            // line 144
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title\">";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "name", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"desc\">";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", array()), "html", null, true);
            echo "</p></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-md-1\">";
            // line 147
            if (($this->getAttribute($context["m"], "delFlag", array()) == 0)) {
                echo " <a
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"label label-sm label-success\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_changeCatalogDel", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
                echo "\">Activated</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 150
                echo " <a class=\"label label-sm label-danger\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                // line 151
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_changeCatalogDel", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
                echo "\">Disabled</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<p></p> <a class=\"label label-sm label-info\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_updateCatalog", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">Update</a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box jplist-no-results text-shadow align-center\">
\t\t\t\t\t\t\t\t\t<p>No results found</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"jplist-ios-button\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-sort\"></i>Actions
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"jplist-panel box panel-bottom col-md-12\">
\t\t\t\t\t\t\t\t\t<div data-control-type=\"pagination\" data-control-name=\"paging\"
\t\t\t\t\t\t\t\t\t\tdata-control-action=\"paging\"
\t\t\t\t\t\t\t\t\t\tdata-control-animate-to-top=\"true\" class=\"jplist-pagination\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    // line 179
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3e55ad2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e55ad2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3e55ad2_part_1.js");
            // line 180
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "3e55ad2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e55ad2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3e55ad2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 181
        echo " ";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 181,  290 => 180,  283 => 179,  258 => 158,  248 => 154,  245 => 153,  240 => 151,  237 => 150,  232 => 149,  227 => 147,  223 => 146,  219 => 145,  216 => 144,  214 => 143,  210 => 141,  206 => 140,  134 => 70,  131 => 69,  89 => 32,  76 => 21,  73 => 20,  60 => 12,  49 => 3,  46 => 2,  11 => 1,);
    }
}
