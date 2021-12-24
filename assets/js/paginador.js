const getAllCards = document.querySelectorAll('.card__recorrer');


getAllCards.forEach( (data, indice)=>{
    if(indice > 5){
        data.classList.add('hidden-card');
    }
});

const getButton = document.querySelector('.boton-show-more');


getButton.addEventListener('click', ()=>{

    var getLoader = document.querySelector('.loader__contenedor');
    getLoader.classList.add('active');

    const waitSecond = window.setTimeout( ()=>{
        var getAllCardsWithClass = document.querySelectorAll('.hidden-card');
        getAllCardsWithClass.forEach( (data, indice) =>{
            if(indice < 0){
                data.classList.remove('hidden-card');
            }
        });
        var  getAllCardsWithClassTwo = document.querySelectorAll('.hidden-card');
        getAllCardsWithClassTwo.forEach( (data, indice) =>{
            if(indice < 3){
                data.classList.remove('hidden-card');
            } 
            
        });
        if(getAllCardsWithClassTwo.length == 3){
            getButton.classList.add('hidden-button')
        }
        getLoader.classList.remove('active');
    }, 1500);
});

const locationTwo = window.location;

const lastLocation = locationTwo.href;

switch (lastLocation){
    case 'http://localhost/php/Taeq/recetas.php':
        document.querySelector('.header__recetas').classList.add('active');
    break;
}