{{-- @php
    dd($user_message);
@endphp --}}


<h2>Hello Admin , </h2>
<p> You have new contact mail from  </p>
<p>
  Email : {{ $email }} <br />
  Name : {{ $full_name }}<br />
  Phone : {{ $phone }}<br />
  Subject : {{ $subject}}<br/>
  Message : {{ $user_message}}
</p>

<p> Thank You </p><br/>

