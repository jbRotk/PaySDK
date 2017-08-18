<?php
namespace Yurun\PaySDK\Lib\Encrypt;

class AES
{
	public static function encrypt($data, $key)
	{
		return openssl_encrypt($data, 'AES-128-CBC', $key, 0, \str_repeat(chr(0), 16));
	}

	public static function decrypt($data, $key)
	{
		return openssl_decrypt($data, 'AES-128-CBC', $key, 0, \str_repeat(chr(0), 16));
	}
}