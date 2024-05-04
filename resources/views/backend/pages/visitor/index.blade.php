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
                                    <th>IP<br>Address</th>
                                    <th>Server<br>Name
                                    </th>
                                    <th>Server<br>Software
                                    </th>
                                    <th>Server Http<br>Referer
                                    </th>
                                    <th>Server<br>Port
                                    </th>
                                    <th>Server Request<br>Method
                                    </th>
                                    <th>Server Request<br>Time</th>
                                    <th>Visitng<br>Time</th>
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
                                        <td>{{$visitor['server_http_referer']}}</td>
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
