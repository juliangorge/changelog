<?php
namespace Juliangorge\Changelog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="change_logs", indexes={
    * @ORM\Index(name="user_id", columns={"user_id"})
* })
*/
class Changelog
{
    /**
    * @ORM\Id
    * @ORM\Column(name="id", type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /** @ORM\Column(name="route", type="string") */
    protected $route;

    /** @ORM\Column(name="details", type="text") */
    protected $details;

    /** @ORM\Column(name="date", type="datetime") */
    protected $date;

    /** @ORM\Column(name="user_id", unique=false, type="integer") */
    protected $user_id;

    /** @ORM\Column(name="previous", type="json", nullable=true) */
    protected $previous;

    /** @ORM\Column(name="next", type="json", nullable=true) */
    protected $next;

    public function getArrayCopy(){
        return [
            'id' => $this->id,
            'route' => $this->route,
            'details' => $this->details,
            'date' => $this->date,
            'user_id' => $this->user_id,
            'previous' => $this->previous,
            'next' => $this->next,
        ];
    }

    public function initialize($array){
        $this->email = $array['email'];
        $this->route = $array['route'];
        $this->details = $array['details'];
        $this->date = new \DateTime();
        $this->user_id = $array['user_id'];
        $this->previous = $array['previous'];
        $this->next = $array['next'];
    }

    public function getId(){ return $this->id; }
    public function getRoute(){ return $this->route; }
    public function getDetails(){ return $this->details; }
    public function getDate(){ return $this->date; }
    public function getUserId(){ return $this->user_id; }
    public function getPrevious(){ return $this->previous; }
    public function getNext(){ return $this->next; }

    public function setId($v){ $this->id = $v; }
    public function setRoute($v){ $this->route = $v; }
    public function setDetails($v){ $this->details = $v; }
    public function setDate($v){ $this->date = $v; }
    public function setUserId($v){ $this->user_id = $v; }
    public function setPrevious($v){ $this->previous = $v; }
    public function setNext($v){ $this->next = $v; }

}
