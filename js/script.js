function start(){
/* animação */
    setInterval(function(){
        let topo = document.getElementById("scroll").getBoundingClientRect().top
        /* console.log(window.innerHeight)
        console.log(topo) */
        if(topo <= (window.innerHeight - 135)){
            $(".cont-nav").slideDown(500);
            if(topo <= (window.innerHeight - 135)){
                $(".div-anima").addClass("position")
            }
        }else{
            $(".cont-nav").slideUp(350);
        }
    },1000)

    /* menu media querie */
    $("#bars").click(function(){
        $("#ul-m").slideToggle(500)
        $(".li-menu a").click(function(){
            $("#ul-m").slideUp(500)
        })

    })
}

window.addEventListener('load',start);
        