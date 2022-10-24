<?php

namespace Blog;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="cms")
 */
class Content {
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    public $id;
    /** 
     * @ORM\Column(type="string")
     */
    public $title;
    /** 
     * @ORM\Column(type="text")
     */
    public $content;
    /** 
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    public $create_date;

    public function __construct()
    {
        $this->create_date = new \DateTime();
    }

    public function getId(){
        return $this->id;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setContent($content){
        $this->content = $content;
    }
    public function getContent(){
        return $this->content;
    }
    public function getCreate_date(){
        return $this->create_date;
    }
}
