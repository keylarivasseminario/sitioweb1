!function(e,t){"use strict";e.ConvertFormsInitHCaptcha=function(){t.querySelectorAll(".h-captcha").forEach(function(t){var e=t.closest(".convertforms"),c=hcaptcha.render(t,{callback:function(){"invisible"==t.dataset.size&&e.ConvertForms.submit()}});e.addEventListener("beforeSubmit",function(e){e.defaultPrevented||"false"===t.closest(".cf-control-group").dataset.requiredOverride||0<hcaptcha.getResponse(c).length||(e.preventDefault(),hcaptcha.execute(c))}),e.addEventListener("afterSubmit",function(e){hcaptcha.reset(c)})})}}(window,document);
