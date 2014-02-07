<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_4b697201d8c9b015ae5271ef541b3e4415884af7db8eeff7a9c4cc265c0cac28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file");
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 7,  26 => 5,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  56 => 9,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  168 => 72,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  133 => 55,  121 => 46,  115 => 43,  112 => 42,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  51 => 15,  49 => 19,  19 => 1,  98 => 40,  88 => 6,  80 => 19,  46 => 7,  44 => 10,  22 => 2,  43 => 8,  33 => 6,  179 => 51,  174 => 48,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  155 => 35,  148 => 32,  144 => 31,  136 => 56,  132 => 25,  128 => 24,  125 => 23,  122 => 22,  117 => 44,  114 => 16,  108 => 9,  104 => 8,  96 => 6,  90 => 4,  83 => 52,  78 => 40,  76 => 47,  70 => 43,  62 => 23,  59 => 34,  52 => 19,  50 => 8,  39 => 6,  37 => 6,  27 => 4,  123 => 47,  118 => 46,  109 => 43,  105 => 40,  99 => 7,  93 => 9,  87 => 20,  81 => 51,  75 => 17,  72 => 16,  68 => 14,  40 => 8,  32 => 12,  29 => 4,  73 => 22,  64 => 12,  57 => 16,  54 => 21,  48 => 6,  45 => 5,  42 => 14,  36 => 7,  30 => 3,);
    }
}
