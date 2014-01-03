<?php

namespace Bd\MonitorUfbaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bd\MonitorUfbaBundle\Entity\Professor;
use Bd\MonitorUfbaBundle\Form\ProfessorType;

/**
 * Professor controller.
 *
 * @Route("/professor")
 */
class ProfessorController extends Controller
{

    /**
     * Lists all Professor entities.
     *
     * @Route("/", name="professor")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BdMonitorUfbaBundle:Professor')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Professor entity.
     *
     * @Route("/", name="professor_create")
     * @Method("POST")
     * @Template("BdMonitorUfbaBundle:Professor:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Professor();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('professor_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Professor entity.
    *
    * @param Professor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Professor $entity)
    {
        $form = $this->createForm(new ProfessorType(), $entity, array(
            'action' => $this->generateUrl('professor_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Professor entity.
     *
     * @Route("/new", name="professor_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Professor();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Professor entity.
     *
     * @Route("/{id}", name="professor_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Professor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Professor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Professor entity.
     *
     * @Route("/{id}/edit", name="professor_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Professor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Professor entity.');
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
    * Creates a form to edit a Professor entity.
    *
    * @param Professor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Professor $entity)
    {
        $form = $this->createForm(new ProfessorType(), $entity, array(
            'action' => $this->generateUrl('professor_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Professor entity.
     *
     * @Route("/{id}", name="professor_update")
     * @Method("PUT")
     * @Template("BdMonitorUfbaBundle:Professor:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Professor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Professor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('professor_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Professor entity.
     *
     * @Route("/{id}", name="professor_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BdMonitorUfbaBundle:Professor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Professor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('professor'));
    }

    /**
     * Creates a form to delete a Professor entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('professor_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
