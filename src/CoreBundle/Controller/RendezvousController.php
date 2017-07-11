<?php

namespace CoreBundle\Controller;

use CoreBundle\Entity\Rendezvous;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Rendezvous controller.
 *
 */
class RendezvousController extends Controller {

    /**
     * Lists all rendezvous entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $rendezvouses = $em->getRepository('CoreBundle:Rendezvous')->findAll();

        return $this->render('rendezvous/index.html.twig', array(
                    'rendezvouses' => $rendezvouses,
        ));
    }

    /**
     * Creates a new rendezvous entity.
     *
     */
    public function newAction(Request $request) {
        $rendezvous = new Rendezvous();
        $form = $this->createForm('CoreBundle\Form\RendezvousType', $rendezvous);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rendezvous);
            $em->flush();

            return $this->redirectToRoute('rendezvous_show', array('id' => $rendezvous->getId()));
        }

        return $this->render('rendezvous/new.html.twig', array(
                    'rendezvous' => $rendezvous,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rendezvous entity.
     *
     */
    public function showAction(Rendezvous $rendezvous) {
        $deleteForm = $this->createDeleteForm($rendezvous);

        return $this->render('rendezvous/show.html.twig', array(
                    'rendezvous' => $rendezvous,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rendezvous entity.
     *
     */
    public function editAction(Request $request, Rendezvous $rendezvous) {
        $deleteForm = $this->createDeleteForm($rendezvous);
        $editForm = $this->createForm('CoreBundle\Form\RendezvousType', $rendezvous);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('rendezvous_edit', array('id' => $rendezvous->getId()));
        }

        return $this->render('rendezvous/edit.html.twig', array(
                    'rendezvous' => $rendezvous,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rendezvous entity.
     *
     */
    public function deleteAction(Request $request, Rendezvous $rendezvous) {
        $form = $this->createDeleteForm($rendezvous);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rendezvous);
            $em->flush();
        }

        return $this->redirectToRoute('rendezvous_index');
    }

    public function mailAction(Request $request, Rendezvous $rendezvous) {
        
        return $this->render('rendezvous/mail.html.twig', array(
                    'id'=>$rendezvous->getId(),
                    'rendezvous' => $rendezvous,
            ));
    }
    
    /**
     * Creates a form to delete a rendezvous entity.
     *
     * @param Rendezvous $rendezvous The rendezvous entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rendezvous $rendezvous) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('rendezvous_delete', array('id' => $rendezvous->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

    public function envoiMailAction() {
        $message = (new \Swift_Message('Semaine SCRUM MAIL'))
                ->setFrom('thowawayparis@gmail.com')
                ->setTo('desaricardo@gmail.com')
                ->setBody(
                $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                        'email/rendezvous.html.twig'
                ), 'text/html'
                )
        /*
         * If you also want to include a plaintext version of the message
          ->addPart(
          $this->renderView(
          'Emails/registration.txt.twig',
          array('name' => $name)
          ),
          'text/plain'
          )
         */
        ;

        $this->get('mailer')->send($message);

        // or, you can also fetch the mailer service this way
        // $this->get('mailer')->send($message);

        return $this->redirectToRoute('rendezvous_index');
    }
    

    public function rdvpdfAction() {
        $html = $this->renderView('pdf/rdvpdf.html.twig');

        $filename = sprintf('test-%s.pdf', date('Y-m-d'));

        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
                ]
        );
    }

}
