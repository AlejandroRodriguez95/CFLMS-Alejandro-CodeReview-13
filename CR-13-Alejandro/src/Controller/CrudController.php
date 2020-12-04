<?php
namespace App\Controller;

use Symfony\ Component\HttpFoundation\Response;
use  Symfony\Component\Routing\Annotation\ Route;
use Symfony\Component\ HttpFoundation\Request;
use Symfony\ Bundle\FrameworkBundle\Controller\Controller ;
use Symfony\Component\Form \Extension\Core\Type\TextType ;
use Symfony\Component\Form \Extension\Core\Type\TextareaType ;
use Symfony\Component\ Form\Extension\Core\Type \DateTimeType;
use Symfony\ Component\Form\Extension\Core \Type\ChoiceType;
use Symfony\Component\Form\Extension \Core\Type\SubmitType;
use App\Entity\Event;

class CrudController extends Controller
{
    /**
     * @Route("/", name="home_page")
     */
    public function showAction()
    {
        $events = $this->getDoctrine()->getRepository('App:Event')->findAll();
        return $this ->render('crud/index.html.twig', array('events'=>$events));
    }

    /**
    * @Route("/create", name="create_page")
    */
    public function  createAction(Request $request)
   {
        $event = new Event;
        $form = $this->createFormBuilder($event)
        ->add( 'name', TextType::class, array ('attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
        ->add( 'date', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
        ->add( 'image', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
        ->add( 'capacity', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
        ->add( 'email', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
        ->add( 'phone', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
        ->add( 'address', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
        ->add( 'url', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
        ->add( 'description', TextareaType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
        ->add( 'type' , ChoiceType::class, array ( 'choices' => array ( 'music' => 'music' , 'sport' => 'sport' , 'movie' => 'movie', 'art' => 'art', 'other' => 'other' ), 'attr'  => array ( 'class' => 'form-control' , 'style' => 'margin-botton:15px' )))
        ->add( 'save' , SubmitType::class, array ( 'label' => 'Save' , 'attr'  => array ( 'class' => 'btn-primary' , 'style' => 'margin-bottom:15px' )))
        ->getForm();
       $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()){


           $name = $form[ 'name' ]->getData();
           $date = $form[ 'date' ]->getData();
           $image = $form[ 'image' ]->getData();
           $capacity = $form[ 'capacity' ]->getData();
           $email = $form[ 'email' ]->getData();
           $phone = $form[ 'phone' ]->getData();
           $address = $form[ 'address' ]->getData();
           $url = $form[ 'url' ]->getData();
           $description = $form[ 'description' ]->getData();
           $type = $form[ 'type' ]->getData();

           $event->setName($name);
           $event->setDate($date);
           $event->setImage($image);
           $event->setCapacity($capacity);
           $event->setEmail($email);
           $event->setPhone($phone);
           $event->setAddress($address);
           $event->setUrl($url);
           $event->setDescription($description);
           $event->settype($type);
           $em = $this ->getDoctrine()->getManager();
           $em->persist($event);
           $em->flush();
            $this ->addFlash(
                    'notice' ,
                    'Event added'
                   );
            return   $this ->redirectToRoute( 'home_page' );
       }

        return   $this ->render( 'crud/create.html.twig' , array ( 'form'  => $form->createView()));
   }

    /**
    * @Route("/edit/{id}", name="event_edit")
    */
    public  function editAction( $id, Request $request){
            $event = $this->getDoctrine()->getRepository('App:Event')->find($id);
            $event->setName($event->getName());
            $event->setDate($event->getdate());
            $event->setImage($event->getImage());
            $event->setCapacity($event->getCapacity());
            $event->setPhone($event->getPhone());
            $event->setAddress($event->getPhone());
            $event->setUrl($event->getUrl());
            $event->setdescription($event->getDescription());
            $event->setType($event->getType());

            $form = $this->createFormBuilder($event)
            ->add( 'name', TextType::class, array ('attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add( 'date', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add( 'image', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add( 'capacity', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add( 'email', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add( 'phone', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add( 'address', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add( 'url', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add( 'description', TextareaType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
            ->add( 'type' , ChoiceType::class, array ( 'choices' => array ( 'music' => 'music' , 'sport' => 'sport' , 'movie' => 'movie', 'art' => 'art', 'other' => 'other' ), 'attr'  => array ( 'class' => 'form-control' , 'style' => 'margin-botton:15px' )))
            ->add( 'save' , SubmitType::class, array ( 'label' => 'Save' , 'attr'  => array ( 'class' => 'btn-primary' , 'style' => 'margin-top:15px' )))
            ->getForm();
               $form->handleRequest($request);
                if($form->isSubmitted() && $form->isValid()){
                    $name = $form[ 'name' ]->getData();
                    $date = $form[ 'date' ]->getData();
                    $image = $form[ 'image' ]->getData();
                    $capacity = $form[ 'capacity' ]->getData();
                    $email = $form[ 'email' ]->getData();
                    $phone = $form[ 'phone' ]->getData();
                    $address = $form[ 'address' ]->getData();
                    $url = $form[ 'url' ]->getData();
                    $description = $form[ 'description' ]->getData();
                    $type = $form[ 'type' ]->getData();
                    $em = $this->getDoctrine()->getManager();
                    
                    $event->setName($name);
                    $event->setDate($date);
                    $event->setImage($image);
                    $event->setCapacity($capacity);
                    $event->setEmail($email);
                    $event->setPhone($phone);
                    $event->setAddress($address);
                    $event->setUrl($url);
                    $event->setDescription($description);
                    $event->settype($type);
               
                   $em->flush();
                    $this->addFlash(
                            'notice',
                            'Todo Updated'
                           );
                    return $this ->redirectToRoute('home_page' );
               }
               return  $this->render( 'crud/edit.html.twig', array( 'event' => $event, 'form' => $form->createView()));
           }

    /**
    * @Route("/details/{id}", name="details_page")
    */
    public function  detailsAction($id)
    {
        $event = $this->getDoctrine()->getRepository( 'App:Event')->find($id);
        return $this->render( 'crud/details.html.twig', array('event' => $event));
    }

    
    /**
    * @Route("/delete/{id}", name="event_delete")
    */
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
   $event = $em->getRepository('App:Event')->find($id);
   $em->remove($event);
    $em->flush();
    $this->addFlash(
           'notice',
            'Event removed'
           );
    return  $this->redirectToRoute('home_page');
}


    /**
    * @Route("/filter/{type}", name="event_filter")
    */
    public function filter($type){
        $events = $this->getDoctrine()->getRepository('App:Event')->findByType($type);
        return $this ->render('crud/index.html.twig', array('events'=>$events));
}


}
?>