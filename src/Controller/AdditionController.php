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
        //Get Number of sandwiches and drinks
        $numberSandwich = $request->query->get('sandwich');
        $numberDrink = $request->query->get('drink');

        //Calculate the discount
        $discountSandwich = $numberSandwich % 5 == 0 ? $numberSandwich / 5 * 3 : 0;
        $discountDrink = $numberDrink % 10 == 0 ? $numberDrink / 10 * 2 : 0;

        //Addition with the discount
        $additionSandwich = $numberSandwich * 3 - $discountSandwich;
        $additionDrink = $numberDrink * 2 - $discountDrink;

        $total = $additionSandwich + $additionDrink;

        return $this->render('restaurant/addition.html.twig', [
            'total' => $total,
        ]);
    }
}
