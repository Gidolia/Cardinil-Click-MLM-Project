function showUsert(stt) {
    if (stt == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            	   results = xmlhttp.responseText.split(",");
            	   
            	    document.getElementById('p_name').value = results[0];
                    document.getElementById('p_addreass').value = results[1];
                    document.getElementById("txtHint").setAttribute(
   "style", "font-size: 20px; font-style: italic; color:#ff0000;");

                    document.getElementById("txtHint").innerHTML = results[2];
            }
        };
        xmlhttp.open("GET","p_no.php?q="+stt,true);
        xmlhttp.send();
    }
}
