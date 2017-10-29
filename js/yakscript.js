window.addEventListener('scroll',function(){
    let scroll = document.documentElement.scrollTop || document.body.scrollTop,
        menu = document.querySelector('.menu')
        
    if(scroll > 300){
        menu.style.background = "rgba(34, 34, 34, 0.8)"
    }else{
        menu.style.background = "transparent"
    }
    
    
})