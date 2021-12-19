<?php

namespace App\DataFixtures;

use App\Entity\Post;
use App\Entity\Subscription;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        $admin = new User();
        $subAdmin = new Subscription();
        $subAdmin->setStartdate(new \DateTime('now'));
        $subAdmin->setEndDate(new \DateTime('1 month'));
        $admin->setEmail('admin@admin.com');
        $admin->setFirstname('John');
        $admin->setLastname('Doe');
        $admin->setRoles(["ROLE_ADMIN"]);
        $password = $this->encoder->encodePassword($admin, '123456');
        $admin->setPassword($password);
        $admin->setStatus($subAdmin);
        $manager->persist($admin);

        $premium = new User();
        $subPremium = new Subscription();
        $subPremium->setStartdate(new \DateTime('now'));
        $subPremium->setEndDate(new \DateTime('1 month'));
        $premium->setEmail('jean@mail.com');
        $premium->setFirstname('Jean');
        $premium->setLastname('Valjean');
        $premium->setRoles(["ROLE_PREMIUM"]);
        $password = $this->encoder->encodePassword($premium, '123456');
        $admin->setPassword($password);
        $premium->setPassword($password);
        $premium->setStatus($subPremium);
        $manager->persist($premium);

        $lambda = new User();
        $lambda->setEmail('Euphrasie@mail.com');
        $lambda->setFirstname('Euphrasie');
        $lambda->setLastname('Valjean');
        $lambda->setRoles(["ROLE_USER"]);
        $password = $this->encoder->encodePassword($lambda, '123456');
        $lambda->setPassword($password);
        $manager->persist($lambda);

        for ($i = 0; $i < 16; $i++) {
            $post = new Post();
            $post->setDescription("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum");
            $post->setTitle('Les misérables');
            $post->setPrice('100');
            $post->setIllustration('https://picsum.photos/200/300');
            $post->setPremium(rand(0, 1));
            $post->setAuthor($admin);
            $manager->persist($post);
        }
        $manager->flush();
    }
}
