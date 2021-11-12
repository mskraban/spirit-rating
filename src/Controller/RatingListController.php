<?php

namespace App\Controller;

use App\Entity\Rating;
use App\Entity\User;
use App\Form\RatingFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class RatingListController extends AbstractController
{
    /**
     * @Route("/rating", name="rating_list")
     */



    public function new(Request $request) : Response
    {
        $rating = new Rating();
        $form = $this->createForm(RatingFormType::class, $rating);
        $form->handleRequest($request);

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        //echo $user->getId();

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $rating = $form->getData();
            $rating->setDrinkRatingDate(new \DateTime());
            $rating->setUserId($user->getId());

            $repository = $this->getDoctrine()->getRepository(User::class);
            $repository->findAll();
            //$repository->findBy([], ['drinkRatingDate' => 'DESC']);

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($rating);
            $entityManager->flush();

            return $this->render('rating_list/index.html.twig', [
                'rating_form' => $form->createView(),
                'ratings' => $this->getRatings()
            ]);
        }

        return $this->render('rating_list/index.html.twig', [
            'rating_form' => $form->createView(),
            'ratings' => $this->getRatings()
        ]);
    }

    public function getRatings() : array
    {
        //Select rated drinks from DB newest to oldest
        $repository = $this->getDoctrine()->getRepository(Rating::class);
        $user = $this->getUser();
        return $repository->findBy(
            array('userId' => $user->getId()),
            array('drinkRatingDate' => 'DESC'));
    }
}
