//alert('jajaja si estan enlazados con login.js y login.php')
const formulario = document.querySelector('#formulario');
const correo = document.querySelector('#correo');
const clave = document.querySelector('#clave');


const errorCorreo = document.querySelector('#errorCorreo');
const errorClave = document.querySelector('#errorClave');

document.addEventListener('DOMContentLoaded', function () {
  formulario.addEventListener('submit', function (e) {
    e.preventDefault();
    errorCorreo.textContent = '';
    errorClave.textContent = '';
    if (correo.value == '') {
      errorCorreo.textContent = 'el correo es requerido';

    } else if (clave.value == '') {
      errorClave.textContent = 'la clave es requerido';

    } else {
      const url = base_url + 'home/validar';
      // crear for data
      const data = new FormData(this);
      //hacer una instancia al objeto XMLHTTpRequest
      const http = new XMLHttpRequest();
      //abrir una conexion  -POS -GET
      http.open('POST', url, true);
      //ENVIAR DATOS
      http.send(data);
      //VERIFICAR ESTADOS
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          Swal.fire(res.msg);
          if (res.type == 'success') {
              setTimeout(() => {
                
                let timerInterval;
                Swal.fire({
                  title: res.msg,
                  html: "se redireccionara en <b></b> milliseconds.",
                  timer: 2000,
                  timerProgressBar: true,
                  didOpen: () => {
                    Swal.showLoading();
                    const timer = Swal.getPopup().querySelector("b");
                    timerInterval = setInterval(() => {
                      timer.textContent = `${Swal.getTimerLeft()}`;
                    }, 100);
                  },
                  willClose: () => {
                    clearInterval(timerInterval);
                  }
                }).then((result) => {
                  /* Read more about handling dismissals below */
                  if (result.dismiss === Swal.DismissReason.timer) {
                    window.location = base_url + 'admin';
                  }
                });


              }, 2000);

          

           

          }
          //alert(res.msg);



        }
      }

    }


  });

})