# Medical
خطوات تشغيل المشروع 
خذ نسخة من المشروع باستخدام التعليمة
git clone https://github.com/username/repository.git

بعد ذلك افتحه في vs code 
ثم قم بكتابة composer install

ثم اكتب 
cp .env.example .env

ولا تنسى تعديل قاعدة البيانات إذا توجب ذلك ثم قم بترحيل البيانات باستخدام
php artisan migrate

وأخيرا قم بكتابة هذه التعليمة لتشغيل srver
php artisan serve
