!function(){"use strict";var e={n:function(t){var r=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(r,{a:r}),r},d:function(t,r){for(var n in r)e.o(r,n)&&!e.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:r[n]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)}},t=lodash,r=wp.blocks,n=wp.i18n,o=wp.blockEditor,l=wp.components;function a(){return a=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},a.apply(this,arguments)}var s=wp.element,c=wp.data,i=wp.hooks;const u=Object.create(null);var p=wp.compose,d=wp.apiFetch,m=e.n(d),f=wp.url;const h={};function w(e){let{className:t}=e;return(0,s.createElement)(l.Placeholder,{className:t},(0,n.__)("Block rendered as empty."))}function v(e){let{response:t,className:r}=e;const o=(0,n.sprintf)((0,n.__)("Error loading block: %s"),t.errorMsg);return(0,s.createElement)(l.Placeholder,{className:r},o)}function b(e){let{children:t,showLoader:r}=e;return(0,s.createElement)("div",{style:{position:"relative"}},r&&(0,s.createElement)("div",{style:{position:"absolute",top:"50%",left:"50%",marginTop:"-9px",marginLeft:"-9px"}},(0,s.createElement)(l.Spinner,null)),(0,s.createElement)("div",{style:{opacity:r?"0.3":1}},t))}function E(e){const{attributes:n,block:o,className:l,httpMethod:c="GET",urlQueryArgs:i,skipBlockSupportAttributes:u=!1,EmptyResponsePlaceholder:d=w,ErrorResponsePlaceholder:E=v,LoadingResponsePlaceholder:y=b}=e,g=(0,s.useRef)(!0),[k,_]=(0,s.useState)(!1),P=(0,s.useRef)(),[S,$]=(0,s.useState)(null),T=(0,p.usePrevious)(e),[C,R]=(0,s.useState)(!1);function M(){var e,t;if(!g.current)return;R(!0);let l=n&&(0,r.__experimentalSanitizeBlockAttributes)(o,n);u&&(l=function(e){const{backgroundColor:t,borderColor:r,fontFamily:n,fontSize:o,gradient:l,textColor:a,className:s,...c}=e,{border:i,color:u,elements:p,spacing:d,typography:m,...f}=(null==e?void 0:e.style)||h;return{...c,style:f}}(l));const a="POST"===c,s=a?null:null!==(e=l)&&void 0!==e?e:null,p=function(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{};return(0,f.addQueryArgs)(`/wp/v2/block-renderer/${e}`,{context:"edit",...null!==t?{attributes:t}:{},...r})}(o,s,i),d=a?{attributes:null!==(t=l)&&void 0!==t?t:null}:null,w=P.current=m()({path:p,data:d,method:a?"POST":"GET"}).then((e=>{g.current&&w===P.current&&e&&$(e.rendered)})).catch((e=>{g.current&&w===P.current&&$({error:!0,errorMsg:e.message})})).finally((()=>{g.current&&w===P.current&&R(!1)}));return w}const N=(0,p.useDebounce)(M,500);(0,s.useEffect)((()=>()=>{g.current=!1}),[]),(0,s.useEffect)((()=>{void 0===T?M():(0,t.isEqual)(T,e)||N()})),(0,s.useEffect)((()=>{if(!C)return;const e=setTimeout((()=>{_(!0)}),1e3);return()=>clearTimeout(e)}),[C]);const O=!!S,j=""===S,A=null==S?void 0:S.error;return C?(0,s.createElement)(y,a({},e,{showLoader:k}),O&&(0,s.createElement)(s.RawHTML,{className:l},S)):j||!O?(0,s.createElement)(d,e):A?(0,s.createElement)(E,a({response:S},e)):(0,s.createElement)(s.RawHTML,{className:l},S)}const y={},g=(0,c.withSelect)((e=>{const t=e("core/editor");if(t){const e=t.getCurrentPostId();if(e&&"number"==typeof e)return{currentPostId:e}}return y}))((e=>{let{urlQueryArgs:t=y,currentPostId:r,...n}=e;const o=(0,s.useMemo)((()=>r?{post_id:r,...t}:t),[r,t]);return(0,s.createElement)(E,a({urlQueryArgs:o},n))}));window&&window.wp&&window.wp.components&&(window.wp.components.ServerSideRender=(0,s.forwardRef)(((e,t)=>(function(e,t={}){const{since:r,version:n,alternative:o,plugin:l,link:a,hint:s}=t,c=`${e} is deprecated${r?` since version ${r}`:""}${n?` and will be removed${l?` from ${l}`:""} in version ${n}`:""}.${o?` Please use ${o} instead.`:""}${a?` See: ${a}`:""}${s?` Note: ${s}`:""}`;c in u||((0,i.doAction)("deprecated",e,t,c),console.warn(c),u[c]=!0)}("wp.components.ServerSideRender",{version:"6.2",since:"5.3",alternative:"wp.serverSideRender"}),(0,s.createElement)(g,a({},e,{ref:t}))))));var k=g;(0,r.registerBlockType)("rank-math/rich-snippet",{edit:function(e){var r=e.attributes,a=e.setAttributes,s=(0,o.useBlockProps)(),c=[];return r.post_id||(r.post_id=rankMath.objectID,a({post_id:rankMath.objectID})),(0,t.forEach)(r,(function(e,o){"post_id"!==o?"className"!==o&&c.push(wp.element.createElement(l.TextControl,{key:o,label:(0,n.__)((0,t.startCase)(o),"rank-math"),value:r[o],type:"string",onChange:function(e){var t={};t[o]=e,a(t)}})):c.push(wp.element.createElement(l.TextControl,{key:o,label:(0,n.__)((0,t.startCase)(o),"rank-math"),value:r[o],type:"number",min:1,step:1,onChange:function(e){var t={};t[o]=e||rankMath.objectID,a(t)}}))})),wp.element.createElement("div",s,wp.element.createElement(o.InspectorControls,null,wp.element.createElement(l.PanelBody,{title:(0,n.__)("Settings","rank-math")},c)),wp.element.createElement(k,{block:"rank-math/rich-snippet",attributes:r}))}})}();