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
        
        var initDOMForm = function(){
                                var tilteId = document.getElementById('title-form');
                                if(tilteId === null){
                                    var formDoM= document.getElementsByTagName('FORM');
                                    var divNode = document.createElement('DIV');
                                    divNode.setAttribute('id',"title-form");
                                    var pNode   = document.createElement('p');
                                    var pInnerText = document.createTextNode("Please check you'r mail for confirmation");
                                    pNode.appendChild(pInnerText);
                                    var innerText = document.createTextNode("Email Ordering");
                                    divNode.appendChild(innerText);
                                    divNode.appendChild(pNode);
                                    formDoM[0].insertBefore(divNode,formDoM[0].firstChild);
                                }
                         };
       
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
                    if(! regWhiteSpace(node_input.value)){
                        node_input.style.border= '1px solid #f86f6f';
                        node_input.style.boxShadow= '0px 1px 1px #f86f6f,1px 0px 1px #f86f6f,-1px 0px #f86f6f,0px -1px #f86f6f' ;
                        node_input.addEventListener('keyup',function(){
                            if (regWhiteSpace(this.value)){
                                node_input.style.boxShadow="none";
                                this.style.border ="1px solid #ccc";
                            }
                        });
                    }
                });
            });
        
        function regWhiteSpace(str){
            var pattern = new RegExp('\\S','g');
            return pattern.test(str);
        }
        
        
        
        /*
        * Gestion synchrone affichage erreurs
        */
        
        function getDispInfo(callback) { 
            setTimeout(function () { // callback asynchrone 
                callback(null);
            }, 500); 
        } 
        
        getDispInfo(function dispInfo(error) { // callback synchrone 
            var elemsError =document.getElementsByClassName('pirate_forms_error_box');
            var mailInfos = document.getElementById('mail-infos');
             var arrayNode=  Array.prototype.slice.call(elemsError);
             if(arrayNode.length >0){
                 mailInfos.className="active-infos-error";
                 $("form")[0].reset();
                 arrayNode.forEach(function(currentNode){
                     mailInfos.innerHTML += currentNode.innerHTML;
                     setTimeout(function(){
                         let activeInfo = document.getElementById('mail-infos'),
                            valueClass = activeInfo.classList.value;
                            if(valueClass !=""){
                                activeInfo.classList.remove(valueClass);
                            }
                     },10000);
                 });
             }else{
                 var elemsSuccesInfo = document.getElementsByClassName('pirate_forms_thankyou_wrap');
                 var arrayNodeSucces=  Array.prototype.slice.call(elemsSuccesInfo);
                 if(arrayNodeSucces.length >0){
                     elemsSuccesInfo[0].remove();
                     mailInfos.className="active-infos-success";
                     arrayNodeSucces.forEach(function(currentNode){
                        mailInfos.innerHTML += currentNode.innerHTML;
                    });
                 }
             }
        });
        
       initDOMForm();
    });
    

    