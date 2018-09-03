

<h1> Customers </h1>

<?php 

echo "<pre>";
    //print_r($customers_var);
    

//print_r($customers_array);

//$customer = $customers_array[0];

//echo count ($customer->works);

//print_r($customers_array);

echo "</pre>";
    
    
    $table="<table class='table'>";
    
    
    $table.="<tr>
    
            	<th>id</th>
            	<th>customer_name</th>
            	<th>customer_email</th>
            	<th>customer_sex</th>
            	<th>customer_birthday</th>
            	
            </tr>";
    

    foreach ($customers_array as $row){
    
    
    $id = $row['id'];    
    $customer_name = $row['customer_name'];
    $customer_email = $row['customer_email'];
    $customer_sex = $row['customer_sex'];
    $customer_birthday = $row['customer_birthday'];
        
    
    
    $table.="<tr>
            	<td>$id</td> 
            	<td>$customer_name</td>
            	<td>$customer_email</td>
            	<td>$customer_sex</td>
            	<td>$customer_birthday</td>
            </tr>";
    }
            	
    $table.="</table>";    
    
    echo $table;
    
    
    foreach ($customers_array as $customer){
        
        echo '<ul>';
            echo '<li>'.$customer->customer_name;
                
                echo '<ul>';
                        foreach ($customer->works as $work){
                            echo '<li>'.$work->work_name.'</li>';
                        }
                echo '</ul>';
                
            echo'</li>';
        echo '</ul>';
    }

?>

