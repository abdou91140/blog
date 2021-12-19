<?php

namespace App\Classe;

use App\Entity\Carrier;
use App\Entity\Post;
use App\Entity\Subscription;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Cart
{
    private $session;
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager, SessionInterface $session)
    {
        $this->session = $session;
        $this->entityManager = $entityManager;
    }

    public function add($id)
    {
        $cart = $this->session->get('cart', []);

        if ($cart[$id] = 0) {
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }

        $this->session->set('cart', $cart);
    }

    public function get()
    {
        return $this->session->get('cart');
    }

    public function remove()
    {
        return $this->session->remove('cart');
    }

    public function delete($id)
    {
        $cart = $this->session->get('cart', []);

        unset($cart[$id]);

        return $this->session->set('cart', $cart);
    }


    public function getFull()
    {
        $cartComplete = [];

        if ($this->get()) {
            foreach ($this->get() as $id => $quantity) {
                $post_object = $this->entityManager->getRepository(Post::class)->findOneById($id);
                $sub_object = $this->entityManager->getRepository(Subscription::class)->findOneById($id);

                if (!$sub_object) {
                    $cartComplete[] = ['sub' => null,
                        'posts' => $post_object,
                        'quantity' => $quantity];
                } else {
                    $cartComplete[] = [
                        'sub' => $sub_object,
                        'post' => null,
                        'quantity' => $quantity
                    ];
                }

            }
        }

        return $cartComplete;
    }

}