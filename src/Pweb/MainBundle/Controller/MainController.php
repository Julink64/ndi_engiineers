<?php
namespace Pweb\MainBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pweb\MainBundle\Entity\Projet;
use Pweb\MainBundle\Entity\Image;
use Pweb\MainBundle\Entity\Visiteur;

use JMS\SecurityExtraBundle\Annotation\Secure;
//use Symfony\Component\Security\Core\Util\SecureRandom;


class MainController extends Controller
{
# ------------------------------------------------------------------------------
# ACCUEIL


  public function menuAction()
  {
    $nombre_proj=10;$nombre_cat=10;
    $liste_proj = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('PwebMainBundle:Projet')
                  ->findBy(
                    array('id' => 'desc')
                  );
    return $this->render('PwebMainBundle:Main:menu.html.twig', array(
      'liste_projets' => $liste_proj));
  }
  
  public function accueilAction()
  {
    return $this->render('PwebMainBundle:Main:accueil.html.twig');
  }
  
  public function aproposAction()
  {
    return $this->render('PwebMainBundle:Main:apropos.html.twig');
  }
  
  public function utilisateurAction()
  {
	$user = $this->container->get('security.context')->getToken()->getUser();
    return $this->render('PwebMainBundle:Main:utilisateur.html.twig', array('utilisateur'=>$user));
  }
  
  public function cvAction()
  {
  	$user = new Visiteur();
	$formBuilder = $this->createFormBuilder($user);
	$formBuilder
		->add('nom',		'text')
		->add('prenom',		'text')
		->add('email',    'text')
		;
	$form = $formBuilder->getForm();
	$request = $this->get('request');
	if ($request->getMethod() == 'POST') {
		$form->bind($request);
		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager(); 
			$em->persist($user);
			$em->flush();
			return $this->render('PwebMainBundle:Main:formulaire_requete_envoyee.html.twig');
		} 
	}
    return $this->render('PwebMainBundle:Main:formulaire_requete.html.twig',array(
	'form' => $form->createView()));
  }

# ------------------------------------------------------------------------------
# VOIR UN PROJET

  public function voirAction($id)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();

    $proj = $em->getRepository('PwebMainBundle:Projet')
              ->find($id);

        if($proj === null)
    {
      throw $this->createNotFoundException('Projet[id='.$id.'] inexistant.');
    }
    
    $liste_images = $em->getRepository('PwebMainBundle:Image')
->findByProjet($id);
    
    return $this->render('PwebMainBundle:Main:voir.html.twig', array(
      'projet'        => $proj,
      'liste_images' => $liste_images
      ));
   }

	public function voirtoutAction()
  {
    $nombre=15;
    $mi=1;
    $proj = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('PwebMainBundle:Projet')
                  ->findBy(
                    array(),          // Pas de critère
                    array('libelle' => 'asc'), // Trie alphabétique 
                    $nombre,         // On sélectionne $nombre projets
                    0                // À partir du premier
                  );
                  
    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();
               
    $liste_images = $em->getRepository('PwebMainBundle:Image')
->findAll();
      
    return $this->render('PwebMainBundle:Main:index.html.twig', array(
    'projet'        => $proj,
    'liste_images' => $liste_images
    ));
  }

# ------------------------------------------------------------------------------
# ADMINISTRATEUR. PROJET : AJOUTER, SUPPRIMER, MODIFIER

