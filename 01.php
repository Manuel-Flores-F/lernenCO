<!DOCTYPE html>

<html lang="en-US">
<head>
<title>LERNEN -Compiler Online</title>
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>
$(document).ready(function(){
$("#run").click(function(){
         var text = document.getElementById("textareaCode").value;
         //console.log(text);
         var parametros = {
         "data" : $('textarea#textareaCode').val()};
         $.ajax({
            type:"POST",
            url:"02.php",
            data:parametros,
            asycn:true,
            success:function(text){
            }
      });
      console.log($('textarea#textareaCode').val());
  });
});
 
</script>


<script>
if (window.addEventListener) {              
    window.addEventListener("resize", browserResize);
} else if (window.attachEvent) {                 
    window.attachEvent("onresize", browserResize);
}
var xbeforeResize = window.innerWidth;

function browserResize() {
    var afterResize = window.innerWidth;
    if ((xbeforeResize < (970) && afterResize >= (970)) || (xbeforeResize >= (970) && afterResize < (970)) ||
        (xbeforeResize < (728) && afterResize >= (728)) || (xbeforeResize >= (728) && afterResize < (728)) ||
        (xbeforeResize < (468) && afterResize >= (468)) || (xbeforeResize >= (468) && afterResize < (468))) {
        xbeforeResize = afterResize;
        
        snhb.queue.push(function(){  snhb.startAuction(["try_it_leaderboard"]); });
         
    }
    if (window.screen.availWidth <= 768) {
      restack(window.innerHeight > window.innerWidth);
    }
    fixDragBtn();
    showFrameSize();    
}

var fileID = "";
var loadSave = false;
function getSavedFile() {
    loadSave = true;
    var htmlCode;
    var paramObj = {};
    paramObj.fileid = "";
    fileID = paramObj.fileid;
    var paramA = JSON.stringify(paramObj);
    var httpA = new XMLHttpRequest();
    httpA.open("POST", globalURL, true);
    httpA.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpA.onreadystatechange = function() {
        if(httpA.readyState == 4 && httpA.status == 200) {
            document.getElementById("textareaCode").value = httpA.responseText;
            window.editor.getDoc().setValue(httpA.responseText);
            loadSave = false;
        }
    }
    httpA.send(paramA);   
}

function retheme() {
  var cc = document.body.className;
  if (cc.indexOf("darktheme") > -1) {
    document.body.className = cc.replace("darktheme", "");
  } else {
    document.body.className += " darktheme";
  }
}

</script>

