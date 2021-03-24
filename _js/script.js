/* animação */
setInterval(function(){
    let topo = document.getElementById("scroll").getBoundingClientRect().top
    /* console.log(window.innerHeight)
    console.log(topo) */
    if(topo <= (window.innerHeight - 129)){
        $(".cont-nav").slideDown(500);
        if(topo <= (window.innerHeight - 129)){
            $(".div-anima").addClass("position")
        }
    }else{
        $(".cont-nav").slideUp(350);
    }
},1000)

/* menu media querie */
$("#bars").click(function(){
    $("#ul-m").slideToggle(700)
    $(".li-menu a").click(function(){
        $("#ul-m").slideUp(350)
    })

})
        