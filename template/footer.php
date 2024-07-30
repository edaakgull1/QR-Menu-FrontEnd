
</body>
<script src="https://kit.fontawesome.com/6f38a4ace7.js" crossorigin="anonymous"></script>
<script>
    /* js ile class bilgisine müdahale 
    <i class="fa-solid fa-sun"></i>
    let value = document.getElementById("mode").className;
    */
   //let elementozellikleri = document.getElementById("mode");


   
   
   function changeMode(){
    let value = document.getElementById("mode").className;
   // value = i etiketimin güncel class ismi

    const element = document.getElementById("mode");
    // element değişkeni oluşturdum. id değeri mode olan elementimin özelliklerini element değişkenime attım.
    const logoElement = document.querySelector(".logo");

    if( value =="fa-solid fa-moon" ){//gündüz
        element.classList.remove("fa-moon");
        element.classList.add("fa-sun");
        const myNavbar = document.getElementsByClassName("navbar");
        myNavbar[0].style.backgroundColor = "#4c4949";
        //myPage[0].style.color = "#4c4949";
        const myNavbarList = document.getElementsByClassName("nav-item-a");
        for( let i = 0 ; i < myNavbarList.length; i++){
            myNavbarList[i].style.color ="#ddcccc";
         
        }
        logoElement.style.color="#ddcccc";

    }else if(value == "fa-solid fa-sun"){ //gündüz moduna geçiş
        element.classList.remove("fa-sun");
        element.classList.add("fa-moon");
       const myNavbar = document.getElementsByClassName("navbar");
       myNavbar[0].style.backgroundColor = "#ddcccc";
       //myPage[0].style.color = "#ddcccc";
       const myNavbarList = document.getElementsByClassName("nav-item-a");
        for( let i = 0 ; i < myNavbarList.length; i++){
            myNavbarList[i].style.color ="#4c4949";
         
        }
        logoElement.style.color="#4c4949";

    }
   }
      document.getElementById("p1").style.color = "#677D6A";
      document.getElementById("p1").style.fontFamily = "Ariel";
      document.getElementById("p1").style.fontSize = "Large";

</script>
</html>