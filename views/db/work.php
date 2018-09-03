<h1> Workers </h1>

<?php 

echo "<pre>";
    //print_r($customers_var);
    

    print_r($workers_array);
echo "</pre>";
    
    
    $table="<table class='table'>";
    
    
    $table.="<tr>
    
            	<th>id</th>
            	<th>work_name</th>
            	<th>work_salary</th>
            	<th>customer_fk</th>
            </tr>";
    

    foreach ($workers_array as $row){
    
    
    $id = $row['id'];    
    $work_name = $row['work_name'];
    $work_salary = $row['work_salary'];
    $customer_fk = $row['customer_fk'];
        
    
    
    $table.="<tr>
            	<td>$id</td> 
            	<td>$work_name</td>
            	<td>$work_salary</td>
            	<td>$customer_fk</td>
            </tr>";
    }
            	
    $table.="</table>";    
    
    echo $table;

?>