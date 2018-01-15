<?php
/**
 * Created by PhpStorm.
 * User: jruacond
 * Date: 15/01/2018
 * Time: 9:52
 */
namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use JMS\Serializer\Annotation as JMS;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class User
 *
 * @MongoDB\Document(collection="users")
 * @JMS\ExclusionPolicy("none")
 */
class User extends BaseUser
{
    /**
     * @var string $id
     *
     * @MongoDB\Id
     * @JMS\Type("string")
     */
    protected $id;

    /**
     * @var string $name
     *
     * @MongoDB\Field(type="string")
     * @JMS\Type("string")
     * @JMS\ReadOnly
     * @Assert\Type("string")
     */
    protected $name;

    /**
     * @var string $firstname
     *
     * @MongoDB\Field(type="string")
     * @JMS\Type("string")
     * @Assert\Type("string")
     */
    protected $firstname;

    /**
     * @var Interest $interest
     *
     * @MongoDB\EmbedOne(targetDocument="AppBundle\Document\Interest")
     * @JMS\Type("AppBundle\Document\Interest")
     * @Assert\Type("AppBundle\Document\Interest")
    */
    protected $interest;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

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
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Interest
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * @param Interest $interest
     *
     * @return User
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;
        return $this;
    }

}