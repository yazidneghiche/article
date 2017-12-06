<?php

namespace Test\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="Test\ArticleBundle\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    
    /**
     * @var float
     *
     * @ORM\Column(name="AmountHt", type="float")
	 * @Assert\GreaterThan(0)
     */
    private $amountHt;
    
	 /**
     * @var float
     *
     * @ORM\Column(name="tva_17", type="float", nullable=true)
     */
    private $tva_17;
	
	 /**
     * @var float
     *
     * @ORM\Column(name="tva_3", type="float", nullable=true)
     */
    private $tva_3;
	
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="datetime")
     */
    private $creation;

    public function __construct(){
	 $this->creation = new \Datetime();
	}
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Article
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set amountHt
     *
     * @param float $amountHt
     *
     * @return Article
     */
    public function setAmountHt($amountHt)
    {
        $this->amountHt = $amountHt;

        return $this;
    }

    /**
     * Get amountHt
     *
     * @return float
     */
    public function getAmountHt()
    {
        return $this->amountHt;
    }

    /**
     * Set creation
     *
     * @param \DateTime $creation
     *
     * @return Article
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get creation
     *
     * @return \DateTime
     */
    public function getCreation()
    {
        return $this->creation;
    }
	
	

    /**
     * Set tva17
     *
     * @param float $tva17
     *
     * @return Article
     */
    public function setTva17($tva17)
    {
        $this->tva_17 = $tva17;

        return $this;
    }

    /**
     * Get tva17
     *
     * @return float
     */
    public function getTva17()
    {
        return $this->tva_17;
    }

    /**
     * Set tva3
     *
     * @param float $tva3
     *
     * @return Article
     */
    public function setTva3($tva3)
    {
        $this->tva_3 = $tva3;

        return $this;
    }

    /**
     * Get tva3
     *
     * @return float
     */
    public function getTva3()
    {
        return $this->tva_3;
    }
}
