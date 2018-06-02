<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario34
 * Date: 02/06/2018
 * Time: 14:17
 */

namespace Domain\Model;


class Inscricao
{
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