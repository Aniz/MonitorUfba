<?php

namespace Bd\MonitorUfbaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bd\MonitorUfbaBundle\Entity\Selecao;
use Bd\MonitorUfbaBundle\Form\SelecaoType;

/**
 * Selecao controller.
 *
 * @Route("/selecao")
 */
class SelecaoController extends Controller
{

    /**
     * Lists all Selecao entities.
     *
     * @Route("/", name="selecao")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BdMonitorUfbaBundle:Selecao')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Selecao entity.
     *
     * @Route("/", name="selecao_create")
     * @Method("POST")
     * @Template("BdMonitorUfbaBundle:Selecao:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Selecao();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('selecao_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Selecao entity.
    *
    * @param Selecao $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Selecao $entity)
    {
        $form = $this->createForm(new SelecaoType(), $entity, array(
            'action' => $this->generateUrl('selecao_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Selecao entity.
     *
     * @Route("/new", name="selecao_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Selecao();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Selecao entity.
     *
     * @Route("/{id}", name="selecao_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Selecao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Selecao entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Selecao entity.
     *
     * @Route("/{id}/edit", name="selecao_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Selecao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Selecao entity.');
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
    * Creates a form to edit a Selecao entity.
    *
    * @param Selecao $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Selecao $entity)
    {
        $form = $this->createForm(new SelecaoType(), $entity, array(
            'action' => $this->generateUrl('selecao_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Selecao entity.
     *
     * @Route("/{id}", name="selecao_update")
     * @Method("PUT")
     * @Template("BdMonitorUfbaBundle:Selecao:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Selecao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Selecao entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('selecao_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Selecao entity.
     *
     * @Route("/{id}", name="selecao_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BdMonitorUfbaBundle:Selecao')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Selecao entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('selecao'));
    }

    /**
     * Creates a form to delete a Selecao entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('selecao_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
