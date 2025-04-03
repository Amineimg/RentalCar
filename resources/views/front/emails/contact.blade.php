@component('mail::message')
## {{ __('mail.contact_email_msg') }}

**Subject:** {{ isset($data['subject']) ?  $data['subject'] : 'No Subject' }}

**Name:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

**Message:**
{{ $data['message'] }}

@component('mail::button', ['url' => 'mailto:' . $data['email']])
{{ __("mail.reply_to") }} {{ $data['name'] }}
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
