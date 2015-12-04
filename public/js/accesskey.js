

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