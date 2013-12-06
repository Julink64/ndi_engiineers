<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_edd523dec2a8871bd07e2a3ad7706404229b902607bc8186088d9fd867b65bed extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
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
        return array (  91 => 35,  83 => 30,  75 => 28,  62 => 24,  50 => 15,  32 => 6,  26 => 3,  24 => 2,  19 => 1,  207 => 85,  204 => 84,  202 => 83,  199 => 82,  194 => 71,  191 => 70,  185 => 11,  181 => 10,  176 => 9,  173 => 8,  167 => 6,  160 => 87,  158 => 82,  147 => 73,  145 => 70,  139 => 66,  128 => 59,  118 => 55,  110 => 50,  106 => 49,  100 => 46,  89 => 38,  79 => 29,  76 => 31,  73 => 30,  70 => 26,  65 => 27,  54 => 24,  52 => 23,  48 => 22,  37 => 13,  35 => 8,  30 => 5,  23 => 1,  137 => 38,  134 => 37,  130 => 32,  127 => 31,  122 => 56,  120 => 37,  117 => 36,  113 => 33,  111 => 31,  107 => 29,  101 => 28,  92 => 25,  87 => 24,  82 => 23,  78 => 22,  74 => 20,  66 => 25,  56 => 14,  49 => 12,  45 => 10,  34 => 4,  72 => 20,  67 => 18,  60 => 26,  55 => 12,  51 => 13,  46 => 14,  42 => 12,  39 => 7,  33 => 5,  31 => 3,  28 => 3,);
    }
}
