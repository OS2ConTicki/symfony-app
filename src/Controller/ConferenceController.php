<?php

namespace App\Controller;

use App\Entity\Conference;
use App\Repository\ConferenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="conference_index", methods={"GET"})
     */
    public function index(ConferenceRepository $conferenceRepository): Response
    {
        return $this->render('conference/index.html.twig', [
            'conferences' => $conferenceRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{shortName}/{path}", name="conference_show", methods={"GET"}, requirements={"path"=".*"})
     */
    public function show(Conference $conference, string $path = null): Response
    {
        return $this->render('conference/show.html.twig', [
            'conference' => $conference,
            'basename' => $this->generateUrl('conference_show', ['shortName' => $conference->getShortName()]),
        ]);
    }
}
