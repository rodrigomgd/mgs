var post=(e,t,s)=>{var a;(a=new XMLHttpRequest).onreadystatechange=function(){4==this.readyState&&200==this.status&&s(this)},a.open("post",e,!0),a.setRequestHeader("Content-type","application/x-www-form-urlencoded"),a.send(t)},callback=e=>e.responseText,formulario=()=>{var e=$(".form-megusta"),t=$(".form-megusta button");e.submit(s=>{s.preventDefault(),t.attr("disabled",!0).text("Aguarde..."),post(e.attr("action"),e.serialize(),e=>{let s=JSON.parse(e.response);console.log(s),s.status?t.removeClass("btn-light").addClass("btn-success").text("SUCESSO!"):($("#return-message").text(s.message).show(),setTimeout(()=>{$("#return-message").text("").hide()},5e3)),setTimeout(()=>{t.attr("disabled",!1).removeClass("btn-success").addClass("btn-light").text("ENVIAR")},5e3)})})};formulario();