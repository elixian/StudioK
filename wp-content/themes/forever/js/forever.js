var forever = forever || {};
/*
forever.init = (function (){
    var g = 1;
     var drop = function () { return  console.log('drop');}
    return {
        call: drop
    }
})() ;*/


        /*
        *      set Pollyfill ForEach
        */
        
   Array.prototype.forEach= function(callback,thisArg){
            if(typeof (callback) !== "function"){
                new TypeError(callback + " is not a function!");
            }
            var _l = this.length;
            for(var i = 0; i < _l; i++) {
                 callback.call(thisArg, this[i], i, this)
            }
        }
        

    jQuery(document).ready(function($) {
       
          $('#cross-close').click( function (ev) {
              debugger;
               ev.preventDefault();
                 $("#tooltip").children().unwrap();
                 $("#form_contact2")[0].reset();
               
             
             });
       
   
        forever.validateForm = (function(){
            var  val = function (elem){
                        var parentEl = elem.parent().get(0).tagName;
                        if(elem.val()==""){
                           if (parentEl != "SPAN") {
                               elem.wrap("<span id='tooltip'  data-tooltip='"+elem.attr('data-reqmsg')+"'></span>");
                               setTimeout(function(){
                                   $("#tooltip").addClass("tooltip-hide");
                               },3000);
                              
                           }
                           
                            elem.focus();
                        }
                    };

            return{
                
                val:val
            }
            
            function validateEmail(email) {
                  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                  return re.test(email);
            }
        })();
        
        
        
        $("fieldset").focusin(function(evt){
            $(evt.target).blur(function(){
                evt.stopPropagation();
              forever.validateForm.val($(evt.target)); 
            });
        });
        
    });
    
   