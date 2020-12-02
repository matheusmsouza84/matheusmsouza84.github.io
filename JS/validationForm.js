$(document).ready(function(){

//$("#cpf").mask("000.000.000-00");
$("#telefone").mask("(00)00000-0000");
$("#datanasc").mask("00/00/0000");
$("#rg").mask("0000000000");
$("#cep").mask("00000000");

$("#cep").focusout(function(event){
  event.preventDefault();
        var cep = $("#cep").val();
        cep = cep.replace("-", "");

        var urlStr = "https://api.postmon.com.br/v1/cep/"+ cep;

        $.ajax({
            url: urlStr,
            method:"get",
            dataType: "json",
            success: function(data){
                    $("#endereco").val(data.logradouro);
                   
            }
          });
        })         
    });


function enviaDados(){
  var array = new Array();
  array  = $('.needs-validation').serializeArray();
 
 for (let index = 0; index < array.length; index++) {
    const element = array[index];
    
  }
  
};
     
    (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
