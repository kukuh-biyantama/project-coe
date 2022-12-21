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

// function savedata(){
//     document.getElementById('formverify').submit();
//     document.getElementById("verify-checkbox");
//     document.getElementById("idSawahpetani");
//     return false;
// }