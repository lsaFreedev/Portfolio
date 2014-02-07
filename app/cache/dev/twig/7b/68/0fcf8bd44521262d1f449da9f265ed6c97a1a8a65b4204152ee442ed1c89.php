<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_7b680fcf8bd44521262d1f449da9f265ed6c97a1a8a65b4204152ee442ed1c89 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 4,  26 => 5,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  56 => 9,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  168 => 72,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  133 => 55,  121 => 46,  115 => 43,  112 => 42,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  51 => 15,  49 => 19,  19 => 1,  98 => 40,  88 => 6,  80 => 19,  46 => 7,  44 => 10,  22 => 2,  43 => 8,  33 => 10,  179 => 51,  174 => 48,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  155 => 35,  148 => 32,  144 => 31,  136 => 56,  132 => 25,  128 => 24,  125 => 23,  122 => 22,  117 => 44,  114 => 16,  108 => 9,  104 => 8,  96 => 6,  90 => 4,  83 => 52,  78 => 40,  76 => 47,  70 => 43,  62 => 23,  59 => 34,  52 => 19,  50 => 8,  39 => 6,  37 => 6,  27 => 4,  123 => 47,  118 => 46,  109 => 43,  105 => 40,  99 => 7,  93 => 9,  87 => 20,  81 => 51,  75 => 17,  72 => 16,  68 => 14,  40 => 8,  32 => 12,  29 => 3,  73 => 22,  64 => 12,  57 => 16,  54 => 21,  48 => 6,  45 => 5,  42 => 14,  36 => 7,  30 => 3,);
    }
}
