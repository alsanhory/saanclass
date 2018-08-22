<ul>
    <li>إعدادات
        <ul>
            <li>صفحة المعهد</li>
            <li></li>
        </ul>
    </li>
    <li>الدورات التدريبية
        <ul>
            <li><a href='{{URL::to('institute/courses')}}'>دورات المركز</a></li>
            <li><a href="{{URL::to('institute/addnextcourse')}}">اعلان عن دورة</a></li>
            <li>دورات قادمة</li>
            <li>دورات منفذة</li>
        </ul>
    </li>
    <li>المتدربين
        <ul>
            <li>كل المتدربين</li>
            <li>المسجلين حالياً</li>
            
        </ul>
    </li>
    <li>المدربون</li>
    <li>المواد التدريبية</li>
    @if(\Auth::check())
{{\Auth::user()->name}}
@endif


<h2>الدورات القادمة</h2>
<table class='table'>
    <tr>    
        <th>التاريخ</th>
        <th>الدورة</th>
        <th>المدرب</th>
        <th>عدد المسجلين</th>
        <th>القاعة</th>
    </tr>
</table>


<h2>الدورات القادمة</h2>
<table class='table'>
    <tr>    
        <th>التاريخ</th>
        <th>الدورة</th>
        <th>الصورة</th>
        <th>عدد المشاهدة</th>
    </tr>
</table>