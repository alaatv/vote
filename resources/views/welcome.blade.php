@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="row">
                    <div class="col alert alert-info" role="alert">

                        <h4 class="alert-heading">
                            پویش بهترین کتاب های کمک آموزشی کنکور 1400
                        </h4>
                        <p>چی بخونم و آلاء برگزار می کنند؛ چهارمین نظرسنجی بزرگ کتاب های کمک آموزشی (ویژه کنکور ۱۴۰۰)</p>
                        <p>این نظرسنجی از 1 مهر تا 10 مهر برگزار می شود و کتاب هایی که در هر درس رتبه های اول و دوم را کسب کنند، با تخفیف ویژه ۲۵٪ در سایت چی بخونم به فروش می رسند.</p>
                        <p>نکته جالب اینکه اگر در طول این بازه ۱۰ روزه، رتبه کتابها عوض شوند، تخفیف ها نیز برای کتاب ها متناسب با آنها اعمال خواهد شد. یعنی اگر کتاب مدنظرتان در بین رتبه های اول و دوم نیست، با رای دادن به آن می توانید شانس ارائه تخفیف برای آن را بالا ببرید. پس حتما در این نظرسنجی شرکت کنید و به دیگران هم اطلاع بدید.</p>
                        <p>ضمنا با شرکت در این نظرسنجی کمک می کنید تا بهترین کتاب های کمک درسی موجود شناسایی و انتخاب برای دوستانتان ساده تر باشد.</p>
                        <p>ضمنا بقیه کتاب ها از تمام ناشرین هم با تخفیف ۲۰٪ در <a href = 'https://www.chibekhoonam.net/'>چی بخونم</a> به فروش می رسند.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto">

                <collapse-group>
                    <div class="text-center">
                        <i class="fa fa-spinner fa-pulse fa-5x fa-fw margin-bottom"></i>
                        <br>
                        در حال دریافت اطلاعات . . . .
                    </div>
                </collapse-group>

            </div>
        </div>
    </div>
@endsection



@section('page-js')

@endsection
