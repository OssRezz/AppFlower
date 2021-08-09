
//Selector del menu Hamburguesa
const botonHB = document.querySelector('.navbar #hamburguer-menu');
const lateralMenu = document.querySelector('.lateralMenu');

//selectores del reporte
const divFecha = document.querySelector('#fechaArmado');
const divSemana = document.querySelector('#semanaArmado');
const selectedOption = document.querySelector('#selectOption');


botonHB.addEventListener('click', ocultarLateral);
selectedOption.addEventListener('change', cambiarOpcionSelect);


function ocultarLateral() {
    if (lateralMenu.classList.contains('d-none')) {
        lateralMenu.classList.remove('d-none');
        botonHB.classList.remove('text-primary');
        botonHB.classList.add('text-dark');
        sessionStorage.setItem('menu', 'open');
    } else {
        lateralMenu.classList.add('d-none');
        botonHB.classList.remove('text-dark');
        botonHB.classList.add('text-primary');
        sessionStorage.setItem('menu', 'close');
    }
}
window.onload = () => {
    if (sessionStorage.getItem('menu') !== "open") {
        if (sessionStorage.getItem('menu') == "close") {
            ocultarLateral();
        }
    }
}

function cambiarOpcionSelect(e){
    if(e.target.value === "1"){
        divFecha.style.setProperty('display', '');
        divSemana.style.setProperty('display', 'none');
    } else {
        divFecha.style.setProperty('display', 'none');
        divSemana.style.setProperty('display', '');
    }
}



reporte = (url, fechaInicio, fechaFin, Option, Week) => {
    const desde = $('#' + fechaInicio + '').val();
    const hasta = $('#' + fechaFin + '').val();
    const semanaReport = $('#' + Week + '').val();
    const selectOption = $('#'+ Option +'').val();
    window.open('../control/' + url + '.php?desde=' + desde + '&hasta=' + hasta + '&selectOption=' + selectOption + '&semanaReport=' + semanaReport);
}

