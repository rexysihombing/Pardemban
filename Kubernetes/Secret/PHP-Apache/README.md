#Menampilkan Secret Melalui PHP-Apache

Buat secret manual
$ echo -n 'admin' | base64
YWRtaW4=
$ echo -n 'xyhombing' | base64
eHlob21iaW5n

Selanjutnya:
 - Create secret.yaml
   # kubectl create -f secret.yaml
 - Create deployment.yaml
   # kubectl create -f deployment.yaml
 - Create service.yaml
   # kubectl create -f service.yaml
   
Finish
###Cek Browser
xyhombing.me:31212
