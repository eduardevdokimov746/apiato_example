@extends('layouts.main')

@section('content')
{{--    <table class="table table-hover">--}}
{{--        <thead>--}}
{{--            <tr>--}}
{{--                <th scope="col">#</th>--}}
{{--                <th scope="col">{{ __('user::index.table-list-users.first') }}</th>--}}
{{--                <th scope="col">{{ __('user::index.table-list-users.second') }}</th>--}}
{{--            </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}

{{--            @foreach($users as $user)--}}
{{--                <tr>--}}
{{--                    <th scope="row">{{ $loop->iteration }}</th>--}}
{{--                    <td>{{ $user->login }}</td>--}}
{{--                    <td>{{ $user->email }}</td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--    {{ $users->links() }}--}}
    <button id="bb">send</button>
    <script src="{{ asset('js/autobahn.min.js') }}"></script>
    <script>

        $('#bb').click(function(){
            $.ajax({
                url: 'http://custom/users/sad',
                data: {'topic': 'test', 'msg': 'hello world'},
                success: function(data){
                    console.log(data);
                },
                error: function(data){
                    console.log(data);
                }
            });
        });


        // var conn = new WebSocket('ws://127.0.0.1:5555');

        window.conn.onopen = function(e) {
            console.log("Connection established!");
            var data = {'setTopic' : 'test'};
            window.conn.send(JSON.stringify(data));
        };

        conn.onmessage = function(e) {
            console.log(e.data);
        };

    </script>

@endsection
