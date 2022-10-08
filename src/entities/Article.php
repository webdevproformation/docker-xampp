<?php 
declare(strict_types = 1);

namespace App ;

use \Doctrine\ORM\Mapping as ORM ;
use \Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity]
#[ORM\Table(name:"articles")]
class Article{

    #[ORM\Column(name:"id", type:"integer")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    private int $id;
    
    #[ORM\Column( type:"string")]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'Titre must be at least {{ limit }} characters long',
        maxMessage: 'Titre cannot be longer than {{ limit }} characters',
    )]
    private string $titre ;

    #[ORM\Column( type:"string")]
    #[Assert\Length(
        min: 5,
        max: 1000,
        minMessage: 'Contenu must be at least {{ limit }} characters long',
        maxMessage: 'Contenu cannot be longer than {{ limit }} characters',
    )]
    private string $contenu ;

    #[ORM\Column( type:"integer" , name:"`like`")]
    #[Assert\GreaterThanOrEqual(
        value: 0 ,
        message : 'Le champ like doit être un chiffre entier supérieur ou égal à {{ compared_value }}'
    )]
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