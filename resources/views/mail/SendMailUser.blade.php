<x-mail::message>
# Introduction<br>

{{ $email->subject }}<br>
{{ $email->content }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
