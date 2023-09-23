                
let montant = 15000;
let nom = "John Doe";
let age = "33";




function infos()
{
    
    console.log(nom);
    console.log(age);
    console.log(montant);
    
}

infos();
console.log("erreur survenue ");

function redirect()
{
    alert("voulez vous quitter cette page");
    location.href="https://fr-fr.facebook.com/lite/";
}

function redirectform()
{
    alert("voulez vous aller sur le formulaire ?");
    location.href="form.php";
}

function redirectindex()
{
    alert("voulez vous retourner a la page d'acceuil ?");
    location.href="index.php";
}

function textChanger()
{
    document.getElementById("miage").innerHTML = "Voici le nouveau text !";
}
