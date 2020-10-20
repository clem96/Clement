<?php


$age = readline('Indiquez votre age : ');


  If($age < 6 )
{
 echo "Trop jeun";   
}
else if($age >= 6 & $age <= 7)
{
echo "Categorie Poussin";
}
else if($age >= 8 & $age <= 9)
{
echo "Categorie Pupille";
}
else if($age >= 10 & $age <= 11)
{
echo "Categorie Minime";
}
else if($age >= 12)
{
echo "Categorie Cadet";
}  







// test 5 = trop jeun  6 = poussin  7 = poussin  8 = pupille  10 = minime  12 = cadet 