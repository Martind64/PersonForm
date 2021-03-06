<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Person;
use AppBundle\Form\Type\PersonType;
use AppBundle\Form\Type\PersonListType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $person = new Person();

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

        return $this->render('addPerson.html.twig', array('person'  => $person));
    }

    /**
     * @Route("list", name="listRoute")
     */
    public function listFunction(Request $request)
    {
        $person = new Person();

        $form = $this->createForm(new PersonListType(), $person);
        $form->handleRequest($request);

        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $persons= $em->getRepository('AppBundle:Person')->findAll();

            return $this->render('list.html.twig', array('persons' => $persons, 'form' => $form->createView()));

        }

        return $this->render('listView.html.twig', array('form' => $form->createView()));

    }

}
