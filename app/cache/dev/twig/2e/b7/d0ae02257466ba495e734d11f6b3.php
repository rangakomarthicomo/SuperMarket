<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_2eb7d0ae02257466ba495e734d11f6b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'collection_widget_row' => array($this, 'block_collection_widget_row'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 13
        $this->displayBlock('form_label', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('widget_container_attributes_choice_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('form_row', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('collection_widget_row', $context, $blocks);
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('sonata_type_immutable_array_widget', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('sonata_type_immutable_array_widget_row', $context, $blocks);
    }

    // line 13
    public function block_form_label($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ((!($this->getContext($context, "label") === false))) {
            // line 16
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => ((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " control-label")));
            // line 17
            echo "
        ";
            // line 18
            if ((!$this->getContext($context, "compound"))) {
                // line 19
                echo "            ";
                $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("for" => $this->getContext($context, "id")));
                // line 20
                echo "        ";
            }
            // line 21
            echo "        ";
            if ($this->getContext($context, "required")) {
                // line 22
                echo "            ";
                $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => trim(((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " required"))));
                // line 23
                echo "        ";
            }
            // line 24
            echo "
        ";
            // line 25
            if (twig_test_empty($this->getContext($context, "label"))) {
                // line 26
                echo "            ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($this->getContext($context, "name")));
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if (((array_key_exists("in_list_checkbox", $context) && $this->getContext($context, "in_list_checkbox")) && array_key_exists("widget", $context))) {
                // line 30
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 31
                echo $this->getContext($context, "widget");
                echo "
                <span>
                    ";
                // line 33
                if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
                } else {
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 38
                echo "                </span>
            </label>
        ";
            } else {
                // line 41
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "label_attr"));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 42
                if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
                } else {
                    // line 45
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "trans", array(0 => $this->getContext($context, "label"), 1 => array(), 2 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 47
                echo "                ";
                echo (($this->getContext($context, "required")) ? ("*") : (""));
                echo "
            </label>
        ";
            }
            // line 50
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 54
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\"
        ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            if (($this->getContext($context, "attrname") == "class")) {
                echo "unstyled ";
            }
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        ";
        if (!twig_in_filter("class", $this->getContext($context, "attr"))) {
            echo "class=\"unstyled\"";
        }
        // line 59
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 63
        ob_start();
        // line 64
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 66
            echo "            <li>
                ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
            echo "
                ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 75
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 76
        ob_start();
        // line 77
        echo "    ";
        if ($this->getContext($context, "compound")) {
            // line 78
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 80
                echo "            <li>
                ";
                // line 81
                ob_start();
                // line 82
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
                echo "
                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 84
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label', array("in_list_checkbox" => true, "widget" => $this->getContext($context, "form_widget_content")) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute($this->getContext($context, "child", true), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "child", true), "vars", array(), "any", false, true), "label"), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        </ul>
    ";
        } else {
            // line 89
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 90
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 91
                echo "            <option value=\"\">
                ";
                // line 92
                if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
                } else {
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 97
                echo "            </option>
        ";
            }
            // line 99
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 100
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 101
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 102
                if ((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0)) {
                    // line 103
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 105
                echo "        ";
            }
            // line 106
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 107
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 113
    public function block_form_row($context, array $blocks = array())
    {
        // line 114
        echo "    ";
        if ((((!array_key_exists("sonata_admin", $context)) || (!$this->getContext($context, "sonata_admin_enabled"))) || (!$this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")))) {
            // line 115
            echo "        <div class=\"control-group ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo " error";
            }
            echo "\">
            ";
            // line 116
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"controls ";
            // line 117
            if ((!($this->getContext($context, "label") === false))) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">
                ";
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
            echo "
                ";
            // line 119
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                // line 120
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 121
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
                echo "
                    </div>
                ";
            }
            // line 124
            echo "            </div>
        </div>
    ";
        } else {
            // line 127
            echo "        <div class=\"control-group";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo " error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">
            ";
            // line 128
            $this->displayBlock('label', $context, $blocks);
            // line 135
            echo "
            ";
            // line 136
            $context["has_label"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true) || (!($this->getContext($context, "label") === false)));
            // line 137
            echo "            <div class=\"controls sonata-ba-field sonata-ba-field-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo " ";
            if ((!$this->getContext($context, "has_label"))) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">

                ";
            // line 139
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
            echo "

                ";
            // line 141
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                // line 142
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 143
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
                echo "
                    </div>
                ";
            }
            // line 146
            echo "
                ";
            // line 147
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help")) {
                // line 148
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help"), 1 => array(), 2 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "method");
                echo "</span>
                ";
            }
            // line 150
            echo "            </div>
        </div>
    ";
        }
    }

    // line 128
    public function block_label($context, array $blocks = array())
    {
        // line 129
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 130
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 132
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 134
        echo "            ";
    }

    // line 155
    public function block_collection_widget_row($context, array $blocks = array())
    {
        // line 156
        ob_start();
        // line 157
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 158
        if ($this->getContext($context, "allow_delete")) {
            // line 159
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"icon-remove\"></i></a>
        ";
        }
        // line 161
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 166
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 167
        ob_start();
        // line 168
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 169
            echo "        ";
            $context["child"] = $this->getContext($context, "prototype");
            // line 170
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-prototype" => $this->renderBlock("collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute($this->getContext($context, "prototype"), "vars"), "name"), "class" => (($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : (""))));
            // line 171
            echo "    ";
        }
        // line 172
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        ";
        // line 174
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 175
            echo "            ";
            $this->displayBlock("collection_widget_row", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        ";
        // line 178
        if ($this->getContext($context, "allow_add")) {
            // line 179
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"icon-plus\"></i></a></div>
        ";
        }
        // line 181
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 185
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 186
        echo "    ";
        ob_start();
        // line 187
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

            ";
        // line 190
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 191
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "
            ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 199
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 200
        echo "    ";
        ob_start();
        // line 201
        echo "        <div class=\"control-group";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
        echo "\">

            ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label');
        echo "

            <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "inline"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
        echo "
            </div>

            ";
        // line 209
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 210
            echo "                <div class=\"help-inline sonata-ba-field-error-messages\">
                    ";
            // line 211
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'errors');
            echo "
                </div>
            ";
        }
        // line 214
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  480 => 128,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  453 => 142,  446 => 139,  430 => 137,  428 => 136,  425 => 135,  414 => 127,  409 => 124,  403 => 121,  400 => 120,  394 => 118,  388 => 117,  384 => 116,  377 => 115,  374 => 114,  371 => 113,  358 => 106,  349 => 103,  342 => 101,  339 => 100,  329 => 95,  324 => 92,  321 => 91,  319 => 90,  311 => 89,  297 => 84,  289 => 81,  282 => 79,  272 => 76,  269 => 75,  250 => 67,  247 => 66,  243 => 65,  238 => 64,  233 => 62,  228 => 59,  208 => 57,  200 => 55,  184 => 47,  178 => 45,  175 => 43,  173 => 42,  157 => 41,  152 => 38,  149 => 36,  146 => 34,  139 => 31,  107 => 24,  101 => 22,  95 => 20,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  76 => 13,  57 => 155,  47 => 75,  39 => 61,  318 => 144,  312 => 142,  306 => 140,  303 => 139,  292 => 134,  286 => 80,  274 => 77,  268 => 126,  248 => 115,  242 => 112,  236 => 63,  230 => 105,  214 => 98,  203 => 56,  197 => 54,  187 => 86,  170 => 78,  158 => 74,  153 => 71,  147 => 68,  144 => 33,  136 => 60,  132 => 59,  123 => 30,  120 => 56,  112 => 26,  110 => 25,  104 => 23,  98 => 21,  92 => 19,  86 => 43,  78 => 40,  72 => 199,  70 => 33,  67 => 185,  62 => 166,  59 => 165,  54 => 154,  51 => 24,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  690 => 179,  687 => 178,  683 => 272,  681 => 203,  676 => 262,  674 => 232,  670 => 231,  667 => 230,  661 => 227,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 217,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  606 => 208,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 194,  550 => 193,  546 => 191,  544 => 190,  540 => 188,  537 => 178,  534 => 177,  530 => 168,  521 => 163,  515 => 161,  512 => 159,  509 => 159,  503 => 156,  499 => 155,  496 => 154,  490 => 153,  485 => 150,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  456 => 143,  454 => 141,  451 => 141,  448 => 139,  441 => 138,  438 => 137,  435 => 136,  432 => 135,  426 => 134,  423 => 128,  420 => 132,  417 => 130,  410 => 129,  407 => 128,  401 => 127,  398 => 119,  393 => 125,  390 => 124,  387 => 123,  381 => 122,  375 => 168,  373 => 159,  369 => 157,  366 => 156,  363 => 123,  357 => 120,  354 => 119,  347 => 102,  341 => 114,  336 => 99,  333 => 112,  326 => 93,  316 => 74,  307 => 87,  305 => 70,  300 => 138,  295 => 66,  291 => 82,  281 => 61,  263 => 71,  259 => 55,  256 => 120,  245 => 49,  226 => 36,  224 => 102,  219 => 100,  215 => 32,  210 => 30,  207 => 29,  204 => 28,  198 => 22,  191 => 50,  189 => 177,  182 => 84,  179 => 171,  177 => 119,  172 => 112,  165 => 76,  163 => 109,  151 => 99,  145 => 97,  141 => 66,  138 => 61,  135 => 93,  118 => 28,  114 => 89,  111 => 88,  91 => 86,  82 => 83,  75 => 39,  64 => 184,  52 => 113,  50 => 20,  48 => 19,  44 => 74,  42 => 62,  38 => 17,  36 => 13,  370 => 100,  367 => 99,  361 => 107,  355 => 105,  352 => 94,  346 => 92,  343 => 91,  340 => 90,  332 => 97,  330 => 87,  327 => 86,  320 => 75,  315 => 83,  313 => 73,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 75,  287 => 64,  283 => 70,  280 => 130,  277 => 78,  271 => 58,  265 => 125,  262 => 63,  260 => 123,  257 => 61,  254 => 68,  249 => 50,  246 => 54,  241 => 47,  223 => 58,  216 => 99,  209 => 95,  192 => 87,  188 => 21,  185 => 85,  180 => 104,  176 => 81,  174 => 118,  169 => 58,  166 => 57,  164 => 54,  160 => 75,  143 => 48,  137 => 47,  131 => 45,  128 => 58,  124 => 43,  121 => 29,  115 => 27,  113 => 39,  100 => 36,  79 => 14,  68 => 16,  65 => 15,  60 => 13,  56 => 12,  40 => 15,  37 => 54,  35 => 16,  32 => 13,  29 => 11,  23 => 1,  97 => 37,  94 => 87,  88 => 85,  83 => 35,  80 => 41,  77 => 20,  74 => 19,  71 => 78,  69 => 198,  66 => 53,  63 => 14,  55 => 22,  49 => 112,  46 => 21,  43 => 20,  12 => 34,  53 => 22,  34 => 53,  31 => 5,  28 => 4,);
    }
}
