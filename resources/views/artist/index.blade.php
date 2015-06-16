@extends('home.index')
@section('content')
    <div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Artist List
               <div class="pull-right">
                    <div class="btn-group">
                        {!! link_to("artists/create", 'Add', $attributes = array('Class'=>'btn btn-default btn-xs'), $secure = null); !!}                                    
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
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Actions</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($artists as $artist)
                                        <tr>                                         
                                        <td>{{{ $artist->id }}}</td>
                                        <td>{{{ $artist->name }}}</td>
                                        <td>
                                            <a href="/artists/{{{$artist->id}}}/edit">Editar</a>                              
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




