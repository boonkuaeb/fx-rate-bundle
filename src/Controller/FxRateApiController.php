<?php

namespace BK\FxRateBundle\Controller;

use BK\FxRateBundle\BKFxRate;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FxRateApiController extends AbstractController
{

    private $BKFxRate;

    /**
     * CalculatorController constructor.
     * @param $BKFxRate
     */
    public function __construct(BKFxRate $BKFxRate)
    {
        $this->BKFxRate = $BKFxRate;
    }

    /**
     * @Route("/exchange",name="exchange", methods={"POST"})
     */
    public function exchange(Request $request)
    {
        $from_currency = $request->get('from_currency');
        $to_currency = $request->get('to_currency');
        $quantity = $request->get('quantity');
        $data = $this->BKFxRate->makeExchange($from_currency, $to_currency, $quantity);
        return new JsonResponse($data);
    }

}