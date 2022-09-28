<?php
  $fp = fopen('sample.csv', 'r');
  $counter = 0;
  while($line = fgetcsv($fp)){
    if($counter>0){
      $csvArray[]=$line;
    }
    $counter++;
  }
  fclose($fp);
  $no=$_GET['no']-1;
  $trueNo = $csvArray[$no][0];
  $date = $csvArray[$no][1];
  $price = $csvArray[$no][2];
  $msg = $csvArray[$no][3]; 
  $noPentaxPrice = ceil($price/1.1);//税抜
  $pentaxPriceDiff = $price-$noPentaxPrice;//消費税
  $noPentaxPrice = number_format($noPentaxPrice);
  $pentaxPriceDiff = number_format($pentaxPriceDiff);
  $price = number_format($price);
?>


<html  lang="ja"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="2113.5">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; text-align: center; font: 32.0px 'Hiragino Sans'; -webkit-text-stroke: #000000}
    p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; font: 13.3px 'Hiragino Sans'; -webkit-text-stroke: #000000}
    p.p3 {margin: 0.0px 0.0px 0.0px 0.0px; font: 13.3px Arial; -webkit-text-stroke: #000000; min-height: 15.0px}
    p.p4 {margin: 0.0px 0.0px 0.0px 0.0px; text-align: right; font: 13.3px Arial; -webkit-text-stroke: #000000}
    p.p5 {margin: 0.0px 0.0px 0.0px 0.0px; text-align: center; font: 32.0px Arial; -webkit-text-stroke: #000000}
    p.p6 {margin: 0.0px 0.0px 0.0px 0.0px; font: 13.3px Arial; -webkit-text-stroke: #000000}
    span.s1 {font-kerning: none}
    span.s2 {font: 13.3px Arial; font-kerning: none}
    span.s3 {font: 32.0px 'Hiragino Sans'; font-kerning: none}
    span.s4 {font: 13.3px 'Hiragino Sans'; font-kerning: none}
    table.t1 {border-collapse: collapse; table-layout: fixed}
    td.td1 {width: 593.0px; border-style: solid; border-width: 1.0px 1.0px 1.0px 1.0px; border-color: transparent; padding: 2.0px 3.0px 2.0px 3.0px}
    td.td2 {width: 99.0px; border-style: solid; border-width: 1.0px 1.0px 1.0px 1.0px; border-color: transparent; padding: 2.0px 0.0px 2.0px 0.0px}
    td.td3 {width: 93.0px; border-style: solid; border-width: 1.0px 1.0px 1.0px 1.0px; border-color: transparent; padding: 2.0px 3.0px 2.0px 3.0px}
    td.td4 {width: 99.0px; border-style: solid; border-width: 1.0px 1.0px 1.0px 1.0px; border-color: transparent; padding: 2.0px 0.0px 2.0px 0.0px}
    td.td5 {width: 93.0px; border-style: solid; border-width: 1.0px 1.0px 1.0px 1.0px; border-color: transparent; padding: 2.0px 3.0px 2.0px 3.0px}
    td.td6 {width: 93.0px; border-style: solid; border-width: 1.0px 1.0px 1.0px 1.0px; border-color: transparent; padding: 2.0px 3.0px 2.0px 3.0px}
    td.td7 {width: 193.0px; border-style: solid; border-width: unset; border-color: black; padding: 2.0px 3.0px 2.0px 3.0px}
    td.td8 {width: 193.0px; border-style: solid; border-width: 1.0px 1.0px 1.0px 1.0px; border-color: transparent; padding: 2.0px 3.0px 2.0px 3.0px}
  </style>
</head>
<body>
<table cellspacing="0" cellpadding="0" class="t1" style="position:relative;margin:0 auto" >
  <tbody>
    <tr>
      <td colspan="6" valign="middle" class="td1">
        <p class="p1"><span class="s1">領収書</span></p>
      </td>
    </tr>
    <tr>
      <td valign="bottom" class="td2" colspan="2">
        <p class="p2"><span class="s1">カッツプロダクション</span></p>
      </td>
      
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td4">
        <p class="p2"><span class="s1">発行日：</span><span class="s2"><span class="Apple-converted-space">&nbsp;</span></span></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p4"><span class="s1"><?php echo htmlspecialchars($date); ?></span></p>
      </td>
    </tr>
    <tr>
      <td valign="bottom" class="td4">
        <p class="p2"><span class="s1">菅原勝文様</span></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td4">
        <p class="p2"><span class="s1">領収書番号：</span><span class="s2"><?php echo htmlspecialchars($trueNo); ?></span></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p4"><span class="s1"></span></p>
      </td>
    </tr>
    <tr>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td5">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td5">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td5">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td5">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
    </tr>
    <tr>
      <td valign="middle" class="td6">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td colspan="2" valign="middle" class="td7">
        <p class="p1"><span class="s1">合計金額</span></p>
      </td>
      <td colspan="2" valign="middle" class="td7">
        <p class="p5"><span class="s1"><?php echo htmlspecialchars($price); ?></span><span class="s3">円</span></p>
      </td>
      <td valign="middle" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
    </tr>
    <tr>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
    </tr>
    <tr>
      <td valign="bottom" class="td2" colspan="2">
        <p class="p2"><span class="s1"><?php echo htmlspecialchars($msg); ?></span></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td4" colspan="2">
        <p class="p2"><span class="s1">藤原太郎</span></p>
      </td>
      
    </tr>
    <tr>
      <td valign="bottom" class="td4">
        <p class="p2"><span class="s1">小計</span></p>
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p4"><span class="s1"><?php echo htmlspecialchars($noPentaxPrice); ?></span><span class="s4">円</span></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td4">
        <p class="p6"><span class="s4">〒</span><span class="s1">023-0456</span></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
    </tr>
    <tr>
      <td valign="bottom" class="td4">
        <p class="p2"><span class="s1">消費税</span></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p4"><span class="s1"><?php echo htmlspecialchars($pentaxPriceDiff); ?></span><span class="s4">円</span></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td rowspan="2" colspan="2" valign="bottom" class="td8">
        <p class="p2"><span class="s1">東京千代田区</span><span class="s2">10-11</span><span class="s1">あきたく</span><span class="s2">202</span></p>
      </td>
    </tr>
    <tr>
      <td valign="bottom" class="td4">
        <p class="p6"><span class="s1">(</span><span class="s4">内訳</span><span class="s1">)</span></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
    </tr>
    <tr>
      <td valign="bottom" class="td4">
        <p class="p6"><span class="s1">10%</span><span class="s4">対象</span></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p4"><span class="s1"><?php echo htmlspecialchars($noPentaxPrice); ?></span><span class="s4">円</span></p>
      </td>
      <td valign="bottom" class="td4">
        <p class="p6"><span class="s1">(</span><span class="s4">消費税</span><span class="s1"> <?php echo htmlspecialchars($pentaxPriceDiff); ?></span><span class="s4">円</span><span class="s1">)</span></p>
      </td>
      <td valign="bottom" class="td3">
        <p class="p3"><span class="s1"></span><br></p>
      </td>
      <td valign="bottom" class="td2" colspan="2">
        <p class="p6"><span class="s1">TEL: 000-1234-5678</span></p>
      </td>
    </tr>
    <tr  style="position:absolute; bottom:5em;right:2em"><td><img src="imprint.png" alt=""></tr></td>
  </tbody>
</table>


</body></html>