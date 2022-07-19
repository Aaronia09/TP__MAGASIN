<?php
class Magasin{

}

class Produit{
    private string $nom;
    private int $prixAchat;
    private int $prixVente;
    private int $nbExemplaire;
    private string $description;
    public function getNom(){
        return $this->nom;
    }
    public function getPrixAchat(){
        return $this->prixAchat;
    }
    public function getPrixVente(){
        return $this->prixVente;
    }
    public function getNbExemplaire(){
        return $this->nbExemplaire;
    }
    public function getDescription(){
        return $this->description;
    }
    public function setNom(string $nom):string{
        $this->nom=$nom;
    }
    public function setPrixAchat(int $prixAchat):int{
        $this->prixAchat=$prixAchat;
    }
    public function setPrixVente(int $prixVente):int{
        $this->prixAchat=$prixVente;
    }
    public function setNbExemplaire(int $nbExemplaire):int{
        $this->nbExemplaire=$nbExemplaire;
    }
    public function setDescription(string $description):string{
        $this->description=$description;
    }
    public function __construct(string $nom, int $prixAchat, int $prixVente){
        $this->nom=$nom;
        $this->prixAchat=$prixAchat;
        $this->prixVente=$prixVente;
    }  
    $description="default";
    $nbExemplaire=0;


class Livre extends Produit{
    
}
?>