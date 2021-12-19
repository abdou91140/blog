<?php

namespace App\Controller;

use App\Entity\Header;
use App\Entity\Post;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/", name="home")
     */
    public function index(PostRepository $postRepository,PaginatorInterface $paginator,Request $request)
    {
        $pagination = $paginator->paginate(
            $postRepository->findAll(),
            $request->query->getInt('page', 1), /*page number*/
            3/*limit per page*/
        );
        return $this->render('home/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }
}
