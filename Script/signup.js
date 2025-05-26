let eyeicon = document.getElementById("eyeicon");
let password = document.getElementById("password");

eyeicon.onclick = function(){
    if(password.type == "password"){
        password.type = "text";
        eyeicon.src = "images/eye-open.png"
    }else{password.type = "password";
    eyeicon.src = "images/eye-close.png";
}
};

let eyeicon2 = document.getElementById("eyeicon2");
let password2 = document.getElementById("password2");

eyeicon2.onclick = function(){
    if(password2.type == "password"){
        password2.type = "text";
        eyeicon2.src = "images/eye-open.png"
    }else{password2.type = "password";
    eyeicon2.src = "images/eye-close.png";
}
};

