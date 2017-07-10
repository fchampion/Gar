<?php

namespace CoreBundle\Controller;

use CoreBundle\Entity\Contrat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Contrat controller.
 *
 */
class ContratController extends Controller
{
    /**
     * Lists all contrat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contrats = $em->getRepository('CoreBundle:Contrat')->findAll();

        return $this->render('contrat/index.html.twig', array(
            'contrats' => $contrats,
        ));
    }

    /**
     * Creates a new contrat entity.
     *
     */
    public function newAction(Request $request)
    {
        $contrat = new Contrat();
        $form = $this->createForm('CoreBundle\Form\ContratType', $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contrat);
            $em->flush();

            return $this->redirectToRoute('contrat_show', array('id' => $contrat->getId()));
        }

        return $this->render('contrat/new.html.twig', array(
            'contrat' => $contrat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a contrat entity.
     *
     */
    public function showAction(Contrat $contrat)
    {
        $deleteForm = $this->createDeleteForm($contrat);

        return $this->render('contrat/show.html.twig', array(
            'contrat' => $contrat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing contrat entity.
     *
     */
    public function editAction(Request $request, Contrat $contrat)
    {
        $deleteForm = $this->createDeleteForm($contrat);
        $editForm = $this->createForm('CoreBundle\Form\ContratType', $contrat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contrat_edit', array('id' => $contrat->getId()));
        }

        return $this->render('contrat/edit.html.twig', array(
            'contrat' => $contrat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a contrat entity.
     *
     */
    public function deleteAction(Request $request, Contrat $contrat)
    {
        $form = $this->createDeleteForm($contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contrat);
            $em->flush();
        }

        return $this->redirectToRoute('contrat_index');
    }

    /**
     * Creates a form to delete a contrat entity.
     *
     * @param Contrat $contrat The contrat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Contrat $contrat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contrat_delete', array('id' => $contrat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
