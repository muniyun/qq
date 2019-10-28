function setTab(name,cursel,n){ 
for(i=1;i<=n;i++){ 
var menu=document.getElementById(name+i); 
var con=document.getElementById("con_"+name+"_"+i); 
menu.className=i==cursel?" ":""; 
con.style.display=i==cursel?"block":"none"; 


} 
}

function cona(){
document.getElementById('con_menu_1').style.display='block';
}
function conb(){
document.getElementById('con_menu_2').style.display='block';
}
function conc(){
document.getElementById('con_menu_3').style.display='block';
}
function cond(){
document.getElementById('con_menu_4').style.display='block';
}
function cone(){
document.getElementById('con_menu_5').style.display='block';
}
function conf(){
document.getElementById('con_menu_6').style.display='block';
}
function cong(){
document.getElementById('con_menu_7').style.display='block';
}
function conh(){
document.getElementById('con_menu_8').style.display='block';
}
function coni(){
document.getElementById('con_menu_9').style.display='block';
}
function conj(){
document.getElementById('con_menu_10').style.display='block';
}
 
function conk(){
document.getElementById('con_menu_11').style.display='block';
}
 




function GetQueryString(name) {  
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");  
    var r = window.location.search.substr(1).match(reg);  //获取url中"?"符后的字符
    var context = "";  
    if (r != null)  
         context = r[2];  
    reg = null;  
    r = null;  
    return context == null || context == "" || context == "undefined" ? "" : context;  
}
if(GetQueryString("f")==1){
	document.write("<body onload='cona()'>");
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
	document.write("<body onload='conh()'>");
}
if(GetQueryString("f")==9){
	document.write("<body onload='coni()'>");
}
if(GetQueryString("f")==10){
	document.write("<body onload='conj()'>");
}
if(GetQueryString("f")==11){
	document.write("<body onload='conk()'>");
}
