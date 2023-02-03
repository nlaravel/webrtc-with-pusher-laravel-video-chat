@extends('layouts.app')

@section('content')

    <video-chat :allusers="{{ $users }}" :authUserId="{{ auth()->id() }}" turn_url="stun:stun.l.google.com:19302?transport=udp"
        turn_username="user" turn_credential="password" />
@endsection
