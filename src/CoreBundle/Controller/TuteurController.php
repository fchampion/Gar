<?php

namespace CoreBundle\Controller;

use CoreBundle\Entity\Tuteur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tuteur controller.
 *
 */
class TuteurController extends Controller
{
    /**
     * Lists all tuteur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tuteurs = $em->getRepository('CoreBundle:Tuteur')->findAll();

        return $this->render('tuteur/index.html.twig', array(
            'tuteurs' => $tuteurs,
        ));
    }

    /**
     * Creates a new tuteur entity.
     *
     */
    public function newAction(Request $request)
    {
        $tuteur = new Tuteur();
        $form = $this->createForm('CoreBundle\Form\TuteurType', $tuteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tuteur);
            $em->flush();

            return $this->redirectToRoute('tuteur_show', array('id' => $tuteur->getId()));
        }

        return $this->render('tuteur/new.html.twig', array(
            'tuteur' => $tuteur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tuteur entity.
     *
     */
    public function showAction(Tuteur $tuteur)
    {
        $deleteForm = $this->createDeleteForm($tuteur);

        return $this->render('tuteur/show.html.twig', array(
            'tuteur' => $tuteur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tuteur entity.
     *
     */
    public function editAction(Request $request, Tuteur $tuteur)
    {
        $deleteForm = $this->createDeleteForm($tuteur);
        $editForm = $this->createForm('CoreBundle\Form\TuteurType', $tuteur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tuteur_edit', array('id' => $tuteur->getId()));
        }

        return $this->render('tuteur/edit.html.twig', array(
            'tuteur' => $tuteur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tuteur entity.
     *
     */
    public function deleteAction(Request $request, Tuteur $tuteur)
    {
        $form = $this->createDeleteForm($tuteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tuteur);
            $em->flush();
        }

        return $this->redirectToRoute('tuteur_index');
    }

    /**
     * Creates a form to delete a tuteur entity.
     *
     * @param Tuteur $tuteur The tuteur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tuteur $tuteur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tuteur_delete', array('id' => $tuteur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
