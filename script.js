function validation(){
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;
    var userName = document.getElementById("username").value;

    if(password.length > 12 || password.length < 6){
        password.value = "";
        cpassword.value = "";
        password.focus();
        alert("Password not strong");
        return false;
    }
    // if(cpassword != password){
        // password.value ="";
        // cpassword.value ="";
        // password.focus();
        // alert("Confirm your password correctly");
        // return false;
    // }
    if(password.indexOf(" ") != -1){
        password.value = "";
        cpassword.value = "";
        password.focus();
        alert("Passwort must not contain space");
        return false;
    }
    if(userName.indexOf(" ")!=-1){
        alert("Username must not contain a space");
        userName.style.color ='red';
        userName.focus();
        return false;
    }
    return true;
}