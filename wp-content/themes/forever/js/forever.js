var forever = forever || {};
/*
forever.init = (function (){
    var g = 1;
     var drop = function () { return  console.log('drop');}
    return {
        call: drop
    }
})() ;*/


    jQuery(document).ready(function($) {
       
        
       $('#cross-close').click( function () {
           
                $("#wpforms-form-68")[0].reset();
        });
        
        forever.validateForm = (function(){
            var inputs =  document.getElementById("form_contact2").getElementsByTagName("input");
            var inputsReq = new Array();
            for (var i = 0, c = inputs.length; i < c; i++) {
               var styles =  window.getComputedStyle(inputs[i]);
               if(styles.display !== 'none'){
                   inputsReq.push($(inputs[i]))
                   
               }
            }
      
                $.each(inputsReq,function(i){
                     
                          val($(this),i);
                        
                });  
            
            function val(elem,i){
                    
                    elem.blur(()=>{
                        if(elem.val()==""){
                            elem.wrap("<span data-tooltip='"+elem.attr('data-reqmsg')+"'></span>");
                            elem.focus();
                            console.log("out "+ i)
                        }
                    })
                
            }
            
           
            
            
            function validateEmail(email) {
                  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                  return re.test(email);
            }
        })();
        
        forever.validateForm;
    });
    
   