<?php
  include('./apis/api.php');

  //  Count Comments
 $select="SELECT COUNT(*) as total_comment FROM comments";
  $result=mysqli_query($con,$select);
    if(mysqli_num_rows($result)){
        while($row=mysqli_fetch_assoc($result)){
            $total_comments=$row['total_comment'];
            echo"
                <h2>Total Comments:$total_comments</h2>
            
            ";
        }
    }

    // Count Products

    $api="SELECT COUNT(*) as total_product FROM products";
        $results=mysqli_query($con,$api);
            if(mysqli_num_rows($results)){
                while($row=mysqli_fetch_assoc($results)){
                    $total_products=$row['total_product'];
                     echo"
                        <h2>Total Products:$total_products</h2>
                     ";

                }
            }



?>