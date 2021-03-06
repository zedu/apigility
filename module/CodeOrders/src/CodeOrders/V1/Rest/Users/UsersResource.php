<?php
namespace CodeOrders\V1\Rest\Users;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

class UsersResource extends AbstractResourceListener
{
    private $usersRepository;
    
    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }    
   
    public function create($data)
    {
        return $this->usersRepository->insert($data);
    }
   
    public function delete($id)
    {        
        $this->usersRepository->delete($id);
        return true;
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }
  
    public function fetch($id)
    {
        return $this->usersRepository->find($id);
    }
   
    public function fetchAll($params = array())
    {
        return $this->usersRepository->findAll();
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }
   
    public function update($id, $data)
    {
        return $this->usersRepository->update($id, $data);
    }
}
