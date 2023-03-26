<?php

namespace App\Controller;

use App\Form\Model\TestModel;
use App\Form\TestType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route(methods: ['GET','POST'])]
    public function testForm(Request $request): Response
    {
        $model = new TestModel();
        $form = $this->createForm(TestType::class, $model);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Not needed currently...
            return $this->redirectToRoute('', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('test_form_page.html.twig', [
            'model' => $model,
            'form' => $form,
        ]);
    }

}
