# kendini tanıt- Web Teknolojisi Projesi
![This is an image](/assets/images/gh_01.png)
#
## Proje Kapsamı ve Perspektif
Proje Amacı

Derste öğrenilen bilgiler (HTML, CSS, Javascript vb.) kullanılarak bir web sitesi geliştirilmesi
Proje Detayları

Öğrenciler bireysel olarak kendilerini ve memleketlerini tanıtan kişisel bir web sitesi uygulaması geliştireceklerdir.
Site tasarımı olarak Bootstrap içeren responsive (çözünürlüğe göre değişen tasarım) (hazır tema kullanılamaz) bir yapı kullanılmalıdır.
Hakkında sayfası giriş sayfası niteliğinde olmalı, sayfa sahibinin kendini tanıtan bilgiler (Hobiler, Etkinlikler vb ) , sevdiği spor,etkinlik vb ait resimler, linkler vb. içermelidir.

Eğitim bilgilerini içeren CV niteliğinde samantic tagların kullanıldığı özgeçmiş sayfası olmalıdır.
Şehrim şeklinde bir sayfa olmalı, bu sayfada memletinize ya da sevdiğiniz şehre ait bilgiler yer almalıdır. (Şehrin nufusu, gezilecek yerler vb) Sayfanın başında ya da sonunda en az 4 resimden oluşan bir slider yer almalıdır. Slider’da yer alan resimlere tıklandığında ilgili resimlere ait içeriklere link olmalıdır.(İçerikler ayrıntılı olmadan site içersinde yer almalı)

Mirasımız linkli bir sayfa ile, şehre ait kültürel miras niteliğindeki önemli bir eser; ya da Takımımız linkli bir sayfada şehrin takımı (Futbol,Basketbol vb branş farketmez) html elamanları kullanılarak tanıtılmalıdır.

İlgi alanlarım isminde bir sayfada, ilgi alanlarınız çerçevesinde (film, spor vb) internetten bulduğunuz ücretsiz bir API servisinden veri alınıp gösterilmelidir.

Sitede bir login sayfası yer almalıdır. Login sayfasında öğrenci numaranıza ait kullanıcı adı (örneğin b1812100001@sakarya.edu.tr) ve şifre (şifre “b1812100001” gibi herkesin domain içermeyen numarası olmalı) bir php sayafasına post edilip burada kullanıcı bilgileri gönderilen sayfada tanımlanan değişkenler ile kontrol edilmelidir. Eğer kontrol işlemi başarılı ise post edilen sayfada Hoşgeldiniz “b1812100001” gibi bir mesajla login işleminin başarılı olduğu bildirilmeli, login işlemi başarısız ise kullanıcı login sayfasına geri yönlendirilmelidir. Aynı zamanda login sayfasında kullanıcı adı ve şifre alanının boş geçilmemesi ve kullanıcı adının mail adresi olup olmadığı kontrol edilmelidir.

Sitede form elamanları içeren bir iletişim sayfası olmalıdır.

İletişim sayfası tüm form elemanlarını içermeli, formun tüm elamanlarının elemanın özelliğine göre seçim yada veri girişi yapılacak şekilde gönderilmesi sağlanmalıdır.

İletişim formundaki gerekli kontrol işlemleri (boş mu, e-mail formatında mı vb.) javascript kullanılarak denetlenmelidir. (Html elemanlarına ait dahili denetimler kabul edilmeyecekitir)

Form, temizle ve gönder butonları içermelidir.

Gönderilen form elemanlarına ait bilgiler başka bir sayfada görüntülenmelidir.

Projenin içindeki stiller (renk, yazı tipi, vs.) ayrı bir stil dosyasında tutulmalıdır.

GitHub üzerinde bir proje oluşturulup (proje herkese açık olmalı) ilk etapta proje hakkında kısa bir bilgi dökümanı GitHub’a yüklenmelidir. Proje ilerledikçe, gelişmeler GitHub’a yüklenmeye devam edilmelidir. (Proje teslim edilmeden GitHub’da farklı tarihlerde minimum 10 commit olmalıdır. Daha az commit olması durumunda bu kısımdan puan verilmeyecektir)

1.Proje bölümüne GitHub proje linki ile beraber kısa bilgi dökümanı sistemde verilen 1. Proje bölümünde belirtilen son tarihe kadar gönderilmelidir.

Proje hosting hizmeti veren bir sitede yer almalıdır. İnternette pek çok ücretsiz (tercihinize göre ücretli de olabilir) host hizmeti veren site mevcuttur. (Örneğin https://tr.000webhost.com/ ya da başka bir siteye projelerinizi yükleyip bu siteler tarafından size verilen subdomainler dahilinde, sitenize internetten ulaşabilirsiniz. Ayrıntılı açıklama duyurular kısmında yer alacaktır.)

Proje Teslimi

Sitenin kodları ve veri dosyaları teslim edilmelidir.

Proje hakkında rapor hazırlanmalıdır.

Kapak sayfasında ders adı, şube, dersi veren öğretim elemanı, ödevin konusu, ödevi hazırlayanın ad soyad ve öğrenci numarası, github linki ve projenin host edildiği link yer almalıdır.

Raporda projenin her bir menüsüne ait ekran görüntüleri olmalı ve her bir menüye ait bir kaç cümlelik açıklama yer almalıdır.
PROJE TESLİMİ: Dönemin son haftasından önce sabis üzerinden açılacak olan Proje 3’e tüm proje kodları ve dökümanları yüklenip, proje; finalden önceki son ders saatinde (ders saat aralıklarını geçebilir) sabisten alınacak randevu ile ilgili ders hocasına sunulacaktır.

Sunuma katılmayan öğrenciler projelerini tamamlayıp sisteme yükleseler dahi puan alamazlar. Sunum saatleri dışında proje değerlendirmesi yapılmayacaktır.

Proje bölümlere ayrılarak 3 adet proje değerlendirmesi, bu bölümlere verilen puanlar çerçevesinde gerçekleştirilecektir.
#
## Kısaca Proje
Proje, kimlik doğrulamasını kanıtlamak için bir oturum açma sayfasıyla başlayan birden çok sayfadan oluşur.

Başarılı bir girişten sonra, ziyaretçiye bir karşılama mesajı görünür ve onu sitenin ana sayfasına yönlendirir.

Ana sayfa, site sahibi, hobileri, beğendiği şeyler ve varsa ekstra benzerleri hakkında kısa bilgiler içeren Hakkımda sayfasıdır.

Diğer sayfalar şunlardır:
- CV sayfası: site sahibinin eğitim ve becerilerinden bahseder.
- İlgi Alanlarım sayfası: filmler hakkında ücretsiz bir API odaklı veri gösterir.
- Benim Şehrim sayfası: sahibinin en sevdiği şehir hakkında bilgi gösterir, burada doğup büyüdüğü şehir olacaktır.
- Eski sayfa: eski bir şehirden bahseder, burada yukarıdaki aynı şehrin antik tarihi olacak.
- İletişim sayfası: Ziyaretçilerin site sahibine mesaj göndermesini sağlayan sayfa. Alan doğrulamasını kanıtlamak için göndermeden önce mesaj verileri filtrelenecektir. Başarılı bir şekilde gönderildikten sonra gönderilen veriler gösterilecektir.

##
## Devam edecek!
- [ ] Daha fazla güncelleme hazır olduğunda daha fazla bilgi ayarlanacak :+1:
##
Web sitemi ziyaret edin:


