<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('groupe')
            ->add('societe')
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('codePostal')
            ->add('ville')
            ->add('pays')
            ->add('telMobile')
            ->add('telBureau')
            ->add('fax')
            ->add('email')
            ->add('siteWeb')
            ->add('nomSociete')
            ->add('type')
            ->add('rc')
            ->add('capital')
            ->add('cnss')
            ->add('patente')
            ->add('identicicationFiscale')
            ->add('ice')
            ->add('Categorie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
