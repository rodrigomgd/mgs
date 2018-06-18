var post = (url,data,callback) =>{
    var xhttp;
    xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        callback(this);
      }
    };
    xhttp.open("post", url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(data);
  }
  
  var callback = (xhttp) => {
  return xhttp.responseText;
  }
    //FORM VALIDATION
  var formulario = () => {
    var form = $('.form-megusta'),
        formButton = $('.form-megusta button');
  
        form.submit((e)=>{
          e.preventDefault();
          formButton.attr('disabled',true).text('Aguarde...');
  
          post(form.attr('action'), form.serialize(), (dados)=>{
           let data = JSON.parse(dados.response);
           
            console.log(data);
  
            if(data.status){
            formButton.removeClass('btn-light').addClass('btn-success').text('SUCESSO!');
            }else{
              $('#return-message').text(data.message).show();
  
              setTimeout(()=>{
                $('#return-message').text('').hide();
              },5000);
            }
            setTimeout(()=>{
              formButton.attr('disabled',false).removeClass('btn-success').addClass('btn-light').text('ENVIAR');
            },5000);
  
          });
        });
  
  
  }
  
  formulario();