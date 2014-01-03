<?php

namespace Bd\MonitorUfbaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bd\MonitorUfbaBundle\Entity\Edital;
use Bd\MonitorUfbaBundle\Form\EditalType;

/**
 * Edital controller.
 *
 * @Route("/edital")
 */
class EditalController extends Controller
{

    /**
     * Lists all Edital entities.
     *
     * @Route("/", name="edital")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BdMonitorUfbaBundle:Edital')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Edital entity.
     *
     * @Route("/", name="edital_create")
     * @Method("POST")
     * @Template("BdMonitorUfbaBundle:Edital:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Edital();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('edital_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Edital entity.
    *
    * @param Edital $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Edital $entity)
    {
        $form = $this->createForm(new EditalType(), $entity, array(
            'action' => $this->generateUrl('edital_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Edital entity.
     *
     * @Route("/new", name="edital_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Edital();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Edital entity.
     *
     * @Route("/{id}", name="edital_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Edital')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Edital entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Edital entity.
     *
     * @Route("/{id}/edit", name="edital_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Edital')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Edital entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Edital entity.
    *
    * @param Edital $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Edital $entity)
    {
        $form = $this->createForm(new EditalType(), $entity, array(
            'action' => $this->generateUrl('edital_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Edital entity.
     *
     * @Route("/{id}", name="edital_update")
     * @Method("PUT")
     * @Template("BdMonitorUfbaBundle:Edital:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Edital')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Edital entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('edital_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Edital entity.
     *
     * @Route("/{id}", name="edital_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BdMonitorUfbaBundle:Edital')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Edital entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('edital'));
    }

    /**
     * Creates a form to delete a Edital entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('edital_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
