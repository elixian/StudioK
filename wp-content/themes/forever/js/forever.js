var forever = forever || {};

forever.init = (function (){
    var g = 1;
     var drop = function () { return  console.log('drop');}
    return {
        call: drop
    }
})() ;

forever.init.call();

window.onload = function(){
    
   
    var $$ = function(selector){
        return document.querySelector(selector);
    }
    var overlayEl = $$("#contact-icon");
    var form = $$("#frm_form_3_container");
    var errorCatch = $$(".frm_error_style");
    var succesCatch = $$(".frm_message");


        $("#myModal").modal({"backdrop": "static"});

 
    
    
};
    