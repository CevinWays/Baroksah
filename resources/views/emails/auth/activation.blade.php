@component('mail::message')
# Aktivasi Email Anda

Terimakasih sudah mendaftar akun di Baroksah.
Silahkan Aktivasi Email Anda.

@component('mail::button', ['url' => route('auth.activate',[
    'token' => $user->activation_token,
    'email' => $user->email,
    ])
])
Aktivasi
@endcomponent

Salam,Cevin Ways<br>
{{ config('app.name') }}
@endcomponent
