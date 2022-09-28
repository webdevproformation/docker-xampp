<?php 

namespace App ;

use \Doctrine\ORM\Mapping as ORM ;

/**
 * @ORM\Entity
 * @ORM\Table(name="articles")
 */
class Article{

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private int $id;
    
    /**
     * @ORM\Column( type="string")
    */
    private string $titre ;

    /**
     * @ORM\Column( type="string")
    */
    private string $contenu ;

    /**
     * @ORM\Column( type="integer" , name="`like`")
    */
    private int $like ;

    public function getId() :int{
        return $this->id ;
    }

    public function getTitre():string{
        return $this->titre ;
    }

    public function setTitre(string $titre):self{
        $this->titre  = $titre ;
        return $this ;
    }

    public function getContenu():string{
        return $this->contenu ;
    }

    public function setContenu(string $contenu):self{
        $this->contenu = $contenu ;
        return $this ;
    }

    public function getLike():int{
        return $this->like ;
    }

    public function setLike(int $like):self{
       $this->like = $like ; 
       return $this ;
    }

}