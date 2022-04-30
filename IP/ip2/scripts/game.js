const bird = document.getElementById("bird");
const croco = document.getElementById("croco");
const dinobird = document.getElementById("dinobird");
let score = document.querySelector("#score");
let record = document.getElementById('scr').value;

let interval = null;
let playerScore = 0;
let k =0;

let scoreCounter =()=>{
    playerScore++;
    score.innerHTML = `<h3>Your score: <b>${playerScore}</b></h3>`;
    if(playerScore>=16){
        document.getElementById('croco').style.animation = 'crocoMov 2s infinite linear';
    }
    if(playerScore>=30){
        document.getElementById('dinobird').style.display = 'block';
    }
    if(playerScore>=60){
        document.getElementById('dinobird').style.animation = 'crocoMov 3s infinite linear';
    }

}
// interval = setInterval(scoreCounter,200);

document.getElementById('start_game').onclick = function(){
    playerScore = 0;
    document.getElementById('start').style.display = "block";
    document.getElementById('start_game').style.display = "none";
    document.getElementById('save').style.visibility = "hidden";
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
    let dinoLeft = parseInt(window.getComputedStyle(dinobird).getPropertyValue("left"));
    
    if((crocoLeft < 80 && crocoLeft > 30 && birdTop >= 140) || (dinoLeft < 80 && dinoLeft > 30 && birdTop <= 110)){
        document.getElementById('start').style.display = "none";
        document.getElementById('start_game').style.display = "block";
        document.getElementById('result').style.display = "block";
        document.getElementById('croco').style.animation = 'crocoMov 3s infinite linear';
        document.getElementById('dinobird').style.display = 'none';
         document.getElementById('dinobird').style.animation = 'crocoMov 6s infinite linear';

        // document.getElementById('save').style.visibility = "visible";

        k = playerScore;
        document.getElementById('out').value = k;
        if(record >= k){
            document.getElementById('scr').value = record;
        }
        else{
            document.getElementById('scr').value = k;
            document.getElementById('save').style.visibility = "visible";
        }

        clearInterval(interval);
        playerScore = 0;
        // alert(k);
    }

}, 10);