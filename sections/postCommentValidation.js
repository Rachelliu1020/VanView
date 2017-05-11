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
    //check comment
    if (document.getElementById("comment").value== ""||document.getElementById("comment").value== "Enter your comments here") {
        document.getElementById("reminderComment").innerHTML="Comment field cannot be empty.";
        document.getElementById("reminderComment").style.color="red";
        $error=true;
    }
    else{
        document.getElementById("reminderComment").innerHTML="";
        $error=false;
    }

    if($error){
        return false;
    }else{
        return true;
    }
}
