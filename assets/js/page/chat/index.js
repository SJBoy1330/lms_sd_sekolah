function contact(evt, contact) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
  
    document.getElementById(contact).style.display = "block";
   
}

function chat(evt, chat) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabchat");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
  
    document.getElementById(chat).style.display = "block";
   
}
