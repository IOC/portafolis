YUI.add("moodle-tinymce_mathslate-textool",function(e,t){M.tinymce_mathslate=M.tinymce_mathslate||{};var n=M&&M.tinymce_mathslate||{};n.TeXTool=function(t,n){var r=e.Node.create('<input type="text">'),i=e.Node.create("<span>\\[ \\]</span>");n&&i.on("click",function(){n(i.json)}),e.one(t).appendChild(r),e.one(t).appendChild(i),r.focus();var s=new e.DD.Drag({node:i});s.on("drag:end",function(){this.get("node").setStyle("top","0"),this.get("node").setStyle("left","0")}),i.toMathML=function(e){var t,n=window.MathJax.Hub.getAllJax(this.generateID())[0];try{t=n.root.toMathML("")}catch(r){if(!r.restart)throw r;return window.MathJax.Callback.After(["toMathML",this,n,e],r.restart)}window.MathJax.Callback(e)(t)},r.on("change",function(){var t=window.MathJax.Hub.getAllJax(i.generateID())[0],r=this.getDOMNode().value;if(!t)return;var o="";window.MathJax.Hub.Queue(["Text",t,this.getDOMNode().value]);var u=function(e){if(/<mtext mathcolor="red">/.test(e)||/<merror/.test(e))return;e=e.replace(/$\s+/mg," ");var t=e.replace(/^\s*<([a-z]*).*/,"$1");e=e.replace(/^\s*<[a-z]*/,""),o+='["'+t+'", {';while(e.trim().search(">")>1)o+=e.replace(/^ *([a-z]*) *= *"([^"]*)".*/,'"$1": "$2"'),e=e.replace(/^ *([a-z]*) *= *"([^"]*)"/,""),e.trim().search(">")>1&&(o+=", ");if(e.trim().match("^/>"))return o+="}]",e.trim().replace("/>","");o+="}, ",e=e.replace(/^ *>/,"");if(e.replace(new RegExp("^ *([^<]*).*"),"$1"))o+='"'+e.replace(/<.*/,"")+'"',e=e.replace(/^ *[^<]*/,""),e.trim().search("<!--")===0&&(e=e.replace(/<!--[^>]*-->/,""));else{o+="[";while(e.trim().search("</"+t+">")!==0)e=u(e),e.trim().search("</"+t+">")!==0&&(o+=", ");o+="]"}return o+="]",e.replace("</"+t+">","")};window.MathJax.Hub.Queue(["toMathML",i,u]),window.MathJax.Hub.Queue(function(){if(o==="")return;i.json=e.JSON.stringify(["mrow",{tex:[r]},e.JSON.parse(o)[2]]),s.set("data",i.json),n(i.json)})})}},"@VERSION@",{requires:["dd-drag","dd-proxy","dd-drop","event","json"]});
