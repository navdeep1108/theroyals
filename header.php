<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="script.js"></script>

    <style>
    .babs{
        display: none;
    }
    .damn{
        text-decoration: none;
        color: black;
    }
    .cool{
        text-decoration: none;
    }



 @media screen and (max-width: 800px){

    .ss{
        padding-top: 10px;
        width: auto;
        height: 50px;
        overflow: visible;
        padding-left: 10px;
    }
    .may{
        width: 100%;
        /* height: 100%; */
        height: 400px;
        overflow: visible;
    }
    .babs{
        overflow: visible;
        background-color: rgb(247, 230, 239);
        position: absolute;
        margin-left: 90%;
        width: 40px;
        /* margin-top: -20px;  */
        display: block;
    }
    .fa{
        margin-left: 50%;
    }
    .book{
        height: 30px;
        margin-left: -60px;
    }
    .book h1{
        font-size: 20px;
        margin-left: 40%;
    }

    .book input:nth-last-child(1){
        width: 250px;
    }
    .grid{
        display: block;
        grid-gap: 20px;
        width: auto;
    }
    .grid input{
        width: 200px;
        height: 10px;
        margin-left: 30%;
    }
    .heading h1{
        font-size: 50px;
        font-weight: 300;
        opacity: 0.1;
        position: relative;
    }
    .heading h2{
        margin: 40px 0;
        font-size: 30px;
        font-weight: 400;
    }
    .about p{
        font-size: 10px;
    }
    .right img{
        width: 330px;
        height: 200px;
        padding: 10px;
        margin-left: 20px;
    }
    footer{
        width: auto;
        position: absolute;
        padding: 30px 10px 10px;
    }
    .row{
        width: 55%;
        margin: 2px;
        /* display: flex; */
        display: inline;
        /* align-items: flex-start; */
        align-items: center;
        justify-content: space-between;
    }
    .col{
        flex-basis: 15%;
        padding: 6px;
        margin-left: 0;
    }
    .col:nth-child(2), .col:nth-child(3){
        margin-left: 5px;
        flex-basis: 22%;
        display: inline-flex;
        flex-wrap: wrap;
    }
    .col:nth-child(3){
        margin-left: 80px;
    } 
    .col:nth-child(4){
        flex-basis: 15%;
        padding-left: 50px;
        margin-right: -50px;
    }
    .col p{
        font-size: 10px;
    }
    .col ul{
        margin-top: 20px;
        width: 80px;
    }
    .col ul li{
        margin: 25px;
        font-size: 15px;
    }
    .social-icons{
        margin-left: -15px;
    } 
    hr{
        width: 40%;
        margin-left: 40px;
        padding-left: 100px;
    }
    .copyright{
        margin-left: 10px;
    }
/* <-------------------------------------------------------------------------------------------------------------> */

    .container-flex{
        display: block;
         /* margin-left: 15%; */
         margin-left: 0px;
        /* margin: 10px;  */
    }
    .top{
        margin-top: 150px;
        margin-left: 0;
}

/* <-------------------------------------------------------------------------------------------------------------------> */



.menubar{
    /* position: absolute;
    display:none;
    margin: auto;
    text-align: center;
    background-color: rgb(247, 230, 239);
    height: 100px;
    display: block; */
    /* display: none; */
    /* text-align: center; */
    /* background-color: rgb(247, 230, 239);
    height: 350px; */
    /* width: auto; */
}
.menubar ul{
    display: none;
    background-color: rgb(247, 230, 239);
    margin-left: 40%;
    margin-top: 20px;
}
.submenu3{
    margin-left: 300px;
}
.submenu3 div{
    height: 50px;
    margin-top: 20px;
}
.submenu3 ul{
    display: block;
    height: 325px;
    position: relative;
    /* margin-left: 300px; */
    margin-left: 370px;
    /* left: 0; */
    background: grey;
}
.submenu3 img{
    justify-content: center;
    height: 0px;
    width: 0px;
    min-width: 0px;
    padding: 1px 2px;
    border: 1px solid #cce7d0;
    border-radius: 0.5px;
    cursor: pointer;
    justify-content: space-between;
    box-shadow: 6px 6px 6px rgba(0, 0, 0, 0.02);
    margin: 1px 0;
    transition: 0.2s ease;
    justify-content: stretch;
    line-height: 0.3px;
    position: relative;
    display: none;
}
.submenu{
    margin-left: 100px;
}
.submenu div{
    height: 20px;
    margin-top: 30px;
    /* margin-left: -50px; */
} 
.submenu ul li{
    height: 20px;
}
.submenu ul{
    display: block;
    height: 325px;
    position: relative;
    /* margin-left: 400px; */
    margin-left: 500px;
    margin-right: -300px;
    /* margin-right: 0px; */
    /* left: 0;
    right: 0; */
    background: grey;
}
.submenu img{
    justify-content: center;
    height: 0px;
    width: 0px;
    min-width: 0px;
    padding: 1px 2px;
    border: 1px solid #cce7d0;
    border-radius: 0.5px;
    cursor: pointer;
    justify-content: space-between;
    box-shadow: 6px 6px 6px rgba(0, 0, 0, 0.02);
    margin: 1px 0;
    transition: 0.2s ease;
    justify-content: stretch;
    line-height: 0.3px;
    position: relative;
    display: none;
}

.submenu4 {
    margin-left: 100px;
}
.submenu4 div{
    height: 20px;
    margin-top: 40px;
    /* margin-left: -50px; */
} 
.submenu4 ul li{
    height: 20px;
}
.submenu4 ul{
    display: block;
    height: 325px;
    position: relative;
    /* margin-left: 550px; */
    margin-left: 620px;
    margin-right: -570px;
    /* left: 0;
    right: 0; */
    background: grey;
}
.submenu4 img{
    justify-content: center;
    height: 0px;
    width: 0px;
    min-width: 0px;
    padding: 1px 2px;
    border: 1px solid #cce7d0;
    border-radius: 0.5px;
    cursor: pointer;
    justify-content: space-between;
    box-shadow: 6px 6px 6px rgba(0, 0, 0, 0.02);
    margin: 1px 0;
    transition: 0.2s ease;
    justify-content: stretch;
    line-height: 0.3px;
    position: relative;
    display: none;
}


.submenu2 div{
    height: 20px;
    margin-top: 30px;
    /* margin-left: -50px; */
} 
.submenu2 ul li{
    height: 20px;
}
.submenu2 ul{
    display: block;
    height: 325px;
    position: relative;
    /* margin-left: 700px; */
    margin-left: 750px;
    margin-right: -570px;
    /* left: 0;
    right: 0; */
    background: grey;
}
.submenu2 img{
    justify-content: center;
    height: 0px;
    width: 0px;
    min-width: 0px;
    padding: 1px 2px;
    border: 1px solid #cce7d0;
    border-radius: 0.5px;
    cursor: pointer;
    justify-content: space-between;
    box-shadow: 6px 6px 6px rgba(0, 0, 0, 0.02);
    margin: 1px 0;
    transition: 0.2s ease;
    justify-content: stretch;
    line-height: 0.3px;
    position: relative;
    display: none;
}



/* .nadi{
    height: 50px;
    width: 100%;
    display: block;
}
.submenu img{
    height: 20px;
    width: 50px; 
} */
.damn{
    text-decoration: none;
    color: black;
}
.cool{
    text-decoration: none;
}




    .everybody{
        margin-left: 20%;
        margin-top: 3%;
}











.menubar:hover .submenu {display: block;}
.menubar:hover .submenu2 {display: block;}
.menubar:hover .submenu3 {display: block;}
.menubar:hover .submenu4 {display: block;}




}
/* @media screen (min-width: 800px) & (max-width: 1200px){ */

    </style>
