Titanic Hayatta Kalma Tahmini (Makine Öğrenmesi)
Bu proje, Kaggle üzerindeki meşhur Titanic veri setini kullanarak, 
yolcuların belirli özelliklerine (yaş, cinsiyet, yolcu sınıfı vb.) göre hayatta kalıp kalmayacaklarını tahmin eden bir makine öğrenmesi modelidir.
🚀 Projenin Amacı
Bu çalışma, bir sınıflandırma problemi olan Titanic yolcu verilerini analiz ederek Lojistik Regresyon (Logistic Regression) algoritması ile tahminleme yapmayı amaçlar.
📊 Kullanılan Teknolojiler ve Veri Seti
Veri Seti: Kaggle Titanic Dataset
Dil: Python
Kütüphaneler: * Pandas & Numpy (Veri manipülasyonu)
Seaborn & Matplotlib (Veri görselleştirme)
Scikit-learn (Model kurma ve değerlendirme)
🛠️ Uygulanan Adımlar
Veri Ön İşleme: Eksik veriler (özellikle yaş sütunu) ortalama değerlerle doldurulmuştur.
Özellik Seçimi: Tahminleme için pclass, age, sibsp, parch ve fare değişkenleri kullanılmıştır.
Model Eğitimi: Veri seti %80 eğitim ve %20 test olarak ikiye ayrılmış, Lojistik Regresyon modeli eğitilmiştir.
Değerlendirme: Model başarısı accuracy_score ve classification_report ile analiz edilmiştir.
📈 Sonuçlar
Modelin genel doğruluk oranı (Accuracy) yaklaşık %73 olarak hesaplanmıştır.
Ölen yolcuları tahmin etme başarısı (Recall): %90
Hayatta kalan yolcuları tahmin etme başarısı (Recall): %50
💡 Gelecek Çalışmalar ve Geliştirmeler
"Bu çalışma, temel bir Lojistik Regresyon modeli üzerine inşa edilmiştir. 
Modelin başarısını daha da artırmak için ilerleyen aşamalarda Rastgele Orman (Random Forest) veya XGBoost gibi daha karmaşık algoritmalar denenebilir.
Ayrıca, yolcu isimlerinden ünvan analizi (Feature Engineering) yapılarak modelin hayatta kalma tahmin gücü daha üst seviyelere taşınabilir."