/**
   * @Secure(roles="ROLE_ADMIN")
*/
 public function ajouterAction()
  {
	$proj = new Projet();
	
	// On crée le FormBuilder grâce à la méthode du contrôleur
	$formBuilder = $this->createFormBuilder($proj);
	$formBuilder
		
		->add('libelle',		'text')
		->add('categorie',		'text')
		->add('description',    'textarea')
		->add('phrase',			'textarea')
		->add('langage',		'text')
		->add('logo',			'text')
		->add('fichier',			'text')
		->add('apercu',			'text')
		;
	// Pour l'instant, pas de commentaires, catégories, etc., on les gérera plus tard
	// À partir du formBuilder, on génère le formulaire
	$form = $formBuilder->getForm();
	
	// On récupère la requête
	$request = $this->get('request');
	
	// On vérifie qu'elle est de type POST
	if ($request->getMethod() == 'POST') {
		
		
		// On fait le lien Requête <-> Formulaire
		// A partir de maintenant, la variable $projet contient les valeurs entrées dans le formulaire par le visiteur
		$form->bind($request);
		
		
		// On vérifie que les valeurs rentrées sont correctes
		// (Nous verrons la validation des objets en détail dans le prochain chapitre)
		if ($form->isValid()) {
		
			// On l'enregistre notre objet $projet dans la base de données
			$em = $this->getDoctrine()->getManager(); 
			$em->persist($proj);
			$em->flush();
			$url1=$proj->getLogo();
			$url1='projets/logos/'.$url1;
			$urlindex = $this->generateUrl('PwebMain_accueil');
			$urlindex = str_replace('app_dev.php/',$url1,$urlindex);
			$proj->setLogo($urlindex);
			$url2=$proj->getFichier();
			$url2='projets/fichiers/'.$url2;
			$urlindex = $this->generateUrl('PwebMain_accueil');
			$urlindex = str_replace('app_dev.php/',$url2,$urlindex);
			$proj->setFichier($urlindex);
			$em->flush();
			
			// On redirige vers la page de visualisation de le projet nouvellement créé
			return $this->redirect($this->generateUrl('PwebMain_voir', array('id' => $proj->getId())));
			
		} 
	}
	$title="Ajouter un projet";
    return $this->render('PwebMainBundle:Main:ajouter.html.twig', array(
'form' => $form->createView(), 'title' => $title));
  }
  
  
/**
   * @Secure(roles="ROLE_ADMIN")
*/
  public function modifierAction($id)
  {
	
	
    $em = $this->getDoctrine()
               ->getManager();

    $proj = $em->getRepository('PwebMainBundle:Projet')
                  ->find($id);
 	
 	$formBuilder = $this->createFormBuilder($proj);
	$formBuilder
		->add('libelle',		'text')
		->add('description',		'text')
		->add('categorie',		'text')
		->add('langage',		'text')
		->add('logo',		'text')
		->add('fichier',		'text')
		->add('apercu',		'text')
		->add('phrase',		'text')
		;
	$form = $formBuilder->getForm();
	$request = $this->get('request');
	if ($request->getMethod() == 'POST') {
		$form->bind($request);
		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager(); 
			$em->persist($proj);
			$em->flush();
		} 
	}
	
    if($proj === null)
    {
      throw $this->createNotFoundException('Projet[id='.$id.'] inexistant.');
    }
    
    return $this->render('PwebMainBundle:Main:modifier.html.twig', array(
      'projet' => $proj,'form' => $form->createView()));
  }
  
/**
   * @Secure(roles="ROLE_ADMIN")
*/
  public function supprimerAction(Projet $projet)
  {
    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'un projet contre cette faille
    $form = $this->createFormBuilder()->getForm();

    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
      $form->bind($request);

      if ($form->isValid()) { // Ici, isValid ne vérifie donc que le CSRF
        // On supprime le projet
        $em = $this->getDoctrine()->getManager();
        $em->remove($projet);
        $em->flush();

        // On définit un message flash
        $this->get('session')->getFlashBag()->add('info', 'Projet bien supprimé');

        // Puis on redirige vers l'accueil
        return $this->redirect($this->generateUrl('PwebMain_accueil'));
      }
    }

    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    return $this->render('PwebMainBundle:Main:supprimer.html.twig', array(
      'projet' => $projet,
      'form'    => $form->createView()
    ));
  }
  
/**
   * @Secure(roles="ROLE_ADMIN")
*/
  public function gererprojetAction()
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();

    $liste_projets = $em->getRepository('PwebMainBundle:Projet')->findAll();

        if($liste_projets === null)
    {
      throw $this->createNotFoundException('Projets inexistants');
    }
    
    return $this->render('PwebMainBundle:Main:gerer_projet.html.twig', array(
      'liste_projets'        => $liste_projets));
  }

