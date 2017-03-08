<?
$Array
(
    [0] => "janvier",
    [1] => "fevrier",
    [2] => "mars",
    [3] => "avril",
    [4] => "mai",
    [5] => "juin",
    [6] => "juillet",,
    [7] => "aout",
    [8] => "septembre",
    [9] => "octobre",
    [10] => "novembre",
    [11] => "decembre",
);

	echo $Array;

	echo $Array[2];

	echo $Array[6];

	$Array[3]="Julien";

$Array2
	(
	[02] => "Nord"
    [59] => "Oise"
    [62] => "Pas-de-Calais"
    [80] => "Somme"
   	)

   	echo $Array2[59];

$Array2[51] = "Marne";

foreach ($Array as $Case) {
	
echo $Case;

};

print_r($Case);

foreach ($Array as $key => $Case) {
	echo "Le departement"$key"a le numero"$Case"";
}




















