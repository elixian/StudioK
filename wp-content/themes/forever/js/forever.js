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
              
              ev.preventDefault();
                var form = document.getElementsByTagName('form');
                form[0].reset();
             
             });

            var btn_sub = document.getElementById('pirate-forms-contact-submit');
            btn_sub.addEventListener('click',function(){
                var input_check= document.getElementsByClassName('form-control');
               var arrayNode=  Array.prototype.slice.call(input_check);
               arrayNode.forEach(function(node_input){
                  if(node_input.value == ""){
                    node_input.style.border= '1px solid red';
                    node_input.style.boxShadow= ' 0px 1px 1px #f86f6f,1px 0px 1px #f86f6f';
                }else{
                    
                }
               });
                
               
            });
        
    });
    
