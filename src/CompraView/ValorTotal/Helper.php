<?php
namespace Ecompassaro\CompraView\ValorTotal;

use Zend\View\Helper\AbstractHelper;
use Ecompassaro\Compra\Manager as CompraManager;
use Ecompassaro\Compra\Compra;

class Helper extends AbstractHelper
{
    private $compraManager;

    /**
     * Retorna o usuario atual
     */
    public function __invoke(Compra $compra)
    {
        return $this->compraManager->caucularValorTotal($compra);
    }

    /**
     * Injeta dependências
     * @param \Compra\CompraManager $compraManager
     */
    public function __construct(CompraManager $compraManager)
    {
        $this->compraManager = $compraManager;
    }
}
