document.getElementById("bVerificar").onclick = function(e) {
    if ((parseFloat(document.getElementById("iSalario").value) <= 0) || document.getElementById("iSalario").value === "") {
        window.alert("Salário deve ser informado e maior que zero!");
        document.getElementById("iSalario").focus();
    } else {
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "salario.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("iNome="+document.getElementById("iNome").value
        +"&iSalario="+document.getElementById("iSalario").value
        +"&iEndereco="+document.getElementById("iEndereco").value);
        xhttp.onload = function() {
            document.getElementById("dResposta").innerHTML = this.responseText;
        }
    }
};

