// TOP OF THE SCREEN

const music_button = document.querySelector('.third_circle')

// Audio

const music = new Audio('./music/pallettown.mp3')

let oc = 0

music_button.addEventListener('click', () =>
{
    if(oc === 0){
        music.play()
        music.volume = 0.2
        music.loop = true
    oc = 1
    }
    else{
        music.pause()
    oc = 0
    }
})

// Search via form

const search = document.querySelector('.search')
const buttons = document.querySelectorAll('.button_number')

buttons.forEach(button => {
    button.addEventListener('click', () =>
    {
        search.value += button.textContent
    })
});

// COLOR TYPE

const type_1 = document.querySelector('.type_1')
const type_2 = document.querySelector('.type_2')


const types = [['normal', '#a4b0be'], ['fire', '#EA2027'], ['water', '#0652DD'], ['grass', '#009432'], ['electric', '#fff200'], ['ice', '#7efff5'], ['fighting', '#e15f41'], ['flying', '#45aaf2'], ['poison', '#8854d0'], ['ground', '#f5cd79'], ['psychic', '#be2edd'], ['bug', '#badc58'], ['rock', '#f8c291'], ['ghost', '#4a69bd'], ['dragon', '#7d5fff'], ['fairy', '#D6A2E8']]

for(i = 0; i < types.length; i++){
    if(color_type_1 === types[i][0]) type_1.style.backgroundColor = types[i][1]
    if(color_type_2 === types[i][0]) type_2.style.backgroundColor = types[i][1]
}