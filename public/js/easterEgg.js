var egg = new Egg();
egg.addCode("up,up,up,up", function() {
    $("#gameId").load("game.html") // load in the file specified
  });
egg.addHook(function(){
  }).listen();


//////////////////////////////////////////////////////////::::


/*

document.addEventListener('keydown', function (e){
    if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0) ) {
        e.preventDefault();
        openPopup(1);
    }  
    if(e.ctrlKey && e.keyCode == 'B'.charCodeAt(0) ) {
        e.preventDefault();
        openPopup(2);
    }
    if(e.ctrlKey && e.keyCode == 'C'.charCodeAt(0) ) {
        e.preventDefault();
        openPopup(3);
    }
});
*/