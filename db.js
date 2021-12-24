
let arabic = document.getElementById("arabic");
let english = document.getElementById("english");
let home = document.getElementById("home");
arabic.onclick = ()=>{
	
	
	set("arabic");
	
	
}


english.onclick = ()=>{
	
	
	set("english");
	
	
}
function set(set){
	
	
	if(set==="arabic"){
	   
		
		home.innerHTML ="الرئيسية";
	   
	   
	   
	   }else if(set==="english"){
				
				
				home.innerHTML ="Home";
				
				}
	
	
	
	
	
} 