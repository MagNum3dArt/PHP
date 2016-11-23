<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Category;

class CategoryController extends Controller{
    /**
     * @Route("/categories", name="category_list")
     */
    public function indexAction(Request $request){
        $categories = $this->getDoctrine()
            ->getRepository('AppBundle:Category')
            ->findAll();
        // Render Template
        return $this->render('category/index.html.twig', [
            'categories' => $categories,
        ]);
    }
    /**
     * @Route("/category/create", name="category_creation")
     */
    public function createAction(Request $request){
        $category = new Category();

        $form = $this->createFormBuilder($category)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Create','attr' => array('class' => 'btn btn-primary' )))
            ->getForm();
        //Handle Request
        $form -> handleRequest($request);
        //Check Submit
        if ($form->isSubmitted() && $form->isValid()){
            $name = $form['name']->getData();

            //Get Current Date and Time
            $now = new \DateTime("now");

            //Call Setters
            $category->setName($name);
            $category->setCreateDate($now);

            //Go to Doctrine
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            $this->addFlash(
                'notice',
                'Category Saved'
            );
            return $this->redirectToRoute('category_list');
        }
        // Render Template
        return $this->render('category/create.html.twig', [
            'form' => $form -> createView(),
        ]);
   }
    /**
     * @Route("/category/edit/{id}", name="category_edit")
     */
    public function editAction($id, Request $request){

        $category = $this->getDoctrine()
            ->getRepository('AppBundle:Category')
            ->find($id);

        if(!$category){
            throw $this->createNotFoundException(
                'There is no Category with id '.$id
            );
        }

        $category->setName($category->getName());

        $form = $this->createFormBuilder($category)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Edit','attr' => array('class' => 'btn btn-primary' )))
            ->getForm();

        //Handle Request
        $form -> handleRequest($request);

        //Check Submit
        if ($form->isSubmitted() && $form->isValid()){

            $name = $form['name']->getData();

            //Go to Doctrine
            $em = $this->getDoctrine()->getManager();

            $category=$em->getRepository('AppBundle:Category')->find($id);
            
            $category->setName($name);

            $em->flush();

            $this->addFlash(
                'notice',
                'Category Updated'
            );
            return $this->redirectToRoute('category_list');
        }
        // Render Template
        return $this->render('category/edit.html.twig', [
            'form' => $form -> createView(),
        ]);
    }
    /**
     * @Route("/category/delete/{id}", name="category_create")
     */
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();

        $category=$em->getRepository('AppBundle:Category')->find($id);
        if(!$category){
            throw $this->createNotFoundException(
                'There is no Category with id '.$id
            );
        }
        $em->remove($category);
        $em->flush();

        $this->addFlash(
            'notice',
            'Category Deleted'
        );
        return $this->redirectToRoute('category_list');

    }
}
