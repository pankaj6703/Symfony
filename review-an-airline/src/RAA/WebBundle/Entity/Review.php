<?php
namespace RAA\WebBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="raa_review")
 */
class Review
{
    
		/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="integer")
     */
  
     public $reviewer_id;
        /**
     * @ORM\Column(type="integer")
     */
     public $airline_id;
          /**
     * @ORM\Column(type="integer")
     */
     public $parent_id;
          /**
     * @ORM\Column(type="string")
     */
     public $sender;
     
     
           /**
     * @ORM\Column(type="string")
     */
     public $travel;
     
           /**
     * @ORM\Column(type="string")
     */
     public $trip;
                /**
     * @ORM\Column(type="string")
     */
     public $destination_city;
                /**
     * @ORM\Column(type="string")
     */
     public $departure_city;
     
     
    /**
     * @ORM\Column(type="string")
     */
     public $description;
     
      /**
     * @ORM\Column(type="string")
     */
     public $status;
       /**
     * @ORM\Column(type="string")
     */
     public $headline;
            /**
     * @ORM\Column(type="string")
     */
     public $use_agent;
            /**
     * @ORM\Column(type="string")
     */
     public $recomend_agent;
     
             /**
     * @ORM\Column(type="string")
     */
     public $receive_updates;
     
    /**
     * @ORM\Column(type="string")
     */
     public $rating;
         /**
     * @ORM\Column(type="string")
     */
     public $reviewer_image;
         /**
     * @ORM\Column(type="string")
     */
     public $honesty;
         /**
     * @ORM\Column(type="string")
     */
     public $market_knowldege;
    
         /**
     * @ORM\Column(type="string")
     */
     public $sold_price;
      /**
     * @ORM\Column(type="string")
     */
     public $sold_quickly;
      /**
     * @ORM\Column(type="string")
     */
     public $responsiveness;
      /**
     * @ORM\Column(type="string")
     */
     public $service;
        /**
     * @ORM\Column(type="integer")
     */
    public $creator_id;  
    
    /**
     * @ORM\Column(type="datetime")
     */
    public $creation_timestamp;
    
          /**
     * @ORM\Column(type="integer")
     */
    public $modifier_id;

    /**
     * @ORM\Column(type="datetime")
     */
    public $modification_timestamp;

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
     * Set description
     *
     * @param string $description
     * @return Review
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
     * Set rating
     *
     * @param string $rating
     * @return Review
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    
        return $this;
    }

    /**
     * Get rating
     *
     * @return string 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set reviewer_id
     *
     * @param integer $reviewerId
     * @return Review
     */
    public function setReviewerId($reviewerId)
    {
        $this->reviewer_id = $reviewerId;
    
        return $this;
    }

    /**
     * Get reviewer_id
     *
     * @return integer 
     */
    public function getReviewerId()
    {
        return $this->reviewer_id;
    }

    /**
     * Set airline_id
     *
     * @param integer $realtorId
     * @return Review
     */
    public function setAirlineId($airlineId)
    {
        $this->airline_id = $airlineId;
    
        return $this;
    }

    /**
     * Get airline_id
     *
     * @return integer 
     */
    public function getAirlineId()
    {
        return $this->airline_id;
    }

    /**
     * Set parent_id
     *
     * @param integer $parentId
     * @return Review
     */
    public function setParentId($parentId)
    {
        $this->parent_id = $parentId;
    
        return $this;
    }

    /**
     * Get parent_id
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Set sender
     *
     * @param string $sender
     * @return Review
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    
        return $this;
    }

    /**
     * Get sender
     *
     * @return string 
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set headline
     *
     * @param string $headline
     * @return Review
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;
    
        return $this;
    }

    /**
     * Get headline
     *
     * @return string 
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Set use_agent
     *
     * @param string $useAgent
     * @return Review
     */
    public function setUseAgent($useAgent)
    {
        $this->use_agent = $useAgent;
    
        return $this;
    }

    /**
     * Get use_agent
     *
     * @return string 
     */
    public function getUseAgent()
    {
        return $this->use_agent;
    }

    /**
     * Set recomend_agent
     *
     * @param string $recomendAgent
     * @return Review
     */
    public function setRecomendAgent($recomendAgent)
    {
        $this->recomend_agent = $recomendAgent;
    
        return $this;
    }

    /**
     * Get recomend_agent
     *
     * @return string 
     */
    public function getRecomendAgent()
    {
        return $this->recomend_agent;
    }

    

    /**
     * Set receive_updates
     *
     * @param string $receiveUpdates
     * @return Review
     */
    public function setReceiveUpdates($receiveUpdates)
    {
        $this->receive_updates = $receiveUpdates;
    
        return $this;
    }

    /**
     * Get receive_updates
     *
     * @return string 
     */
    public function getReceiveUpdates()
    {
        return $this->receive_updates;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Review
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set honesty
     *
     * @param string $honesty
     * @return Review
     */
    public function setHonesty($honesty)
    {
        $this->honesty = $honesty;
    
        return $this;
    }

    /**
     * Get honesty
     *
     * @return string 
     */
    public function getHonesty()
    {
        return $this->honesty;
    }

    /**
     * Set market_knowldege
     *
     * @param string $marketKnowldege
     * @return Review
     */
    public function setMarketKnowldege($marketKnowldege)
    {
        $this->market_knowldege = $marketKnowldege;
    
        return $this;
    }

    /**
     * Get market_knowldege
     *
     * @return string 
     */
    public function getMarketKnowldege()
    {
        return $this->market_knowldege;
    }

    /**
     * Set sold_price
     *
     * @param string $soldPrice
     * @return Review
     */
    public function setSoldPrice($soldPrice)
    {
        $this->sold_price = $soldPrice;
    
        return $this;
    }

    /**
     * Get sold_price
     *
     * @return string 
     */
    public function getSoldPrice()
    {
        return $this->sold_price;
    }

    /**
     * Set sold_quickly
     *
     * @param string $soldQuickly
     * @return Review
     */
    public function setSoldQuickly($soldQuickly)
    {
        $this->sold_quickly = $soldQuickly;
    
        return $this;
    }

    /**
     * Get sold_quickly
     *
     * @return string 
     */
    public function getSoldQuickly()
    {
        return $this->sold_quickly;
    }

    /**
     * Set responsiveness
     *
     * @param string $responsiveness
     * @return Review
     */
    public function setResponsiveness($responsiveness)
    {
        $this->responsiveness = $responsiveness;
    
        return $this;
    }

    /**
     * Get responsiveness
     *
     * @return string 
     */
    public function getResponsiveness()
    {
        return $this->responsiveness;
    }

    /**
     * Set service
     *
     * @param string $service
     * @return Review
     */
    public function setService($service)
    {
        $this->service = $service;
    
        return $this;
    }

    /**
     * Get service
     *
     * @return string 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set creator_id
     *
     * @param integer $creatorId
     * @return Review
     */
    public function setCreatorId($creatorId)
    {
        $this->creator_id = $creatorId;
    
        return $this;
    }

    /**
     * Get creator_id
     *
     * @return integer 
     */
    public function getCreatorId()
    {
        return $this->creator_id;
    }

    /**
     * Set creation_timestamp
     *
     * @param \DateTime $creationTimestamp
     * @return Review
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creation_timestamp = $creationTimestamp;
    
        return $this;
    }

    /**
     * Get creation_timestamp
     *
     * @return \DateTime 
     */
    public function getCreationTimestamp()
    {
        return $this->creation_timestamp;
    }

    /**
     * Set modifier_id
     *
     * @param integer $modifierId
     * @return Review
     */
    public function setModifierId($modifierId)
    {
        $this->modifier_id = $modifierId;
    
        return $this;
    }

    /**
     * Get modifier_id
     *
     * @return integer 
     */
    public function getModifierId()
    {
        return $this->modifier_id;
    }

    /**
     * Set modification_timestamp
     *
     * @param \DateTime $modificationTimestamp
     * @return Review
     */
    public function setModificationTimestamp($modificationTimestamp)
    {
        $this->modification_timestamp = $modificationTimestamp;
    
        return $this;
    }

    /**
     * Get modification_timestamp
     *
     * @return \DateTime 
     */
    public function getModificationTimestamp()
    {
        return $this->modification_timestamp;
    }



    /**
     * Set travel
     *
     * @param string $travel
     * @return Review
     */
    public function setTravel($travel)
    {
        $this->travel = $travel;
    
        return $this;
    }

    /**
     * Get travel
     *
     * @return string 
     */
    public function getTravel()
    {
        return $this->travel;
    }

    /**
     * Set trip
     *
     * @param string $trip
     * @return Review
     */
    public function setTrip($trip)
    {
        $this->trip = $trip;
    
        return $this;
    }

    /**
     * Get trip
     *
     * @return string 
     */
    public function getTrip()
    {
        return $this->trip;
    }

    /**
     * Set reviewer_image
     *
     * @param string $reviewerImage
     * @return Review
     */
    public function setReviewerImage($reviewerImage)
    {
        $this->reviewer_image = $reviewerImage;
    
        return $this;
    }

    /**
     * Get reviewer_image
     *
     * @return string 
     */
    public function getReviewerImage()
    {
        return $this->reviewer_image;
    }

    /**
     * Set destination_city
     *
     * @param string $destinationCity
     * @return Review
     */
    public function setDestinationCity($destinationCity)
    {
        $this->destination_city = $destinationCity;
    
        return $this;
    }

    /**
     * Get destination_city
     *
     * @return string 
     */
    public function getDestinationCity()
    {
        return $this->destination_city;
    }

    /**
     * Set departure_city
     *
     * @param string $departureCity
     * @return Review
     */
    public function setDepartureCity($departureCity)
    {
        $this->departure_city = $departureCity;
    
        return $this;
    }

    /**
     * Get departure_city
     *
     * @return string 
     */
    public function getDepartureCity()
    {
        return $this->departure_city;
    }

    
}