<?php
$CryptoPrincipali = array(
   'BTC' => array ( 'balance' => 1 ),
   'ETH' => array ( 'balance' => 1 ),
   'EOS' => array ( 'balance' => 1 ),
   'LTC' => array ('balance' => 1),
   'XLM' => array ( 'balance' => 1 ),
   'ADA' => array ( 'balance' => 11 ),
   'MIOTA' => array ( 'balance' => 1 ),
   'NEO' => array ( 'balance' => 1),
   'USDT' => array ( 'balance' => 1),
   'XMR' => array ( 'balance' => 1 )
);
// ok now hit the api...
$coinbasePublicAPI = 'https://api.coinmarketcap.com/v1/ticker/';
$coinData = file_get_contents($coinbasePublicAPI);
$coinData = json_decode($coinData, true);
$numeroCryptoPrincipali = sizeof ($coinData);
$portfolioValue = 0;

?>
<div class="cryptorivista-submenu colore-sfondo-secondario nav-scroller box-shadow fixed-top" style="z-index:99;margin-top:54px;margin-bottom:200px">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#CR-Submenu" aria-controls="CR-Submenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " style="background-color:#f5f5f5;" id="CR-Submenu">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <div class="row"> <?php for ( $xx=0; $xx<$numeroCryptoPrincipali; $xx++) { 
            $thisCoinSymbol = $coinData[$xx]['symbol'];
            $coinHeld = array_key_exists($thisCoinSymbol, $CryptoPrincipali);
            if( $coinData[$xx]['percent_change_24h'] > 0){
                $stato_crypto="fa fa-arrow-up text-success";
            } else {
                $stato_crypto="fa fa-arrow-down text-danger";
            }
            if ( !$coinHeld ) { continue; }
        ?>
            <div class="col-xs-2"><a class="nav-link active testo-nero"><img style="width:25px" src="public_html/img/cryptos/<?php echo strtolower($thisCoinSymbol);?>.png"><?php $thisCoinPrice = $coinData[$xx]['price_usd'];?> : <?php echo  number_format($thisCoinPrice,2);?>  <i class="<?php echo $stato_crypto;?>"></i></a></div>
        <?php } ?></div>
    </ul>
  </div>
</nav>
</div>