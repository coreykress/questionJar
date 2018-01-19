<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class QuestionControllerController extends Controller
{
    function indexAction(Request $request)
    {
        return new Response('test');
    }

    function newQuestionAction(Request $request)
    {
        $content = json_decode($request->getContent(), true);

        $body = isset($content['question']) ? $content['question'] : null;

        if (is_null($body)) {
            //do stuff
            return new Response('no');
        }

        // save to db
        $em = $this->getDoctrine()->getManager();

        $question = new Question();
        $question->setBody($body);
        $question->setIsAnswered(false);

        $em->persist($question);

        $em->flush();

        //respond with a success

        return new Response('ok');
    }
}
