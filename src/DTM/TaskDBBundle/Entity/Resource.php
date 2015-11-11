<?php

namespace DTM\TaskDBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resource
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DTM\TaskDBBundle\Entity\ResourceRepository")
 */
class Resource
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="avilability", type="float")
     */
    private $avilability;

    /**
     * @var string
     *
     * @ORM\Column(name="e-mail", type="string", length=255)
     */
    private $e_mail;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="whats_app_id", type="string", length=255)
     */
    private $whatsAppId;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=255)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="hangouts", type="string", length=255)
     */
    private $hangouts;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Resource
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Resource
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
     * Set type
     *
     * @param string $type
     *
     * @return Resource
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set avilability
     *
     * @param float $avilability
     *
     * @return Resource
     */
    public function setAvilability($avilability)
    {
        $this->avilability = $avilability;

        return $this;
    }

    /**
     * Get avilability
     *
     * @return float
     */
    public function getAvilability()
    {
        return $this->avilability;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     *
     * @return Resource
     */
    public function setEMail($eMail)
    {
        $this->e_mail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string
     */
    public function getEMail()
    {
        return $this->e_mail;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Resource
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set whatsAppId
     *
     * @param string $whatsAppId
     *
     * @return Resource
     */
    public function setWhatsAppId($whatsAppId)
    {
        $this->whatsAppId = $whatsAppId;

        return $this;
    }

    /**
     * Get whatsAppId
     *
     * @return string
     */
    public function getWhatsAppId()
    {
        return $this->whatsAppId;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Resource
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set hangouts
     *
     * @param string $hangouts
     *
     * @return Resource
     */
    public function setHangouts($hangouts)
    {
        $this->hangouts = $hangouts;

        return $this;
    }

    /**
     * Get hangouts
     *
     * @return string
     */
    public function getHangouts()
    {
        return $this->hangouts;
    }
}
