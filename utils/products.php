<?php
include "configString.php";
//products
function getProductFromDB($categoryId,$connect_db){
    $sql="select * from products where category_id=?";
    $query = $connect_db->prepare($sql);
    $query->bindValue(1, $categoryId);
    $query->execute();
    $connect_db=null;

    return $query;

}
function createProductCard($item){
       return '
        <div class="col">
                  <div class="card h-100">
                    <img src="'.$item["image"].'" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$item["name"].'</h5>
                      <p class="card-text">'.limit_text($item["description"], 20).'</p>
                      <p class="card-text">price: '.$item["price"].' $</p>
                    </div>
                    <div class="card-footer">
                        <button class="d-block m-auto btn btn-warning">Add to Cart</button>
                    </div>
                  </div>
                </div>
        
        ';
    }

 function createListCard($list){
        $listCard=' <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 p-3">';
        if($list->rowCount()){
            foreach ($list as $index=>$item){
                $card = createProductCard($item);
                $listCard .= $card;
            }
        }
        else{
            $listCard .= '<h3>There aren\'t products. </h3>';
        }
        $listCard .='</div>';
        return $listCard;
}
