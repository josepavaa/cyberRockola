@extends('home.index')
@section('content')
    <div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Song's List
               <div class="pull-right">
                    <div class="btn-group">
                        {!! link_to("songs/create", 'Add', $attributes = array('Class'=>'btn btn-default btn-xs'), $secure = null); !!}                                    
                    </div>
                </div>       
            </div>     

             <div class="panel-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-3">
                        <div> 
                        <div class="table-responsive">
                            @if (Session::has('message'))
                                <div class="alert alert-info">{!! Session::get('message') !!}</div>
                            @endif
                            <table class="table table-hover table-striped" id="lista">
                                <thead>
                                    <tr>                                        
                                        <th>Name</th>
                                        <th>Artist</th>
                                        <th>Actions</th>                                                                          
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($songs as $song)
                                        <tr>                                         
                                            <td>{{{ $song->name }}}</td>

                                            <td>{{{ $song->artist->name }}}</td>
                                            <td>
                                                <a class="btn btn-default btn-xs glyphicon glyphicon-pencil" href="/songs/{{{$song->id}}}/edit"></a>
                                                <a class="btn btn-default btn-xs glyphicon glyphicon-trash" href="/songs/{{{$song->id}}}/delete"></a>                                                                      
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
                    </div>
                </div>             
            </div>                    
        </div>
    </div>
</div>
@endsection




