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
    
    
    var $ = function(selector){
        return document.querySelector(selector);
    }
    var overlayEl = $("#contact-icon");
    var form = $("#frm_form_3_container");
    var errorCatch = $(".frm_error_style");
    var succesCatch = $(".frm_message");
    
    overlayEl.onclick = function(event) {
         var div = document.createElement('div');
         var span = document.createElement('span');
            div.id = 'overlay';
            span.id = 'cross-close';
            div.appendChild(form);
            div.insertBefore(span, div.firstChild);
            span.addEventListener('click',function(){
                var divparent = $("#overlay");
                divparent.remove();
            })
            
        if (document.body.firstChild){
          document.body.insertBefore(div, document.body.firstChild);
        }
        else{
          document.body.appendChild(div);}
           form.style.display ="inherit";
        };
   
   
    if(errorCatch != null || succesCatch != null){
        overlayEl.click();
    }
    
};
    