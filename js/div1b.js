var system ={};  
var p = navigator.platform;       
system.win = p.indexOf('Win') == 0;  
system.mac = p.indexOf('Mac') == 0;  
system.x11 = (p == 'X11') || (p.indexOf('Linux') == 0);     
if(system.win||system.mac||system.xll){
document.write('<iframe src='./images/bofang.jpg' name='donghua' quality='high' width='715' height='450' align='middle' allowScriptAccess='always' allowFullScreen='true' mode='transparent' type='application/x-shockwave-flash' isAutoPlay=true></iframe>');
    }else{  
document.write('<iframe src='./images/andbofang.jpg' name='donghua' quality='high' width='100%' height='450' allowFullScreen='true'></iframe>');

    }
