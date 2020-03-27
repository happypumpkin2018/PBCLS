
/*

*/
var x0=0,y0=0,x1=0,y1=0,x=0,y=0; 
var moveable=false; 
//开始拖动; 
	function startDrag(obj){ 
		if(event.button==1){ 
			obj.setCapture(); 
			var win = obj.parentNode; 
			x0 = event.clientX; 
			y0 = event.clientY; 
			x1 = parseInt(win.offsetLeft); 
			y1 = parseInt(win.offsetTop); 
			moveable = true; 
		} 
	} 
//拖动; 
	function drag(obj){ 
		if(moveable){ 
			var win = obj.parentNode; 
			x = parseInt(x1 + event.clientX - x0); 
			y = parseInt(y1 + event.clientY - y0);
			pic_x=$("bigpic").style.width;
			pic_y=$("bigpic").style.height;
			pic_x=parseInt(pic_x.replace("px",""))
			pic_y=parseInt(pic_y.replace("px",""))
			div_x=$("div1").style.width;
			div_x=parseInt(div_x.replace("px",""))
			div_y=$("div1").style.height;
			div_y=parseInt(div_y.replace("px",""))
			if (x<=div_x-pic_x)
			{
				x=div_x-pic_x;
			}
			else
			{
				if (x>=0){
					x=0;
				}
			}
			if (y<=div_y-pic_y){
				y=div_y-pic_y;
			}
			else{
				if (y>=0){
					y=0;
				}
			}
			win.style.left=x;
			win.style.top =y;
		} 
	} 
//停止拖动; 
	function stopDrag(obj){ 
		if(moveable){ 
			obj.releaseCapture(); 
			moveable = false; 
		} 	
	} 
	
	function biggant(path){
		window.open(path);
	}
	function $(id){
		return document.getElementById(id);
	}