</head>
<body>
<section>
    <div class="jk">
        <li><a href="demo.php"><img class="ss" src="hotellogo.jpg"></a></li>
    </div>
    <div class="menubar" id="gone">
        <ul id="myLinks">
            <li class="nav">Home</li>
            <li class="nav"><a>Rooms</a>
                <div class="submenu3" >
                        <ul>
                            <div class="ram">
                                <li>
                                    <a href="#" ><img src="http://images.guangzhouhotel.com/Album/486/485/deluxe_executive_room.jpg"></a>
                                    <a href="" class="damn"><h3 class="cool">Grande Heritage Room</h3></a>
                                </li>
                            </div>
                            <div class="ram">
                                <li>
                                    <a href="#"><img src="http://images.guangzhouhotel.com/Album/486/485/deluxe_room.jpg"></a>
                                    <h3>Lake View Room</h3>
                                </li>
                            </div>
                            <div class="ram">
                                <li>
                                    <a href="#"><img src="https://elledecor.in/wp-content/uploads/2022/02/H5-7.jpg"></a>
                                    <h3>Room with Private Pool</h3>
                                </li>
                            </div>
                            <div class="ram">
                                <li>
                                    <a href="#"><img src="https://indialuxurytrip.files.wordpress.com/2013/06/raj-palace-hotel1.jpg?w=675&h=350"></a>
                                    <h3>Luxury Suite</h3>
                                </li>
                            </div>
                            <div class="ram">
                                <li>
                                    <a href="#"><img src="https://rajasthantourismbuzz.files.wordpress.com/2016/04/raj-palace.jpg?w=584"></a>
                                    <h3>Royal Suite</h3>
                                </li>
                            </div>
                        </ul>
                </div>
            </li>
            <li class="nav"><a>Destinations</a>
                <div class="submenu">
                    <ul>
                        <div class="nadi">
                            <li id="tera">
                                <a href="destudaipur.php" class="ram"><img src="https://www.tajhotels.com/content/dam/luxury/hotels/Taj_Lake_Palace_Udaipur/images/images2021/Hero-Picture.jpg/jcr:content/renditions/cq5dam.web.1280.1280.jpeg"></a>
                                <!-- <h3 id="myhope" class="dropdown-content">Udaipur</h3> -->
                                <a href="destudaipur.php" class="damn"><h3 class="cool">Udaipur</h3></a>
                            </li>
                        </div>
                        <div class="nadi"> 
                            <li id="tera">
                                <a href="destjaipur.php" class="ram"><img src="https://img.traveltriangle.com/blog/wp-content/uploads/2018/01/Fateh-Garh-Fort.jpg"></a>
                                <!-- <h3 id="myhope" class="dropdown-content">Jaipur</h3> -->
                                <a href="destjaipur.php" class="damn"><h3 class="cool">Jaipur</h3></a>
                            </li>
                        </div>
                        <div class="nadi">
                            <li id="tera">
                                <a href="destjodhpur.php" class="ram"><img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/13072230.jpg?k=6173dd201c0980a0adfe442f499ed3c5f1310e50c36aaafa26c8724d08932d8c&o=&hp=1"></a>
                                <!-- <h3 id="myhope" class="dropdown-content">Jodhpur</h3> -->
                                <a href="destjodhpur.php" class="damn"><h3 class="cool">Jodhpur</h3></a>
                            </li>
                        </div>
                        <div class="nadi">
                            <li id="tera">
                                <a href="destjaisalmer.php" class="ram"><img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/450034255.jpg?k=7dec22489fe0679b0e6e2246f1d75894f024aeb40f6d13436ee661f269eb93f1&o=&hp=1"></a>
                                <!-- <h3 id="myhope" class="dropdown-content">Jaisalmer</h3> -->
                                <a href="destjaisalmer.php" class="damn"><h3 class="cool">Jaisalmer</h3></a>
                            </li>
                        </div>
  
                        <div class="nadi">
                            <li id="tera">
                                <a href="destswai.php" class="ram"><img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/340515602.jpg?k=1bb878f7716605e22d679773cd238a10c43e780d2a5af675c10a0170813e9148&o=&hp=1"></a>
                                <!-- <h3 id="myhope" class="dropdown-content">Sawai Madhopur</h3> -->
                                <a href="destswai.php" class="damn"><h3 class="cool">Sawai Madhopur</h3></a>
                            </li>
                        </div>
  
                        <div class="nadi">
                            <li id="tera">
                                <a href="destbikaner.php" ><img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/108113703.jpg?k=b65207bb2fac40e7ba8ea5fa12064a0826302a0a9fd68bd3691f4622c3b1442f&o=&hp=1"></a>
                                <!-- <h3 id="myhope" class="dropdown-content">Bikaner</h3> -->
                                <a href="destbikaner.php" class="damn"><h3 class="cool">Bikaner</h3></a>
                            </li>
                        </div>
  
                    </ul>
                </div>
            </li>
            <li class="nav"><a>Dinning</a>
                <div class="submenu4">
                        <ul>
                            <div>
                                <li>
                                    <!-- <a href="#"><img src=""></a> -->
                                    <a href="bistro.php"><img src="https://images.unsplash.com/photo-1590846406792-0adc7f938f1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80"></a>
                                    <h3>Bistro</h3>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <a href="#"><img src="https://i0.wp.com/theluxurytravelexpert.com/wp-content/uploads/2018/10/THE-LIVINGSTONE-ROOM-THE-VICTORIA-FALLS-HOTEL-ZIMBABWE.jpg?ssl=1"></a>
                                    <h3>Fine Dinning</h3>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <a href="#"><img src="https://media.architecturaldigest.com/photos/56c64bcd00777f0f265e4c25/master/w_3024,h_1789,c_limit/hotel-restaurants-009.jpg"></a>
                                    <h3>cafeteria</h3>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <a href="#"><img src="https://media-cdn.tripadvisor.com/media/photo-s/14/43/75/12/post-hotel-spa.jpg"></a>
                                    <h3>Pub</h3>
                                </li>
                            </div>
                        </ul>
                </div>
            </li>
            <li class="nav"><a>Experience</a>
                <div class="submenu2">
                        <ul>
                            <div>
                                <li>
                                    <a href="culture.php"><img src="https://www.india-a2z.com/images/culture-of-rajasthan.jpg"></a>
                                    <!-- <h3>Culture</h3> -->
                                    <a href="culture.php" class="damn"><h3 class="cool">Culture</h3></a>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <a href="wedding.php"><img src="https://www.theleela.com/prod/content/assets/styles/aio_banner_image_webp/public/aio-banner/dekstop/Culture.jpg.webp?VersionId=LDxouZwB_qcX5Hw11ucZaJ0DfN.CP9mC&itok=d2yaDnqC"></a>
                                    <!-- <h3>Wedding</h3> -->
                                    <a href="wedding.php" class="damn"><h3 class="cool">Wedding</h3></a>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <a href="sangeet.php"><img src="https://www.thegrandindianroute.com/static/seo/blog/b76/3.jpg"></a>
                                    <!-- <h3>Sangeet</h3> -->
                                    <a href="sangeet.php" class="damn"><h3 class="cool">Sangeet</h3></a>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <a href="royalty.php"><img src="https://miro.medium.com/v2/resize:fit:720/format:webp/1*5IKVYPpVXeWTRtllW64IMQ.jpeg"></a>
                                    <!-- <h3>Royalty</h3> -->
                                    <a href="royalty.php" class="damn"><h3 class="cool">Royalty</h3></a>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <a href="foods.php"><img src="https://cdn0.weddingwire.in/article/9606/3_2/960/jpg/66069-traditional-rajasthani-recipes-fabhotels-lead.jpeg"></a>
                                    <!-- <h3>Foods</h3> -->
                                    <a href="foods.php" class="damn"><h3 class="cool">Foods</h3></a>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <a href="wildlyf.php"><img src="https://www.rajasthantouroperator.com/images/Ranthambore-Park.jpg"></a>
                                    <!-- <h3>Wild life</h3> -->
                                    <a href="wildlyf.php" class="damn"><h3 class="cool">Wild life</h3></a>
                                </li>
                            </div>
                        </ul>
                </div>
            </li>
            
            
            
            
            
            
            
            
            
            <li class="nav">Facilities</li>

        </ul>
    </div>
            <li class="babs" href="javascript:void(0);" onclick="myFunction(); mygone(); mychand()">
                <i class="fa fa-bars"></i>
            </li>
</section>


<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<script>
function mygone() {
    var x = document.getElementById("myLinks");
    var y = document.getElementById("gone");
    if (x.style.display === "block") {
    y.style.height = "50%";

  } else {
    y.style.height = "0";
    y.style.display = "none";
  }


}

</script>
<script>
function mychand(){
    var x = document.getElementById("myLinks");
    var y = document.getElementById("gone");
    if (x.style.display === "none") {
    y.style.display = "none";

  } else {
    y.style.display = "block";
  }


}


</script>

<script>

function mygod(){
    var x = document.getElementById("soulful");
    var y = document.getElementById("myhope");
    if (x.style.display === "block") {
    y.style.display = "none";

  } else {
    y.style.display = "block";
  }

}

</script>











</body>

</html>

