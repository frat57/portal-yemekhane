
# portal-yemekhane

## [](https://github.com/frat57/portal-yemekhane#kurulum)Kurulum

Yemekhane modülünü portal web uygulamasına eklemek için /portal dizinindeki composer.json dosyasına aşağıdaki eklemeleri yapmamız gerekmektedir.

    ....
    "repositories": [
     {
     ....
     {
     "type": "vcs",
     "url": "https://github.com/frat57/portal-yemekhane.git"
     }
    ],
    "require": {
     .... 
     "kouosl/portal-yemekhane": "dev-develop"
    },
    ....

portal-theme klasörünü de  [https://github.com/frat57/portal-theme.git](https://github.com/frat57/portal-theme.git)  linkindeki dosyalar ile değiştirildikten sonra ise composer update yapılabilir.

Modülün yüklenmesinin ardından kullanıcı ve yönetici panellerinin çalışması için gerekli olan "foods" ve "Listem" tablolarını, verilen migrationlar ile yükleyebiliriz. Bu tabloların portal ile gelen tablolar ile key bağlantısı olduğu için gerekli user tablosunun önceden yüklenmiş olması gerekmektedir.

Modül tabloları için migrate kodu:

    php yii migrate --migrationPath=@vendor/kouosl/portal-yemekhane/migrations --interactive=0

Yüklenen tabloları ve foreign keyleri silmek için kullanılan migrate kodu:

    php yii migrate/down --migrationPath=@vendor/kouosl/portal-yemekhane/migrations --interactive=0

Yukarıdaki gibi belirtilmiştir. Bunun dışında başlamadan önce /phpmyadmin urlsinden foods tablosuna test için kayıt oluşturabilirsiniz. 
Sistemde bulunan ve kayıt olan tüm kullanıcılar admin sayılmaktadır.

## [](https://github.com/frat57/portal-yemekhane#%C3%B6zellikler)Özellikler

-   Layoutlar düzenledi.
-   Basit bir çeviri sistemi kuruldu
-   Widgetlar oluşturuldu
-   Css dosyaları eklendi.
-   Tarihe göre yemek listeleme yapıldı ve tüm kullanıcılara admin yetkisi verildi.
-   Admin olmayan kullanıcılar sadece yemek listesi görebilir.

## [](https://github.com/frat57/portal-yemekhane#tan%C4%B1t%C4%B1m)Tanıtım

-Yemekhane modülünde kullanıcı yemek listelerini görüntüleyebilir veya sisteme kayıt olup admin yetkileriyle yemek ekleme,silme,güncelleme ve önizleme yetkilerine sahip olabilir.

-   Modülümüzü kullanmak için giriş yaptıktan sonra yemekhane sayfamızı açmaya hazırız. Bunun için navbarı ve ya verilen linki kullanabiliriz.  
    ![yemeklist](https://user-images.githubusercontent.com/35110958/50739569-82299880-11f3-11e9-9102-b9fc49f48c4a.PNG)
https://user-images.githubusercontent.com/35110958/50739569-82299880-11f3-11e9-9102-b9fc49f48c4a.PNG
-   Sayfa açıldıktan sonra bugünün tarihindeki yemek listesi  yukarıdaki şekilde görülür.
    
-   Üst kısımdaki navbardan ya da verilen linkten admin sayfasına girebilir.  
    [Admin/yemekhane](http://portal.kouosl/admin/yemekhane)  ![ekran alintisi](https://user-images.githubusercontent.com/35110958/50739950-febe7600-11f7-11e9-9e93-4dc5903b9b23.PNG)
 https://user-images.githubusercontent.com/35110958/50739950-febe7600-11f7-11e9-9e93-   	4dc5903b9b23.PNG
-   Eğer Kullanıcı girişi yapılmamışsa direk yönlendirme bu şekildedir. Verilen linkten login sayfasına girebilir.  ![girisekrani](https://user-images.githubusercontent.com/35110958/50739959-3e855d80-11f8-11e9-825c-98a716a7ab96.PNG)
    https://user-images.githubusercontent.com/35110958/50739959-3e855d80-11f8-11e9-825c-98a716a7ab96.PNG
    
- Giriş yapıldıktan sonra ki Admin panelimiz CRUD sayesinde oluşturulmuştur içerisinde düzenlemeler yapılmıştır.

-  Aşağıdaki Linkten Admin menüsüne ulaşılabilir.
    [Admin/yemekhane/foods](http://portal.kouosl/admin/yemekhane/foods)  ![admin](https://user-images.githubusercontent.com/35110958/50739977-9754f600-11f8-11e9-8e78-bcc537d6ae04.PNG)

    
-  Burada ki Admin panelimizde ise yemek ekleme,düzenleme,silme,değiştirme gibi seçeneklerimiz sayesinde düzenlemeler yapabiliriz.
-   Modül için theme kısmında değişiklikler yapılmıştır.İçerisine Css kodu eklenmiştir.
