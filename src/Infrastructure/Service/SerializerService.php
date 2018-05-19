<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario14
 * Date: 12/05/2018
 * Time: 15:58
 */

namespace Infrastructure\Service;


use JMS\Serializer\Serializer;

class SerializerService
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * SerializerService constructor.
     * @param Serializer $serializer
     */
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    public function converter ($json, $tipo){
        return $this ->serializer->deserialize($json, $tipo, 'json');

       /* try{
        }catch (\Exception $exception){

            dump($exception->getMessage()); die;
        }*/
    }
}