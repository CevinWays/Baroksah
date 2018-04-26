<h1>Mohon Untuk dibaca terlebih dahulu</h1>

<h2>Panduan Cara install Project Baroksah</h2>

<ul>
    <li>clone atau download project baroksah</li>
    <li>composer install</li>
    <li>Rename atau copy .env.example file ke .env</li>
    <li>php artisan key:generate</li>
    <li>setting nama database di .env anda</li>
    <li>setting Stripe credentials anda di .env file. STRIPE_KEY dan STRIPE_SECRET (anda perlu mempunyai akun stripe)</li>
    <li>setting APP_URL anda di .env anda.</li>
    <li>setting ADMIN_PASSWORD in your .env file defaultnya adalah 'password' (tanpa petik)</li>
    <li>php artisan baroksah:install. otomatis migrate database dan tabel serta memberi data dummy gambar dan data reksadana</li>
    <li>npm install</li>
    <li>npm run dev</li>
    <li>php artisan serve atau gunakan Laravel Valet untuk mac atau Laravel Homestead untuk linux atau windows</li>
    <li>kunjungi link localhost:8000 di browser</li>
    <li>ketik /admin jika ingin menjadi admin. Admin User/Password: admin@admin.com/password. Admin Web User/Password: adminweb@adminweb.com/password</li>
</ul>