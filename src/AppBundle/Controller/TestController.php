<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class TestController extends Controller {

	public function testAction() {

		$host=$this->container->getParameter('database_host');
		$dbname=$this->container->getParameter('database_name');
		$user=$this->container->getParameter('database_user');
		$pass=$this->container->getParameter('database_password');

		$pdo=new \PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);
		$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

		$stmt=$pdo->prepare("CALL contact_book_by_quantity(0)");
		$stmt->execute();
		$result=$stmt->fetchAll(\PDO::FETCH_ASSOC);
		$stmt->closeCursor();

		$data=['result' => $result];
		return new JsonResponse($data);
	}

}
