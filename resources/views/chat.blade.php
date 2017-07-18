<!-- resources/views/chat.blade.php -->

@extends('layouts.main')

@section('main-content')
    <!-- Chat box -->
    <div class="row">
        <section class="col-lg-7 connectedSortable ui-sortable">
            <div class="box box-success">
                <div class="box-header">
                    <i class="fa fa-comments-o"></i>

                    <h3 class="box-title">Chat</h3>

                    <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                        <div class="btn-group" data-toggle="btn-toggle">
                            <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                        </div>
                    </div>
                </div>
                <div class="box-body chat" id="chat-box">
                    <!-- chat item -->
                    <chat-messages :messages="messages"></chat-messages>
                </div>
                <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
                <!-- /.chat -->
            </div>
        </section>
    </div>
    <!-- /.box (chat box) -->
@endsection