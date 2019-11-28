<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdditionController extends AbstractController
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @Route("/addition", name="addition")
     */
    public function addition()
    {
        $numberSandwich = $this->request->get('sandwich');
        $numberDrink = $this->request->get('drink');

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
