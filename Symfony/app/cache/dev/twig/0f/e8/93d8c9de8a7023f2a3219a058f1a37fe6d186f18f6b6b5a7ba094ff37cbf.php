<?php

/* BdMonitorUfbaBundle:Projetodemonitoria:show.html.twig */
class __TwigTemplate_0fe893d8c9de8a7023f2a3219a058f1a37fe6d186f18f6b6b5a7ba094ff37cbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Projetodemonitoria</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resumo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "resumo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Atividades</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "atividades"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bolsa</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "bolsa"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Aprovado</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "aprovado"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vagaspedidas</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "vagasPedidas"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vagasaprovadas</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "vagasAprovadas"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chtotal</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "chTotal"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chsemanal</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "chSemanal"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Periodoinscricaoinicio</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "periodoInscricaoInicio"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Periodoinscricaofinal</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "periodoInscricaoFinal"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Periodoselecao</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "periodoSelecao"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("projeto");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projeto_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BdMonitorUfbaBundle:Projetodemonitoria:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 61,  77 => 29,  65 => 23,  134 => 66,  127 => 62,  90 => 33,  148 => 74,  129 => 47,  104 => 37,  100 => 36,  84 => 34,  58 => 26,  81 => 34,  114 => 46,  70 => 28,  53 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 41,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 57,  102 => 46,  71 => 29,  67 => 26,  63 => 25,  59 => 20,  38 => 6,  94 => 34,  89 => 36,  85 => 25,  75 => 30,  68 => 29,  56 => 21,  87 => 33,  21 => 2,  26 => 6,  93 => 28,  88 => 38,  78 => 30,  46 => 14,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 51,  136 => 56,  121 => 46,  117 => 44,  105 => 37,  91 => 34,  62 => 28,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 31,  72 => 16,  69 => 24,  47 => 15,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 56,  139 => 45,  131 => 52,  123 => 58,  120 => 42,  115 => 43,  111 => 38,  108 => 38,  101 => 32,  98 => 35,  96 => 35,  83 => 32,  74 => 30,  66 => 27,  55 => 26,  52 => 18,  50 => 16,  43 => 14,  41 => 7,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 70,  133 => 65,  130 => 41,  125 => 44,  122 => 43,  116 => 54,  112 => 39,  109 => 50,  106 => 50,  103 => 32,  99 => 36,  95 => 42,  92 => 34,  86 => 32,  82 => 31,  80 => 31,  73 => 19,  64 => 26,  60 => 22,  57 => 22,  54 => 25,  51 => 17,  48 => 16,  45 => 16,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
