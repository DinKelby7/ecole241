let nombre;
let i=0 ;
let result ;

nombre = prompt('Saisissez un nombre'); 

if(Number(nombre)){
   for(i=0; i<=10; i++){
       result = nombre * i ;
     console.log(nombre +' x '+ i + ' = ' + result ); 
   }
    
}else{
    console.log("choisissez uniquement un chiffre !");
}