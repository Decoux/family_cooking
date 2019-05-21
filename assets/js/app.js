$( document ).ready(function() {
    var menuOpen = false;

    

        if(menuOpen == false){

            $('#menu-burger').click(function(){
                $('#menu-left').clearQueue().animate({
                    left: "0",
                    width: "200px",
                    height: "100vh"
                })
                $('body').css({
                    overflow: 'hidden',
                    height: '100%'
                });
                $(this).fadeOut(200);
                $('#menu-closed').fadeIn(200);
            })

            menuOpen = true;

        }

        if(menuOpen == true){

            $('#menu-closed').click(function(){
                $('#menu-left').clearQueue().animate({
                    left: "-250px",
                })
                $(this).fadeOut(200);
                $('#menu-burger').fadeIn(200);
            })
        }
    
    
});

    


