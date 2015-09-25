<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Person;
use AppBundle\Form\Type\PersonType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $person = new Person();
        $person->setName('Billy the kid');
        $person->setAge(15);

        $form = $this->createForm(new PersonType(), $person);
        $form->handleRequest($request);


        if ($form->isValid()) {
            return $this->forward('AppBundle:Default:addPerson', array('person' => $person));

        }

        return $this->render('index.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/addRoute", name="addRoute")
     */

    public function addPersonAction($person)
    {

        $em = $this->getDoctrine()->getManager();

        $em->persist($person);
        $em->flush();
//
        return $this->render('addPerson.html.twig');


    }




}
