<p>Olá, {{ $user->first_name }}</p>
<p>Seja bem vindo ao AgendaMe</p>
{{ config('app.site_url') }}/verificar-email?token={{ (string) $user->token }}
<a href="{{ config('app.site_url') }}/verificar-email?token={{ (string) $user->token }}">Verificar</a>
