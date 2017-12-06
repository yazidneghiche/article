<?php
namespace Test\ArticleBundle\EventListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use  Test\ArticleBundle\Tva\Tva;
use Doctrine\Common\Persistence\ManagerRegistry;
use Test\ArticleBundle\Entity\Article;

class TvaListener
{
  /**
   * @var ApplicationMailer
   */
  private $tva;
  private $doctrine;

  public function __construct(ManagerRegistry $doctrine,Tva $tva)
  {
    $this->tva = $tva;
	$this->doctrine= $doctrine;
  }

  public function prePersist(LifecycleEventArgs $args)
  {
 
    $entity = $args->getObject();
    if (!$entity instanceof Article) {
      return;
    }
	
	if($this->tva->getTva() == 17)
	  $entity->setTva17($this->tva->getAmount());
	else  $entity->setTva3($this->tva->getAmount());
	
	/*$this->getManager()->persist($entity);
	$this->getManager()->flush($entity);*/
	
  }
 
    
	
	private function getManager(){
	
	return $this->doctrine->getManager($this->doctrine->getDefaultManagerName());
	
  }
}
