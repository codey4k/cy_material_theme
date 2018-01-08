window.addEventListener('scroll',function(){
    let scroll = document.documentElement.scrollTop || document.body.scrollTop,
        menu = document.getElementById('menu')
        
    if(scroll > 300){
        Object.assign(menu.style,{
            height : '60px',
            background : 'rgba(34, 34, 34, 0.8)'
        })
        // menu.style.background = "rgba(34, 34, 34, 0.8)"
    }else{
        Object.assign(menu.style,{
            height : '80px',
            background : 'transparent'
        })
        // menu.style.background = "transparent"
    }
    
})