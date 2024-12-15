
@extends('layouts.admin')

@section('title')
الضبط العام
@endsection

@section('contentheader')
الضبط
@endsection

@section('contentheaderlink')
<a herf="{{ route('admin.showSettings.index') }}"> الضبط</a>
@endsection

@section('contentheaderactive')
عرض
@endsection

@section('content')
<div class="row mt-3">
    <div class="col-12">
      <div class="card shadow-sm border-0 rounded-3">
        <!-- Card Header -->
        <div class="card-header bg-gradient-secondary text-white text-end">
          <h3 class="card-title mb-0">
            <i class="fas fa-cogs ms-2"></i> بيانات الضبط العام
          </h3>
        </div>
        <!-- Card Body -->
        <div class="card-body p-4">
          @if(isset($data) && !empty($data))
          <div class="table-responsive">
            <table class="table table-bordered align-middle">
              <tbody>
                <tr>
                  <th class="bg-light text-end" style="width: 30%;">المعرف</th>
                  <td>{{ $data->id }}</td>
                </tr>
                <tr>
                  <th class="bg-light text-end">اسم النظام</th>
                  <td>{{ $data->system_name }}</td>
                </tr>
                <tr>
                  <th class="bg-light text-end">الصورة</th>
                  <td>
                    @if(!empty($data->photo))
                      <img src="{{ asset('assets/admin/uploads/'.$data->photo) }}" alt="لوجو الشركة" style="width: 150px; height: 150px; object-fit: cover;">
                    @else
                      لا يوجد
                    @endif
                  </td>
                </tr>
                <tr>
                  <th class="bg-light text-end">الحالة</th>
                  <td>{{ $data->active ? 'مفعل' : 'غير مفعل' }}</td>
                </tr>
                <tr>
                  <th class="bg-light text-end">التنبيه العام</th>
                  <td>{{ $data->general_alert }}</td>
                </tr>
                <tr>
                  <th class="bg-light text-end">العنوان</th>
                  <td>{{ $data->address }}</td>
                </tr>
                <tr>
                  <th class="bg-light text-end">الهاتف</th>
                  <td>{{ $data->phone }}</td>
                </tr>
                <tr>
                  <th class="bg-light text-end">أُضيف بواسطة</th>
                  <td>{{ $data->added_by }}</td>
                </tr>
                <tr>
                  <th class="bg-light text-end">حُدث بواسطة</th>
                  <td>{{ $data->updated_by_admin }}</td>
                </tr>
                @if(isset($data->created_at) && !empty($data->created_at))
                <tr>
                  <th class="bg-light text-end">تاريخ الإضافة</th>
                  <td>{{ \Carbon\Carbon::parse($data->created_at)->format('Y-m-d h:i A') }}</td>
                </tr>
                @else
                <tr>
                  <th class="bg-light text-end">تاريخ الإضافة</th>
                  <td class="text-muted">لا يوجد تاريخ إضافة</td>
                </tr>
                @endif
                
                @if(isset($data->updated_at) && !empty($data->updated_at))
                <tr>
                  <th class="bg-light text-end">تاريخ التحديث</th>
                  <td>{{ \Carbon\Carbon::parse($data->updated_at)->format('Y-m-d h:i A') }}</td>
                </tr>
                @else
                <tr>
                  <th class="bg-light text-end">تاريخ التحديث</th>
                  <td class="text-muted">لا يوجد تاريخ تحديث</td>
                </tr>
                @endif
                
                <tr>
                  <th class="bg-light text-end">كود المؤسسة</th>
                  <td>{{ $data->com_code }}</td>
                </tr>
              </tbody>
            </table>
          </div>
          @else
            <div class="alert alert-danger text-center">
              لا يوجد بيانات لعرضها!
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
  
@endsection