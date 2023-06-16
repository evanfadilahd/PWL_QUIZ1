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
<!-- form method="post" action="!{{ route('chat.send') }}">
    @csrf
    <input type="hidden" name="receiver_id" value="ID_PENERIMA">
    <textarea name="message" rows="3"></textarea>
    <button type="submit">Kirim</button>
</form-->

<form method="POST" action="{{ route('chat.send') }}">
    @csrf
    <!--input type="text" name="receiver_id" placeholder="ID Penerima"-->
    <select name="receiver_id">
        <option value="">Pilih Penerima</option>
        @foreach($messages as $message)
            <option value="{{ $message->id }}" style="color: {{ $message->text_color ?? 'black' }}">{{ $message->name }}</option>
        @endforeach
    </select>
    <input type="text" name="message" placeholder="Pesan">
    <button type="submit">Kirim Pesan</button>
</form>
