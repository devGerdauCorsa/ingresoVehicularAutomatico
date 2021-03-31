$(function() {
    
    let actualPage = window.location.pathname.split("/").pop();
    
    switch (actualPage) {
        case "":
        case "index.php":
            initSidebar();
            $('.main-container').load("content/dashboard.php");
            break;
        case "login.php":
            locateLogin();
            break;
    }

});

function initSidebar() {

    $('.list-group-item').each(function() {
        let page = this.id.substring(5, this.id.length);
        $(this).click(function() {
            $.when($('.main-container').load("content/" + page + ".php")).done(function(){
                switch(page){
                    case 'proveedores':
                        setTimeout(function(){
                            $('.sub-container').load("content/sub-content/chatarreros.php");
                        },1000);
                        break;
                    case 'chatarras':
                        break;
                    //Funcionalidades especiales de cada pagina
                    default:
                        break;
                }
            });
        });
    });

}


function buildProviders(o, option){
    $('.nav-prov').removeClass('active');
    $(o).addClass('active');
    switch(option){
        case 0:
            $('.sub-container').load("content/sub-content/chatarreros.php");
            break;
        case 1:
            $('.sub-container').load("content/sub-content/transportistas.php");
            break;
        case 2:
            $('.sub-container').load("content/sub-content/procedencias.php");
            break;
    }
}


function locateLogin() {
    let ancho = screen.width;
    let alto = screen.height;

    ancho = ancho / 2 - 150;
    alto = alto / 2 - 300;

    $('.login-card').css('top', alto);
    $('.login-card').css('left', ancho);
}

function login(){
    //Aqui se programará el login para ingresar y hacer el filtro dependiendo si es admin o vigilante, al finalizar se redirecciona a la ventana principal
    let arr = window.location.href.split("/"); 
    delete arr[arr.length - 1]; 
    let tmp_url = arr.join("/"); 
    window.location.replace(tmp_url);
}

function logout(){
    //Aqui se invoca al PHP que destruye la sesión, al finalizar se redirecciona al login
    window.location.replace("login.php");
}