<style>


    @import url('https://fonts.googleapis.com/css2?family=Viga&display=swap');
    
    .navbar-brand {
        font-family: 'Viga', sans-serif;
        font-size: 2rem;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
    
    }
    
    .nav-link {
        text-transform: uppercase;
        margin-right: 90px;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
    
    }
    
    .navbar {
        z-index: 1;
    }
    
    .navbar-brand,
    .nav-link {
        color: white !important;
    }
    
    
    
    /* Ketika di sorot */
    .nav-link:hover::after {
        content: "";
        display: block;
    
        border-bottom: 3px solid cornflowerblue;
        padding-top: 5px;
        width: 50%;
        margin: auto;
        margin-bottom: -8px;
    
    }
    
    /* akhir */
    
    
    /* Utility*/
    .tombol {
        border-radius: 40px;
        text-transform: uppercase;
    
    }
    
    /* Akhir */
    
    /* Jumbotron */
    
    .jumbotron {
        background-image: linear-gradient(rgba(0, 0, 0, 0.23), rgba(0,0,0,0.23)), url(gambar/heroImg.jpg);
        background-size: cover;
        height: 640px;
        margin-top: -75px;
        background-attachment: fixed;
        position: relative;
    }
    
    .jumbotron .container {
        z-index: 1;
        position: relative;
    }
    
    .jumbotron .display-4 {
        margin-top: 150px;
        font-weight: 200;
        margin-bottom: 30px;
    
    }
    
    .jumbotron .display-4 span {
        font-weight: bold;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
    
    }
    
    .jumbotron::after {
        content: "";
        width: 100%;
        height: 80%;
        display: block;
        position: absolute;
        bottom: 0;
        background-image: linear-gradient(to top, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0));
        background-size: cover;;
    
    }
    
    /* akhir */
    
    
    /* Info Panel */
    
    .info-panel {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 12px;
        margin-top: -200px;
    
        color: white;;
    
        padding: 30px;
    }
    .panel {
        margin-left: 40px;
        border-radius: 60;
        background-image: linear-gradient(rgba(86, 164, 204, 0.2), rgba(86, 164, 204, 0));
    }
    .konten {
        color: white;
        font-weight: bold;
    }
    
    .info-panel h4 {
        font-size: 16px;
        font-weight: bold;
        text-transform: bold;
    
    }
    
    .info-panel p {
        color: #acacac;
        font-weight: 200;
    }
    
    /* Akhir info panel */
    
    /* Working space */
    .working-space {
        margin-top: 120px;
    }
    .warnain {
        background-image: linear-gradient( rgba(136, 222, 255,0.5), rgba(136, 222, 255,0.5));
    }
    .working-space h3 {
        font-size: 52px;
        font-weight: 200;
        text-transform: uppercase;
        margin-top: 30px;
    }
    .pembungkus{
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;;
        
    }
    .pembungkus:hover {
    
        transition: 0.8s;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    
    .working-space h3 span {
        font-weight: 500;
    }
    .gambar{
        margin-left: 80px;
        position: relative;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .judul{
        margin-bottom: 70px;
        font-weight: bold;
    }
    .gambar1{
        margin-left: 70px;
    }
    .gambar2{
        z-index: 1;
        margin-top: -300px;
        position: relative;
        margin-left: 500px;
    }
    .gambar3 {
        margin-top: -300px;
        float: right;
        z-index: 2;
        position: relative;
        margin-right: 50px;
    }
    .gambar5 {
        margin-top: -70px;
        margin-left: 80px;
    }
    #gambar3 {
        border-radius: 20px;
    }
    .gambar4 {
        margin-top: -290px;
        position: relative;
        z-index: 200;
        margin-left: 284px;
    }
    #gambar4,#gambar5 {
        border-radius: 20px;
    }
    
    #gambar2,#gambar1{
        width: 500px;
        border-radius: 20px;
    }
    
    .working-space p {
        font-size: 18px;
        color: #acacac;
        font-weight: 200;
        margin: 25px 0;
    }
    
    /* akhir working space */
    
    
    /* Testimoni */
    .testimoni {
        margin-top: 100px;
       
    }
    
    .testimoni h5 {
        text-align: center;
        font-weight: 200;
        font-style: italic;
        font-size: 2rem;
    }
    
    
    
    .testimoni figure h5 {
        font-size: 16px;
        font-weight: bold;
        font-style: normal;
        color: #1c2c5d;
    
    }
    
    
    .testimoni figure p {
        font-size: 12px;
        color: #acacac;
        margin-top: -5px;
    
    }
    
    .testimoni figcaption {
        text-align: center;
    }
    
    .testimoni figure img {
        width: 60px;
        margin: 20px 10px 10px;
        opacity: 0.7;
    }
    
    .testimoni figure img.utama {
        width: 90px;
        margin: 20px 15px 10px;
        opacity: 1;
        margin-top: 5px;
    }
    
    /* akhir */
    
    
    /* iformasi */
    .informasi {
        margin-top: 120px;
        margin-left: 20px;
        position: relative;
        overflow: auto;
        
    }
    .Informasi h3 {
        font-size: 52px;
        font-weight: 200;
        text-transform: uppercase;
        margin-top: 30px;
    }
    
    .Informasi h3 span{
        font-weight: 500;
    }
    .Informasi p {
        font-size: 18px;
        color: #acacac;
        font-weight: 200;
        margin: 30px 0;
    }
    .tengah {
        float: right;
        margin-top: -350px;
        position: relative;
        margin-right: 20px;
    }
    
    /* #tangan{
        width: 500px;
        
        
    } */
    
    #google {
        width: 200px;
    }
    #tangan {
        width: 500px;
    
    }
    .google {
        margin-left: 500px;
        position: relative;
        margin-top :-500px;
       
    }
    .google2 {
        text-align: center;
        justify-content: center;
        position: relative;
    
    }
    
    footer {
        margin-top: 50px;
    }
    /* .footer {
        margin-top: 500px;
    } */
    /* 
    .tangan {
        margin-bottom: -102px;
        position: relative;
    } */
    
    /* .warna {
    
        
        
    }
    */
    .tangan {
        margin-top: 40px;
        position: relative;
        margin-left: -60px;
    }
    
    .aplikasi {
        margin-bottom: 0;
        margin-top: 250px;
        background-image: linear-gradient( rgba(136, 222, 255,0.5), rgba(136, 222, 255,0.5));
        background-size: cover;
        box-sizing: border-box;
    
    }
    .keterangan {
        font-size: 12px;
        color: black;;
        text-align: center;
        
    
    }
    /* .keterangan {
        overflow: auto;
        float: right;
        
        margin-left: 400px;
    
    
        font-weight: 200;
        
    }  */
    
    
    
    /* Responsive */
    @media screen and (max-width: 768px) {
    
        .pembungkus {
            overflow: auto;
            
        }
        .tengah h3{
            text-align: center;
        }
        .Informasi {
            text-align: center;
        }
        .taro {
            margin-top: 500px;
        }
        #gambar1,#gambar2,#gambar3,#gambar4,#gambar5 {
            width: 150px;
        }
        .gambar1 {
            position: relative;
    
        }
        .taro {
            width: 400px;
        }
        .nav-link {
            text-transform: none;
        }
        .jumbotron {
            margin-top: 0;
            height: 540px;
        }
    
        .jumbotron .display-4 {
            font-size: 2rem;
        }
    
        .nav-link:hover::after {
    
            display: none;
    
        }
        #tangan {
            width: 200px;
         
        }
        .tangan {
            position: relative;
            margin-bottom: -170px;
        }
        .google {
            margin-left: 150px;
            position: relative;
          
        }
        .tengah {
            position: relative;
            float: none;
            margin-top: 20px;
            margin-right: 20px;
        }
       
    
        .info {
            text-align: center;
        }
        .keterangan {
            margin-top:20px ;
            text-align: center;
        }
        .keterangan h3{
            font-size: 20px;
    
        }
        #google {
            width: 50px;
        }
        .google {
            position: relative;
            margin-top: -20px;
            margin-left: 2px;
            z-index: 3;
        }
        .google2 {
            position: relative;
            margin-left: 150px;
            margin-top: -20px;
        }
    
        .Informasi{
            text-align: center;
        }
    
    
        .testimoni h5 {
            font-size: 24px;
        }
        
    
    
        .navbar-brand,
        .nav-link {
            color: black !important;
        }
    
    }
    </style>
    
    
    
    