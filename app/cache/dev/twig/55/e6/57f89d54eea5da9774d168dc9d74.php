<?php

/* SonataIntlBundle:CRUD:list_date.html.twig */
class __TwigTemplate_55e657f89d54eea5da9774d168dc9d74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        if (twig_test_empty($this->getContext($context, "value"))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            $context["pattern"] = (($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "pattern", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "pattern"), null)) : (null));
            // line 19
            echo "        ";
            $context["locale"] = (($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "locale"), null)) : (null));
            // line 20
            echo "        ";
            $context["timezone"] = (($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "timezone"), null)) : (null));
            // line 21
            echo "        ";
            $context["dateType"] = (($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "dateType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "dateType"), null)) : (null));
            // line 22
            echo "
        ";
            // line 23
            echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getContext($context, "value"), $this->getContext($context, "pattern"), $this->getContext($context, "locale"), $this->getContext($context, "timezone"), $this->getContext($context, "dateType"));
        }
    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 23,  42 => 21,  39 => 20,  36 => 19,  52 => 20,  47 => 25,  41 => 23,  35 => 20,  23 => 12,  20 => 11,  34 => 18,  31 => 16,  29 => 15,  26 => 14,  22 => 12,  19 => 11,  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  480 => 151,  477 => 150,  474 => 149,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  457 => 131,  453 => 124,  449 => 123,  446 => 122,  441 => 105,  430 => 103,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  374 => 81,  369 => 136,  367 => 131,  361 => 127,  357 => 125,  355 => 122,  352 => 121,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  302 => 114,  300 => 113,  296 => 111,  291 => 109,  288 => 108,  285 => 81,  282 => 80,  280 => 79,  275 => 77,  272 => 76,  269 => 75,  264 => 72,  249 => 70,  246 => 69,  243 => 68,  226 => 67,  223 => 66,  220 => 65,  214 => 61,  208 => 60,  205 => 59,  201 => 57,  197 => 56,  192 => 55,  186 => 54,  174 => 53,  172 => 52,  169 => 51,  166 => 50,  163 => 49,  160 => 48,  157 => 47,  154 => 46,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  140 => 41,  136 => 39,  130 => 35,  127 => 34,  123 => 33,  119 => 31,  116 => 30,  108 => 144,  105 => 143,  102 => 142,  98 => 140,  96 => 139,  93 => 138,  91 => 75,  88 => 74,  86 => 65,  83 => 64,  81 => 30,  78 => 29,  73 => 27,  68 => 26,  65 => 25,  62 => 24,  59 => 23,  56 => 22,  50 => 20,  45 => 22,  43 => 16,  40 => 15,  37 => 21,);
    }
}
