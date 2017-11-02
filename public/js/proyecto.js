// validation function 
 function validacionN() {
    var n = document.getElementById("nombre");
    var p =  /^([A-z][a-zñáéíóú]+[\s]*)+$/;

    if( p.test(n.value)){
    n.style.backgroundColor = "#D7F1C7";
    return true;
    
    }

    else{ 
        n.value = "";
        n.placeholder = "nombre invalido";
        n.style.backgroundColor = "#F0B0BE";
        return
        }        
}

function validacionAp() {
    var ap = document.getElementById("apellido");
    var p =  /^([A-z][a-zñáéíóú]+[\s]*)+$/;

    if(p.test(ap.value)){
      ap.style.backgroundColor = "#D7F1C7";
     
    }

    else{ 
        ap.value = "";
        ap.placeholder = "apellido invalido";
        ap.style.backgroundColor = "#F0B0BE";
        return

        }   
      }

function validacionE() {
  var e = document.getElementById("email");
  var ex = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;

  if (ex.test(e.value)){
    e.style.backgroundColor = "#D7F1C7";
  }
  else{
    e.value = "";
    e.placeholder = "email invalido";
    e.style.backgroundColor = "#F0B0BE";
    return
  }
}

function validacionM() {
  var o = document.getElementById("mensje");

  if (o.value != ""){
    o.style.backgroundColor = "#D7F1C7";
  }
  else{
    o.value = "";
    o.placeholder = "mensaje invalido";
    o.style.backgroundColor = "#F0B0BE";
    return
  }
}
// send email function
var myform = $("form#myform");
myform.submit(function(event){
  event.preventDefault();

  // Change to your service ID, or keep using the default service
  var service_id = "alexander";
  var template_id = "pruebaemail_js";

  myform.find("button").text("Sending...");
  emailjs.sendForm(service_id,template_id,"myform")
    .then(function(){ 
      alert("Sent!");
       myform.find("button").text("Send");
    }, function(err) {
       alert("Send email failed!\r\n Response:\n " + JSON.stringify(err));
       myform.find("button").text("Send");
    });
  return false;
});


/*deshabilitar el enter de los input*/
function stopRKey(evt) {
var evt = (evt) ? evt : ((event) ? event : null);
var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
if ((evt.keyCode == 13) && (node.type=="text")) {return false;}
}
document.onkeypress = stopRKey; 





