let numimg=1;
const imgcol=4;
const way="/images/galery/";
const divcol=200;
const speed=5;

function generateImage(){
  
  let widthDiv = 800/divcol;
  let image = way+"0"+numimg+".jpg";
  for(let i=0;i<divcol;i++){
    let item=$("<div></div>");
    item.addClass(value="elementImage");
    // item.css(name="width",value=1200+"px");
    item.css(name="background-image",value='url('+image+')');
    item.css(name="background-position-y",value=-i*widthDiv+"px");
    
    $("#mainImage").append(item);
  }
}
function change(){
  let image = way+"0"+numimg+".jpg";
  let i =1;
  $("#mainImage div").each(function(){
    $(this).fadeOut(speed*i, function(){
    $(this).css(name="background-image",value='url('+image+')');
    $(this).fadeIn(speed*i);
  });
  i++;
});
}
function left(){
  if (numimg>1){
    numimg--;
    change()
  }
  else{
    numimg=imgcol;
    change()
  }
}
function right(){
  if(numimg<imgcol){
    numimg++;
    change()
  }
  else{
    numimg=1;
    change()
  }
}
$(document).ready(function(){
  generateImage();
});
