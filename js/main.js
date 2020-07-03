// JavaScript Document


//设置跑马灯
var msg="   欢迎来到我的个人网站    ";
var interval = 400;//跑动的速度
var seq = 0;
function LenScroll(){
	document.nextForm.lenText.value = msg.substring(seq, msg.length) + " " + msg;
	seq++;
	if(seq > msg.length)
	seq = 0;
	window.setTimeout("LenScroll();",interval);
}

//返回顶部按钮
window.onscroll=function(){
	 if(document.body.scrollTop||document.documentElement.scrollTop>0){
		  document.getElementById('rTop').style.display="block" 
		  }else{
			   document.getElementById('rTop').style.display="none" 
			   } 
}

//自动更换照片
var imglist=new Array(3)//图片个数
imglist[0]="img/26.jpg";  //第一个图片的地址
imglist[1]="img/25.jpg";
imglist[2]="img/27.jpg";
var i=0;
function changeimg()
{
 if(i==imglist.length)
 {
  i=0;
 }
 document.getElementById("ChangePic").src=imglist[i];
 ++i;
}
window.setInterval("changeimg()",2000)//1000等于1秒

//鼠标移动时改变图片焦点
function visible(obj,i)
{ 
if (i==0) {
	obj.style.filter='alpha(opacity=100)'; 
	obj.style.opacity=1;
}else{ 
	obj.style.filter="alpha(opacity=40)";
	obj.style.opacity=0.4;
}
}

window.onload = function(){
	//Growing中的图片移动
	var oDiv=document.getElementById("move");
	var oUl=oDiv.getElementsByTagName("ul")[0];
	var aLi=oUl.getElementsByTagName("li");
	oUl.innerHTML+=oUl.innerHTML;
	oUl.style.width=aLi[0].offsetWidth*aLi.length+'px';
	function move(){
		if(oUl.offsetLeft<-oUl.offsetWidth/2){
			oUl.style.left='0';
			}
		oUl.style.left=oUl.offsetLeft-2+'px';
	}
	var time=setInterval(move,15)
	oDiv.onmouseover=function(){
		clearInterval(time);
		}
	oDiv.onmouseout=function(){
		time=setInterval(move,15)
}
	//颜色渐变文字
function Delta(sHex1,sHex2,iNum){
	//计算每个字的变化量
	var iHex1=parseInt("0x"+sHex1);
	var iHex2=parseInt("0x"+sHex2);
	return (iHex2-iHex1)/(iNum-1);				
}
			
			
	var  color=document.getElementById("colorful");
	var sText=color.innerText;
	var sColor1="ff3300";
	var sColor2="3366ff";
	var fDeltaR=Delta(sColor1.substring(0,2),sColor2.substring(0,2),sText.length);
	var fDeltaG=Delta(sColor1.substring(2,4),sColor2.substring(2,4),sText.length);
	var fDeltaB=Delta(sColor1.substring(4,6),sColor2.substring(4,6),sText.length);
	var sColorR=parseInt("0x"+sColor1.substring(0,2));
	var sColorG=parseInt("0x"+sColor1.substring(2,4));
	var sColorB=parseInt("0x"+sColor1.substring(4,6));
				
	var turn; 
	color.innerHTML="";
	for(var i=0;i<sText.length;i++){
		turn="<font style='color:rgb("+Math.round(sColorR)+","+Math.round(sColorG)+","+Math.round(sColorB)+");'>"+sText.substring(i,i+1)+"</font>";
		color.innerHTML+=turn;
		sColorR+=fDeltaR;
		sColorG+=fDeltaG;
		sColorB+=fDeltaB;
					
	
}
function Delta(sHex1,sHex2,iNum){
	//计算每个字的变化量
	var iHex1=parseInt("0x"+sHex1);
	var iHex2=parseInt("0x"+sHex2);
	return (iHex2-iHex1)/(iNum-1);				
}
			
			
	var  color=document.getElementById("colorful1");
	var sText=color.innerText;
	var sColor1="3366ff";
	var sColor2="16e905";
	var fDeltaR=Delta(sColor1.substring(0,2),sColor2.substring(0,2),sText.length);
	var fDeltaG=Delta(sColor1.substring(2,4),sColor2.substring(2,4),sText.length);
	var fDeltaB=Delta(sColor1.substring(4,6),sColor2.substring(4,6),sText.length);
	var sColorR=parseInt("0x"+sColor1.substring(0,2));
	var sColorG=parseInt("0x"+sColor1.substring(2,4));
	var sColorB=parseInt("0x"+sColor1.substring(4,6));
				
	var turn; 
	color.innerHTML="";
	for(var i=0;i<sText.length;i++){
		turn="<font style='color:rgb("+Math.round(sColorR)+","+Math.round(sColorG)+","+Math.round(sColorB)+");'>"+sText.substring(i,i+1)+"</font>";
		color.innerHTML+=turn;
		sColorR+=fDeltaR;
		sColorG+=fDeltaG;
		sColorB+=fDeltaB;
					
	
}
function Delta(sHex1,sHex2,iNum){
	//计算每个字的变化量
	var iHex1=parseInt("0x"+sHex1);
	var iHex2=parseInt("0x"+sHex2);
	return (iHex2-iHex1)/(iNum-1);				
}
			
			
	var  color=document.getElementById("colorful2");
	var sText=color.innerText;
	var sColor1="16e905";
	var sColor2="e905e1";
	var fDeltaR=Delta(sColor1.substring(0,2),sColor2.substring(0,2),sText.length);
	var fDeltaG=Delta(sColor1.substring(2,4),sColor2.substring(2,4),sText.length);
	var fDeltaB=Delta(sColor1.substring(4,6),sColor2.substring(4,6),sText.length);
	var sColorR=parseInt("0x"+sColor1.substring(0,2));
	var sColorG=parseInt("0x"+sColor1.substring(2,4));
	var sColorB=parseInt("0x"+sColor1.substring(4,6));
				
	var turn; 
	color.innerHTML="";
	for(var i=0;i<sText.length;i++){
		turn="<font style='color:rgb("+Math.round(sColorR)+","+Math.round(sColorG)+","+Math.round(sColorB)+");'>"+sText.substring(i,i+1)+"</font>";
		color.innerHTML+=turn;
		sColorR+=fDeltaR;
		sColorG+=fDeltaG;
		sColorB+=fDeltaB;
					
	
}
}

