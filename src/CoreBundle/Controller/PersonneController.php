<?php

namespace CoreBundle\Controller;

use CoreBundle\Entity\Personne;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CoreBundle\Form\PersonneType;

/**
 * Personne controller.
 *
 */
class PersonneController extends Controller {

    /**
     * Lists all personne entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $personnes = $em->getRepository('CoreBundle:Personne')->findAll();

        return $this->render('personne/index.html.twig', array(
                    'personnes' => $personnes,
        ));
    }

    /**
     * Creates a new personne entity.
     *
     */
    public function newAction(Request $request) {
        $personne = new Personne();
        $form = $this->createForm('CoreBundle\Form\PersonneType', $personne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($personne);
            $em->flush();

            return $this->redirectToRoute('personne_show', array('id' => $personne->getId()));
        }

        return $this->render('personne/new.html.twig', array(
                    'personne' => $personne,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a personne entity.
     *
     */
    public function showAction(Personne $personne) {
        $deleteForm = $this->createDeleteForm($personne);

        return $this->render('personne/show.html.twig', array(
                    'personne' => $personne,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing personne entity.
     *
     */
    public function editAction(Request $request, Personne $personne) {
        $deleteForm = $this->createDeleteForm($personne);
        $editForm = $this->createForm('CoreBundle\Form\PersonneType', $personne);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('personne_edit', array('id' => $personne->getId()));
        }

        return $this->render('personne/edit.html.twig', array(
                    'personne' => $personne,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a personne entity.
     *
     */
    public function deleteAction(Request $request, Personne $personne) {
        $form = $this->createDeleteForm($personne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($personne);
            $em->flush();
        }

        return $this->redirectToRoute('personne_index');
    }

    /**
     * Creates a form to delete a personne entity.
     *
     * @param Personne $personne The personne entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Personne $personne) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('personne_delete', array('id' => $personne->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
