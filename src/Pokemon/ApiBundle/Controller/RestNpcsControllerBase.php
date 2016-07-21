<?php

namespace Pokemon\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\Request;

use Pokemon\ApiBundle\Form\NpcsType;
use Pokemon\ApiBundle\Entity\Npcs;
use Pokemon\ApiBundle\Controller\RestDresseursController;
use Pokemon\ApiBundle\Controller\RestPokemonsController;
use Pokemon\ApiBundle\Controller\RestBadgesController;
use Pokemon\ApiBundle\Controller\RestObjetsController;
use Pokemon\ApiBundle\Controller\RestSyncController as Controller;

/**
 * Npcs Repository
 *
 * This class was generated by the Harmony / Doctrine ORM.
 *
 * This class will be regenerated by Harmony. DO NOT MODIFIY THIS CLASS.
 */
class RestNpcsControllerBase extends Controller {

    public function getNewEntity() {
        return new Npcs();
    }

    /**=========================================================================
     * CRUD REST
     *========================================================================*/

    /**
     * GET /{id}
     *
     * @param string npcsId
     * @return Response
     * @Rest\Get("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD Npcs",
     *   description="Show entity"
     * )
     * @return type
     */
    public function getNpcsAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $data = $entityManager->getRepository('PokemonApiBundle:Npcs')->findOneById($id);
        $view = $this->view($data, 200);
        return $this->handleView($view);
    }

    /**
     * POST
     *
     * @Rest\Post("")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD Npcs",
     *   description="Create entity",
     *   requirements={
     *      {
     *          "name"="dresseursnpcInternal",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The dresseursnpcInternal npcs",
     *      },
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom npcs",
     *      },
     *      {
     *          "name"="profession",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The profession npcs",
     *      },
     *      {
     *          "name"="texte",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The texte npcs",
     *      },
     *      {
     *          "name"="pokemon",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pokemon npcs",
     *      },
     *      {
     *          "name"="badge",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The badge npcs",
     *      },
     *      {
     *          "name"="objet",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The objet npcs",
     *      },
     *   }
     * )
     * @return type
     */
    public function createNpcsAction(Request $request) {
        $entity = new Npcs();

        $form = $this->createForm(new NpcsType(), $entity, array(
            'allow_extra_fields' => true
        ));
        $form->submit($request);

        if ($form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($entity);
            $entityManager->flush();
            $view = $this->view($entity, 200);
        } else {
            $view = $this->view(array("error" => "Parameters entity isn't valid" . $form->getErrors()), 400);
        }

        return $this->handleView($view);
    }

    /**
     * GET
     *
     * @Rest\Get("")
     * @Rest\QueryParam(name="page", nullable=true, requirements="\d+", default="0", description="Number of the page")
     * @Rest\QueryParam(name="quantity", nullable=true, requirements="\d+", default="0", description="Quantity of entities per page")
     * @param ParamFetcher $paramFetcher
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD Npcs",
     *   description="Show all entities",
     *   requirements={
     *   }
     * )
     * @return type
     */
    public function getAllNpcsAction(ParamFetcherInterface $paramFetcher)
    {
        $repository = $this->getDoctrine()->getRepository('PokemonApiBundle:Npcs');

        $page = $paramFetcher->get('page');
        $quantity = $paramFetcher->get('quantity');

        $data = $repository->getList($page, $quantity);

        if ($data) {
            $view = $this->view(array("Npcss" => $data), 200);
        } else {
            $view = $this->view(null, 204);
        }

        return $this->handleView($view);
    }

    /**
     * PUT /{id}
     *
     * @Rest\Put("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD Npcs",
     *   description="Update entity",
     *   requirements={
     *      {
     *          "name"="dresseursnpcInternal",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The dresseursnpcInternal npcs",
     *      },
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom npcs",
     *      },
     *      {
     *          "name"="profession",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The profession npcs",
     *      },
     *      {
     *          "name"="texte",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The texte npcs",
     *      },
     *      {
     *          "name"="pokemon",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pokemon npcs",
     *      },
     *      {
     *          "name"="badge",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The badge npcs",
     *      },
     *      {
     *          "name"="objet",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The objet npcs",
     *      },
     *   }
     * )
     * @return type
     */
    public function updateNpcsAction($id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokemonApiBundle:Npcs')
            ->findOneById($id);

        $form = $this->createForm(new NpcsType(), $entity, array(
            'allow_extra_fields' => true
        ));

        $form->submit($request, false);

        if ($form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($entity);
            $entityManager->flush();
            $view = $this->view($entity, 200);
        } else {
            $view = $this->view(array("error" => "Parameters entity isn't valid"), 400);
        }

        return $this->handleView($view);
    }

    /**
     * DELETE /{id}
     *
     * @Rest\Delete("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD Npcs",
     *   description="Delete entity",
     * )
     * @return type
     */
    public function deleteNpcsAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokemonApiBundle:Npcs')
            ->find(array("id" => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Npcs entity');
        }

        $entityManager->remove($entity);
        $entityManager->flush();

        $view = $this->view($entity, 200);
        return $this->handleView($view);
    }


}

?>