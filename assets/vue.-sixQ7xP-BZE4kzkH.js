import{l as d,u as f,j as i,m as p,n as v,p as h,q as y,s as m,v as b}from"./app-CNT7NUER.js";let g;function w(){return g}function _(e){return typeof e=="function"?e():f(e)}function r(e){if(e instanceof Promise||e instanceof Date||e instanceof RegExp)return e;const n=_(e);if(!e||!n)return n;if(Array.isArray(n))return n.map(t=>r(t));if(typeof n=="object"){const t={};for(const o in n)if(Object.prototype.hasOwnProperty.call(n,o)){if(o==="titleTemplate"||o[0]==="o"&&o[1]==="n"){t[o]=f(n[o]);continue}t[o]=r(n[o])}return t}return n}const j="usehead",u=typeof globalThis<"u"?globalThis:typeof window<"u"?window:typeof global<"u"?global:typeof self<"u"?self:{},c="__unhead_injection_handler__";function H(){return c in u?u[c]():d(j)||w()}function T(e,n={}){const t=n.head||H();if(t)return t.ssr?t.push(e,n):A(t,e,n)}function A(e,n,t={}){const o=i(!1),a=i({});p(()=>{a.value=o.value?{}:r(n)});const s=e.push(a.value,t);return v(a,l=>{s.patch(l)}),b()&&(h(()=>{s.dispose()}),y(()=>{o.value=!0}),m(()=>{o.value=!1})),s}export{T as u};
