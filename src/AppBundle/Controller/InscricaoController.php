<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario14
 * Date: 09/06/2018
 * Time: 08:31
 */

namespace AppBundle\Controller;


use Domain\Model\Inscricao;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class InscricaoController extends Controller
{
    /**
     * @Route("inscricao/inscrever")
     * @param Request $request
     */
    public function inscreverAction(Request $request ){
        $serializerService = $this->get('infra.serializer.service');
        try{
            $inscricao = $serializerService->converte($request->getContent(), Inscricao::class);
            dump($inscricao); die;
        }catch (\Exception $exception){
            return new  Response($exception->getMessage(), 404);
        }
    }
}