<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Category;
use AppBundle\Entity\Event;


class EventController extends Controller{
    /**
     * @Route("/events", name="event_list")
     */
    public function indexAction(Request $request){
        $events = $this->getDoctrine()
            ->getRepository('AppBundle:Event')
            ->findAll();
        // Render Template
        return $this->render('event/index.html.twig', [
            'events' => $events,
        ]);
    }

     /**
     * @Route("/event/create", name="event_creation")
     */
    public function createAction(Request $request){
        $event = new Event();

        $form = $this->createFormBuilder($event)
            ->add('name', TextType::class, array('attr' => array('placeholder'=>'Some Event','class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('details', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('category', EntityType::class, array('class'=>'AppBundle:Category','choice_label'=>'name','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('day', DateTimeType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom: 15px; height: 70px; width: 250px')))
            //->add('day', DateTimeType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
           // ->add('day1', DateType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
           // ->add('day2', TimeType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('city', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('street', TextType::class, array('label' => 'Street Address', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('zip', TextType::class, array('label' => 'Zip Code', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Create', 'attr' => array('class' => 'btn btn-primary' )))
            ->getForm();
        //Handle Request
        $form -> handleRequest($request);
        //Check Submit
        if ($form->isSubmitted() && $form->isValid()){
            $name = $form['name']->getData();
            $details = $form['details']->getData();
            $category = $form['category']->getData();
            $city = $form['city']->getData();
            $street = $form['street']->getData();
            $zip = $form['zip']->getData();
            $day = $form['day']->getData();

            //Get Current Date and Time
            $now = new \DateTime("now");

            //Call Setters
            $event->setName($name);
            $event->setDetails($details);
            $event->setCategory($category);
            $event->setCity($city);
            $event->setStreet($street);
            $event->setZip($zip);
            $event->setDay($day);
            $event->setCreateDate($now);

            //Go to Doctrine
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            $this->addFlash(
                'notice',
                'Event Saved'
            );
            return $this->redirectToRoute('event_list');
        }
        // Render Template
        return $this->render('event/create.html.twig', [
            'form' => $form -> createView(),
        ]);
    }
    /**
     * @Route("/event/edit/{id}", name="event_edit")
     */
    public function editAction($id, Request $request){
        $event = $this->getDoctrine()
            ->getRepository('AppBundle:Event')
            ->find($id);

        if(!$event){
            throw $this->createNotFoundException(
                'There is no Event with id '.$id
            );
        }

        $event->setName($event->getName());
        $event->setDetails($event->getDetails());
        $event->setCategory($event->getCategory());
        $event->setCity($event->getCity());
        $event->setStreet($event->getStreet());
        $event->setZip($event->getZip());
        $event->setDay($event->getDay());


        $form = $this->createFormBuilder($event)
            ->add('name', TextType::class, array('attr' => array('placeholder'=>'Some Event','class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('details', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('category', EntityType::class, array('class'=>'AppBundle:Category','choice_label'=>'name','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('day', DateTimeType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom: 15px; height: 70px; width: 250px')))
            //->add('day', DateTimeType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            // ->add('day1', DateType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            // ->add('day2', TimeType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('city', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('street', TextType::class, array('label' => 'Street Address', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('zip', TextType::class, array('label' => 'Zip Code', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Edit', 'attr' => array('class' => 'btn btn-primary' )))
            ->getForm();
        //Handle Request
        $form -> handleRequest($request);
        //Check Submit
        if ($form->isSubmitted() && $form->isValid()){

            $name = $form['name']->getData();
            $details = $form['details']->getData();
            $category = $form['category']->getData();
            $city = $form['city']->getData();
            $street = $form['street']->getData();
            $zip = $form['zip']->getData();
            $day = $form['day']->getData();


            //Call Setters

            //Go to Doctrine
            $em = $this->getDoctrine()->getManager();

            $event = $em->getRepository('AppBundle:Event')->find($id);

            $event->setName($name);
            $event->setDetails($details);
            $event->setCategory($category);
            $event->setCity($city);
            $event->setStreet($street);
            $event->setZip($zip);
            $event->setDay($day);

            $em->flush();

            $this->addFlash(
                'notice',
                'Event Updated'
            );
            return $this->redirectToRoute('event_list');
        }
        // Render Template
        return $this->render('event/edit.html.twig', [
            'form' => $form -> createView(),
        ]);
   }
    /**
     * @Route("/event/delete/{id}", name="event_create")
     */
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();

        $event=$em->getRepository('AppBundle:Event')->find($id);
        if(!$event){
            throw $this->createNotFoundException(
                'There is no Event with id '.$id
            );
        }
        $em->remove($event);
        $em->flush();

        $this->addFlash(
            'notice',
            'Event Deleted'
        );
        return $this->redirectToRoute('event_list');

    }
}