/**
   * @Secure(roles="ROLE_ADMIN")
*/
  public function lierimagesAction()
  {
  	return $this->render('PwebMainBundle:Main:maintenance.html.twig');
  }

# ------------------------------------------------------------------------------
# ADMINISTRATEUR. IMAGE : AJOUTER, SUPPRIMER, MODIFIER

/**
   * @Secure(roles="ROLE_ADMIN")
*/
public function voirimageAction()
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();

    $liste_images = $em->getRepository('PwebMainBundle:Image')->findAll();

        if($liste_images === null)
    {
      throw $this->createNotFoundException('Images inexistantes');
    }
    
    return $this->render('PwebMainBundle:Main:voirimage.html.twig', array(
      'liste_images'        => $liste_images));
  }


 /**
   * @Secure(roles="ROLE_ADMIN")
*/
 public function ajouterimageAction()
  {
	$img = new Image();
	// On crée le FormBuilder grâce à la méthode du contrôleur
	$formBuilder = $this->createFormBuilder($img);
	$formBuilder
		
		->add('url',		'text')
		->add('alt',		'text')
		->add('commentaire',		'text')
		;
	// Pour l'instant, pas de commentaires, catégories, etc., on les gérera plus tard
	// À partir du formBuilder, on génère le formulaire
	$form = $formBuilder->getForm();
	
	// On récupère la requête
	$request = $this->get('request');
	
	// On vérifie qu'elle est de type POST
	if ($request->getMethod() == 'POST') {
	
		// On fait le lien Requête <-> Formulaire
		// A partir de maintenant, la variable $projet contient les valeurs entrées dans le formulaire par le visiteur
		$form->bind($request);
		
		// On vérifie que les valeurs rentrées sont correctes
		// (Nous verrons la validation des objets en détail dans le prochain chapitre)
		if ($form->isValid()) {
		
			// On l'enregistre notre objet $projet dans la base de données
			$em = $this->getDoctrine()->getManager(); 
			$em->persist($img);
			$em->flush();
			$url=$img->getUrl();
			$url='projets/'.$url;
			$urlindex = $this->generateUrl('PwebMain_accueil');
			$urlindex = str_replace('app_dev.php/',$url,$urlindex);
			$img->setUrl($urlindex);
			$em->flush();
			
			// On redirige vers la page de visualisation de le projet nouvellement créé
			return $this->redirect($this->generateUrl('PwebMain_voirimage', array('id' => $img->getId())));
			
		} 
	}
	$title="Ajouter une image";
    return $this->render('PwebMainBundle:Main:ajouter.html.twig', array(
'form' => $form->createView(), 'title' => $title));
  }
  
/**
   * @Secure(roles="ROLE_ADMIN")
*/
  public function supprimerimageAction($id)
  {

    $em = $this->getDoctrine()->getManager();
    $img = $em->getRepository('PwebMainBundle:Image')->find($id);
    $em->remove($img);
    $em->flush();

    $liste_images = $em->getRepository('PwebMainBundle:Image')->findAll();

    // On définit un message flash
    $this->get('session')->getFlashBag()->add('info', 'Projet bien supprimé');

    
    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    return $this->render('PwebMainBundle:Main:voirimage.html.twig', array(
      'liste_images'        => $liste_images));
  }

# ------------------------------------------------------------------------------
# ESPACE ADMININISTRATEUR

  public function espaceadminAction()
  {
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'espace admin');
    }
    return $this->render('PwebMainBundle:Main:espaceclient.html.twig');
  }
  
  public function connecterAction()
  {
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'connexion');
    }
    $url = $this->generateUrl('PwebMain_accueil');
    $option = 'login';
    return $this->redirect($url.$option);
  }

  public function deconnecterAction()
  {
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'deconnexion');
    }
    $url = $this->generateUrl('PwebMain_accueil');
    $option = 'logout';
    return $this->redirect($url.$option);
  }
  
# ------------------------------------------------------------------------------
# STATISTIQUES
  
/**
   * @Secure(roles="ROLE_ADMIN")
*/
  public function statistiquesAction()
  {
    return $this->render('PwebMainBundle:Main:statistiques.html.twig');
  }
  
}

