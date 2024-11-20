/*!
* jquery.addrule.js 0.0.2 - https://gist.github.com/yckart/5563717/
* Add css-rules to an existing stylesheet.
*
* @see http://stackoverflow.com/a/16507264/1250044
*
* Copyright (c) 2013 Yannick Albert (http://yckart.com)
* Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php).
* 2013/11/23
**/(function($){window.addRule=function(selector,styles,sheet){styles=(function(styles){if(typeof styles==="string")return styles;var clone="";for(var prop in styles){if(styles.hasOwnProperty(prop)){var val=styles[prop];prop=prop.replace(/([A-Z])/g,"-$1").toLowerCase();clone+=prop+":"+(prop==="content"?'"'+val+'"':val)+"; ";}}
return clone;}(styles));sheet=sheet||document.styleSheets[document.styleSheets.length-1];if(sheet.insertRule)sheet.insertRule(selector+" {"+styles+"}",sheet.cssRules.length);else if(sheet.addRule)sheet.addRule(selector,styles);return this;};if($)$.fn.addRule=function(styles,sheet){addRule(this.selector,styles,sheet);return this;};}(this.jQuery||this.Zepto));