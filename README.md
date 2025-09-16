# 📨 فرم تماس / ثبت سفارش با PHP

![GitHub repo size](https://img.shields.io/github/repo-size/sahar-hosseini/contact-form-project)
![GitHub last commit](https://img.shields.io/github/last-commit/sahar-hosseini/contact-form-project)
![GitHub language count](https://img.shields.io/github/languages/count/sahar-hosseini/contact-form-project)

این پروژه یک فرم تماس / ثبت سفارش با **HTML و PHP** است که مناسب نمونه کار و رزومه می‌باشد.  
فرم شامل فیلدهای نام، ایمیل، پیام و انتخاب روش پردازش پیام است.

---

## 🎬 پیش‌نمایش فرم

![Form Screenshot](https://raw.githubusercontent.com/sahar-hosseini/contact-form-project/main/screenshot.png)

> ⚠️ اگر می‌خوای می‌تونی به جای تصویر ثابت، یک **GIF کوتاه از پر کردن فرم و انتخاب روش پردازش** هم قرار بدی تا جذاب‌تر باشه.

---

## 📂 ساختار پروژه

- **index.html** : فرم ریسپانسیو و حرفه‌ای  
- **process_mail.php** : ارسال پیام به ایمیل واقعی (نیاز به SMTP)  
- **process_file.php** : ذخیره پیام‌ها در فایل متنی  
- **process_error.php** : شبیه‌سازی خطای تابع mail در لوکال  
- **messages.txt** : فایل ذخیره پیام‌ها (ایجاد می‌شود هنگام ارسال)

---

## ✨ ویژگی‌ها

- فرم کاملاً **ریسپانسیو** و زیبا  
- فیلدها و دکمه‌ها **تراز کامل و یکسان**  
- نمایش موفقیت یا خطای ارسال پیام  
- آماده استفاده روی لوکال یا سرور واقعی  

---

## 🚀 نحوه استفاده

1. پوشه پروژه را در مسیر **htdocs** (XAMPP) یا **www** (WAMP) قرار دهید.  
2. Apache را اجرا کنید.  
3. مرورگر را باز کرده و به آدرس زیر بروید:  
http://localhost/contact-form-project/index.html
4. فرم را پر کرده و روش پردازش پیام را انتخاب کنید:  
   - ارسال ایمیل واقعی  
   - ذخیره در فایل  
   - شبیه‌سازی خطای mail در لوکال  

---

## ⚠️ نکات

- برای ارسال ایمیل واقعی، باید SMTP روی سرور فعال باشد.  
- نسخه ذخیره در فایل مناسب آموزش و تست لوکال است و نیاز به تنظیمات اضافی ندارد.  
- پروژه برای رزومه و نمونه کار GitHub مناسب است و جهت نشان دادن توانایی ها در طراحی فرم و پردازش داده با PHP می باشد.

---

## 🔗 لینک پروژه

[مشاهده پروژه در GitHub](https://github.com/sahar-hosseini/contact-form-project)
