<?php

/* ShtumiUsefulBundle::fields.html.twig */
class __TwigTemplate_2543605a624792f5601c286abb1ab2cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'shtumi_ajax_autocomplete_widget' => array($this, 'block_shtumi_ajax_autocomplete_widget'),
            'shtumi_dependent_filtered_entity_widget' => array($this, 'block_shtumi_dependent_filtered_entity_widget'),
            'shtumi_daterange_widget' => array($this, 'block_shtumi_daterange_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('shtumi_ajax_autocomplete_widget', $context, $blocks);
        // line 66
        echo "

";
        // line 68
        $this->displayBlock('shtumi_dependent_filtered_entity_widget', $context, $blocks);
        // line 111
        echo "

";
        // line 113
        $this->displayBlock('shtumi_daterange_widget', $context, $blocks);
    }

    // line 1
    public function block_shtumi_ajax_autocomplete_widget($context, array $blocks = array())
    {
        // line 2
        echo "
    <script type=\"text/javascript\">
        if (typeof jQuery.ui == 'undefined'){
            jQuery.getScript('";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/shtumiuseful/js/jqueryui/jquery-ui-1.10.1.custom.min.js"), "html", null, true);
        echo "');
        }

    </script>

    <script>
        jQuery(function() {

            jQuery( \"#";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "id"), "html", null, true);
        echo "\"  ).autocomplete({
                source: function( request, response ) {
                    jQuery.ajax({
                        url: \"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("shtumi_ajaxautocomplete");
        echo "\",
                        dataType: \"json\",
                        data: {
                            maxRows: 12,
                            letters: request.term,
                            entity_alias: \"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "entity_alias"), "html", null, true);
        echo "\"
                        },
                        success: function( data ) {
                            response( jQuery.map( data, function( item ) {
                                return {
                                    label: item,
                                    value: item
                                }
                            }));
                        }
                    });
                },
                minLength: 2,
                open: function() {
                    jQuery( this ).removeClass( \"ui-corner-all\" ).addClass( \"ui-corner-top\" );
                },
                close: function() {
                    jQuery( this ).removeClass( \"ui-corner-top\" ).addClass( \"ui-corner-all\" );
                }
            });

        });
    </script>

    <style>
        .ui-autocomplete {
            max-height: 100px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
        }
            /* IE 6 doesn't support max-height
           * we use height instead, but this forces the menu to always be this tall
           */
        * html .ui-autocomplete {
            height: 100px;
        }
    </style>


    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "

";
    }

    // line 68
    public function block_shtumi_dependent_filtered_entity_widget($context, array $blocks = array())
    {
        // line 69
        echo "
    <select ";
        // line 70
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "></select>

    <img src='";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shtumiuseful/images/ajax-loader.gif"), "html", null, true);
        echo "' id='loader' style='display: none;'>
    <script type=\"text/javascript\">
        jQuery(function(){

            jQuery(\"select#";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "offsetGet", array(0 => $this->getContext($context, "parent_field")), "method"), "vars"), "id"), "html", null, true);
        echo "\").change( function() {
                var selected_index = ";
        // line 77
        echo twig_escape_filter($this->env, (($this->getContext($context, "value")) ? ($this->getContext($context, "value")) : (0)), "html", null, true);
        echo ";
                jQuery(\"#loader\").show();
                jQuery.ajax({
                    type: \"POST\",
                    data: {
                        parent_id: jQuery(this).val(),
                        entity_alias: \"";
        // line 83
        echo twig_escape_filter($this->env, $this->getContext($context, "entity_alias"), "html", null, true);
        echo "\",
                        empty_value: \"";
        // line 84
        echo twig_escape_filter($this->env, $this->getContext($context, "empty_value"), "html", null, true);
        echo "\"
                    },
                    url:\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("shtumi_dependent_filtered_entity");
        echo "\",
                    success: function(msg){
                        if (msg != ''){
                            jQuery(\"select#";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "id"), "html", null, true);
        echo "\").html(msg).show();
                            jQuery.each(jQuery(\"select#";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "id"), "html", null, true);
        echo " option\"), function (index, option){
                                if (jQuery(option).val() == selected_index)
                                    jQuery(option).prop('selected', true);
                            })
                            jQuery(\"select#";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "id"), "html", null, true);
        echo "\").trigger('change');
                            jQuery(\"#loader\").hide();
                        } else {
                            jQuery(\"select#";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "id"), "html", null, true);
        echo "\").html('<em>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "no_result_msg")), "html", null, true);
        echo "</em>');
                            jQuery(\"#loader\").hide();
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError){
                    jQuery('html').html(xhr.responseText);
                    }
                });
            });
            jQuery(\"select#";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "offsetGet", array(0 => $this->getContext($context, "parent_field")), "method"), "vars"), "id"), "html", null, true);
        echo "\").trigger('change');
        });
    </script>

";
    }

    // line 113
    public function block_shtumi_daterange_widget($context, array $blocks = array())
    {
        // line 114
        echo "
    <style type=\"text/css\">@import \"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shtumiuseful/js/datepicker/jquery.datepick.css"), "html", null, true);
        echo "\";</style>
    <style type=\"text/css\">@import \"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shtumiuseful/css/daterange.css"), "html", null, true);
        echo "\";</style>
    <script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shtumiuseful/js/datepicker/jquery.datepick.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/shtumiuseful/js/datepicker/jquery.datepick-" . twig_slice($this->env, $this->getContext($context, "locale"), 0, 2)) . ".js")), "html", null, true);
        echo "\"></script>

    <input ";
        // line 120
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "\" class=\"shtumi-daterange\">

    <script>
        jQuery('input#";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "id"), "html", null, true);
        echo "').datepick({
            rangeSelect: true, monthsToShow: 2, showTrigger: '#calImg', dateFormat: '";
        // line 124
        echo twig_escape_filter($this->env, $this->getContext($context, "datepicker_date_format"), "html", null, true);
        echo "' });
    </script>

    <div style=\"display: none;\">
        <img id=\"calImg\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shtumiuseful/js/datepicker/calendar-green.gif"), "html", null, true);
        echo "\" alt=\"Popup\" class=\"trigger\" height='22' align='absmiddle' style='margin-left: 10px;'>
    </div>

