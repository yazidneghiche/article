<?php
namespace Test\ArticleBundle\Tva;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Test\ArticleBundle\Entity\Article;
class Tva
{
  private $tva;
  private $amount;
  
  public function __construct($tva,$amount=null)
  {
    $this->tva = $tva;
	$amount =$this->amount;
  }

  /**
   * 
   * @return array
   */
  public function prePersist(LifecycleEventArgs $args)
  {

    $entity = $args->getObject();
	
    if (!$entity instanceof article) {
      return;
    }
	
	//si null in recupere le prix dans l'objet
	if(is_null($this->amount)) $this->amount = $entity->getAmountHT();
	
	//affectation de la tva
    $this->amount=$amount*$this->tva ;
	
	if($this->getTva() == 17)
	  $entity->setTva17($this->getAmount());
	else  $entity->setTva3($this->getAmount());
  }
  
  public function getTva()
  {
    return $this->tva*100-100 ;
  }
  public function getAmount()
  {
    return  $this->amount ;
  }
}