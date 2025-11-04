<?php
include "includes/db.php";

if(isset($_POST['input'])){

    $input=$_POST['input'];
    $query="select * from products where product_title LIKE '%{$input}%'";
    $result=mysqli_query($con,$query);
    $i=0;

    if(mysqli_num_rows($result)>0){
        while($row_pro=mysqli_fetch_array($result)){
            $pro_id = $row_pro['product_id'];

            $pro_title = $row_pro['product_title'];

            $pro_image = $row_pro['product_img1'];

            $pro_price = $row_pro['product_price'];

            $pro_date = $row_pro['date'];

            $i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="product_images/<?php echo $pro_image; ?>" width="60" height="60"></td>

<td>$ <?php echo $pro_price; ?></td>

<td><?php echo $pro_date; ?></td>

<td>

<a href="index.php?delete_product=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>
<td>

<a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

    <?php
        }
    }
    else{
        echo"<h6 class='text-danger text-center mt-3'>No Data Found</h6>";
    }
}
?>