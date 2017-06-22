@extends('layouts.app')

@section('content')
    <?php
    //require('Pusher.php');

    $options = array(
        'cluster' => 'ap1',
        'encrypted' => true
    );
    $pusher = new Pusher(
        'ba656ac0a549f9760ff7',
        '2f5d4f2940ac583fdd92',
        '356683',
        $options
    );

    $data['message'] = 'hello world';
    $pusher->trigger('my-channel', 'my-event', $data);
    ?>
    <example></example>
    <passport-clients></passport-clients>
    <passport-authorized-clients></passport-authorized-clients>
    <passport-personal-access-tokens></passport-personal-access-tokens>
@endsection
