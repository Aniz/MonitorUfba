<?php

namespace Bd\MonitorUfbaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bd\MonitorUfbaBundle\Entity\Monitoria;
use Bd\MonitorUfbaBundle\Form\MonitoriaType;

/**
 * Monitoria controller.
 *
 * @Route("/monitoria")
 */
class MonitoriaController extends Controller
{

    /**
     * Lists all Monitoria entities.
     *
     * @Route("/", name="monitoria")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BdMonitorUfbaBundle:Monitoria')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Monitoria entity.
     *
     * @Route("/", name="monitoria_create")
     * @Method("POST")
     * @Template("BdMonitorUfbaBundle:Monitoria:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Monitoria();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('monitoria_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Monitoria entity.
    *
    * @param Monitoria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Monitoria $entity)
    {
        $form = $this->createForm(new MonitoriaType(), $entity, array(
            'action' => $this->generateUrl('monitoria_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Monitoria entity.
     *
     * @Route("/new", name="monitoria_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Monitoria();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Monitoria entity.
     *
     * @Route("/{id}", name="monitoria_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Monitoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Monitoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Monitoria entity.
     *
     * @Route("/{id}/edit", name="monitoria_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Monitoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Monitoria entity.');
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
    * Creates a form to edit a Monitoria entity.
    *
    * @param Monitoria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Monitoria $entity)
    {
        $form = $this->createForm(new MonitoriaType(), $entity, array(
            'action' => $this->generateUrl('monitoria_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Monitoria entity.
     *
     * @Route("/{id}", name="monitoria_update")
     * @Method("PUT")
     * @Template("BdMonitorUfbaBundle:Monitoria:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Monitoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Monitoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('monitoria_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Monitoria entity.
     *
     * @Route("/{id}", name="monitoria_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BdMonitorUfbaBundle:Monitoria')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Monitoria entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('monitoria'));
    }

    /**
     * Creates a form to delete a Monitoria entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('monitoria_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
