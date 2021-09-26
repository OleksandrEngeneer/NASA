var i =0;
leftImg.addEventListener("click", function (e){
    i -= 1;
      if(i<0){
          i=0;
      }
      if(i>0){
        leftImg.style.opacity = 1;  
      }
      if(i<1){
        leftImg.style.opacity = 0.5;  
      }
      if(i<6){
        rightImg.style.opacity = 1;
      }
    let f = listOfImg[i]['img_src'];
    image.src= f; 
});
rightImg.addEventListener("click", function (e){
    i += 1;
    console.log(i)
    if(i>=listOfImg.length){
          i= (listOfImg.length - 1);
      }
      if(i>5){
        rightImg.style.opacity = 0.5; 
      }
      if(i>0){
        leftImg.style.opacity = 1; 
      }
    let f = listOfImg[i]['img_src'];
    image.src= f; 
});