/* animação */
setInterval(function(){
    let topo = document.getElementById("scroll").getBoundingClientRect().top
    console.log(topo)
    if(topo <= (window.innerHeight - 100)){
        $(".cont-nav").slideDown(1000);
        if(topo <= (window.innerHeight - 300)){
            $(".div-anima").addClass("position")
        }
    }else{
        $(".cont-nav").slideUp(0);
    }
},1000)

/* menu media querie */
$("#bars").click(function(){
    $("#ul-m").slideToggle(1500)
    $(".li-menu a").click(function(){
        $("#ul-m").slideUp(500)
    })

})
        