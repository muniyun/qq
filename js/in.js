<!-- 
function setTab(name,cursel,n){ 
for(i=1;i<=n;i++){ 
var menu=document.getElementById(name+i); 
var con=document.getElementById("con_"+name+"_"+i); 
menu.className=i==cursel?" ":""; 
con.style.display=i==cursel?"block":"none"; 


} 
}
 
//-->
function cona(){
document.getElementById('con_menu_2').style.display='block';
}
function conb(){
document.getElementById('con_menu_3').style.display='block';
}
function conc(){
document.getElementById('con_menu_4').style.display='block';
}
function cond(){
document.getElementById('con_menu_5').style.display='block';
}
function cone(){
document.getElementById('con_menu_6').style.display='block';
}
function conf(){
document.getElementById('con_menu_7').style.display='block';
}
function cong(){
document.getElementById('con_menu_8').style.display='block';
}
function conh(){
document.getElementById('con_menu_1').style.display='block';
}
function coni(){
document.getElementById('con_menu_9').style.display='block';
}
function conj(){
document.getElementById('con_menu_10').style.display='block';
}
 //&#24179;&#21488;&#12289;&#35774;&#22791;&#21644;&#25805;&#20316;&#31995;&#32479;  
var system ={  
win : false,  
mac : false,  
xll : false  
};  
//&#26816;&#27979;&#24179;&#21488;  
var p = navigator.platform;  
system.win = p.indexOf("Win") == 0;  
system.mac = p.indexOf("Mac") == 0;  
system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);  
//&#36339;&#36716;&#35821;&#21477;&#65292;&#22914;&#26524;&#26159;&#25163;&#26426;&#35775;&#38382;&#23601;&#33258;&#21160;&#36339;&#36716;&#39029;&#38754;  
if(system.win||system.mac||system.xll){  
}else{  
window.location.href="wap.html";  
}  

</script> 
</head>
 <body>
 <script>
 function GetQueryString(name) {  
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");  
    var r = window.location.search.substr(1).match(reg);  //获取url中"?"符后的字符串并正则匹配
    var context = "";  
    if (r != null)  
         context = r[2];  
    reg = null;  
    r = null;  
    return context == null || context == "" || context == "undefined" ? "" : context;  
}
if(GetQueryString("f")==1){
	document.write("<body onload='cona()'>");//2
}
if(GetQueryString("f")==2){
	document.write("<body onload='conb()'>");
}
if(GetQueryString("f")==3){
	document.write("<body onload='conc()'>");
}
if(GetQueryString("f")==4){
	document.write("<body onload='cond()'>");
}
if(GetQueryString("f")==5){
	document.write("<body onload='cone()'>");
}
if(GetQueryString("f")==6){
	document.write("<body onload='conf()'>");
}
if(GetQueryString("f")==7){
	document.write("<body onload='cong()'>");
}
if(GetQueryString("f")==8){
	document.write("<body onload='conh()'>");//1
}
if(GetQueryString("f")==9){
	document.write("<body onload='coni()'>");
}
if(GetQueryString("f")==10){
	document.write("<body onload='conj()'>");
}
