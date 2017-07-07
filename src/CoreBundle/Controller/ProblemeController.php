<?php

namespace CoreBundle\Controller;

use CoreBundle\Entity\Probleme;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Probleme controller.
 *
 */
class ProblemeController extends Controller
{
    /**
     * Lists all probleme entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $problemes = $em->getRepository('CoreBundle:Probleme')->findAll();

        return $this->render('probleme/index.html.twig', array(
            'problemes' => $problemes,
        ));
    }

    /**
     * Creates a new probleme entity.
     *
     */
    public function newAction(Request $request)
    {
        $probleme = new Probleme();
        $form = $this->createForm('CoreBundle\Form\ProblemeType', $probleme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($probleme);
            $em->flush();

            return $this->redirectToRoute('probleme_show', array('id' => $probleme->getId()));
        }

        return $this->render('probleme/new.html.twig', array(
            'probleme' => $probleme,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a probleme entity.
     *
     */
    public function showAction(Probleme $probleme)
    {
        $deleteForm = $this->createDeleteForm($probleme);

        return $this->render('probleme/show.html.twig', array(
            'probleme' => $probleme,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing probleme entity.
     *
     */
    public function editAction(Request $request, Probleme $probleme)
    {
        $deleteForm = $this->createDeleteForm($probleme);
        $editForm = $this->createForm('CoreBundle\Form\ProblemeType', $probleme);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('probleme_edit', array('id' => $probleme->getId()));
        }

        return $this->render('probleme/edit.html.twig', array(
            'probleme' => $probleme,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a probleme entity.
     *
     */
    public function deleteAction(Request $request, Probleme $probleme)
    {
        $form = $this->createDeleteForm($probleme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($probleme);
            $em->flush();
        }

        return $this->redirectToRoute('probleme_index');
    }

    /**
     * Creates a form to delete a probleme entity.
     *
     * @param Probleme $probleme The probleme entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Probleme $probleme)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('probleme_delete', array('id' => $probleme->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
