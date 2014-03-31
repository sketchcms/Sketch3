<?php
namespace Sketch\Entities\Repository;

class UserRepository extends \Doctrine\ORM\EntityRepository
{
    use \Sketch\Traits\Crud;
    public function login($username,$password){
        try{
            return $this->_em->createQueryBuilder()
                        ->select("p")
                        ->from($this->getClassName(),"p")
                        ->where("p.login = :login")
                        ->andWhere("p.password = :password")
                        ->setParameter("login", $username)
                        ->setParameter("password", $password)
                        ->getQuery()
                        ->getOneOrNullResult();
        }catch(\Doctrine\ODM\PHPCR\Query\QueryException $e){
            return null;
        }
        catch(\Exception $e){
            return null;
        }
    }
    public function getToken($token){
        try{
            return $this->_em->createQueryBuilder()
                        ->select("p")
                        ->from($this->getClassName(),"p")
                        ->where("p.token = :token")
                        ->andWhere("p.tokenExpiry >= CURRENT_TIMESTAMP()")
                        ->setParameter("token", $token)
                        ->getQuery()
                        ->getOneOrNullResult();
        }catch(\Doctrine\ODM\PHPCR\Query\QueryException $e){
            return null;
        }
        catch(\Exception $e){
            return null;
        }
    }
}
