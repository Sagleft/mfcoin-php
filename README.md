mfcoin-php
===============

To the horror, a simple library for sending requests to the MFCoin node via JSON RPC in terrible and outdated PHP (you need more jokes about PHP, write me, add to readme)

Have fun
---------------
1. How to install

    ```php
    composer require sagleft\mfcoin-php
    ```
2. Initialize MFCoin connection/object:

    ```php
    $mfcoin = new MFCoin\Client('username','password');
    ```

    Optionally, you can specify a host, port. Default is HTTP on localhost port 22824.

    ```php
    $mfcoin = new MFCoin\Client('username','password','localhost','22824');
    ```

    If you wish to make an SSL connection you can set an optional CA certificate or leave blank
    ```php
    $mfcoin->setSSL('/full/path/to/mycertificate.cert');
    ````

3. Make calls to mfcoind as methods for your object. Examples:

    ```php
    $mfcoin->getinfo();
    
    $mfcoin->getrawtransaction('7ce62a44093ee359d86a1707ecf362925afcc918ba38c837dfa42f89572a6816',1);
    
    $mfcoin->getblock('fbbb5b7f32e562387dc377c24c99778ced80ca726a3cd4bb3bcb13b652f3f6e1');
    ```

4. You can look at other methods in the MFCoin wallet by typing the "help" command or use:

    ```php
    print_r($mfcoin->help());
    ```

Additional Info
---------------
* When a call fails for any reason, it will return false and put the error message in `$mfcoin->error`

* The HTTP status code can be found in $mfcoin->status and will either be a valid HTTP status code or will be 0 if cURL was unable to connect.

* The full response (not usually needed) is stored in `$mfcoin->response` while the raw JSON is stored in `$mfcoin->raw_response`
