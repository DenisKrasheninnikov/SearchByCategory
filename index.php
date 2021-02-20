<?php 

$categories = [
    "id" => 1,
    "title" => "Кинофильмы",
    "filmes" => [
        ["id" => 2, "title" => "Художественные"],
        ["id" => 3, "title" => "Комедийные"],
        ["id" => 4, "title" => "Документальные"],
        ["id" => 5, "title" => "Научные"],
        ["id" => 6, "title" => "Исторические"]
    ]
];

// echo "<pre>";
// print_r($categories);
// echo "</pre>";

function searchCategories($categories, $id) {
	foreach ($categories as $key => $value) {
		if ($value == $id) {
			echo "По вашему идентификатору найдена категория: ".' '.$categories['title']." фильмы.";
		} elseif (is_array($value)) {
			searchCategories($value, $id);
		} 
	}
}

searchCategories($categories, 4);

?>