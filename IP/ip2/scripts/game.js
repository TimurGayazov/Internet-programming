const bird = document.getElementById("bird");
const croco = document.getElementById("croco");
let score = document.querySelector("#score");
let record = document.getElementById('scr').value;

let interval = null;
let playerScore = 0;
let k =0;

let scoreCounter =()=>{
    playerScore++;
    score.innerHTML = `<h3>Your score: <b>${playerScore}</b></h3>`;
}
// interval = setInterval(scoreCounter,200);

document.getElementById('start_game').onclick = function(){
    playerScore = 0;
    document.getElementById('start').style.display = "block";
    document.getElementById('start_game').style.display = "none";
    document.getElementById('save').style.display = "none";
    document.getElementById('result').style.display = "none";
    interval = setInterval(scoreCounter, 1000);
}

document.addEventListener("keydown", function(event){
    jump();
});

function jump(){
    if(bird.classList != "jump"){
        bird.classList.add("jump")
    }
    setTimeout( function(){
        bird.classList.remove("jump")
    }, 1000)
}
let isAlive = setInterval( function() {
    let birdTop = parseInt(window.getComputedStyle(bird).getPropertyValue("top"));
    let crocoLeft = parseInt(window.getComputedStyle(croco).getPropertyValue("left"));
    
    if(crocoLeft < 50 && crocoLeft > 0 && birdTop >= 140){
        document.getElementById('start').style.display = "none";
        document.getElementById('start_game').style.display = "block";
        document.getElementById('result').style.display = "block";

        // document.getElementById('save').style.display = "block";

        k = playerScore;
        document.getElementById('out').value = k;
        if(record >= k){
            document.getElementById('scr').value = record;
        }
        else{
            document.getElementById('scr').value = k;
        }

        clearInterval(interval);
        playerScore = 0;
        // alert(k);
    }

}, 10);