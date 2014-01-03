<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_05a35d8df97128401e521dbd754480a5b70a6c4af0519b697a508a0d9c5365a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  76 => 17,  126 => 61,  77 => 26,  65 => 23,  134 => 66,  127 => 28,  90 => 32,  148 => 74,  129 => 47,  104 => 37,  100 => 36,  84 => 29,  58 => 26,  81 => 34,  114 => 46,  70 => 25,  53 => 10,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 41,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 57,  102 => 17,  71 => 30,  67 => 26,  63 => 25,  59 => 20,  38 => 6,  94 => 34,  89 => 36,  85 => 25,  75 => 30,  68 => 29,  56 => 11,  87 => 33,  21 => 2,  26 => 9,  93 => 28,  88 => 31,  78 => 26,  46 => 14,  27 => 4,  44 => 15,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 51,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 34,  62 => 28,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 31,  72 => 16,  69 => 24,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 56,  139 => 45,  131 => 52,  123 => 58,  120 => 20,  115 => 43,  111 => 38,  108 => 19,  101 => 32,  98 => 35,  96 => 35,  83 => 32,  74 => 30,  66 => 27,  55 => 21,  52 => 10,  50 => 16,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 70,  133 => 65,  130 => 41,  125 => 44,  122 => 43,  116 => 54,  112 => 39,  109 => 44,  106 => 50,  103 => 32,  99 => 46,  95 => 42,  92 => 42,  86 => 32,  82 => 28,  80 => 31,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 25,  51 => 17,  48 => 9,  45 => 16,  42 => 10,  39 => 10,  36 => 4,  33 => 3,  30 => 7,);
    }
}
