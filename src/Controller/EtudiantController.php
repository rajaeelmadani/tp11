<?php

namespace App\Controller;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

 class EtudiantController extends AbstractController{
	public function DireBonjour(){		
		$filiere = "SMI";		
		//return new Response("Bonjour ". $filiere);		
	return $this->render("Etudiant\saluer.html.twig",["f"=>$filiere]);		

	}
  
	public function liste(){
		// return new Response("Nous sommes dans la méthode liste");	
		return $this->render("Etudiant\liste.html.twig");		

}
/**
	*@Route("/etudiants/detail", name="etudiant_liste")
	*/
	public function detail(){		
		$nom = "Moujtahid";		
		//return new Response("C'est l'étudiant : ". $nom);		
      return $this->render("Etudiant\detail.html.twig",["nom"=>$nom]);		
}
 }