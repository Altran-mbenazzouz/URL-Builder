<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Vehicle;
use AppBundle\Entity\Country;
use AppBundle\Entity\Source;
use AppBundle\Entity\Brand;
use AppBundle\Entity\CampagnGoal;
use AppBundle\Entity\CommunicationMedium;
use AppBundle\Entity\Context;
use AppBundle\Entity\ProductCategory;
use AppBundle\Entity\Audience;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BuilderController extends Controller
{
    /**
     * @Route("/add", name="urlAdds")
     */
    public function listeAction(Request $request)
    {   
        $Vehicles = $this->getDoctrine()
        -> getRepository('AppBundle:Vehicle')
        ->findAll();

        $country= $this->getDoctrine()
                    ->getRepository('AppBundle:Country')
                    ->findAll();
        $audience= $this->getDoctrine()
                    ->getRepository('AppBundle:Audience')
                    ->findAll();
        $product_category= $this->getDoctrine()
                    ->getRepository('AppBundle:ProductCategory')
                    ->findAll();
        $brand= $this->getDoctrine()
                    ->getRepository('AppBundle:Brand')
                    ->findAll();
        $context= $this->getDoctrine()
                    ->getRepository('AppBundle:Context')
                    ->findAll();
        $campagn_goal= $this->getDoctrine()
                    ->getRepository('AppBundle:CampagnGoal')
                    ->findAll();
        $communication_medium = $this->getDoctrine()
                    ->getRepository('AppBundle:CommunicationMedium')
                    ->findAll();
         $source = $this->getDoctrine()
                    ->getRepository('AppBundle:Source')
                    ->findAll();


        return $this->render('crud/details.html.twig', array(
            'Vehicle' => $Vehicles,
            'country'=> $country,
            'audience'=>$audience,
            'product_category' => $product_category,
            'brand'=> $brand,
            'context'=> $context,
            'campagn_goal'=>$campagn_goal,
            'communication_medium'=>$communication_medium,
            'source'=> $source
            ));
    }

    /**
     * @Route("/crud/index", name="Builder_index")
     */
    public function detailsAction(Request $request)
    {   
        $country= $this->getDoctrine()
                    ->getRepository('AppBundle:Country')
                    ->findAll();

        $brand= $this->getDoctrine()
                    ->getRepository('AppBundle:Brand')
                    ->findAll();

         $vehicle= $this->getDoctrine()
                    ->getRepository('AppBundle:Vehicle')
                    ->findAll();

        $audience= $this->getDoctrine()
                    ->getRepository('AppBundle:Audience')
                    ->findAll();

        $product= $this->getDoctrine()
                    ->getRepository('AppBundle:ProductCategory')
                    ->findAll();

         $context= $this->getDoctrine()
                    ->getRepository('AppBundle:Context')
                    ->findAll();

        $campaign= $this->getDoctrine()
                    ->getRepository('AppBundle:CampagnGoal')
                    ->findAll();

        $communication= $this->getDoctrine()
                    ->getRepository('AppBundle:CommunicationMedium')
                    ->findAll();

        $source= $this->getDoctrine()
                    ->getRepository('AppBundle:Source')
                    ->findAll();



        return $this->render('crud/index.html.twig', array(
                'country'=> $country,
                'brand' => $brand,
                'vehicle'=> $vehicle,
                'audience'=> $audience,
                'product'=>$product,
                'context'=> $context,
                'campaign' => $campaign,
                'communication'=> $communication,
                'source'=> $source,
                
                ));

    }

    /**
     * @Route("/crud/create/{champ}", name="Builder_create")
     */
    public function createAction($champ,Request $request)
    {   

        switch ($champ) {
            case $champ== 'Country':
                $new = new Country;
                break;
            case $champ== 'Vehicle':
                $new = new Vehicle;
                break;
            case $champ== 'Brand':
                $new = new Brand;
                break;
            case $champ== 'Audience':
                $new = new Audience;
                break;
            case $champ== 'CampagnGoal':
                $new = new CampagnGoal;
                break;
            case $champ== 'CommunicationMedium':
                $new = new CommunicationMedium;
                break;
            case $champ== 'Context':
                $new = new Context;
                break;
            case $champ== 'ProductCategory':
                $new = new ProductCategory;
                break;
            case $champ== 'Source':
                $new = new Source;
                break;
            }

        
       //$new = new Country;

        $form = $this->createFormBuilder($new)
                    ->add(''.$champ.'', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                    ->add('value', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                    ->add('Submit', SubmitType::class, array('label'=>'Add '.$champ,'attr' => array('class' => 'btn btn-success', 'style' => 'margin-bottom:15px')))
                    ->getForm();

                    $form->handleRequest($request);


            if($form->isSubmitted() && $form->isValid() ){
            // Recuperation des données 
            $champCreated = $form[''.$champ.'']->getData();
            $value = $form['value']->getData();

            // Set Data 
            $set = "set".$champ;
            $new->$set($champCreated);
            $new->setValue($value);

            

            //tell Doctrine you want to (eventually) save the data
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($new);
            //// actually executes the queries (i.e. the INSERT query)
            $em->flush();

            $this->addFlash(
                'notice',
                 $champ .'Added'
                );

                return $this->redirectToRoute('urlAdds');
        }

        return $this->render('crud/create.html.twig', array(
            'form'=>$form->createView(),
            'champ'=>$champ,
            ));

    }

    /**
     * @Route("/crud/delete/{id}/{champ}", name="Builder_delete")
     */
    public function deleteAction($id, $champ)
    {   

        $em= $this->getDoctrine()
                    ->getManager();
        $delete= $em->getRepository('AppBundle:'.$champ.'')->find($id);

        $em->remove($delete);
        $em->flush();

        $this->addFlash(
            'notice',
            'Todo Removed'
            );
        
        return $this->redirectToRoute('urlAdds');
       
    }

     /**
     * @Route("/crud/edit/{id}/{champ}", name="Builder_edit")
     */
    public function editAction($id, $champ, Request $request)
    {   
        $edit= $this->getDoctrine()
                    ->getRepository('AppBundle:'.$champ.'')
                    ->find($id);
            $set = "set".$champ;
            $get = "get".$champ;

            $edit->$set($edit->$get());
            $edit->setValue($edit->getValue());           


        $form = $this->createFormBuilder($edit)
                    ->add(''.$champ.'', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                    ->add('Value', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                    ->add('Submit', SubmitType::class, array('label'=>'Edit','attr' => array('class' => 'btn btn-success', 'style' => 'margin-bottom:15px')))
                    ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid() ){
            // Recuperation des données 
            $champUpdated = $form[''.$champ.'']->getData();
            $value = $form['Value']->getData();           


              // Set Data 
            $edit->$set($champUpdated);
            $edit->setValue($value);
            
            $em = $this->getDoctrine()->getManager();
            $edit = $em->getRepository('AppBundle:'.$champ.'')->find($id);
            
            //// actually executes the queries (i.e. the INSERT query)
            $em->flush();

            $this->addFlash(
                'notice',
                $champ.'Updated'
                );

            return $this->redirectToRoute('urlAdds');
        }
            return $this->render('crud/edit.html.twig', array(
                ''.$champ.''=> $edit,
                'form'=> $form->createView()
                ));

    }
}