
function Submit() {
    
    $.get = ("test.php", {"CreatureName":document.getElementById("TextArea").nodeValue}, function(data){
        if (data == "FileDoesntExist") {
            alert("The requested creature doesn't show up in database. \n Either it is not in the database, or you typed it wrong")
        }
        Json = JSON.parse(data);})
    

}