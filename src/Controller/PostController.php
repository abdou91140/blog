<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\SearchType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{

    /**
     * @Route("/articles", name="posts")
     */
    public function index(PostRepository $postRepository,PaginatorInterface $paginator,Request $request)
    {
        $pagination = $paginator->paginate(
            $postRepository->findAll(),
            $request->query->getInt('page', 1), /*page number*/
            3/*limit per page*/
        );
        return $this->render('posts/show.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    /**
     * @Route("/article/{id}", name="post")
     */
    public function show($id,PostRepository $postRepository)
    {
        $post = $postRepository->findOneBy(['id'=>$id]);

        if (!$post) {
            return $this->redirectToRoute('posts');
        }

        return $this->render('posts/single_post.html.twig', [
            'post' => $post,
        ]);
    }
    /**
     * @Route("/premium/articles", name="posts_premium")
     */
    public function showPremium(PostRepository $postRepository,PaginatorInterface $paginator,Request $request)
    {
        $pagination = $paginator->paginate(
            $postRepository->findByPremium(true),
            $request->query->getInt('page', 1), /*page number*/
            3/*limit per page*/
        );

        return $this->render('posts/show_premium.html.twig', [
            'pagination' => $pagination,
        ]);
    }
    /**
     * @Route("/premium/article/{id}", name="post_premium")
     */
    public function showOnePremium($id,PostRepository $postRepository)
    {
        $post = $postRepository->findOneBy(['id'=>$id]);

        if (!$post) {
            return $this->redirectToRoute('posts');
        }

        return $this->render('posts/single_post.html.twig', [
            'post' => $post,
        ]);
    }
}
