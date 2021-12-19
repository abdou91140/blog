<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Subscription;
use App\Form\SubscriptionType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class CartController extends AbstractController
{

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/mon-panier", name="cart")
     */
    public function index(Cart $cart)
    {

        $form = $this->createForm(SubscriptionType::class);

        return $this->render('cart/index.html.twig', [
            'form' => $form->createView(),
            'cart' => $cart->getFull()
        ]);
    }

    /**
     * @Route("/mon-panier/abonnement", name="cart_sub-premium")
     */
    public function sub(Cart $cart, UserRepository $userRepository)
    {
        $sub = new Subscription();
        $sub->setStartdate(new \DateTime('now'));
        $sub->setEndDate(new \DateTime('1 month'));
        $sub->setPrice(300);
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $userFound = $userRepository->findOneBy(['email' => $this->getUser()->getUsername()]);

        $this->entityManager->persist($sub);
        $this->entityManager->flush();
        $userFound->setStatus($sub);
        $cart->add($sub->getId());

        return $this->render('cart/index.html.twig', [
            'cart' => $cart->getFull(),
        ]);
    }


    /**
     * @Route("/mon-panier/ajout/{id}", name="add_to_cart")
     */
    public function add(Cart $cart, $id)
    {
        $cart->add($id);

        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/mon-panier/vider", name="remove_my_cart")
     */
    public function remove(Cart $cart)
    {
        $cart->remove();

        return $this->redirectToRoute('posts');
    }

    /**
     * @Route("/mon-panier/supprimer/{id}", name="delete_to_cart")
     */
    public function delete(Cart $cart, $id)
    {
        $cart->delete($id);

        return $this->redirectToRoute('cart');
    }


}
