<?php
/**
 * This file is part of the <name> project.
 *
 * (c) <yourname> <youremail>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Entity;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;

/**
 * This file has been generated by the Sonata EasyExtends bundle ( http://sonata-project.org/easy-extends )
 *
 * References :
 *   working with object : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en
 *
 * @author <yourname> <youremail>
 */
class User extends BaseUser
{

    /**
     * @var integer $id
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var integer $phonenumber
     */
    private $phonenumber;

    /**
     * @var integer $facebookId
     */
    private $facebookId;

    /**
     * @var integer $twitterId
     */
    private $twitterId;

    /**
     * @var string $twitter_username
     */
    private $twitter_username;

    /**
     * @var Brickstorm\Sms4FoodBundle\Entity\Restaurant
     */
    private $restaurants;

    /**
     * @var Brickstorm\Sms4FoodBundle\Entity\Booking
     */
    private $bookings;

    /**
     * @var Brickstorm\Sms4FoodBundle\Entity\Order
     */
    private $orders;

    /**
     * @var Brickstorm\WorldBundle\Entity\Location
     */
    private $locations;

    /**
     * @var Application\Sonata\UserBundle\Entity\Group
     */
    protected $groups;

    /**
     * @var Brickstorm\SolidRBundle\Entity\Project
     */
    private $projects;

    /**
     * @var Brickstorm\HumanRoadsBundle\Entity\UserStep
     */
    private $usersteps;

    /**
     * @var Brickstorm\SolidRBundle\Entity\Organization
     */
    private $organizations;


    public function __construct()
    {
      $this->restaurants = new \Doctrine\Common\Collections\ArrayCollection();
      $this->bookings = new \Doctrine\Common\Collections\ArrayCollection();
      $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
      $this->locations = new \Doctrine\Common\Collections\ArrayCollection();
      $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
      $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
      $this->usersteps = new \Doctrine\Common\Collections\ArrayCollection();
      $this->organizations = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set phonenumber
     *
     * @param integer $phonenumber
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;
    }

    /**
     * Get phonenumber
     *
     * @return integer 
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set facebookId
     *
     * @param integer $facebookId
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
    }

    /**
     * Get facebookId
     *
     * @return integer 
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Set twitterId
     *
     * @param integer $twitterId
     */
    public function setTwitterId($twitterId)
    {
        $this->twitterId = $twitterId;
    }

    /**
     * Get twitterId
     *
     * @return integer 
     */
    public function getTwitterId()
    {
        return $this->twitterId;
    }

    /**
     * Set twitter_username
     *
     * @param string $twitterUsername
     */
    public function setTwitterUsername($twitterUsername)
    {
        $this->twitter_username = $twitterUsername;
    }

    /**
     * Get twitter_username
     *
     * @return string 
     */
    public function getTwitterUsername()
    {
        return $this->twitter_username;
    }

    /**
     * Add restaurants
     *
     * @param Brickstorm\Sms4FoodBundle\Entity\Restaurant $restaurants
     */
    public function addRestaurant(\Brickstorm\Sms4FoodBundle\Entity\Restaurant $restaurants)
    {
        $this->restaurants[] = $restaurants;
    }

    /**
     * Get restaurants
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRestaurants()
    {
        return $this->restaurants;
    }

    /**
     * Add bookings
     *
     * @param Brickstorm\Sms4FoodBundle\Entity\Booking $bookings
     */
    public function addBooking(\Brickstorm\Sms4FoodBundle\Entity\Booking $bookings)
    {
        $this->bookings[] = $bookings;
    }

    /**
     * Get bookings
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getBookings()
    {
        return $this->bookings;
    }

    /**
     * Add orders
     *
     * @param Brickstorm\Sms4FoodBundle\Entity\Order $orders
     */
    public function addOrder(\Brickstorm\Sms4FoodBundle\Entity\Order $orders)
    {
        $this->orders[] = $orders;
    }

    /**
     * Get orders
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Add projects
     *
     * @param Brickstorm\SolidRBundle\Entity\Project $projects
     */
    public function addProject(\Brickstorm\SolidRBundle\Entity\Project $projects)
    {
        $this->projects[] = $projects;
    }

    /**
     * Get projects
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Add locations
     *
     * @param Brickstorm\WorldBundle\Entity\Location $locations
     */
    public function addLocation(\Brickstorm\WorldBundle\Entity\Location $locations)
    {
        $this->locations[] = $locations;
    }

    /**
     * Get locations
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Add usersteps
     *
     * @param Brickstorm\HumanRoadsBundle\Entity\UserStep $usersteps
     */
    public function addUserStep(\Brickstorm\HumanRoadsBundle\Entity\UserStep $usersteps)
    {
        $this->usersteps[] = $usersteps;
    }

    /**
     * Get usersteps
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsersteps()
    {
        return $this->usersteps;
    }

    /**
     * Get groups
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Add organizations
     *
     * @param Brickstorm\SolidRBundle\Entity\Organization $organizations
     */
    public function addOrganization(\Brickstorm\SolidRBundle\Entity\Organization $organizations)
    {
        $this->organizations[] = $organizations;
    }

    /**
     * Get organizations
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getOrganizations()
    {
        return $this->organizations;
    }
}