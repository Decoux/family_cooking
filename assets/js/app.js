$( document ).ready(function() {
    var menuOpen = false;
    

    
    $('#menu-burger').click(function(){
        if(menuOpen == false){
                $('#submenu-top').clearQueue().animate({
                    top: "0px"
                })
                $(this).fadeOut(200);
                $('#menu-closed').fadeIn(200);
                $('#menu-closed').show();
                menuOpen = true;
            }
            })
            

        

        
        
        $('#menu-closed').click(function(){
            
            if(menuOpen == true){
             
                
                $('#submenu-top').clearQueue().animate({
                    top: "-180px",
                })
                $(this).fadeOut(200);
                $('#menu-burger').fadeIn(200);
                menuOpen = false;
            }
            })

    
    
});

    


