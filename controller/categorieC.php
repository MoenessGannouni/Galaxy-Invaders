<?php

include 'C:\xampp\htdocs\gi\config2.php';
include_once 'C:\xampp\htdocs\gi\model\categorieM.php';

class categorieC
{

    function affichercategorie(){
        $sql="SELECT * FROM `categorie`";
        $db = config2::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('erreur: '. $e->getMessage());
        }
    }

    function ajoutercategorie($categorieM){
        
        $sql="INSERT INTO categorie (id_ct, Category_Pr)
			VALUES (NULL,:Category_Pr)";
			$db = config2::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'Category_Pr' => $categorieM->getcategory()
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
    }

    function retrievecategorie($id){
        $sql="SELECT * from categorie where id_ct= $id";
        
        $db = config2::getConnexion();
        try{
            $query=$db->prepare($sql);
            //$query -> bindValue(':id',$id);
            $query->execute();

            $categorie=$query->fetch();
            return $categorie;
        }
        catch (Exception $e){
            die('error: '.$e->getMessage());
        }
    }
    
    function modifiercategorie($categorieM, $id){
        
        try {
            $db = config2::getConnexion();
            $query = $db->prepare(
                'UPDATE categorie SET 
                 
                    Category_Pr = :Category_Pr
                   
                WHERE id_ct = :id_ct'
            );
            $query -> bindValue(':id_ct',$id);
           if( $query->execute([
                'id_ct'=> $id,
                
                'Category_Pr' => $categorieM->getcategory()
               
            ])) echo 'sucess';
            else echo 'errrrrrrrrrrrrrror';
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    function deletecategorie($id){
        $sql="DELETE FROM categorie WHERE id_ct=:id_ct";
        $db = config2::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_ct', $id);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('error:'. $e->getMessage());
        }
    }

    function afficherOrders(){
        $sql="SELECT * FROM `orders`";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('erreur: '. $e->getMessage());
        }
    }
}

?>