";
    }

    public function getTemplateName()
    {
        return "ShtumiUsefulBundle::fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  251 => 128,  244 => 124,  240 => 123,  232 => 120,  227 => 118,  212 => 114,  186 => 97,  154 => 83,  134 => 72,  129 => 70,  126 => 69,  116 => 63,  41 => 2,  30 => 111,  24 => 66,  22 => 1,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  480 => 128,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  453 => 142,  446 => 139,  430 => 137,  428 => 136,  425 => 135,  414 => 127,  409 => 124,  403 => 121,  400 => 120,  394 => 118,  388 => 117,  384 => 116,  377 => 115,  374 => 114,  371 => 113,  358 => 106,  349 => 103,  342 => 101,  339 => 100,  329 => 95,  324 => 92,  321 => 91,  319 => 90,  311 => 89,  297 => 84,  289 => 81,  282 => 79,  272 => 76,  269 => 75,  250 => 67,  247 => 66,  243 => 65,  238 => 64,  233 => 62,  228 => 59,  208 => 57,  200 => 106,  184 => 47,  178 => 45,  175 => 43,  173 => 90,  157 => 41,  152 => 38,  149 => 36,  146 => 34,  139 => 31,  107 => 24,  101 => 22,  95 => 20,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  76 => 13,  57 => 13,  47 => 75,  39 => 61,  318 => 144,  312 => 142,  306 => 140,  303 => 139,  292 => 134,  286 => 80,  274 => 77,  268 => 126,  248 => 115,  242 => 112,  236 => 63,  230 => 105,  214 => 98,  203 => 56,  197 => 54,  187 => 86,  170 => 78,  158 => 84,  153 => 71,  147 => 68,  144 => 33,  136 => 60,  132 => 59,  123 => 68,  120 => 56,  112 => 26,  110 => 25,  104 => 23,  98 => 21,  92 => 19,  86 => 43,  78 => 40,  72 => 199,  70 => 33,  67 => 185,  62 => 166,  59 => 165,  54 => 154,  51 => 24,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  690 => 179,  687 => 178,  683 => 272,  681 => 203,  676 => 262,  674 => 232,  670 => 231,  667 => 230,  661 => 227,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 217,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  606 => 208,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 194,  550 => 193,  546 => 191,  544 => 190,  540 => 188,  537 => 178,  534 => 177,  530 => 168,  521 => 163,  515 => 161,  512 => 159,  509 => 159,  503 => 156,  499 => 155,  496 => 154,  490 => 153,  485 => 150,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  456 => 143,  454 => 141,  451 => 141,  448 => 139,  441 => 138,  438 => 137,  435 => 136,  432 => 135,  426 => 134,  423 => 128,  420 => 132,  417 => 130,  410 => 129,  407 => 128,  401 => 127,  398 => 119,  393 => 125,  390 => 124,  387 => 123,  381 => 122,  375 => 168,  373 => 159,  369 => 157,  366 => 156,  363 => 123,  357 => 120,  354 => 119,  347 => 102,  341 => 114,  336 => 99,  333 => 112,  326 => 93,  316 => 74,  307 => 87,  305 => 70,  300 => 138,  295 => 66,  291 => 82,  281 => 61,  263 => 71,  259 => 55,  256 => 120,  245 => 49,  226 => 36,  224 => 102,  219 => 116,  215 => 115,  210 => 30,  207 => 29,  204 => 28,  198 => 22,  191 => 50,  189 => 177,  182 => 84,  179 => 171,  177 => 119,  172 => 112,  165 => 76,  163 => 86,  151 => 99,  145 => 77,  141 => 76,  138 => 61,  135 => 93,  118 => 28,  114 => 89,  111 => 88,  91 => 86,  82 => 83,  75 => 39,  64 => 184,  52 => 113,  50 => 20,  48 => 19,  44 => 74,  42 => 62,  38 => 1,  36 => 13,  370 => 100,  367 => 99,  361 => 107,  355 => 105,  352 => 94,  346 => 92,  343 => 91,  340 => 90,  332 => 97,  330 => 87,  327 => 86,  320 => 75,  315 => 83,  313 => 73,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 75,  287 => 64,  283 => 70,  280 => 130,  277 => 78,  271 => 58,  265 => 125,  262 => 63,  260 => 123,  257 => 61,  254 => 68,  249 => 50,  246 => 54,  241 => 47,  223 => 117,  216 => 99,  209 => 113,  192 => 87,  188 => 21,  185 => 85,  180 => 94,  176 => 81,  174 => 118,  169 => 89,  166 => 57,  164 => 54,  160 => 75,  143 => 48,  137 => 47,  131 => 45,  128 => 58,  124 => 43,  121 => 29,  115 => 27,  113 => 39,  100 => 36,  79 => 14,  68 => 16,  65 => 15,  60 => 13,  56 => 12,  40 => 15,  37 => 54,  35 => 16,  32 => 13,  29 => 11,  23 => 1,  97 => 37,  94 => 87,  88 => 85,  83 => 35,  80 => 41,  77 => 20,  74 => 19,  71 => 21,  69 => 198,  66 => 53,  63 => 16,  55 => 22,  49 => 112,  46 => 5,  43 => 20,  12 => 34,  53 => 22,  34 => 113,  31 => 5,  28 => 68,);
    }
}
