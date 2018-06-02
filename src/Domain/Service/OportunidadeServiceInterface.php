<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario34
 * Date: 02/06/2018
 * Time: 10:15
 */

namespace Domain\Service;


use Domain\Model\Oportunidade;

interface OportunidadeServiceInterface
{


    /**
     * @param Oportunidade $oportunidade
     * @return void
     */
    public function salvar (Oportunidade $oportunidade);

    /**
     * @return array
     */
    public function listarTudo();

}
