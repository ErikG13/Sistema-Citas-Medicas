function EligeMenu(opcion){
    if(opcion == 1)
    {
        location.href="./MedicoF.html";
    }
    else if(opcion == 2)
    {
        location.href="./MedicoF.html";
    }
    else if(opcion == 3)
    {
        location.href="./MedicoF.html";
    }
}

function FormularioF(){
    opc = document.ELIGE.opcion.value;
    
    if(opc == "F")
    {
        document.getElementById("familiar").style.visibility="visible";
        document.getElementById("afiliado").style.visibility="hidden";
    }
    else if(opc=='FA')
    {
        document.getElementById("familiar").style.visibility="hidden";
        document.getElementById("afiliado").style.visibility="visible";
    }
}

function EligeMenuAdmin(opcion){
    if(opcion == 1)
    {
        location.href="./Consultas_admin.html";
    }
    else if(opcion == 2)
    {
        location.href="./Actualiza_citas.html";
    }
    else if(opcion == 3)
    {
        location.href="./Cancela_cita.html";
    }
}