window.onscroll = function(){ 
    let butt = document.querySelector('.ontop_btn');
    let posTop = window.pageYOffset;
    if(posTop >= 300){
        butt.classList.remove('ontop_btn_0ff');
} else{
    butt.classList.add('ontop_btn_0ff'); 
}
};