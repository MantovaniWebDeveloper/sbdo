/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/opencage-api-client/dist/opencage-api.min.js":
/*!*******************************************************************!*\
  !*** ./node_modules/opencage-api-client/dist/opencage-api.min.js ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

!function(t,e){ true?module.exports=e():undefined}(window,function(){return function(t){var e={};function r(n){if(e[n])return e[n].exports;var o=e[n]={i:n,l:!1,exports:{}};return t[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}return r.m=t,r.c=e,r.d=function(t,e,n){r.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},r.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.t=function(t,e){if(1&e&&(t=r(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)r.d(n,o,function(e){return t[e]}.bind(null,o));return n},r.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(e,"a",e),e},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.p="",r(r.s=3)}([function(t,e){var r,n,o=t.exports={};function i(){throw new Error("setTimeout has not been defined")}function s(){throw new Error("clearTimeout has not been defined")}function u(t){if(r===setTimeout)return setTimeout(t,0);if((r===i||!r)&&setTimeout)return r=setTimeout,setTimeout(t,0);try{return r(t,0)}catch(e){try{return r.call(null,t,0)}catch(e){return r.call(this,t,0)}}}!function(){try{r="function"==typeof setTimeout?setTimeout:i}catch(t){r=i}try{n="function"==typeof clearTimeout?clearTimeout:s}catch(t){n=s}}();var a,c=[],f=!1,l=-1;function h(){f&&a&&(f=!1,a.length?c=a.concat(c):l=-1,c.length&&p())}function p(){if(!f){var t=u(h);f=!0;for(var e=c.length;e;){for(a=c,c=[];++l<e;)a&&a[l].run();l=-1,e=c.length}a=null,f=!1,function(t){if(n===clearTimeout)return clearTimeout(t);if((n===s||!n)&&clearTimeout)return n=clearTimeout,clearTimeout(t);try{n(t)}catch(e){try{return n.call(null,t)}catch(e){return n.call(this,t)}}}(t)}}function d(t,e){this.fun=t,this.array=e}function y(){}o.nextTick=function(t){var e=new Array(arguments.length-1);if(arguments.length>1)for(var r=1;r<arguments.length;r++)e[r-1]=arguments[r];c.push(new d(t,e)),1!==c.length||f||u(p)},d.prototype.run=function(){this.fun.apply(null,this.array)},o.title="browser",o.browser=!0,o.env={},o.argv=[],o.version="",o.versions={},o.on=y,o.addListener=y,o.once=y,o.off=y,o.removeListener=y,o.removeAllListeners=y,o.emit=y,o.prependListener=y,o.prependOnceListener=y,o.listeners=function(t){return[]},o.binding=function(t){throw new Error("process.binding is not supported")},o.cwd=function(){return"/"},o.chdir=function(t){throw new Error("process.chdir is not supported")},o.umask=function(){return 0}},function(t,e){t.exports={isNumber:t=>"number"==typeof t&&!Number.isNaN(t),isArray:t=>!!t&&Array.isArray(t),isUndefinedOrEmpty:t=>void 0===t||""===t,isUndefinedOrNull:t=>null==t}},function(t,e){var r;r=function(){return this}();try{r=r||new Function("return this")()}catch(t){"object"==typeof window&&(r=window)}t.exports=r},function(t,e,r){const n=r(4);t.exports={geocode:n}},function(t,e,r){(function(e){const n=r(1),o=r(5),i=r(6),s=t=>t;t.exports=(t=>new Promise((r,u)=>{if(n.isUndefinedOrNull(t)){const t=new Error("missing input parameters");return t.response={status:{code:400,message:"missing input parameters"}},void u(t)}const a=s(t);let c="https://api.opencagedata.com/geocode/v1/json";if(n.isUndefinedOrEmpty(a.proxyURL)){if(n.isUndefinedOrEmpty(a.key)&&(a.key=e.env.OCD_API_KEY),n.isUndefinedOrEmpty(a.key)){const t=new Error("missing API key");return t.response={status:{code:403,message:"missing API key"}},void u(t)}}else c=a.proxyURL,delete a.proxyURL;const f=o(a);i(`${c}?${f}`,r,u)})),t.exports.buildParams=s}).call(this,r(0))},function(t,e,r){const n=r(1);t.exports=(t=>n.isUndefinedOrNull(t)?"":Object.keys(t).map(e=>`${encodeURIComponent(e)}=${encodeURIComponent(t[e])}`).join("&"))},function(t,e,r){(function(e){r(7).polyfill(),r(8);const n=t=>{if(t.status>=200&&t.status<300)return t;const e=new Error(t.statusText);throw e.response=t,e},o=t=>t.json(),i=t=>e.fetch(t);t.exports=((t,e,r)=>{i(t).then(n).then(o).then(t=>{e(t)}).catch(t=>{r(t)})}),t.exports.fetchUrl=i,t.exports.parseJSON=o,t.exports.checkStatus=n}).call(this,r(2))},function(t,e,r){(function(e,r){
/*!
 * @overview es6-promise - a tiny implementation of Promises/A+.
 * @copyright Copyright (c) 2014 Yehuda Katz, Tom Dale, Stefan Penner and contributors (Conversion to ES6 API by Jake Archibald)
 * @license   Licensed under MIT license
 *            See https://raw.githubusercontent.com/stefanpenner/es6-promise/master/LICENSE
 * @version   v4.2.6+9869a4bc
 */var n;n=function(){"use strict";function t(t){return"function"==typeof t}var n=Array.isArray?Array.isArray:function(t){return"[object Array]"===Object.prototype.toString.call(t)},o=0,i=void 0,s=void 0,u=function(t,e){d[o]=t,d[o+1]=e,2===(o+=2)&&(s?s(y):_())},a="undefined"!=typeof window?window:void 0,c=a||{},f=c.MutationObserver||c.WebKitMutationObserver,l="undefined"==typeof self&&void 0!==e&&"[object process]"==={}.toString.call(e),h="undefined"!=typeof Uint8ClampedArray&&"undefined"!=typeof importScripts&&"undefined"!=typeof MessageChannel;function p(){var t=setTimeout;return function(){return t(y,1)}}var d=new Array(1e3);function y(){for(var t=0;t<o;t+=2){(0,d[t])(d[t+1]),d[t]=void 0,d[t+1]=void 0}o=0}var b,m,v,w,_=void 0;function g(t,e){var r=this,n=new this.constructor(x);void 0===n[T]&&N(n);var o=r._state;if(o){var i=arguments[o-1];u(function(){return C(o,n,i,r._result)})}else F(r,n,t,e);return n}function A(t){if(t&&"object"==typeof t&&t.constructor===this)return t;var e=new this(x);return S(e,t),e}l?_=function(){return e.nextTick(y)}:f?(m=0,v=new f(y),w=document.createTextNode(""),v.observe(w,{characterData:!0}),_=function(){w.data=m=++m%2}):h?((b=new MessageChannel).port1.onmessage=y,_=function(){return b.port2.postMessage(0)}):_=void 0===a?function(){try{var t=Function("return this")().require("vertx");return void 0!==(i=t.runOnLoop||t.runOnContext)?function(){i(y)}:p()}catch(t){return p()}}():p();var T=Math.random().toString(36).substring(2);function x(){}var E=void 0,O=1,P=2,j={error:null};function U(t){try{return t.then}catch(t){return j.error=t,j}}function B(e,r,n){r.constructor===e.constructor&&n===g&&r.constructor.resolve===A?function(t,e){e._state===O?I(t,e._result):e._state===P?D(t,e._result):F(e,void 0,function(e){return S(t,e)},function(e){return D(t,e)})}(e,r):n===j?(D(e,j.error),j.error=null):void 0===n?I(e,r):t(n)?function(t,e,r){u(function(t){var n=!1,o=function(t,e,r,n){try{t.call(e,r,n)}catch(t){return t}}(r,e,function(r){n||(n=!0,e!==r?S(t,r):I(t,r))},function(e){n||(n=!0,D(t,e))},t._label);!n&&o&&(n=!0,D(t,o))},t)}(e,r,n):I(e,r)}function S(t,e){var r,n;t===e?D(t,new TypeError("You cannot resolve a promise with itself")):(n=typeof(r=e),null===r||"object"!==n&&"function"!==n?I(t,e):B(t,e,U(e)))}function R(t){t._onerror&&t._onerror(t._result),L(t)}function I(t,e){t._state===E&&(t._result=e,t._state=O,0!==t._subscribers.length&&u(L,t))}function D(t,e){t._state===E&&(t._state=P,t._result=e,u(R,t))}function F(t,e,r,n){var o=t._subscribers,i=o.length;t._onerror=null,o[i]=e,o[i+O]=r,o[i+P]=n,0===i&&t._state&&u(L,t)}function L(t){var e=t._subscribers,r=t._state;if(0!==e.length){for(var n=void 0,o=void 0,i=t._result,s=0;s<e.length;s+=3)n=e[s],o=e[s+r],n?C(r,n,o,i):o(i);t._subscribers.length=0}}function C(e,r,n,o){var i=t(n),s=void 0,u=void 0,a=void 0,c=void 0;if(i){if((s=function(t,e){try{return t(e)}catch(t){return j.error=t,j}}(n,o))===j?(c=!0,u=s.error,s.error=null):a=!0,r===s)return void D(r,new TypeError("A promises callback cannot return that same promise."))}else s=o,a=!0;r._state!==E||(i&&a?S(r,s):c?D(r,u):e===O?I(r,s):e===P&&D(r,s))}var k=0;function N(t){t[T]=k++,t._state=void 0,t._result=void 0,t._subscribers=[]}var M=function(){function t(t,e){this._instanceConstructor=t,this.promise=new t(x),this.promise[T]||N(this.promise),n(e)?(this.length=e.length,this._remaining=e.length,this._result=new Array(this.length),0===this.length?I(this.promise,this._result):(this.length=this.length||0,this._enumerate(e),0===this._remaining&&I(this.promise,this._result))):D(this.promise,new Error("Array Methods must be provided an Array"))}return t.prototype._enumerate=function(t){for(var e=0;this._state===E&&e<t.length;e++)this._eachEntry(t[e],e)},t.prototype._eachEntry=function(t,e){var r=this._instanceConstructor,n=r.resolve;if(n===A){var o=U(t);if(o===g&&t._state!==E)this._settledAt(t._state,e,t._result);else if("function"!=typeof o)this._remaining--,this._result[e]=t;else if(r===q){var i=new r(x);B(i,t,o),this._willSettleAt(i,e)}else this._willSettleAt(new r(function(e){return e(t)}),e)}else this._willSettleAt(n(t),e)},t.prototype._settledAt=function(t,e,r){var n=this.promise;n._state===E&&(this._remaining--,t===P?D(n,r):this._result[e]=r),0===this._remaining&&I(n,this._result)},t.prototype._willSettleAt=function(t,e){var r=this;F(t,void 0,function(t){return r._settledAt(O,e,t)},function(t){return r._settledAt(P,e,t)})},t}(),q=function(){function e(t){this[T]=k++,this._result=this._state=void 0,this._subscribers=[],x!==t&&("function"!=typeof t&&function(){throw new TypeError("You must pass a resolver function as the first argument to the promise constructor")}(),this instanceof e?function(t,e){try{e(function(e){S(t,e)},function(e){D(t,e)})}catch(e){D(t,e)}}(this,t):function(){throw new TypeError("Failed to construct 'Promise': Please use the 'new' operator, this object constructor cannot be called as a function.")}())}return e.prototype.catch=function(t){return this.then(null,t)},e.prototype.finally=function(e){var r=this.constructor;return t(e)?this.then(function(t){return r.resolve(e()).then(function(){return t})},function(t){return r.resolve(e()).then(function(){throw t})}):this.then(e,e)},e}();return q.prototype.then=g,q.all=function(t){return new M(this,t).promise},q.race=function(t){var e=this;return n(t)?new e(function(r,n){for(var o=t.length,i=0;i<o;i++)e.resolve(t[i]).then(r,n)}):new e(function(t,e){return e(new TypeError("You must pass an array to race."))})},q.resolve=A,q.reject=function(t){var e=new this(x);return D(e,t),e},q._setScheduler=function(t){s=t},q._setAsap=function(t){u=t},q._asap=u,q.polyfill=function(){var t=void 0;if(void 0!==r)t=r;else if("undefined"!=typeof self)t=self;else try{t=Function("return this")()}catch(t){throw new Error("polyfill failed because global object is unavailable in this environment")}var e=t.Promise;if(e){var n=null;try{n=Object.prototype.toString.call(e.resolve())}catch(t){}if("[object Promise]"===n&&!e.cast)return}t.Promise=q},q.Promise=q,q},t.exports=n()}).call(this,r(0),r(2))},function(t,e,r){r(9);var n="undefined"!=typeof self&&self||this;t.exports=n.fetch.bind(n)},function(t,e){!function(t){"use strict";if(!t.fetch){var e={searchParams:"URLSearchParams"in t,iterable:"Symbol"in t&&"iterator"in Symbol,blob:"FileReader"in t&&"Blob"in t&&function(){try{return new Blob,!0}catch(t){return!1}}(),formData:"FormData"in t,arrayBuffer:"ArrayBuffer"in t};if(e.arrayBuffer)var r=["[object Int8Array]","[object Uint8Array]","[object Uint8ClampedArray]","[object Int16Array]","[object Uint16Array]","[object Int32Array]","[object Uint32Array]","[object Float32Array]","[object Float64Array]"],n=function(t){return t&&DataView.prototype.isPrototypeOf(t)},o=ArrayBuffer.isView||function(t){return t&&r.indexOf(Object.prototype.toString.call(t))>-1};f.prototype.append=function(t,e){t=u(t),e=a(e);var r=this.map[t];this.map[t]=r?r+","+e:e},f.prototype.delete=function(t){delete this.map[u(t)]},f.prototype.get=function(t){return t=u(t),this.has(t)?this.map[t]:null},f.prototype.has=function(t){return this.map.hasOwnProperty(u(t))},f.prototype.set=function(t,e){this.map[u(t)]=a(e)},f.prototype.forEach=function(t,e){for(var r in this.map)this.map.hasOwnProperty(r)&&t.call(e,this.map[r],r,this)},f.prototype.keys=function(){var t=[];return this.forEach(function(e,r){t.push(r)}),c(t)},f.prototype.values=function(){var t=[];return this.forEach(function(e){t.push(e)}),c(t)},f.prototype.entries=function(){var t=[];return this.forEach(function(e,r){t.push([r,e])}),c(t)},e.iterable&&(f.prototype[Symbol.iterator]=f.prototype.entries);var i=["DELETE","GET","HEAD","OPTIONS","POST","PUT"];b.prototype.clone=function(){return new b(this,{body:this._bodyInit})},y.call(b.prototype),y.call(v.prototype),v.prototype.clone=function(){return new v(this._bodyInit,{status:this.status,statusText:this.statusText,headers:new f(this.headers),url:this.url})},v.error=function(){var t=new v(null,{status:0,statusText:""});return t.type="error",t};var s=[301,302,303,307,308];v.redirect=function(t,e){if(-1===s.indexOf(e))throw new RangeError("Invalid status code");return new v(null,{status:e,headers:{location:t}})},t.Headers=f,t.Request=b,t.Response=v,t.fetch=function(t,r){return new Promise(function(n,o){var i=new b(t,r),s=new XMLHttpRequest;s.onload=function(){var t,e,r={status:s.status,statusText:s.statusText,headers:(t=s.getAllResponseHeaders()||"",e=new f,t.split(/\r?\n/).forEach(function(t){var r=t.split(":"),n=r.shift().trim();if(n){var o=r.join(":").trim();e.append(n,o)}}),e)};r.url="responseURL"in s?s.responseURL:r.headers.get("X-Request-URL");var o="response"in s?s.response:s.responseText;n(new v(o,r))},s.onerror=function(){o(new TypeError("Network request failed"))},s.ontimeout=function(){o(new TypeError("Network request failed"))},s.open(i.method,i.url,!0),"include"===i.credentials&&(s.withCredentials=!0),"responseType"in s&&e.blob&&(s.responseType="blob"),i.headers.forEach(function(t,e){s.setRequestHeader(e,t)}),s.send(void 0===i._bodyInit?null:i._bodyInit)})},t.fetch.polyfill=!0}function u(t){if("string"!=typeof t&&(t=String(t)),/[^a-z0-9\-#$%&'*+.\^_`|~]/i.test(t))throw new TypeError("Invalid character in header field name");return t.toLowerCase()}function a(t){return"string"!=typeof t&&(t=String(t)),t}function c(t){var r={next:function(){var e=t.shift();return{done:void 0===e,value:e}}};return e.iterable&&(r[Symbol.iterator]=function(){return r}),r}function f(t){this.map={},t instanceof f?t.forEach(function(t,e){this.append(e,t)},this):Array.isArray(t)?t.forEach(function(t){this.append(t[0],t[1])},this):t&&Object.getOwnPropertyNames(t).forEach(function(e){this.append(e,t[e])},this)}function l(t){if(t.bodyUsed)return Promise.reject(new TypeError("Already read"));t.bodyUsed=!0}function h(t){return new Promise(function(e,r){t.onload=function(){e(t.result)},t.onerror=function(){r(t.error)}})}function p(t){var e=new FileReader,r=h(e);return e.readAsArrayBuffer(t),r}function d(t){if(t.slice)return t.slice(0);var e=new Uint8Array(t.byteLength);return e.set(new Uint8Array(t)),e.buffer}function y(){return this.bodyUsed=!1,this._initBody=function(t){if(this._bodyInit=t,t)if("string"==typeof t)this._bodyText=t;else if(e.blob&&Blob.prototype.isPrototypeOf(t))this._bodyBlob=t;else if(e.formData&&FormData.prototype.isPrototypeOf(t))this._bodyFormData=t;else if(e.searchParams&&URLSearchParams.prototype.isPrototypeOf(t))this._bodyText=t.toString();else if(e.arrayBuffer&&e.blob&&n(t))this._bodyArrayBuffer=d(t.buffer),this._bodyInit=new Blob([this._bodyArrayBuffer]);else{if(!e.arrayBuffer||!ArrayBuffer.prototype.isPrototypeOf(t)&&!o(t))throw new Error("unsupported BodyInit type");this._bodyArrayBuffer=d(t)}else this._bodyText="";this.headers.get("content-type")||("string"==typeof t?this.headers.set("content-type","text/plain;charset=UTF-8"):this._bodyBlob&&this._bodyBlob.type?this.headers.set("content-type",this._bodyBlob.type):e.searchParams&&URLSearchParams.prototype.isPrototypeOf(t)&&this.headers.set("content-type","application/x-www-form-urlencoded;charset=UTF-8"))},e.blob&&(this.blob=function(){var t=l(this);if(t)return t;if(this._bodyBlob)return Promise.resolve(this._bodyBlob);if(this._bodyArrayBuffer)return Promise.resolve(new Blob([this._bodyArrayBuffer]));if(this._bodyFormData)throw new Error("could not read FormData body as blob");return Promise.resolve(new Blob([this._bodyText]))},this.arrayBuffer=function(){return this._bodyArrayBuffer?l(this)||Promise.resolve(this._bodyArrayBuffer):this.blob().then(p)}),this.text=function(){var t,e,r,n=l(this);if(n)return n;if(this._bodyBlob)return t=this._bodyBlob,e=new FileReader,r=h(e),e.readAsText(t),r;if(this._bodyArrayBuffer)return Promise.resolve(function(t){for(var e=new Uint8Array(t),r=new Array(e.length),n=0;n<e.length;n++)r[n]=String.fromCharCode(e[n]);return r.join("")}(this._bodyArrayBuffer));if(this._bodyFormData)throw new Error("could not read FormData body as text");return Promise.resolve(this._bodyText)},e.formData&&(this.formData=function(){return this.text().then(m)}),this.json=function(){return this.text().then(JSON.parse)},this}function b(t,e){var r,n,o=(e=e||{}).body;if(t instanceof b){if(t.bodyUsed)throw new TypeError("Already read");this.url=t.url,this.credentials=t.credentials,e.headers||(this.headers=new f(t.headers)),this.method=t.method,this.mode=t.mode,o||null==t._bodyInit||(o=t._bodyInit,t.bodyUsed=!0)}else this.url=String(t);if(this.credentials=e.credentials||this.credentials||"omit",!e.headers&&this.headers||(this.headers=new f(e.headers)),this.method=(r=e.method||this.method||"GET",n=r.toUpperCase(),i.indexOf(n)>-1?n:r),this.mode=e.mode||this.mode||null,this.referrer=null,("GET"===this.method||"HEAD"===this.method)&&o)throw new TypeError("Body not allowed for GET or HEAD requests");this._initBody(o)}function m(t){var e=new FormData;return t.trim().split("&").forEach(function(t){if(t){var r=t.split("="),n=r.shift().replace(/\+/g," "),o=r.join("=").replace(/\+/g," ");e.append(decodeURIComponent(n),decodeURIComponent(o))}}),e}function v(t,e){e||(e={}),this.type="default",this.status="status"in e?e.status:200,this.ok=this.status>=200&&this.status<300,this.statusText="statusText"in e?e.statusText:"OK",this.headers=new f(e.headers),this.url=e.url||"",this._initBody(t)}}("undefined"!=typeof self?self:this)}])});
//# sourceMappingURL=opencage-api.min.js.map

/***/ }),

/***/ "./resources/js/geocodingForward.js":
/*!******************************************!*\
  !*** ./resources/js/geocodingForward.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var opencage = __webpack_require__(/*! opencage-api-client */ "./node_modules/opencage-api-client/dist/opencage-api.min.js");

$(document).ready(function () {
  $('#btnLoc').on('click', function () {
    //recupero i valori neccessari per la chiamata api opencag
    var citta = $('#citta').val();
    var provincia = $('#provincia').val();
    var indirizzo = $('#indirizzo').val();
    var cap = $('#cap').val();
    opencage.geocode({
      q: indirizzo + " " + cap + " " + citta + " " + provincia,
      language: 'it',
      key: '5c5152b1be794404a8fb292c96e25591'
    }).then(function (data) {
      // console.log(JSON.stringify(data));
      if (data.status.code == 200) {
        if (data.results.length > 0) {
          var place = data.results[0];
          console.log(place.geometry.lat);
          console.log(place.geometry.lng);
          $('#cittaCrea').val(citta);
          $('#provinciaCrea').val(provincia);
          $('#indirizzoCrea').val(indirizzo);
          $('#capCrea').val(cap);
          $('#latCrea').val(place.geometry.lat);
          $('#lngCrea').val(place.geometry.lng);
        }
      } else if (data.status.code == 402) {
        console.log('hit free-trial daily limit');
        console.log('become a customer: https://opencagedata.com/pricing');
      } else {
        // other possible response codes:
        // https://opencagedata.com/api#codes
        console.log('error', data.status.message);
      }
    }).catch(function (error) {
      console.log('error', error.message);
    });
  });
});

/***/ }),

/***/ 3:
/*!************************************************!*\
  !*** multi ./resources/js/geocodingForward.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/dariomantovani/Desktop/progettiLaravel/stasera-balliamo/resources/js/geocodingForward.js */"./resources/js/geocodingForward.js");


/***/ })

/******/ });