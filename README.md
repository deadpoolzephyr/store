# store
Store Module

Bu modül computer modülü ile birlikte kullanılmalıdır. Tek başına kullanılmasında sorun olmayacaktır ancak birlikte mantıklı bir program ortaya çıkaracaktır.


Sanal Makine (Vagrant) Kurulumu
Sırasıyla aşağıdaki yazılımlar kurulmalı ve github token üretilmelidir.

VirtualBox
Vagrant
Git
GitHub API token Generate new token'a tıklayarak yeni bir token oluşturulmalıdır.
Yönetici yetkileriyle terminal (komut satırı) açılarak aşağıdaki direktifler uygulanmalıdır.
vagrant plugin install vagrant-hostmanager
Aşağıdaki diinde bulunan vagrant-local.example.yml dosyasının vagrant-local.yml adıyla kopyası oluşturulmalıdır.
@portal/vagrant/config 
GitHub api tokenı vagrant-local.yml dosyasında aşağıdaki şekilde tanımlanmalıdır.
....
github_token: 3ae46db93b308e80f62a9c1e3b16511b19541ad9
....
Vagrant makina çalıştırılarak kurulum başlatlır. Komut portal dizininin içinde çalıştırılmalıdır.
vagrant up
Ardından ssh bağlantısıyla vagrant makinesine bağlantı sağlanır.
ssh -i .vagrant/machines/webgece/virtualbox/private_key vagrant@webgece
Ardından veritabanına modül ile alakalı tabloların yüklenebilmesi için migrate işlemi yapılmalıdır.
php yii migrate/up --migrationPath=@vendor/deadpoolzephyr/computer/migrations
composer require deadpoolzephyr/store
yazılır.

Modüle
http://advanced/backend/web/index.php?r=store/default/index
ile erişilir.
