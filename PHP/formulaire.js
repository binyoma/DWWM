let tabEnvoi =[];  // mémoire temporaire des vérifications saisies 
// cililité
function civilite () {
var madame=document.getElementById("madame"); // pour recupèrer d'abord le choix s'il en a
var monsieur=document.getElementById("monsieur");
var autre=document.getElementById("autre");
var spanCivilite=document.getElementById("civilite"); // pour afficher le msg d'erreur

if (!madame.checked && !monsieur.checked && !autre.checked){
    var msg="Veuillez indiquez votre civilité";
    tabEnvoi[0]=false;
    spanCivilite.textContent=msg;
    spanCivilite.style.color=("#ff0000")
    }
else {
    tabEnvoi[0]=true;
}}
// nom
var testnom=new RegExp(/^[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ._ -]{1,30}$/i);
var spannom=document.getElementById("spannom");
var nom=document.getElementById("nom");
nom.addEventListener("blur",()=>{
var controleNom = testnom.test(nom.value);
if (controleNom==false){
    var msg="la case n'accepte que des lettres, des chiffres et les signes (.,-,_)"
    tabEnvoi[1]=false;
    }
else { tabEnvoi[1]=true}; 
spannom.textContent=msg;
spannom.style.color=("#ff0000");
})
//prénom
var testprenom=new RegExp(/^[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ._ -]{1,30}$/i);
var spanprenom=document.getElementById("spanprenom");
var nomprenom=document.getElementById("prenom");
prenom.addEventListener("blur",()=>{
var controleprenom = testprenom.test(prenom.value);
if (controleprenom ==false){
    var msg="la case n'accepte que des lettres, des chiffres et les signes (.,-,_)"
    tabEnvoi[2]=false;
    } 
else
    {tabEnvoi [2]=true};
spanprenom.textContent=msg;
spanprenom.style.color=("#ff0000");
})

//date de naissance
var spandt=document.getElementById("spandt");
var dateNaissance=document.getElementById("dt"); // recupère la date de naissance 
var naissance=  new Date (dateNaissance.value); // la transfome en objet date 
var anneeNaissance =naissance.getUTCFullYear();  // recupère seulement l'année
var dateSaisie= new Date (Date.now())  ;                    // la date  de saisie du formulaire 
var anneeSaisie=dateSaisie.getUTCFullYear(); // l'annéé de saisie du formulaire
var age=anneeSaisie-anneeNaissance;          // Calcul de l'âge
dateNaissance.addEventListener("blur",()=>{
    if (age<18){
            var msg="vous étes mineur(e), veuillez demander à votre représentant légal de compléter le formulaire pour vous!"
            tabEnvoi[3]=false;
            } 
    else if (age>130){
            var msg="Nous doutons de votre existence sur Terre!"
            tabEnvoi[3]=false;
            }
    else 
            { tabEnvoi[3]=true}; 
spandt.textContent=msg;
spandt.style.color=("#ff0000");
})

// code postale
var testcp = new RegExp(/^([0-9]{5,5})+$/i);
var spancp=document.getElementById("spancp");
var cp = document.getElementById("cptest");
cp.addEventListener("blur",()=>{
var controlecp = testcp.test(cp.value);
if(controlecp == false){
    var msg="Le code postal accepte uniquement 5 chiffres"
    tabEnvoi[4]=false;
    }
else {
    tabEnvoi[4] =true;
    }
spancp.textContent=msg;
spancp.style.color=("#ff0000");
})
//adresse
var testadresse=new RegExp(/^[a-z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ._-\\s]+$/i);
var spanadresse=document.getElementById("spanadresse");
var adresse=document.getElementById("adresse");
adresse.addEventListener("blur",()=>{
var controleadresse = testadresse.test(adresse.value);
if (controleadresse==false){
    var msg ="la case n'accepte que des lettres, des chiffres et les signes (.,-,_)";
    tabEnvoi[5]=false;
    }
else {
    tabEnvoi[5]=true;
    }
spanadresse.textContent= msg;
spanadresse.style.color=("#ff0000");
})

//ville
var testville=new RegExp(/^[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ._ -]{1,30}$/i);
var spanville=document.getElementById("spanville");
var ville=document.getElementById("ville");
ville.addEventListener("blur",()=>{
var controleville = testville.test(ville.value);
if (controleville==false){
    var msg="Le nom de la ville doit etre écrite en lettres";
    tabEnvoi[6]=false;
    }
else{
    tabEnvoi[6]=true;
    }
spanville.textContent=msg;
spanville.style.color=("#ff0000");
})

//email
var testmail=new RegExp(/^[a-z0-9\-_]+[a-z09\.\-_]*@[a-z0-9\-_]{2,}\.[a-z\.\-_]+[a-z\-_]+$/i);
var spanmail=document.getElementById("spanmail");
var mail=document.getElementById("mail");
mail.addEventListener("blur",()=>{
var controlemail = testmail.test(mail.value);
if (controlemail==false){
    var msg="veuillez verifier la validité de votre email";
    tabEnvoi[7]=false;
    }
else{
    tabEnvoi[7]=true;
    }
spanmail.textContent=msg;
spanmail.style.color=("#ff0000");
})

//objet de la demande

var spanobjet=document.getElementById("spanobjet");
var objet=document.getElementById("objet");
objet.addEventListener("blur",()=>{
if (objet.value=="objet"){
    var msg="Choisissez votre objet de nous contacter";
    tabEnvoi[8]=false;
    }
else {
    tabEnvoi[8]=true;
    }
spanobjet.textContent=msg;
spanobjet.style.color=("#ff0000");
})

// textaria

var spantext=document.getElementById("spantext");
var textaria=document.getElementById("message");
textaria.addEventListener("blur",()=>{
if (textarea=""){
    var msg="saisissez votre message"
    tabEnvoi[9]=false;
    }
else{
    tabEnvoi[9]=true;
    }
spantext.textContent=msg;
spantext.style.color=("#ff0000");
})

//  envoi


var ok=true; // boolean true seulement si les saisies sont correctes

var envoi=document.getElementById("envoi");
envoi.addEventListener("click",function (event){
    civilite();
    for (var i=0; i< tabEnvoi.length;i++){
        if (tabEnvoi[i] ==false){
            ok=false;
            }
        }
    if (ok==true) {
        var formulaire = document.getElementById("formulaire")
        formulaire.submit();
        }
    else {
        event.preventDefault();
        }
    })