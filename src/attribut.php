<?php 

// https://mindsers.blog/fr/post/nouveautes-php8-attributs/

#[Attribute]
class MaxLength
{
    public function __construct(private int $max) {}

    public function validate($value): bool
    {
        if (strlen($value) > $this->max) {
            throw new LengthException();
        }

        return true;
    }
}


class User
{
    #[MaxLength(10)]
    public string $email;
}

class Validator
{
    // ...
    
    public function validate($obj){
        $class = new ReflectionClass($obj);

        foreach ($class->getProperties() as $property) {
            $attributes = $property->getAttributes(MaxLength::class);
            
            foreach ($attributes as $ruleAttribute) {
                $rule = $ruleAttribute->newInstance();
                $rule->validate(value: $property->getValue($obj));
            }
        }
    }
}

$user = new User();
$user->email = "tttttttttttttttttttttttttttt";

$v = new Validator();
$v->validate($user);

