var egg = new Egg();
egg.addCode("up,up,up,up", function() {
    $("#gameId").load("/js/game.html") // load in the file specified
});
egg.addHook(function(){
}).listen();


//////////////////////////////////////////////////////////::::




document.addEventListener('keydown', function (e){
    if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0) ) {
        e.preventDefault();
        window.location = 'http://ni.edznux.fr/';
    }  
        if(e.ctrlKey && e.keyCode == 'M'.charCodeAt(0) ) {
            e.preventDefault();
              window.location='http://ni.edznux.fr/map';
        }
        if(e.ctrlKey && e.keyCode == 'R'.charCodeAt(0) ) {
            e.preventDefault();
              window.location='http://ni.edznux.fr/rules';
        } 
        if(e.ctrlKey && e.keyCode == 'P'.charCodeAt(0) ) {
            e.preventDefault();
              window.location= 'http://ni.edznux.fr/messages';
        }
    if(e.ctrlKey && e.keyCode == 'P'.charCodeAt(0) ) {
            e.preventDefault();
              window.location= 'http://ni.edznux.fr/login';
        }
    });
