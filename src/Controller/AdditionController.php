<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdditionController extends AbstractController
{

    /**
     * @Route("/addition", name="addition")
     * @param Request $request
     * @return Response
     */
    public function addition(Request $request)
    {
        $numberSandwich = $request->query->get('sandwich');
        $numberDrink = $request->query->get('drink');

        $remiseSandwich = 0;
        $remiseDrink = 0;

        if ($numberSandwich != 0 && $numberSandwich % 5 == 0) {
            $remiseNumberSandwich = $numberSandwich / 5;
            $remiseSandwich = $remiseNumberSandwich * 3;
        }

        if ($numberDrink != 0 && $numberDrink % 10 == 0) {
            $remiseNumberDrink = $numberDrink / 10;
            $remiseDrink = $remiseNumberDrink * 2;
        }

        $additionSandwich = $numberSandwich * 3 - $remiseSandwich;
        $additionDrink = $numberDrink * 2 - $remiseDrink;

        $total = $additionSandwich + $additionDrink;

        return $this->render('restaurant/addition.html.twig', [
            'total' => $total,
        ]);
    }
}
