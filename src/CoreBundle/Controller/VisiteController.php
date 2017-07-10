<?php

namespace CoreBundle\Controller;

use CoreBundle\Entity\Visite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Visite controller.
 *
 */
class VisiteController extends Controller
{
    /**
     * Lists all visite entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $visites = $em->getRepository('CoreBundle:Visite')->findAll();

        return $this->render('visite/index.html.twig', array(
            'visites' => $visites,
        ));
    }

    /**
     * Creates a new visite entity.
     *
     */
    public function newAction(Request $request)
    {
        $visite = new Visite();
        $form = $this->createForm('CoreBundle\Form\VisiteType', $visite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($visite);
            $em->flush();

            return $this->redirectToRoute('visite_show', array('id' => $visite->getId()));
        }

        return $this->render('visite/new.html.twig', array(
            'visite' => $visite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a visite entity.
     *
     */
    public function showAction(Visite $visite)
    {
        $deleteForm = $this->createDeleteForm($visite);

        return $this->render('visite/show.html.twig', array(
            'visite' => $visite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing visite entity.
     *
     */
    public function editAction(Request $request, Visite $visite)
    {
        $deleteForm = $this->createDeleteForm($visite);
        $editForm = $this->createForm('CoreBundle\Form\VisiteType', $visite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('visite_edit', array('id' => $visite->getId()));
        }

        return $this->render('visite/edit.html.twig', array(
            'visite' => $visite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a visite entity.
     *
     */
    public function deleteAction(Request $request, Visite $visite)
    {
        $form = $this->createDeleteForm($visite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($visite);
            $em->flush();
        }

        return $this->redirectToRoute('visite_index');
    }

    /**
     * Creates a form to delete a visite entity.
     *
     * @param Visite $visite The visite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Visite $visite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('visite_delete', array('id' => $visite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
