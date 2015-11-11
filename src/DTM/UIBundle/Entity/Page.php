<?php

namespace DTM\UIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DTM\UIBundle\Entity\PageRepository")
 */
class Page
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
     * @ORM\Column(name="control_name", type="string", length=255)
     */
    private $controlName;

    /**
     * @var string
     *
     * @ORM\Column(name="control_type", type="string", length=255)
     */
    private $controlType;

    /**
     * @var string
     *
     * @ORM\Column(name="control_def_value", type="string", length=255)
     */
    private $controlDefValue;

    /**
     * @var string
     *
     * @ORM\Column(name="constraints", type="string", length=255)
     */
    private $constraints;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_table", type="string", length=255)
     */
    private $refTable;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_column", type="string", length=255)
     */
    private $refColumn;


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
     * Set controlName
     *
     * @param string $controlName
     *
     * @return Page
     */
    public function setControlName($controlName)
    {
        $this->controlName = $controlName;

        return $this;
    }

    /**
     * Get controlName
     *
     * @return string
     */
    public function getControlName()
    {
        return $this->controlName;
    }

    /**
     * Set controlType
     *
     * @param string $controlType
     *
     * @return Page
     */
    public function setControlType($controlType)
    {
        $this->controlType = $controlType;

        return $this;
    }

    /**
     * Get controlType
     *
     * @return string
     */
    public function getControlType()
    {
        return $this->controlType;
    }

    /**
     * Set controlDefValue
     *
     * @param string $controlDefValue
     *
     * @return Page
     */
    public function setControlDefValue($controlDefValue)
    {
        $this->controlDefValue = $controlDefValue;

        return $this;
    }

    /**
     * Get controlDefValue
     *
     * @return string
     */
    public function getControlDefValue()
    {
        return $this->controlDefValue;
    }

    /**
     * Set constraints
     *
     * @param string $constraints
     *
     * @return Page
     */
    public function setConstraints($constraints)
    {
        $this->constraints = $constraints;

        return $this;
    }

    /**
     * Get constraints
     *
     * @return string
     */
    public function getConstraints()
    {
        return $this->constraints;
    }

    /**
     * Set refTable
     *
     * @param string $refTable
     *
     * @return Page
     */
    public function setRefTable($refTable)
    {
        $this->refTable = $refTable;

        return $this;
    }

    /**
     * Get refTable
     *
     * @return string
     */
    public function getRefTable()
    {
        return $this->refTable;
    }

    /**
     * Set refColumn
     *
     * @param string $refColumn
     *
     * @return Page
     */
    public function setRefColumn($refColumn)
    {
        $this->refColumn = $refColumn;

        return $this;
    }

    /**
     * Get refColumn
     *
     * @return string
     */
    public function getRefColumn()
    {
        return $this->refColumn;
    }
}
