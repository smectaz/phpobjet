<?php
class Personne 
{
    public string $nom;
    public string $prenom;
    public string $ville;
    public string $naissance;

    public function __construct(string $nom, string $prenom, string $ville, string $naissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ville = $ville;
        $this->naissance = $naissance;
    }

    public function afficheInfo(): string
    {
        return "Je m'apellle " . $this->nom . " " . $this->prenom .".<br>J'habite à " . $this->ville . ".<br>Je suis né(e) le " . $this->naissance . ".";
    }

    public function demenagement(string $adresse)
    {
        
        $this->ville = $adresse;
        return "<br>j'ai déménagé à " . $this->ville;
    }

    public function age()
    {
     $date = date("Y-m-d");

     $age = date_diff(date_create($this->naissance), date_create($date));

     if ($age != false){
         return "J'ai " . $age->format('%y') . " ans.";
     }
    }
}