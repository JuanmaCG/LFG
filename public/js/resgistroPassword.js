
const patron = () => {
    let password = document.getElementById("password").value;
    let password2 = document.getElementById("password2").value;


    let regExp = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;

    if(!regExp.test(password)) {
        alert("La contraseña debe contener entre 8 y 16 caracteres y al menos una mayuscula y una minuscula");
        return false;
    }else{
        return true;
    }

}

