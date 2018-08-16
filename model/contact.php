<?php
function contactForm(array $contact, $bdd){
    $req = $bdd->prepare('INSERT INTO contact(date_contact, name_contact, firstName_contact, email_contact, text_contact)
                          VALUES(:date_contact, :name_contact, :firstName_contact, :email_contact, :text_contact)');
    $req->execute([
      ":date_contact" => $contact["date_contact"],
      ":name_contact" => $contact["name_contact"],
      ":firstName_contact" => $contact["firstName_contact"],
      ":email_contact" => $contact["email_contact"],
      ":text_contact" => $contact["text_contact"]
    ]);
  }

function deleteContact(array $dContact, $bdd){
    $req = $bdd->prepare("DELETE FROM contact WHERE id_contact = ?");
    $req->execute([$dContact["id_contact"]]);
      return $dContact;
 }
