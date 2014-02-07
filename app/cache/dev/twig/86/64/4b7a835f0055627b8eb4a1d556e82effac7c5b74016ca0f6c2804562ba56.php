<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_86644b7a835f0055627b8eb4a1d556e82effac7c5b74016ca0f6c2804562ba56 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 7,  26 => 3,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 29,  56 => 9,  41 => 9,  24 => 2,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  168 => 72,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  133 => 55,  121 => 46,  115 => 43,  112 => 42,  101 => 24,  91 => 35,  86 => 28,  69 => 25,  66 => 25,  51 => 15,  49 => 19,  19 => 1,  98 => 40,  88 => 6,  80 => 19,  46 => 14,  44 => 10,  22 => 2,  43 => 8,  33 => 6,  179 => 51,  174 => 48,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  155 => 35,  148 => 32,  144 => 31,  136 => 56,  132 => 25,  128 => 24,  125 => 23,  122 => 22,  117 => 44,  114 => 16,  108 => 9,  104 => 8,  96 => 6,  90 => 4,  83 => 30,  78 => 40,  76 => 47,  70 => 26,  62 => 24,  59 => 34,  52 => 19,  50 => 15,  39 => 6,  37 => 6,  27 => 4,  123 => 47,  118 => 46,  109 => 43,  105 => 40,  99 => 7,  93 => 9,  87 => 20,  81 => 51,  75 => 28,  72 => 16,  68 => 14,  40 => 8,  32 => 6,  29 => 4,  73 => 22,  64 => 12,  57 => 16,  54 => 21,  48 => 6,  45 => 5,  42 => 12,  36 => 7,  30 => 5,);
    }
}
