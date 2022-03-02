<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<div class="col-md-12 mb-2">
    <a href="index.php?view=usuario" class="btn btn-dark btn-circle btn-sm">
        <i class="fas fa-angle-left"></i>
    </a>
    <h1>Registro de Usuarios</h1>
</div>

<form class="row g-3" method="POST" onsubmit="return validarDatos()" action="index.php?view=addUsuario_controller">
    <div class="col-md-12" style="max-width: 500px;">

    <div class="col-md-12 mt-1">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="nombre">
        </div>

        <div class="col-md-12 mt-1">
            <label for="telefono" class="form-label">Teléfono</label>
            <input name="telefono" type="text" class="form-control" id="telefono">
        </div>
        
        <div class="col-md-12 mt-1">
            <label for="email" class="form-label">email</label>
            <input name="email" type="email" class="form-control" id="email">
        </div>
        <div class="col-md-12 mt-1">
            <label for="password" class="form-label">Contraseña</label>
            <input name="password" type="password" class="form-control" id="password">
        </div>



        <div class="col-md-12 mt-1">
            <label for="dimension" class="form-label">Tipo</label>
            <div class="form-select" aria-label="Default select example">
                <select name="tipo" id="tipo" class="form-control">
                    <option selected value="" >Ninguna Opción Seleccionada</option>
                    <option  value="ADMINISTRADOR">ADMINISTRADOR</option>
                    <option  value="EMPLEADO">EMPLEADO</option>
                </select>
            </div>
        </div>



        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary">Agregar Usuario</button>
        </div>

    </div>
</form>

<script>

 
function validarDatos() {

let nombre = document.getElementById("nombre").value;
let telefono = document.getElementById("telefono").value;
let email = document.getElementById("email").value;
let password = document.getElementById("password").value;

if (!codigoProducto.trim()) {
    swal("Debe Ingresar un Código Producto", '', 'warning');
    return false
}


console.log('here')
return true;
}
</script>