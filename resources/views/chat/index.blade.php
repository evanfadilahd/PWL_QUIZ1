<head>
    <link rel="stylesheet" href="/css/chatCSS.css">
  </head>
<h1>Chat</h1>

<div class="messages">
    @foreach($messages as $message)
        <div class="message">
            <strong>From:</strong> {{ $message->sender->name }}
            <strong>To:</strong> {{ $message->receiver->name }}
            <strong>Message:</strong> {{ $message->message }}
        </div>
    @endforeach
</div>

<!-- Form untuk mengirim pesan -->
<form method="post" action="{{ route('chat.send') }}">
    @csrf
    <input type="hidden" name="receiver_id" value="ID_PENERIMA">
    <textarea name="message" rows="3"></textarea>
    <button type="submit">Kirim</button>
</form>
