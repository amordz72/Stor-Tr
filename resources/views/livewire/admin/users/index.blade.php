<div>
    @section('pageName')
    Gestion Users
    @endsection



    <h1 class='text-center'>صلاحيات المستخدمين</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="box bg-light">
                <hr>
              





                </div><!-- /.box-header -->

                {{-- {{dd($backups)}} --}}

                <hr>

                <div class="box-body">

                    <div class="container">
                        <table class="table table-bordered text-center font-weight-bold">
                            <thead class="table-dark">
                                <tr>
                                    <th>المستخدم</th>
                                    <th>الاميل</th>
                                    <th>تاريخ_التسجيل</th>

                                    <th>الاوامر</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($users as $item)
                                <tr>


                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->created_at->diffForHumans()}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-info" ><i class="fa fa-cloud-download"></i>
                                            تحميل</a>


<a class="btn btn-xs btn-danger" data-button-type="delete" wire:click='delete({{$item->id}})' ><i
                                                class="fa fa-trash-o"></i>
                                            حذف</a>
                                    </td>


                                </tr>
                                @endforeach


                                {{--
                            </tbody>

                            <tr>


                                <td colspan="4"><b>لا توجد نسخ احتياطية</b></td>
                            </tr>

                            </tbody> --}}
                        </table>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div>




</div>
