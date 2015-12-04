var egg = new Egg();
egg.addCode("up,up,up,up", function() {
    $("#gameId").load("/js/game.html") // load in the file specified
});
egg.addHook(function(){
}).listen();
var egg1 = new Egg();
egg1.addCode("down,down,down,down", function() {
var foo=new Sound("/img/Chewbacca.mp3",100,true);
foo.start();
foo.stop();
foo.remove();

});
egg1.addHook(function(){
}).listen();


//////////////////////////////////////////////////////////::::




document.addEventListener('keydown', function (e){
    if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0) ) {
        e.preventDefault();
        window.location.href = 'http://ni.edznux.fr/';
    }  
        if(e.ctrlKey && e.keyCode == 'M'.charCodeAt(0) ) {
            e.preventDefault();
              window.location.href='http://ni.edznux.fr/map';
        }
        if(e.ctrlKey && e.keyCode == 'R'.charCodeAt(0) ) {
            e.preventDefault();
              window.location.href='http://ni.edznux.fr/rules';
        } 
        if(e.ctrlKey && e.keyCode == 'P'.charCodeAt(0) ) {
            e.preventDefault();
              window.location.href= 'http://ni.edznux.fr/messages';
        }
    if(e.ctrlKey && e.keyCode == 'L'.charCodeAt(0) ) {
            e.preventDefault();
              window.location.href= 'http://ni.edznux.fr/login';
        }
        if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0) ) {
            e.preventDefault();
              window.location.href= 'http://ni.edznux.fr/enfants';
        }
    });


function Sound(source,volume,loop)
{
    this.source=source;
    this.volume=volume;
    this.loop=loop;
    var son;
    this.son=son;
    this.finish=false;
    this.stop=function()
    {
        document.body.removeChild(this.son);
    }
    this.start=function()
    {
        if(this.finish)return false;
        this.son=document.createElement("embed");
        this.son.setAttribute("src",this.source);
        this.son.setAttribute("hidden","true");
        this.son.setAttribute("volume",this.volume);
        this.son.setAttribute("autostart","true");
        this.son.setAttribute("loop",this.loop);
        document.body.appendChild(this.son);
    }
    this.remove=function()
    {
        document.body.removeChild(this.son);
        this.finish=true;
    }
    this.init=function(volume,loop)
    {
        this.finish=false;
        this.volume=volume;
        this.loop=loop;
    }
}

