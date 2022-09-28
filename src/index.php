<?php 

// phpinfo();

use App\Article;
use Doctrine\ORM\ORMSetup As Setup ;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration([__DIR__."/entities"], $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

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

$article->setTitre("nouvel article")
        ->setContenu("lorem ipsum sed lorem ...")
        ->setLike(30);

$articleRepository = $entityManager->getRepository(Article::class);

$entityManager->persist($article);

$entityManager->flush();

var_dump($articleRepository->findAll());