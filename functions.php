<?php 

// function to 'clean' data
function clean_input($dbconnect, $data) {
	$data = trim($data);	
	$data = htmlspecialchars($data); //  needed for correct special character rendering
	// removes dodgy characters to prevent SQL injections
	$data = mysqli_real_escape_string($dbconnect, $data);
	return $data;
}

function get_data($dbconnect, $more_condition=null) {
// m => members of parliament table
// p => parties table

$find_sql = "SELECT 

m.*,
p.*

FROM 
members_of_parliament m

JOIN Parties p ON p.Party_ID = m.Party_ID

";
// if we have a WHERE condition, add it to the sql
if($more_condition != null) {
    // add extra string onto find sql
    $find_sql .= $more_condition;
}


$find_query = mysqli_query($dbconnect, $find_sql);
$find_count = mysqli_num_rows($find_query);	

return $find_query_count = array($find_query, $find_count);

}

function get_item_name($dbconnect, $table, $column, $ID)
{
	$find_sql = "SELECT * FROM $table WHERE $column = $ID";
	$find_query = mysqli_query($dbconnect, $find_sql);
	$find_rs = mysqli_fetch_assoc($find_query);

	return $find_rs;
}

// get search ID
function get_search_ID($dbconnect, $search_term)
{
	$find_sql = "SELECT * FROM members_of_parliament WHERE `Party_ID` = '$search_term'";
	$find_query = mysqli_query($dbconnect, $find_sql);
	$find_rs = mysqli_fetch_assoc($find_query);

	// count results
	$find_count = mysqli_num_rows($find_query);

	if($find_count == 1) {
	return $find_rs['Party_ID'];
	}
	else {
		return "no results";
	}
}


// entity is subject / full name of author
function autocomplete_list($dbconnect, $item_sql, $entity)    
{
// Get entity / topic list from database
$all_items_query = mysqli_query($dbconnect, $item_sql);
    
// Make item arrays for autocomplete functionality...
while($row=mysqli_fetch_array($all_items_query))
{
  $item=$row[$entity];
  $items[] = $item;
}

$all_items=json_encode($items);
return $all_items;
    
}

?>