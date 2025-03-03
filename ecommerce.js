document.title="E-Commerce Webpage";
document.querySelector(".containerr").style.visibility="hidden";

setInterval(function table(){
   document.getElementById("date").innerHTML=new Date().toLocaleDateString();
   let a=new Date().getDay();
   switch(a){
    case 0:
        day="Sunday";
        break
    case 1:
        day="Monday";
        break    
     case 2:
         day="Tuesday";
          break  
    case 3:
        day="Wednesday";
        break
    case 4:
        day="Thusday";
        break
    case 5:
        day="Friday";
        break
    case 6:
        day="Saturday";
   }
   document.getElementById("day").innerHTML=day;
   document.getElementById("time").innerHTML=new Date().toLocaleTimeString();
},1000);

function allclear(){
    document.querySelector(".all-item").style.display="none";
    document.querySelector(".containerr").style.visibility="visible";
};
function CLEAR(){
    document.querySelector(".all-item").style.display="block";
    let user=document.getElementById("username").value;
 setInterval(function overclear(){
    if(document.getElementById("username").value==""){
        document.getElementById("log").innerHTML="Login";
       }else{
        document.getElementById("log").style.fontSize="15px"
        document.getElementById("log").innerHTML="You are logged as:"+document.getElementById("username").value;
       }
 },1000);
 document.querySelector(".containerr").style.visibility="hidden";
};

