function validarCamposParaLogueo() {
    var correo = document.getElementById("correo").value;
    var password = document.getElementById("password").value;
    var boton = document.getElementById("boton");
    if (correo == "" || password == "") {
        boton.disabled = true;
    }else{
        boton.disabled = false;
    }
}
function validarSubirVoucherA(){
    var codigo = document.getElementById("codigoA").value;
    var voucher = document.getElementById("voucherA").value;
    var fechaPago = document.getElementById("fechaA").value;
    var submit = document.getElementById("pagoA");
    if (codigo != "" && voucher != "" && fechaPago != "") {
        submit.disabled = false;
    }else{
        submit.disabled = true;
    }
}
function validarSubirVoucherB(){
    var codigo = document.getElementById("codigoB").value;
    var voucher = document.getElementById("voucherB").value;
    var fechaPago = document.getElementById("fechaB").value;
    var submit = document.getElementById("pagoB");
    if (codigo != "" && voucher != "" && fechaPago != "") {
        submit.disabled = false;
    }else{
        submit.disabled = true;
    }
}
function validarSubirVoucherC(){
    var codigo = document.getElementById("codigoC").value;
    var voucher = document.getElementById("voucherC").value;
    var fechaPago = document.getElementById("fechaC").value;
    var submit = document.getElementById("pagoC");
    if (codigo != "" && voucher != "" && fechaPago != "") {
        submit.disabled = false;
    }else{
        submit.disabled = true;
    }
}
function validarSubirRequisitoA(){
    var archivo = document.getElementById("archivoA").value;
    var submit = document.getElementById("botonA");
    if (archivo != "") {
        submit.disabled = false;
    }else{
        submit.disabled = true;
    }
}
function validarSubirRequisitoB(){
    var archivo = document.getElementById("archivoB").value;
    var submit = document.getElementById("botonB");
    if (archivo != "") {
        submit.disabled = false;
    }else{
        submit.disabled = true;
    }
}
function validarSubirRequisitoC(){
    var archivo = document.getElementById("archivoC").value;
    var submit = document.getElementById("botonC");
    if (archivo != "") {
        submit.disabled = false;
    }else{
        submit.disabled = true;
    }
}
function soloNumeros(e){
    var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57)
}
function soloLetras(e){
    var key = window.Event ? e.which : e.keyCode
    return (key >= 65 && key <= 90) || (key >= 97 && key <= 242) || (key == 44) || (key == 32)
}
function convertirAOracion() {
    var apellidoPaterno = document.getElementById("apellidoPaterno").value;
    apellidoPaterno = apellidoPaterno.toLowerCase().replace(/(^\s*\w|\.\s*\w)/g, c => c.toUpperCase());
    document.getElementById("apellidoPaterno").value = apellidoPaterno;
    var apellidoMaterno = document.getElementById("apellidoMaterno").value;
    apellidoMaterno = apellidoMaterno.toLowerCase().replace(/(^\s*\w|\.\s*\w)/g, c => c.toUpperCase());
    document.getElementById("apellidoMaterno").value = apellidoMaterno;
    var nombres = document.getElementById("nombres").value;
    nombres = nombres.toLowerCase().replace(/(^\s*\w|\.\s*\w)/g, c => c.toUpperCase());
    document.getElementById("nombres").value = nombres;
    var direccion = document.getElementById("direccion").value;
    direccion = direccion.toLowerCase().replace(/(^\s*\w|\.\s*\w)/g, c => c.toUpperCase());
    document.getElementById("direccion").value = direccion;
    /* var departamentoActual = document.getElementById("departamentoActual").value;
    departamentoActual = departamentoActual.toLowerCase().replace(/(^\s*\w|\.\s*\w)/g, c => c.toUpperCase());
    document.getElementById("departamentoActual").value = departamentoActual;
    var provinciaActual = document.getElementById("provinciaActual").value;
    provinciaActual = provinciaActual.toLowerCase().replace(/(^\s*\w|\.\s*\w)/g, c => c.toUpperCase());
    document.getElementById("provinciaActual").value = provinciaActual;
    var distritoActual = document.getElementById("distritoActual").value;
    distritoActual = distritoActual.toLowerCase().replace(/(^\s*\w|\.\s*\w)/g, c => c.toUpperCase());
    document.getElementById("distritoActual").value = distritoActual; */
    var apellidoPaternoApoderado = document.getElementById("apellidoPaternoApoderado").value;
    apellidoPaternoApoderado = apellidoPaternoApoderado.toLowerCase().replace(/(^\s*\w|\.\s*\w)/g, c => c.toUpperCase());
    document.getElementById("apellidoPaternoApoderado").value = apellidoPaternoApoderado;
    var departamentoColegio = document.getElementById("departamentoColegio").value;
    departamentoColegio = departamentoColegio.toLowerCase().replace(/(^\s*\w|\.\s*\w)/g, c => c.toUpperCase());
    document.getElementById("departamentoColegio").value = departamentoColegio;
    var provinciaColegio = document.getElementById("provinciaColegio").value;
    provinciaColegio = provinciaColegio.toLowerCase().replace(/(^\s*\w|\.\s*\w)/g, c => c.toUpperCase());
    document.getElementById("provinciaColegio").value = provinciaColegio;
    var distritoColegio = document.getElementById("distritoColegio").value;
    distritoColegio = distritoColegio.toLowerCase().replace(/(^\s*\w|\.\s*\w)/g, c => c.toUpperCase());
    document.getElementById("distritoColegio").value = distritoColegio;
}
function verContrasena () {
    var tipo = document.getElementById("password");
    var icono = document.getElementById("eye");
    if (tipo.type == "password") {
        tipo.type = "text";
        icono.className = "input-group-text fa fa-eye-slash";
    } else {
        tipo.type = "password";
        icono.className = "input-group-text fa fa-eye";
    }
}
function convertirTodoAminusculas() {
    var correo = document.getElementById("correo").value;
    document.getElementById("correo").value = correo.toLowerCase();
}
function calcularEdad() {
    var fechaNacimiento = document.getElementById("fechaNacimiento").value;
    var edad = document.getElementById("edad");
    var fechaActual = new Date();
    var anioActual = fechaActual.getFullYear();
    var anioNacimiento = fechaNacimiento.substring(0, 4);
    edad = anioActual - anioNacimiento;
    document.getElementById("edad").value = edad + " años";
}
function validarModalidad(){
    var modalidad = document.getElementById("modalidad").value;
    var tipo = document.getElementById("tipo");
    var campoA = document.getElementById("campoA");
    var campoB = document.getElementById("campoB");
    var campoC = document.getElementById("campoC");
    var universidad = document.getElementById("universidad");
    var creditos = document.getElementById("creditos");
    var ruv = document.getElementById("ruv");
    if(modalidad == "Examen de Admisión Ordinario"){
        tipo.disabled = true;
        tipo.value = "";
        campoA.style.display = "none";
        campoB.style.display = "none";
        campoC.style.display = "none";
        universidad.value = "";
        creditos.value = "";
        ruv.value = "";
    }else{
        tipo.disabled = false;
    }
}
function validarTipo(){
    var campoA = document.getElementById("campoA");
    var campoB = document.getElementById("campoB");
    var campoC = document.getElementById("campoC");
    var universidad = document.getElementById("universidad");
    var creditos = document.getElementById("creditos");
    var ruv = document.getElementById("ruv");
    var tipo = document.getElementById("tipo").value;
    if(tipo == "Graduados y titulados" || tipo == "Traslado externo" || tipo == ""){
        campoA.style.display = "flex";
        campoB.style.display = "flex";
        campoC.style.display = "none";
        ruv.value = "";
    }else if (tipo == "Ley 27277 Víctimas del terrorismo") {
        campoA.style.display = "none";
        campoB.style.display = "none";
        universidad.value = "";
        creditos.value = "";
        campoC.style.display = "flex";
    }
    else {
        campoA.style.display = "none";
        campoB.style.display = "none";
        campoC.style.display = "none";
        universidad.value = "";
        creditos.value = "";
        ruv.value = "";
    }
}
function validarInscripcion(){
    var apellidoPaterno = document.getElementById("apellidoPaterno").value;
    var apellidoMaterno = document.getElementById("apellidoMaterno").value;
    var nombres = document.getElementById("nombres").value;
    var tipoDocumento = document.getElementById("tipoDocumento").value;
    var documento = document.getElementById("documento").value;
    var fechaNacimiento = document.getElementById("fechaNacimiento").value;
    var sexo = document.getElementById("sexo").value;
    var estadoCivil = document.getElementById("estadoCivil").value;
    var paisNacimiento = document.getElementById("paisNacimiento").value;
    var direccion = document.getElementById("direccion").value;
    var celular = document.getElementById("celular").value;
    var correo = document.getElementById("correo").value;
    var dniApoderado = document.getElementById("dniApoderado").value;
    var apellidoPaternoApoderado = document.getElementById("apellidoPaternoApoderado").value;
    var celularApoderado = document.getElementById("celularApoderado").value;
    var colegio = document.getElementById("colegio").value;
    var departamentoColegio = document.getElementById("departamentoColegio").value;
    var provinciaColegio = document.getElementById("provinciaColegio").value;
    var distritoColegio = document.getElementById("distritoColegio").value;
    var culminoColegio = document.getElementById("culminoColegio").value;
    var carrera = document.getElementById("carrera").value;
    var medio = document.getElementById("medio").value;
    var password = document.getElementById("password").value;
    var modalidad = document.getElementById("modalidad").value;
    var boton = document.getElementById("boton");
    if(
        apellidoPaterno != "" &&
        apellidoMaterno != "" &&
        nombres != "" &&
        tipoDocumento != "" &&
        documento != "" &&
        fechaNacimiento != "" &&
        sexo != "" &&
        estadoCivil != "" &&
        paisNacimiento != "" &&
        direccion != "" &&
        celular != "" &&
        correo != "" &&
        dniApoderado != "" &&
        apellidoPaternoApoderado != "" &&
        celularApoderado != "" &&
        colegio != "" &&
        departamentoColegio != "" &&
        provinciaColegio != "" &&
        distritoColegio != "" &&
        culminoColegio != "" &&
        modalidad != "" &&
        carrera != "" &&
        medio != "" &&
        password != ""
    ){
        boton.disabled = false;
    }else{
        boton.disabled = true;
    }
    var tipoDocumentoX = document.getElementById("tipoDocumentoX");
    if(tipoDocumento != ""){
        tipoDocumentoX.style.display = "none";
    }else{
        tipoDocumentoX.style.display = "block";
    }
    var documentoX = document.getElementById("documentoX");
    if(documento != ""){
        documentoX.style.display = "none";
    }else{
        documentoX.style.display = "block";
    }
    var apellidoPaternoX = document.getElementById("apellidoPaternoX");
    if(apellidoPaterno != ""){
        apellidoPaternoX.style.display = "none";
    }else{
        apellidoPaternoX.style.display = "block";
    }
    var apellidoMaternoX = document.getElementById("apellidoMaternoX");
    if(apellidoMaterno != ""){
        apellidoMaternoX.style.display = "none";
    }else{
        apellidoMaternoX.style.display = "block";
    }
    var nombresX = document.getElementById("nombresX");
    if(nombres != ""){
        nombresX.style.display = "none";
    }else{
        nombresX.style.display = "block";
    }
    var fechaNacimientoX = document.getElementById("fechaNacimientoX");
    if(fechaNacimiento != ""){
        fechaNacimientoX.style.display = "none";
    }else{
        fechaNacimientoX.style.display = "block";
    }
    var sexoX = document.getElementById("sexoX");
    if(sexo != ""){
        sexoX.style.display = "none";
    }else{
        sexoX.style.display = "block";
    }
    var estadoCivilX = document.getElementById("estadoCivilX");
    if(estadoCivil != ""){
        estadoCivilX.style.display = "none";
    }else{
        estadoCivilX.style.display = "block";
    }
    var paisNacimientoX = document.getElementById("paisNacimientoX");
    if(paisNacimiento != ""){
        paisNacimientoX.style.display = "none";
    }else{
        paisNacimientoX.style.display = "block";
    }

    var departamentoNacimientoX = document.getElementById("departamentoNacimientoX");
    var departamentoNacimientoSelect = document.getElementById("departamentoNacimientoSelect");
    var departamentoNacimientoInput = document.getElementById("departamentoNacimientoInput");
    if(departamentoNacimientoSelect.value != "Seleccione" || departamentoNacimientoInput.value != ""){
        departamentoNacimientoX.style.display = "none";
    }else{
        departamentoNacimientoX.style.display = "block";
    }
    var provinciaNacimientoX = document.getElementById("provinciaNacimientoX");
    var provinciaNacimientoSelect = document.getElementById("provinciaNacimientoSelect");
    var provinciaNacimientoInput = document.getElementById("provinciaNacimientoInput");
    if(provinciaNacimientoSelect.value != "Seleccione" || provinciaNacimientoInput.value != ""){
        provinciaNacimientoX.style.display = "none";
    }else{
        provinciaNacimientoX.style.display = "block";
    }
    var distritoNacimientoX = document.getElementById("distritoNacimientoX");
    var distritoNacimientoSelect = document.getElementById("distritoNacimientoSelect");
    var distritoNacimientoInput = document.getElementById("distritoNacimientoInput");
    if(distritoNacimientoSelect.value != "Seleccione" || distritoNacimientoInput.value != ""){
        distritoNacimientoX.style.display = "none";
    }else{
        distritoNacimientoX.style.display = "block";
    }
    var direccionX = document.getElementById("direccionX");
    if(direccion != ""){
        direccionX.style.display = "none";
    }else{
        direccionX.style.display = "block";
    }
    var paisActual = document.getElementById("paisActual");
    var paisActualX = document.getElementById("paisActualX");
    if(paisActual.value != ""){
        paisActualX.style.display = "none";
    }else{
        paisActualX.style.display = "block";
    }
    var departamentoActualX = document.getElementById("departamentoActualX");
    var departamentoActualSelect = document.getElementById("departamentoActualSelect");
    var departamentoActualInput = document.getElementById("departamentoActualInput");
    if(departamentoActualSelect.value != "Seleccione" || departamentoActualInput.value != ""){
        departamentoActualX.style.display = "none";
    }else{
        departamentoActualX.style.display = "block";
    }
    var provinciaActualX = document.getElementById("provinciaActualX");
    var provinciaActualSelect = document.getElementById("provinciaActualSelect");
    var provinciaActualInput = document.getElementById("provinciaActualInput");
    if(provinciaActualSelect.value != "Seleccione" || provinciaActualInput.value != ""){
        provinciaActualX.style.display = "none";
    }else{
        provinciaActualX.style.display = "block";
    }
    var distritoActualX = document.getElementById("distritoActualX");
    var distritoActualSelect = document.getElementById("distritoActualSelect");
    var distritoActualInput = document.getElementById("distritoActualInput");
    if(distritoActualSelect.value != "Seleccione" || distritoActualInput.value != ""){
        distritoActualX.style.display = "none";
    }else{
        distritoActualX.style.display = "block";
    }
    var celularX = document.getElementById("celularX");
    if(celular != ""){
        celularX.style.display = "none";
    }else{
        celularX.style.display = "block";
    }
    var correoX = document.getElementById("correoX");
    if(correo != ""){
        correoX.style.display = "none";
    }else{
        correoX.style.display = "block";
    }
    var dniApoderadoX = document.getElementById("dniApoderadoX");
    if(dniApoderado != ""){
        dniApoderadoX.style.display = "none";
    }else{
        dniApoderadoX.style.display = "block";
    }
    var celularApoderadoX = document.getElementById("celularApoderadoX");
    if(celularApoderado != ""){
        celularApoderadoX.style.display = "none";
    }else{
        celularApoderadoX.style.display = "block";
    }
    var colegioX = document.getElementById("colegioX");
    if(colegio != ""){
        colegioX.style.display = "none";
    }else{
        colegioX.style.display = "block";
    }
    var culminoColegioX = document.getElementById("culminoColegioX");
    if(culminoColegio != ""){
        culminoColegioX.style.display = "none";
    }else{
        culminoColegioX.style.display = "block";
    }
    var modalidadX = document.getElementById("modalidadX");
    if(modalidad != ""){
        modalidadX.style.display = "none";
    }else{
        modalidadX.style.display = "block";
    }
    var carreraX = document.getElementById("carreraX");
    if(carrera != ""){
        carreraX.style.display = "none";
    }else{
        carreraX.style.display = "block";
    }
    var medioX = document.getElementById("medioX");
    if(medio != ""){
        medioX.style.display = "none";
    }else{
        medioX.style.display = "block";
    }
    var passwordX = document.getElementById("passwordX");
    if(password != ""){
        passwordX.style.display = "none";
    }else{
        passwordX.style.display = "block";
    }
}
function validarCulminarEstudios(){
    var culminoColegio = document.getElementById("culminoColegio").value;
    var anoCulminadoColegio = document.getElementById("anoCulminadoColegio");
    if(culminoColegio == "Si"){
        anoCulminadoColegio.disabled = false;
    }else{
        anoCulminadoColegio.disabled = true;
        anoCulminadoColegio.value = "";
    }
}
function validarDeclaracionJurada(){
    var campoModalA = document.getElementsByClassName("campoModalA");
    var campoModalB = document.getElementsByClassName("campoModalB");
    var campoModalC = document.getElementsByClassName("campoModalC");
    var campoModalD = document.getElementsByClassName("campoModalD");
    var campoModalE = document.getElementsByClassName("campoModalE");
    var aceptar = document.getElementById("aceptar");
    if(campoModalA[0].checked == true && campoModalB[0].checked == true && campoModalC[0].checked == true && campoModalD[0].checked == true && campoModalE[0].checked == true){
        aceptar.disabled = false;
    }else{
        aceptar.disabled = true;
    }
}
function validarTipoDocumento(){
    var tipoDocumento = document.getElementById("tipoDocumento").value;
    var buscar = document.getElementById("buscar");
    if(tipoDocumento == "DNI"){
        buscar.style.display = "flex";
    }else{
        buscar.style.display = "none";
    }
}
function limpiarProvincia(){
    var provinciaNacimientoSelect = document.getElementById("provinciaNacimientoSelect");
    provinciaNacimientoSelect.innerHTML = "<option disabled selected >Seleccione</option>";
}
function limpiarDistrito(){
    var distritoNacimientoSelect = document.getElementById("distritoNacimientoSelect");
    distritoNacimientoSelect.innerHTML = "<option disabled selected >Seleccione</option>";
}
function limpiarProvinciaActual(){
    var provinciaActual = document.getElementById("provinciaActualSelect");
    provinciaActual.innerHTML = "<option disabled selected >Seleccione</option>";
}
function limpiarDistritoActual(){
    var distritoActual = document.getElementById("distritoActualSelect");
    distritoActual.innerHTML = "<option disabled selected >Seleccione</option>";
}
var pais = "";
var departamento = "";
var provincia = "";
var distrito = "";
function validarPais(){
    var paisNacimiento = document.getElementById("paisNacimiento").value;
    pais = paisNacimiento;
    departamentosNacimiento();
}
function validarDepartamentoNacimiento(){
    var departamentoNacimientoSelect = document.getElementById("departamentoNacimientoSelect").value;
    departamento = departamentoNacimientoSelect.split("-")[0];
    provinciasNacimiento();
}
function validarProvinciaNacimiento(){
    var provinciaNacimientoSelect = document.getElementById("provinciaNacimientoSelect").value;
    provincia = provinciaNacimientoSelect.split("-")[0];
    distritosNacimiento();
}
var departamentosNacimiento = function(){
    limpiarProvincia();
    limpiarDistrito();
    var url = "https://raw.githubusercontent.com/AngelFQC/ubigeo-peru/master/src/ubigeo-inei.json";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onload = function(){
        if(this.status == 200){
            var respuesta = JSON.parse(this.responseText);
            var departamentos = [];
            respuesta.find(function(elemento){
                if(elemento.departamento != "00" && elemento.provincia == "00" && elemento.distrito == "00"){
                    var nombres = elemento.nombre;
                    departamentos.push(
                        {
                            "id": elemento.departamento,
                            "departamento": nombres
                        }
                    );
                }
            })
            var departamentoNacimientoSelect = document.getElementById("departamentoNacimientoSelect");
            var departamentoNacimientoInput = document.getElementById("departamentoNacimientoInput");
            var provinciaNacimientoSelect = document.getElementById("provinciaNacimientoSelect");
            var provinciaNacimientoInput = document.getElementById("provinciaNacimientoInput");
            var distritoNacimientoSelect = document.getElementById("distritoNacimientoSelect");
            var distritoNacimientoInput = document.getElementById("distritoNacimientoInput");
            departamentos.forEach(function(elemento){
                var option = document.createElement("option");
                option.value = elemento.id + "-" + elemento.departamento;
                option.text = elemento.departamento;
                if(pais == "Perú"){
                    departamentoNacimientoSelect.add(option);
                    departamentoNacimientoSelect.disabled = false;
                    provinciaNacimientoSelect.disabled = false;
                    distritoNacimientoSelect.disabled = false;
                    departamentoNacimientoSelect.style.display = "flex";
                    provinciaNacimientoSelect.style.display = "flex";
                    distritoNacimientoSelect.style.display = "flex";
                    departamentoNacimientoInput.style.display = "none";
                    provinciaNacimientoInput.style.display = "none";
                    distritoNacimientoInput.style.display = "none";
                }else{
                    departamentoNacimientoSelect.disabled = true;
                    provinciaNacimientoSelect.disabled = true;
                    distritoNacimientoSelect.disabled = true;
                    departamentoNacimientoInput.style.display = "flex";
                    provinciaNacimientoInput.style.display = "flex";
                    distritoNacimientoInput.style.display = "flex";
                    departamentoNacimientoSelect.style.display = "none";
                    provinciaNacimientoSelect.style.display = "none";
                    distritoNacimientoSelect.style.display = "none";
                }
            })
        }
    }
    xhr.send();
}
var provinciasNacimiento = function(){
    limpiarProvincia();
    var url = "https://raw.githubusercontent.com/AngelFQC/ubigeo-peru/master/src/ubigeo-inei.json";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onload = function(){
        if(this.status == 200){
            var respuesta = JSON.parse(this.responseText);
            var provincias = [];
            respuesta.find(function(elemento){
                if(elemento.departamento == departamento && elemento.provincia != "00" && elemento.distrito == "00"){
                    var nombres = elemento.nombre;
                    provincias.push(
                        {
                            "id": elemento.provincia,
                            "provincia": nombres
                        }
                    );
                }
            })
            provincias.forEach(function(elemento){
                var option = document.createElement("option");
                option.value = elemento.id + "-" + elemento.provincia;
                option.text = elemento.provincia;
                var provinciaNacimientoSelect = document.getElementById("provinciaNacimientoSelect");
                provinciaNacimientoSelect.add(option);
            })
        }
    }
    xhr.send();
}
var distritosNacimiento = function(){
    limpiarDistrito();
    var url = "https://raw.githubusercontent.com/AngelFQC/ubigeo-peru/master/src/ubigeo-inei.json";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onload = function(){
        if(this.status == 200){
            var respuesta = JSON.parse(this.responseText);
            var distritos = [];
            respuesta.find(function(elemento){
                if(elemento.departamento == departamento && elemento.provincia == provincia && elemento.distrito != "00"){
                    var nombres = elemento.nombre;
                    distritos.push(
                        {
                            "id": elemento.distrito,
                            "distrito": nombres
                        }
                    );
                }
            })
            distritos.forEach(function(elemento){
                var option = document.createElement("option");
                option.value = elemento.id + "-" + elemento.distrito;
                option.text = elemento.distrito;
                var distritoNacimientoSelect = document.getElementById("distritoNacimientoSelect");
                distritoNacimientoSelect.add(option);
            })
        }
    }
    xhr.send();
}
var paisActualv = "";
var departamentoActualv = "";
var provinciaActualv = "";
var distritoActualv = "";
function validarPaisActual(){
    var paisActual = document.getElementById("paisActual").value;
    paisActualv = paisActual;
    departamentosActual();
}
function validarDepartamentoActual(){
    var departamentoActual = document.getElementById("departamentoActualSelect").value;
    departamentoActualv = departamentoActual.split("-")[0];
    provinciasActual();
}
function validarProvinciaActual(){
    var provinciaActual = document.getElementById("provinciaActualSelect").value;
    provinciaActualv = provinciaActual.split("-")[0];
    distritosActual();
}
var departamentosActual = function(){
    limpiarProvinciaActual();
    limpiarDistritoActual();
    var url = "https://raw.githubusercontent.com/AngelFQC/ubigeo-peru/master/src/ubigeo-inei.json";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onload = function(){
        if(this.status == 200){
            var respuesta = JSON.parse(this.responseText);
            var departamentos = [];
            respuesta.find(function(elemento){
                if(elemento.departamento != "00" && elemento.provincia == "00" && elemento.distrito == "00"){
                    var nombres = elemento.nombre;
                    departamentos.push(
                        {
                            "id": elemento.departamento,
                            "departamento": nombres
                        }
                    );
                }
            })
            var departamentoActualSelect = document.getElementById("departamentoActualSelect");
            var departamentoActualInput = document.getElementById("departamentoActualInput");
            var provinciaActualSelect = document.getElementById("provinciaActualSelect");
            var provinciaActualInput = document.getElementById("provinciaActualInput");
            var distritoActualSelect = document.getElementById("distritoActualSelect");
            var distritoActualInput = document.getElementById("distritoActualInput");
            departamentos.forEach(function(elemento){
                var option = document.createElement("option");
                option.value = elemento.id + "-" + elemento.departamento;
                option.text = elemento.departamento;
                if(paisActualv == "Perú"){
                    departamentoActualSelect.add(option);
                    departamentoActualSelect.disabled = false;
                    provinciaActualSelect.disabled = false;
                    distritoActualSelect.disabled = false;
                    departamentoActualSelect.style.display = "flex";
                    provinciaActualSelect.style.display = "flex";
                    distritoActualSelect.style.display = "flex";
                    departamentoActualInput.style.display = "none";
                    provinciaActualInput.style.display = "none";
                    distritoActualInput.style.display = "none";
                }else{
                    departamentoActualSelect.disabled = true;
                    provinciaActualSelect.disabled = true;
                    distritoActualSelect.disabled = true;
                    departamentoActualInput.style.display = "flex";
                    provinciaActualInput.style.display = "flex";
                    distritoActualInput.style.display = "flex";
                    departamentoActualSelect.style.display = "none";
                    provinciaActualSelect.style.display = "none";
                    distritoActualSelect.style.display = "none";
                }
            })
        }
    }
    xhr.send();
}
var provinciasActual = function(){
    limpiarProvinciaActual();
    var url = "https://raw.githubusercontent.com/AngelFQC/ubigeo-peru/master/src/ubigeo-inei.json";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onload = function(){
        if(this.status == 200){
            var respuesta = JSON.parse(this.responseText);
            var provincias = [];
            respuesta.find(function(elemento){
                if(elemento.departamento == departamentoActualv && elemento.provincia != "00" && elemento.distrito == "00"){
                    var nombres = elemento.nombre;
                    provincias.push(
                        {
                            "id": elemento.provincia,
                            "provincia": nombres
                        }
                    );
                }
            })
            provincias.forEach(function(elemento){
                var option = document.createElement("option");
                option.value = elemento.id + "-" + elemento.provincia;
                option.text = elemento.provincia;
                var provinciaActualSelect = document.getElementById("provinciaActualSelect");
                provinciaActualSelect.add(option);
            })
        }
    }
    xhr.send();
}
var distritosActual = function(){
    limpiarDistritoActual();
    var url = "https://raw.githubusercontent.com/AngelFQC/ubigeo-peru/master/src/ubigeo-inei.json";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onload = function(){
        if(this.status == 200){
            var respuesta = JSON.parse(this.responseText);
            var distritos = [];
            respuesta.find(function(elemento){
                if(elemento.departamento == departamentoActualv && elemento.provincia == provinciaActualv && elemento.distrito != "00"){
                    var nombres = elemento.nombre;
                    distritos.push(
                        {
                            "id": elemento.distrito,
                            "distrito": nombres
                        }
                    );
                }
            })
            distritos.forEach(function(elemento){
                var option = document.createElement("option");
                option.value = elemento.id + "-" + elemento.distrito;
                option.text = elemento.distrito;
                var distritoActualSelect = document.getElementById("distritoActualSelect");
                distritoActualSelect.add(option);
            })
        }
    }
    xhr.send();
}
function validarColegio(){
    var departamentoColegiov = "";
    var provinciaColegiov = "";
    var distritoColegiov = "";
    var colegio = document.getElementById("colegio").value;
    departamentoColegiov = colegio.split("#")[1];
    provinciaColegiov = colegio.split("#")[2];
    distritoColegiov = colegio.split("#")[3];
    document.getElementById("departamentoColegio").value = departamentoColegiov.toLocaleLowerCase().replace(/\b[a-z]/g, c => c.toUpperCase());
    document.getElementById("provinciaColegio").value = provinciaColegiov.toLocaleLowerCase().replace(/\b[a-z]/g, c => c.toUpperCase());
    document.getElementById("distritoColegio").value = distritoColegiov.toLocaleLowerCase().replace(/\b[a-z]/g, c => c.toUpperCase());
    document.getElementById("departamentoColegioX").style.display = "none";
    document.getElementById("provinciaColegioX").style.display = "none";
    document.getElementById("distritoColegioX").style.display = "none";
}
function validarContrasena(){
    var contrasena = document.getElementById("password").value;
    var mensajePassword = document.getElementById("mensajePassword");
    var expresion = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,9}$/;
    if(!expresion.test(contrasena)){
        mensajePassword.style.display = "flex";
        mensajePassword.innerHTML = "La contraseña debe tener entre 5 y 9 caracteres, al menos un número, al menos una minúscula y al menos una mayúscula.";
    }else if(contrasena == ""){
        mensajePassword.style.display = "none";
    }else{
        mensajePassword.style.display = "none";
    }
}