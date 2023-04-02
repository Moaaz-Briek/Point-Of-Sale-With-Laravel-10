@extends('layouts.admin');
@section('title')
    الضبط العام
@endsection
@section('contentHeader')
    الضبط
@endsection
@section('contentHeaderLink')
    <a href="{{url('admin/adminPanelSetting/index')}}">الضبط</a>
@endsection
@section('contentHeaderActive')
    عرض
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات الضبط العام</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if(isset($data) && !empty($data) )
                        <table id="example2" class="table table-bordered table-hover">
                            <tr>
                                <th class="w-25">اسم الشركة</th>
                                <td>{{$data['system_name']}}</td>
                            </tr>
                            <tr>
                                <th>كود الشركة</th>
                                <td>{{$data['company_code']}}</td>
                            </tr>
                            <tr>
                                <th>حالة الشركة</th>
                                <td>@if ($data['status'] == 1) مفعل @else غير مفعل @endif</td>
                            </tr>
                            <tr>
                                <th>عنوان الشركة</th>
                                <td>{{$data['address']}}</td>
                            </tr>
                            <tr>
                                <th>هاتف الشركة</th>
                                <td>{{$data['phone']}}</td>
                            </tr>
                            <tr>
                                <th>رسالة التنبيه أعلى الشاشة للشركة</th>
                                <td>{{$data['general_alert']}}</td>
                            </tr>
                            <tr>
                                <th>لوجو الشركة</th>
                                <td>
                                    @if (isset($data['photo']) && !empty($data['photo']))
                                        <div class="image">
                                            <img src="{{asset('assets/admin/uploads/'. $data['photo'])}}" alt="لوجو الشركة" class="custom_img">
                                        </div>
                                    @else

                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>تاريخ أخر تحديث</th>
                                <td>
                                    @if($data['updated_by'] > 0 and $data['updated_by'] != null)
                                    @php
                                        $dt = new DateTime($data['updated_at']);
                                        $date = $dt->format("Y-m-d");
                                        $time = $dt->format("H:i");
                                        $newDateTime = date("A", strtotime($time));
                                        $dateTimeType = ($newDateTime == "AM") ? 'صباحاً' : 'مساءاً';
                                    @endphp
                                        {{$date}}
                                        {{$time}}
                                        {{$dateTimeType}}
                                        بواسطة
                                        {{$data['updated_by_admin']}}
                                    @else
                                        لا يوجد تحديث
                                    @endif
                                </td>
                            </tr>
                        </table>
                    @else
                        <div class="alert alert-danger">
                            عفواً لا توجد بيانات لعرضها
                        </div>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.col -->
    </div>
@endsection
