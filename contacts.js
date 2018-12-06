
/* Les contacts tels qu'extraits de la base, pour tester l'affichage du select sans avoir à écrire la requête AJAX */
var lesContacts =
[
    {"id":"1","nom":"CASTAFIORE","prénom":"Bianca","tél":"04 75 47 88 65"},
    {"id":"2","nom":"HADDOCK","prénom":" Capitaine","tél":"04 75 41 04 21"},
    {"id":"3","nom":"SANZOT","prénom":"Boucherie","tél":"04 75 41 04 31"},
    {"id":"4","nom":"TINTIN","prénom":"et Milou","tél":"04 75 41 04 22"},
    {"id":"5","nom":"TOURNESOL","prénom":"Tryfon","tél":"04 75 41 04 23"}
];

// id du contact séléctionné
var leContact = -1;

// Remplissage du select des contacts à partir d'un tableau de contacts
function populateSelect(mesContacts)
{
    var liste = document.getElementById("contacts");

    for( var contact of mesContacts )
    {
      var i = 1;
      var option = document.createElement("option");
      option.text = contact.nom + " " + contact.prénom;
      option.value = contact.id;
      liste.add(option, liste[i]);
      i++;
    }

}

// Remplissage du formulaire avec les données du contact
function populateForm(contact)
{
  var liste = document.getElementById("tForm");

  for( var contact of mesContacts )
  {
    var i = 1;
    var option = document.createElement("option");
    option.text = contact.nom;
    option.value = contact.id;
    liste.add(option, liste[i]);
    i++;
  }

}

// Rafraichissement de l'affichage lors du changement du contact sélectionné
// Reçoit l'identifiant du contact
function rafraichir(contact)
{
    var leContact = contact*1;
    var myTableForm = document.getElementById("tForm");
    var myButtons = document.getElementById("pBoutons");
    var erase = myButtons.lastElementChild;

    switch(leContact)
    {
      case -1:
        myTableForm.style.visibility = "visible";
        myButtons.style.visibility = "visible";
        erase.style.visibility = "hidden";
        break;

      case -2:
        myTableForm.style.visibility = "hidden";
        myButtons.style.visibility = "hidden";
        erase.style.visibility = "hidden";
        break;

      default:
        myTableForm.style.visibility = "visible";
        myButtons.style.visibility = "visible";
        erase.style.visibility = "visible";
        break;
    }
}

// Chargement de la liste des contacts et initialisation du select
function init()
{
    leContact = -2;
    // Masque le formulaire et les boutons puisqu'ici leContact == -2
    afficheForm();
    afficheBoutons();
    // Dans un deuxième temps, on ira chercher les contacts avec une requête AJAX, on se contente pour l'instant
    // d'afficher la liste préchargée
    populateSelect(lesContacts);
}

// Affichage du formulaire contenant les informations d'un utilisateur
function afficheForm()
{

}

// Affichage du ou des boutons de validation du formulaire
function afficheBoutons()
{

}

// Enregistrement des données du formulaire
function validerForm(choix)
{
    alert("validerForm à compléter !");
}
