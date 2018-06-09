<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario14
 * Date: 09/06/2018
 * Time: 08:28
 */

namespace Domain\Model;


class Inscricao {
    /**
     * @var int
     */
    private $idInscricao;
    /**
     * @var Candidato
     */
    private $candidato;
    /**
     * @var Oportunidade
     */
    private $oportunidade;
    /**
     * @var string
     */
    private $codigoConfirmacao;
    /**
     * @var boolean
     */
    private $ativa;
}