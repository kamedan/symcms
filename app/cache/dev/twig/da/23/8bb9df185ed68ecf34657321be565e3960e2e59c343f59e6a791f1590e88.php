<?php

/* ::base.html.twig */
class __TwigTemplate_da238bb9df185ed68ecf34657321be565e3960e2e59c343f59e6a791f1590e88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"container\">
            <div id=\"header\">
                <p id=\"logo\">Custom CMS</p>
                <div id=\"nav\">
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("customcms_homepage");
        echo "\">Home</a> | 
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Login</a>
                    ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "                         | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("cms_user");
            echo "\">Users</a> | 
                        <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("cms_category");
            echo "\">Categories</a> |
                        <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("cms_page");
            echo "\">Pages</a> |
                        ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 23
            echo "                             | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("cms_page");
            echo "\">Pages</a> |
                          
                    ";
        }
        // line 26
        echo "                    
                    ";
        // line 27
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 28
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Logout</a>
                    ";
        }
        // line 30
        echo "                </div>
            </div>
            ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  120 => 32,  113 => 7,  110 => 6,  104 => 5,  97 => 34,  94 => 33,  92 => 32,  88 => 30,  82 => 28,  80 => 27,  77 => 26,  70 => 23,  65 => 21,  61 => 20,  56 => 19,  54 => 18,  50 => 17,  46 => 16,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
