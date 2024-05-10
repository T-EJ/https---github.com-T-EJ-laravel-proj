<!doctype html>
<head>
    <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;

}
.container{
    width 100%;
    height: 100vh;
    background: #3c5077;
    display: flex;
    align-items: center;
    justify-content: center;
}
  
  .btn{
    padding: 10px; 60px;
    background: #fff;
    border: 0;
    outline: none;
    cursor: pointer;
    font-size: 22px;
    font-weight: 500;
    border-radius: 30px;

  }
  .popup{
     width: 400px;
     background: #fff;
     border-radius; 6px;
     position: absolute;
     top: ;
     left: 50%;
     transform: translate(-50%,-50%) scale(0.1);
     text-align: center;
     padding: 0 30px 30px;
     color: #333;
     visibility: hidden;
     transition: transform 0.4s, top 0.4s;
  }
  .open-popup{
    visibility: visible;
    top: 50%;
    transform: translate(-50%,-50%) scale(1);
  }
  .popup img{
    width: 100px;
    margin-top: -50px;
    border-radius: 50%;
    box-shadow: 0 2px;= 5px rgba(0,0,0,0.2);
  }
  .popup h2{
    font-size: 38px;
    font-weight: 500;
    margin: 30px 0 10px;
  }
  .popup button{
    width: 100%;
    margin-top: 50px;
    padding: 10px 0;
    background: #6fd649;
    color: #fff;
    outline: none;
    font-size: 18px;
    border-radius: 4px;
    cursor: pointer;

  }
  </style>
</head>
<body>
    <div class="container">
        <button type="submit" class="btn" onclick="openPopup()">Click Here!</button>
        <div class="popup" id="popup">
            <img src="tick.png">
            <h2>Thank Y0u</h2>
            <p>Your Order has been Successfully Placed. Thanks!</p>
            <button type="button" onclick="closePopup()">OK</button>
            <a href="/myPDF">Download</a>
            <!-- <button><a href="pdf" class="btn btn-primary btn-leg" >DOWNLOAD</a></button> -->
            <!-- <button type="button"><a href="pdf">DOWNLOAD</a></button> -->
        </div>
    </div>  
    <script>
    let popup = document.getElementById("popup");
    function openPopup(){
        popup.classList.add("open-popup");

    }

    function closePopup(){
        popup.classList.remove("open-popup");

    }
    </script>

</body>
</html>