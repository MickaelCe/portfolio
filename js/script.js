
const title = document.getElementById('autotext');
const text = "DÉVELOPPEUR  WEB / WEB MOBILE JUNIOR";

let index = 0;



const randomSpeed = (min, max) => {
    return Math.floor(Math.random() * (max-min) + min);
}

const play = () => {
    title.innerHTML = text.slice(0, index)

    index++;

    // clearInterval(timer);
    if(index<=text.length){
    timer = setTimeout(play, randomSpeed(100, 250));
}};

let timer = setTimeout(play,500);


$(document).ready(function(){
    var trigger =$('.navigationbureau ul li a'),
    container = $('#fst_section');

    trigger.on('click', function(){
        // clearInterval(timer);
        var $this = $(this),
        target = $this.data('target');

        container.hide().load(target + '.php').fadeIn('1000');
            if(target === 'home'){
                title = document.getElementById('autotext');
                timer = setTimeout(play,500)      
            } 
        return false;
        });
});
