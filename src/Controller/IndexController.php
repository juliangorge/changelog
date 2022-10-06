<?php

declare(strict_types=1);

namespace Juliangorge\Changelog\Controller;

class IndexController
{

    protected $em;
    protected $config;

    public function __construct($em, $config){
        $this->em = $em;
        $this->config = $config;
    }

    public function create(string $type, array $array){
        try {
            $entity = new \Juliangorge\Changelog\Changelog();
            $entity->initialize($array);
            $this->em->persist();
            $this->flush();
        }
        catch(\Throwable $e){
            return false;
        }

        return true;
    }

    public function get(string $type, int $id){

    }

    public function getBy(string $type, array $array){

    }

}