function carregarHotel() {

    var v = document.getElementById("hotel");
    var lingua = v.value;

    switch (lingua) {

        case "1":
            document.getElementById("lingua").value = "Português";
            document.getElementById("lingua").disabled = false;
            break;

        case "2":
            document.getElementById("lingua").value = "Espanhol";
            document.getElementById("lingua").disabled = false;
            break;

        case "3":
            document.getElementById("lingua").value = "Inglês";
            document.getElementById("lingua").disabled = false;
            break;

    }
}