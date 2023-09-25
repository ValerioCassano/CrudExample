window.addEventListener("onload", stars());
async function stars(){
    for(let j=1;j<=5;j++){
        if(document.getElementById("star"+j).checked==false){
            for(let i=j;i<=5;i++){
                document.getElementById("starimg"+i).setAttribute("src","/ProgettoECommerce/Immagini/star-svgrepo-com-copy.svg");
            }
        }else if(document.getElementById("star"+j).checked==true){
            document.getElementById("cmnt").innerHTML=j+" stars"
            for(let i=j;i>0;i--){
                document.getElementById("starimg"+i).setAttribute("src","/ProgettoECommerce/Immagini/star-svgrepo-com.svg");
            }
        };
    };
};
async function commento(){
    let i=event.srcElement.id.replace("commexp","");
    if(document.getElementById("comment"+i).getAttribute("class")=="card-text text-truncate"){
        document.getElementById("comment"+i).setAttribute("class","card-text");
        document.getElementById("comment"+i).setAttribute("style","max-width: 100%");
        document.getElementById(event.srcElement.id).innerHTML="&#x25B2";
    }else if(document.getElementById("comment"+i).getAttribute("class")=="card-text"){
        document.getElementById("comment"+i).setAttribute("class","card-text text-truncate");
        document.getElementById("comment"+i).setAttribute("style","max-width: 250px");
        document.getElementById(event.srcElement.id).innerHTML="&#x25BC";}
    }
    
    
    //navbar start //
    
    let navbar = document.querySelector ('#navbar');
    
    window.addEventListener('scroll',()=>{
        let scrolled = window.scrollY;
        
        
        if (scrolled>0){
            navbar.classList.add ("bg-dark");
            TransitionEvent
            
        } else{
            navbar.classList.remove("bg-dark");
        }
        
    }); 
    
    //navbar end //


    $(document).ready(function() {
        $('#carouselExampleControls').carousel();
      });
      


      