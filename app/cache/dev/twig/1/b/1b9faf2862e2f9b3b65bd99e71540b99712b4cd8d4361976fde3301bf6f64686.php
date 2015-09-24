<?php

/* base.html.twig */
class __TwigTemplate_1b9faf2862e2f9b3b65bd99e71540b99712b4cd8d4361976fde3301bf6f64686 extends Twig_Template
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
        $__internal_7e1e5ea5100567b5dce9deca7d4dbc981eef2ca587af4a37d60c118534c0d591 = $this->env->getExtension("native_profiler");
        $__internal_7e1e5ea5100567b5dce9deca7d4dbc981eef2ca587af4a37d60c118534c0d591->enter($__internal_7e1e5ea5100567b5dce9deca7d4dbc981eef2ca587af4a37d60c118534c0d591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7e1e5ea5100567b5dce9deca7d4dbc981eef2ca587af4a37d60c118534c0d591->leave($__internal_7e1e5ea5100567b5dce9deca7d4dbc981eef2ca587af4a37d60c118534c0d591_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_440780eac7b7e6d8d44bc4253f3e7fe0661b6dc88b6d37497c9124182bf1eb30 = $this->env->getExtension("native_profiler");
        $__internal_440780eac7b7e6d8d44bc4253f3e7fe0661b6dc88b6d37497c9124182bf1eb30->enter($__internal_440780eac7b7e6d8d44bc4253f3e7fe0661b6dc88b6d37497c9124182bf1eb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_440780eac7b7e6d8d44bc4253f3e7fe0661b6dc88b6d37497c9124182bf1eb30->leave($__internal_440780eac7b7e6d8d44bc4253f3e7fe0661b6dc88b6d37497c9124182bf1eb30_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc7180da5c03d9e2b37b8baa18d7070bed93fd5fb9d11a0d1680254b59fe56e0 = $this->env->getExtension("native_profiler");
        $__internal_cc7180da5c03d9e2b37b8baa18d7070bed93fd5fb9d11a0d1680254b59fe56e0->enter($__internal_cc7180da5c03d9e2b37b8baa18d7070bed93fd5fb9d11a0d1680254b59fe56e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cc7180da5c03d9e2b37b8baa18d7070bed93fd5fb9d11a0d1680254b59fe56e0->leave($__internal_cc7180da5c03d9e2b37b8baa18d7070bed93fd5fb9d11a0d1680254b59fe56e0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f62f6eb75152701732980c86c0f0496a2df4de46f32ba78819c1df51b76b82f = $this->env->getExtension("native_profiler");
        $__internal_5f62f6eb75152701732980c86c0f0496a2df4de46f32ba78819c1df51b76b82f->enter($__internal_5f62f6eb75152701732980c86c0f0496a2df4de46f32ba78819c1df51b76b82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5f62f6eb75152701732980c86c0f0496a2df4de46f32ba78819c1df51b76b82f->leave($__internal_5f62f6eb75152701732980c86c0f0496a2df4de46f32ba78819c1df51b76b82f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75bee44ee7bbf8aa6e4d94507ee787703f8b7383b8d9247abd081741f423b69f = $this->env->getExtension("native_profiler");
        $__internal_75bee44ee7bbf8aa6e4d94507ee787703f8b7383b8d9247abd081741f423b69f->enter($__internal_75bee44ee7bbf8aa6e4d94507ee787703f8b7383b8d9247abd081741f423b69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_75bee44ee7bbf8aa6e4d94507ee787703f8b7383b8d9247abd081741f423b69f->leave($__internal_75bee44ee7bbf8aa6e4d94507ee787703f8b7383b8d9247abd081741f423b69f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
