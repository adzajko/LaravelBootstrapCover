function fade(element) {
var op = 1;  
var timer = setInterval(function () {
    if (op <= 0.1){
        clearInterval(timer);

        element.style.display = 'none';
    }
    element.style.opacity = op;
    element.style.filter = 'alpha(opacity=' + op * 100 + ")";
    op -= op * 0.1;
}, 50);
}

setTimeout(function(){ 

         if(typeof(Storage) !== "undefined") {

          console.log("Already shown" +sessionStorage.getItem('splashShown'));

           if( !sessionStorage.getItem('splashShown') || sessionStorage.getItem('splashShown') === null ) {  

           document.getElementById('splash') .style.display = 'inline';


            setTimeout(function(){   

             fade(document.getElementById('splash'));


             sessionStorage.setItem('splashShown', true  );
          }
           , 3000);

              } else {

                  document.getElementById('splash') .style.display = 'none'
                    console.log("Already shown");
                 }
              }

            else {
                    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
                  }
                     }, 0);
