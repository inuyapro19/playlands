 <div class="table-responsive">
    <table  class="table table-hover table-bordered">
            <thead>
                <th></th>
                <th>#</th>
                <th>Imagen</th>                                                                                           
                <th>Acciones</th>
            </thead>
            <tbody class="sortable" data-entityname="slider">
                @foreach($slider as $slider)
                <tr data-itemId="{{{ $slider->id }}}">
                    <td class="sortable-handle"><span class="glyphicon glyphicon-sort"></span></td>
                    <td class="id-column">{{$slider->id}}</td>
                    <td> <img src="{{asset('uploads/slider/'.$slider->imagen)}}" width="100"> </td>
                                                
                    <td>
                        <form action="{{route('slider.destroy',$slider->id)}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                                                       
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
                                  
    </table>
</div>