//Ver mensaje
var msj = document.querySelector("#msj").value;
if(msj != ''){
    Swal.fire({
        icon: 'success',
        title: 'Mensaje',
        text: msj,
        confirmButtonColor: '#198754'
    });
}

//Eliminar productos.
var btn_eliminar_producto = document.querySelectorAll(".btn_eliminar_producto");

btn_eliminar_producto.forEach(function (item) {

    let href = item.href;
    item.href = '#';

    item.addEventListener('click', function () {

        Swal.fire({
            title: 'Confirmación',
            text: "Está segura/o que desea eliminar este registro?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#198754',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = href;    
            }
        })

    });

});
