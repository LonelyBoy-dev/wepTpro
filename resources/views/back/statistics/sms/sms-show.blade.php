<div class="table-responsive">
    <table class="table">
        <tbody>
            <tr>
                <th scope="row" style="width: 200px;">آیدی</th>
                <td>{{ $sms->id }}</td>
            </tr>

            @if($sms->user)
                <tr>
                    <th scope="row">کاربر پرداخت کننده</th>
                    <td>
                        {{ $sms->user->fullname }} <a class="float-right" href="{{ route('admin.users.show', ['user' => $sms->user]) }}" target="_blank"><i class="feather icon-external-link"></i></a>
                    </td>
                </tr>
            @endif

            <tr>
                <th scope="row">موبایل</th>
                <td>{{ $sms->mobile }}</td>
            </tr>

            <tr>
                <th scope="row">نوع</th>
                <td>{{ $sms->type() }}</td>
            </tr>

            <tr>
                <th scope="row">تاریخ ارسال</th>
                <td>{{ jdate($sms->created_at) }}</td>
            </tr>

            <tr>
                <th scope="row">ip</th>
                <td>{{ $sms->ip }}</td>
            </tr>

            <tr>
                <th scope="row">پاسخ پنل پیامکی</th>
                <td>{{ $sms->response }}</td>
            </tr>
        </tbody>
    </table>
</div>
