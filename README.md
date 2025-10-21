## cara install
 note taruh di htdocx jika pakai xampp
📥 1. Clone Repository

tinggal clone dulu:

git clone 
cd 

⚙️ 2. Install Composer Dependencies
composer install

⚙️ 3. Install Node Dependencies
npm install


Catatan: Ini akan otomatis menginstall tailwindcss, @tailwindcss/vite, vite, postcss, dll yang sudah kamu simpan di package.json.

🔑 4. Setup File Environment

Buat file .env dari contoh yang sudah ada:

cp .env.example .env

Lalu generate key Laravel:

php artisan key:generate

5.Jalankan Vite (untuk Tailwind)
npm run dev