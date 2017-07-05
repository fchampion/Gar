<?php

namespace CoreBundle\Controller;

use CoreBundle\Entity\Rdv;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Rdv controller.
 *
 */
class RdvController extends Controller
{
    /**
     * Lists all rdv entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rdvs = $em->getRepository('CoreBundle:Rdv')->findAll();

        return $this->render('rdv/index.html.twig', array(
            'rdvs' => $rdvs,
        ));
    }

    /**
     * Creates a new rdv entity.
     *
     */
    public function newAction(Request $request)
    {
        $rdv = new Rdv();
        $form = $this->createForm('CoreBundle\Form\RdvType', $rdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rdv);
            $em->flush();

            return $this->redirectToRoute('rdv_show', array('id' => $rdv->getId()));
        }

        return $this->render('rdv/new.html.twig', array(
            'rdv' => $rdv,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rdv entity.
     *
     */
    public function showAction(Rdv $rdv)
    {
        $deleteForm = $this->createDeleteForm($rdv);

        return $this->render('rdv/show.html.twig', array(
            'rdv' => $rdv,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rdv entity.
     *
     */
    public function editAction(Request $request, Rdv $rdv)
    {
        $deleteForm = $this->createDeleteForm($rdv);
        $editForm = $this->createForm('CoreBundle\Form\RdvType', $rdv);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('rdv_edit', array('id' => $rdv->getId()));
        }

        return $this->render('rdv/edit.html.twig', array(
            'rdv' => $rdv,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rdv entity.
     *
     */
    public function deleteAction(Request $request, Rdv $rdv)
    {
        $form = $this->createDeleteForm($rdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rdv);
            $em->flush();
        }

        return $this->redirectToRoute('rdv_index');
    }

    /**
     * Creates a form to delete a rdv entity.
     *
     * @param Rdv $rdv The rdv entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rdv $rdv)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rdv_delete', array('id' => $rdv->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
