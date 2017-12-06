<?php
namespace Test\ArticleBundle\TvaListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;


class Tva17Listener
{
  /**
   * @var ApplicationMailer
   */
  private $tva17;

  public function __construct($tva17)
  {
    $this->tva17 = $tva17;
  }

  public function postPersist(LifecycleEventArgs $args)
  {
    $entity = $args->getObject();
    if (!$entity instanceof Article) {
      return;
    }

    $this->applicationMailer->sendNewNotification($entity);
  }
}
