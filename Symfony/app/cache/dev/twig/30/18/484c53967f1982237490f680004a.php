<?php

/* AcmeHelloBundle:Hello:index.html.twig */
class __TwigTemplate_3018484c53967f1982237490f680004a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/styles.css"), "html", null, true);
        echo "\" />
 ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo " 
\t<section id=\"contenedor\">
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"draquod.com\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/The-Cat-Knight-small.jpg"), "html", null, true);
        echo "\" alt=\"draquod\"
\t\t\t\twidth=\"100\" height=\"100\"/></a></li>
\t\t\t\t<li><a href=\"#web\">portfolio</a></li>
\t\t\t\t<li><a href=\"#contacto\">blog</a></li>
\t\t\t\t<li><a href=\"#contacto\">contact</a></li>
\t\t\t</ul>
\t\t</nav>
\t\t<header>
\t\t\t<div class=\"personal\">
\t\t\t\t<h1>David Soler</h1>
\t\t\t\t<a href=\"http://twitter.com/draquod\">@draquod</a>
\t\t\t\t<h2>Front - End Ninja</h2>
\t\t\t</div>
\t\t\t<div class=\"avatar\">
\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/The-Cat-Knight-small.jpg"), "html", null, true);
        echo "\"
\t\t\t\twidth=\"100\" height=\"100\"/>
\t\t\t</div>
\t\t</header>
\t\t<section id=\"webs\">
\t\t\t<article>
\t\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/The-Cat-Knight-small.jpg"), "html", null, true);
        echo "\" alt=\"mi web\"
\t\t\t\theight=\"150\" width=\"150\"/>
\t\t\t\t<p>Test game created with a lot of love</p>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/The-Cat-Knight-small.jpg"), "html", null, true);
        echo "\" alt=\"mi web\"
\t\t\t\theight=\"150\" width=\"150\"/>
\t\t\t\t<p>Test game created with a lot of love</p>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/The-Cat-Knight-small.jpg"), "html", null, true);
        echo "\" alt=\"mi web\"
\t\t\t\theight=\"150\" width=\"150\"/>
\t\t\t\t<p>Test game created with a lot of love</p>
\t\t\t</article>
\t\t<section>
\t</section>
 ";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Hello:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 42,  82 => 37,  74 => 32,  65 => 26,  48 => 12,  42 => 8,  39 => 7,  32 => 5,  29 => 4,);
    }
}
