<div id="modalIniciarSesion" class="modal-login">
    <div class="modal-content-login">
        <h4><strong>Iniciar sesión</strong></h4><br>
        <div class="row">
            <div class="col-sm-12">
                <label>Usuario</label>
                <input type="text" name="usuario_sesion_acceder" id="usuario_sesion_acceder" class="form-control"><br>
                <label>Contraseña</label>
                <input type="password" name="contrasena_sesion_acceder" id="contrasena_sesion_acceder" class="form-control"><br>
                <div id="error_usuario" style="color: red; margin-bottom: 18px;">Usuario inválido</div>
            </div>
        </div>

        <div class="row">
            <button class="btn btn-success" onclick="iniciarSesion();">Acceder</button>
        </div>
    </div>
</div>

<script text?>

    $(document).ready(function() {
        
        $("#error_usuario").hide();

        if(!validarSesion()){
            modalIniciarSesion();
        }
        else{
        }
        
    });

    function modalIniciarSesion(){
        var modal = document.getElementById('modalIniciarSesion');
        modal.style.display = "block";

    }

    function validarSesion(){
        if(getCookie("nombre") == null || getCookie("contrasena") == null){
            modalIniciarSesion();
            return false;
        }

        return true;
    }

    function obtenerDatosSesion(){
        if(getCookie("nombre") != null && getCookie("contrasena") != null){
            return {'usuario':getCookie("nombre"),'contrasena': getCookie("contrasena")}
        }

        return null;
    }

    function iniciarSesion(){

        var nombre_usuario = $("#usuario_sesion_acceder").val();
        var contrasena_usuario = $("#contrasena_sesion_acceder").val();

        jQuery.ajax({
            type: "POST",
            url: "https://transito-servicio.herokuapp.com/autenticacion-token",
            contentType: "application/json; charset=utf-8",
            crossDomain: true,
            dataType: 'json',
            data: {'username':'admin', 'password':'admin'},
            success: function (data, status, jqXHR) {
                setCookie("username",nombre_usuario,1);
                setCookie("password",contrasena_usuario,1);
                console.log(data);

            },
            error: function (jqXHR, status) {
                $("#error_usuario").delay(100).fadeIn(100);    
            }
        });
    }

    function cerrar_sesion(){
        deleteCookie("usuario");
        deleteCookie("contrasena");
        location.reload();
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return null;
    }

    function deleteCookie(name) { 
        setCookie(name, '', -1); 
    }

</script>