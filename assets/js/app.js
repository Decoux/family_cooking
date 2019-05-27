import { O_APPEND } from "constants";

$( document ).ready(function() {
    /**
     * submenu
     */
    var menuOpen = false;
    
    $('#menu-burger').click(function(){
        if(menuOpen == false){
            
                $('#main').clearQueue().animate({
                    marginTop: "30px",
                })
                $('#submenu-top').clearQueue().animate({
                    top: "0px"
                })
                $(this).fadeOut(200);
                $('#menu-closed').fadeIn(200);
                menuOpen = true;
            }
            })
    $('#menu-closed').click(function(){
        
        if(menuOpen == true){
            
            $('#main').clearQueue().animate({
                marginTop: "-175px",
            })
            $('#submenu-top').clearQueue().animate({
                top: "-100%",
            })
            
            $(this).fadeOut(200);
            $('#menu-burger').fadeIn(200);
            menuOpen = false;
        }
        })

        /**
         * Get_ingredient
         */
         var i = 1;
         $('#ingredient-btn').click(function(){
            
            $('#form_ingredient').append(' <div class=form-group id=group_ingredient' + i + '></div>');
            $('#group_ingredient' + i).append('<label id=label_ingredient' + i +' for="">Ingrédient : </label>');
            //$('label').last().attr('id', 'label_step' + j)
            $('#label_ingredient' + i).after('<input type="text" id=form_content_ingredient_'+ i +' name=form[content_ingredient] required="required" class="form-control input" />');
            $('#group_ingredient' + i).append('<label id=label_quantity' + i + ' for="">Quantité : </label>');
            $('#label_quantity' + i).after('<input type="text" id=form_ingredient_'+ i +' name=form[quantity] required="required" class="form-control input" />')
            $('#group_ingredient' + i).append($('#ingredient_delete'));
            $('#ingredient-btn-delete').attr('class', 'delete btn btn-danger col-12 mt-3');
            $('#group_ingredient' + i).after($('#ingredient-btn'));
            $('#group_ingredient' + i).after($('#ingredient-btn-delete'));
            i++
        })
        
        var j = 1;
        $('#step-btn').click(function(){
            $('#form_step').append(' <div class=form-group id=group_step' + j+ '></div>');
            $('#group_step' + j).append('<label id=label_step' + j +' for="">Etape : </label>');
            //$('label').last().attr('id', 'label_step' + j)
            $('#label_step' + j).after('<input type="text" id=form_content_step_'+ j +' name=form[content_step] required="required" class="form-control input" />');
            $('#group_step' + j).append('<label id=label_picture' + j + ' for="">Photo : </label>');
            $('#label_picture' + j).after('<input type="file" id=form_step_'+ j +' name=form[picture] required="required" class="form-control input" />')
            $('#group_step' + j).append($('#step_delete'));
            $('#step-btn-delete').attr('class', 'delete btn btn-danger col-12 mt-3');
            $('#group_step' + j).after($('#step-btn'));
            $('#group_step' + j).after($('#step-btn-delete'));
            j++
       })

       $('#step-btn-delete').click(function(){
            $(this).prev().remove();
            $(this).after($('#step-btn'));
        
       })

       $('#ingredient-btn-delete').click(function(){
        $(this).prev().remove();
        $(this).after($('#ingredient-btn'));
        })
    });
    
    
    
    
    