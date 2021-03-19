﻿/*
 Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
(function(){CKEDITOR.on("dialogDefinition",function(a){var b;b=a.data.name;a=a.data.definition;"link"==b?(a.removeContents("target"),a.removeContents("upload"),a.removeContents("advanced"),b=a.getContents("info"),b.remove("emailSubject"),b.remove("emailBody")):"image"==b&&(a.removeContents("advanced"),b=a.getContents("Link"),b.remove("cmbTarget"),b=a.getContents("info"),b.remove("txtAlt"),b.remove("basic"))});var l={b:"strong",u:"u",i:"em",color:"span",size:"span",left:"div",right:"div",center:"div",
justify:"div",quote:"blockquote",code:"code",url:"a",email:"span",img:"span","*":"li",list:"ol"},x={strong:"b",b:"b",u:"u",em:"i",i:"i",code:"code",li:"*"},m={strong:"b",em:"i",u:"u",li:"*",ul:"list",ol:"list",code:"code",a:"link",img:"img",blockquote:"quote"},y={color:"color",size:"font-size",left:"text-align",center:"text-align",right:"text-align",justify:"text-align"},z={url:"href",email:"mailhref",quote:"cite",list:"listType"},n=CKEDITOR.dtd,A=CKEDITOR.tools.extend({table:1},n.$block,n.$listItem,
n.$tableContent,n.$list),C=/\s*(?:;\s*|$)/,q={smiley:":)",sad:":(",wink:";)",laugh:":D",cheeky:":P",blush:":*)",surprise:":-o",indecision:":|",angry:"\x3e:(",angel:"o:)",cool:"8-)",devil:"\x3e:-)",crying:";(",kiss:":-*"},B={},r=[],t;for(t in q)B[q[t]]=t,r.push(q[t].replace(/\(|\)|\:|\/|\*|\-|\|/g,function(a){return"\\"+a}));var r=new RegExp(r.join("|"),"g"),D=function(){var a=[],b={nbsp:" ",shy:"­"},c;for(c in b)a.push(c);a=new RegExp("\x26("+a.join("|")+");","g");return function(c){return c.replace(a,
function(e,a){return b[a]})}}();CKEDITOR.BBCodeParser=function(){this._={bbcPartsRegex:/(?:\[([^\/\]=]*?)(?:=([^\]]*?))?\])|(?:\[\/([a-z]{1,16})\])/ig}};CKEDITOR.BBCodeParser.prototype={parse:function(a){for(var b,c,k=0;b=this._.bbcPartsRegex.exec(a);)if(c=b.index,c>k&&(k=a.substring(k,c),this.onText(k,1)),k=this._.bbcPartsRegex.lastIndex,(c=(b[1]||b[3]||"").toLowerCase())&&!l[c])this.onText(b[0]);else if(b[1]){var e=l[c],g={},h={};b=b[2];if("left"==c||"right"==c||"center"==c||"justify"==c)b=c;if(b)if("list"==
c&&(isNaN(b)?/^[a-z]+$/.test(b)?b="lower-alpha":/^[A-Z]+$/.test(b)&&(b="upper-alpha"):b="decimal"),y[c]){"size"==c&&(b+="%");h[y[c]]=b;b=g;var f="",d=void 0;for(d in h)var u=(d+":"+h[d]).replace(C,";"),f=f+u;b.style=f}else z[c]&&(g[z[c]]=CKEDITOR.tools.htmlDecode(b));if("email"==c||"img"==c)g.bbcode=c;this.onTagOpen(e,g,CKEDITOR.dtd.$empty[e])}else if(b[3])this.onTagClose(l[c]);if(a.length>k)this.onText(a.substring(k,a.length),1)}};CKEDITOR.htmlParser.fragment.fromBBCode=function(a){function b(e){if(0<
h.length)for(var a=0;a<h.length;a++){var b=h[a],c=b.name,g=CKEDITOR.dtd[c],f=d.name&&CKEDITOR.dtd[d.name];f&&!f[c]||e&&g&&!g[e]&&CKEDITOR.dtd[e]||(b=b.clone(),b.parent=d,d=b,h.splice(a,1),a--)}}function c(a,e){var b=d.children.length,c=0<b&&d.children[b-1],b=!c&&v.getRule(m[d.name],"breakAfterOpen"),c=c&&c.type==CKEDITOR.NODE_ELEMENT&&v.getRule(m[c.name],"breakAfterClose"),g=a&&v.getRule(m[a],e?"breakBeforeClose":"breakBeforeOpen");f&&(b||c||g)&&f--;f&&a in A&&f++;for(;f&&f--;)d.children.push(new CKEDITOR.htmlParser.element("br"))}
function k(a,e){c(a.name,1);e=e||d||g;var b=e.children.length;a.previous=0<b&&e.children[b-1]||null;a.parent=e;e.children.push(a);a.returnPoint&&(d=a.returnPoint,delete a.returnPoint)}var e=new CKEDITOR.BBCodeParser,g=new CKEDITOR.htmlParser.fragment,h=[],f=0,d=g,u;e.onTagOpen=function(a,g){var f=new CKEDITOR.htmlParser.element(a,g);if(CKEDITOR.dtd.$removeEmpty[a])h.push(f);else{var w=d.name,p=w&&(CKEDITOR.dtd[w]||(d._.isBlockLike?CKEDITOR.dtd.div:CKEDITOR.dtd.span));if(p&&!p[a]){var p=!1,l;a==w?
k(d,d.parent):(a in CKEDITOR.dtd.$listItem?(e.onTagOpen("ul",{}),l=d):(k(d,d.parent),h.unshift(d)),p=!0);d=l?l:d.returnPoint||d.parent;if(p){e.onTagOpen.apply(this,arguments);return}}b(a);c(a);f.parent=d;f.returnPoint=u;u=0;f.isEmpty?k(f):d=f}};e.onTagClose=function(a){for(var e=h.length-1;0<=e;e--)if(a==h[e].name){h.splice(e,1);return}for(var b=[],c=[],g=d;g.type&&g.name!=a;)g._.isBlockLike||c.unshift(g),b.push(g),g=g.parent;if(g.type){for(e=0;e<b.length;e++)a=b[e],k(a,a.parent);d=g;k(g,g.parent);
g==d&&(d=d.parent);h=h.concat(c)}};e.onText=function(a){var e=CKEDITOR.dtd[d.name];if(!e||e["#"])c(),b(),a.replace(/(\r\n|[\r\n])|[^\r\n]*/g,function(a,e){if(void 0!==e&&e.length)f++;else if(a.length){var b=0;a.replace(r,function(e,c){k(new CKEDITOR.htmlParser.text(a.substring(b,c)),d);k(new CKEDITOR.htmlParser.element("smiley",{desc:B[e]}),d);b=c+e.length});b!=a.length&&k(new CKEDITOR.htmlParser.text(a.substring(b,a.length)),d)}})};for(e.parse(CKEDITOR.tools.htmlEncode(a));d.type!=CKEDITOR.NODE_DOCUMENT_FRAGMENT;)a=
d.parent,k(d,a),d=a;return g};var v=new (CKEDITOR.tools.createClass({$:function(){this._={output:[],rules:[]};this.setRules("list",{breakBeforeOpen:1,breakAfterOpen:1,breakBeforeClose:1,breakAfterClose:1});this.setRules("*",{breakBeforeOpen:1,breakAfterOpen:0,breakBeforeClose:1,breakAfterClose:0});this.setRules("quote",{breakBeforeOpen:1,breakAfterOpen:0,breakBeforeClose:0,breakAfterClose:1})},proto:{setRules:function(a,b){var c=this._.rules[a];c?CKEDITOR.tools.extend(c,b,!0):this._.rules[a]=b},getRule:function(a,
b){return this._.rules[a]&&this._.rules[a][b]},openTag:function(a){a in l&&(this.getRule(a,"breakBeforeOpen")&&this.lineBreak(1),this.write("[",a))},openTagClose:function(a){"br"==a?this._.output.push("\n"):a in l&&(this.write("]"),this.getRule(a,"breakAfterOpen")&&this.lineBreak(1))},attribute:function(a,b){"option"==a&&this.write("\x3d",b)},closeTag:function(a){a in l&&(this.getRule(a,"breakBeforeClose")&&this.lineBreak(1),"*"!=a&&this.write("[/",a,"]"),this.getRule(a,"breakAfterClose")&&this.lineBreak(1))},
text:function(a){this.write(a)},comment:function(){},lineBreak:function(){!this._.hasLineBreak&&this._.output.length&&(this.write("\n"),this._.hasLineBreak=1)},write:function(){this._.hasLineBreak=0;var a=Array.prototype.join.call(arguments,"");this._.output.push(a)},reset:function(){this._.output=[];this._.hasLineBreak=0},getHtml:function(a){var b=this._.output.join("");a&&this.reset();return D(b)}}}));CKEDITOR.plugins.add("bbcode",{requires:"entities",beforeInit:function(a){CKEDITOR.tools.extend(a.config,
{enterMode:CKEDITOR.ENTER_BR,basicEntities:!1,entities:!1,fillEmptyBlocks:!1},!0);a.filter.disable();a.activeEnterMode=a.enterMode=CKEDITOR.ENTER_BR},init:function(a){function b(a){var b=a.data;a=CKEDITOR.htmlParser.fragment.fromBBCode(a.data.dataValue);var c=new CKEDITOR.htmlParser.basicWriter;a.writeHtml(c,k);a=c.getHtml(!0);b.dataValue=a}var c=a.config,k=new CKEDITOR.htmlParser.filter;k.addRules({elements:{blockquote:function(a){var b=new CKEDITOR.htmlParser.element("div");b.children=a.children;
a.children=[b];if(b=a.attributes.cite){var c=new CKEDITOR.htmlParser.element("cite");c.add(new CKEDITOR.htmlParser.text(b.replace(/^"|"$/g,"")));delete a.attributes.cite;a.children.unshift(c)}},span:function(a){var b;if(b=a.attributes.bbcode)"img"==b?(a.name="img",a.attributes.src=a.children[0].value,a.children=[]):"email"==b&&(a.name="a",a.attributes.href="mailto:"+a.children[0].value),delete a.attributes.bbcode},ol:function(a){a.attributes.listType?"decimal"!=a.attributes.listType&&(a.attributes.style=
"list-style-type:"+a.attributes.listType):a.name="ul";delete a.attributes.listType},a:function(a){a.attributes.href||(a.attributes.href=a.children[0].value)},smiley:function(a){a.name="img";var b=a.attributes.desc,h=c.smiley_images[CKEDITOR.tools.indexOf(c.smiley_descriptions,b)],h=CKEDITOR.tools.htmlEncode(c.smiley_path+h);a.attributes={src:h,"data-cke-saved-src":h,title:b,alt:b}}}});a.dataProcessor.htmlFilter.addRules({elements:{$:function(b){var c=b.attributes,h=CKEDITOR.tools.parseCssText(c.style,
1),f,d=b.name;if(d in x)d=x[d];else if("span"==d)if(f=h.color)d="color",f=CKEDITOR.tools.convertRgbToHex(f);else{if(f=h["font-size"])if(c=f.match(/(\d+)%$/))f=c[1],d="size"}else if("ol"==d||"ul"==d){if(f=h["list-style-type"])switch(f){case "lower-alpha":f="a";break;case "upper-alpha":f="A"}else"ol"==d&&(f=1);d="list"}else if("blockquote"==d){try{var k=b.children[0],l=b.children[1],m="cite"==k.name&&k.children[0].value;m&&(f='"'+m+'"',b.children=l.children)}catch(n){}d="quote"}else if("a"==d){if(f=
c.href)-1!==f.indexOf("mailto:")?(d="email",b.children=[new CKEDITOR.htmlParser.text(f.replace("mailto:",""))],f=""):((d=1==b.children.length&&b.children[0])&&d.type==CKEDITOR.NODE_TEXT&&d.value==f&&(f=""),d="url")}else if("img"==d){b.isEmpty=0;h=c["data-cke-saved-src"]||c.src;c=c.alt;if(h&&-1!=h.indexOf(a.config.smiley_path)&&c)return new CKEDITOR.htmlParser.text(q[c]);b.children=[new CKEDITOR.htmlParser.text(h)]}b.name=d;f&&(b.attributes.option=f);return null},div:function(a){var b=CKEDITOR.tools.parseCssText(a.attributes.style,
1)["text-align"]||"";if(b)return a.name=b,null},br:function(a){if((a=a.next)&&a.name in A)return!1}}},1);a.dataProcessor.writer=v;if(a.elementMode==CKEDITOR.ELEMENT_MODE_INLINE)a.once("contentDom",function(){a.on("setData",b)});else a.on("setData",b)},afterInit:function(a){var b;a._.elementsPath&&(b=a._.elementsPath.filters)&&b.push(function(b){var k=b.getName(),e=m[k]||!1;"link"==e&&0===b.getAttribute("href").indexOf("mailto:")?e="email":"span"==k?b.getStyle("font-size")?e="size":b.getStyle("color")&&
(e="color"):"div"==k&&b.getStyle("text-align")?e=b.getStyle("text-align"):"img"==e&&(b=b.data("cke-saved-src")||b.getAttribute("src"))&&0===b.indexOf(a.config.smiley_path)&&(e="smiley");return e})}})})();