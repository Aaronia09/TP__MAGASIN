<?php
class Magasin{
   private float $solde;
   private produit $produit;
   public function getSolde(){
    return $this->solde;
}
public function setSolde(float $solde):float{
    $this->solde=$solde;
}
public function getProduit(){
    return $this->produit;
}

public function setProduit(produit $produit):produit{
    $this->produit=$produit;
}
public function __construct(float $solde, produit $produit){
    $this->solde=$solde;
    $this->prosuit=$produit;
    
}  
public function ajouterProduit(String $nom,float $prixAchat, float $prixVente);

public function acheterProduit(int $referenceProduit,int $nbExemplaire);

public function vendreProduit(int $referenceProduit,int $nbExemplaire);
}


class Produit extends Magasin{
    private string $nom;
    private float $prixAchat;
    private float $prixVente;
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
    public function setPrixAchat(float $prixAchat):float{
        $this->prixAchat=$prixAchat;
    }
    public function setPrixVente(float $prixVente):float{
        $this->prixAchat=$prixVente;
    }
    public function setNbExemplaire(int $nbExemplaire):int{
        $this->nbExemplaire=$nbExemplaire;
    }
    public function setDescription(string $description):string{
        $this->description=$description;
    }
    public function __construct(string $nom, float $prixAchat, float $prixVente){
        $this->nom=$nom;
        $this->prixAchat=$prixAchat;
        $this->prixVente=$prixVente;
    }  
    $ description ="pas de descrition" ;
    $nbExemplaire = Null;
    
}
class Livre extends Produit{

}
class Cd extends Produit{
    private string $auteur;
    private string $interprete;
    private string $titres;
    
}


    


?>