function isChecked(){
    if (document.getElementById("verify-checkbox").checked){
        alert ("apakah yakin sawah tersebut sudah panen");
        document.getElementById('formverify').submit();
        document.getElementById("message").textContent = "Panen";
    }
    else{
        document.getElementById("message").textContent = "belum panen";
    }
}

function isSubmit(){
    if(document.getElementById("submit_panen")){
        alert("data panen adalah data valid anda, apakah anda yakin?")
    }
}