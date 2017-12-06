<?php
namespace Test\ArticleBundle\Tva;

class Price
{
  private $amount;
  private $tva3;


  public function __construct($amount,array $tva)
  {
    $this->tva    = $tva;
    $this->amount   = $amount;
  }

  /**
   * Vérifie si le texte est un spam ou non
   *
   * @param string $text
   * @return bool
   */
  public function addTva17()
  {
    return $this->amount* $this->tva;
  }
}