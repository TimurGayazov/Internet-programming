
let currentDroppable = null;
let currentDroppable1 = null;
let currentDroppable2 = null;
var score = 20;
var mass = 200;
var blin5=0;
var vlin10=0
var blin15=0;


document.getElementById('butt2').onclick = function(){
  document.getElementById('scr').value = mass;
}

mas5.onmousedown = function(event) {

  let shiftX = event.clientX - mas5.getBoundingClientRect().left;
  let shiftY = event.clientY - mas5.getBoundingClientRect().top;

  mas5.style.position = 'absolute';
  mas5.style.zIndex = 1000;
  document.body.append(mas5);

  moveAt(event.pageX, event.pageY);

  function moveAt(pageX, pageY) {
    mas5.style.left = pageX - shiftX + 'px';
    mas5.style.top = pageY - shiftY + 'px';
  }

  function onMouseMove(event) {
    moveAt(event.pageX, event.pageY);

    mas5.hidden = true;
    let elemBelow = document.elementFromPoint(event.clientX, event.clientY);
    mas5.hidden = false;

    if (!elemBelow) return;

    let droppableBelow = elemBelow.closest('.droppable');
    if (currentDroppable != droppableBelow) {
      if (currentDroppable) { 
        leaveDroppable(currentDroppable);
      }
      currentDroppable = droppableBelow;
      if (currentDroppable) { 
        enterDroppable(currentDroppable);
      }
    }
  }

  document.addEventListener('mousemove', onMouseMove);

  mas5.onmouseup = function() {
    document.removeEventListener('mousemove', onMouseMove);
    mas5.onmouseup = null;
  };

};
function enterDroppable(elem) {
   elem.style.background = 'pink';
   incScore()
 }
 
 function leaveDroppable(elem) {
   elem.style.background = '';
   score-=5;
   mass = score * 10;
   drawScore();
 }
 
 mas5.ondragstart = function() {
   return false;
 };
 function drawScore() {
     scoreBlock.innerHTML = score;
     scoreBlock2.innerHTML = mass;
 
 
 }
 scoreBlock = document.querySelector(".game-score .score-count");
 scoreBlock2 = document.querySelector(".game-score .mass");
 drawScore();
 function incScore() {
     score+=5;
     mass = score * 10;
     drawScore();
 }




 mas10.onmousedown = function(event) {

  let shiftX1 = event.clientX - mas10.getBoundingClientRect().left;
  let shiftY1 = event.clientY - mas10.getBoundingClientRect().top;

  mas10.style.position = 'absolute';
  mas10.style.zIndex = 1000;
  document.body.append(mas10);

  moveAt1(event.pageX, event.pageY);

  function moveAt1(pageX, pageY) {
    mas10.style.left = pageX - shiftX1 + 'px';
    mas10.style.top = pageY - shiftY1 + 'px';
  }

  function onMouseMove1(event) {
    moveAt1(event.pageX, event.pageY);

    mas10.hidden = true;
    let elemBelow1 = document.elementFromPoint(event.clientX, event.clientY);
    mas10.hidden = false;

    if (!elemBelow1) return;

    let droppableBelow1 = elemBelow1.closest('.droppable');
    if (currentDroppable1 != droppableBelow1) {
      if (currentDroppable1) { 
        leaveDroppable1(currentDroppable1);
      }
      currentDroppable1 = droppableBelow1;
      if (currentDroppable1) { 
        enterDroppable1(currentDroppable1);
      }
    }
  }

  document.addEventListener('mousemove', onMouseMove1);

  mas10.onmouseup = function() {
    document.removeEventListener('mousemove', onMouseMove1);
    mas10.onmouseup = null;
  };

};
function enterDroppable1(elem) {
   elem.style.background = 'pink';
   incScore1()
 }
 
 function leaveDroppable1(elem) {
   elem.style.background = '';
   score-=10;
   mass = score * 10;
   drawScore();
 }
 
 mas10.ondragstart = function() {
   return false;
 };

 function incScore1() {
     score+=10;
     mass = score * 10;
     drawScore();
 }
 mas10.onmouseup = function() {
  document.removeEventListener('mousemove', onMouseMove1);
  mas10.onmouseup = null;
};



mas15.onmousedown = function(event) {

  let shiftX2 = event.clientX - mas15.getBoundingClientRect().left;
  let shiftY2 = event.clientY - mas15.getBoundingClientRect().top;

  mas15.style.position = 'absolute';
  mas15.style.zIndex = 1000;
  document.body.append(mas15);

  moveAt1(event.pageX, event.pageY);

  function moveAt1(pageX, pageY) {
    mas15.style.left = pageX - shiftX2 + 'px';
    mas15.style.top = pageY - shiftY2 + 'px';
  }

  function onMouseMove2(event) {
    moveAt1(event.pageX, event.pageY);

    mas15.hidden = true;
    let elemBelow2 = document.elementFromPoint(event.clientX, event.clientY);
    mas15.hidden = false;

    if (!elemBelow2) return;

    let droppableBelow2 = elemBelow2.closest('.droppable');
    if (currentDroppable2 != droppableBelow2) {
      if (currentDroppable2) { 
        leaveDroppable2(currentDroppable2);
      }
      currentDroppable2 = droppableBelow2;
      if (currentDroppable2) { 
        enterDroppable2(currentDroppable2);
      }
    }
  }

  document.addEventListener('mousemove', onMouseMove2);

  mas15.onmouseup = function() {
    document.removeEventListener('mousemove', onMouseMove2);
    mas15.onmouseup = null;
  };

};
function enterDroppable2(elem) {
   elem.style.background = 'pink';
   incScore2()
 }
 
 function leaveDroppable2(elem) {
   elem.style.background = '';
   score-=15;
   mass = score * 10;
   drawScore();
 }
 
 mas15.ondragstart = function() {
   return false;
 };

 function incScore2() {
     score+=15;
     mass = score * 10;
     drawScore();
 }
 mas15.onmouseup = function() {
  document.removeEventListener('mousemove', onMouseMove2);
  mas15.onmouseup = null;
};

