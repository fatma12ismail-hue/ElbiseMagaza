<?php
$filmler = ["Inception", "Interstellar", "Matrix", "Avatar"];
?>

<h1>Film Listesi</h1>

<ul>
<?php
foreach($filmler as $film){
    echo "<li>$film</li>";
}
?>
</ul>
<h2>Yorumlar</h2>

<?php
$yorumlar = file("yorumlar.txt");

foreach($yorumlar as $y){
    echo "<p>$y</p>";
}
?>