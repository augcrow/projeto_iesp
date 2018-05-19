<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario14
 * Date: 12/05/2018
 * Time: 14:50
 */

namespace Domain\Model;


use Symfony\Component\HttpFoundation\Tests\StringableObject;

class Oportunidade
{

    /**
     * @var int
     */
    private $idOportunidade;
    /**
     * @var String
     * @Serializer\Type ("string")
     */
    private $descricao;
    /**
     * @var \DateTime
     * @Serializer\SerializedName ("periodoInicial")
     * @Serializer\Type ("DateTime<'d/m/y'>")
     */
    private $periodoInicial;
    /**
     * @var \DateTime
     * @Serializer\SerializedName ("periodoFinal")
     * Serializer\Type ("DateTime<'d/m/y'>"
     * */
    private $periodoFinal;

    /**
     * Oportunidade constructor.
     * @param String $descricao
     * @param \DateTime $periodoInicial
     * @param \DateTime $periodoFinal
     */
    public function __construct(string $descricao, \DateTime $periodoInicial, \DateTime $periodoFinal)
    {
        $this->descricao = $descricao;
        $this->periodoInicial = $periodoInicial;
        $this->periodoFinal = $periodoFinal;
    }

    /**
     * @return String
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodoInicial()
    {
        return $this->periodoInicial;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodoFinal()
    {
        return $this->periodoFinal;
    }
    


}