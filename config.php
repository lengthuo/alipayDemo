<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016091900548725",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEpQIBAAKCAQEAsRsEzH/+TZ0pLKGdXP0uS+S8pNBZNnoW4KSxLTvcPAS6rHHeSkU/moLPZ0uJ0ecy5guwrXcw2u+4V0xxhyuc5Lzi/Y+5PhrllTyWtAZm4rWscgxcvCbs8vq8UKVZaTzpkrxUVqdaEA2/rpp18v59iyBgIlhXq6H+ltx9ahDJloY5oxCwsFCpDF4bRkBPqrLymN6/ZIJb1/ZufJm/kuvrMLo9KWwSO4QTuQScPfyI+zq4cdKDmUrskxuM3alzGljGD9aSAJPmCt0ETc0kTtC4493zBVkl5zM/wYVbYXXqIxoRvCKL0WUvoV2AJ0f9zA01ALd9vhHVrYwE37WQIvaqRQIDAQABAoIBAEVHMGVeW/e4Vnbi8U+Cqi192F0QMxWgRHqzcaskE05W+z6hfDbJR8wFB2R8o/i726kpQX9ZdH7v7sgXWwFpCgJf8NsG8YtdshjijoD1UCG2tzIVq+DdySpy8l8JjyQfc662hLcw14YYGrcOLL1U138otvI4ZHL69z/EGDr5PiHm0IcMiRRvUOyqbSwgTKT3e8dlTYysyeYtdlgjKAAKZ4ggZRNVvfxoOm2wI4F3Wc6i35Y/Zze30UtqMC/pi9+cOL0hycXDCGyh/LAAKKOv3po+i6aMTjGR2yBHcHphn5dUGwlcOIlomGFAOckKNXRK+oWuWgrqJTdA8hkVPDMW3TECgYEA47bwK3eU8Nh0FKip0ZZRbfJtATNowRVnLSxdwAsRNONtGS+mi22gqzo5pDaVMnIqPq3MQLwXWfEVTfixQ2bwT+UWeQeRvUKImIpllpsT30AN5T/LnKXoQjZYSJnIAFPV1zztLXLzgefeTjMNKcOT0Sj97UL7s/8+uuwkrZV7CdMCgYEAxxrFU80pHLOe/jOunGJj09R9HhPCBZ68gZtkx4mWfgkoa47GHM/SzZ0qGmePVD0f1PI/4rAniiHuAPXjau0LydX23xk8LQUZpoA15Z6433NZcQ+mLJEPbV10Z81ezgoG5B+rlVr1J+TzHyrz8WgipNMfYksIOtTdtla2lEJwFIcCgYEAhHDxDQb3DIGIOj/CzVCVOdJHDey9n5d4M/Da8gg90Ln5yS1Ku0teqFgsEFNiwT1fTqc85eW/2yL51iivyNkFKiK+yFPbsu0Qj0/nOAooK6+QpWZOYWSpSmFbRZaTmYUpGY+pDscN099tD6RnooPK5FroHWfZB16MOKGBz6fiMNsCgYEAxi2PW+pJkZf4GW23z1DfrGlEYDuqU428dAUIOtRoRus2oFhsOSFi4eYdkkqiD2cH2B2IGUrdEFDVZX9Z7YQkx7GBGG81xlndPi0/eF6UBVX7IN5CuPlqMaFjzC5Ovyab1VTwpKj0e9EXbV6DkTXlxcme42druaNHS8bj1I6MoOECgYEAteLIXmPQN1ensxKtDJUAplYTMELca7Al7L0hNPzU3/4yp4VxrAyfOR6aU2HgOiwZEgshySgNU7T/Fdg8ex5ETo2cOsTkordOgxXTQ+JW1hCtXvS+1GM8zyvwrBWPVuMGxDIhNeJSj66Yry/fPvN4jY3PqkXkiXWOAVM8WCSHpl0=",
		
		//异步通知地址
		'notify_url' => "http://47.94.138.75/notify_url.php",
		
		//同步跳转
		'return_url' => "http://47.94.138.75/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvVMClNhS+fBst8MpmhNhxR+83PwVBDX67EaNn5/jNG7oZ4n8k3L5YNrNu8t1LD44HEnOBIU5sHFX2BQQhyVYy9UZVznZIXTIH6Nf2l3WgFfVLugGHUy0oOFs1Tx/vt+VDadX3Nxnylch4L8j3hHOlLWY3SY9BZ2ndiDfBQtPw7TaiTAWLZJvspIXe/7GVbkEFgIdMXsg4SPhZaKwqPO3ERsBOoCoc6ouLHOf/0LHKy69q4bLI920Jcny3xR4x4YZdC8Zk0cbLu0ZPgQTPPJS8c8+FUVjGkajygAxIMFNuxBFv0xqqlI5V5TjjI84oZ7AxuL/xdNnjNCHKyk4k3An1QIDAQAB",
		
	
);