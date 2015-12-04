var egg = new Egg();
egg.addCode("up,up,up,up", function() {
    $("#gameId").load("/js/game.html") // load in the file specified
});
egg.addHook(function(){
}).listen();

var egg1 = new Egg();
egg1.addCode("down,down,down,down", function() {
var audio = new Audio('/img/Chewbacca.mp3');
audio.play();
});
egg1.addHook(function(){
}).listen();


//////////////////////////////////////////////////////////::::


