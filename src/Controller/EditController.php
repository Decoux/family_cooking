<?php

namespace App\Controller;

use App\Entity\Steps;
use App\Entity\Recipes;
use App\Entity\Ingredients;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EditController extends AbstractController
{
    /**
     * @Route("/edit", name="edit")
     */
    public function index(Request $request, ObjectManager $manager)
    {
        $recipe = new Recipes();
        $formRecipe = $this->createFormBuilder($recipe)
                            ->add('name', TextType::class,[
                                
                                'attr' => [
                                    
                                    'class' => 'form-control input'

                                ]
                            ])
                            ->add('picture', FileType::class, [
                                'required' => false,
                                'attr' => [
                                    'class' => 'form-control input_file'
                                    

                                ]
                            ])
                            ->add('type', ChoiceType::class, [
                                'choices'  => [
                                    'Choisissez'=> [
                                    'Entrée' => 'Entrée',
                                    'Plat' => 'Plat',
                                    'Dessert' => 'Dessert',
                                    'Apéritif' => 'Apéritif',]
                                ],
                                'attr' => [
                                    'class' => 'form-control input'

                                ]
                            ])
                            ->add('difficulty', ChoiceType::class, [
                                'choices'  => [
                                    'Choisissez'=> [
                                    'Facile' => 'Facile',
                                    'Moeyn' => 'Moyen',
                                    'Difficile' => 'Difficile',]
                                ],
                                'attr' => [
                                    'class' => 'form-control input'

                                ]
                            ])
                            ->add('cost', MoneyType::class, [
                                'attr' => [
                                    'class' => 'form-control input'

                                ]
                            ])
                            ->add('preparation_time', NumberType::class, [
                                'attr' => [
                                    'class' => 'form-control input'

                                ]
                            ])
                            ->add('cooking_time', NumberType::class, [
                                'attr' => [
                                    'class' => 'form-control input'

                                ]
                            ])
                            ->add('nb', IntegerType::class, [
                                'attr' => [
                                    'class' => 'form-control input'

                                ]
                            ])
                            ->add('unite', ChoiceType::class, [
                                'choices'  => [
                                    'Choisissez'=> [
                                    'Pièce' => 'Pièce',
                                    'Personnes' => 'Personnes',]
                                ],
                                'attr' => [
                                    'class' => 'form-control input'

                                ]
                            ])
                            ->getForm();


            // $step = new Steps();

            // $formStep = $this->createFormBuilder($step)
            //                     ->add('content_step', TextType::class,[
            //                         'attr' => [
            //                             'class' => 'form-control input',
            //                             'name' => 'form[content_step]'
    
            //                         ]
            //                     ])
            //                     ->add('picture_step', FileType::class, [
            //                         'required' => false,
            //                         'attr' => [
            //                             'class' => 'form-control input_file'
    
            //                         ]
            //                     ])
            //                     ->getForm();

            
            // $ingredient = new Ingredients();

            // $formIngredient = $this->createFormBuilder($ingredient)
            //                         ->add('content_ingredient', TextType::class,[
            //                             'attr' => [
            //                                 'class' => 'form-control input'
                                            
        
            //                             ]
            //                         ])
            //                         ->add('quantity', TextType::class,[
            //                             'attr' => [
            //                                 'class' => 'form-control input'
        
            //                             ]
            //                         ])
            //                         ->getForm();
            //                         $formRecipe->handleRequest($request);
            //                         //$formStep->handleRequest($request);
            //                         $formIngredient->handleRequest($request);

            //                         dump($request);
                                    
                                    if($formRecipe->isSubmitted() && $formStep->isSubmitted() && $formIngredient->isSubmitted()){
                                        // relates this product to the category
                                        // $step->setRecipe($recipe);
                                        // $ingredient->setRecipe($recipe);

                                        //$manager->persist($recipe);
                                        // $manager->persist($step);
                                        // $manager->persist($ingredient);
                                        //$manager->flush();
                                       
                                    }
                                    

            
        return $this->render('edit/index.html.twig',[
            'formRecipe' => $formRecipe->createView(),
            // 'formStep' => $formStep->createView(),
            // 'formIngredient' => $formIngredient->createView()
        ]);
    }


}
