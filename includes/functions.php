<?php

function redirect_to($new_location){
	header("Location: " . $new_location);
	exit;
}

function confirm_query($result_set){
	if (!$result_set) {
		die("Database query failed.");
	}
}

function find_all_works(){
	global $connection;

	$query = "SELECT * FROM obras WHERE hidden=0 ORDER BY id ASC";
	$works_set = mysqli_query($connection, $query);
	confirm_query($works_set);
	return $works_set;
}

function find_works_home(){
	global $connection;

	$query = "SELECT * FROM obras WHERE hidden=0 ORDER BY id ASC LIMIT 6";
	$works_set = mysqli_query($connection, $query);
	confirm_query($works_set);
	return $works_set;
}

function find_all_contests(){
	global $connection;

	$query = "SELECT * FROM concursos WHERE hidden=0 ORDER BY id ASC";
	$contests_set = mysqli_query($connection, $query);
	confirm_query($contests_set);
	return $contests_set;
}

function find_contests_home(){
	global $connection;

	$query = "SELECT * FROM concursos WHERE hidden=0 ORDER BY id ASC LIMIT 2";
	$contests_set = mysqli_query($connection, $query);
	confirm_query($contests_set);
	return $contests_set;
}


function works_portfolio(){
	$output = "<ul>";
	$object_set = find_all_works();

	while ( $object = mysqli_fetch_assoc($object_set) ) {
		$output .= "<li class=\"cbp-item\">
						<div class=\"cbp-item-wrapper\">
							<a href=\"verObra.php?obra={$object["shortname"]}\" class=\"cbp-caption\">
								<div class=\"cbp-caption-defaultWrap\">
									<img src=\"obras/{$object["shortname"]}/thumb.jpg\" alt=\"{$object["name"]}\">
								</div>
								<div class=\"cbp-caption-activeWrap\">
									<div class=\"cbp-l-caption-alignCenter\">
										<div class=\"cbp-l-caption-body\">
											<div class=\"obras-grid-caption\">
												{$object["name"]}<br><span>{$object["location"]}</span>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</li>";
    }

    $output .= "</ul>";

    return ($output);

    mysqli_free_result($object_set);
}

function works_home(){
	$output = "<ul>";
	$object_set = find_works_home();

	while ( $object = mysqli_fetch_assoc($object_set) ) {
		$output .= "<li class=\"cbp-item\">
						<div class=\"cbp-item-wrapper\">
							<a href=\"verObra.php?obra={$object["shortname"]}\" class=\"cbp-caption\">
								<div class=\"cbp-caption-defaultWrap\">
									<img src=\"obras/{$object["shortname"]}/thumb.jpg\" alt=\"{$object["name"]}\">
								</div>
								<div class=\"cbp-caption-activeWrap\">
									<div class=\"cbp-l-caption-alignCenter\">
										<div class=\"cbp-l-caption-body\">
											<div class=\"obras-grid-caption\">
												{$object["name"]}<br><span>{$object["location"]}</span>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</li>";
    }

    $output .= "</ul>";

    return ($output);

    mysqli_free_result($object_set);
}

function contests_portfolio(){
	$output = "<ul>";
	$object_set = find_all_contests();

	while ( $object = mysqli_fetch_assoc($object_set) ) {
		$output .= "<li class=\"cbp-item\">
						<div class=\"cbp-item-wrapper\">
							<a href=\"verConcurso.php?concurso={$object["shortname"]}\" class=\"cbp-caption\">
								<div class=\"cbp-caption-defaultWrap\">
									<img src=\"concursos/{$object["shortname"]}/thumb.jpg\" alt=\"{$object["name"]}\">
								</div>
								<div class=\"cbp-caption-activeWrap\">
									<div class=\"cbp-l-caption-alignCenter\">
										<div class=\"cbp-l-caption-body\">
											<div class=\"concursos-grid-caption\"><span>{$object["prize"]}</span>{$object["name"]}<br></div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</li>";
    }

    $output .= "</ul>";

    return ($output);

    mysqli_free_result($object_set);
}

function contests_home(){
	$output = "<ul>";
	$object_set = find_contests_home();

	while ( $object = mysqli_fetch_assoc($object_set) ) {
		$output .= "<li class=\"cbp-item\">
						<div class=\"cbp-item-wrapper\">
							<a href=\"verConcurso.php?concurso={$object["shortname"]}\" class=\"cbp-caption\">
								<div class=\"cbp-caption-defaultWrap\">
									<img src=\"concursos/{$object["shortname"]}/thumb.jpg\" alt=\"{$object["name"]}\">
								</div>
								<div class=\"cbp-caption-activeWrap\">
									<div class=\"cbp-l-caption-alignCenter\">
										<div class=\"cbp-l-caption-body\">
											<div class=\"concursos-grid-caption\"><span>{$object["prize"]}</span>{$object["name"]}<br></div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</li>";
    }

    $output .= "</ul>";

    return ($output);

    mysqli_free_result($object_set);
}

?>