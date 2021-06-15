<?php

namespace App\Controller;

use App\Entity\Forums;
use App\Entity\SousCategories;
use App\Form\ForumType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ForumsController extends AbstractController
{
     /**
     * @Route("/CreerUnSujet/{id}", name="New_Forum")
     */
    public function new(Request $request,SousCategories $souscategories): Response {
        dump($souscategories);
        //$forum = new Forums();*/
        
        //$form = $this->createForm(ForumType::class, $forum);

        // on met à jour l'objet $form avec les données saisies
        /*$form->handleRequest($request);

        // On s'assure que le formulaire à été soumis et que les données sont cohérentes 
        if($form->isSubmitted() && $form->isValid()) {
            $forum->setCreatedAt(new \DateTime());
            //$forum->setSouscategories($souscategories);
            // on récupère une instance de l'Entity Manager gràce à la méthode getDoctrine()
            //issu de la class AbstractController
            $em = $this->getDoctrine()->getManager();
            $em->persist($forum); // on ajoute l'objet $article à l'Entity Manager
            $em->flush(); // on synchronise l'objet ajouté a l'entity manager avec la BDD
            // return $this->redirectToRoute('souscategories');

        }*/
        return $this->render('Forums/CreerForums.html.twig', [
            //'form' => $form->createView()
        ]);
    }
}
