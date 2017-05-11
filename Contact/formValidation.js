
//hint text disappear when focus on comment area
function textDisappear(){
    document.getElementById("comment").innerHTML="";
    document.getElementById("comment").style.color="black";
}
//hint text appear when blur on comment area
function textAppear(){
    if(document.getElementById("comment").value==""){
        document.getElementById("comment").innerHTML="Enter your comments here";
    }
}
function validateForm(){
    //check first name
    if (document.getElementById("firstname").value== ""){
        document.getElementById("reminderFirstname").innerHTML="<br>First name field cannot be empty.";
        document.getElementById("reminderFirstname").style.color="red";
        $error1=true;
    }else if (document.getElementById("firstname").value.match(/^[a-zA-Z]+$/)== null){
        document.getElementById("reminderFirstname").innerHTML="<br>Invalid first name. Please enter letters only!";
        document.getElementById("reminderFirstname").style.color="red";
        $error1=true;
    }
    else{
        document.getElementById("reminderFirstname").innerHTML="";
        $error1=false;
    }

    //check last name
    if (document.getElementById("lastname").value== "") {
        document.getElementById("reminderLastname").innerHTML="<br>Last name field cannot be empty.";
        document.getElementById("reminderLastname").style.color="red";
        $error2=true;
    }else if (document.getElementById("lastname").value.match(/^[a-zA-Z]+$/)== null){
        document.getElementById("reminderLastname").innerHTML="<br>Invalid last name.Please enter letters only!";
        document.getElementById("reminderLastname").style.color="red";
        $error2=true;
    }
    else{
        document.getElementById("reminderLastname").innerHTML="";
        $error2=false;
    }

    //check email
    if (document.getElementById("email").value== "") {
        document.getElementById("reminderEmail").innerHTML="<br>Email field cannot be empty.";
        document.getElementById("reminderEmail").style.color="red";
        $error3=true;
    }
    else if(document.getElementById("email").value.match(/^(.+)@(.+)$/)==null){

        document.getElementById("reminderEmail").innerHTML="<br>Invalid email address, please provide a correct email.";
        document.getElementById("reminderEmail").style.color="red";
        $error3=true;

    }
    else{
        document.getElementById("reminderEmail").innerHTML="";
        $error3=false;
    }

    //check subject
    if (document.getElementById("subject").value== "") {
        document.getElementById("reminderSubject").innerHTML="<br>Subject field cannot be empty.";
        document.getElementById("reminderSubject").style.color="red";
        $error4=true;
    }
    else{
        document.getElementById("reminderSubject").innerHTML="";
        $error4=false;
    }
    //check comment
    if (document.getElementById("comment").value== ""||document.getElementById("comment").value== "Enter your comments here") {
        document.getElementById("reminderComment").innerHTML="Comment field cannot be empty.";
        document.getElementById("reminderComment").style.color="red";
        $error5=true;
    }
    else{
        document.getElementById("reminderComment").innerHTML="";
        $error5=false;
    }

    //check radio button
    //if(document.form.favpart.value!="Natural_Landscape"&&document.form.favpart.value!="Cultural_Landscape"&&document.form.favpart.value!="events"){
    //	document.getElementById("reminderRadio").innerHTML="Please select a radio button!";
    //	document.getElementById("reminderRadio").style.color="red";
    //	return false;
    //}
    //else{document.getElementById("reminderRadio").innerHTML="";}
    if($error1||$error2||$error3||$error4||$error5){
        //alert('Please correct all inputs in colored fields.');
        return false;
    }else{
        return true;
    }
}