<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class QuestionControllerController extends Controller
{
    function indexAction(Request $request)
    {
        return new Response('test');
//        // replace this example code with whatever you need
//        return $this->render('default/index.html.twig', [
//            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
//        ]);
    }

    function newQuestionAction(Request $request)
    {
        $content = json_decode($request->getContent());

        return new Response($content);
    }
}
