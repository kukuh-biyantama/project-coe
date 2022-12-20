function isChecked(){
    if (document.getElementById("verify-checkbox").checked){
        alert ("apakah yakin sawah tersebut sudah panen");
        document.getElementById("message").textContent = "Panen";
    }
    else{
        document.getElementById("message").textContent = "belum panen";
    }
}

function savedata(){
    
}