


// GAME JS ; UPUP
var game = new Phaser.Game(600, 400, Phaser.AUTO, 'game', { preload: preload, create: create, update: update });


// Objet

var vieText1;
var vieText2;
var personnage1;
var personnage2;
var titre;
var winnerText;

// Variable P1
var vieP1 = 1000;
var attaqueP1Sabre = 5;
var attaqueP1Force = 30;

// Variable P2
var vieP2 = 1000;
var attaqueP2Sabre = 5;

var bouttonHelp
var style = { font: "32px Arial", fill: "#01DF01", wordWrap: true, wordWrapWidth: game.width, align: "center" };


function preload() {
    game.load.image("background", "/img/fond.png");
    game.load.image("question", "/img/question.png");
    game.load.image("personnage1", "/img/Stick1A1.PNG");
    game.load.image("personnage1V", "/img/Stick1A2.PNG");
    game.load.image("personnage2", "/img/Stick2A1.PNG");
    game.load.image("personnage2V", "/img/Stick2A2.PNG");
    game.load.image("personnage1Force", "/img/Stick1A3F1.PNG");


}

function create() {


    game.add.tileSprite(0, 0, 600, 400, 'background');
    personnage1 = game.add.sprite(0,200,'personnage1');
    personnage2 = game.add.sprite(400,200,'personnage2');

    titre = game.add.text(140,5,"Easter egg : JEDI FIGHT !",style);
    bouttonHelp = game.add.button(0, 0, 'question', openWindow,null,null,null,null,null);

    vieText1 = game.add.text(20,100,"Health : "+ vieP1,style);
    vieText2 = game.add.text(400,100,"Health : "+ vieP2,style);

}

function update() {
    game.world.remove(vieText1);
    game.world.remove(vieText2);
    vieText1 = game.add.text(20,100,"Health : "+ vieP1,style);
    vieText2 = game.add.text(400,100,"Health : "+ vieP2,style);



    if(vieP1 <= 0)
    {
        cleanAll();
        winnerText = game.add.text(80,170,"JOUEUR 1 EST LE VAINQUEUR",style);
    }
    if(vieP2 <= 0)
    {
        cleanAll();
        winnerText = game.add.text(80,170,"JOUEUR 2 EST LE VAINQUEUR",style);
    }
    if(vieP1 <= 0 || vieP2 <= 0)
    {
        game.time.events.add(Phaser.Timer.SECOND * 3, closeGame, this);
    }
}


function openWindow(){
    window.alert("Touche pour jouer :  J1 -> 'A' |||  J2 -> 'P'");  
}


function attaquerP2Sabre(){
    vieP1 = vieP1 - attaqueP2Sabre;
}
function attaquerP1Sabre(){
    vieP2 = vieP2 - attaqueP1Sabre;
}
function attaquerP1Force(){
    vieP2 = vieP2 - attaqueP1Force;
}
function cleanAll(){
    game.world.remove(vieText1);
    game.world.remove(vieText2);
    game.world.remove(personnage1);
    game.world.remove(personnage2);
    game.world.remove(titre);
    game.world.remove(bouttonHelp);
}
function closeGame(){
    game.destroy();
}

document.addEventListener('keydown', function (e){
    if(e.keyCode == 'A'.charCodeAt(0) ) {
        e.preventDefault();
        attaquerP2Sabre();
        personnage1.x=350;
        personnage1.y=200;
        personnage1.loadTexture('personnage1V');

    }  
    if(e.keyCode == 'Z'.charCodeAt(0) ) {
        e.preventDefault();
        attaquerP1Force();
        personnage1.loadTexture('personnage1Force');
        personnage2.y=50;

    }  
    if(e.keyCode == 'P'.charCodeAt(0) ) {
        e.preventDefault();
        attaquerP1Sabre();
        personnage2.x=50;
        personnage2.y=200;
        personnage2.loadTexture('personnage2V');
    }
});

document.addEventListener('keyup', function (e){
    if(e.keyCode == 'A'.charCodeAt(0) ) {
        e.preventDefault();
        attaquerP2();
        personnage1.x=0;
        personnage1.y=200;
        personnage1.loadTexture('personnage1');
    }  
        if(e.keyCode == 'Z'.charCodeAt(0) ) {
        e.preventDefault();
        attaquerP1Force();
        personnage1.loadTexture('personnage1');

    }  
    if(e.keyCode == 'P'.charCodeAt(0) ) {
        e.preventDefault();
        personnage2.x=400;
        personnage2.y=200;
        personnage2.loadTexture('personnage2');
    }
});

