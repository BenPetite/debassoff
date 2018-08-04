<?php
function contactForm(array $contact, $bdd){
    $req = $bdd->prepare('INSERT INTO contact(nom_contact, prenom_contact, email_contact, message_contact)
                          VALUES(:nom_contact, :prenom_contact, :email_contact, :message_contact)');
    $req->execute([
      ":nom_contact" => $contact["nom_contact"],
      ":prenom_contact" => $contact["prenom_contact"],
      ":email_contact" => $contact["email_contact"],
      ":message_contact" => $contact["message_contact"]
    ]);
  }
