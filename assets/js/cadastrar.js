function validform() {

    var a = document.forms["my-form"]["full-name"].value;
    var b = document.forms["my-form"]["email-address"].value;
    var c = document.forms["my-form"]["telefone"].value;
    var d = document.forms["my-form"]["password"].value;

    if (a==null || a=="")
    {
        alert("Por favor escreva seu nome todo");
        return false;
    }else if (b==null || b=="")
    {
        alert("Por favor digite seu email");
        return false;
    }else if (c==null || c=="")
    {
        alert("Por favor digite seu telefone");
        return false;
    }else if (d==null || d=="")
    {
        alert("Por favor digite sua senha");
        return false;
    }

}