<style>
        * {
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          box-sizing: border-box;
        }
        body {
          color:#9a5d3e;
          margin:0px;
          font-size:100%;
          background-color:#4b5c6a;
        }
        .trytopnav {
          height:40px;
          overflow:hidden;
          min-width:380px;
          position:absolute;
          width:100%;
          top:99px;
          background-color:#364368;
        }
        .trytopnav a {
          color:##9a5d3e;
        }
        .w3-bar .w3-bar-item:hover {
          color:#757575 !important;
        }
        a.w3schoolslink {
          padding:0 !important;
          display:inline !important;
        }
        a.w3schoolslink:hover,a.w3schoolslink:active {
          text-decoration:underline !important;
          background-color:fbfbe3 !important;
        }
        #dragbar{
          position:absolute;
          cursor: col-resize;
          z-index:3;
          padding:5px;
        }
        #shield {
          display:none;
          top:0;
          left:0;
          width:100%;
          position:absolute;
          height:100%;
          z-index:4;
        }
        #framesize span {
          font-family:Consolas, monospace;
        }
        #container {
          background-color:#313f4f;
          width:100%;
           overflow:auto;
          position:absolute;
          top:138px;
          bottom:0;
          height:auto;
        }
        #textareacontainer, #iframecontainer {
          float:left;
          height:80%;
          width:50%;
        }
        #textarea, #iframe {
          height:100%;
          width:80%;
          padding-bottom:10px;
          padding-top:1px;
        }
        #textarea {
          padding-left:10px;
          padding-right:5px;  
        }
        #iframe {
          padding-left:5px;
          padding-right:10px;  
        }
        #textareawrapper {
          width:100%;
          height:100%;
          background-color: #fbfbe3;
          position:relative;
          box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }
        #iframewrapper {
          width:100%;
          height:100%;
          -webkit-overflow-scrolling: touch;
          background-color: #f2faec;
          box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }
        #textareaCode {
          background-color: #e4f4f3;
          font-family: consolas,"courier new",monospace;
          font-size:15px;
          height:100%;
          width:100%;
          padding:8px;
          resize: none;
          border:none;
          line-height:normal;    
        }
        .CodeMirror.cm-s-default {
          line-height:normal;
          padding: 4px;
          height:100%;
          width:100%;
        }
        #iframeResult, #iframeSource {
          background-color: #fbfbe3;
          height:100%;
          width:100%;  
        }
        #stackV {background-color:#9a5d3e;}
        #stackV:hover {background-color:##9a5d3e!important;}
        #stackV.horizontal {background-color:transparent;}
        #stackV.horizontal:hover {background-color:##9a5d3e !important;}
        #stackH.horizontal {background-color:##9a5d3e;}
        #stackH.horizontal:hover {background-color:##9a5d3e !important;}
        #textareacontainer.horizontal,#iframecontainer.horizontal{
          height:50%;
          float:none;
          width:100%;
        }
        #textarea.horizontal{
        margin:0 auto;
          height:100%;
          padding-left:10px;
          padding-right:10px;
        }
        #iframe.horizontal{
          height:100%;
          padding-right:10px;
          padding-bottom:10px;
          padding-left:10px;  
        }
        #container.horizontal{
          min-height:200px;
          margin-left:0;
        }
        #tryitLeaderboard {
          overflow:hidden;
          text-align:center;
          margin-top:5px;
          height:90px;
        }
          .w3-dropdown-content {width:350px}
          
        @media screen and (max-width: 727px) {
          .trytopnav {top:70px;}
          #container {top:108px;}
        
        }
        @media screen and (max-width: 467px) {
          .trytopnav {top:60px;}
          #container {top:98px;}
          .w3-dropdown-content {width:100%}
        }
        @media only screen and (max-device-width: 768px) {
          #iframewrapper {overflow: auto;}
          #container     {min-width:320px;}
          .stack         {display:none;}
          #tryhome       {display:block;}
        }
        
        @font-face {
        font-family: 'fontawesome';
        src:url('../lib/fonts/fontawesome.eot?14663396');
        src:url('../lib/fonts/fontawesome.eot?14663396#iefix') format('embedded-opentype'),
            url('../lib/fonts/fontawesome.woff?14663396') format('woff'),
            url('../lib/fonts/fontawesome.ttf?14663396') format('truetype'),
            url('../lib/fonts/fontawesome.svg?14663396#fontawesome') format('svg');
        font-weight:normal;
        font-style:normal;
        }
        .fa {
          display:inline-block;
          font:normal normal normal 14px/1 FontAwesome;
          font-size:inherit;
          text-rendering:auto;
          -webkit-font-smoothing:antialiased;
          -moz-osx-font-smoothing:grayscale;
          transform:translate(0,0);
        }
        .fa-2x {
          font-size:2em;
        }
        .fa-home:before {content: '\e800'; }
        .fa-save:before {content: '\e804'; }
        .fa-rotate:before {content: '\e813'; }
        .fa-menu:before { content: '\f0c9'; }
        .fa-adjust:before { content: '\e80b'; }
        .loader {
            border: 6px solid #f3f3f3; /* Light grey */
            border-top: 6px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 2s linear infinite;
        }
        #saveLoader {
            margin:20px;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        #iframewrapper {
            
        }
        
        body.darktheme {
          background-color:rgb(40, 44, 52);
        }
        body.darktheme #tryitLeaderboard{
          background-color:rgb(40, 44, 52);
        }
        body.darktheme .trytopnav{
          background-color:#616161;
          color:#dddddd;
        }
        body.darktheme #container {
          background-color:#616161;
        }
        body.darktheme .trytopnav a {
          color:#dddddd;
        }
        body.darktheme ::-webkit-scrollbar {width:12px;height:3px;}
        body.darktheme ::-webkit-scrollbar-track-piece {background-color:#000;}
        body.darktheme ::-webkit-scrollbar-thumb {height:50px;background-color: #616161;}
        body.darktheme ::-webkit-scrollbar-thumb:hover {background-color: #aaaaaa;}
        </style>

</head>
<body>
<img margin-left="-50px" src="images/01.png"> 
Compiler Online

<div class="trytopnav">

  <button id="run" class="w3-button w3-bar-item w3-green w3-hover-white w3-hover-text-green" style="font-size:16px;" onclick="submitTryit(1);snhb.startAuction(['try_it_leaderboard']);">Run &raquo;</button>
  
<div class="w3-bar" style="overflow:auto">
  <span class="w3-right w3-hide-medium w3-hide-small" style="padding:8px 8px 8px 8px;display:block"></span>
  <span class="w3-right w3-hide-small" style="padding:8px 0;display:block;float:right;"><span id="framesize"></span></span>
</div>

</div>
<div id="shield"></div>

<a href="javascript:void(0)" id="dragbar"></a>
<div id="container">

<div id="menuOverlay" class="w3-overlay w3-transparent" style="cursor:pointer;z-index:4"></div>

  <div id="textareacontainer">
   <div name="miiframe" height="40vh"  ><h1>Input</h1></div>

    <div id="textarea">
      <div id="textareawrapper">
        <textarea autocomplete="off" id="textareaCode" wrap="logical" spellcheck="false">
            
</textarea>
       </div>
    </div>
  </div>
  <div id="iframecontainer">
     <div name="miiframe" height="40vh"  ><h1>Output</h1></div>
     <iframe name="miiframe" height="40vh"  ></iframe>
  <a href="03.php" target="miiframe" id="boton"></a>
      
  <div id="iframe">

  

      <div id="iframewrapper"></div>

    </div>

  </div>
  
</div>


<script>
submitTryit()




function submitTryit(n) {
  if (window.editor) {
    window.editor.save();
  }
  var text = document.getElementById("textareaCode").value;
  var ifr = document.createElement("iframe");
  ifr.setAttribute("frameborder", "0");
  ifr.setAttribute("id", "iframeResult");
  ifr.setAttribute("name", "iframeResult");  
  document.getElementById("iframewrapper").innerHTML = "Procesando";
  document.getElementById("iframewrapper").appendChild(ifr);
  if (loadSave == true ) {
    ifr.setAttribute("src", "/code/opentext.htm");
  } else if (fileID != "" && loadSave == false) {
    var t=text;
    t=t.replace(/=/gi,"w3equalsign");
    t=t.replace(/\+/gi,"w3plussign");    
    var pos=t.search(/script/i)
    while (pos>0) {
      t=t.substring(0,pos) + "w3" + t.substr(pos,3) + "w3" + t.substr(pos+3,3) + "tag" + t.substr(pos+6);
	    pos=t.search(/script/i);
    }
    document.getElementById("code").value=t;
    document.getElementById("codeForm").action = "https://tryit.w3schokkkkols.com/tryit_vieiw.php?x=" + Math.random();
    document.getElementById('codeForm').method = "post";
    document.getElementById('codeForm').acceptCharset = "utf-8";
    document.getElementById('codeForm').target = "iframeResult";
    document.getElementById("codeForm").submit();
    
  } else {

    var ifrw = (ifr.contentWindow) ? ifr.contentWindow : (ifr.contentDocument.document) ? ifr.contentDocument.document : ifr.contentDocument;
    
    ifrw.document.open();
    ifrw.document.write(text);  
    ifrw.document.close();
     //23.02.2016: contentEditable is set to true, to fix text-selection (bug) in firefox.
    //(and back to false to prevent the content from being editable)
    //(To reproduce the error: Select text in the result window with, and without, the contentEditable statements below.)  
    if (ifrw.document.body && !ifrw.document.body.isContentEditable) {
      ifrw.document.body.contentEditable = true;
      ifrw.document.body.contentEditable = false;

    }
  }
  
  document.getElementById('boton').click();
}



</script>

</body>
</html>
