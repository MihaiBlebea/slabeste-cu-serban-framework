var Mihai=function(e){function t(n){if(i[n])return i[n].exports;var s=i[n]={i:n,l:!1,exports:{}};return e[n].call(s.exports,s,s.exports,t),s.l=!0,s.exports}var i={};return t.m=e,t.c=i,t.d=function(e,i,n){t.o(e,i)||Object.defineProperty(e,i,{configurable:!1,enumerable:!0,get:n})},t.n=function(e){var i=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(i,"a",i),i},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="/app/",t(t.s=0)}([function(e,t,i){"use strict";function n(){return"Mihai is set and working"}function s(e){var t=new l.default;console.log(t),console.log(e.target.value);var i=e.target.value;return t.value(i).rules({required:!0,type:"string",length:{min:3,max:25}})}Object.defineProperty(t,"__esModule",{value:!0}),t.validateName=t.isWorking=void 0;var u=i(1),l=function(e){return e&&e.__esModule?e:{default:e}}(u);t.isWorking=n,t.validateName=s},function(e,t,i){"use strict";function n(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(t,"__esModule",{value:!0});var s="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},u=function(){function e(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}return function(t,i,n){return i&&e(t.prototype,i),n&&e(t,n),t}}(),l=function(){function e(t,i){n(this,e),this.valid=!0,this.value=null,this.rules={required:!1,type:null,length:{max:null,min:null},contains:[]},this.message=[],this.rules=t,this.value=i}return u(e,[{key:"value",value:function(e){return this.value=e,this}},{key:"rules",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;if(this.rules=e,this.value=t,null!=this.value)return!0===this.rules.required&&this.checkRequired(),void 0!==this.rules.type&&this.checkType(),void 0!==this.rules.length&&this.checkLength(),void 0!==this.rules.contains&&this.checkContains(),!0===this.valid?this.valid:this.message}},{key:"checkRequired",value:function(){""===this.value&&(this.valid=!1,this.message.push("This field is required"))}},{key:"checkContains",value:function(){var e=this.rules.contains;if(e.length>0)for(var t=0;t<e.length;t++)!0!==this.value.includes(e[t])&&(this.valid=!1,this.message.push("This string should contain "+e[t]))}},{key:"checkLength",value:function(){void 0!==this.rules.length.min&&this.min(),void 0!==this.rules.length.max&&this.max()}},{key:"min",value:function(){var e=this.rules.length.min;null!==e&&this.value.length<e&&(this.valid=!1,this.message.push("Character count should be greater then "+this.rules.length.min))}},{key:"max",value:function(){var e=this.rules.length.max;null!==e&&this.value.length>e&&(this.valid=!1,this.message.push("Character count should be smaller then "+this.rules.length.max))}},{key:"checkType",value:function(){switch(this.rules.type){case"string":this.string();break;case"integer":this.integer();break;case"object":this.obj();break;case"boolean":this.boolean();break;default:console.log("Unknown type")}}},{key:"string",value:function(){!0!==isNaN(this.value)&&(this.valid=!1,this.message.push("This should be a string"))}},{key:"integer",value:function(){!1!==isNaN(this.value)&&(this.valid=!1,this.message.push("This should be a number"))}},{key:"obj",value:function(){"object"!==s(this.value)&&(this.valid=!1,this.message.push("This should be an object"))}},{key:"boolean",value:function(){"boolean"!=typeof this.value&&(this.valid=!1,this.message.push("This should be a boolean"))}},{key:"valid",value:function(){return this.valid}},{key:"withMessage",value:function(){return this.message}}]),e}();t.default=l}]);