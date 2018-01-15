<?php
/**
 * Created by PhpStorm.
 * User: jruacond
 * Date: 15/01/2018
 * Time: 10:59
 */

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Interest
 *
 * @MongoDB\EmbeddedDocument
 * @JMS\ExclusionPolicy("none")
 */
class Interest
{
    /**
     * @var string $name
     *
     * @MongoDB\Field(type="string")
     * @JMS\Type("string")
     * @Assert\Type("string")
     */
    private $name;
    /**
     * @var string $description
     *
     * @MongoDB\Field(type="string")
     * @JMS\Type("string")
     * @Assert\Type("string")
     */
    private $description;
    /**
     * @var \DateTime $date
     *
     * @MongoDB\Field(type="date")
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @Assert\Date()
     */
    private $date;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Interest
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Interest
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     *
     * @return Interest
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }




}