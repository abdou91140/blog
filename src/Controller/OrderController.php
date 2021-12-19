<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Order;
use App\Entity\OrderDetails;
use App\Form\OrderType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/commande", name="order")
     */
    public function index(Cart $cart, Request $request)
    {

        $form = $this->createForm(OrderType::class, null, [
            'user' => $this->getUser()
        ]);

        return $this->render('order/index.html.twig', [
            'form' => $form->createView(),
            'cart' => $cart->getFull()
        ]);
    }

    /**
     * @Route("/commande/recapitulatif", name="order_recap", methods={"POST"})
     */
    public function add(Cart $cart, Request $request)
    {
        $form = $this->createForm(OrderType::class, null, [
            'user' => $this->getUser()
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $date = new \DateTime();

            // Enregistrer ma commande Order()
            $order = new Order();
            $reference = $date->format('dmY').'-'.uniqid();
            $order->setReference($reference);
            $order->setUser($this->getUser());
            $order->setCreatedAt($date);

            $this->entityManager->persist($order);

            // Enregistrer mes produits OrderDetails()
            foreach ($cart->getFull() as $post) {
                $orderDetails = new OrderDetails();
                $orderDetails->setMyOrder($order);
                if($post['sub']){
                    $orderDetails->setPrice($post['sub']->getPrice());
                    $orderDetails->setName('Premium');
                    $orderDetails->setQuantity($post['quantity']);
                    $orderDetails->setTotal($post['sub']->getPrice() * $post['quantity']);
                    $this->entityManager->persist($orderDetails);

                }else{
                    $orderDetails->setName($post['post']->getTitle());
                    $orderDetails->setQuantity($post['quantity']);
                    $orderDetails->setPrice($post['post']->getPrice());
                    $orderDetails->setTotal($post['post']->getPrice() * $post['quantity']);
                    $this->entityManager->persist($orderDetails);
                }

            }

            $this->entityManager->flush();

            return $this->render('order/add.html.twig', [
                'cart' => $cart->getFull(),
                'reference' => $order->getReference()
            ]);
        }

        return $this->redirectToRoute('cart');
    }
}
