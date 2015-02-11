<?php

/* AdminBundle::admin.html.twig */
class __TwigTemplate_1162b066a540d3a1db7d6a6b66820efa94e980bdd39bf6257e0737cb04c94269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'modal' => array($this, 'block_modal'),
            'name' => array($this, 'block_name'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  \t  \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link type=\"text/css\" rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700\">
    \t<link type=\"text/css\" rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Oswald:400,700,300\">
    \t<link type=\"text/css\" rel=\"stylesheet\" href=\"styles/jquery-ui-1.10.4.custom.min.css\">
\t    <link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/font-awesome.min.css\">
\t    <link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/bootstrap.min.css\">
\t    <link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/animate.css\">
\t    <link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/all.css\">
\t    <link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/main.css\">
\t    <link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/style-responsive.css\">
\t    <link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/zabuto_calendar.min.css\">
\t    <link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/pace.css\">
\t    <link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/jquery.news-ticker.css\">
\t    <link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/jplist-custom.css\">
    \t";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    </head>
    <body>
    <div>
        <!--BEGIN BACK TO TOP-->
        <a id=\"totop\" href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id=\"header-topbar-option-demo\" class=\"page-header-topbar\">
            <nav id=\"topbar\" role=\"navigation\" style=\"margin-bottom: 0;\" data-step=\"3\" class=\"navbar navbar-default navbar-static-top\">
            <div class=\"navbar-header\">
                <button type=\"button\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\" class=\"navbar-toggle\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                <a id=\"logo\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("admin_homepage");
        echo "\" class=\"navbar-brand\"><span class=\"fa fa-rocket\"></span><span class=\"logo-text\">KAdmin</span><span style=\"display: none\" class=\"logo-text-icon\">µ</span></a></div>
            <div class=\"topbar-main\"><a id=\"menu-toggle\" href=\"#\" class=\"hidden-xs\"><i class=\"fa fa-bars\"></i></a>
            </div>
        </nav>
        ";
        // line 39
        $this->displayBlock('modal', $context, $blocks);
        // line 40
        echo "    
        </div>
        <!--END TOPBAR-->
        <div id=\"wrapper\">
            <!--BEGIN SIDEBAR MENU-->
            <nav id=\"sidebar\" role=\"navigation\" data-step=\"2\" data-intro=\"Template has &lt;b&gt;many navigation styles&lt;/b&gt;\"
                data-position=\"right\" class=\"navbar-default navbar-static-side\">
            <div class=\"sidebar-collapse menu-scroll\">
                <ul id=\"side-menu\" class=\"nav\">
                    
                     <div class=\"clearfix\"></div>
                    <li class=\"";
        // line 51
        echo ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "homepage")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_homepage");
        echo "\"><i class=\"fa fa-user fa-fw\">
                        <div class=\"icon-bg bg-orange\"></div>
                    </i><span class=\"menu-title\">Profile</span></a></li>
                    <li class=\"";
        // line 54
        echo ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "catalog")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_viewCatalog");
        echo "\"><i class=\"fa fa-desktop fa-fw\">
                        <div class=\"icon-bg bg-pink\"></div>
                    </i><span class=\"menu-title\">Catalog</span></a>
                    </li>
                    <li class=\"";
        // line 58
        echo ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "product")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_viewProduct");
        echo "\"><i class=\"fa fa-send-o fa-fw\">
                        <div class=\"icon-bg bg-green\"></div>
                    </i><span class=\"menu-title\">Product</span></a>
                       
                    </li>
                    <li class=\"";
        // line 63
        echo ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "procata")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_viewProCata");
        echo "\"><i class=\"fa fa-edit fa-fw\">
                        <div class=\"icon-bg bg-violet\"></div>
                    </i><span class=\"menu-title\">Product-Catalog</span></a>
                    </li>
                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN PAGE WRAPPER-->
            <div id=\"page-wrapper\">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                ";
        // line 74
        $this->displayBlock('name', $context, $blocks);
        // line 77
        echo "                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class=\"page-content\">
                    ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id=\"footer\">
                    <div class=\"copyright\">
                        <a href=\"http://themifycloud.com\">2014 © KAdmin Responsive Multi-Purpose Template</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
";
        // line 95
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3b0eca9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3b0eca9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3b0eca9_part_1.js");
            // line 99
            echo "\t    \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "3b0eca9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3b0eca9_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3b0eca9_part_2.js");
            echo "\t    \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "3b0eca9_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3b0eca9_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3b0eca9_part_3.js");
            echo "\t    \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "3b0eca9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3b0eca9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3b0eca9.js");
            echo "\t    \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 101
        echo "\t\t<script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');
\t\t</script>
    ";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo "    
</body> 
</html>

";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Homepage";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "\t\t";
    }

    // line 39
    public function block_modal($context, array $blocks = array())
    {
        // line 40
        echo "        ";
    }

    // line 74
    public function block_name($context, array $blocks = array())
    {
        // line 75
        echo "                
                ";
    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        // line 81
        echo "                     
                    ";
    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        // line 116
        echo "    \t\t
\t";
    }

    public function getTemplateName()
    {
        return "AdminBundle::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 116,  246 => 115,  241 => 81,  238 => 80,  233 => 75,  230 => 74,  226 => 40,  223 => 39,  219 => 23,  216 => 22,  210 => 7,  202 => 118,  200 => 115,  184 => 101,  158 => 99,  154 => 95,  140 => 83,  138 => 80,  133 => 77,  131 => 74,  115 => 63,  105 => 58,  96 => 54,  88 => 51,  75 => 40,  73 => 39,  66 => 35,  53 => 24,  51 => 22,  33 => 7,  25 => 1,);
    }
}
