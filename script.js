var startingCard = document.getElementById("starter");
var mainCard = document.getElementById('mainCard');
let show = () => {
    startingCard.classList.add('startAni')
    setTimeout(function (){
        mainCard.classList.remove('d-none')
        startingCard.classList.add('d-none')
    }, 4500)
}

let revert = () => {
        mainCard.classList.add('d-none')
        startingCard.classList.remove('d-none')
}
