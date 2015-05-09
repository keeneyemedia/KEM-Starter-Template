/*
TABLE OF CONTENTS
1. Custom Scripts
2. Modernizr
3. Placeholder
4. Superfish
5. Syncheight
*/


//CUSTOM JQUERY HERE
jQuery(document).ready(function(e){

});


//MODERNIZR
window.Modernizr=function(e,t,n){function r(e){v.cssText=e}function o(e,t){return r(x.join(e+";")+(t||""))}function i(e,t){return typeof e===t}function a(e,t){return!!~(""+e).indexOf(t)}function c(e,t){for(var r in e)if(v[e[r]]!==n)return"pfx"==t?e[r]:!0;return!1}function l(e,t,r){for(var o in e){var a=t[e[o]];if(a!==n)return r===!1?e[o]:i(a,"function")?a.bind(r||t):a}return!1}function s(e,t,n){var r=e.charAt(0).toUpperCase()+e.substr(1),o=(e+" "+w.join(r+" ")+r).split(" ");return i(t,"string")||i(t,"undefined")?c(o,t):(o=(e+" "+S.join(r+" ")+r).split(" "),l(o,t,n))}function u(){p.input=function(n){for(var r=0,o=n.length;o>r;r++)k[n[r]]=n[r]in g;return k.list&&(k.list=!!t.createElement("datalist")&&!!e.HTMLDataListElement),k}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")),p.inputtypes=function(e){for(var r=0,o,i,a,c=e.length;c>r;r++)g.setAttribute("type",i=e[r]),o="text"!==g.type,o&&(g.value=b,g.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(i)&&g.style.WebkitAppearance!==n?(m.appendChild(g),a=t.defaultView,o=a.getComputedStyle&&"textfield"!==a.getComputedStyle(g,null).WebkitAppearance&&0!==g.offsetHeight,m.removeChild(g)):/^(search|tel)$/.test(i)||(/^(url|email)$/.test(i)?o=g.checkValidity&&g.checkValidity()===!1:/^color$/.test(i)?(m.appendChild(g),m.offsetWidth,o=g.value!=b,m.removeChild(g)):o=g.value!=b)),j[e[r]]=!!o;return j}("search tel url email datetime date month week time datetime-local number range color".split(" "))}var d="2.5.3",p={},f=!0,m=t.documentElement,h="modernizr",y=t.createElement(h),v=y.style,g=t.createElement("input"),b=":)",E={}.toString,x=" -webkit- -moz- -o- -ms- ".split(" "),C="Webkit Moz O ms",w=C.split(" "),S=C.toLowerCase().split(" "),T={},j={},k={},P=[],$=P.slice,N,M=function(e,n,r,o){var i,a,c,l=t.createElement("div"),s=t.body,u=s?s:t.createElement("body");if(parseInt(r,10))for(;r--;)c=t.createElement("div"),c.id=o?o[r]:h+(r+1),l.appendChild(c);return i=["&#173;","<style>",e,"</style>"].join(""),l.id=h,(s?l:u).innerHTML+=i,u.appendChild(l),s||(u.style.background="",m.appendChild(u)),a=n(l,e),s?l.parentNode.removeChild(l):u.parentNode.removeChild(u),!!a},O={}.hasOwnProperty,L;L=i(O,"undefined")||i(O.call,"undefined")?function(e,t){return t in e&&i(e.constructor.prototype[t],"undefined")}:function(e,t){return O.call(e,t)},Function.prototype.bind||(Function.prototype.bind=function(e){var t=this;if("function"!=typeof t)throw new TypeError;var n=$.call(arguments,1),r=function(){if(this instanceof r){var o=function(){};o.prototype=t.prototype;var i=new o,a=t.apply(i,n.concat($.call(arguments)));return Object(a)===a?a:i}return t.apply(e,n.concat($.call(arguments)))};return r});var z=function(e,n){var r=e.join(""),o=n.length;M(r,function(e,n){for(var r=t.styleSheets[t.styleSheets.length-1],i=r?r.cssRules&&r.cssRules[0]?r.cssRules[0].cssText:r.cssText||"":"",a=e.childNodes,c={};o--;)c[a[o].id]=a[o];p.generatedcontent=(c.generatedcontent&&c.generatedcontent.offsetHeight)>=1,p.fontface=/src/i.test(i)&&0===i.indexOf(n.split(" ")[0])},o,n)}(['@font-face {font-family:"font";src:url("https://")}',['#generatedcontent:after{content:"',b,'";visibility:hidden}'].join("")],["fontface","generatedcontent"]);T.rgba=function(){return r("background-color:rgba(150,255,150,.5)"),a(v.backgroundColor,"rgba")},T.borderradius=function(){return s("borderRadius")},T.boxshadow=function(){return s("boxShadow")},T.textshadow=function(){return""===t.createElement("div").style.textShadow},T.opacity=function(){return o("opacity:.55"),/^0.55$/.test(v.opacity)},T.fontface=function(){return p.fontface},T.generatedcontent=function(){return p.generatedcontent},T.video=function(){var e=t.createElement("video"),n=!1;try{(n=!!e.canPlayType)&&(n=new Boolean(n),n.ogg=e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),n.h264=e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),n.webm=e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""))}catch(r){}return n},T.audio=function(){var e=t.createElement("audio"),n=!1;try{(n=!!e.canPlayType)&&(n=new Boolean(n),n.ogg=e.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,""),n.mp3=e.canPlayType("audio/mpeg;").replace(/^no$/,""),n.wav=e.canPlayType('audio/wav; codecs="1"').replace(/^no$/,""),n.m4a=(e.canPlayType("audio/x-m4a;")||e.canPlayType("audio/aac;")).replace(/^no$/,""))}catch(r){}return n};for(var A in T)L(T,A)&&(N=A.toLowerCase(),p[N]=T[A](),P.push((p[N]?"":"no-")+N));return p.input||u(),r(""),y=g=null,function(e,t){function n(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function r(){var e=u.elements;return"string"==typeof e?e.split(" "):e}function o(e){var t={},n=e.createElement,o=e.createDocumentFragment,i=o();e.createElement=function(e){var r=(t[e]||(t[e]=n(e))).cloneNode();return u.shivMethods&&r.canHaveChildren&&!c.test(e)?i.appendChild(r):r},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+r().join().replace(/\w+/g,function(e){return t[e]=n(e),i.createElement(e),'c("'+e+'")'})+");return n}")(u,i)}function i(e){var t;return e.documentShived?e:(u.shivCSS&&!l&&(t=!!n(e,"article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}audio{display:none}canvas,video{display:inline-block;*display:inline;*zoom:1}[hidden]{display:none}audio[controls]{display:inline-block;*display:inline;*zoom:1}mark{background:#FF0;color:#000}")),s||(t=!o(e)),t&&(e.documentShived=t),e)}var a=e.html5||{},c=/^<|^(?:button|form|map|select|textarea)$/i,l,s;!function(){var e=t.createElement("a");e.innerHTML="<xyz></xyz>",l="hidden"in e,s=1==e.childNodes.length||function(){try{t.createElement("a")}catch(e){return!0}var n=t.createDocumentFragment();return"undefined"==typeof n.cloneNode||"undefined"==typeof n.createDocumentFragment||"undefined"==typeof n.createElement}()}();var u={elements:a.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:a.shivCSS!==!1,shivMethods:a.shivMethods!==!1,type:"default",shivDocument:i};e.html5=u,i(t)}(this,t),p._version=d,p._prefixes=x,p._domPrefixes=S,p._cssomPrefixes=w,p.testProp=function(e){return c([e])},p.testAllProps=s,p.testStyles=M,m.className=m.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+P.join(" "):""),p}(this,this.document),function(e,t,n){function r(e){return"[object Function]"==m.call(e)}function o(e){return"string"==typeof e}function i(){}function a(e){return!e||"loaded"==e||"complete"==e||"uninitialized"==e}function c(){var e=h.shift();y=1,e?e.t?p(function(){("c"==e.t?k.injectCss:k.injectJs)(e.s,0,e.a,e.x,e.e,1)},0):(e(),c()):y=0}function l(e,n,r,o,i,l,s){function u(t){if(!m&&a(d.readyState)&&(E.r=m=1,!y&&c(),d.onload=d.onreadystatechange=null,t)){"img"!=e&&p(function(){b.removeChild(d)},50);for(var r in S[n])S[n].hasOwnProperty(r)&&S[n][r].onload()}}var s=s||k.errorTimeout,d={},m=0,v=0,E={t:r,s:n,e:i,a:l,x:s};1===S[n]&&(v=1,S[n]=[],d=t.createElement(e)),"object"==e?d.data=n:(d.src=n,d.type=e),d.width=d.height="0",d.onerror=d.onload=d.onreadystatechange=function(){u.call(this,v)},h.splice(o,0,E),"img"!=e&&(v||2===S[n]?(b.insertBefore(d,g?null:f),p(u,s)):S[n].push(d))}function s(e,t,n,r,i){return y=0,t=t||"j",o(e)?l("c"==t?x:E,e,t,this.i++,n,r,i):(h.splice(this.i++,0,e),1==h.length&&c()),this}function u(){var e=k;return e.loader={load:s,i:0},e}var d=t.documentElement,p=e.setTimeout,f=t.getElementsByTagName("script")[0],m={}.toString,h=[],y=0,v="MozAppearance"in d.style,g=v&&!!t.createRange().compareNode,b=g?d:f.parentNode,d=e.opera&&"[object Opera]"==m.call(e.opera),d=!!t.attachEvent&&!d,E=v?"object":d?"script":"img",x=d?"script":E,C=Array.isArray||function(e){return"[object Array]"==m.call(e)},w=[],S={},T={timeout:function(e,t){return t.length&&(e.timeout=t[0]),e}},j,k;k=function(e){function t(e){var e=e.split("!"),t=w.length,n=e.pop(),r=e.length,n={url:n,origUrl:n,prefixes:e},o,i,a;for(i=0;r>i;i++)a=e[i].split("="),(o=T[a.shift()])&&(n=o(n,a));for(i=0;t>i;i++)n=w[i](n);return n}function a(e,o,i,a,l){var s=t(e),d=s.autoCallback;s.url.split(".").pop().split("?").shift(),s.bypass||(o&&(o=r(o)?o:o[e]||o[a]||o[e.split("/").pop().split("?")[0]]||c),s.instead?s.instead(e,o,i,a,l):(S[s.url]?s.noexec=!0:S[s.url]=1,i.load(s.url,s.forceCSS||!s.forceJS&&"css"==s.url.split(".").pop().split("?").shift()?"c":n,s.noexec,s.attrs,s.timeout),(r(o)||r(d))&&i.load(function(){u(),o&&o(s.origUrl,l,a),d&&d(s.origUrl,l,a),S[s.url]=2})))}function l(e,t){function n(e,n){if(e){if(o(e))n||(s=function(){var e=[].slice.call(arguments);u.apply(this,e),d()}),a(e,s,t,0,c);else if(Object(e)===e)for(f in p=function(){var t=0,n;for(n in e)e.hasOwnProperty(n)&&t++;return t}(),e)e.hasOwnProperty(f)&&(!n&&!--p&&(r(s)?s=function(){var e=[].slice.call(arguments);u.apply(this,e),d()}:s[f]=function(e){return function(){var t=[].slice.call(arguments);e&&e.apply(this,t),d()}}(u[f])),a(e[f],s,t,f,c))}else!n&&d()}var c=!!e.test,l=e.load||e.both,s=e.callback||i,u=s,d=e.complete||i,p,f;n(c?e.yep:e.nope,!!l),l&&n(l)}var s,d,p=this.yepnope.loader;if(o(e))a(e,0,p,0);else if(C(e))for(s=0;s<e.length;s++)d=e[s],o(d)?a(d,0,p,0):C(d)?k(d):Object(d)===d&&l(d,p);else Object(e)===e&&l(e,p)},k.addPrefix=function(e,t){T[e]=t},k.addFilter=function(e){w.push(e)},k.errorTimeout=1e4,null==t.readyState&&t.addEventListener&&(t.readyState="loading",t.addEventListener("DOMContentLoaded",j=function(){t.removeEventListener("DOMContentLoaded",j,0),t.readyState="complete"},0)),e.yepnope=u(),e.yepnope.executeStack=c,e.yepnope.injectJs=function(e,n,r,o,l,s){var u=t.createElement("script"),d,m,o=o||k.errorTimeout;u.src=e;for(m in r)u.setAttribute(m,r[m]);n=s?c:n||i,u.onreadystatechange=u.onload=function(){!d&&a(u.readyState)&&(d=1,n(),u.onload=u.onreadystatechange=null)},p(function(){d||(d=1,n(1))},o),l?u.onload():f.parentNode.insertBefore(u,f)},e.yepnope.injectCss=function(e,n,r,o,a,l){var o=t.createElement("link"),s,n=l?c:n||i;o.href=e,o.rel="stylesheet",o.type="text/css";for(s in r)o.setAttribute(s,r[s]);a||(f.parentNode.insertBefore(o,f),p(n,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};


//PLACEHOLDER
jQuery(document).ready(function(){Modernizr.input.placeholder||jQuery("input").each(function(){""==jQuery(this).val()&&""!=jQuery(this).attr("placeholder")&&(jQuery(this).val(jQuery(this).attr("placeholder")),jQuery(this).focus(function(){jQuery(this).val()==jQuery(this).attr("placeholder")&&jQuery(this).val("")}),jQuery(this).blur(function(){""==jQuery(this).val()&&jQuery(this).val(jQuery(this).attr("placeholder"))}))})});


//SUPERFISH
!function(e){"use strict";var s=function(){var s={bcClass:"sf-breadcrumb",menuClass:"sf-js-enabled",anchorClass:"sf-with-ul",menuArrowClass:"sf-arrows"},o=function(){var s=/iPhone|iPad|iPod/i.test(navigator.userAgent);return s&&e(window).load(function(){e("body").children().on("click",e.noop)}),s}(),n=function(){var e=document.documentElement.style;return"behavior"in e&&"fill"in e&&/iemobile/i.test(navigator.userAgent)}(),t=function(e,o){var n=s.menuClass;o.cssArrows&&(n+=" "+s.menuArrowClass),e.toggleClass(n)},i=function(o,n){return o.find("li."+n.pathClass).slice(0,n.pathLevels).addClass(n.hoverClass+" "+s.bcClass).filter(function(){return e(this).children(n.popUpSelector).hide().show().length}).removeClass(n.pathClass)},r=function(e){e.children("a").toggleClass(s.anchorClass)},a=function(e){var s=e.css("ms-touch-action");s="pan-y"===s?"auto":"pan-y",e.css("ms-touch-action",s)},l=function(s,t){var i="li:has("+t.popUpSelector+")";e.fn.hoverIntent&&!t.disableHI?s.hoverIntent(u,p,i):s.on("mouseenter.superfish",i,u).on("mouseleave.superfish",i,p);var r="MSPointerDown.superfish";o||(r+=" touchend.superfish"),n&&(r+=" mousedown.superfish"),s.on("focusin.superfish","li",u).on("focusout.superfish","li",p).on(r,"a",t,h)},h=function(s){var o=e(this),n=o.siblings(s.data.popUpSelector);n.length>0&&n.is(":hidden")&&(o.one("click.superfish",!1),"MSPointerDown"===s.type?o.trigger("focus"):e.proxy(u,o.parent("li"))())},u=function(){var s=e(this),o=d(s);clearTimeout(o.sfTimer),s.siblings().superfish("hide").end().superfish("show")},p=function(){var s=e(this),n=d(s);o?e.proxy(f,s,n)():(clearTimeout(n.sfTimer),n.sfTimer=setTimeout(e.proxy(f,s,n),n.delay))},f=function(s){s.retainPath=e.inArray(this[0],s.$path)>-1,this.superfish("hide"),this.parents("."+s.hoverClass).length||(s.onIdle.call(c(this)),s.$path.length&&e.proxy(u,s.$path)())},c=function(e){return e.closest("."+s.menuClass)},d=function(e){return c(e).data("sf-options")};return{hide:function(s){if(this.length){var o=this,n=d(o);if(!n)return this;var t=n.retainPath===!0?n.$path:"",i=o.find("li."+n.hoverClass).add(this).not(t).removeClass(n.hoverClass).children(n.popUpSelector),r=n.speedOut;s&&(i.show(),r=0),n.retainPath=!1,n.onBeforeHide.call(i),i.stop(!0,!0).animate(n.animationOut,r,function(){var s=e(this);n.onHide.call(s)})}return this},show:function(){var e=d(this);if(!e)return this;var s=this.addClass(e.hoverClass),o=s.children(e.popUpSelector);return e.onBeforeShow.call(o),o.stop(!0,!0).animate(e.animation,e.speed,function(){e.onShow.call(o)}),this},destroy:function(){return this.each(function(){var o=e(this),n=o.data("sf-options"),i;return n?(i=o.find(n.popUpSelector).parent("li"),clearTimeout(n.sfTimer),t(o,n),r(i),a(o),o.off(".superfish").off(".hoverIntent"),i.children(n.popUpSelector).attr("style",function(e,s){return s.replace(/display[^;]+;?/g,"")}),n.$path.removeClass(n.hoverClass+" "+s.bcClass).addClass(n.pathClass),o.find("."+n.hoverClass).removeClass(n.hoverClass),n.onDestroy.call(o),void o.removeData("sf-options")):!1})},init:function(o){return this.each(function(){var n=e(this);if(n.data("sf-options"))return!1;var h=e.extend({},e.fn.superfish.defaults,o),u=n.find(h.popUpSelector).parent("li");h.$path=i(n,h),n.data("sf-options",h),t(n,h),r(u),a(n),l(n,h),u.not("."+s.bcClass).superfish("hide",!0),h.onInit.call(this)})}}}();e.fn.superfish=function(o,n){return s[o]?s[o].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof o&&o?e.error("Method "+o+" does not exist on jQuery.fn.superfish"):s.init.apply(this,arguments)},e.fn.superfish.defaults={popUpSelector:"ul,.sf-mega",hoverClass:"sfHover",pathClass:"overrideThisToUse",pathLevels:1,delay:800,animation:{opacity:"show"},animationOut:{opacity:"hide"},speed:"normal",speedOut:"fast",cssArrows:!0,disableHI:!1,onInit:e.noop,onBeforeShow:e.noop,onShow:e.noop,onBeforeHide:e.noop,onHide:e.noop,onIdle:e.noop,onDestroy:e.noop},e.fn.extend({hideSuperfishUl:s.hide,showSuperfishUl:s.show})}(jQuery);


//SYNCHEIGHT
!function(e){var t=function(){var e=0,t=[["min-height","0px"],["height","1%"]],n=/(msie) ([\w.]+)/.exec(navigator.userAgent.toLowerCase())||[],i=n[1]||"",h=n[2]||"0";return"msie"===i&&7>h&&(e=1),{name:t[e][0],autoheightVal:t[e][1]}};e.getSyncedHeight=function(n){var i=0,h=t();return e(n).each(function(){e(this).css(h.name,h.autoheightVal);var t=parseInt(e(this).css("height"),10);t>i&&(i=t)}),i},e.fn.syncHeight=function(n){var i={updateOnResize:!1,height:!1},h=e.extend(i,n),s=this,a=0,c=t().name;return a="number"==typeof h.height?h.height:e.getSyncedHeight(this),e(this).each(function(){e(this).css(c,a+"px")}),h.updateOnResize===!0&&e(window).resize(function(){e(s).syncHeight()}),this},e.fn.unSyncHeight=function(){var n=t().name;e(this).each(function(){e(this).css(n,"")})}}(jQuery);