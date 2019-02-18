let nombre;
let i=0 ;
let produit ;

nombre = prompt('Saisir un nombre'); 

if(Number(nombre)){
   for(i=0; i<=10; i++){
       produit = nombre * i ; 
     console.log(nombre+' x '+i+' = '+produit ); 
   }
    
}else{
    console.log("Veuillez saisir un nombre au lieu d'une lettre!");
}