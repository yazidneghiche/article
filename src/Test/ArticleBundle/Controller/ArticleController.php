<?php

namespace Test\ArticleBundle\Controller;

use Test\ArticleBundle\Entity\Article;
use Test\ArticleBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
   public function addAction(Request $request)
   {
    $article = new Article;
    $form = $this->get('form.factory')->create(ArticleType::class, $article);
	
	
	if ($request->isMethod('POST')) {
 
      $form->handleRequest($request);

      if ($form->isValid()) {
       
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Article bien enregistrée.');

        // On redirige vers la page des articles
        return $this->redirectToRoute('articles');
      }
    }

    return $this->render('TestArticleBundle:Article/form:form.html.twig', array(
      'form' =>  $form->createView(),
    ));
   }
    
	//display articles
   public function showArticlesAction(Request $request)
   {
   
    
    $articles = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('TestArticleBundle:Article')
                            ->findAll();

    return $this->render('TestArticleBundle:Article:article.html.twig', array(
      'articles' => $articles ,
    ));
   }
   
   //remove article
   public function deleteAction(Request $request)
   {
   
    $id =$request->request->get('id');
    $article = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('TestArticleBundle:Article')
                            ->find($id);
     $em = $this->getDoctrine()->getManager();
     $em->remove($article);
     $em->flush();
	 
    return new response('ok');
   }
}
