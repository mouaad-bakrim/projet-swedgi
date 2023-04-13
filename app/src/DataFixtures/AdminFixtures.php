<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AdminFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $hasher)
    {}

    public function load(ObjectManager $manager): void
    {
        $admin = new User();
        $admin->setEmail('admin2023@gmail.com');
        $admin->setPassword($this->hasher->hashPassword($admin,'admin1234'));
        $admin->setRoles(["ROLE_ADMIN"]);
        $manager->persist($admin);

        $manager->flush();
    }
}
