!function(e,$){"use strict";function t(e,t,i,n,s,r,o){var a;if(o="number"==typeof o?o:0,e.css(i,n+r),a=e.width(),a>=t){if(e.css(i,""),a===t)return{match:"exact",size:parseFloat((parseFloat(n)-.1).toFixed(3))};var c=t-o,l=a-t;return{match:"estimate",size:parseFloat((parseFloat(n)-("word-spacing"===i&&o&&c>l?0:s)).toFixed(3))}}return a}function i(e,i,n,s,r){var o=e.clone(!0).addClass("bigtext-cloned").css({fontFamily:e.css("font-family"),textTransform:e.css("text-transform"),wordSpacing:e.css("word-spacing"),letterSpacing:e.css("letter-spacing"),position:"absolute",left:a.DEBUG_MODE?0:-9999,top:a.DEBUG_MODE?0:-9999}).appendTo(document.body),c=[],l=[],u=[],p=[];return i.css("float","left").each(function(){var e=$(this),i=a.supports.wholeNumberFontSizeOnly?[8,4,1]:[8,4,1,.1],o,l;if(e.hasClass(a.EXEMPT_CLASS))return c.push(null),p.push(null),void u.push(!1);var f=32,d=parseFloat(e.css("font-size")),g=(e.width()/d).toFixed(6);l=parseInt(n/g,10)-f;e:for(var S=0,h=i.length;h>S;S++)t:for(var _=1,E=10;E>=_;_++){if(l+_*i[S]>s){l=s;break e}if(o=t(e,n,"font-size",l+_*i[S],i[S],"px",o),"number"!=typeof o){if(l=o.size,"exact"===o.match)break e;break t}}p.push(n/l),l>s?(c.push(s),u.push(!1)):r&&r>l?(c.push(r),u.push(!0)):(c.push(l),u.push(!1))}).each(function(e){var i=$(this),s=0,r=1,o;if(i.hasClass(a.EXEMPT_CLASS))return void l.push(null);i.css("font-size",c[e]+"px");for(var u=1,p=3;p>u;u+=r)if(o=t(i,n,"word-spacing",u,r,"px",o),"number"!=typeof o){s=o.size;break}i.css("font-size",""),l.push(s)}).removeAttr("style"),a.DEBUG_MODE?o.css({"background-color":"rgba(255,255,255,.4)"}):o.remove(),{fontSizes:c,wordSpacings:l,ratios:p,minFontSizes:u}}var n=0,s=$("head"),r=e.BigText,o=$.fn.bigtext,a={DEBUG_MODE:!1,DEFAULT_MIN_FONT_SIZE_PX:null,DEFAULT_MAX_FONT_SIZE_PX:528,GLOBAL_STYLE_ID:"bigtext-style",STYLE_ID:"bigtext-id",LINE_CLASS_PREFIX:"bigtext-line",EXEMPT_CLASS:"bigtext-exempt",noConflict:function(t){return t&&($.fn.bigtext=o,e.BigText=r),a},supports:{wholeNumberFontSizeOnly:function(){if(!("getComputedStyle"in e))return!0;var t=$("<div/>").css({position:"absolute","font-size":"14.1px"}).insertBefore($("script").eq(0)),i=e.getComputedStyle(t[0],null),n=i&&"14px"===i.getPropertyValue("font-size");return t.remove(),n}()},init:function(){$("#"+a.GLOBAL_STYLE_ID).length||s.append(a.generateStyleTag(a.GLOBAL_STYLE_ID,[".bigtext * { white-space: nowrap; } .bigtext > * { display: block; }",".bigtext ."+a.EXEMPT_CLASS+", .bigtext ."+a.EXEMPT_CLASS+" * { white-space: normal; }"]))},bindResize:function(t,i){var n;$(e).unbind(t).bind(t,function(){n&&clearTimeout(n),n=setTimeout(i,100)})},getStyleId:function(e){return a.STYLE_ID+"-"+e},generateStyleTag:function(e,t){return $("<style>"+t.join("\n")+"</style>").attr("id",e)},clearCss:function(e){var t=a.getStyleId(e);$("#"+t).remove()},generateCss:function(e,t,i,n){var s=[];a.clearCss(e);for(var r=0,o=t.length;o>r;r++)s.push("#"+e+" ."+a.LINE_CLASS_PREFIX+r+" {"+(n[r]?" white-space: normal;":"")+(t[r]?" font-size: "+t[r]+"px;":"")+(i[r]?" word-spacing: "+i[r]+"px;":"")+"}");return a.generateStyleTag(a.getStyleId(e),s)},jQueryMethod:function(e){return a.init(),e=$.extend({minfontsize:a.DEFAULT_MIN_FONT_SIZE_PX,maxfontsize:a.DEFAULT_MAX_FONT_SIZE_PX,childSelector:"",resize:!0},e||{}),this.each(function(){var t=$(this).addClass("bigtext"),r=t.width(),o=t.attr("id"),c=e.childSelector?t.find(e.childSelector):t.children();o||(o="bigtext-id"+n++,t.attr("id",o)),e.resize&&a.bindResize("resize.bigtext-event-"+o,function(){a.jQueryMethod.call($("#"+o),e)}),a.clearCss(o),c.addClass(function(e,t){return[t.replace(new RegExp("\\b"+a.LINE_CLASS_PREFIX+"\\d+\\b"),""),a.LINE_CLASS_PREFIX+e].join(" ")});var l=i(t,c,r,e.maxfontsize,e.minfontsize);s.append(a.generateCss(o,l.fontSizes,l.wordSpacings,l.minFontSizes))}),this.trigger("bigtext:complete")}};$.fn.bigtext=a.jQueryMethod,e.BigText=a}(this,jQuery);