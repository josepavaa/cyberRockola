@extends('home.index')
@section('content')
    <div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Send it to Rockola               
            </div>     

             <div class="panel-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-3">
                        <div> 
                        <div class="table-responsive">
                            @if (Session::has('message'))
                                <div class="alert alert-info">{!! Session::get('message') !!}</div>
                            @endif
                            <table class="table table-hover table-striped" id="myTable">
                                <thead>
                                    <tr>                                        
                                        <th>Name</th>
                                        <th>Artist</th>
                                        <th></th>                                                                          
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($songs as $song)
                                        <tr>                                         
                                            <td>{{{ $song->name }}}</td>

                                            <td>{{{ $song->artist->name }}}</td>
                                            <td>                                                
                                                <a class="btn btn-default btn-xs glyphicon glyphicon-music" href="/rocks/{{{$song->id}}}/send"></a>
                                            </td>                                        
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="3">Empty Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <!-- /.table-responsive -->
                        {!! $songs->render() !!}
                    </div>
                </div>             
            </div>                    
        </div>
    </div>
</div>
@endsection