function sem() {
    var select = document.getElementById("semestre");
    for (var i = 1; i <= 12; i++) {
        option = document.createElement("option");
        option.value = i;
        option.text = i;
        select.appendChild(option);
    }

}

function age() {
    var select = document.getElementById("edad");
    for (var i = 15; i <= 110; i++) {
        option = document.createElement("option");
        option.value = i;
        option.text = i;
        select.appendChild(option);
    }

}
function carr() {
    var elemts = ["Ing. Sistemas Computacionales", "Ing. Mecatronica",
    "Ing. Industrias Alimentarias", "Lic. Administración", "Lic. Contaduria"],
        select = document.getElementById('carrera');
    elemts.sort();

    for (carr in elemts) {
        select.add(new Option(elemts[carr]));
    }
}

function bus2() {
    var elemts = ["1.- Num. Control", "2.- Nombre",
    "3.- Primer Apellido", "4.- Segundo apellido", "5.- Edad", "6.- Semestre", "7.- Carrera"],
        select = document.getElementById('opcion');
    elemts.sort();

    for (carr in elemts) {
        select.add(new Option(elemts[carr]));
    }
}


function bus() {
    var input, filter, table, tr, td, i, txtValue, opcion;
    input = document.getElementById("input1");
    filter = input.value.toUpperCase();
    table = document.getElementById("tabla1");
    tr = table.getElementsByTagName("tr");
    opcion = document.getElementById("opcion");
    var opciones = opcion.options[opcion.selectedIndex].value;
    
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[parseInt(opciones)-1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
    console.log(parseInt(opciones)-1);
}

