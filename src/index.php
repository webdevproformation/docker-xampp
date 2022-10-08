<?php 

// phpinfo();

use App\Article;
use Doctrine\ORM\ORMSetup As Setup ;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Validation;


require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAttributeMetadataConfiguration([__DIR__."/entities"], $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

// database configuration parameters
$dbParams = [
  'driver' => 'pdo_mysql',
  'user' => 'root',
  'password' => 'root',
  'dbname' => 'toto',
  'host' => "mysql",
  "charset" => "utf8mb4"
];

// obtaining the entity manager
$entityManager = EntityManager::create($dbParams, $config);

$article = new Article();

$article->setTitre("des hommes qui ne veulent pas faire la guerre")
        ->setContenu("lorem ipsum sed lorem ...")
        ->setLike(10);

$validator = Validation::createValidatorBuilder()
              ->enableAnnotationMapping()
              ->getValidator();

$violations = $validator->validate($article);

// https://stackoverflow.com/questions/31521121/how-to-use-the-symfony2-validator-component-in-a-legacy-php-project

if (count($violations) > 0){
    foreach($violations as $violation) {
         var_dump($violation->getMessage());
    }
    die();
}

$entityManager->persist($article);

$entityManager->flush();

$articleRepository = $entityManager->getRepository(Article::class);

var_dump($articleRepository->findAll());