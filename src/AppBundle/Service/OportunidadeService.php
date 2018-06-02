<?php

namespace AppBundle\Service;

use Domain\Model\Oportunidade;
use Domain\Repository\OportunidadeRepositoryInterface;
use Domain\Service\OportunidadeServiceInterface;

class OportunidadeService implements OportunidadeServiceInterface
{
    /**
     * @var OportunidadeRepositoryInterface
     */
    private $oportunidadeRepository;

    /**
     * OportunidadeService constructor.
     * @param OportunidadeRepositoryInterface $oportunidadeRepository
     */
    public function __construct(
        $oportunidadeRepository
    ) {
        $this->oportunidadeRepository = $oportunidadeRepository;
    }

    /**
     * @param Oportunidade $oportunidade
     * @return void
     */
    public function salvar(Oportunidade $oportunidade){
        // TODO: Implement salvar() method.

        if ($this->oportunidadeRepository->findBy(['descricao' => $oportunidade->getDescricao()]))
        throw new \Exception("Oportunidade com esta descrição já existe");
        $this->oportunidadeRepository->salvar($oportunidade);
    }


    /**
     * @return array
     *
     */
    public function listarTudo()
    {
        // TODO: Implement listarTudo() method.

        return $this->oportunidadeRepository->findAll();
    }
}
