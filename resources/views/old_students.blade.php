<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <style>

    * {
        margin: 0;
        padding: 0
    }

    html {
        height: 100%
    }

    p {
        color: grey
    }

    #heading {
        text-transform: uppercase;
        color: #673AB7;
        font-weight: normal
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    .form-card {
        text-align: left
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform input,
    #msform textarea {
        padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        background-color: #ECEFF1;
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #673AB7;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: #673AB7;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;
        float: right
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        background-color: #311B92
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        background-color: #000000
    }

    .card {
        z-index: 0;
        border: none;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: #673AB7;
        margin-bottom: 15px;
        font-weight: normal;
        text-align: left
    }

    .purple-text {
        color: #673AB7;
        font-weight: normal
    }

    .steps {
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right
    }

    .fieldlabels {
        color: gray;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #673AB7
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 33%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f13e"
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f030"
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #673AB7
    }

    .progress {
        height: 20px
    }

    .progress-bar {
        background-color: #673AB7
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }
</style>

    <style>*,*::after,*::before{box-sizing:border-box}html{padding:1rem;background-color:#FFF;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif}#payment-form{width:31.5rem;margin:0 auto}iframe{width:100%}.one-liner{display:flex;flex-direction:column}#pay-button{border:none;border-radius:3px;color:#FFF;font-weight:500;height:40px;width:100%;background-color:#13395E;box-shadow:0 1px 3px 0 rgba(19,57,94,0.4)}#pay-button:active{background-color:#0B2A49;box-shadow:0 1px 3px 0 rgba(19,57,94,0.4)}#pay-button:hover{background-color:#15406B;box-shadow:0 2px 5px 0 rgba(19,57,94,0.4)}#pay-button:disabled{background-color:#697887;box-shadow:none}#pay-button:not(:disabled){cursor:pointer}.card-frame{border:solid 1px #13395E;border-radius:3px;width:100%;margin-bottom:8px;height:40px;box-shadow:0 1px 3px 0 rgba(19,57,94,0.2)}.card-frame.frame--rendered{opacity:1}.card-frame.frame--rendered.frame--focus{border:solid 1px #13395E;box-shadow:0 2px 5px 0 rgba(19,57,94,0.15)}.card-frame.frame--rendered.frame--invalid{border:solid 1px #D96830;box-shadow:0 2px 5px 0 rgba(217,104,48,0.15)}.success-payment-message{color:#13395E;line-height:1.4}.token{color:#b35e14;font-size:0.9rem;font-family:monospace}@media screen and (min-width: 31rem){.one-liner{flex-direction:row}.card-frame{width:318px;margin-bottom:0}#pay-button{width:175px;margin-left:8px}}</style>

</head>
<body>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">التسجيل في الفصل الأول 2022</h2>

                    <form id="msform" action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- progressbar -->
                        <ul id="progressbar" class="d-flex flex-row">
                            <li class="active" id="account"><strong>المعلومات والملاحظات</strong></li>
                            <li id="personal"><strong>التسجيل</strong></li>
                            <li id="confirm"><strong>الدفع والانهاء</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                        <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="fs-title text-center">المعلومات العامة</h2>
                                    </div>
                                </div>

                                <p class="text-right">
                                    أعزاءنا أولياء الأمور.. نفيدكم بأنه تم فتح مجال التسجيل للفصل الأول 2021 للطلاب المنتظمين بنظام التعليم عن بعد وستكون بداية الفصل الدراسي الأول للطلاب والطالبات من تاريخ 29/08/2021م الموافق 21/01/1443هـ إلى 31/12/2021م الموافق 26/05/1443هـ. ملاحظة: للتسجيل في نظام التعليم الفردي (عن بعد) يمكنكم التسجيل في قائمة الانتظار بالضغط هنا. - في حال وجود استفسارات حول آليات سداد الرسوم وخيارات الدفع المتاحة نفيدكم أنه قد تم تخصيص أحد ممثلي قسم الحسابات للرد على استفساراتكم حيال الأمر وتقديم الدعم الكامل عبر المكتب الافتراضي لحل أي عوائق إن شاء الله.. رابط المكتب الافتراضي: https://furqangroup.zoom.us/j/99947595293 الأسئلة الشائعة: / أوقات الاستقبال من (الأحد إلى الخميس): 9:00 صباحا - 10:00 مساء بتوقيت مكة المكرمة (GMT+3) 8:00 صباحا - 09:00 مساء بتوقيت المغرب العربي وفرنسا (GMT+1) 2:00 صباحا - 03:00 مساء بتوقيت نيويورك ( GMT-5) مع تمنياتنا للجميع بالتوفيق والنجاح.
                                </p>

                            </div>

                            <input type="button" name="next" class="next action-button" value="التالي" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">التسجيل</h2>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="std-section">القسم</label>
                                    </div>
                                    <select class="custom-select" name="section" id="std-section" required>
                                        <option selected>اختر...</option>
                                        <option value="1">بنين</option>
                                        <option value="2">بنات</option>
                                    </select>
                                </div>

                                <div class="form-group text-right">
                                    <label for="std-number" class="text-right">الرقم التسلسلي:</label>
                                    <input type="number" min="0" class="form-control" id="std-number" placeholder="الرقم التسلسلي">
                                </div>

                                <div class="form-group text-center">
                                    <button type="button" class="btn btn-primary w-50" id="std-number-search">بحث</button>
                                </div>

                                <div class="form-group text-right" id="std-name-section">
                                    <label for="std-name" class="text-right">الأسم:</label>
                                    <input type="text" min="0" class="form-control" id="std-name" placeholder="..." required>
                                </div>

                                <div class="form-group text-right">
                                    <label for="residence_country">دولة الاقامة:</label>
                                    <select class="form-control"name="residence_country" id="residence_country" required>
                                        <option> - </option>
                                        @foreach($countries as $key => $country)
                                            <option value="{{ $country }}">{{ $country }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group text-right">
                                    <label for="std-email">البريد الالكتروني:</label>
                                    <input type="email" class="form-control" id="std-email" placeholder="البريد الالكتروني" required>
                                </div>
                                <div class="form-group text-right">
                                    <label for="std-email-conf">تأكيد البريد الالكتروني:</label>
                                    <input type="email" class="form-control" id="std-email-conf" placeholder="تأكيد البريد الالكتروني" required>
                                </div>

                            </div>
                            <input type="button" name="next" class="next action-button" value="التالي" />
                            <input type="button" name="previous" class="previous action-button-previous" value="السابق" />
                        </fieldset>

                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">الدفع والانهاء</h2>
                                    </div>
                                </div>

                                <div class="form-group text-right">
                                    <div class="form-check text-right">
                                        <input class="form-check-input w-auto" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label mr-4" for="invalidCheck">
                                            أقر بصحة البيانات السابقة وبأنني اطلعت على كافة الشروط والأحكام وأتعهد بالاتزام بذلك.
                                        </label>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="d-none" id="lunch-modal" data-toggle="modal" data-target="#exampleModal">

                                </button>

                                <hr>

                                <div>
                                    <div class="form-check text-right">
                                        <input class="form-check-input w-auto" type="radio" name="payment_method" id="checkout_gateway" value="checkout_gateway">
                                        <label class="form-check-label mr-4" for="checkout_gateway">
                                            السداد عبر البطاقة الائتمانية--> إجمالي الرسوم الدراسية + البنكية = 300$ (1125 ريال)
                                        </label>
                                    </div>
                                    <div class="form-check text-right">
                                        <input class="form-check-input w-auto" type="radio" name="payment_method" id="hsbc" value="hsbc">
                                        <label class="form-check-label mr-4" for="hsbc">
                                            تحويل دولي (بنك HSBC)--->  إجمالي الرسوم الدراسية + البنكية = 310$ (1162 ريال)
                                        </label>
                                    </div>
                                </div>

                                <div id="hsbc-section-elements" class="d-none text-right">
                                    <br>
                                    <lable>
                                        <strong>طريقة التسجيل:</strong>
                                    </lable>

                                    <table class="table table-bordered">

                                        <tbody>
                                        <tr>
                                            <td>اسم البنك</td>
                                            <td>The Hongkong and Shanghai Banking Corporation Limited (HSBC)</td>
                                        </tr>
                                        <tr>
                                            <td>عنوان البنك</td>
                                            <td>Queens Road Central Hong Kong 1</td>
                                        </tr>
                                        <tr>
                                            <td>رمز السويفت</td>
                                            <td>HSBCHKHHHKH</td>
                                        </tr>
                                        <tr>
                                            <td>اسم المستفيد</td>
                                            <td>FURQAN GROUP FOR EDUCATION AND IT LIMITED</td>
                                        </tr>
                                        <tr>
                                            <td>رقم الحساب</td>
                                            <td>023832223838</td>
                                        </tr>
                                        <tr>
                                            <td>عملة الحساب</td>
                                            <td>دولار أمريكي (USD)</td>
                                        </tr>
                                        <tr>
                                            <td>عنوان المستفيد</td>
                                            <td>Room 409 Beverley Commercial Center Kowloon Hong Kong</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <div class="form-group">
                                        <lable for="money_transfer_image_path">اختر صورة الحوالة:</lable>
                                        <input type="file" class="form-control" style="height: 50px" name="money_transfer_image_path" id="money_transfer_image_path">
                                    </div>

                                    <div class="form-group text-right">
                                        <label for="bank_name">اسم البنك:</label>
                                        <input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="اسم البنك">
                                    </div>

                                    <div class="form-group text-right">
                                        <label for="account_owner">اسم صاحب الحساب (باللغة الانجليزية كما يظهر في البنك):</label>
                                        <input type="text" class="form-control" name="account_owner" id="account_owner" placeholder="اسم صاحب الحساب">
                                    </div>

                                    <div class="form-group text-right">
                                        <label for="transfer_date">تاريخ التحويل:</label>
                                        <input type="date" class="form-control" name="transfer_date" id="transfer_date">
                                    </div>

                                    <div class="form-group text-right">
                                        <label for="bank_reference_number">الرقم المرجعي للعملية:</label>
                                        <input type="text" class="form-control" name="bank_reference_number" id="bank_reference_number" placeholder="الرقم المرجعي للعملية">
                                    </div>

                                </div>

                                <input type="hidden" name="token_pay" id="token_pay">
                                <button type="submit" class="btn btn-primary">ارسال</button>

                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="payment-form" method="POST" action="https://merchant.com/charge-card">
                        <div class="one-liner" style="flex-direction: column;justify-content: space-between;align-items: center;height: 100px;">
                            <div class="card-frame"></div>
                            <button class="btn btn-primary" id="pay-button" disabled>
                                إتمام الدفع
                            </button>
                        </div>
                        <p class="error-message text-center"></p>
                        <p class="success-payment-message text-center"></p>
                    </form>
                </div>
                <div class="modal-footer d-none">
                    <button type="button" class="d-none" id="close-modal" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>

    <!-- add frames script -->
<script src="https://cdn.checkout.com/js/framesv2.min.js"></script>
<script src="{{ asset('app.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function(){

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

//Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
            next_fs.show();
//hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
// for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({'opacity': opacity});
                },
                duration: 500
            });
            setProgressBar(++current);
        });

        $(".previous").click(function(){

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

//Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
            previous_fs.show();

//hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
// for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({'opacity': opacity});
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(curStep){
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width",percent+"%")
        }

        $(".submit").click(function(){
            return false;
        })

        $(document).on('click', 'form #std-number-search', function (e) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('semester.registration.getStudentInfo') }}?std_number=' + $('form #std-number').val() + '&std_section=' + $('form #std-section').val(),
                success: function (data) {
                    $('form #std-name').val(data.name);
                },
                error: function (data){
                    $('form #std-name').val('الرقم التسلسي غير صحيح');
                }
            });
        });

        $(document).on('click', 'form #hsbc', function (e) {
            $("#hsbc-section-elements").removeClass('d-none');
            $("#hsbc-section-elements").show();
            $("#hsbc-section-elements input").prop('required',true);
        });

        $(document).on('click', 'form #checkout_gateway', function (e) {
            $("#hsbc-section-elements").addClass('d-none');
            $("#hsbc-section-elements").hide();
            $("#hsbc-section-elements input").removeAttr('required');
            $("#lunch-modal").click();
        });

    });
</script>

</body>
</html>
