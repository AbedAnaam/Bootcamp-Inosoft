function hapus() {
    document.getElementById("output").innerHTML = "";
}

function hapusNol() {
    var value = document.getElementById("output").innerHTML;
    if (value == "0") {
        value = " "
        document.getElementById("output").innerHTML = value;
    }
}

function persentase() {
    var value = document.getElementById("output").innerHTML;
    value = value / 100;
    document.getElementById("output").innerHTML = value;
}

function tampilanLayar(value) {
    hapusNol()
    document.getElementById("output").innerHTML += value;
}

function hasil() {
    hapusNol()
    var equation = document.getElementById("output").innerHTML;
    var solved = eval(equation);
    document.getElementById("output").innerHTML = solved;
}