# How to Consume Secret from PHP - Apache

## Pada aplikasi ini saya membuat sebuah secret
  * username = admin
  * password = xyhombing
  
## Dimana secret tersebut Saya encode terlebih dahulu ke base64
  `$ echo -n 'admin' | base64`
  
  YWRtaW4=
  
  `$echo -n 'xyhombing' | base64`
  
  eHlob21iaW5n
  
  
Setelah di encode secret tersebut disimpan ke file secret.yaml.

Secret pada file secret.yaml tersebut ingin saya tampilkan dengan aplikasi PHP-Apache.

SELESAI....
