@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-xl-12 col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <p><strong>Total Visitor:&nbsp;</strong>{{$totalVisitor}}</p>
                    </div>
                    <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>IP</th>
                                    <th>Server</th>
                                    <th>Software</th>
                                    <th>URI</th>
                                    <th>Port</th>
                                    <th>Method</th>
                                    <th>Time</th>
                                    <th>Visitng</th>
                                </tr>
                            </thead>
                            @php($i=1)
                            <tbody>
                                @foreach($visitorArray as $key => $visitor)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$visitor['ip_address']}}</td>
                                        <td>{{$visitor['server_name']}}</td>
                                        <td>{{$visitor['server_software']}}</td>
                                        <td>{{$visitor['server_request_uri']}}</td>
                                        <td>{{$visitor['server_port']}}</td>
                                        <td>{{$visitor['server_request_method']}}</td>
                                        <td>{{ \Carbon\Carbon::createFromTimestamp($visitor['server_request_time'])
                                                ->format('H:i:s A d-m-Y') }}
                                        </td>

                                        @if(is_numeric($visitor['created_at']))
                                            <td>{{ \Carbon\Carbon::createFromTimestamp($visitor['created_at'])->format('H:i:s A d-m-Y') }}</td>
                                        @else
                                            <td>{{ \Carbon\Carbon::parse($visitor['created_at'])->format('H:i:s A d-m-Y') }}</td>
                                        @endif

                                    </tr>
                                    @php($i++)
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
