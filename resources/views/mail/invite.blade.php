@component('mail::message')
    # Hello

    Someone has invited you to join their translation team on {{ config('app.name') }}.

    @component('mail::button', ['url' => $link])
        Accept Invitation
    @endcomponent

    This invitation link will expire in 24 hours.

    If you did not request a translation invitation, please ignore this e-mail.

    Thanks,  
    {{ config('app.name') }}
@endcomponent
