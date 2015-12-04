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




document.addEventListener('keydown', function (e){
    if(e.altKey && e.keyCode == 'A'.charCodeAt(0) ) {
        e.preventDefault();
        window.location.href = 'http://ni.edznux.fr/';
    }  
        if(e.altKey && e.keyCode == 'M'.charCodeAt(0) ) {
            e.preventDefault();
              window.location.href='http://ni.edznux.fr/map';
        }
        if(e.altKey && e.keyCode == 'R'.charCodeAt(0) ) {
            e.preventDefault();
              window.location.href='http://ni.edznux.fr/rules';
        } 
        if(e.altKey && e.keyCode == 'P'.charCodeAt(0) ) {
            e.preventDefault();
              window.location.href= 'http://ni.edznux.fr/messages';
        }
    if(e.altKey && e.keyCode == 'L'.charCodeAt(0) ) {
            e.preventDefault();
              window.location.href= 'http://ni.edznux.fr/login';
        }
        if(e.altKey && e.keyCode == 'E'.charCodeAt(0) ) {
            e.preventDefault();
              window.location.href= 'http://ni.edznux.fr/enfants';
        }
    });